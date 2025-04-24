<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <a href="index.php">
        <img src="./img/Flandres_Azote_logo.png" alt="Logo / Redirection accueil">
    </a>

    <div class="bouton">

        <a href="./livraison.php" class="<?= htmlspecialchars($currentPage) == 'livraison.php' ? 'active' : '' ?>">
            Livraison d'azote liquide
        </a>

        <a href="./materiels.php" class="<?= htmlspecialchars($currentPage) == 'materiels.php' ? 'active' : '' ?>">
            Matériels cryogéniques
        </a>

        <div class="dropdown">
            <a href="./marches.php" class="<?= htmlspecialchars($currentPage) == 'marches.php' ? 'active' : '' ?>">
                Nos marchés
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6"/>
                </svg>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Dermatologie</a></li>
                <li><a href="#">Cryothérapie</a></li>
                <li><a href="#">Stockage cryogénique</a></li>
                <li><a href="#">Overclocking</a></li>
            </ul>
        </div>

        <a href="./Formulaire_contact.php" class="contact <?= htmlspecialchars($currentPage) == 'Formulaire_contact.php' ? 'active-contact' : '' ?>">
            <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        width="20"
                        height="20"
                        >
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path
                            fill="currentColor"
                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                        ></path>
                    </svg>
                </div>
            </div>
            <span>Nous contacter</span>
        </a>
    </div>
</nav>
