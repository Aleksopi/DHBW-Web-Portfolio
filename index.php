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
    <link rel="stylesheet" href="./style/style.css" />
  </head>
  <body>
    <?php include_once('./inc/nav.inc.php'); ?>
    <main>
      <section class="home">
        <div class="home-image-wrapper">
          <video id="heroVideo" class="home-image" autoplay muted loop playsinline>
            <source src="./assets/video/videoplayback.webm" type="video/webm">
              Dein Browser unterstützt dieses Videoformat nicht.
          </video>
        </div>
        <div class="home-content">
          <div class="home-text">
            <h1>Willkommen in meinem Portfolio</h1>
            <h2>Hier finden Sie meine Projekte und Arbeiten</h2>
          </div>
          <div class="highlight-buttons">
            <a href="details.php?id=ferrari-f40" class="highlight-btn">FERRARI F40</a>
            <a href="./gallary.php" class="highlight-btn">CARS</a>
          </div>
        </div>
      </section>

      <section class="highlight animate-on-scroll">
        <div class="highlight-container reverse-layout">
          <div class="highlight-text slide-left">
            <h2 id="highlight-title">Wird geladen...</h2>
            <h3 id="highlight-slogan">Bitte warten...</h3>
            <p id="highlight-description">Bitte warten...</p>
            <a href="#" class="read-more" id="highlight-link">Anschauen <span>&#10140;</span></a>
          </div>
          <div class="highlight-image slide-right">
            <img id="highlight-image" src="" alt="Highlight Image" loading="lazy" />
            <div class="slider-controls">
              <button id="prev-slide">&#8592;</button>
              <button id="next-slide">&#8594;</button>
            </div>
          </div>
        </div>
      </section>


      <section class="highlight video">
      <div class="video-pattern-grid">

      <!-- Zeile 1: Video - Video - Text -->
        <div class="video-pattern-row">
          <video class="portrait-video" autoplay muted loop playsinline>
            <source src="./assets/video/videoplayback (1).webm" type="video/webm">
          </video>
          <video class="portrait-video" autoplay muted loop playsinline>
          <source src="./assets/video/videoplayback (2).webm" type="video/webm">
          </video>
          <div class="text-block">
            <h2>Ferrari Vibes</h2>
            <p>Pure Leidenschaft auf der Rennstrecke – aufgenommen in Tokio.</p>
          </div>
      </div>

      <!-- Zeile 2: Textblock - Video - Video -->
        <div class="video-pattern-row">
          <div class="text-block">
            <h2>Emotion & Technik</h2>
            <p>Wenn Kraft auf Eleganz trifft – der Sound, das Design, das Gefühl.</p>
          </div>
          <video class="portrait-video" autoplay muted loop playsinline>
            <source src="./assets/cars/Reels/Jesko x Singer_prob4.mp4" type="video/webm">
          </video>
          <video class="portrait-video" autoplay muted loop playsinline>
            <source src="./assets/cars/Reels/Komp 1_1.mp4" type="video/webm">
          </video>
        </div>
      </div>
      </section>

      <section class="brand-strip">
        <div class="brand-grid">

          <a href="./gallary.php?brand=Ferrari&model=" class="brand-item">
            <img src="./assets/img/picture/LaFerrari-Hybrid-Front1.jpg" alt="Ferrari" />
            <div class="brand-label">Ferrari</div>
          </a>

          <a href="./gallary.php?brand=Pagani&model=" class="brand-item">
            <img src="./assets/img/picture/img03.jpg" alt="Pagani" />
            <div class="brand-label">Pagani</div>
          </a>

          <a href="./gallary.php?brand=Porsche&model=" class="brand-item">
            <img src="./assets/img/picture/USED-Taking-a-Sneak-Peek-at-the-2022-Porsche-Car-Lineup.jpg" alt="Porsche" />
            <div class="brand-label">Porsche</div>
          </a>

          <a href="./gallary.php?brand=Bugatti&model=" class="brand-item">
            <img src="./assets/img/picture/s-l1200.jpg" alt="Bugatti" />
            <div class="brand-label">Bugatti</div>
          </a>

        </div>
      </section>

      <section class="gallery-section">
        <div class="gallery-header">
          <h2>Meine Galerie</h2>
          <p>Ein Blick auf ausgewählte Fahrzeuge</p>
        </div>
        <div class="gallery-grid" id="gallery-grid"></div>
      </section>


      <section class="italia">
      </section>
      <script src="./script/home.js"></script>
    </main>
    <?php include_once('./inc/footer.inc.php'); ?>
  </body>
</html>