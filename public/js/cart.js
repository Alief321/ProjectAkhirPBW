const link = document.getElementById('linkBeli');
const x = document.getElementById('silang');
const modal = document.querySelector('.modal-link');

link.addEventListener('click', function () {
  modal.style.display = 'block';
});
x.addEventListener('click', function () {
  modal.style.display = 'none';
});
