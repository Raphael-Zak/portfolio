<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flandres Azote | Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/ico" href="./img/Flandres_Azote_icone.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Turf.js/6.5.0/turf.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="header-index">
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

      <div class="video-background">
          <video autoplay muted loop playsinline>
              <source src="./img/smoke.mp4" type="video/mp4">
          </video>
          <div class="video-overlay"></div>
        </div>

      <div class="entete">       
        <div class="texte">
            <h1>Livraison d'azote liquide sous 48h</h1>
            <p>Flandres azote livre les Hauts de France, Îles de France et Champagne Ardenne.</p>
        </div>
      </div>
    </div>

    <main>
      <div class="container-service">
        <div class="service">
          <img src="./img/reactivite.png" alt="Icone réactivité">
          <div class="texte">
            <h1>Réactivité</h1>
            <p>Livraison en Hauts de france, Champagne ardenne sous 48h ouvrés.</p>
          </div>
        </div>

        <div class="service">
        <img src="./img/extensible.png" alt="Icone fléxibilité">
          <div class="texte">
            <h1>Flexibilité</h1>
            <p>Livraison de 5 à 1000 litres, avec un large choix de réservoirs.</p>
          </div>
        </div>

        <div class="service">
        <img src="./img/tarif.png" alt="Icone tarification">
          <div class="texte">
            <h1>Tarif personnalisé</h1>
            <p>Nos tarifs s’adaptent à vos choix pour une offre personnalisée.</p>
          </div>
        </div>
      </div>

      <div class="container-container-offre">

        <div class="texte">
          <h1>Découvrez nos offres et services</h1>
          <p>Flandres Azote propose des offres et services adaptés aux besoins en azote liquide, avec un service de livraison, ainsi que des équipements cryogéniques, réservoirs et accessoires.</p>
        </div>

        <div class="container-offre">
          <div class="offre">
            <img src="./img/camion.gif" alt="Gif camion">
            <h1>Livraison d'azote liquide</h1>
            <p>Livraison rapide et sécurisée d’azote liquide sous 48h ouvrés, avec des volumes de 5 à 1000 litres. Zones desservies à découvrir dans "Voir plus".</p>
            <a href="./livraison.php">
              <span class="offre-link-content">
                Voir plus
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.35.498.498 0 0 1-.146.35l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </span>
            </a>
          </div>

          <div class="offre">
            <img src="./img/reservoir.gif" alt="Gif reservoir">
            <h1>Matériels cryogénique</h1>
            <p>Nous proposons une gamme variée de réservoirs adaptés à vos besoins, ainsi que des accessoires indispensables, tels que des équipements de protection individuelle (EPI) pour garantir une manipulation en toute sécurité.</p>
            <a href="./materiels.php">
              <span class="offre-link-content">
                Voir plus
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.35.498.498 0 0 1-.146.35l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="container-container-index-marches">
        <div class="texte">
          <div class="titre">
            <h1>Nos marchés</h1>
          </div>
          <p>Spécialiste de l’azote liquide, Flandres Azote répond aux besoins de nombreux secteurs : médical, scientifique, technologique ou encore sportif. Nos solutions s’adaptent à chaque usage : stockage cryogénique de précision, soins dermatologiques, thérapies par le froid, ou refroidissement extrême pour l’overclocking informatique. Découvrez comment nous accompagnons ces domaines exigeants avec des produits fiables et un service réactif.</p>
        </div>

        <div class="container-index-marches"> 

          <div class="index-marches">
            <img src="./img/reservoir.png" alt="Icône réservoir">
            <div class="texte-marches">
              <h3>Stockage cryogenique</h3>
              <p>Conservation sécurisée d'azote liquide à très basse température.</p>
              <a href="./marches.php">
                <span class="offre-link-content">
                  Voir plus
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.35.498.498 0 0 1-.146.35l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="index-marches">
            <img src="./img/main.png" alt="Icône dermatologie">
            <div class="texte-marches">
              <h3>Dermatologie</h3>
              <p>Traitement localisé de lésions cutanées par le froid intense.</p>
              <a href="./marches.php">
                <span class="offre-link-content">
                  Voir plus
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.35.498.498 0 0 1-.146.35l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="index-marches">
            <img src="./img/cryotherapie.png" alt="Icône cryotherapie">
            <div class="texte-marches">
              <h3>Cryothérapie</h3>
              <p>Amélioration de la récupération et soulagement des douleurs par le froid.</p>
              <a href="./marches.php">
                <span class="offre-link-content">
                  Voir plus
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.35.498.498 0 0 1-.146.35l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="index-marches">
            <img src="./img/cpu.png" alt="Icône overclocking">
            <div class="texte-marches">
              <h3>Overclocking</h3>
              <p>Performances améliorées par un refroidissement extrême.</p>
              <a href="./marches.php">
                <span class="offre-link-content">
                  Voir plus
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 1 1 .708-.708l4 4a.498.498 0 0 1 .146.35.498.498 0 0 1-.146.35l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </span>
              </a>
            </div>
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
