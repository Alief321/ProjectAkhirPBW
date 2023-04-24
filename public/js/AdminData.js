// modal edit
const modcancel = document.getElementById('modcancel');
const edit = document.querySelectorAll('.edit');
const modal = document.querySelector('.modalAdmin');

edit.forEach((element) => {
  element.addEventListener('click', function () {
    modal.style.display = 'block';
  });
});
modcancel.addEventListener('click', function () {
  modal.style.display = 'none';
});

// modal create
const create = document.querySelector('#create');
const modalCreate = document.querySelector('.modalCreate');
const createcancel = document.getElementById('createCancel');

create.addEventListener('click', function () {
  modalCreate.style.display = 'block';
});
createCancel.addEventListener('click', function () {
  modalCreate.style.display = 'none';
});

// delete data
const del = document.querySelectorAll('.trash');
del.forEach((element) => {
  element.addEventListener('click', function () {
    confirm('Apakah anda yakin ingin menghapus data?');
  });
});
