window.onload = function () {
  document.documentElement.style.scrollBehavior = 'smooth';

  // tombol up arrow
  const totop = document.querySelector('#up_arrow');
  const float_item = document.querySelector('.float_item');
  const goToTop = () => {
    document.body.scrollIntoView();
  };
  totop.addEventListener('click', goToTop);

  window.onscroll = function () {
    if (window.pageYOffset > 100) {
      totop.style.display = 'block';
    } else {
      totop.style.display = 'none';
    }
    if (window.innerHeight + Math.ceil(window.pageYOffset) >= document.body.offsetHeight) {
      float_item.style.bottom = '4rem';
    } else {
      float_item.style.bottom = '1rem';
    }
  };

  // profile user
  const profile = document.querySelector('.login');
  const drpdwn = document.querySelector('#modal');
  document.onload = drpdwn.style.display = 'none';
  profile.addEventListener('click', function () {
    if (drpdwn.style.display == 'none') {
      drpdwn.style.display = 'block';
    } else {
      drpdwn.style.display = 'none';
    }
  });

  // Navbar Mobile
  menu = document.querySelector('#drpdwn');
  drp = document.querySelector('.drpdwn_menu');
  x = document.querySelector('#x');

  menu.addEventListener('click', function () {
    drp.style.display = 'flex';
    menu.style.display = 'none';
    x.style.display = 'block';
  });

  x.addEventListener('click', function () {
    drp.style.display = 'none';
    menu.style.display = 'block';
    x.style.display = 'none';
  });
};
