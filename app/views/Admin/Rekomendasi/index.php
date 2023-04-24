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
                    <th>Deskripsi</th>
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
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quod quam quasi! Quis iure dignissimos, modi dolores eius nobis neque veniam quibusdam a.</td>
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
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Edit Rekomendasi</h1>
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto">
                <label for="Harga">Harga</label>
                <input type="number" name="Harga" required>
                <label for="Deskripsi">Deskripsi</label>
                <textarea name="Deskripsi" id="Deskripsi" cols="60" rows="8"></textarea>
                <div class="button">
                    <button type="button" id="modcancel">Cancel</button>
                    <button type="submit" id="modedit">Edit</button>
                </div>
            </form>
        </div>
        <!-- Akhir modal edit -->

        <!-- modalCreate -->
        <div class="modalCreate">
            <form action="" method="post">
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Tambah Rekomendasi</h1>
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto">
                <label for="Harga">Harga</label>
                <input type="number" name="Harga" required>
                <label for="Deskripsi">Deskripsi</label>
                <textarea name="Deskripsi" id="Deskripsi" cols="60" rows="8"></textarea>
                <div class="button">
                    <button type="button" id="createCancel">Cancel</button>
                    <button type="submit" id="modCreate">Create</button>
                </div>
            </form>
        </div>
        <!-- modalCreate -->

    </section>