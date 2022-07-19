<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buku /</span> Form Tambah Buku</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="judul">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" placeholder="Judul Buku" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="pengarang">Pengarang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pengarang" placeholder="Pengarang" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="kategori" placeholder="Kategori" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="nama_penerbit">Nama Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_penerbit" placeholder="Penerbit" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tahun_terbit">Tahun Terbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun_terbit" placeholder="Tahun Terbit" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_buku">Nomor ISBN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_buku" placeholder="Kode ISBN" />
                            </div>s
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tgl_pengadaan">Tanggal Pengadaan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="tgl_pengadaan" placeholder="dd/MM/YYY">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="cover">Cover</label>
                            <div class="col-md-10">
                                <input class="form-control" type="file" id="cover">
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