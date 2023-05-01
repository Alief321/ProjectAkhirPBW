<section id="isiAdmin">
        <div style="width:100%; display: flex; height: auto; justify-content: start; column-gap: 1rem;">
            <button id="create">Create</button>
            <?php Flasher::flash()?>
        </div>
        <table>   
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Link Shopee</th>
                    <th>Link Tokped</th>
                    <th>Link Bilibili</th>
                    <th>Link Lazada</th>
                    <th>Link Bukalapak</th>
                    <th>Rekomendasi</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php foreach ($data['product'] as $product) :?> 
                    <td><?=$i;?></td>
                    <td><?= $product['Nama'] ;?></td>
                    <td><?= $product['Harga'] ;?></td>
                    <td><?= $product['Stok'] ;?></td>
                    <td><?= $product['Category'] ;?></td>
                    <td><?= $product['Deskripsi'] ;?></td>
                    <td><?= $product['LinkShopee'] ;?></td>
                    <td><?= $product['LinkTokped'] ;?></td>
                    <td><?= $product['LinkBiliBli'] ;?></td>
                    <td><?= $product['LinkLazada'] ;?></td>
                    <td><?= $product['LinkBukalapak'] ;?></td>
                    <td>
                        <form action="Rekomendasi/tambah" method="post" id="checkForm" enctype="multipart/form-data">
                            <input type="checkbox" name="higlight" id="higlight" onChange="this.form.submit()">
                            <input type="hidden" name="nama" value="<?= $product['Nama'] ;?>" />
                            <input type="hidden" name="harga" value="<?= $product['Harga'] ;?>" />
                            <input type="hidden" name="deskripsi" value="<?= $product['Deskripsi'] ;?>" />
                            <input type="hidden" name="foto" value="<?= $product['Foto'] ;?>">
                        </form>
                    </td>
                    <td>
                            <div class="edit" data-id="<?= $product['idProduct'];?>">
                            <i data-feather="edit" id="edit"> </i>
                            </div>
                    </td>
                    <td>
                        <a href="<?= BASEURL;?>Product/hapus/<?= $product['idProduct'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data')">
                            <div class="trash">
                                <i data-feather="trash-2" id="trash"> </i>
                            </div>
                        </a>
                    </td>
                    </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- modal edit -->
        <div class="modalAdmin">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Edit Produk</h1>
                <label for="Nama">Nama Produk</label>
                <input type="text" name="Nama" autofocus required>
                <label for="Foto">Foto Produk</label>
                <input type="file" name="Foto">
                <label for="Harga">Harga</label>
                <input type="number" name="Harga" required>
                <label for="Stok">Stok</label>
                <input type="number" name="Stok" required>
                <label for="Kategori">Kategori</label>
                <select name="Kategori" id="Kategori">
                    <option value="Makanan & Camilan"> Makanan & Camilan</option>
                    <option value="Obat & Vitamin"> Obat & Vitamin</option>
                    <option value="Alat Kebersihan"> Alat Kebersihan</option>
                    <option value="Kandang & Toilet"> Kandang & Toilet</option>
                    <option value="Lainnya"> Lainnya</option>
                </select>
                <label for="Deskripsi">Deskripsi</label>
                <textarea name="Deskripsi" id="Deskripsi" cols="60" rows="8" required></textarea>
                <label for="Shopee">Link Shopee</label>
                <input type="url" name="Shopee">
                <label for="Tokped">Link Tokopedia</label>
                <input type="url" name="Tokped">
                <label for="Blibli">Link Blibli</label>
                <input type="url" name="Blibli">
                <label for="Lazada">Link Lazada</label>
                <input type="url" name="Lazada">
                <label for="Bukalapak">Link Bukalapak</label>
                <input type="url" name="Bukalapak">
                <div class="button">
                    <button type="button" id="modcancel">Cancel</button>
                    <button type="submit" id="modedit">Edit</button>
                </div>
            </form>
        </div>
        <!-- Akhir modal edit -->

        <!-- modal create -->
        <div class="modalCreate">
            <form action="Product/tambah" method="post" enctype="multipart/form-data">
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Tambah Produk</h1>
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto">
                <label for="harga">Harga</label>
                <input type="number" name="harga" required>
                <label for="stok">Stok</label>
                <input type="number" name="stok" required>
                <label for="kategori">Kategori</label>
                <select name="kategori" id="Kategori">
                    <option value="Makanan & Camilan"> Makanan & Camilan</option>
                    <option value="Obat & Vitamin"> Obat & Vitamin</option>
                    <option value="Alat Kebersihan"> Alat Kebersihan</option>
                    <option value="Kandang & Toilet"> Kandang & Toilet</option>
                    <option value="Lainnya"> Lainnya</option>
                </select>
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="Deskripsi" cols="60" rows="8" required></textarea>
                <label for="shopee">Link Shopee</label>
                <input type="url" name="shopee">
                <label for="tokped">Link Tokopedia</label>
                <input type="url" name="tokped">
                <label for="blibli">Link Blibli</label>
                <input type="url" name="blibli">
                <label for="lazada">Link Lazada</label>
                <input type="url" name="lazada">
                <label for="bukalapak">Link Bukalapak</label>
                <input type="url" name="bukalapak">
                <div class="button">
                    <button type="button" id="createCancel">Cancel</button>
                    <button type="submit" id="modCreate">Create</button>
                </div>
            </form>
        </div>
        <!-- Akhir modal create -->

    </section>
    <script src="js/AdminData.js"></script>
