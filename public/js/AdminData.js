// fetxh data
function fetch_data(id) {
  var form_data = new FormData();
  form_data.append('id', id);
  form_data.append('action', 'fetch');

  fetch('action.php', {
    method: 'POST',

    body: form_data,
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (responseData) {
      _('first_name').value = responseData.first_name;

      _('last_name').value = responseData.last_name;

      _('customer_email').value = responseData.customer_email;

      _('customer_gender').value = responseData.customer_gender;

      _('customer_id').value = id;

      _('action').value = 'Update';
    });
}

// modal edit
const modcancel = document.getElementById('modcancel');
const edit = document.querySelectorAll('.edit');
const modal = document.querySelector('.modalAdmin');

edit.forEach((element) => {
  element.addEventListener('click', function () {
    modal.style.display = 'block';

    const id = this.getAttribute('data-id');
    console.log(id);
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
