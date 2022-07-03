<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Halaman Tambah Peminjaman</h4>
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_anggota">Id Anggota</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_anggota" placeholder="Id Anggota" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="id_buku">Id Buku</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_buku" placeholder="Id Buku" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_pinjam">Tanggal Pinjam</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="tanggal_pinjam" placeholder="dd/MM/YYY">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggal_kembali">Tanggal Kembali</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="anggal_kembali" placeholder="dd/MM/YYY">
                            </div>
                        </div>
                        <br class="my-2">
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Kembali</button>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>