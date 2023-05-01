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
    const form = modal.querySelector('form');
    const inputs = form.querySelectorAll('input');

    // Fetch record data from the server using vanilla JS
    // and populate the form fields
    fetch(`edit/${id}`)
      .then((response) => response.json())
      .then((record) => {
        inputs[0].value = record.Nama;
        inputs[1].value = record.Foto;
        inputs[2].value = record.Harga;
        inputs[3].value = record.Stok;
        inputs[4].value = record.Kategori;
        inputs[5].value = record.Deskripsi;
        inputs[6].value = record.LinkShopee;
        inputs[7].value = record.LinkTokped;
        inputs[8].value = record.Link.LinkBiliBli;
        inputs[9].value = record.linkLazada;
        inputs[10].value = record.LinkBukalapak;
      })
      .catch((error) => console.error(error));
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

function SetChecked() {
  var Checked = true;
  '<%Session["Checked"] = "' + Checked + '"; %>';
}

function GetChecked() {
  var Checked = '<%= Session["Checked"] %>';
  return Checked;
}
// Checkbox product
const checkbox = document.querySelectorAll('#higlight');
const form = document.querySelectorAll('#checkForm');
checkbox.forEach((element) => {
  if (GetChecked == true) {
    element.checked = true;
    form[i].action = "Rekomendasi/hapus/<?= $product['idProduct'];?>";
  }
  i = 0;
  element.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
      alert('Apakah anda yakin ingin memasukan produk ke rekomendasi?');
      element.checked = true;
      SetChecked();
      form[i].action = "Rekomendasi/hapus/<?= $product['idProduct'];?>";
    } else {
      alert('Apakah anda yakin ingin menghapus produk dari rekomendasi?');
    }
    i++;
  });
});
