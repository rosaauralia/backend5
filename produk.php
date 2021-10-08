<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DATA PRODUK BUNGA
            </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Id Bunga</th>
                                    <th>Nama Bunga</th>
                                    <th>Harga Bunga</th>
                                    <th>Jumlah Stok Bunga</th>
                                    <th>Foto Bunga</th>
                                    <th>Deskripsi Bunga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor=1; ?>
                                <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
                                <?php while($pecah=$ambil->fetch_assoc()){ ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo $pecah['nama_bunga']; ?></td>
                                    <td>Rp.<?php echo $pecah['harga_bunga']; ?></td>
                                    <td><?php echo $pecah['jumlah_bunga']; ?></td>
                                    <td>
                                        <img src="../foto_bunga/?php echo $pecah['foto_bunga']; ?>" width="100" alt="" srcset="">
                                    </td>
                                    <td><?php echo $pecah['deskripsi_bunga']; ?></td>
                                    <td>
                                        <a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_bunga'] ?>" class="btn btn-warning">Ubah</a>
                                        <a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_bunga'] ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php $nomor++ ?>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>
                    </div>                           
                </div>
        </div>
    </div>
</div>