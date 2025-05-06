<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style/nav.css" />
  <link rel="icon" href="./assets/img/logo/logoc.png" type="image/x-icon">
  <link rel="stylesheet" href="./style/style.css" />
  
</head>
<body>
  <?php include_once('./inc/nav.inc.php'); ?>

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
        <a href="#" class="highlight-btn">FERRARI F40</a>
        <a href="#" class="highlight-btn">GALLERIE</a>
      </div>
    </div>
  </section>

  <section class="highlight animate-on-scroll">
    <div class="highlight-container reverse-layout">
      <div class="highlight-text slide-left">
        <h2 id="highlight-title">Ferrari F40:<br>Lorem ipsum dolor sit amet.</h2>
        <p id="highlight-description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur itaque impedit...
        </p>
        <a href="#" class="read-more">Anschauen<span>&#10140;</span></a>
      </div>
      <div class="highlight-image slide-right">
        <img id="highlight-image" src="./assets/img/picture/738D596E-744E-495D-A19B-791236156C0F_1_105_c.jpeg" alt="Highlight Image" loading="lazy" />
        <div class="slider-controls">
          <button id="prev-slide">&#8592;</button>
          <button id="next-slide">&#8594;</button>
        </div>
      </div>
    </div>
  </section>

  <section class="highlight video">
      <div class="video-container">
      <video class="portrait-video" autoplay muted loop playsinline>
        <source src="./assets/video/videoplayback (1).webm" type="video/webm">
        Dein Browser unterstützt dieses Videoformat nicht.
      </video>
      <video class="portrait-video" autoplay muted loop playsinline>
        <source src="./assets/video/videoplayback (1).webm" type="video/webm">
        Dein Browser unterstützt dieses Videoformat nicht.
      </video>
    </div>
  </section>

  <script>
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });

    const slides = [
      {
        title: "Ferrari F40:<br>Eine Motorsport-Ikone.",
        description: "Der Ferrari F40 ist bekannt für seine rohe Leistung und ikonische Form.",
        image: "./assets/img/picture/738D596E-744E-495D-A19B-791236156C0F_1_105_c.jpeg"
      },
      {
        title: "Ferrari F40:<br>Eine Motorsport-Ikone.",
        description: "Der Ferrari F40 ist bekannt für seine rohe Leistung und ikonische Form.",
        image: "./assets/img/picture/7EADC893-9E88-43A8-A091-306E9C3C639E_1_105_c.jpeg"
      },
      {
        title: "Ferrari F40:<br>Noch einen",
        description: "Auch ein Auto",
        image: "./assets/img/picture/6EC25E8D-CD8C-4B5C-8A46-72E7BDA1825B_1_105_c.jpeg"
      },
      {
        title: "Und noch ein Ferrari F40:<br>Und noch ein",
        description: "Auto macht brum brum",
        image: "./assets/img/picture/F349224B-F562-489B-B149-988FF6143689_1_105_c.jpeg"
      }
    ];

    let currentSlide = 0;

    const titleEl = document.getElementById("highlight-title");
    const descEl = document.getElementById("highlight-description");
    const imgEl = document.getElementById("highlight-image");

    function updateSlide(index) {
      const slide = slides[index];
      titleEl.innerHTML = slide.title;
      descEl.textContent = slide.description;
      imgEl.src = slide.image;
    }

    document.getElementById("prev-slide").addEventListener("click", () => {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      updateSlide(currentSlide);
    });

    document.getElementById("next-slide").addEventListener("click", () => {
      currentSlide = (currentSlide + 1) % slides.length;
      updateSlide(currentSlide);
    });

    const video = document.getElementById('heroVideo');

    video.addEventListener('loadedmetadata', () => {
      // Starte bei Sekunde 5
      video.currentTime = 0;
    });

    video.addEventListener('timeupdate', () => {
      // Stoppe bei Sekunde 15 (wenn kein loop)
      if (video.currentTime > 5) {
        video.currentTime = 0; // Zurückspulen oder video.pause();
      }
    });
  </script>




  <footer></footer>
</body>
</html>
