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
    }

    .image-container {
        position: absolute;
        width: 1320px;
        height: 711px;
        z-index: 1;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    #hero-bulat {
        width: 150px;
        margin-top: 470px;
        margin-left: 1158px;
    }

    footer {
        margin-top: -7px;
    }

    .konten {
        position: relative;
        z-index: 2;
    }

    .konten .row-text {
        margin-left: 150px;
    }




    .image-row {
        display: flex;
        justify-content: center;
    }

    .image-box {
        margin: 40px 60px 0px;
        position: relative;
        overflow: hidden;
    }

    .image-box img {
        width: 250px;
        height: 250px;
        transition: opacity 0.3s ease;
    }

    .image-box img:hover {
        opacity: 0.8;
    }

/*     .image-box::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-box:hover::before {
        opacity: 1;
    }

    .image-box::after {
        content: attr(data-text);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 18px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-box:hover::after {
        opacity: 1;
    } */
</style>
<section class="section-1">
    <div class="container">
        <div class="image-container">
            <img src="/img/hero-bulat.png" alt="" id="hero-bulat">
        </div>
        <div class="konten">
            <div class="row">
                <div class="col" style="margin-top: 100px; margin-left: 150px;">
                    <h3>>>>>>>></h3>
                    <h1><b>Pilih Layanan</b></h1>
                </div>
            </div>


            <div class="image-row">
                <div class="image-box">
                    <a href="<?= base_url('/pages/cuciSepatu') ?>">
                        <img src="/img/cuci-sepatu.png" alt="Gambar 1" data-text="Cuci Sepatu">
                    </a>
                </div>
                <div class="image-box">
                    <a href="<?= base_url('/pages/cuciHelm') ?>">
                        <img src="/img/cuci-helm.png" alt="Gambar 2" data-text="Cuci Helm">
                    </a>
                </div>
                <div class="image-box">
                    <a href="<?= base_url('/pages/cuciYellowing') ?>">
                        <img src="/img/cuci-yellow.png" alt="Gambar 3" data-text="Yellowing">
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

<?= $this->endSection(); ?>