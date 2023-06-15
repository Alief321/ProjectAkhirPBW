    <!-- Isi -->
    <section id="product-detail">
        <div class="prod-pic">
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
          <br>
          <a href="Keranjang/tambah/<?=$data['product']['idProduct'] ?>">  
            <i data-feather="shopping-cart" id="shoping-cart"></i>
          </a>
    </section>
    <!-- Akhir Isi -->
