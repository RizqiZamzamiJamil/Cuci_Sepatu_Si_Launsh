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

    /*     .login {
        display: flex;
        justify-content: center;
        width: 550px;
    }

    .form-login {
        position: relative;
        justify-content: center;
        width: 100%;
        color: white;
        margin-left: -13px;

    }

    .form-input2 {
        background: none;
        width: 100%;
        margin-bottom: 26px;
        height: 42px;
        border: 3px solid white;
        border-radius: 10px;
    }

    .checkbox-group {
        margin-bottom: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .checkbox-group label {
        font-weight: normal;
    }

    .submit-btn {
        width: 300px;
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
        background-color: white;
        color: black;
        border: none;
        text-align: center;
        cursor: pointer;

    } */

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
            <img src="/img/tentang-bg1.png" alt="gambar2" id="backg2">
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