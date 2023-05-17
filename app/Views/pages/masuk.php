<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .image-container {
        position: relative;
        margin-top: -10px;
        width: 1320px;
        height: 650px;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    .image-container .row {
        position: relative;
        width: 790px;
        color: white;
        margin-left: 300px;
    }

    .image-container .row h1 {
        margin-top: 100px;
    }

    .image-container .row h3 {
        font-size: 20px;
        margin-top: -10px;
    }

    .image-container .row h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 52px;
        font-weight: 700px;
        width: 614px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
    }

    .image-container .row p {
        margin-left: 60px;
        margin-top: 30px;
        font-size: 20px;
        font-weight: 400;
    }

    #backg {
        width: 1320px;
        margin-top: -54px;
        margin-left: -12px;
        height: 707px;
    }

    #backg2 {
        width: 1320px;
        margin-left: -12px;
        margin-top: -7px;
        height: 650px;
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
        margin-top: 522px;
        width: 120px;
        left: 1187px;
    }

    footer {
        margin-top: -7px;
    }
</style>

<section class="masuk">
    <div class="container">
        <div class="image-container">
            <img src="/img/tentang-bg0.png" alt="gambar1" id="backg">
            <img src="/img/tentang-bg1.png" alt="gambar2" id="backg2">
            <img src="/img/hero-helm.png" alt="" id="helm">
            <img src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img src="/img/hero-bulat.png" alt="" id="bulatan">

            <div class="row">
                <div class="col">
                    <h1><b>Selamat Bergabung</b></h1>
                    <h3>>>>>>>></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>