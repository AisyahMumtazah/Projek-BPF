<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buku /</span> Form Tambah Buku</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form>
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
                                <select id="kategori" class="form-select">
                                    <option>Pilih Kategori</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="penerbit">Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" placeholder="Penerbit" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tahunTerbit">Tahun Terbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahunTerbit" placeholder="Tahun Terbit" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="isbn">Nomor ISBN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="isbn" placeholder="Kode ISBN" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tglPengadaan">Tanggal Pengadaan</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" id="tglPengadaan" placeholder="dd/MM/YYY">
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