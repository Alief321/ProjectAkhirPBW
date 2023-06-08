// Formatter nomber
function formatNumber(number) {
  var formattedNumber = '';
  var counter = 0;

  // Mengubah angka menjadi string dan membalik urutan karakternya
  var reversedNumber = String(number).split('').reverse().join('');

  // Mengiterasi setiap karakter angka terbalik
  for (var i = 0; i < reversedNumber.length; i++) {
    formattedNumber += reversedNumber[i];
    counter++;

    // Menambahkan tanda "." setelah setiap tiga digit
    if (counter === 3 && i !== reversedNumber.length - 1) {
      formattedNumber += '.';
      counter = 0;
    }
  }
  // Membalik urutan karakter kembali ke urutan semula
  formattedNumber = formattedNumber.split('').reverse().join('');

  return formattedNumber;
}

// JSON
function showHint(str) {
  let hint = document.getElementById('product');
  let no = document.getElementById('sugesto');
  let result = '';

  xhttp = new XMLHttpRequest();
  //Code 4b
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // db = JSON.stringify(this.responseText);
      myObj = JSON.parse(this.responseText);

      for (let x in myObj) {
        result +=
          `<div class="prod-card">
        <div class="prod-pic">
          <img src="images/Product/${myObj[x].Foto}" alt="${myObj[x].Nama}" width="60%" />
        </div>
        <div class="prod-text">
          <div class="prod-price">
            <p>Rp` +
          formatNumber(myObj[x].Harga) +
          `</p>
            <i data-feather="shopping-cart" id="shoping-cart"></i>
          </div>
        <p class="prod-judul">${myObj[x].Nama}</p>
        <p style="font-size: 0.75rem; margin-top: 0; text-align: justify">${myObj[x].Deskripsi}</p>
        <a href="Product/detail/${myObj[x].idProduct}">
      <div class="product-more">
      <p>Selengkapnya</p>
    </div>
  </a>
</div>
</div>`;
      }
      if (result == '') {
        no.innerHTML = `<div style=" text-align: center; width: 100%; height: 100%; margin:1rem">Keyword yang anda ketik tidak sesuai dengan produk manapun</div> `;
        hint.innerHTML = '';
      } else {
        hint.innerHTML = result;
        no.innerHTML = '';
      }
    }
  };
  xhttp.open('GET', 'Product/suggest?keyword=' + str, true);
  xhttp.send();
}
