<section id="isiAdmin">
    <table>   
        <div style="width:100%; display: flex; height: auto; justify-content: start; column-gap: 1rem;">
            <?php Flasher::flash()?>
        </div>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Bukti Invoice</th>
                    <th>id User</th>
                    <th>Approve</th>
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
                    <td>
                        <?php $id = $pesan['idPesanan']?>
                        <form action="<?php if($pesan['Status']==1){echo 'Rekomendasi/hapusFromProduct/'.$id;}else{ echo 'Rekomendasi/tambah';}?>" method="post" id="checkForm">
                            <input type="checkbox" name="higlight" id="higlight" onChange="this.form.submit()" <?php if($product['isRekom']==1){
                                echo 'checked';
                            } else{
                                echo '';
                            }?>>
                        </form>
                    </td>
                    </tr>

                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>