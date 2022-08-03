<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buku /</span> Form Tambah Buku</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="<?=base_url('Buku/tambah')?>" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="judul">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" />
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="pengarang">Pengarang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Pengarang" />
                                <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" />
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama_penerbit">Nama Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" placeholder="Penerbit" />
                                <?= form_error('nama_penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tahun_terbit">Tahun Terbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Tahun Terbit" />
                                <?= form_error('tahun_terbit', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_buku">Nomor ISBN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_buku" name="id_buku" placeholder="Kode ISBN" />
                                <?= form_error('id_buku', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tgl_pengadaan">Tanggal Pengadaan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="tgl_pengadaan" name="tgl_pengadaan" placeholder="dd/MM/YYY">
                                <?= form_error('tgl_pengadaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label custom-file-label" for="cover">Cover</label>
                            <div class="col-md-10">
                                <input class="form-control custom-file-input" type="file" id="cover" name="cover">
                            </div>
                        </div>
                        <br class="my-2">
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>