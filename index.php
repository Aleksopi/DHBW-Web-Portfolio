<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/nav.css" />
  <link rel="icon" href="./assets/img/logo/logoc.png" type="image/x-icon">
</head>
<body>
  <?php include_once('./inc/nav.inc.php'); ?>

  <section class="home">
    <div class="home-image-wrapper">
      <img src="./assets/img/picture/738D596E-744E-495D-A19B-791236156C0F_1_105_c.jpeg" alt="Home Image" class="home-image" loading="lazy" />
    </div>
    <div class="home-content">
      <div class="home-text">
        <h1>Willkommen<br>in meinem Portfolio</h1>
        <h2>Hier finden Sie meine Projekte und Arbeiten</h2>
      </div>
    </div>
  </section>

  <section class="highlight animate-on-scroll">
    <div class="highlight-container">
      <div class="highlight-text slide-left">
        <h2>Ferrari F40:<br>Lorem ipsum dolor sit amet...</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
        <a href="#" class="read-more">Mehr lesen <span>&#10140;</span></a>
      </div>
      <div class="highlight-image slide-right">
        <img src="./assets/img/picture/7EADC893-9E88-43A8-A091-306E9C3C639E_1_105_c.jpeg" alt="Ferrari F50" loading="lazy" />
      </div>
    </div>
    <script>
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
            observer.unobserve(entry.target); // Nur einmal animieren
          }
        });
      }, { threshold: 0.3 });

      document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
      });
  </script>
</section>



  <footer></footer>
</body>
</html>
