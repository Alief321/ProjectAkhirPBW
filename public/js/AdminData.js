// fetxh data
function fetch_data(id) {
  const Nama = document.getElementById('namaEdit');

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      Nama = this.responseText;
    }
  };
  xhttp.open('GET', 'Product/edit/' + id, true);
  xhttp.send();
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
    // fetch(`edit/${id}`)
    //   .then((response) => response.json())
    //   .then((record) => {
    //     inputs[0].value = record.Nama;
    //     inputs[1].value = record.Foto;
    //     inputs[2].value = record.Harga;
    //     inputs[3].value = record.Stok;
    //     inputs[4].value = record.Kategori;
    //     inputs[5].value = record.Deskripsi;
    //     inputs[6].value = record.LinkShopee;
    //     inputs[7].value = record.LinkTokped;
    //     inputs[8].value = record.Link.LinkBiliBli;
    //     inputs[9].value = record.linkLazada;
    //     inputs[10].value = record.LinkBukalapak;
    //   })
    //   .catch((error) => console.error(error));
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

// function SetChecked() {
//   var Checked = true;
//   '<%Session["Checked"] = "' + Checked + '"; %>';
// }

// function GetChecked() {
//   var Checked = '<%= Session["Checked"] %>';
//   return Checked;
// }
// Checkbox product
// const checkbox = document.querySelectorAll('#higlight');
// const form = document.querySelectorAll('#checkForm');
// checkbox.forEach((element) => {
//   i = 0;
//   element.addEventListener('change', (event) => {
//     if (event.currentTarget.checked) {
//       alert('Apakah anda yakin ingin memasukan produk ke rekomendasi?');
//       form.action = "Rekomendasi/hapusF/<?= $product['idProduct'];?>";
//     } else {
//       alert('Apakah anda yakin ingin menghapus produk dari rekomendasi?');
//     }
//     i++;
//   });
// });
