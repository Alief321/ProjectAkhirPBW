<div class="main">
<form action="Pesanan/tambah" method="post" enctype="multipart/form-data">
    <h1 style="text-align: center;">Upload Bukti Pembayaran</h1>
    <div style="width: 100%; display: flex; justify-content: center;">
        <img src="images/Product/<?=$data['pesanan']['Foto']?>" alt="<?=$data['pesanan']['Nama']?>" id="img">
    </div>
    </br>
    </br>
    <label for="nama">Nama Produk</label>
    <br>
    <br>
    <input type="text" name="nama" value="<?= $data['pesanan']['Nama']?>" readonly >
    <br>
    <label for="harga">Harga</label>
    <br>
    <br>
    <input type="number" name="harga" value="<?= $data['pesanan']['Harga']?>" readonly>
    <br>
    <label for="bukti">Upload Bukti Pembayaran</label>
    <br>
    <br>
    <input type="file" name="foto" required>
    <br>
    <input type="hidden" name="id" value="<?=$_SESSION['idUser']?>">
    <input type="hidden" name="idKer" value="<?=$data['keranjang']['idKeranjang']?>">
    <input type="hidden" name="idProd" value="<?=$data['pesanan']['idProduct']?>">
    <button type="submit">Kirim</button>
</form>
</div>
