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
        <img src="images/Bukti/${myObj.Bukti_invoice}" alt="" width="70%" height="auto" style="margin: auto; display: flex; justify-self: center">`;
    }
  };
  xhttp.open('GET', 'Pesanan/showFoto?id=' + $id, true);
  xhttp.send();
}
