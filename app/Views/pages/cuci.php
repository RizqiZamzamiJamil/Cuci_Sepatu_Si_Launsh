<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Section-1 */

    .section-1 .container {
        width: 100%;
        height: 711px;
        margin-top: -10px;
        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%);
        box-shadow: -18px -24px 38px rgba(0, 0, 0, 0.25);
        border-radius: 400px 0px 0px 0px;
        color: white;
    }

    .image-container {
        position: absolute;
        width: 1320px;
        height: 711px;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    .image-bg {
        position: relative;
    }

    #backg2 {
        width: 1320px;
        margin-left: -12px;
        height: 650px;
        border-radius: 400px 0px 0px 0px;

    }

    #hero-helm {
        width: 190px;
        height: 245px;
        left: 1118px;
        margin-top: 105px;
    }

    #hero-sepatu {
        width: 350px;
        margin-left: -50px;
        margin-top: 540px;
    }

    #hero-bulat {
        width: 150px;
        margin-top: 565px;
        margin-left: 1158px;
    }

    footer {
        margin-top: -7px;
    }

    .konten h1 {
        margin-top: 110px;
        margin-left: 150px;
    }

    .konten .row {
        display: flex;
    }

    .konten .col {
        margin-top: 30px;
        position: absolute;

    }
</style>
<section class="section-1">
    <div class="container">
        <div class="image-container">
            <img src="/img/tentang-bg1.png" alt="gambar2" id="backg2">
            <img src="/img/hero-helm.png" alt="" id="hero-helm">
            <img src="/img/hero-sepatu.png" alt="" id="hero-sepatu">
            <img src="/img/hero-bulat.png" alt="" id="hero-bulat">
        </div>
        <div class="konten">
            <div class="row">
                <h1><b>Pilih Layanan</b></h1>
            </div>

            <div class="row">
                <div class="col">
                    <div class="cabang-item">
                        <a class="cabang-link" data-bs-toggle="modal" href="/">
                            <div class="cabang-hover">
                                <div class="cabang-hover-content">
                                    <h3>SURABAYA</h3>
                                    <div class="position-absolute bottom-0 end-0">
                                        <p>Selengkapnya</p>
                                    </div>
                                </div>
                            </div>
                            <img class="img-fluid" src="/img/cuci-sepatu.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                    asdas
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>
<!-- <input type="email" id="email" class="form-input2" name="email" required>
                <input type="password" id="password" class="form-input2" name="password" required>
                <button type="submit" style="font-weight: bold;" class="submit-btn">Masuk</button> -->