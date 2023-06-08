    <!-- Isi -->
    <section id="keranjang">
      <div style="width: 100%; height: 1.7rem; display: flex; justify-content: center; align-items: center;">
      <?php Flasher::flash()?>
      </div>
    <?php if ($data['keranjang']== null):?>
      <p style="text-align: center; justify-content: center;">Belum ada daftar keranjang</p>
    <?php else:?>
    <?php foreach ($data['keranjang'] as $cart) :?> 
    <div class="product">
      <div class="prod-pic">
        <img src="images/Product/<?=$cart['Foto']?>" alt="whiskas" height="95%"  id="whiskas"/>
      </div>
      <div class="prod-text">
        <p class="prod-judul"><?= $cart['Nama']?></p>
        <p class="prod-price">Rp<?= number_format($cart['Harga'], 0, ',', '.')?></p>
        <div class="stok">
          <p>Stok Barang</p>
          <p><?= number_format($cart['Stok'], 0, ',', '.')?></p>
        </div>
        <div class="tombol-tombol">
          <a href="Product/detail/<?=$cart['idProduct']?>">
            <p class="tombol" style="background-color: #9f4629">Selengkapnya</p>
          </a>
          <p class="tombol" style="background-color: #e1901d;" id="linkBeli">Link Pembelian</p>
          <a href="Keranjang/hapus/<?= $cart['idKeranjang']?>">
            <i data-feather="trash-2" class="tombol" style="background-color: #e33434" id="delete"></i>
          </a>
        </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php endif;?>
      <!-- Modal -->
      <div class="modal-link">
        <div class="modal-atas">
          <p>Link pembelian</p>
          <p id="silang">x</p>
        </div>
        <div class="Link-olshop">
          <a href="" class="link">
          <div class="isi-content" style="background: #ff8678">
            <img src="img/shopee.png" alt="shopee" width="25%" height="90%" />
            <p>Shopee</p>
          </div>
          </a>
          <a href="" class="link">
          <div class="isi-content" style="background: #74c26f">
            <img src="img/tokped.png" alt="shopee" width="25%" height="90%" />
            <p>Tokopedia</p>
          </div>
          </a>
          <a href="" class="link">
          <div class="isi-content" style="background: #83c5e3">
            <img src="img/blibli.png" alt="shopee" width="25%" height="90%" />
            <p>Blibli</p>
          </div>
          </a>
          <a href="" class="link">
          <div class="isi-content laz">
            <img src="img/lazada.png" alt="lazada" width="25%" height="90%" />
            <p>Lazada</p>
          </div>
          </a>
          <a href="" class="link">
          <div class="isi-content" style="background: #f377ad">
            <img src="img/bukalapak.png" alt="bukalapak" width="25%" height="90%" />
            <p>Bukalapak</p>
          </div>
          </a>
        </div>
      </div>
      <!-- Akhir Modal -->

    </section>
    <!-- Akhir Isi -->

    <!-- js additional -->
    <script src="js/cart.js"></script>
    <!-- Akhir additional -->