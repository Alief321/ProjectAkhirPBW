    <!-- Atas -->
    <div id="logo-row">
      <img src="img/logo.png" alt="logo" width="7.5%" height="90%" />
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
          <input type="text" name="password" id="password" required />
          <br />
          <label for="passwordBaru" class="text">Konfirmasi Password</label>
          <input type="text" name="passwordbaru" id="passwordbaru" required />
          <br />
          <button type="submit" class="login-text">Sign up</button>
        </form>
      </div>
    </div>

    <!-- Akhir Isi -->
    <!-- Script -->
    <script src="js/script.js"></script>
    <script src="js/loader.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
