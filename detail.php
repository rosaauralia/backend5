<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DETAIL PEMBELIAN
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tbody>
                                <?php 
                                $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
                                $detail=$ambil->fetch_assoc();
                                ?>
                                <strong><?php echo $detail['nama_pelanggan']; ?></strong>
                                <hr>
                                <p>
                                    Id pelanggan      : <?php echo $detail['id_pelanggan'] ?>
                                    <hr>
                                    Id pembelian      : <?php echo $detail['id_pembelian'] ?>
                                    <hr>
                                    Nomor Telepon     : <?php echo $detail['telepon_pelanggan'] ?>
                                    <hr>
                                    Tanggal Pembelian : <?php echo $detail['tanggal_pembelian'] ?>
                                    <hr>
                                    Email             : <?php echo $detail['email_pelanggan'] ?>
                                    <hr>
                                    Total Harga   : Rp. <?php echo $detail['total_pembelian']; ?>                    
                                </p>
                            </tbody>
                        </thead>
                        <a href="index.php?halaman=pembelian" class="btn btn-primary">Kembali</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>