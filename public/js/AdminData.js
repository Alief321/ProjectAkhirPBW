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
