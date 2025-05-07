<nav class="navbar">
    <div class="navbar-container">
      <div class="navbar-content">
        <!-- Logo -->
        <div class="navbar-logo">
          <a href="./index.php"><img src="./assets/img/picture/66209283-c854-480c-b2dc-cfacf2733bd8.png" alt="Logo" width="150" height="150" /></a>
        </div>

        <!-- Desktop Links -->
        <div class="nav-links">
          <a href="./index.php">Home</a>
          <a href="./gallary.php">Cars</a>
          <a href="./about.php">About</a>
          <a href="./kontakt.php">Kontakt</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="mobile-menu-btn">
          <button id="menu-btn">
            <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu collapsed">
      <a href="#">Home</a>
      <a href="#">Cars</a>
      <a href="#">About</a>
      <a href="#">Kontakt</a>
    </div>
  </nav>

  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      if (mobileMenu.classList.contains('collapsed')) {
        mobileMenu.classList.remove('collapsed');
        mobileMenu.classList.add('expanded');
      } else {
        mobileMenu.classList.add('collapsed');
        mobileMenu.classList.remove('expanded');
      }
    });

    window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
      mobileMenu.classList.add('collapsed');
      mobileMenu.classList.remove('expanded');
    }
  });
  </script>