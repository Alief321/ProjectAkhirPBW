window.onload = function () {
  document.documentElement.style.scrollBehavior = 'smooth';

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

  document.addEventListener('click', function (e) {
    let profile = document.querySelector('.login');
    let drpdwn = document.querySelector('#modal');
    if (!profile.contains(e.target)) {
      drpdwn.style.display = 'none';
    } else {
      drpdwn.style.display = 'block';
    }
  });

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
