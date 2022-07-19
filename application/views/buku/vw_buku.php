<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Buku/tambah" class="btn btn-info mb-2">Tambah Buku</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
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
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $us) : ?>
                        <tr>
                            <td><?= $us['isbn']; ?></td>
                            <td><?= $us['dudul']; ?></td>
                            <td><?= $us['kategori']; ?></td>
                            <td><?= $us['pengarang']; ?></td>
                            <td><?= $us['penerbit']; ?></td>
                            <td><?= $us['tahun_terbit']; ?></td>
                            <td><?= $us['tgl_pengadaan']; ?></td>
                            <td><?= $i; ?></td>
                            <td><img src="<?= base_url('assets/img/buku/') . $us['cover']; ?>" style="width: 100px;" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="<?= base_url('Buku/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Buku/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


