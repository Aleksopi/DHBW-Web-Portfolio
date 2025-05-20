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
    <nav>
      <?php include_once('./inc/nav.inc.php'); ?>
    </nav>
    <main class="about-page-header>  
      <section class="container">
        <div class="about-header">
          <img src="./assets/cars/porsche-gt25/porsche-gt2rs-2.jpg" alt="Über Uns Header" class="header-bg"/>
          <h1>Über Uns</h1>
        </div>
      </section>
    <main class="about-page-container">
    
      <section class="about-content">
        <article class="about-section">
          <h2>About</h2>
          <p>
            Herzlich Willkommen auf <strong class="brand-name">Scatti su Strada</strong>, 
            einem einzigartigen Showroom, der die Welt der Automobil-Fotografie auf eine neue Ebene hebt. 
            Unsere Plattform wurde mit einer klaren Vision gegründet: Der Wunsch, die Schönheit und Eleganz 
            von Autos durch professionelle Fotografie zu präsentieren. Hier findest Du nicht nur eindrucksvolle 
            Bilder, sondern auch die Geschichte und Leidenschaft, die hinter jedem Bild steckt. Wir verstehen uns 
            als Künstler, die sich mit der Welt der Automobile und ihrer visuell beeindruckenden Ästhetik verbinden, 
            um etwas Einzigartiges zu schaffen.
          </p>
          <br>
          <p>
            Unsere Galerie ist der digitale Raum, in dem wir die kreativen Werke unseres Fotografen teilen, der mit 
            seinem Blick für Details und seinem technischen Können jedes Auto als echtes Kunstwerk zur Geltung bringt. 
            Diese Seite dient nicht nur als Portfolio, sondern auch als Treffpunkt für alle, die sich für Automobil-Design, 
            Fotografie und die Faszination von High-Performance-Fahrzeugen begeistern.
          </p>
          <br>
          <p>
            Wir sind stolz darauf, Dir nicht nur Fotos, sondern auch Geschichten zu erzählen. Jeder Shot, den wir machen, 
            ist ein Fenster in die faszinierende Welt der Fahrzeuge, und wir möchten, dass Du diese Leidenschaft mit uns teilst.
          </p>
        </article>  
        <article class="about-section">
          <h2>Unsere Mission</h2>
          <p>
            Unsere Mission bei <strong class="brand-name">Scatti su Strada</strong> ist es, die visuelle Identität 
            und den Charakter jedes Fahrzeugs auf eine Weise einzufangen, die über das Gewöhnliche hinausgeht. 
            In einer Welt, in der das Design von Automobilen zunehmend mit der Kunst des visuellen Erlebens 
            verschmilzt, sehen wir unsere Aufgabe darin, 
            diese Ästhetik in Fotos zu verewigen. Jedes Bild, das wir machen, ist nicht nur ein Foto, sondern ein 
            Erlebnis, das die Faszination und den Stolz, die Autos auslösen können, widerspiegelt.
          </p>
          <br>
          <p>
            Unser Ziel ist es, jedem Fahrzeug gerecht zu werden, seine einzigartigen Linien, Details und Emotionen 
            in perfekten Aufnahmen zu verewigen. Ob sportlicher Supersportwagen, eleganter Oldtimer oder handgefertigter 
            Custom-Build – jedes Auto hat seine eigene Geschichte, die wir mit Leidenschaft und Hingabe erzählen möchten. 
            Für uns geht es nicht nur um technische Perfektion, sondern auch um die Kunst, mit Bildern Gefühle und 
            Erlebnisse zu wecken.
          </p>
          <br>
          <p>
            Mit unserem Profi-Fotograf, der sein Handwerk mit Hingabe und Leidenschaft lebt, stellen wir sicher, 
            dass jede Aufnahme mehr ist als nur ein Moment im Bild – sie ist eine Einladung, die Geschichte eines 
            Fahrzeugs zu erleben und sich von seiner Schönheit inspirieren zu lassen.
          </p>
        </article>
        <article class="about-section interactive-team">
          <h2>Das Team</h2> <div class="team-icons-container">
            <div class="team-member-icon" data-member="person1">
              <img src="./assets/icons/interior.svg" alt="Teammitglied Typ A"> <span>Aleks</span> </div>
            <div class="team-member-icon" data-member="person2">
              <img src="./assets/icons/interior.svg" alt="Teammitglied Typ B"> <span>Julian</span>
            </div>
            <div class="team-member-icon" data-member="person3">
              <img src="./assets/icons/interior.svg" alt="Teammitglied Typ C"> <span>Mario</span> </div>
              <div class="team-member-icon" data-member="person4">
              <img src="./assets/icons/interior.svg" alt="Teammitglied Typ D"> <span>Finean</span> </div>
              <div class="team-member-icon" data-member="person5">
              <img src="./assets/icons/interior.svg" alt="Teammitglied Typ E"> <span>Arthur</span> </div>
            </div>
          <div class="team-member-details-container">
            <div id="person1" class="team-member-text">
              <button class="close-details-btn" aria-label="Details schließen">&times;</button>
              <h3>Aleks</h3>
              <p>Er sorgt, dass alles reibungslos funktionieren: schnell, sicher und intuitiv. Zudem Leitet der das Projekt und Organisiert alles.</p>
            </div>
            <div id="person2" class="team-member-text">
              <button class="close-details-btn" aria-label="Details schließen">&times;</button>
              <h3>Julian</h3>
              <p>Er ergänzt das Team mit technischer Expertise: Er pflegt alle fahrzeugspezifischen Details im Backend und gestaltet Teile des Frontends, damit Du zu jedem Foto alle Infos auf einen Blick bekommst.</p>
            </div>
            <div id="person3" class="team-member-text">
              <button class="close-details-btn" aria-label="Details schließen">&times;</button>
              <h3>Mario</h3>
              <p>Er betreut den Bereich Kontakt und Rechtliches – von Impressum und Datenschutz bis zu Anfragen und Kooperationen. So bist Du immer auf der sicheren Seite.</p>
            </div>
            <div id="person4" class="team-member-text">
              <button class="close-details-btn" aria-label="Details schließen">&times;</button>
              <h3>Finean</h3>
              <p>Er ist das kreative Herz dieser Seite: Mit seiner Erfahrung und seinem Blick für Details fängt er Licht, Linien und Emotionen ein.</p>
            </div>
            <div id="person5" class="team-member-text">
              <button class="close-details-btn" aria-label="Details schließen">&times;</button>
              <h3>Arthur</h3>
              <p>Er hat das Konzept für diese Über-uns-Seite entwickelt und hält hierfür die Fäden zusammen, wenn es um Inhalt und Struktur geht.</p>
            </div>
          </div>
        </article>
        <article class="about-section">
          <h2>Unser Versprechen</h2>
          <p>
            Bei <strong class="brand-name">Scatti su Strada</strong> setzen wir auf Qualität,  
            Präzision und eine unermüdliche Leidenschaft für das, was wir tun. Unser Versprechen 
            an Dich ist es, Dir die bestmögliche Präsentation von Automobil-Fotografie zu bieten – 
            durch professionelle Bilder, die jedes Detail und jede Nuance eines Fahrzeugs zur Geltung bringen.
          </p>
          <br>
          <ul>
            <li><strong>Professionelle Präsentation:</strong> Wir garantieren, dass jedes Bild, das Du auf unserer Seite siehst, sorgfältig bearbeitet und optimal aufbereitet wurde. Dabei legen wir großen Wert auf Licht, Perspektive und Detailtreue, um die faszinierenden Merkmale jedes Fahrzeugs in seiner besten Form zu präsentieren. Unsere Fotografien sind nicht nur Bilder, sondern Kunstwerke, die die Individualität eines jeden Fahrzeugs unterstreichen.</li>
            <li><strong>Transparenz & Service:</strong> Wir verstehen, wie wichtig es ist, Vertrauen in die Arbeit zu setzen. Deshalb sind wir immer für Dich da, um Deine Fragen zu beantworten. Ob es um die Nutzung der Bilder, die Bildrechte oder spezifische Fotoanfragen geht – wir sind stets transparent und bieten Dir den bestmöglichen Service. Bei uns weißt Du immer genau, was Du bekommst, und kannst auf uns zählen, wenn es um individuelle Wünsche oder spezielle Projekte geht.</li>
            <li><strong>Stetige Weiterentwicklung:</strong> Wir sind ständig auf der Suche nach neuen Wegen, um unsere Galerie und die Nutzererfahrung zu verbessern. Von innovativen Features bis hin zu interaktiven Elementen – wir arbeiten kontinuierlich an der Weiterentwicklung unserer Plattform, damit Du stets die besten und neuesten Inhalte genießen kannst. Die Welt der Automobil-Fotografie ist dynamisch, und auch wir bleiben nicht stehen.</li>
          </ul>
          <br>
          <p>
            Unsere Liebe zum Detail, gepaart mit technischer Präzision und einer Leidenschaft für Automobile, ist das, was uns antreibt. Wir möchten nicht nur Fotos machen – wir möchten Dir die Welt der Automobile auf eine Weise näherbringen, die Du so noch nie erlebt hast. Unser Versprechen ist, dass jedes Bild und jede Interaktion auf dieser Seite unser Engagement für Exzellenz widerspiegelt.
          </p>
        </article>
        <article class="about-section">
          <h2>Schau Dich um!</h2>
          <p>
            Stöbere in unserer Galerie, entdecke Detailaufnahmen und lass Dich von unserer Leidenschaft für Automobile begeistern. Wenn Du Fragen hast, eine Kooperation wünschst oder eigene Projekte umsetzen möchtest, kontaktiere uns jederzeit über das Kontaktformular.
          </p> 
          <br>
          <p>
            Vielen Dank für Deinen Besuch – wir freuen uns, die Welt der Auto­fotografie gemeinsam mit Dir zu entdecken!
        </article>
      </section>
      <script src="./script/about.js"></script>
    </main>
    <footer>
      <?php include_once('./inc/footer.inc.php'); ?>
    </footer>
  </body>
</html>
