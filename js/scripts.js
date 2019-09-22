// opens and closes the mobile menu
function navMenu() {
  const x = document.getElementById('mobile-nav');
  if (x.className === 'mobile-menu--hidden') {
    x.className = '';
  } else {
    x.className = 'mobile-menu--hidden';
  }
}

jQuery('.desktop-nav__menu-ul')
  .on('mouseenter', '.menu-item-has-children', e => {
    jQuery(e.currentTarget).addClass('sub-menu--open');
  })
  .on('mouseleave', '.menu-item-has-children', e => {
    jQuery(e.currentTarget).removeClass('sub-menu--open');
  });
