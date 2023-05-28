    <!-- Isi -->
    <section id="product-detail">
        <div class="prod-pic">
          <div style="display: flex; width: 100%; justify-content: right; height: auto;">
            <i data-feather="shopping-cart" id="shoping-cart"></i>
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
          <p>Kategori: <a href="Product" style="color: #730000; "><?= $data['product']['Category']?></a></p>
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
