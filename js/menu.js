function loadMenu() {
  // MENU
  const desktopNav = document.getElementById('nav-title');
  const mobileNav = document.getElementById('mobile-menu');
  const navMenu = document.getElementById('nav-ul');

  function toggleMenu() {
    if(!navMenu.classList.contains('show-menu')) {
      navMenu.classList.add('show-menu');
    } else {
      navMenu.classList.remove('show-menu');
    }
  }

  desktopNav.addEventListener('click', toggleMenu);
  mobileNav.addEventListener('click', toggleMenu);

  function hideOnScroll() {
    if(navMenu.classList.contains('show-menu')) {
      navMenu.classList.remove('show-menu');
    }
  }
  window.addEventListener('scroll', hideOnScroll);
}
