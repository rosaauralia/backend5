<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DATA KARYAWAN MADAM ROSE`
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Karyawan</th>
                                <th>Nama Karyawan</th>
                                <th>Nomor Telepon</th>
                                <th>Status Karyawan</th>
                                <th>Alamat Karyawan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor=1; ?>
                        <?php $ambil=$koneksi->query("SELECT * FROM karyawan"); ?>
                        <?php while($pecah=$ambil->fetch_assoc()){ ?>
                            <tr class="odd gradeX">
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama_karyawan']; ?></td>
                                <td><?php echo $pecah['telepon_karyawan']; ?></td>
                                <td><?php echo $pecah['status_karyawan']; ?></td>
                                <td><?php echo $pecah['alamat_karyawan']; ?></td>
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