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

    .image-container img {
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
        border-radius: 10px;
    }
    form{
        background-color: white;
        margin-top: 20px;
        margin-left: 130px;
        width: 500px;
        padding: 20px 20px 0px 40px;
        border-radius: 20px;
    }
    button{
        background-color: #0FC598;
        padding: 10px 30px;
        width: 200px;
        border-radius: 40px;
        margin-bottom: 10px;
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
                    <h5 style="margin: -5px 0px 0px 130px;">Lebih deket dengan kami, melalui media sosial</h5>
                    <form action="">
                        <div class="row" style="margin-bottom: 8px;">
                            <div class="col">
                                <label for="pemesan" class="form-label">Nama Depan</label>
                                <input type="name" id="pemesan" class="form-input2" name="pemesan" required>
                            </div>
                            <div class="col">
                                <label for="pemesan" class="form-label">Nama Belakang</label>
                                <input type="name" id="pemesan" class="form-input2" name="pemesan" required>
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
                                <input type="text" id="pertanyaan" class="form-input2 w-100" name="telepon" required>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col">
                                <button>Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">

                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>