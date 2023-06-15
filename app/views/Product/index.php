    <!-- Seputar search -->
    <section id="searchdll">
      <select name="filtering" id="filtering" onchange="<?=$data['sort']?>">
        <option value="idProduct">Terbaru</option>
        <option value="Nama">Abjad</option>
      </select>
      <div class="searcharea">
      <div id="searchform">
        <input type="text" name="search" id="search" placeholder="Input nama produk..." onkeyup="<?=$data['search']?>" />
        <div class="searchbtn">
          <i data-feather="search" id="search-magnify"></i>
        </div>
      </div>
      <div id="suggest"></div>
      </div>

      <select name="sorting" id="sorting" onchange="<?=$data['sort']?>">
        <option value="ASC">Menaik</option>
        <option value="DESC">Menurun</option>
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
        <select name="filtering" id="filteringmob" onchange="mobchange()">
          <option value="idProduct">Terbaru</option>
          <option value="Nama">Abjad</option>
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
        <select name="sorting" id="sortingmob" onchange="mobchange()">
          <option value="ASC">Menaik</option>
          <option value="DESC">Menurun</option>
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
            <svg xmlns="http://www.w3.org/2000/svg" id="shoping-cart" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM252 160c0 11 9 20 20 20h44v44c0 11 9 20 20 20s20-9 20-20V180h44c11 0 20-9 20-20s-9-20-20-20H356V96c0-11-9-20-20-20s-20 9-20 20v44H272c-11 0-20 9-20 20z"/></svg>
            </a>
          </div>
          <p class="prod-judul"><?= $product['Nama']?></p>
          <br>
          <p style="font-size: 0.85rem; margin-top: 0; text-align: justify"><?= mb_strimwidth($product['Deskripsi'], 0, 30, "..");?></p>
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