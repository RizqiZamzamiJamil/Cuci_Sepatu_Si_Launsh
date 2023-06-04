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
        position: relative;
    }

    .image-wrapper img {
        position: absolute;
    }

    .hero{
        position: relative;
        left: 250px;
        top: 80px;
    }

    #helm {
        top: 30px;
        right: 0;
        height: 250px;

    }

    #sepatu {
        height: 230px;
        bottom: -80px;
        left: -40px;
    }

    #bulatan {
        bottom: 0;
        right: 0;
        height: 130px;
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
        <div class="image-wrapper">
            <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>
        <div class="hero">
            <h3 data-aos="fade-up" data-aos-delay="200" style="margin-left: 400px;">>>>>>>></h3>
            <h1 data-aos="fade-up" data-aos-delay="400"><b>TESTIMONI</b></h1>
            <h5 data-aos="fade-up" data-aos-delay="600" style="margin-top: -5px;">Apa Kata Mereka Tentang Pelayanan Kami?</h5>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-delay="400" style="margin: 100px 0px 0px 250px;"><b>Galeri Pelanggan</b></h1>
        <h5 data-aos="fade-up" data-aos-delay="600" style="margin: -5px 0px 80px 250px;"><b>Dokumentasi Pengerjaan Baik Sebelum Dan Sesudah</b></h5>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="padding: 20px;">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="800">
                            <img src="/img/galery-1.png" class="d-block w-100" alt="Gambar 1">
                        </div>
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="900">
                            <img src="/img/galery-2.png" class="d-block w-100" alt="Gambar 2">
                        </div>
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="1000">
                            <img src="/img/galery-3.png" class="d-block w-100" alt="Gambar 3">
                        </div>
                        <div class="col-md-3" data-aos="fade-left" data-aos-delay="1100">
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