    <!-- Atas -->
    <div id="logo-row">
      <img src="img/logo.png" alt="logo" class="logo-icon"/>
      <p>PAW CATSHOP</p>
    </div>
    <!-- Akhir Atas -->

   <!-- Isi -->
   <div class="login-isi">
      <div class="login-kanan-kecil">
        <img src="img/login-img.png" alt="login" width="95%" height="95%" style="margin-left: 1rem" />
      </div>
      <div class="login-kiri">
        <div class="Hello">
            <?php Flasher::flash()?>
        </div>
        <p class="Hello">Hey Hello 👋🏻</p>
        <p class="sub-text">Silahkan login dengan memasukan data diri anda</p>
        <form action="Home" method="post">
          <label for="email" class="text">Email</label>
          <input type="email" name="email" placeholder="Alief321@gmail.com" required autofocus />
          <br />
          <label for="password" class="text">Password</label>
          <div class="eye">
            <input type="password" name="password" id="password" required />
            <div class="passhide">
              <i data-feather="eye" id="passhide"></i>
            </div>
          </div>
          <br />
          <div class="remme">
            <div class="remember">
              <input type="checkbox" name="remember" id="remember"/>
              <label for="remember">Remember me</label>
            </div>
            <div class="passforgot">
              <a href="">
                <span id="passforgot">Forgot Password</span>
              </a>
            </div>
          </div>
          <button type="submit" class="login-text">Login</button>
        </form>

        <div id="hrhr">
          <hr />
          <p>or</p>
          <hr />
        </div>
        <a href="Signup">
          <div class="signin">
            <i data-feather="user-plus"></i>
            <p>Sign up or Create Acount</p>
          </div>
        </a>
      </div>
      <div class="login-kanan">
        <img src="img/login-img.png" alt="login" width="95%" height="95%" style="margin-left: 1rem" />
      </div>
    </div>
    <!-- Akhir Isi -->

    <!-- Script -->
    <script src="js/script.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/login.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
