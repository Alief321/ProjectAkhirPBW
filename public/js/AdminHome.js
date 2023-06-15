// home
google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  xhttp = new XMLHttpRequest();
  //Code 4b
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // db = JSON.stringify(this.responseText);
      myObj = JSON.parse(this.responseText);
      cat1 = myObj[0].count;
      cat2 = myObj[1].count;
      cat3 = myObj[2].count;
      cat4 = myObj[3].count;
      cat5 = myObj[4].count;
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Makanan & Camilan', cat1],
        ['Obat & Vitamin', cat2],
        ['Kandang & Toilet', cat3],
        ['Alat Kebersihan', cat4],
        ['Lainnya', cat5],
      ]);
      var options = {
        title: 'Categories Product',
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  };
  xhttp.open('GET', 'Product/count', true);
  xhttp.send();
}
