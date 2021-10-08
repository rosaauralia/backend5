<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DATA PEMBELIAN BUNGA
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Tanggal Pembelian</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"); ?>
                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                            <tr class="odd gradeX">
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama_pelanggan']; ?></td>
                                <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                                <td>Rp.<?php echo $pecah['total_pembelian']; ?></td>
                                <td>
                                    <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        <?php $nomor++ ?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>