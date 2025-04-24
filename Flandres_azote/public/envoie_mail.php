<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'config.php'; // Fichier séparé pour stocker les identifiants SMTP

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        // Si le jeton n'est pas valide, rejeter la requête
        die('Erreur CSRF : Le jeton CSRF est invalide.');
    } else {

        // Assainissement des entrées utilisateur
        $nom = htmlspecialchars(strip_tags($_POST['nom'] ?? ''));
        $prenom = htmlspecialchars(strip_tags($_POST['prenom'] ?? ''));
        $entreprise = htmlspecialchars(strip_tags($_POST['entreprise'] ?? ''));
        $ville = htmlspecialchars(strip_tags($_POST['ville'] ?? ''));
        $telephone = htmlspecialchars(strip_tags($_POST['telephone'] ?? ''));
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : '';
        $message = htmlspecialchars(strip_tags($_POST['message'] ?? ''));
        $consentement = isset($_POST['consentement']) ? true : false;

        if (empty($nom) || empty($prenom) || empty($email) || empty($message) || !$consentement) {
            die("Erreur : Tous les champs obligatoires doivent être remplis et le consentement doit être donné.");
        }

        // Création d'une instance de PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = SMTP_PORT;

            // Configuration de l'expéditeur et du destinataire
            $mail->setFrom($email, "$prenom $nom");
            $mail->addAddress('contact@flandresazote.fr', 'Flandres Azote');

            // Contenu du mail
            $mail->isHTML(true);
            $mail->Subject = 'Nouveau message de contact';
            $mail->Body    = "
                <h2>Message reçu depuis le formulaire de contact</h2>
                <p><strong>Nom :</strong> $nom</p>
                <p><strong>Prénom :</strong> $prenom</p>
                <p><strong>Entreprise :</strong> $entreprise</p>
                <p><strong>Ville :</strong> $ville</p>
                <p><strong>Téléphone :</strong> $telephone</p>
                <p><strong>Email :</strong> $email</p>
                <p><strong>Consentement RGPD :</strong> " . ($consentement ? 'Oui' : 'Non') . "</p>
                <p><strong>Message :</strong><br>" . nl2br($message) . "</p>
            ";

            $mail->AltBody = 'Message de contact reçu.';
            $mail->send();
            echo 'Message envoyé avec succès.';
        } catch (Exception $e) {
            error_log("Erreur d'envoi de mail : " . $mail->ErrorInfo);
            echo "Erreur lors de l'envoi du message.";
        }
    }
}
?>