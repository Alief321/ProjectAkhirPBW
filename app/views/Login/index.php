    <!-- Atas -->
    <div id="logo-row">
      <img src="img/logo.png" alt="logo" width="7.5%" height="90%" />
      <p>PAW CATSHOP</p>
    </div>
    <!-- Akhir Atas -->

    <!-- Isi -->
    <div class="login-isi">
      <div class="login-kiri">
        <p class="Hello">Hey Hello 👋🏻</p>
        <p class="sub-text">Silahkan login dengan memasukan data diri anda</p>
        <form action="Home" method="post">
          <label for="email" class="text">Email</label>
          <input type="email" name="email" placeholder="Alief321@gmail.com" required autofocus />
          <br />
          <label for="password" class="text">Password</label>
          <input type="password" name="password" id="password" required />
          <br />
          <div class="remme">
            <div style="display: flex; justify-content: start; align-items: start">
              <input type="checkbox" style="margin: 0 0.5rem 0 0" />
              <span>Remember me</span>
            </div>
            <a href="">
              <span id="passforgot">Forgot Password</span>
            </a>
          </div>
          <button class="login-text" type="submit">Login</button>
        </form>

        <div style="display: flex; margin: 1rem 0 0 5rem; overflow: hidden; width: 60%; color: #b6b6b6; font-size: 0.8rem">
          <hr />
          <p>or</p>
          <hr />
        </div>
        <a href="Signup">
          <div class="signin">
            <i data-feather="user-plus"></i>
            <p>Sign In or Create Acount</p>
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
    <script>
      feather.replace();
    </script>
  </body>
</html>
