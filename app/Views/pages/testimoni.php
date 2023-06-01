<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .section-1 .container {
        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%),
            url(/img/tentang-bg1.png);
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center;
        height: 630px;
        box-shadow: -18px -24px 38px rgba(0, 0, 0, 0.25);
        border-radius: 400px 0px 0px 0px;
        color: white;
        overflow: hidden;
    }

    .image-container {
        position: relative;
        width: 1320px;
        height: 630px;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    #helm {
        position: absolute;
        width: 190px;
        height: 245px;
        left: 1118px;
        margin-top: 30px;
    }

    #sepatu {
        width: 350px;
        margin-left: -50px;
        margin-top: 470px;
    }

    #bulatan {
        margin-top: 500px;
        width: 120px;
        left: 1187px;
    }

    .section-2 {
        height: 630px;
    }
    .section-2 .carousel-inner img {
        width: 300px;
        height: 300px;
        border-radius: 30px;
        box-shadow: 2px 6px 20px rgba(0, 0, 0, 0.5);
    }
</style>

<section class="section-1">
    <div class="container">
        <div class="image-container">
            <div class="image-wrapper">
                <img src="/img/hero-helm.png" alt="" id="helm">
                <img src="/img/hero-sepatu.png" alt="" id="sepatu">
                <img src="/img/hero-bulat.png" alt="" id="bulatan">
            </div>
            <div class="row">
                <div class="col">
                    <h3 style="margin: 80px 0px 0px 550px;">>>>>>>></h3>
                    <h1 style="margin: 0px 0px 0px 250px;"><b>TESTIMONI</b></h1>
                    <h5 style="margin: -5px 0px 0px 250px;">Apa Kata Mereka Tentang Pelayanan Kami?</h5>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-2">
    <div class="container">
        <h1 style="margin: 100px 0px 0px 250px;"><b>Galeri Pelanggan</b></h1>
        <h5 style="margin: -5px 0px 80px 250px;"><b>Dokumentasi Pengerjaan Baik Sebelum Dan Sesudah</b></h5>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="padding: 20px;">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/img/galery-1.png" class="d-block w-100" alt="Gambar 1">
                        </div>
                        <div class="col-md-3">
                            <img src="/img/galery-2.png" class="d-block w-100" alt="Gambar 2">
                        </div>
                        <div class="col-md-3">
                            <img src="/img/galery-3.png" class="d-block w-100" alt="Gambar 3">
                        </div>
                        <div class="col-md-3">
                            <img src="/img/galery-4.png" class="d-block w-100" alt="Gambar 4">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>