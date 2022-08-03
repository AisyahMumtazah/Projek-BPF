<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Halaman Pengembalian
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kode_peminjaman">Kode Peminjaman</label>
                            <input type="text" name="kode_peminjaman" value="<?= set_value('kode_peminjaman') ?>" class="form-control" id="kode_peminjaman" placeholder="Tanggal Pinjam">
                            <?= form_error('kode_peminjaman', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id_buku">Id Buku</label>
                            <input type="text" name="id_buku" value="<?= set_value('id_buku') ?>" class="form-control" id="id_buku" placeholder="Tanggal Kembali">
                            <?= form_error('id_buku', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id_anggota">Id Anggota</label>
                            <input type="text" name="id_anggota" value="<?= set_value('id_anggota') ?>" class="form-control" id="id_anggota" placeholder="Tanggal Pengembalian">
                            <?= form_error('id_anggota', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_pengembalian" value="<?= set_value('tanggal_pengembalian') ?>" class="form-control" id="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
                            <?= form_error('tanggal_pengembalian', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="denda">Denda</label>
                            <input type="text" name="denda" value="<?= set_value('denda') ?>" class="form-control" id="denda" placeholder="Denda">
                            <?= form_error('denda', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
