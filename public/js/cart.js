const link = document.querySelectorAll('#linkBeli');
const silang = document.querySelector('#silang');
const modal = document.querySelector('.modal-link');

link.forEach((element) => {
  element.addEventListener('click', function () {
    modal.style.display = 'block';
  });
});

silang.addEventListener('click', function () {
  modal.style.display = 'none';
});
