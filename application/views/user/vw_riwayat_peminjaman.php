<div class="container-fluid">
    <div class="card">
        <h1 class="card-header"><?php echo $judul; ?></h1>
        <div class="container">
            <div class="col-md-6"><a href="<?= base_url('User/riwayat') ?>" class="btn btn-info mb-2">Halaman Riwayat Peminjaman</a></div>
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-md-12">
            
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1; ?>
                        <?php foreach ($buku as $us) : ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?= $us['judul']; ?></td>
                            <td><?= $us['tanggal_pinjam']; ?></td>
                            <td><?= $us['tanggal_pengembalian']; ?></td>
                            <td><?= $us['status']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>