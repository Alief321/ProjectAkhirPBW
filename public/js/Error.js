// Randomly rotate the cat image on page load
window.addEventListener('load', function () {
  var catImage = document.querySelector('img');
  var rotation = Math.floor(Math.random() * 360);
  catImage.style.transform = 'rotate(' + rotation + 'deg)';
});
