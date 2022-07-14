<div class="container">
    <br class="my-2" />
    <div class="card">
        <h5 class="card-header">List Buku</h5>
        <div class="col-sm" style="padding:5px 20px;">
            <button type="button" class="btn btn-primary">
                <span class="tf-icons bx bx-plus-circle"></span>&nbsp; Tambah buku
            </button>
        </div>
        <br class="my-2" />
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ISBN</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Tanggal Pengadaian</th>
                        <th>Cover</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><strong>1</strong></td>
                        <td>874999271</td>
                        <td>Terbit & Tenggelam</td>
                        <td>Motivasi</td>
                        <td>Simalakama</td>
                        <td>Studio Gerhana</td>
                        <td>2010</td>
                        <td>17 Juli 2022</td>
                        <td><img class="card-img-top" src="<?=base_url('assets/') ?>/assets/img/elements/19.jpg" alt="Card image cap"></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Detail</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Hapus</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>