    <!-- Navbar -->
    <nav class="navDeks">
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
        <div class="modal-isi <?php if($data['judul'] == 'User') echo 'active_mobile';?>">
          <i data-feather="user" class="modal-icon"></i>
          <p>Profile</p>
        </div>
      </a>

      <a href="Keranjang">
        <div class="modal-isi <?php if($data['judul'] == 'Keranjang') echo 'active_mobile';?>">
          <i data-feather="shopping-cart" class="modal-icon"></i>
          <p>Keranjang</p>
        </div>
      </a>

      <?php if($_SESSION["role"] == "admin"):?>
          <?='<a href="Admin">
                <div class="modal-isi" style="color: #147ae0 ">
                  <i data-feather="monitor" class="modal-icon"></i>
                  <p>Admin</p>
                </div>
              </a>';
          ?>
      <?php endif ?>

      <a href="Login">
        <div class="modal-isi" style="color: red">
          <i data-feather="log-out" class="modal-icon"></i>
          <p>Logout</p>
        </div>
      </a>
    </div>
    <!-- akhir modal user -->

    <!-- Navbar Mobile -->
    <nav class="mobile">
      <div class="logo">
        <a href="Home">
          <img src="img/logo.png" alt="logo" id="logo" />
        </a>
        <h1 id="logo_name"><a href="Home">Paw Catshop</a></h1>
      </div>
      <div class="drpdwn">
        <i id="drpdwn" data-feather="align-justify" class="icon"></i>
        <i id="x" data-feather="x" class="icon"></i>
      </div>
    </nav>
    <!-- Akhir Navbar Mobile -->

    <!-- drp dwn menu -->
    <nav class="drpdwn_menu">
      <ul style="width: 100%; margin: 0; padding: 0">
        <a href="Home">
          <li class="<?php if($data['judul'] == 'Home') echo 'active_mobile';?>"><i data-feather="home"></i> Home</li>
        </a>
        <a href="Product">
          <li class="<?php if($data['judul'] == 'Product') echo 'active_mobile';?>"><i data-feather="box"></i>Product</li>
        </a>
        <a href="About">
          <li class="<?php if($data['judul'] == 'About Us') echo 'active_mobile';?>"><i data-feather="info"></i>About Us</li>
        </a>
        <a href="Link">
          <li class="<?php if($data['judul'] == 'Link') echo 'active_mobile';?>"><i data-feather="link"></i>Link</li>
        </a>
        <a href="User">
          <li class="<?php if($data['judul'] == 'User') echo 'active_mobile';?>"><i data-feather="user"></i>Profile</li>
        </a>
        <a href="Keranjang">
          <li class="<?php if($data['judul'] == 'Keranjang') echo 'active_mobile';?>"><i data-feather="shopping-cart"></i>Keranjang</li>
        </a>
        <?php if($_SESSION["role"] == "admin"):?>
          <?='<a href="Admin">
                <li style="color: #147ae0"><i data-feather="monitor"></i>Admin</li>
            </a>';
          ?>
        <?php endif ?>
        <a href="Login">
          <li style="color: red"><i data-feather="log-out"></i>Logout</li>
        </a>
      </ul>
    </nav>
    <!-- Akhir drp dwn menu -->

    <!-- float item -->
    <div class="float_item">
      <img src="img/up-arrow.png" width="60px" height="60px" id="up_arrow" alt="upArrow" />
      <a href="">
        <img src="img/whatsapp.png" width="60px" height="60px" id="wa" alt="wa" />
      </a>
    </div>
    <!-- Akhir float item -->

