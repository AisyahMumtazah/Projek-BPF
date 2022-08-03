<br>
<div class="container-fluid">
    <div class="card">
        <h1 class="card-header"><?php echo $judul; ?></h1>
        <div class="container">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-md-12">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Peminjaman</th>
                            <th>Id Buku</th>
                            <th>Id Anggota</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Denda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($pengembalian as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['kode_peminjaman']; ?></td>
                            <td><?= $us['id_buku']; ?></td>
                            <td><?= $us['id_anggota']; ?></td>
                            <td><?= $us['tanggal_pengembalian']; ?></td>
                            <td><?= $us['denda']; ?></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?= base_url('Pengembalian/edit/') . $us['kode_pengembalian']; ?>"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="<?= base_url('Pengembalian/hapus/') . $us['kode_pengembalian']; ?>"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>