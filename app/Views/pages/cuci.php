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
        position: relative;
        color: white;
        overflow: hidden;
    }

    .image-wrapper img {
        position: absolute;
    }

    #bulatan {
        bottom: 0;
        right: 0;
        height: 130px;
    }

    .konten {
        position: relative;
    }

    .konten .row-text {
        margin-left: 150px;
    }

    .image {
        text-align: center;
    }

    .image-box {
        width: 250px;
        position: relative;
        display: inline-block;
        margin: 40px;
    }

    .image-box img {
        width: 100%;
        height: auto;
        transition: filter 0.3s ease;
    }

    .image-box .image-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight: bold;
        font-size: 30px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-box:hover img {
        filter: brightness(50%);
    }

    .image-box:hover .image-text {
        opacity: 1;
    }
</style>
<section class="section-1" data-aos="fade-up">
    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>

        <div class="konten">
            <div class="row">
                <div class="col" style="margin-top: 100px; margin-left: 150px;">
                    <h3 data-aos="fade-up" data-aos-delay="200">>>>>>>></h3>
                    <h1 data-aos="fade-up" data-aos-delay="400"><b>Pilih Layanan</b></h1>
                </div>
            </div>


            <div class="image">
                <div class="image-box" data-aos="fade-up" data-aos-delay="600">
                    <a href="<?= base_url('/pages/cuciSepatu') ?>">
                        <img src="/img/cuci-sepatu.png" alt="Gambar 1">
                        <div class="image-text">Cuci Sepatu</div>
                    </a>
                </div>
                <div class="image-box" data-aos="fade-up" data-aos-delay="700">
                    <a href="<?= base_url('/pages/cuciHelm') ?>">
                        <img src="/img/cuci-helm.png" alt="Gambar 2">
                        <div class="image-text">Cuci Helm</div>
                    </a>
                </div>
                <div class="image-box" data-aos="fade-up" data-aos-delay="800">
                    <a href="<?= base_url('/pages/cuciYellowing') ?>">
                        <img src="/img/cuci-yellow.png" alt="Gambar 3">
                        <div class="image-text">Un Yellowing</div>
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<?= $this->endSection(); ?>