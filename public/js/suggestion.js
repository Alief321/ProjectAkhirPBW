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
// Get hint All
function showHint(str) {
  let hint = document.getElementById('product');
  let no = document.getElementById('sugesto');
  let filter = document.getElementById('filtering');
  let sort = document.getElementById('sorting');
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
          <a href="Keranjang/tambah/${myObj[x].idProduct}">
            <svg xmlns="http://www.w3.org/2000/svg" id="shoping-cart" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg>
        </a>
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
  xhttp.open('GET', 'Product/suggest?keyword=' + str + '&filter=' + filter.value + '&sort=' + sort.value, true);
  xhttp.send();
}

function showHintCategory(str, ctr) {
  let hint = document.getElementById('product');
  let no = document.getElementById('sugesto');
  let filter = document.getElementById('filtering');
  let sort = document.getElementById('sorting');
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
          <a href="Keranjang/tambah/${myObj[x].idProduct}">
            <svg xmlns="http://www.w3.org/2000/svg" id="shoping-cart" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg>
        </a>
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
  xhttp.open('GET', 'Product/suggestCategory/' + ctr + '?keyword=' + str + '&filter=' + filter.value + '&sort=' + sort.value, true);
  xhttp.send();
}

function filter(ctr) {
  let hint = document.getElementById('product');
  let filter = document.getElementById('filtering');
  let sort = document.getElementById('sorting');
  let no = document.getElementById('sugesto');
  let filtermob = document.getElementById('filteringmob');
  let sortmob = document.getElementById('sortingmob');
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
          <a href="Keranjang/tambah/${myObj[x].idProduct}">
            <svg xmlns="http://www.w3.org/2000/svg" id="shoping-cart" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg>
        </a>
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
  filtermob.value = filter.value;
  sortmob.value = sort.value;
  if (ctr != null) {
    xhttp.open('GET', 'Product/filter?filter=' + filter.value + '&sort=' + sort.value + '&category=' + ctr, true);
  } else {
    xhttp.open('GET', 'Product/filter?filter=' + filter.value + '&sort=' + sort.value, true);
  }
  xhttp.send();
}

function mobchange() {
  let filterdesk = document.getElementById('filtering');
  let sort = document.getElementById('sorting');
  let filtermob = document.getElementById('filteringmob');
  let sortmob = document.getElementById('sortingmob');
  filterdesk.value = filtermob.value;
  sort.value = sortmob.value;
  filter();
}
