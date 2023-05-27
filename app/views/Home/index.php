
  <!-- Hiro -->
   <section id="hiro">
      <div class="hiro_content animate-bottom">
        <div class="content-wrap">
          <p style="margin: 0rem">PAW CATSHOP</p>
          <p class="sub">Tempat Terbaik Untuk Keperluan Si Empus!!</p>
          <div class="socmed">
            <a href="https://www.instagram.com/zv.alief/" target="_blank">
              <i style="fill: rgb(241, 114, 114)" data-feather="instagram" class="socmed_item socmed_itemHome"></i>
            </a>
            <a href="https://www.facebook.com/aliefta.zulvansyah" target="_blank">
              <i style="fill: #163aea" data-feather="facebook" class="socmed_item socmed_itemHome"> </i>
            </a>
            <a href="https://twitter.com/Mahklukbumi6" target="_blank">
              <i style="fill: #1684ea" data-feather="twitter" class="socmed_item socmed_itemHome"> </i>
            </a>
            <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgzGsmDsbFtZLXMmhpkDtsHjFhgCV?compose=CllgCJvqKMLTGgWzZCmFZGvNDrzwqjbFHqBVnBRPQbZTbtNMlhPWgnFvlhGCZdwlRZQNkFpRRCL" target="_blank">
              <i style="fill: #ead116" data-feather="mail" class="socmed_item socmed_itemHome"> </i>
            </a>
          </div>
          <div class="exp">Explore</div>
        </div>
      </div>
    </section>
    <!-- Akhir Hiro -->

    <!-- Categories -->
    <section id="categories">
      <p class="button-carou" id="prev-carou"><</p>
      <div class="categories_content carousel1">
        <a href="Product">
          <div class="cat-pic">
            <div class="cat-picture">
              <img src="img/pur kucing.png" alt="categories" />
            </div>
          </div>
          <div class="cat-text">
            <p>Makanan & Camilan</p>
          </div>
        </a>
      </div>
      <div class="categories_content carousel1">
        <a href="Product">
          <div class="cat-pic">
            <div class="cat-picture">
              <img src="img/vitamin 1.png" alt="categories" />
            </div>
          </div>
          <div class="cat-text">
            <p>Obat & Vitamin</p>
          </div>
        </a>
      </div>
      <div class="categories_content carousel1">
        <a href="Product">
          <div class="cat-pic">
            <div class="cat-picture">
              <img src="img/clean.png" alt="categories" />
            </div>
          </div>
          <div class="cat-text">
            <p>Alat Kebersihan</p>
          </div>
        </a>
      </div>
      <div class="categories_content carousel2">
        <a href="Product">
          <div class="cat-pic">
            <div class="cat-picture">
              <img src="img/hamster.png" alt="categories" />
            </div>
          </div>
          <div class="cat-text">
            <p>Kandang & toilet</p>
          </div>
        </a>
      </div>
      <div class="categories_content carousel2">
        <a href="Product">
          <div class="cat-pic">
            <div class="cat-picture">
              <img src="img/kitty.png" alt="categories" />
            </div>
          </div>
          <div class="cat-text">
            <p>Lainnya</p>
          </div>
        </a>
      </div>
      <p class="button-carou" id="next-carou">></p>
    </section>
    <!-- Akhir Categories -->

    <!-- Rekomendasi -->
    <section id="recom">
      <div class="recom-box">
        <p class="recom-text">REKOMENDASI</p>
      </div>
      <div class="recom-content">
      <?php foreach ($data['rekomendasi'] as $rekom):?>
        <div class="recom-isi">
          <div class="recom-white">
            <div class="recom-pic">
              <img src="images/Galeri/<?= $rekom['Foto']?>" alt="<?=$rekom['Nama']?>" width="70%" height="100%" />
            </div>
            <div class="recom-price">
              <div class="cart">
                <i data-feather="shopping-cart" id="shoping-cart"></i>
              </div>
              <p class="recom-price-text">Rp<?=$rekom['Harga']?></p>
            </div>
          </div>
          <div class="recom-isi-text">
            <p class="recom-text-judul"><?=$rekom['Nama']?></p>
            <p class="recom-text-detail"><?=$rekom['Deskripsi']?></p>
            <a href="Product/detail/<?=$rekom["idProduct"]?>">
              <div class="recom-more">
                <p>Selengkapnya</p>
              </div>
            </a>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </section>
    <!-- Akhir Rekomendasi -->

    <!-- Galeri -->
    <section id="galery">
      <div class="galeri-isi">
        <?php foreach ($data['galeri'] as $photo):?>
          <img src="images/Galeri/<?= $photo['Path']?>" alt="<?= $photo['Nama']?>">
        <?php endforeach ?>
      </div>
    </section>
    <!-- Akhir Galeri -->

    <!-- Script home -->
    <script src="js/home.js"></script>
    <!-- Akhir Script home -->