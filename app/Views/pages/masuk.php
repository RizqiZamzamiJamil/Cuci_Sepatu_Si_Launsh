<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    /* Section-1 */

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

    .section-1 .col {
        width: 1320px;
        margin-top: 150px;
        position: absolute;
        display: flex;
        justify-content: center;
    }

    .section-1 .row {
        width: 1220px;
    }

    .section-1 .header h3 {
        font-size: 36px;
        margin-left: 30px;
        margin-left: 200px;
    }

    .section-1 .header h1 {
        margin-top: -20px;
        font-size: 45px;
        margin-left: -220px;
        margin-bottom: 50px;
    }

    .image-container {
        position: absolute;
        width: 1320px;
        height: 711px;
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    #hero-helm {
        width: 190px;
        /*         height: 280px; */
        margin-top: 40px;
        margin-left: 1120px;
    }

    #hero-sepatu {
        width: 330px;
        margin-top: 440px;
        margin-left: -70px;
    }

    #hero-bulat {
        width: 150px;
        margin-top: 480px;
        margin-left: 1158px;
    }

    .login-form input {
        padding: 20px;
        width: 700px;
        margin-bottom: 26px;
        font-size: 20px;
        background: none;
        border: 3px solid white;
        border-radius: 10px;
        color: white;
    }

    .login-form input::placeholder {
        color: white;
        padding-left: 60px;
    }

    .login-form button {
        padding: 20px;
        width: 50%;
        border-radius: 17px;
        background-color: white;
        border: none;
        box-shadow: 10px;
    }

    .login .row {
        width: 50%;
    }

    .button-submit {
        display: flex;
        justify-content: center;
    }

    footer {
        margin-top: -7px;
    }
</style>
<section class="section-1">
    <div class="container">
        <div class="image-container">
            <img src="/img/hero-helm.png" alt="" id="hero-helm">
            <img src="/img/hero-sepatu.png" alt="" id="hero-sepatu">
            <img src="/img/hero-bulat.png" alt="" id="hero-bulat">
        </div>
        <div class="row">
            <div class="col">
                <div class="login-form">
                    <div class="header">
                        <h3>>>>>>>></h3>
                        <h1><b>Selamat Datang Kembali</b></h1>
                    </div>
                    <div class="form-isi">
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Surel">
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi">
                    </div>

                    <div class="button-submit">
                        <button type="submit" style="font-weight: bold;" class="submit-btn">Masuk</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
<!-- <input type="email" id="email" class="form-input2" name="email" required>
                <input type="password" id="password" class="form-input2" name="password" required>
                <button type="submit" style="font-weight: bold;" class="submit-btn">Masuk</button> -->