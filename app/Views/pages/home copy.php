<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Section-1 */

    .section-1 .container {
        width: 100%;
        height: 711px;
        margin-top: -80px;

        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%);
        box-shadow: -9px 12px 38px rgba(0, 0, 0, 0.25);
        border-radius: 0px 0px 0px 380px;
        color: white;
    }

    .section-1 .col {
        margin-top: 200px;
        margin-left: 300px;
        position: absolute;

    }

    .section-1 .row h3 {
        font-size: 36px;
        margin-left: 30px;
    }

    .section-1 .row h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 52px;
        font-weight: 700px;
        width: 660px;
        margin-top: -20px;
        margin-bottom: 10px;
    }

    .section-1 .row p {
        font-size: 24px;
        font-weight: 400;
        width: 700px;
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

    #hero {
        width: 1320px;
        height: 100%;
        margin-left: -12px;
        border-radius: 0px 0px 0px 380px;

    }

    #hero-helm {
        width: 190px;
        height: 280px;
        margin-top: 120px;
        /*         margin-left: 1187px; */
        margin-left: 1120px;
    }

    #hero-sepatu {
        width: 330px;
        margin-top: 510px;
        margin-left: 50px;
    }

    #hero-bulat {
        width: 150px;
        margin-top: 565px;
        margin-left: 1158px;
    }

    /* Section-2 */
    .section-2 {
        margin-top: 100px;
    }

    .section-2 .col {
        margin-left: 70px;
    }

    .section-2 p {
        margin-top: -10px;
    }

    .layanan-container {
        display: flex;
        margin-top: 40px;
        justify-content: center;
        align-items: center;
        width: 1320px;
    }

    .item h2 {
        font-size: 30px;
    }

    .item {
        position: relative;
        width: 300px;
        height: 467px;
        margin: 20px;
        transition: transform 0.3s ease-in-out;
        overflow: hidden;
    }

    .item:hover {
        transform: scale(1.2);
    }

    .item img {
        object-fit: cover;
    }

    .box {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 300px;
        height: 150px;
        padding: 10px;
        background: linear-gradient(113.48deg, #0FC598 0%, #BFDB38 114.8%);
        color: #fff;
        font-weight: bold;
        transform: translateY(100%);
        transition: transform 0.3s ease-in-out;
    }


    .item:hover .box {
        transform: translateY(0%);
    }

    .slider {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
    }

    .slider img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .slide-controls {
        position: absolute;
        bottom: 20px;
        transform: translateX(50%);
        display: flex;
    }

    .slide-control {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #fff;
        margin: 0 10px;
        cursor: pointer;
    }

    .slide-control.active {
        background-color: #000;
    }

    #bulatan2 {
        margin-top: -260px;
        width: 200px;
        left: 1115px;
    }

    #lay1 {
        width: 300px;
    }

    #lay2 {
        width: 300px;
    }

    #lay3 {
        width: 300px;
    }

    /* Section 3 */
    .section-3 {
        margin-top: 40px;
    }

    .section-3 .container {
        position: relative;
        width: 100%;
        height: 711px;

        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%);
        box-shadow: -9px 12px 38px rgba(0, 0, 0, 0.25);
        border-radius: 0px 380px 0px 0px;
        color: white;
    }

    .section-3 .col {
        margin-top: 40px;
        margin-left: 70px;
    }

    #pelayanan {
        position: absolute;
        height: 100%;
        width: 1320px;
        margin-left: -12px;
        border-radius: 0px 380px 0px 0px;
    }
</style>

<section class="section-1">
    <div class="container">
        <div class="image-container">
            <img src="/img/hero-bg.png" alt="" id="hero">
            <img src="/img/hero-helm.png" alt="" id="hero-helm">
            <img src="/img/hero-sepatu.png" alt="" id="hero-sepatu">
            <img src="/img/hero-bulat.png" alt="" id="hero-bulat">
        </div>

        <div class="row">
            <div class="col">
                <h3>>>>>>></h3>
                <h2><b>Membantu Anda Untuk Merawat Sepatu Dan Helm Anda </b></h2>
                <p>Si Launsh merupakan usaha yang bergerak dibidang jasa laundry cuci sepatu dan Helm berkualitas yang berasal dari Kota Malang dan memiliki cabang di beberapa Kota Besar di Jawa Timur.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1><b>Layanan Kami </b></h1>
                <p>Si Launsh Hadir Menjadi Solusi Untuk Kamu</p>
            </div>
        </div>

        <div class="row">
            <div class="layanan-container">
                <div class="item">
                    <img src="/img/layanan1.png" id="lay1">
                    <div class="box">
                        <h2>Baca</h2>
                        <h2>Selengkapnya</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="/img/layanan2.png" id="lay2">
                    <div class="box">
                        <h2>Baca</h2>
                        <h2>Selengkapnya</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="/img/layanan3.png" id="lay3">
                    <div class="box">
                        <h2>Baca</h2>
                        <h2>Selengkapnya</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3">
    <div class="container">
        <img src="/img/pelayanan-bg.png" alt="" id="pelayanan">
        <div class="row">
            <div class="col">
                <h1><b>Pelayanan Terbaik </b></h1>
                <p>Kami Selalu Mengedepankan Pelayanan Terbaik Untuk Pelanggan</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>

<div class="cuci-sekarang">
        <a href="<?= base_url('cuci/sekarang') ?>" class="btn-cuci-sekarang">Cuci Sekarang</a>
    </div>