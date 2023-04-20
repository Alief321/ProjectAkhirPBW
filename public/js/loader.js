document.onreadystatechange = () => {
  const body = document.querySelector('body');
  const loader = document.querySelector('.loader-hidden');

  if (document.readyState !== 'complete') {
    body.style.visibility = 'hidden';
    loader.style.visibility = 'visible';
  } else {
    body.style.visibility = 'visible';
    loader.style.visibility = 'hidden';
  }
};
