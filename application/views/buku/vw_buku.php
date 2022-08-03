<br>
<div class="container-fluid">
    <div class="card">
        <h1 class="card-header"><?php echo $judul; ?></h1>
        <div class="container">
            <div class="col-md-6"><a href="<?= base_url('Buku/tambah') ?>" class="btn btn-info mb-2">Tambah Buku</a></div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-md-12">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>ISBN</td>
                            <td>Judul Buku</td>
                            <td>Kategori</td>
                            <td>Pengarang</td>
                            <td>Penerbit</td>
                            <td>Tahun Terbit</td>
                            <td>Tanggal Pengadaan</td>
                            <td>Cover</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $us) : ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['id_buku']; ?></td>
                            <td><?= $us['judul']; ?></td>
                            <td><?= $us['kategori']; ?></td>
                            <td><?= $us['pengarang']; ?></td>
                            <td><?= $us['nama_penerbit']; ?></td>
                            <td><?= $us['tahun_terbit']; ?></td>
                            <td><?= $us['tgl_pengadaan']; ?></td>
                            <td><img src="<?= base_url('assets/img/buku/') . $us['cover']; ?>" style="width: 100px;"
                                    class="img-thumbnail">
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?=base_url('Buku/edit/').$us['id_buku'];?>"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="<?=base_url('Buku/hapus/').$us['id_buku'];?>"><i
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