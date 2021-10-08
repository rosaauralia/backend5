<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                TAMBAH DATA BUNGA
            </div>
            <div class="panel-body">           
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Bunga</label>
                    <input class="form-control" type="text" name="nama_bunga"/>
                </div>
                <div class="form-group">
                    <label>Harga Bunga (Rp.)</label>
                    <input class="form-control" type="number" name="harga_bunga"/>
                </div>
                <div class="form-group">
                    <label>Jumlah Bunga</label>
                    <input class="form-control" type="text" name="jumlah_bunga"/>
                </div>
                <div class="form-group">
                    <label>Foto Bunga</label>
                    <input class="form-control" type="file" name="foto_bunga"/>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="10" name="deskripsi_bunga"></textarea>
                </div>
                <button class="btn btn-success" name="submit">Simpan Data</button>
                <a href="index.php?halaman=produk" class="btn btn-primary">Kembali</a>
                </form> 
                <?php
                if (isset($_POST['submit'])){
                    $nama = $_FILES['foto_bunga']['name'];
                    $lokasi = $_FILES['foto_bunga']['tmp_name'];
                    move_uploaded_file($lokasi, "./foto_bunga/".$nama);
                    $koneksi->query("INSERT INTO produk (nama_bunga,harga_bunga,foto_bunga,deskripsi_bunga)
                    VALUES ('$_POST[nama_bunga]','$_POST[harga_bunga]','$nama','$_POST[deskripsi_bunga]')");

                    echo "<div class='alert alert-info'>Data Sudah Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";
                }
                ?>
            </div>
        </div>
    </div>
</div>