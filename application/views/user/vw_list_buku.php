<div class="container">
    <br class="my-2">
    <div class="row row-cols-1 row-cols-md-5 g-4 mb-5">
        <?php $i=1;?>
        <?php foreach ($buku as $bk): ?>
        <div class="col">
            <div class="card h-100" role="card">
                <img class="card-img-top" src="<?=base_url('assets/') ?>/assets/img/elements/2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?=$bk['judul']?></h5>
                    <p class="card-text">
                    <?=$bk['pengarang']?><br><?=$bk['kategori']?><br><?=$bk['nama_penerbit']?>
                    </p>
                </div>
            </div>
        </div>
        <?php $i++;?>
        <?php endforeach; ?>
    </div>
</div>