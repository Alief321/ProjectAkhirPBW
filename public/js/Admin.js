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

// navbar mobile
const navbarmob = document.querySelector('aside');
const utama = document.querySelector('.utama');
const cilang2 = document.querySelector('#cilang2');
const aligalig = document.querySelector('#aligalig');

aligalig.addEventListener('click', function () {
  navbarmob.style.width = '60%';
  utama.style.width = '40%';
  utama.style.left = '60%';
  aligalig.style.display = 'none';
  aligalig.style.width = '0%';
  cilang2.style.display = 'block';
  cilang2.style.width = '100%';
});

cilang2.addEventListener('click', function () {
  navbarmob.style.width = '0%';
  utama.style.width = '97.5%';
  utama.style.left = '2.5%';
  aligalig.style.display = 'block';
  aligalig.style.width = '100%';
  cilang2.style.display = 'none';
  cilang2.style.width = '0%';
});
