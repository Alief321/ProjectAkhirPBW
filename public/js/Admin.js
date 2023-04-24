google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Makanan & Camilan', 11],
    ['Obat & Vitamin', 2],
    ['Kandang & Toilet', 2],
    ['Alat Kebersihan', 2],
    ['Lainnya', 7],
  ]);

  var options = {
    title: 'Categories',
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));

  chart.draw(data, options);
}

// Dark toggle
const htmlEl = document.getElementsByTagName('html')[0];

function toggleTheme(theme) {
  htmlEl.dataset.theme = theme;
}

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

// show Foto
const prevFoto = document.querySelectorAll('.prevFoto');
const modalFoto = document.querySelector('.modalFoto');
const cilang = document.getElementById('cilang');
prevFoto.forEach((element) => {
  element.addEventListener('click', function () {
    modalFoto.style.display = 'block';
  });
});
cilang.addEventListener('click', function () {
  modalFoto.style.display = 'none';
});

// delete data
const del = document.querySelectorAll('.trash');
del.forEach((element) => {
  element.addEventListener('click', function () {
    confirm('Apakah anda yakin ingin menghapus data?');
  });
});

// modal user
const user = document.querySelector('#userp');
const drpdwn = document.querySelector('#modalprof');
document.onload = drpdwn.style.display = 'none';
user.addEventListener('click', function () {
  if (drpdwn.style.display == 'none') {
    drpdwn.style.display = 'block';
  } else {
    drpdwn.style.display = 'none';
  }
});
