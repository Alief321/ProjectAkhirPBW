    <!-- Isi -->
    <section id="product-detail">
        <div class="prod-pic">
          <div style="display: flex; width: 100%; justify-content: right; height: auto;">
          <a href="Keranjang/tambah/<?=$data['product']['idProduct'] ?>">  
            <i data-feather="shopping-cart" id="shoping-cart"></i>
          </a>
          </div>
          <div class="img-pic">
            <img src="images/Product/<?= $data['product']['Foto']?>" alt="whiskas" />
          </div>
        </div>
        <div class="prod-text">
          <p class="prod-judul"><?= $data['product']['Nama']?></p>
          <p class="prod-price">Rp<?= number_format($data['product']['Harga'], 0, ',', '.')?></p>
          <div class="stok">
            <p>Stok Barang</p>
            <p><?= number_format($data['product']['Stok'], 0, ',', '.')?></p>
          </div>
          <hr>
          <p>Kategori: <a href="<?php 
            switch($data['product']['Category']){
            case 1:
                echo 'Product//category/1';
                break;
            case 2:
                echo 'Product/category/2';
                break;
            case 3:
                echo 'Product/category/3';
                break;
            case 4:
                echo 'Product/category/4';
                break;
            case 5:
                echo 'Product/category/5';
                break;
        }?>
            " style="color: #730000; ">  <?php 
                        switch($data['product']['Category']){
                            case 1:
                                echo '<p>Makanan & Camilan</p>';
                                break;
                            case 2:
                                echo '<p>Obat & Vitamin</p>';
                                break;
                            case 3:
                                echo '<p>Alat Kebersihan</p>';
                                break;
                            case 4:
                                echo '<p>Kandang & Toilet</p>';
                                break;
                            case 5:
                                echo '<p>Lainnya</p>';
                                break;
                        }
                    ?></a></p>
          <p>Deskripsi Product</p>
          <p class="desk-detail"><?= $data['product']['Deskripsi']?></p>
          <p>Link pembelian</p>
          <div class="link-olshop">
            <a href="<?= $data['product']['LinkShopee']?>" class="link">
              <div class="isi-content" style="background: #ff8678">
                <img src="img/shopee.png" alt="shopee" width="25%" height="90%" />
                <p>Shopee</p>
              </div>
            </a>
            <a href="<?= $data['product']['LinkTokped']?>" class="link">
              <div class="isi-content" style="background: #74c26f">
                <img src="img/tokped.png" alt="shopee" width="25%" height="90%" />
                <p>Tokopedia</p>
              </div>
            </a>
            <a href="<?= $data['product']['LinkBiliBli']?>" class="link">
              <div class="isi-content" style="background: #83c5e3">
                <img src="img/blibli.png" alt="shopee" width="25%" height="90%" />
                <p>Blibli</p>
              </div>
            </a>
            <a href="<?= $data['product']['LinkLazada']?>" class="link">
              <div class="isi-content laz">
                <img src="img/lazada.png" alt="lazada" width="25%" height="90%" />
                <p>Lazada</p>
              </div>
            </a>
            <a href="<?= $data['product']['LinkBukalapak']?>" class="link">
              <div class="isi-content" style="background: #f377ad">
                <img src="img/bukalapak.png" alt="bukalapak" width="25%" height="90%" />
                <p>Bukalapak</p>
              </div>
            </a>
          </div>
       
    </section>
    <!-- Akhir Isi -->
