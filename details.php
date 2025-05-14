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

  <link rel="stylesheet" href="./style/details.css" /> <!-- Your CSS file for the about here -->
  
</head>
<body>
  <?php include_once('./inc/nav.inc.php'); ?>
  
  <script src="./script/about.js"></script> <!-- Your JavaScript file for the about here -->

<?php

$id = isset($_GET['id']) ? preg_replace('/[^a-zA-Z0-9_-]/','',$_GET['id']) : null;
if (!$id) {
    header('HTTP/1.0 404 Not Found');
    echo '<p>Fehler: Keine Fahrzeug-ID angegeben.</p>';
    exit;
}

// JSON-Datei laden
$jsonPath = __DIR__ . "/assets/Beispielbilder/{$id}.json";
if (!file_exists($jsonPath)) {
    header('HTTP/1.0 404 Not Found');
    echo '<p>Fehler: Daten nicht gefunden.</p>';
    exit;
}
$car = json_decode(file_get_contents($jsonPath), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo '<p>Fehler beim Parsen der Daten.</p>';
    exit;
}
?>

<main>
  <!-- Banner-Galerie -->
<div class="banner_gallery wrapperfull">
  <?php foreach (array_slice($car['images'], 0, 3) as $index => $img): ?>
    <div class="thumb" data-id="<?= $index ?>">
      <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($car['name']) ?>">
    </div>
  <?php endforeach; ?>
</div>


  <!-- Fahrzeugkopf -->
  <section class="vehicle-hero">
    <h1 class="vehicle-title"><?= htmlspecialchars($car['name']) ?></h1>
    <p class="vehicle-meta"><?= htmlspecialchars($car['brand']) ?> • Baujahr <?= htmlspecialchars($car['year']) ?></p>
  </section>

  <!-- Detail-Karten mit Icons -->
  <section class="vehicle-details">
    <ul class="details-list">
      <?php
      // Keys, Labels und Icon-Pfade
      $info = [
        'horsepower'   => ['Leistung',     'assets/icons/horsepower.svg'],
        'torque'       => ['Drehmoment',   'assets/icons/torque.svg'],
        'acceleration' => ['0-100 km/h',   'assets/icons/acceleration.svg'],
        'top_speed'    => ['Höchstgeschw.', 'assets/icons/speed.svg'],
        'color'        => ['Farbe',        'assets/icons/color.svg'],
        'interior'     => ['Innenraum',    'assets/icons/interior.svg'],
        'transmission' => ['Getriebe',     'assets/icons/transmission.svg'],
        'drive'        => ['Antrieb',      'assets/icons/drive.svg'],
        'engine'       => ['Motor',        'assets/icons/engine.svg'],
      ];
      foreach ($info as $key => [$label, $icon]):
        if (!empty($car[$key])): ?>
          <li>
            <div class="icon">
              <img src="<?= $icon ?>" alt="<?= $label ?>">
            </div>
            <div class="content">
              <strong><?= $label ?></strong>
              <span><?= htmlspecialchars($car[$key]) ?></span>
            </div>
          </li>
      <?php   endif;
      endforeach;
      // Beschreibung
      if (!empty($car['description'])): ?>
        <li>
          <div class="icon">
            <img src="assets/icons/description.svg" alt="Beschreibung">
          </div>
          <div class="content">
            <strong>Beschreibung</strong>
            <span><?= htmlspecialchars($car['description']) ?></span>
          </div>
        </li>
      <?php endif; ?>
    </ul>
  </section>
</main>

<?php include_once('./inc/footer.inc.php'); ?>

</body>
</html>