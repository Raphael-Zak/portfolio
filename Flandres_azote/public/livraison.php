<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flandres Azote | Livraison</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/ico" href="./img/Flandres_Azote_icone.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-omnivore/0.3.4/leaflet-omnivore.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>
</head>

<body>
  <div class="container">
    <header>
      <?php require "require/nav-bar.php" ?>
    </header>
    <div class="degrader-header"></div>
    
    <main>

      <div class="container-azote">
        
      </div>

      <div class="container-zone-livraison">
        <div class="localisation">
          <div class="texte-localisation">
            <h1>Zone de Livraison</h1>
            <p>Flandres Azote livre dans le Nord, le Pas-de-Calais, les Ardennes, la Marne, la Belgique et le Luxembourg</p>
          </div>

          <div id="map"></div>
        </div>
      </div>

    </main>

    <footer>
      <?php require "require/footer.php" ?>
    </footer>
  </div>

  <script>
  const map = L.map('map').setView([50.62925, 3.057256], 7);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  // Créer un cercle GeoJSON avec Turf.js
  const circle = turf.circle([3.057256, 50.62925], 190, {
    steps: 100,
    units: 'kilometers'
  });

  // Charger et traiter le fichier europe.geojson
  fetch('./img/europe.geojson')
.then(res => res.json())
.then(europe => {
    const circle = turf.circle([3.057256, 50.62925], 190, {
        steps: 100,
        units: 'kilometers'
    });

    const intersectedFeatures = [];
    const excludedCountries = ['GB', 'GBR', 'UK', 'United Kingdom'];

    europe.features.forEach(feature => {
        // Vérifier si le pays est dans la liste des exclus
        const countryCode = feature.properties?.iso_a2 || feature.properties?.ISO_A2;
        const countryName = feature.properties?.name || feature.properties?.NAME;
        
        if (excludedCountries.includes(countryCode) || 
            excludedCountries.includes(countryName) ||
            (countryName && excludedCountries.some(excluded => countryName.includes(excluded)))) {
            return; // Passer à l'itération suivante
        }

        try {
            const intersection = turf.intersect(circle, feature);
            if (intersection) {
                intersectedFeatures.push(intersection);
            }
        } catch (e) {
            console.warn("Erreur d'intersection :", e);
        }
    });

    if (intersectedFeatures.length > 0) {
        const intersectedCollection = {
            type: 'FeatureCollection',
            features: intersectedFeatures
        };

        L.geoJSON(intersectedCollection, {
            style: {
                color: '#00318b',
                fillColor: '#00cef7',
                fillOpacity: 0.4
            }
        }).addTo(map);
    }
});

</script>

</body>
</html>