    <!-- Isi -->
    <div class="isi">
      <div class="isi-kiri">
        <img src="img/profile.png" alt="profile" width="80%" height="80%" style="border-radius: 1rem" />
      </div>
      <div class="isi-kanan">
      <?php Flasher::flash()?>
      <div id="message" style="margin-left: 1rem;"></div>
        <form action="User/update" method="post" style="display: flex">
          <div style="width: 40%">
            <label for="name">Nama </label>
            <label for="email">Email </label>
            <label for="Password">Ubah Password </label>
            <label for="PasswordBaru">Konfirmasi Password </label>
          </div>
          <div style="width: 60%">
            <input type="text" name="name" id="name" value="<?= $data['User']['Nama']?>" disabled /><br />
            <input type="email" name="email" id="email" value="<?= $data['User']['Email']?>" disabled /><br />
            <input type="text" name="Password" id="password" onkeyup='check();' required/><br />
            <input type="text" name="PasswordBaru" id="passwordBaru" onkeyup='check();' required/><br />
            <div class="btn-wrap">
              <button class="btn" type="submit" style="justify-self: end;">Ubah Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Akhir isi -->
    
    <script src="js/signup.js"></script>