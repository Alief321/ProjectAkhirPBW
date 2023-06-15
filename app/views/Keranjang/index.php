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
        <img src="images/Product/<?=$cart['Foto']?>" alt="<?=$cart['Nama']?>" height="95%"  id="whiskas"/>
      </div>
      <div class="prod-text">
        <p class="prod-judul"><?= $cart['Nama']?></p>
        <p class="prod-price">Rp<?= number_format($cart['Harga'], 0, ',', '.')?></p>
        <div class="stok">
          <p>Stok Barang</p>
          <p><?= number_format($cart['Stok'], 0, ',', '.')?></p>
        </div>
        <div class="tombol-tombol">
          <a href="Pesanan/index/<?= $cart['idProduct']?>">
            <p class="tombol" style="background-color: #4DB730;">Beli Produk</p>
          </a>
          <a href="Keranjang/hapus/<?= $cart['idKeranjang']?>">
            <i data-feather="trash-2" class="tombol" style="background-color: #e33434" id="delete"></i>
          </a>
        </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php endif;?>

    </section>
    <!-- Akhir Isi -->

    <!-- js additional -->
    <script src="js/cart.js"></script>
    <!-- Akhir additional -->