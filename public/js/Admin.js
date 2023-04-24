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
