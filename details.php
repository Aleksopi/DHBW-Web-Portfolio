<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fahrzeugdetails</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="./style/nav_footer.css" />
  <link rel="stylesheet" href="./style/details.css" />
  <link rel="icon" href="./assets/img/logo/logoc.png" type="image/x-icon">
</head>
<body>

<?php include_once('./inc/nav.inc.php'); ?>

<?php
$id = isset($_GET['id']) ? preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['id']) : null;
if (!$id) {
    header('HTTP/1.0 404 Not Found');
    echo '<p>Fehler: Keine Fahrzeug-ID angegeben.</p>';
    exit;
}

$folderPath = __DIR__ . "/assets/cars/{$id}";
$jsonPath = "{$folderPath}/data.json";

if (!file_exists($jsonPath)) {
    header('HTTP/1.0 404 Not Found');
    echo '<p>Fehler: Fahrzeugdaten nicht gefunden.</p>';
    exit;
}

$car = json_decode(file_get_contents($jsonPath), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo '<p>Fehler beim Parsen der JSON-Daten.</p>';
    exit;
}
?>

<main>
  <!-- Banner-Galerie -->
<div class="banner_gallery wrapperfull" id="image-preview">
  <?php
  $totalImages = count($car['images']);
  foreach (array_slice($car['images'], 0, 3) as $index => $img):
    $isLast = $index === 2 && $totalImages > 3;
  ?>
    <div class="thumb" data-id="<?= $index ?>">
      <img src="assets/cars/<?= htmlspecialchars($id) ?>/<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($car['name']) ?>">
      <?php if ($isLast): ?>
        <div class="more-overlay">+<?= $totalImages - 3 ?> mehr</div>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<!-- Lightbox Container (versteckt bis ein Bild geklickt wird) -->
<div id="lightbox" class="lightbox hidden">
  <div class="lightbox-content">
    <span class="lightbox-close">&times;</span>
    <img id="lightbox-img" src="" alt="Großansicht">
    <div class="lightbox-nav">
      <button id="prev-btn">&#10094;</button>
      <button id="next-btn">&#10095;</button>
    </div>
  </div>
</div>


  <!-- Fahrzeugkopf -->
  <section class="vehicle-hero">
    <h1 class="vehicle-title"><?= htmlspecialchars($car['name']) ?></h1>
    <p class="vehicle-meta"><?= htmlspecialchars($car['brand']) ?> • Baujahr <?= htmlspecialchars($car['year']) ?></p>
  </section>

  <!-- Detail-Karten -->
  <section class="vehicle-details">
    <ul class="details-list">
      <?php
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
      <?php endif; endforeach; ?>

      <?php if (!empty($car['description'])): ?>
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
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const thumbElements = document.querySelectorAll(".banner_gallery .thumb");
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const closeBtn = document.querySelector(".lightbox-close");
    const nextBtn = document.getElementById("next-btn");
    const prevBtn = document.getElementById("prev-btn");

    const images = <?= json_encode(array_values($car['images'])) ?>;
    const carId = "<?= htmlspecialchars($id) ?>";
    let currentIndex = 0;

    const showImage = (index) => {
      currentIndex = index;
      const imgPath = `assets/cars/${carId}/${images[currentIndex]}`;
      lightboxImg.src = imgPath;
      lightbox.classList.remove("hidden");
    };

    thumbElements.forEach((thumb, index) => {
      thumb.addEventListener("click", () => showImage(index));
    });

    closeBtn.addEventListener("click", () => {
      lightbox.classList.add("hidden");
      lightboxImg.src = "";
    });

    nextBtn.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    });

    prevBtn.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      showImage(currentIndex);
    });

    // Schließen bei Klick außerhalb
    lightbox.addEventListener("click", (e) => {
      if (e.target === lightbox) {
        lightbox.classList.add("hidden");
        lightboxImg.src = "";
      }
    });

    // ESC zum Schließen
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        lightbox.classList.add("hidden");
        lightboxImg.src = "";
      }
    });
  });
</script>
<?php include_once('./inc/footer.inc.php'); ?>
</body>
</html>
