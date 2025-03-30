<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/RZ.ico">
    <title>Raphaël ZAKRZEWSKI</title>
  </head>

  <body>
    <header>
      <?php require "require/nav.html"; ?>
    </header>

    <main>
      <section id="intro">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p>Actuellement étudiant en BTS SIO option SLAM</p>
      </section>
      
      <section id="moi">
        <h1>A propos de moi</h1>
        <div class="container-moi">

          <img src="img\portrait.png" alt="">

          <div class="texte">
            <p>Étudiant en BTS SIO option SLAM, je me spécialise dans le développement logiciel et la conception d'applications. 
              Ma formation couvre la gestion de bases de données, le développement web et la création de solutions métiers.</p>

            <p>Mes stages en entreprise m'ont permis d'appliquer ces compétences en contexte professionnel. J'ai pu travailler sur des projets concrets, renforcer mes connaissances 
              et développer mon autonomie dans la résolution de problèmes techniques.</p>

            <p>Rigoureux et passionné d’innovation, je maîtrise le développement full-stack (Java, PHP, SQL) mais aussi le framework Symfony.</p>
          </div>
        </div>
      </section>


      <section id="scolaire">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="titre">
          <h1>Parcours scolaire</h1>
        </div>

        <div class="timeline-container">
          <div class="timeline"></div>
          <div class="checkpoint">
              <div class="content">
                  <h1>BTS SIO (Services Informatiques aux Organisations)</h1>
                  <p><strong>Année :</strong> 2023 - 2025</p>
                  <p><strong>École :</strong> Saint Luc CAMBRAI</p>
                  <p><strong>Option :</strong> SLAM (Solutions Logicielles et Applications Métiers)</p>
                  <p>En cours</p>
              </div>
          </div>
          <div class="checkpoint">
              <div class="content">
                  <h1>Bac Pro SN (Système Numérique)</h1>
                  <p>2020 - 2023 <strong>: Année</strong> </p>
                  <p>Saint Luc CAMBRAI <strong>: École</strong></p>
                  <p>RISC (Réseaux Informatiques et Systèmes Communicants) <strong>: Option</strong></p>
                  <p>Bien <strong>: Mention</strong></p>
              </div>
          </div>
          <div class="checkpoint">
              <div class="content">
                  <h1>Brevet des Collèges</h1>
                  <p><strong>Année :</strong> 2016 - 2020</p>
                  <p><strong>École :</strong> Ostrevant BOUCHAIN</p>
                  <p><strong>Mention :</strong> Très Bien</p>
              </div>
          </div>
        </div>
      </section>

      <section id="pro">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="titre">
          <h1>Expérience professionnelle</h1>
        </div>

        <div class="timeline-container">
          <div class="timeline"></div>
          <div class="checkpoint">
              <div class="content">
                  <h1>Stage 2<sup>ème</sup> année de BTS</h1>
                  <p><strong>Durée :</strong> 5 semaines</p>
                  <p><strong>Entreprise :</strong> Flandres Azote</p>
                  <p>Création d'un site vitrine</p>
              </div>
          </div>

          <div class="checkpoint">
              <div class="content">
                  <h1>Stage 1<sup>ère</sup> année de BTS</h1>
                  <p>5 semaines <strong>: Durée</strong></p>
                  <p>CAF du Nord <strong>: Entreprise</strong></p>
                  <p>Frontend d'une application interne (Vue.js)</p>
              </div>
          </div>

          <div class="checkpoint">
              <div class="content">
                  <h1>Stage de Terminale</h1>
                  <p><strong>Stage 2 :</strong></p>
                  <p><strong>Durée :</strong> 4 semaines</p>
                  <p><strong>Entreprise :</strong> Association Mieux-Vivre</p>
                  <p>Création d'un site vitrine</p>
                  <br>
                  <p><strong>Stage 1 :</strong></p>
                  <p><strong>Durée :</strong> 4 semaines</p>
                  <p><strong>Entreprise :</strong> Association Mieux-Vivre</p>
                  <p>Création d'un site vitrine</p>
              </div>
          </div>

          <div class="checkpoint">
              <div class="content">
                  <h1>Stage de 1<sup>ère</sup></h1>
                  <p><strong>: Stage 2</strong></p>
                  <p>5 semaines <strong>: Durée</strong></p>
                  <p>Mabox <strong>: Entreprise</strong></p>
                  <p>Création d'un site vitrine</p>
                  <br>
                  <p><strong>: Stage 1</strong></p>
                  <p>5 semaines <strong>: Durée</strong></p>
                  <p>Mabox <strong>: Entreprise</strong></p>
                  <p>Création d'un site vitrine (hors ligne)</p>
              </div>
          </div>

          <div class="checkpoint">
              <div class="content">
                  <h1>Stages de 2<sup>nd</sup></h1>
                  <p><strong>Stage 2 :</strong></p>
                  <p><strong>Durée :</strong> 3 semaines</p>
                  <p><strong>Entreprise :</strong> Association Mieux-Vivre</p>
                  <p>Sensibilisation</p>
                  <br>
                  <p><strong>Stage 1 :</strong></p>
                  <p><strong>Durée :</strong> 3 semaines</p>
                  <p><strong>Entreprise :</strong> Lefevre-Élec</p>
                  <p>Installation et maintenance électrique en entreprise</p>
              </div>
          </div>

        </div>
      </section>

      <section id="competence">
        <div class="container-competence">
          
        </div>
      </section>

      <section id="veille">
        <div class="container-veille">
          
        </div>
      </section>

      <section id="tableau">
        <div class="container-tableau">
          
        </div>
      </section>

    </main>

    <section id="footer">
      <?php require "require/footer.html"; ?>
    </section>

    
  </body>

  
  
</html>