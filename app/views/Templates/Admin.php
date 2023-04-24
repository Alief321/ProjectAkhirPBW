<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="MoqNAD8U5v-TpvU8J2oO992zgZwQRteW1zyVZVo-NsE" />
    <base href="<?= BASEURL?>" />
    <link rel="stylesheet" href="css/loader.css" />
    <link rel="stylesheet" href="css/Admin.css">
    <link rel="icon" type="image/png" href="img/logo.png" />
    <!-- Ini buat icon -->
    <script src="js/feather.min.js"></script>
    <title>Paw Catshop | <?= $data['judul'] ?></title>
  </head>
  <body style="visibility: hidden;">
     <!-- Loader -->
    <div class="loader loader-hidden">
      <img src="img/loading.gif" alt="Loader Image" width="100%" />
    </div>
    <!-- End of Loader -->
    <section class="main">
        <aside>
            <ul>
                <a href="Admin"><li class="nav_item <?php if($data['judul'] == 'Admin') echo 'active';?>">Home</li></a>
                <a href="Admin/Rekomendasi"><li class="nav_item <?php if($data['judul'] == 'Rekomendasi') echo 'active';?>">Rekomendasi</li></a>
                <a href="Admin/Product"><li class="nav_item <?php if($data['judul'] == 'ProductAdmin') echo 'active';?>">Product</li></a>
                <a href="Admin/Galeri"><li class="nav_item <?php if($data['judul'] == 'Galeri') echo 'active';?>">Galeri</li></a>
                <a href="Home" target="_blank"><li class="nav_item">Main Page</li></a>
            </ul>
        </aside>

        <section style="display:block; width:100%; left: 20%; ">
            <section style=" height:10%; width:80%; display:flex; justify-content: end; column-gap: 2rem; overflow: hidden; position: fixed; top: 0; right:0; z-index:99">
                <div class="toggle-switch">
                    <label class="switch-label">
                    <input type="checkbox" class="checkbox" onclick="toggleTheme('dark')" onreset="toggleTheme('light')">
                    <span class="slider"></span>
                    </label>
                </div>  
                <div class="userp">
                    <i data-feather="user" style="width: 70%; height: 70%;"></i>
                </div>
            </section>
            <?php include($data['content']);?>
        </section>
    </section>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="js/Admin.js"></script>
    <script src="js/loader.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>