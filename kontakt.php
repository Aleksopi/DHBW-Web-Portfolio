<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt</title>
    <link rel="stylesheet" href="./style/fonts.css">
    <link rel="stylesheet" href="./style/nav_footer.css" />
    <link rel="icon" href="./assets/img/logo/logoc.png" type="image/x-icon">
    <link rel="stylesheet" href="./style/kontakt.css" />
  </head>

<body>
  <?php include './inc/nav.inc.php'; ?>
  <main>
    <section class="kontakt-header">
      <img src="./assets/cars/ferrari-DODICI/IMG_4798_1.jpg" alt="Hintergrundbild" class="header-bg">
      <h1>Kontakt</h1>
    </section>

    <div class="container">
      <form class="contact-form" action="#" method="POST">
        <div class="form-group">
          <label for="name">Name *</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="email">E-Mail *</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Telefon</label>
          <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
          <label for="message">Nachricht *</label>
          <textarea id="message" name="message" required></textarea>
        </div>

        <div class="form-group">
          <button type="submit">Nachricht senden</button>
        </div>
      </form>

      <div class="contact-info">
        <h2>Kontaktinformationen</h2>
        <div class="contact-item">
          <strong>Adresse:</strong>
          <p>Musterstraße 123, 12345 Musterstadt</p>
        </div>
        <div class="contact-item">
          <strong>Telefon:</strong>
          <a href="tel:+49123456789">+49 123 456789</a>
        </div>
        <div class="contact-item">
          <strong>E-Mail:</strong>
          <a href="mailto:info@beispiel.de">info@beispiel.de</a>
        </div>
        <div class="contact-item">
          <strong>Öffnungszeiten:</strong>
          <p>Mo-Fr 9:00 - 17:00 Uhr</p>
        </div>
      </div>
    </div>
    </div>

    <section class="italia"></section>
    <script src="./script/kontakt.js"></script>
  </main>
  <?php include './inc/footer.inc.php'; ?>
</body>
</html>