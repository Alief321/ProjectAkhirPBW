/*
  Fungsi Scroll
*/
const scroll = () => {
  const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const scrolled = (winScroll / height) * 100;
  document.getElementById('indicator__bar').style.width = scrolled + '%';
};

/*
    Event Scroll
  */
window.addEventListener('scroll', scroll);
