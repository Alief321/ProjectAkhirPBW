const next = document.querySelector('#next-carou');
const prev = document.querySelector('#prev-carou');
const carou1 = document.querySelectorAll('.carousel1');
const carou2 = document.querySelectorAll('.carousel2');
const cat = document.querySelector('#categories');
const exp = document.querySelector('.exp');

next.addEventListener('click', function () {
  carou1.forEach((item) => {
    item.style.display = 'none';
    item.style.visibility = 'hidden';
    item.style.height = '0';
    item.style.width = '0';
    item.classList.add('animate-fading');
  });

  carou2.forEach((key) => {
    key.style.display = 'block';
    key.style.visibility = 'visible';
    key.style.height = '100%';
    key.style.width = '45%';
    key.classList.add('animate-fading');
  });
});

prev.addEventListener('click', function () {
  carou2.forEach((item) => {
    item.style.display = 'none';
    item.style.visibility = 'hidden';
    item.style.height = '0';
    item.style.width = '0';
  });

  carou1.forEach((key) => {
    key.style.display = 'block';
    key.style.visibility = 'visible';
    key.style.height = '100%';
    key.style.width = '31%';
  });
});

exp.addEventListener('click', function () {
  window.scrollTo(0, 500);
});
