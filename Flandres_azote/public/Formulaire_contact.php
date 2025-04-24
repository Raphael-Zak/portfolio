<?php
session_start();

// Créer un jeton CSRF et le stocker dans la session si nécessaire
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Génère un jeton aléatoire
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flandres Azote | Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/ico" href="./img/Flandres_Azote_icone.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header>
        <?php require "require/nav-bar.php" ?>
    </header>

    <div class="degrader-header"></div>

    <main>
      <div class="entete-formulaire">
        
      </div>

      <div class="container-container-formulaire">
        <div class="container-formulaire">
          <div class="formulaire-info">
            <h1>Contactez-nous via les coordonnées ci-dessous ou à l'aide du formulaire</h1>
            <div class="container-contact">
                <img src="./img/phone_icon.png" alt="Téléphone ">
                <p1>03 74 77 00 02</p1>
            </div>
            <div class="container-contact">
                <img src="./img/fax_icon.png" alt="Fax ">
                <p1>03 74 77 00 01</p1>
            </div>
            <div class="container-contact">
                <img src="./img/mail_icon.png" alt="Mail ">
                <p1>contact@flandresazote.fr</p1>
            </div>
            <div class="container-contact">
                <img src="./img/localisation_icon.png" alt="Courrier ">
                <p1>40 Rue de Bazuel – 59360 POMMEREUIL</p1>
            </div>
          </div>

          <div class="formulaire">
            <h1>Formulaire de contact</h1>
            <p>Veuillez remplir le formulaire ci-dessous pour nous contacter. Nous répondrons dans les plus brefs délais.</p>

            <form action="envoie_mail.php" method="POST">
              <!-- Ajout du jeton CSRF dans le formulaire -->
              <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

              <label for="nom">Nom :</label>
              <input type="text" id="nom" name="nom" required>

              <label for="prenom">Prénom :</label>
              <input type="text" id="prenom" name="prenom" required>

              <label for="entreprise">Entreprise :</label>
              <input type="text" id="entreprise" name="entreprise">

              <label for="ville">Ville :</label>
              <input type="text" id="ville" name="ville">

              <label for="telephone">Téléphone :</label>
              <input type="text" id="telephone" name="telephone">

              <label for="email">E-mail :</label>
              <input type="email" id="email" name="email" required>

              <label for="message">Message :</label>
              <textarea id="message" name="message" required></textarea>
              
              <div class="checkbox-container">
                <input type="checkbox" id="consentement" name="consentement" required>
                <label for="consentement">En soumettant ce formulaire, j'accepte que les informations saisies soient utilisées pour me recontacter dans le cadre de ma demande, et j’accepte la 
                <a href="./confidentialite.php" target="_blank">politique de confidentialité</a>.</label>
              </div>

              <button class="submit" type="submit">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    
    <footer>
      <?php require "require/footer.php" ?>
    </footer>
  </div>
</body>
</html>