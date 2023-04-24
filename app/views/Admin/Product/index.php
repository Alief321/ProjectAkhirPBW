<section id="isiAdmin">
        <div style="width:100%; display: flex; height: auto; justify-content: start;">
            <button id="create">Create</button>
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
            <?php
                $content = ' 
                    <tr>
                    <td>1</td>
                    <td>Whiskas</td>
                    <td>Rp. 23.000</td>
                    <td>100</td>
                    <td>Makanan & Camilan</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quod quam quasi! Quis iure dignissimos, modi dolores eius nobis neque veniam quibusdam a.</td>
                    <td>http://shopee</td>
                    <td>http://shopee</td>
                    <td>http://shopee</td>
                    <td>http://shopee</td>
                    <td>http://shopee</td>
                    <td>
                        <input type="checkbox" name="higlight" id="higlight" >
                    </td>
                    <td>
                        <div class="edit">
                            <i data-feather="edit" id="edit"> </i>
                        </div>
                    </td>
                    <td>
                        <div class="trash">
                            <i data-feather="trash-2" id="trash"> </i>
                        </div>
                    </td>
                    </tr>';
                for ($i=0; $i <10 ; $i++) { 
                    echo $content;
                }
            ?>

            </tbody>
        </table>
        <!-- modal edit -->
        <div class="modalAdmin">
            <form action="" method="post">
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Edit Produk</h1>
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto">
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
                <label for="shopee">Link Shopee</label>
                <input type="url" name="shopee">
                <label for="Tokped">Link Tokopedia</label>
                <input type="url" name="Tokped">
                <label for="blibli">Link Blibli</label>
                <input type="url" name="blibli">
                <label for="Lazada">Link Lazada</label>
                <input type="url" name="Lazada">
                <label for="bukalapak">Link Bukalapak</label>
                <input type="url" name="bukalapak">
                <div class="button">
                    <button type="button" id="modcancel">Cancel</button>
                    <button type="submit" id="modedit">Edit</button>
                </div>
            </form>
        </div>
        <!-- Akhir modal edit -->

        <!-- modal create -->
        <div class="modalCreate">
            <form action="" method="post">
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Tambah Produk</h1>
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto">
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
                <label for="shopee">Link Shopee</label>
                <input type="url" name="shopee">
                <label for="Tokped">Link Tokopedia</label>
                <input type="url" name="Tokped">
                <label for="blibli">Link Blibli</label>
                <input type="url" name="blibli">
                <label for="Lazada">Link Lazada</label>
                <input type="url" name="Lazada">
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
