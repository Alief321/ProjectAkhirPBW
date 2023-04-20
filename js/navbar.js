window.onload = function () {
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
