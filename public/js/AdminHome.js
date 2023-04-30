// home
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
    title: 'Categories Product',
    is3D: true,
  };

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
