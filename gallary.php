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

  <link rel="stylesheet" href="./style/gallary.css" /> <!-- Your CSS file for the gallery here -->
  
</head>
<body>
  <?php include_once('./inc/nav.inc.php'); ?>

  <?php include_once('./inc/nav.inc.php'); ?>

<?php
  $carsDir = __DIR__ . '/assets/cars';
  $folders = scandir($carsDir);
?>

<section class="filter-section">
  <form method="GET">
    <label for="brand-filter">Marke wählen:</label>
    <select id="brand-filter" name="brand" onchange="this.form.submit()">
      <option value="">Alle Marken</option>
      <?php
        $brands = [];
        foreach ($folders as $folder) {
          if ($folder === '.' || $folder === '..') continue;
          $jsonPath = "$carsDir/$folder/data.json";
          if (file_exists($jsonPath)) {
              $jsonContent = file_get_contents($jsonPath);
              $carData = json_decode($jsonContent, true);
              if (isset($carData['brand']) && !in_array($carData['brand'], $brands)) {
                  $brands[] = $carData['brand'];
              }
          }
        }
        foreach ($brands as $brand) {
          $selected = (isset($_GET['brand']) && $_GET['brand'] === $brand) ? 'selected' : '';
          echo '<option value="'.htmlspecialchars($brand).'" '.$selected.'>'.htmlspecialchars($brand).'</option>';
        }
      ?>
    </select>
  </form>
</section>

<section class="gallery-section">
  <div class="gallery-grid">
    <?php
      foreach ($folders as $folder) {
        if ($folder === '.' || $folder === '..') continue;
        $jsonPath = "$carsDir/$folder/data.json";
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $carData = json_decode($jsonContent, true);

            $carName = $carData['name'] ?? 'Unbekanntes Auto';
            $carBrand = $carData['brand'] ?? '';
            $firstImage = $carData['images'][0] ?? '';

            if (isset($_GET['brand']) && $_GET['brand'] !== '' && $_GET['brand'] !== $carBrand) {
                continue; // Marke passt nicht, überspringen
            }

            $imagePath = "assets/cars/" . rawurlencode($folder) . "/" . rawurlencode($firstImage);

            echo '
                <div class="gallery-item">
                    <img src="'.htmlspecialchars($imagePath).'" alt="'.htmlspecialchars($carName).'">
                    <div class="overlay">
                        <h3>'.htmlspecialchars($carName).'</h3>
                        <a href="#" class="overlay-btn">Anschauen</a>
                    </div>
                </div>
            ';
        }
      }
    ?>
  </div>
</section>


  <?php include_once('./inc/footer.inc.php'); ?>
  <script src="./script/gallary.js"></script> <!-- Your JavaScript file for the gallery here -->
</body>
</html>