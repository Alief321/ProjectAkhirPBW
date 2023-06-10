// show Foto
function show($id) {
  const modalFoto = document.querySelector('.modalFoto');
  const cilang = document.getElementById('cilang');

  showFoto($id);
  modalFoto.style.display = 'block';

  cilang.addEventListener('click', function () {
    modalFoto.style.display = 'none';
  });
}

// AJAX seach photo
function showFoto($id) {
  const tempat = document.getElementById('showFoto');

  xhttp = new XMLHttpRequest();
  //Code 4b
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // db = JSON.stringify(this.responseText);
      myObj = JSON.parse(this.responseText);

      tempat.innerHTML = `
      <h1 style="font-size: 2rem; margin: 1rem 0 3rem 0; text-align: center;">${myObj.Nama}</h1>
      <img src="images/Galeri/${myObj.Path}" alt="" width="70%" height="auto" style="margin: auto; display: flex; justify-self: center">`;
    }
  };
  xhttp.open('GET', 'Galeri/showFoto?id=' + $id, true);
  xhttp.send();
}

// edit modal
function edit($id) {
  const modalAdmin = document.querySelector('.modalAdmin');
  const modcancel = document.querySelector('#modcancel');

  showEdit($id);
  modalAdmin.style.display = 'block';
  document.getElementById('formEdit').action = 'Galeri/update/' + $id;

  modcancel.addEventListener('click', function () {
    modalAdmin.style.display = 'none';
  });
}

// edit ajax
function showEdit($id) {
  const tempat = document.querySelector('.isi_edit');

  xhttp = new XMLHttpRequest();
  //Code 4b
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // db = JSON.stringify(this.responseText);
      myObj = JSON.parse(this.responseText);

      tempat.innerHTML = `
      <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Edit Galeri</h1>
      <label for="nama">Nama</label>
      <input type="text" name="nama" value=${myObj.Nama} autofocus required>
      <label for="foto">Foto</label>
      <input type="file" value=${myObj.Path}  name="foto">
    `;
    }
  };
  xhttp.open('GET', 'Galeri/showFoto?id=' + $id, true);
  xhttp.send();
}
