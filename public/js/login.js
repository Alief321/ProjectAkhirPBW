const hide = document.querySelector('.passhide');
const pass = document.querySelector('#password');

hide.addEventListener('click', function () {
  if (pass.type == 'password') {
    pass.type = 'text';
  } else {
    pass.type = 'password';
  }
});
