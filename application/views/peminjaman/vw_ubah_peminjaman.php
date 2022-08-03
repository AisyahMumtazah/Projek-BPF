<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Peminjaman /</span> Form Ubah Peminjaman</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                        <input type="hidden" name="kode_peminjaman" value="<?= $peminjaman['kode_peminjaman'];?>"/>
                            <label class="col-sm-2 col-form-label" for="id_anggota">ID Anggota</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?=$peminjaman['id_anggota']?>" placeholder="ID Anggota" readonly />
                                <?= form_error('id_anggota', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_buku">ID Buku</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?=$peminjaman['id_buku']?>" placeholder="ID Buku"  readonly/>
                                <?= form_error('id_buku', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_pinjam">Tanggal Pinjam</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="<?=$peminjaman['tanggal_pinjam']?>" placeholder="dd/MM/YYY">
                                <?= form_error('tanggal_pinjam', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_kembali">Tanggal Kembali</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="tanggal_kembali" name="tanggal_kembali" value="<?=$peminjaman['tanggal_kembali']?>" placeholder="dd/MM/YYY">
                                <?= form_error('tanggal_kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <br class="my-2">
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                
                                    <a href="<?= base_url('Pengembalian/tambah/').$peminjaman['kode_peminjaman']?>" class="btn btn-primary">Ubah Status</a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>