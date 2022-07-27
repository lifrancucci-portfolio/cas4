function loadMenu() {
  // MENU
  const navLogo = document.getElementById('nav-title');
  const navMenu = document.getElementById('nav-ul');

  function toggleMenu() {
    if(!navMenu.classList.contains('show-menu')) {
      navMenu.classList.add('show-menu');
    } else {
      navMenu.classList.remove('show-menu');
    }
  }
  function hideOnScroll() {
    if(navMenu.classList.contains('show-menu')) {
      navMenu.classList.remove('show-menu');
    }
  }

  navLogo.addEventListener('click', toggleMenu);
  window.addEventListener('scroll', hideOnScroll);
}
