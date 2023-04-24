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
