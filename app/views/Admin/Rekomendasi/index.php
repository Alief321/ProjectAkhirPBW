    <section id="isiAdmin">
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
                    <td> <i data-feather="trash-2" id="trash"></i></td>
                    <td><i data-feather="edit" class="edit"></i></td>
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
                <input type="text" autofocus required>
                <label for="Harga">Harga</label>
                <input type="number" required>
                <label for="Deskripsi">Deskripsi</label>
                <textarea name="Deskripsi" id="Deskripsi" cols="60" rows="8"></textarea>
                <div class="button">
                    <button type="button" id="modcancel">Cancel</button>
                    <button type="submit" id="modedit">Edit</button>
                </div>
            </form>
        </div>
        <!-- Akhir modal edit -->
    </section>