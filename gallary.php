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
  <link rel="stylesheet" href="./style/gallary.css" />
</head>
<body>

<?php include_once('./inc/nav.inc.php'); ?>

<?php
  $carsDir = __DIR__ . '/assets/cars';
  $folders = scandir($carsDir);

  $brands = [];
  $models = [];

  $selectedBrand = isset($_GET['brand']) ? $_GET['brand'] : '';
  $selectedModel = isset($_GET['model']) ? $_GET['model'] : '';

  foreach ($folders as $folder) {
    if ($folder === '.' || $folder === '..') continue;
    $jsonPath = "$carsDir/$folder/data.json";
    if (file_exists($jsonPath)) {
      $jsonContent = file_get_contents($jsonPath);
      $carData = json_decode($jsonContent, true);

      if (isset($carData['brand']) && !in_array($carData['brand'], $brands)) {
        $brands[] = $carData['brand'];
      }

      if ($selectedBrand === '' || (isset($carData['brand']) && $carData['brand'] === $selectedBrand)) {
        if (isset($carData['model']) && !in_array($carData['model'], $models)) {
          $models[] = $carData['model'];
        }
      }
    }
  }
?>

<section class="filter-section">
  <form method="GET">
    <div class="filter-group">
      <label for="brand-filter">Marke wählen:</label>
      <select id="brand-filter" name="brand" onchange="this.form.submit()">
        <option value="">Alle Marken</option>
        <?php
          foreach ($brands as $brand) {
            $selected = ($selectedBrand === $brand) ? 'selected' : '';
            echo '<option value="'.htmlspecialchars($brand).'" '.$selected.'>'.htmlspecialchars($brand).'</option>';
          }
        ?>
      </select>
    </div>

    <div class="filter-group">
      <label for="model-filter">Modell wählen:</label>
      <select id="model-filter" name="model" onchange="this.form.submit()">
        <option value="">Alle Modelle</option>
        <?php
          foreach ($models as $model) {
            $selected = ($selectedModel === $model) ? 'selected' : '';
            echo '<option value="'.htmlspecialchars($model).'" '.$selected.'>'.htmlspecialchars($model).'</option>';
          }
        ?>
      </select>
    </div>
  </form>
</section>

<section class="gallery-section">
  <div class="gallery-grid">
    <?php
      foreach ($folders as $folder) {
        if ($folder === '.' || $folder === '..') continue;
        $jsonPath = "$carsDir/$folder/data.json";
        if (!file_exists($jsonPath)) continue;

        $jsonContent = file_get_contents($jsonPath);
        $carData = json_decode($jsonContent, true);

        $carName = $carData['name'] ?? 'Unbekanntes Auto';
        $carBrand = $carData['brand'] ?? '';
        $carModel = $carData['model'] ?? '';
        $firstImage = $carData['images'][0] ?? '';

        if (
          ($selectedBrand && $carBrand !== $selectedBrand) ||
          ($selectedModel && $carModel !== $selectedModel)
        ) {
          continue;
        }

        $imagePath = "assets/cars/" . rawurlencode($folder) . "/" . rawurlencode($firstImage);
        $detailsLink = "details.php?id=" . urlencode($folder);

        echo '
          <a href="' . htmlspecialchars($detailsLink) . '" class="gallery-item">
            <img src="'.htmlspecialchars($imagePath).'" alt="'.htmlspecialchars($carName).'">
            <div class="overlay">
              <h3>'.htmlspecialchars($carName).'</h3>
              <span class="overlay-btn">Anschauen</span>
            </div>
          </a>
        ';
      }
    ?>
  </div>
</section>

<?php include_once('./inc/footer.inc.php'); ?>
<script src="./script/gallary.js"></script>
</body>
</html>
