const Conpass = document.querySelector('#passwordBaru');
var check = function () {
  if (document.getElementById('password').value != document.getElementById('passwordBaru').value) {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password dan Konfirmasi tidak sesuai';
    Conpass.style.outline = 'red 1px solid';
  } else {
    document.getElementById('message').innerHTML = '';
    Conpass.style.outline = 'green 1px solid';
  }
};
