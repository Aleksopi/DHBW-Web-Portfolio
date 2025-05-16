<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio - Über Uns</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="./style/nav_footer.css" />
  <link rel="icon" href="./assets/img/logo/logoc.png" type="image/x-icon">
  <link rel="stylesheet" href="./style/about.css" />
</head>
<body>
  <?php 
    // Einbindung der Navigation Arthur
    include_once('./inc/nav.inc.php'); 
  ?>

  <main class="about-page-container">
    <header class="about-header">
      <h1 class="fade-in-text">Über Uns</h1>
      <p class="fade-in-text subtitle">Lernen Sie die Gruppe hinter diesem Projekt kennen.</p>
    </header>

    <section class="about-content">
      <article class="about-section">
        <h2>Wer wir sind</h2>
        <p>
          Wir sind eine kleine Gruppe aus Studenten der DHBW.
        </p>
      </article>

      <article class="about-section interactive-team">
        <h2>Das Team</h2> <div class="team-icons-container">
          <div class="team-member-icon" data-member="person1">
            <img src="./assets/icons/interior.svg" alt="Teammitglied Typ A"> <span>Arthur</span> </div>
          <div class="team-member-icon" data-member="person2">
            <img src="./assets/icons/interior.svg" alt="Teammitglied Typ B"> <span>Aleks</span>
          </div>
          <div class="team-member-icon" data-member="person3">
            <img src="./assets/icons/interior.svg" alt="Teammitglied Typ C"> <span>Finean</span> </div>
            <div class="team-member-icon" data-member="person4">
            <img src="./assets/icons/interior.svg" alt="Teammitglied Typ D"> <span>July</span> </div>
            <div class="team-member-icon" data-member="person5">
            <img src="./assets/icons/interior.svg" alt="Teammitglied Typ E"> <span>Mario</span> </div>
          </div>

        <div class="team-member-details-container">
          <div id="person1" class="team-member-text">
            <button class="close-details-btn" aria-label="Details schließen">&times;</button>
            <h3>Arthur</h3>
            <p>Arthur, der Ersteller der about Seite ( ͡° ͜ʖ ͡°)</p>
          </div>
          <div id="person2" class="team-member-text">
            <button class="close-details-btn" aria-label="Details schließen">&times;</button>
            <h3>Aleks</h3>
            <p>[Text]</p>
          </div>
          <div id="person3" class="team-member-text">
            <button class="close-details-btn" aria-label="Details schließen">&times;</button>
            <h3>Finean</h3>
            <p>[Text]</p>
          </div>
          <div id="person4" class="team-member-text">
            <button class="close-details-btn" aria-label="Details schließen">&times;</button>
            <h3>July</h3>
            <p>[Text]</p>
          </div>
          <div id="person5" class="team-member-text">
            <button class="close-details-btn" aria-label="Details schließen">&times;</button>
            <h3>Mario</h3>
            <p>[Text]</p>
          </div>
          </div>
      </article>


      <article class="about-section">
        <h2>Weiteres</h2>
        <p>
          Hier kommt etwas zum Project. Vielleicht warum wir dieses Thema genommen haben?
        </p>
      </article>
    </section>
  </main>

  <?php 
    // Einbindung des Footers
    include_once('./inc/footer.inc.php'); 
  ?>
  <script src="./script/about.js"></script>
</body>
</html>
