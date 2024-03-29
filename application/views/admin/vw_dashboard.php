<!DOCTYPE html>
<html>

<head>
    <title>Form Recently Added</title>
</head>

<body>
    <br>
    <div class="container">
        <fieldset>
            <legend>Recently Added</legend>
            <p>
            <div class="row row-cols-1 row-cols-md-5 g-4 mb-5">
            <?php $i = 1; ?>
            <?php foreach ($buku as $us) : ?>
                <div class="col">
                    <div class="card h-100" role="card">
                        <img class="card-img-top" src="<?= base_url('assets/img/buku/') . $us['cover']; ?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=$us['judul'];?></h5>
                            <h5 class="card-title"><?=$us['tgl_pengadaan'];?></h5>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
            </p>
        </fieldset>
        <fieldset>
            <legend>Terpopuler</legend>
            <p>
            <div class="row row-cols-1 row-cols-md-5 g-4 mb-5">
            <?php $i = 1; ?>
            <?php foreach ($pj as $is) : ?>
                <div class="col">
                    <div class="card h-100" role="card">
                        <img class="card-img-top" src="<?= base_url('assets/img/buku/') . $is['cover']; ?>"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?=$is['judul'];?></h5>
                            <h5 class="card-title"><?=$is['pengarang'];?></h5>
                            <h5 class="card-title">Jumlah: <?=$is['id_buku'];?></h5>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
            </p>
        </fieldset>
        <fieldset>
            <legend>Information</legend>
            <p>
            <div class="row row-cols-1 row-cols-md-5 g-4 mb-5">
                <div class="col">
                    <div class="card h-100" role="card">
                        <div class="card-body">
                            <h5 class="card-title">Anggota          : <?=$anggota?> </h5>
                            <h5 class="card-title">Total Peminjaman : <?=$peminjaman?></h5>
                            <h5 class="card-title">Total Buku       : <?=$bk?></h5>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </fieldset>
    </div>
</body>

</html>
