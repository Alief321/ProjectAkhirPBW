<div class="main">
<form action="Pesanan/tambah" method="post" enctype="multipart/form-data">
    <h1>Upload Bukti Pembayaran</h1>
    <img src="images/Product/<?=$data['pesanan']['Foto']?>" alt="<?=$data['pesanan']['Nama']?>"  height="200px" width="200px">
    <br>
    <label for="nama">Nama Produk</label>
    <br>
    <input type="text" name="nama" value="<?= $data['pesanan']['Nama']?>" readonly >
    <br>
    <label for="harga">Harga</label>
    <br>
    <input type="number" name="harga" value="<?= $data['pesanan']['Harga']?>" readonly>
    <br>
    <label for="bukti">Upload Bukti Pembayaran</label>
    <br>
    <input type="file" name="foto" required>
    <br>
    <input type="hidden" name="id" value="<?=$_SESSION['idUser']?>">
    <input type="hidden" name="idKer" value="<?=$data['keranjang']['idKeranjang']?>">
    <input type="hidden" name="idProd" value="<?=$data['pesanan']['idProduct']?>">
    <button type="submit">Kirim</button>
</form>
</div>
