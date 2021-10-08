<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_bunga='$_GET[id]'");
$pecah= $ambil->fetch_assoc();
$fotobunga= $pecah['foto_bunga'];
if (file_exists("./foto_bunga/$fotobunga")){
    unlink("./foto_bunga/$fotobunga");
}

$koneksi->query("DELETE FROM produk WHERE id_bunga='$_GET[id]'");

echo "
    <script>
        alert('Data BERHASIL dihapus');
    </script>";
echo "
    <script>
        location='index.php?halaman=produk';
    </script>";
?>