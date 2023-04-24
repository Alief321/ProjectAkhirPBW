    <section id="isiAdmin">
    <table>   
        <div style="width:100%; display: flex; height: auto; justify-content: start;">
            <button id="create">Create</button>
        </div>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $content = ' 
                    <td>Whiskas</td>
                    <td>
                        <button class="prevFoto">Lihat Foto</button>
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
                    echo '<tr>';
                    echo '<td>';
                    echo $i+1; 
                    echo '</td>';
                    echo $content;
                }
            ?>

            </tbody>
        </table>
        <!-- modal foto -->
        <div class="modalFoto">
            <p id="cilang">x</p>
            <h1 style="font-size: 2rem; margin: 1rem 0 3rem 0; text-align: center;">Nama Foto</h1>
            <div style="display: flex; width: 100%; height: auto; justify-content: center; align-items: center;">
                <img src="img/logo.png" alt="" width="70%" height="auto" style="margin: auto;">
            </div>
        </div>
        <!-- Akhhir modal foto -->

        <!-- modal edit -->
        <div class="modalAdmin">
            <form action="" method="post">
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Edit Galeri</h1>
                <label for="nama">Nama</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto</label>
                <input type="file" name="foto">
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
                <h1 style="width: 80%; margin: auto; margin-top:2rem; margin-bottom:2rem">Tambah Galeri</h1>
                <label for="nama">Nama</label>
                <input type="text" name="nama" autofocus required>
                <label for="foto">Foto</label>
                <input type="file" name="foto">
                <div class="button">
                    <button type="button" id="createCancel">Cancel</button>
                    <button type="submit" id="modCreate">Create</button>
                </div>
            </form>
        </div>
        <!-- Akhir modal create -->
            </tbody>
        </table>
    </section>

    <script src="js/AdminData.js"></script>
    <script src="js/AdminFoto.js"></script>
