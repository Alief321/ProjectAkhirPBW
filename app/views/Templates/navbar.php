    <!-- Navbar -->
    <nav>
        <div class="logo">
            <a href="Home">
                <img src="img/logo.png" alt="logo" id="logo" />
                <h1 id="logo_name"><a href="Home">Paw Catshop</a></h1>
            </a>
        </div>
        <ul class="nav_items">
            <a href="Home"><li class="nav_item <?php if($data['judul'] == 'Home') echo 'active';?>">Home</li></a>
            <a href="Product"><li class="nav_item <?php if($data['judul'] == 'Product') echo 'active';?>">Product</li></a>
            <a href="About"><li class="nav_item <?php if($data['judul'] == 'About Us') echo 'active';?>">About Us</li></a>
            <a href="Link"><li class="nav_item <?php if($data['judul'] == 'Link') echo 'active';?>">Link</li></a>
        </ul>

        <div class="login">
            <i data-feather="user" class="login_item"></i>
        </div>
    </nav>
    <!-- Akhir Navbar -->

     <!-- Scroll Indicator -->
     <div class="indicator">
      <div class="indicator__container">
        <div id="indicator__bar"></div>
      </div>
    </div>
    <!-- End of scroll indicator -->

    <!-- modal user -->
    <div id="modal">
      <a href="User">
        <div class="modal-isi">
          <i data-feather="user" class="modal-icon"></i>
          <p>Profile</p>
        </div>
      </a>

      <a href="Home">
        <div class="modal-isi">
          <i data-feather="shopping-cart" class="modal-icon"></i>
          <p>Keranjang</p>
        </div>
      </a>

      <a href="Login">
        <div class="modal-isi" style="color: red">
          <i data-feather="log-out" class="modal-icon"></i>
          <p>Logout</p>
        </div>
      </a>
    </div>
    <!-- akhir modal user -->

    <!-- float item -->
    <div class="float_item">
      <img src="img/up-arrow.png" width="60px" height="60px" id="up_arrow" alt="upArrow" />
      <a href="">
        <img src="img/whatsapp.png" width="60px" height="60px" id="wa" alt="wa" />
      </a>
    </div>
    <!-- Akhir float item -->
