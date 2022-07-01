<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Peminjaman/tambah" class="btn btn-info mb-2">Tambah Peminjaman</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
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
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($peminjaman as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="<?= base_url('assets/img/peminjaman/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            </td>
                            <td><?= $us['id_anggota']; ?></td>
                            <td><?= $us['id_buku']; ?></td>
                            <td><?= $us['tanggal_pinjam']; ?></td>
                            <td><?= $us['tanggal_kembali']; ?></td>
                            <td>
                                <a href="<?= base_url('Peminjaman/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Peminjaman/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>