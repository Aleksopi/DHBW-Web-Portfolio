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