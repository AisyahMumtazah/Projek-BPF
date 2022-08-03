<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buku /</span> Form Pengembalian Buku</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <input type="hidden" name="kode_peminjaman" value="<?= $peminjaman['kode_peminjaman'];?>" />
                            <label class="col-sm-2 col-form-label" for="kode_peminjaman">Kode Peminjaman</label>
                            <div class="col-sm-10">
                                <input type="text" name="kode_peminjaman" value="<?= $peminjaman['kode_peminjaman'] ?>"
                                    class="form-control" id="kode_peminjaman" placeholder="Tanggal Pinjam" readonly>
                                <?= form_error('kode_peminjaman', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_buku">Id Buku</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_buku" value="<?= $peminjaman['id_buku'] ?>"
                                    class="form-control" id="id_buku" placeholder="Tanggal Kembali" readonly>
                                <?= form_error('id_buku', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_anggota">Id Anggota</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_anggota" value="<?= $peminjaman['id_anggota']  ?>"
                                    class="form-control" id="id_anggota" placeholder="Tanggal Pengembalian" readonly>
                                <?= form_error('id_anggota', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_kembali">Tanggal Kembali</label>
                            <div class="col-sm-10">
                                <input type="text" name="tanggal_kembali" value="<?= $peminjaman['tanggal_kembali']  ?>"
                                    class="form-control" id="tanggal_kembali" placeholder="Tanggal Pengembalian"
                                    readonly>
                                <?= form_error('tanggal_kembali', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_pengembalian">Tanggal
                                Pengembalian</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_pengembalian"
                                    value="<?= set_value('tanggal_pengembalian') ?>" class="form-control"
                                    id="tanggal_pengembalian" placeholder="Tanggal Pengembalian">
                                <?= form_error('tanggal_pengembalian', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="status">Status</label>
                            <div class="col-sm-10">
                                <select name="status" value="<?= set_value('status') ?>" class="form-control"
                                    id="status">
                                    <option value="Sudah Kembali">Sudah Kembali</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="denda">Denda</label>
                            <div class="col-sm-10">
                                <input type="text" name="denda" value="<?= set_value('denda') ?>" class="form-control"
                                    id="denda" placeholder="Denda">
                                <?= form_error('denda', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>