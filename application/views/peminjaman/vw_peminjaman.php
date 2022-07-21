<br>
<div class="container-fluid">
    <div class="card">
        <h1 class="card-header"><?php echo $judul; ?></h1>
        <div class="container">
            <div class="col-md-6"><a href="<?= base_url() ?>Peminjaman/tambah" class="btn btn-info mb-2">Tambah
                    Peminjaman</a></div>
        </div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Id Anggota</td>
                            <td>Id Buku</td>
                            <td>Tanggal Pinjam</td>
                            <td>Tanggal Kembali</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($peminjaman as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['id_anggota']; ?></td>
                            <td><?= $us['id_buku']; ?></td>
                            <td><?= $us['tanggal_pinjam']; ?></td>
                            <td><?= $us['tanggal_kembali']; ?></td>
                            <td>
                                <?php 
                                    if ($us['status']=="Sedang Dipinjam"){?>
                                <span class="badge bg-label-success me-1"><?= $us['status']; ?></span>
                                <?php }elseif($us['status']=="Sudah Kembali"){?>
                                <span class="badge bg-label-secondary me-1"><?= $us['status']; ?></span>
                                <?php}?>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="<?=base_url('Peminjaman/edit').$us['id_anggota'];?>"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item"
                                            href="<?=base_url('Peminjaman/hapus').$us['id_anggota'];?>"><i
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