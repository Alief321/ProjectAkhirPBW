<section id="isiAdmin">
    <table>   
        <div style="width:100%; display: flex; height: auto; justify-content: start; column-gap: 1rem;">
            <?php Flasher::flash()?>
            <a href="Admin/Pesanan" class="durprove">Belum Approve</a>
            <a href="Admin/Pesanan_done" class="wesprove butdec">Sudah Approve</a>
        </div>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Bukti Invoice</th>
                    <th>id User</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                <?php foreach ($data['pesanan'] as $pesan) :?> 
                    <td><?=$i;?></td>
                    <td><?=$pesan['Nama'] ;?></td>
                    <td><?= $pesan['Harga']?></td>
                    <td>
                        <button id="<?=$pesan['idPesanan']?>" class="prevFoto" onclick="show(this.id)">Lihat Foto</button>
                    </td>
                    <td><?= $pesan['idUser']?></td>
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
        
        <script src="js/Bukti.js"></script>

        <script src="js/Bukti.js"></script>