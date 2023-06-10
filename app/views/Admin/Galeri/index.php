    <section id="isiAdmin">
    <table>   
        <div style="width:100%; display: flex; height: auto; justify-content: start; column-gap: 1rem;">
            <button id="create">Create</button>
            <?php Flasher::flash()?>
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
                <?php $i=1 ?>
                <?php foreach ($data['photos'] as $photo) :?> 
                    <td><?=$i;?></td>
                    <td><?=$photo['Nama'] ;?></td>
                    <td>
                        <button id="<?=$photo['idFoto']?>" class="prevFoto" onclick="show(this.id)">Lihat Foto</button>
                    </td>
                    <td>
                        <a id="<?=$photo['idFoto']?>" onclick="edit(this.id)">
                            <div class="edit">
                                <i data-feather="edit" id="edit"></i>
                            </div>
                        </a>
                    </td>
                    <td>
                        <a href="<?= BASEURL;?>Galeri/hapus/<?= $photo['idFoto'];?>" onclick="return confirm('apakah anda yakin ingin menghapus data')">
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

        <!-- modal foto -->
        <div class="modalFoto">
            <p id="cilang">x</p>
            <div id="showFoto" style="width: 100%;"></div>
        </div>
        <!-- Akhhir modal foto -->

        <!-- modal edit -->
        <div class="modalAdmin">
            <form action="Galeri/update/7" id="formEdit" method="post" enctype="multipart/form-data">
               <div class="isi_edit"></div>
               <div class="button">
                    <button type="button" id="modcancel">Cancel</button>
                    <button type="submit" id="modedit">Edit</button>
            </div>
            </form>
        </div>
        <!-- Akhir modal edit -->
        
        <!-- modal create -->
        <div class="modalCreate">
            <form action="Galeri/tambah" method="post" enctype="multipart/form-data">
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
