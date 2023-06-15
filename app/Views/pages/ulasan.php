<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>

</style>

<section class="section-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="">

                </form>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Layanan
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>

                <h3>Masukan Pelayanan</h3>
                
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>