// non JSON
function showHint(str) {
  const hint = document.getElementById('suggest');
  if (str.length == 0) {
    //Code 4a
    hint.innerHTML = '';
    hint.style.border = '0px';
    return;
  }
  xhttp = new XMLHttpRequest();
  //Code 4b
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      hint.innerHTML = this.responseText;
      hint.style.border = '1px solid #A5ACB2';
    }
  };
  xhttp.open('GET', 'Product/suggest?keyword=' + str, true);
  xhttp.send();
}
