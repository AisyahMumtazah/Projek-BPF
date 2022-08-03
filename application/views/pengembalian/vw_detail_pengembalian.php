<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Pengembalian
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $pengembalian['kode_pengembalian']; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pengembalian['email']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Kode Peminjaman</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pengembalian['kode_peminjaman']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Id Buku</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pengembalian['id_buku']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Id Anggota</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pengembalian['id_anggota']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tanggal Pengembalian</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pengembalian['tanggal_pengembalian']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Denda</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $pengembalian['denda']; ?></div>
                    </div>

                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Pengembalian') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>

    </div>
</div>

</div>