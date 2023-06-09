    <!-- Seputar search -->
    <section id="searchdll">
      <select name="filtering" id="filtering">
        <option value="Terbaru">Terbaru</option>
        <option value="Terhits">Terhits</option>
      </select>
      <div class="searcharea">
      <form action="" id="searchform">
        <input type="search" name="search" id="search" placeholder="Input nama produk..." onkeyup="<?=$data['search']?>" />
        <div class="searchbtn">
          <i data-feather="search" id="search-magnify"></i>
        </div>
      </form>
      <div id="suggest"></div>

      </div>
      <select name="sorting" id="sorting">
        <option value="ascending">Menaik</option>
        <option value="descending">Menurun</option>
      </select>
    </section>
    <!-- Akhir Search -->

    <!-- group -->
    <section id="group-categories">
      <ul class="group-cat-wrap">
        <a href="Product"><li style="margin-left: -2rem" class="category-group <?php if($data['group'] == 'All') echo 'group-active';?>">Semua</li></a>
        <a href="Product/category/1"><li class="category-group <?php if($data['group'] == '1') echo 'group-active';?>">Makanan & Camilan</li></a>
        <a href="Product/category/2"><li class="category-group <?php if($data['group'] == '2') echo 'group-active';?>">Obat & Vitamin</li></a>
        <a href="Product/category/3"><li class="category-group <?php if($data['group'] == '3') echo 'group-active';?>"">Alat Kebersihan</li></a>
        <a href="Product/category/4"> <li class="category-group <?php if($data['group'] == '4') echo 'group-active';?>">Kandang & Toilet</li></a>
        <a href="Product/category/5"><li class="category-group <?php if($data['group'] == '5') echo 'group-active';?>">Lainnya</li></a>
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
        <select name="category" id="catGroup" onchange="window.location.href=this.options [this.selectedIndex].value">
            <option value="Product" class="category-group" <?php if($data['group']=='All'){ echo 'selected';} else{ echo '';} ?>>Semua</option>
            <option value="Product/category/1" class="category-group" <?php if($data['group']=='1'){ echo 'selected';} else{ echo '';} ?>>Makanan & Camilan</option>
            <option value="Product/category/2" class="category-group" <?php if($data['group']=='2'){ echo 'selected';} else{ echo '';} ?>>Obat & Vitamin</option>
            <option value="Product/category/3" class="category-group" <?php if($data['group']=='3'){ echo 'selected';} else{ echo '';} ?>>Alat Kebersihan</option>
            <option value="Product/category/4" class="category-group" <?php if($data['group']=='4'){ echo 'selected';} else{ echo '';} ?>>Kandang & Toilet</option>
            <option value="Product/category/5" class="category-group" <?php if($data['group']== '5'){ echo 'selected';} else{ echo '';} ?>>Lainnya</option>
        </select>
        <!-- Akhir groupcat mobile -->
        <select name="sorting" id="sortingmob">
          <option value="ascending">Menaik</option>
          <option value="descending">Menurun</option>
        </select>
      </div>
      <hr style="border: 1px solid #cecbcb" />
    </section>
    
    <div id="sugesto"></div>
    <!-- isi -->
    <section id="product" >
        <?php foreach ($data['product'] as $product) :?> 
          <div class="prod-card">
            <div class="prod-pic">
              <img src="images/Product/<?= $product['Foto']?>" alt="whiskas" width="60%" />
            </div>
            <div class="prod-text">
          <div class="prod-price">
            <p>Rp<?= number_format($product['Harga'], 0, ',', '.')?></p>
            <a href="Keranjang/tambah/<?=$product['idProduct']?>">
              <i data-feather="shopping-cart" id="shoping-cart"></i>
            </a>
          </div>
          <p class="prod-judul"><?= $product['Nama']?></p>
          <p style="font-size: 0.75rem; margin-top: 0; text-align: justify"><?= $product['Deskripsi']?></p>
          <a href="Product/detail/<?= $product['idProduct']?>">
            <div class="product-more">
              <p>Selengkapnya</p>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach;?>
    </section>
    <!-- akhir isi -->
    </section>

    <!-- js addition-->
    <script src="js/product.js"></script>
    <script src="js/suggestion.js"></script>
    <!-- akhir js addition -->