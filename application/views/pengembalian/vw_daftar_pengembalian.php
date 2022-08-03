<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Pengembalian/tambah" class="btn btn-info mb-2">Form Pengembalian</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table">
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
                <tbody>
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
                                <a href="<?= base_url('Pengembalian/hapus/') . $us['kode_pengembalian']; ?>" class="badge badge-danger">Hapus</a>
                                <a href="<?= base_url('Pengembalian/edit/') . $us['kode_pengembalian']; ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('Pengembalian/detail/') . $us['kode_pengembalian']; ?>" class="badge badge-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>