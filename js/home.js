const hiro = document.querySelector('#hiro_pic');
const stop = document.getElementById('stop');
hiro.addEventListener('click', function () {
  hiro.classList.add('hiro-pic-spin');
  stop.style.display = 'flex';
});

stop.addEventListener('click', function () {
  hiro.classList.remove('hiro-pic-spin');
  stop.style.display = 'none';
});
