<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DATA PELANGGAN
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Email Pelanggan</th>
                                <th>Nomor Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                            <tr class="odd gradeX">
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama_pelanggan']; ?></td>
                                <td><?php echo $pecah['email_pelanggan']; ?></td>
                                <td><?php echo $pecah['telepon_pelanggan']; ?></td>
                                <td>
                                    <a href="" class="btn btn-danger">Hapus</a>
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