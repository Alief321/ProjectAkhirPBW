    <!-- Seputar search -->
    <section id="searchdll">
      <select name="filtering" id="filtering">
        <option value="Terbaru">Terbaru</option>
        <option value="Terhits">Terhits</option>
      </select>
      <form action="" id="searchform">
        <input type="search" name="search" id="search" placeholder="Input nama produk..." />
        <div class="searchbtn">
          <i data-feather="search" id="search-magnify"></i>
        </div>
      </form>
      <select name="sorting" id="sorting">
        <option value="ascending">Menaik</option>
        <option value="descending">Menurun</option>
      </select>
    </section>
    <!-- Akhir Search -->

    <!-- group -->
    <section id="group-categories">
      <ul class="group-cat-wrap">
        <li style="margin-left: -2rem" class="group-active category-group">Semua</li>
        <li class="category-group">Makanan & Camilan</li>
        <li class="category-group">Obat & Vitamin</li>
        <li class="category-group">Alat Kebersihan</li>
        <li class="category-group">Kandang & Toilet</li>
        <li class="category-group">Lainnya</li>
      </ul>
      <hr style="border: 1px solid #cecbcb" />
    </section>
    <!-- akhir group -->

    <section id="mobile-option">
      <div class="wrapMobile">
        <select name="filtering" id="filteringmob">
          <option value="Terbaru">Terbaru</option>
          <option value="Terhits">Terhits</option>
        </select>
        <!-- groupcat mobile -->
        <select name="category" id="catGroup">
            <option class="category-group">Semua</option>
            <option class="category-group">Makanan & Camilan</option>
            <option class="category-group">Obat & Vitamin</option>
            <option class="category-group">Alat Kebersihan</option>
            <option class="category-group">Kandang & Toilet</option>
            <option class="category-group">Lainnya</option>
        </select>
        <!-- Akhir groupcat mobile -->
        <select name="sorting" id="sortingmob">
          <option value="ascending">Menaik</option>
          <option value="descending">Menurun</option>
        </select>
      </div>
      <hr style="border: 1px solid #cecbcb" />
    </section>
    
    <!-- isi -->
    <section id="product">
      <?php 
      for ($i=0; $i <16 ; $i++) { 
        echo '<div class="prod-card">
        <div class="prod-pic">
          <img src="img/whiskas.png" alt="whiskas" width="60%" />
        </div>
        <div class="prod-text">
          <div class="prod-price">
            <p>RP29.502</p>
            <i data-feather="shopping-cart" id="shoping-cart"></i>
          </div>
          <p class="prod-judul">Whiskas 4Pcs Pouch Sachet Adult Tuna And White Fish Flavour</p>
          <p style="font-size: 0.75rem; margin-top: 0; text-align: justify">Kalau untuk kucing kesayangan, pastinya kamu harus memberikan makanan bernutrisi terbaik! Whiskas Pouch Adult 1+ ...</p>
          <a href="Product/detail">
            <div class="product-more">
              <p>Selengkapnya</p>
            </div>
          </a>
        </div>
      </div>';
      }?>
    </section>
    <!-- akhir isi -->
    </section>

    <!-- js addition-->
    <script src="js/product.js"></script>
    <!-- akhir js addition -->