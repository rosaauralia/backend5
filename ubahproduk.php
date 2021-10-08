<h2 class="pb-2">Ubah Data Produk</h2>

<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_bunga='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<form enctype="multipart/form-data" method="post" class="col-8">
    <div class="form-group">
        <label>Nama Bunga</label>
        <input type="text" class="form-control" name="nama_bunga" value="<?php echo $pecah['nama_bunga']; ?>">
    </div>
    <div class="form-group">
        <label>Harga Bunga</label>
        <input type="number" class="form-control" name="harga_bunga" value="<?php echo $pecah['harga_bunga']; ?>">
    </div>
    <div class="form-group">
        <label>Jumlah Bunga</label>
        <input type="text" class="form-control" name="jumlah_bunga" value="<?php echo $pecah['jumlah_bunga']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi Bunga</label>
        <textarea class="form-control" name="deskripsi_bunga" rows="10">
            <?php echo $pecah['deskripsi_bunga'];?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Ganti Foto</label><br>
        <img src="./foto_bunga/<?php echo $pecah['foto_bunga']?>" width="100">
        <input type="file" class="form-control" name="foto_bunga">
    </div>
    <br>
    <button class="btn btn-primary" name="submit">Simpan Perubahan</button>
    <a href="index.php?halaman=produk" class="btn btn-danger">Batal</a>
    
</form>

<?php

if(isset($_POST['submit'])){
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $harga_bunga = $_POST['harga_bunga'];
    $deskripsi_bunga = $_POST['deskripsi_bunga'];

    if (!empty($lokasi)){
        move_uploaded_file($lokasi, "./foto_bunga/".$nama);

        $koneksi->query("UPDATE produk SET nama_bunga='$_POST[nama_bunga]', harga_bunga='$harga_bunga', 
        foto_bunga='$nama', deskripsi_bunga='$deskripsi_bunga' WHERE id_bunga='$_GET[id]'");
    }else{
        $koneksi->query("UPDATE produk SET nama_bunga='$_POST[nama_bunga]', 
        harga_bunga='$harga_bunga', deskripsi_bunga='$deskripsi_bunga' WHERE id_bunga='$_GET[id]'");
    }
    echo "
    <script>
        alert('Data Berhasil diubah');
        document.location.href = 'index.php?halaman=produk';
    </script>";
}

?>