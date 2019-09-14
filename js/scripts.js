function navMenu() {
  const x = document.getElementById('mobile-nav');
  if (x.className === 'mobile-menu--hidden') {
    x.className = '';
  } else {
    x.className = 'mobile-menu--hidden';
  }
}
