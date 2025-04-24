<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flandres Azote | Matériels cryogéniques</title>
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
      <div class="container-container-produit">
        <div class="titre">
          <h1>Nos réservoirs</h1>
        </div>

        <div class="container-produit">
          <img src="./img/reservoir_presuriser.png" alt="Réservoir présurisé">

          <div class="produit">
            <div class="texte-reservoir">
              <h1>La gamme EUROCYL</h1>
              <p>La gamme EUROCYL de réservoirs cryogénique autopressurisé, entièrement conçue en inox renforcé vous permet de conserver, transporter et distribuer efficacement l'azote. Les EUROCYL sont agréés TPED.</p>
            </div>

            <div class="bottom">
              <p>Consultez la documentation technique de la gamme EUROCYL pour plus de détails.</p>
            
              <a href="./img/doc_reservoir_presuriser.pdf" download="Documentation technique Réservoir présurisé">
                <button class="download-btn">
                  <i class="fas fa-download"></i> Documentation technique
                </button>
              </a>
            </div>
            
          </div>
        </div>


        <div class="container-produit">
          <img src="./img/gamme_spectrum.png" alt="Gamme Spectrum">

          <div class="produit">
            <h1>La gamme SPECTRUM</h1>
            <p>La gamme SPECTRUM dont la capacité de stockage est particulièrement adaptée aux éleveurs a l'avantage d'une très faible consommation d'azote liquide.</p>

            <div class="bottom">
              <p>Consultez la documentation technique de la gamme SPECTRUM pour plus de détails.</p>
              <a href="./img/doc_spectrum.pdf" download="Documentation technique Gamme spectrum">
                <button class="download-btn">
                  <i class="fas fa-download"></i> Documentation technique
                </button>
              </a>
            </div>
          </div>
        </div>

        <div class="container-produit">
          <img src="./img/gamme_yds.png" alt="Gamme YDS">

          <div class="produit">
            <h1>La gamme YDS</h1>
            <p>La gamme YDS de réservoirs cryogéniques super isolés vous permet de conserver et distribuer efficacement l'azote dans le laboratoire.</p>

            <div class="bottom">
              <p>Consultez la documentation technique de la gamme YDS pour plus de détails.</p>
              <a href="./img/doc_yds.pdf" download="Document technique Réservoir présurisé">
                <button class="download-btn">
                  <i class="fas fa-download"></i> Documentation technique
                </button>
              </a>
            </div>
          </div>
        </div>

        <div class="container-produit">
          <img src="./img/gamme_et.png" alt="Gamme ET">
          <div class="produit">
            <h1>La gamme ET</h1>
            <p>La gamme économique ET dont la capacité de stockage est particulièrement adaptée aux éleveurs a l'avantage d'une très faible consommation d'azote liquide.</p>

            <div class="bottom">
              <p>Consultez la documentation technique de la gamme ET pour plus de détails.</p>
              <a href="./img/doc_et.pdf" download="Document technique Réservoir présurisé">
                <button class="download-btn">
                  <i class="fas fa-download"></i> Documentation technique
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container-epi">
        <div class="texte">
          <div class="titre">
            <h1>Nos accessoires</h1>
          </div>

          <p>Les accessoires proposés comprennent des gants cryogéniques pour protéger les mains du froid extrême, des visières pour éviter les projections, des flexibles en inox pour un transfert sécurisé de l’azote liquide, ainsi que des détecteurs de manque d’oxygène pour prévenir les risques liés à l’évaporation dans les espaces confinés.</p>
        </div>
        
        <div class="epi">
          <img src="./img/gants_cryogenique.png" alt="Gants">

          <img src="./img/visiere_protection.png" alt="Visière">

          <img src="./img/flexible_inox.png" alt="Flexible">

          <img src="./img/detecteur_manque_o2.png" alt="Detecteur">
        </div>
      </div>
      
    </main>

    <footer>
      <?php require "require/footer.php" ?>
    </footer>
  </div>

</body>
</html>