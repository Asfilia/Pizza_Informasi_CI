<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Menu PHD
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $menu['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><img src="<?= $menu['gambar']; ?>"/></h6>
                    <p><b>Keterangan</b></p>
                    <p class="card-text"><?= $menu['keterangan']; ?></p>
                    <p><b>Crust</b></p>
                    <p class="card-text"><?= $menu['crust']; ?></p>
                    <p><b>Ukuran</b></p>
                    <p class="card-text"><?= $menu['ukuran']; ?></p>
                    <p><b>Harga</b></p>
                    <p class="card-text"><?= $menu['harga']; ?></p>
                    <a href="<?= base_url(); ?>menu" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>