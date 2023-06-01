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
        position: relative;
        width: 1320px;
        height: 630px;
    }

    .image-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
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
        margin-top: 500px;
        width: 120px;
        left: 1187px;
    }

    .form-label {
        display: block;
        color: black;
    }

    .form-input2 {
        background: none;
        width: 200px;
        height: 42px;
        border: 3px solid black;
        border-bottom: 1px solid black !important;
        border-style: none;
    }

    form {
        background-color: white;
        margin-top: 20px;
        margin-left: 130px;
        width: 500px;
        padding: 20px 20px 0px 40px;
        border-radius: 20px;
    }

    button {
        background: linear-gradient(101.25deg, #0FC598 -13.7%, #BFDB38 91.83%);
        padding: 10px 30px;
        width: 200px;
        border-radius: 40px;
        margin-bottom: 10px;
        color: white;
        border-style: none;
        border: none;
    }

    #hubungi {
        width: 400px;
        margin-left: 100px;
    }
</style>

<section class="section-1">
    <div class="container">
        <div class="image-container">
            <div class="image-wrapper">
                <img src="/img/hero-bulat.png" alt="" id="bulatan">
            </div>
            <div class="row">
                <div class="col">
                    <h3 style="margin: 80px 0px 0px 550px;">>>>>>>></h3>
                    <h1 style="margin: 0px 0px 0px 130px;"><b>HUBUNGI KAMI</b></h1>
                    <h5 style="margin: -5px 0px 0px 130px;">Lebih deket dengan kami, melalui media sosial kami</h5>
                    <form action="/layanankonsumen/sendQuestion" method="post">
                        <?= csrf_field(); ?>
                        <div class="row" style="margin-bottom: 8px;">
                            <div class="col">
                                <label for="pemesan" class="form-label">Nama Depan</label>
                                <input type="name" id="pemesan1" class="form-input2" name="pemesan1" required>
                            </div>
                            <div class="col">
                                <label for="pemesan" class="form-label">Nama Belakang</label>
                                <input type="name" id="pemesan2" class="form-input2" name="pemesan2" required>
                            </div>

                        </div>
                        <div class="row" style="margin-bottom: 8px;">
                            <div class="col">
                                <label for="email" class="form-label">Alamat Surel</label>
                                <input type="email" id="email" class="form-input2 w-100" name="email" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 8px;">
                            <div class="col">
                                <label for="phone" class="form-label">Telepon</label>
                                <input type="phone" id="phone" class="form-input2 w-100" name="telepon" required>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col">
                                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                <input type="text" id="pertanyaan" class="form-input2 w-100" name="pertanyaan" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col" style="margin-top: 100px;">
                    <div class="row">
                        <div class="col">
                            <img src="/img/hubungi.png" alt="" id="hubungi">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img style="margin: 10px 0px 0px 60px;" src="/img/hubungi-lokasi.png" alt="">
                        </div>
                        <div class="col-10">
                            <p style="padding: 5px 120px 0px 0px;">Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru,
                                Kota Malang, Jawa Timur 65141</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -10px;">
                        <div class="col-2">
                            <img style="margin-left: 60px;" src="/img/hubungi-pesan.png" alt="">
                        </div>
                        <div class="col-10">
                            <p style="padding: 5px 120px 0px 0px;">silaunshhelmsepatu@gmail.com</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -10px;">
                        <div class="col-2">
                            <img style="margin-left: 60px;" src="/img/hubungi-telepon.png" alt="">
                        </div>
                        <div class="col-10">
                            <p style="padding: 5px 120px 0px 0px;">089680987574</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>