// show Foto
const prevFoto = document.querySelectorAll('.prevFoto');
const modalFoto = document.querySelector('.modalFoto');
const cilang = document.getElementById('cilang');
prevFoto.forEach((element) => {
  element.addEventListener('click', function () {
    modalFoto.style.display = 'block';
  });
});
cilang.addEventListener('click', function () {
  modalFoto.style.display = 'none';
});
