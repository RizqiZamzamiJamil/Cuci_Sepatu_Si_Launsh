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
        width: 1000px;
        color: white;
        margin-left: 110px;
    }

    .image-container .row h1 {
        margin-top: 100px;
        display: inline-block;
    }

    .image-container .row h3 {
        font-size: 20px;
        margin-top: -10px;
        display: inline-block;
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

    .form-label {
        display: block;
        font-weight: bold;
    }

    .form-input2 {
        background: none;
        width: 350px;
        height: 42px;
        border: 3px solid white;
        border-radius: 10px;
    }


    .form-group input {
        width: 48%;
        padding: 5px;
    }

    .form-group .form-input-group {
        display: flex;
        justify-content: space-between;
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

    .button-container{
        display: flex;
        justify-content: center;
    }

    .submit-btn {
        width: 200px;
        border-radius: 10px;
        padding: 10px;
        background-color: white;
        color: black;
        border: none;
        text-align: center;
        cursor: pointer;

    }

    footer {
        margin-top: -7px;
    }
</style>

<section class="daftar">
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
    
            <!-- Baris 1 -->
            <form action="/pages/saveDaftar" method="post">
                <?= csrf_field(); ?>
            <div class="row">
                <div class="col">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" id="nama" class="form-input2" name="nama" required>
                </div>
                <div class="col">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-input2" name="username" required>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="row">
                <div class="col">
                    <label for="email" class="form-label">Alamat surel</label>
                    <input type="email" id="email" class="form-input2" name="email" required>
                </div>
                <div class="col">
                    <label for="phone" class="form-label">No. Telepon</label>
                    <input type="phone" id="phone" class="form-input2" name="phone" required>
                </div>
            </div>

            <!-- Baris 3 -->
            <div class="row">
                <div class="col">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" id="password" class="form-input2" name="password" required>
                </div>
                <div class="col">
                    <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" id="confirm-password" class="form-input2" name="confirm-password" required>
                </div>
            </div>

            <!-- Baris 4 -->
            <div class="row">
                <div class="col">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" id="alamat" class="form-input2" name="alamat" required>
                </div>
            </div>
            <br>
<br>
            <!-- Baris 5 -->
            <div class="row">
                <div class="col">
                    <div class="checkbox-group">
                        <label>
                            <input type="checkbox" name="agree_policy" required>
                            Setuju Kebijakan Si Launsh
                        </label>
                    </div>
                    <div class="button-container">
                        <button type="submit" style="font-weight: bold;" class="submit-btn">Daftar</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>