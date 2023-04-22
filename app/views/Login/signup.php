    <!-- Atas -->
    <div id="logo-row">
      <img src="img/logo.png" alt="logo" class="logo-icon"/>
      <p>PAW CATSHOP</p>
    </div>
    <!-- Akhir Atas -->

  <!-- Isi -->
  <div class="login-isi">
      <div class="signin-kanan">
        <img src="img/signup.png" alt="login" width="75%" height="95%" style="margin-left: 1rem" />
      </div>
      <div class="login-kiri" style="margin-top: 0">
        <p class="Hello">Create Acount</p>
        <p class="sub-text">Silahkan buat akun dengan memasukan data diri anda</p>
        <form action="Home" method="post">
          <label for="email" class="text">Nama</label>
          <input type="text" name="nama" placeholder="Masukkan nama anda" required autofocus />
          <br />
          <label for="email" class="text">Email</label>
          <input type="email" name="email" placeholder="Alief321@gmail.com" required />
          <br />
          <label for="password" class="text">Password</label>
          <input type="password" name="password" id="password" onkeyup='check();' required />
          <br />
          <label for="passwordBaru" class="text">Konfirmasi Password</label>
          <input type="password" name="passwordbaru" id="passwordBaru" onkeyup='check();' required />
          <br />
          <p id="message" style="text-align: center"></p>
          <button type="submit" class="login-text">Sign up</button>
        </form>
      </div>
    </div>

    <!-- Akhir Isi -->
    <!-- Script -->
    <script src="js/script.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/signup.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
