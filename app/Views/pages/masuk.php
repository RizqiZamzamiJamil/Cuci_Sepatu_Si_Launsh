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
        position: relative;
        overflow: hidden;
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



    .image-wrapper img {
        position: absolute;
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
</style>
<section class="section-1" data-aos="fade-up">
    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>
        <div class="row">
            <div class="col">
                <form action="/auth/processLogin" method="POST">
                    <div class="login-form">
                        <div class="header">
                            <h3 data-aos="fade-up">>>>>>>></h3>
                            <h1 data-aos="fade-up" data-aos-delay="200"><b>Selamat Datang Kembali</b></h1>
                        </div>
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div>
                                <?= session()->getFlashdata('message') ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-isi">
                            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" data-aos="fade-up" data-aos-delay="400" required>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" name="password" data-aos="fade-up" data-aos-delay="600" required>
                        </div>

                        <div class="button-submit">
                            <button type="submit" style="font-weight: bold;" class="submit-btn" data-aos="fade-up" data-aos-delay="800">Masuk</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
<!-- <input type="email" id="email" class="form-input2" name="email" required>
                <input type="password" id="password" class="form-input2" name="password" required>
                <button type="submit" style="font-weight: bold;" class="submit-btn">Masuk</button> -->