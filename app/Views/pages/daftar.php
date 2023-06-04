<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .daftar .container {
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

    .image-wrapper img {
        position: absolute;
    }

    .konten {
        position: relative;
        width: 800px;
        color: white;
        margin-left: auto;
        margin-right: auto;
    }

    .konten h1 {
        margin-top: 100px;
        display: inline-block;
    }

    .konten h3 {
        font-size: 20px;
        margin-top: -10px;
        display: inline-block;
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
        color: white;
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

    .button-container {
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

    #popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    #popup p {
        margin: 0;
        font-size: 16px;
        text-align: center;
    }
</style>


<section class="daftar" data-aos="fade-up">
    <div class="container">
        <?php  ?>
        <div class="image-wrapper">
            <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>

        <div class="konten">
            <div class="col">
                <h1 data-aos="fade-up" data-aos-delay="200"><b>Selamat Bergabung</b></h1>
                <h3 data-aos="fade-up" data-aos-delay="300">>>>>>>></h2>
            </div>
            <!-- Baris 1 -->
            <form action="/Pages/saveDaftar" method="post">

                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col" data-aos="fade-up" data-aos-delay="400">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" id="nama" class="form-input2 <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('nama') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="450">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" class="form-input2 <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" value="<?= old('username'); ?>">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('username') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris 2 -->
                <div class="row">
                    <div class="col" data-aos="fade-up" data-aos-delay="500">
                        <label for="email" class="form-label">Alamat surel</label>
                        <input type="text" id="email" class="form-input2 <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" name="email" value="<?= old('email'); ?>">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('email') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="550">
                        <label for="phone" class="form-label">No. Telepon</label>
                        <input type="phone" id="phone" class="form-input2 <?= ($validation->hasError('phone')) ? 'is-invalid' : '' ?>" name="phone" value="<?= old('phone'); ?>">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('phone') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris 3 -->
                <div class="row">
                    <div class="col" data-aos="fade-up" data-aos-delay="600">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" id="password" class="form-input2 <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" name="password">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('password') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-delay="650">
                        <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" id="confirm_password" class="form-input2 <?= ($validation->hasError('confirm_password')) ? 'is-invalid' : '' ?>" name="confirm_password">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('confirm_password') ?>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Baris 4 -->
                <div class="row">
                    <div class="col" data-aos="fade-up" data-aos-delay="700">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat" class="form-input2 <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" name="alamat" value="<?= old('alamat'); ?>">
                        <div class="invalid-feedback">
                            <div class="alert alert-danger alert-dismissible py-2" style="width:75%;" role="alert">
                                <?= $validation->getError('alamat') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- Baris 5 -->
                <div class="row">
                    <div class="col">
                        <div class="checkbox-group" data-aos="fade-up" data-aos-delay="800">
                            <label>
                                <input type="checkbox" name="agree_policy" required>
                                Setuju Kebijakan Si Launsh
                            </label>
                        </div>
                        <div class="button-container">
                            <button type="submit" style="font-weight: bold;" class="submit-btn" data-aos="fade-up" data-aos-delay="900">Daftar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="popup" style="display: none;">
            <p>Pendaftaran akun berhasil</p>
        </div>
</section>

<script>
    // Menampilkan pop-up
    function showPopup() {
        document.getElementById('popup').style.display = 'block';
    }

    // Menyembunyikan pop-up
    function hidePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    // Membuat pop-up otomatis menutup setelah beberapa detik
    function autoClosePopup() {
        setTimeout(function() {
            hidePopup();
        }, 3000); // Ganti angka 3000 dengan durasi dalam milidetik
    }
</script>



<?= $this->endSection(); ?>