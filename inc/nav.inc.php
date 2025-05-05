  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        
        <!-- Logo -->
        <div class="flex-shrink-0 text-xl font-bold text-blue-600">
          <img src="./assets/b3fbbd61-03f7-47d4-99c6-b3b85cf274cd.png" alt="Logo" width="150" height="150" />
        </div>

        <!-- Desktop Links -->
        <div class="hidden md:flex space-x-6">
          <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
          <a href="#" class="text-gray-700 hover:text-blue-600">Cars</a>
          <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
          <a href="#" class="text-gray-700 hover:text-blue-600">Kontakt</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Home</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Über uns</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">About</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Kontakt</a>
    </div>
  </nav>

  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
