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

// edit modal
function editModal($id) {
  const modalAdmin = document.querySelector('.modalAdmin');
  const modcancel = document.querySelector('#modcancel');
  let form = document.getElementById('formEdit').formAction;

  showModalEdit($id);
  modalAdmin.style.display = 'block';
  form = 'Product/update/' + $id;

  modcancel.addEventListener('click', function () {
    modalAdmin.style.display = 'none';
  });
}

function showModalEdit($id) {
  const tempat = document.querySelector('.isi_edit');

  xhttp = new XMLHttpRequest();
  //Code 4b
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // db = JSON.stringify(this.responseText);
      myObj = JSON.parse(this.responseText);

      let link1 = myObj.LinkShopee == null ? '' : myObj.LinkShopee;
      let link2 = myObj.LinkTokped == null ? '' : myObj.LinkTokped;
      let link3 = myObj.LinkBiliBli == null ? '' : myObj.LinkBiliBli;
      let link4 = myObj.LinkLazada == null ? '' : myObj.LinkLazada;
      let link5 = myObj.LinkBukalapak == null ? '' : myObj.LinkBukalapak;
      let option1 = myObj.Category == 1 ? `<option value="1" selected> Makanan & Camilan</option>` : `<option value="1"> Makanan & Camilan</option>`;
      let option2 = myObj.Category == 2 ? `<option value="2" selected> Obat & Vitamin</option>` : `<option value="2"> Obat & Vitamin</option>`;
      let option3 = myObj.Category == 3 ? `<option value="3" selected> Alat Kebersihan</option>` : `<option value="3"> Alat Kebersihan</option>`;
      let option4 = myObj.Category == 4 ? `<option value="4" selected> Kandang & Toilet</option>` : `<option value="4"> Kandang & Toilet</option>`;
      let option5 = myObj.Category == 5 ? `<option value="5" selected> Lainnya</option>` : `<option value="5"> Lainnya</option>`;
      tempat.innerHTML =
        `
      <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Tambah Produk</h1>
      <label for="nama">Nama Produk</label>
      <input type="text" name="nama" value="${myObj.Nama}" autofocus required>
      <label for="foto">Foto Produk</label>
      <input type="file" name="foto" value="${myObj.Foto}">
      <label for="harga">Harga</label>
      <input type="number" name="harga" required value="${myObj.Harga}">
      <label for="stok">Stok</label>
      <input type="number" name="stok" required value="${myObj.Stok}">
      <label for="kategori">Kategori</label>
      <select name="kategori" id="Kategori" value="${myObj.Category}">
      ` +
        option1 +
        option2 +
        option3 +
        option4 +
        option5 +
        `
      </select>
      <label for="deskripsi">Deskripsi</label>
      <textarea name="deskripsi" id="Deskripsi" cols="60" rows="8"required> ${myObj.Deskripsi}</textarea>
      <label for="shopee">Link Shopee</label>
      <input type="url" name="shopee" value="${link1}">
      <label for="tokped">Link Tokopedia</label>
      <input type="url" name="tokped" value="${link2}">
      <label for="blibli">Link Blibli</label>
      <input type="url" name="blibli" value="${link3}">
      <label for="lazada">Link Lazada</label>
      <input type="url" name="lazada" value="${link4}">
      <label for="bukalapak">Link Bukalapak</label>
      <input type="url" name="bukalapak" value="${link5}">
    `;
    }
  };
  xhttp.open('GET', 'Product/edit?id=' + $id, true);
  xhttp.send();
}
// showmodalEdit

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
