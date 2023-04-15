window.onload = function () {
  const totop = document.querySelector('#up_arrow');
  const float_item = document.querySelector('.float_item');
  const goToTop = () => {
    document.body.scrollIntoView({
      behavior: 'smooth',
    });
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
};
