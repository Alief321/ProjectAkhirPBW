    <!-- Description -->
    <section id="description">
      <div class="desc-atas">
        <img src="img/logo.png" alt="logo" width="100rem" height="100rem" />
        <p>DESKRIPSI PAW CATSHOP</p>
      </div>
      <div class="desc-bawah">
        <div class="text-area">
          <p>Paw Catshop adalah tempat penyedia produk produk terkait keperluan kucing. Produk yang dijual Paw Catshop meliputi :</p>
          <ol>
            <li>Makanan</li>
            <li>Camilan</li>
            <li>Obat</li>
            <li>Vitamin</li>
            <li>Kandang</li>
            <li>Toilet</li>
            <li>dan masih banyak lagi</li>
          </ol>
          <p>Paw Catshop berdiri tahun 2023 dan sudah memiliki4 cabang. Cabang Paw Catshop berada di Cilacap, Banyumas, Tegal, dan Pemalang</p>
        </div>
      </div>
    </section>
    <!-- Akhir Description -->

    <!-- Galeri -->
    <section id="galeri">
      <div class="desc-atas" style="height: 20%">
        <img src="img/galery-img.png" alt="galeri" width="100rem" height="100rem" />
        <p>Galeri Paw Catshop</p>
      </div>
      <div class="galeri-isi">
      <?php foreach ($data['foto'] as $photo):?>
          <img src="images/Galeri/<?= $photo['Path']?>" alt="<?= $photo['Nama']?>">
        <?php endforeach ?>
      </div>
    </section>
    <!-- Akhir Galeri -->

    <!-- Lokasi -->
    <section id="locationwrap">
      <div class="desc-atas">
        <img src="img/google-maps.png" alt="logo" width="100rem" height="100rem" />
        <p>Lokasi PAW CATSHOP</p>
      </div>
      <div class="lokasi">
        <div class="lokasi-isi">
          <p>Cilacap</p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d247.13594965229885!2d109.08167137988491!3d-7.66430551435646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzknNTEuNCJTIDEwOcKwMDQnNTQuMCJF!5e0!3m2!1sid!2sid!4v1681714594399!5m2!1sid!2sid"
            style="border: 1px solid #cccbcb; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 1rem"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="lokasi-isi">
          <p>Banyumas</p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7912.58685708621!2d109.23654009403408!3d-7.432746699999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e83a622d1a5%3A0xd2102c8d72055b5f!2sVina%20Petshop!5e0!3m2!1sid!2sid!4v1681714703666!5m2!1sid!2sid"
            style="border: 1px solid #cccbcb; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 1rem"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="lokasi-isi">
          <p>Tegal</p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31688.92670183425!2d109.11504451376216!3d-6.876722550613746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9fc38ba6a67%3A0xf0b740a50d2caec0!2sKLINIK%20dan%20PETSHOP%20KING%20Tegal!5e0!3m2!1sid!2sid!4v1681714772300!5m2!1sid!2sid"
            style="border: 1px solid #cccbcb; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 1rem"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="lokasi-isi" id="last-locate">
          <p>Pemalang</p>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253511.63358611683!2d108.9704400884697!3d-6.8763103077872705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fdb2c1c4170fb%3A0xd19691c88e605002!2sPemalang%20Petshop!5e0!3m2!1sid!2sid!4v1681714802936!5m2!1sid!2sid"
            style="border: 1px solid #cccbcb; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 1rem"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <!-- Akhir Lokasi -->
