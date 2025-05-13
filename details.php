<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="./style/nav_footer.css" />
  <link rel="icon" href="./assets/img/logo/logoc.png" type="image/x-icon">

  <link rel="stylesheet" href="./style/about.css" /> <!-- Your CSS file for the about here -->
  
</head>
<body>
  <?php include_once('./inc/nav.inc.php'); ?>
  
  <script src="./script/about.js"></script> <!-- Your JavaScript file for the about here -->

<?php

$id = isset($_GET['id']) ? preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['id']) : null;
if (!$id) {
    header("HTTP/1.0 404 Not Found");
    echo '<p style="color:red;">Fehler: Keine Fahrzeug-ID angegeben.</p>';
    exit;
}

// Pfad zur JSON-Datei im Ordner assets/Beispielbilder
$jsonPath = __DIR__ . "/assets/Beispielbilder/{$id}.json";
if (!file_exists($jsonPath)) {
    header("HTTP/1.0 404 Not Found");
    echo '<p style="color:red;">Fehler: JSON-Datei für ID "' . htmlspecialchars($id) . '" nicht gefunden.</p>';
    exit;
}

// JSON einlesen und dekodieren
$jsonContent = file_get_contents($jsonPath);
$car = json_decode($jsonContent, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo '<p style="color:red;">Fehler beim Verarbeiten der JSON-Datei: ' . json_last_error_msg() . '</p>';
    exit;
}

?>

<main>
  <!-- Bildgalerie aus JSON -->
  <section class="vehicle-gallery">
    <?php foreach ($car['images'] as $imgPath): ?>
      <figure class="gallery-slide">
        <img src="<?= htmlspecialchars($imgPath) ?>" alt="<?= htmlspecialchars($car['name']) ?>">
      </figure>
    <?php endforeach; ?>
  </section>

  <!-- Fahrzeugkopf aus JSON -->
  <section class="vehicle-hero">
    <h1 class="vehicle-title"><?php echo htmlspecialchars($car['name']); ?></h1>
    <p class="vehicle-meta"><?php echo htmlspecialchars($car['brand']) . ' • Baujahr ' . htmlspecialchars($car['year']); ?></p>
  </section>

  <!-- Detail-Liste aus JSON -->
  <section class="vehicle-details">
    <ul class="details-list">
      <?php
        // Schlüssel, die wir als Details anzeigen wollen
        $infoKeys = ['horsepower','torque','acceleration','top_speed','color','interior','transmission','drive','engine'];
        $labels = [
          'horsepower'   => 'Leistung',
          'torque'       => 'Drehmoment',
          'acceleration' => '0-100 km/h',
          'top_speed'    => 'Höchstgeschwindigkeit',
          'color'        => 'Farbe',
          'interior'     => 'Innenraum',
          'transmission' => 'Getriebe',
          'drive'        => 'Antrieb',
          'engine'       => 'Motor'
        ];
        foreach ($infoKeys as $key) {
          if (!empty($car[$key])): ?>
            <li><strong><?= $labels[$key] ?>:</strong> <?= htmlspecialchars($car[$key]) ?></li>
      <?php   endif;
        }
      ?>
      <!-- Freitextbeschreibung -->
      <?php if (!empty($car['description'])): ?>
        <li style="grid-column:1/ -1"><strong>Beschreibung:</strong> <?= htmlspecialchars($car['description']) ?></li>
      <?php endif; ?>
    </ul>
  </section>
</main>

<?php include_once('./inc/footer.inc.php'); ?>

</body>
</html>