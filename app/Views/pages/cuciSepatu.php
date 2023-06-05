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
        position: relative;
        color: white;
    }

    .image-container {
        position: absolute;
        width: 1320px;
        height: 711px;
        z-index: 1;
    }

    .image-wrapper img {
        position: absolute;
    }

    #bulatan {
        bottom: 0;
        right: 0;
        height: 130px;
    }

    .konten {
        position: relative;
        top: 50px;
    }

    .col {
        margin-bottom: 5px;
        margin-right: 5px;
    }

    #cs {
        width: 250px;
        margin-left: 150px;
    }

    .konten h1 {
        margin-left: 180px;
    }

    .konten h2 {
        font-size: 40px;
    }

    .tombol {
        display: inline-block;
        position: relative;
        padding: 5px 20px;
        margin: 5px;
        background: white;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
        width: 200px;
        top: 28px;
    }

    .tombol:hover {
        background-color: #0FC598;
    }

    .tombol:active {
        background-color: #b0b0b0;
    }

    .tombol:focus {
        outline: none;
        box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.1);
    }

    .total span {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        background: none;
        border: 3px solid black;
        border-radius: 10px;
        font-size: 14px;
        width: 300px;
        text-align: center;
    }

    .form-label {
        display: block;
        font-weight: bold;
    }

    .form-input2 {
        background: none;
        width: 96%;
        height: 42px;
        border: 3px solid white;
        border-radius: 10px;
        color: white;
    }

    .dropdown {
        padding: 10px;
        cursor: pointer;
        background: none;
        height: 42px;
        border: 3px solid white;
        border-radius: 10px;
        color: white;
        width: 394.55px;
    }

    .dropdown:hover {
        background-color: #0FC598;
    }

    .dropdown option {
        background-color: white;
        color: black;
    }
</style>
<section class="section-1" data-aos="fade-up">
    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>

        <div class="konten">
            <div class="row d-flex">
                <div class="col">
                    <h1 data-aos="fade-up" data-aos-delay="200"><b>Detail Pesanan </b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4" data-aos="fade-up" data-aos-delay="400">
                    <img src="/img/cuci-sepatu.png" alt="" id="cs">
                </div>
                <div class="col-8">
                    <h2 data-aos="fade-up" data-aos-delay="500"><b>Cuci Sepatu</b></h2>
                    <hr data-aos="fade-up" data-aos-delay="550" style="width: 250px;opacity: 1;">
                    <form action="/pemesanan/insertPesanan" method="post">
                        <div class="row" style="margin-top: 10px;">
                            <div class="col">
                                <label data-aos="fade-up" data-aos-delay="600" for="Nama Pemesan" class="form-label">Nama Pemesan</label>
                                <input data-aos="fade-up" data-aos-delay="650" type="text" id="pemesan" class="form-input2" name="pemesan" value="<?php echo $nama; ?>" required>
                            </div>
                            <div class="col">
                                <label data-aos="fade-up" data-aos-delay="700" for="Telepon" class="form-label">Telepon</label>
                                <input data-aos="fade-up" data-aos-delay="750" type="phone" id="telepon" class="form-input2" name="telepon" value="<?php echo $no_hp; ?>" required>
                            </div>
                        </div>
                        <!-- <div class="row" style="margin-top: 10px;" data-aos="fade-up" data-aos-delay="800">
                            <div class="col">
                                <label for="Kategori Layanan" class="form-label">Kategori Layanan</label>
                                <button id="fast" name="layanan" value"Fast Clean" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Fast Clean</button>
                                <button id="deep" name="layanan" value="Deep Clean" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Deep Clean</button>
                                <button id="premium" name="layanan" value="Premium Clean" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Premium</button>
                            </div>
                            <div class="col">
                                <label data-aos="fade-up" data-aos-delay="950" for="Alamat" class="form-label">Alamat</label>
                                <input data-aos="fade-up" data-aos-delay="1000" type="text" id="alamat" class="form-input2" name="alamat" value="<?php echo $alamat; ?>" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;" data-aos="fade-up" data-aos-delay="800">
                            <div class="col">
                                <label for="Kategori Layanan" class="form-label">Kategori Layanan</label>
                                <button id="fast" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Fast Clean</button>
                                <button id="deep" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Deep Clean</button>
                                <button id="premium" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Premium</button>
                            </div>
                            <div class="col">
                                <label data-aos="fade-up" data-aos-delay="950" for="Alamat" class="form-label">Alamat</label>
                                <input data-aos="fade-up" data-aos-delay="1000" type="text" id="alamat" class="form-input2" name="alamat" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;"  data-aos="fade-up" data-aos-delay="1100">
                            <div class="col">
                                <label for="jenis" class="form-label">Pilih Jenis Sepatu</label>
                                <button id="casual" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Casual</button>
                                <button id="sport" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Sport</button>
                                <button id="kulit" type="button" class="tombol" style="width: 120px; border: 3px solid white; color:white;">Kulit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-2">
    <div class="container">
        <div class="layanan-lain" data-aos="fade-up" data-aos-delay="400px">
            <h5>Layanan Lainnya</h5>
            <button type="button" class="tombol">Antar & Jemput</button>
        </div>
        <div class="row">
            <div class="col">
                <div class="jenis-pembayaran" data-aos="fade-up" data-aos-delay="600px">
                    <h5>Pilih jenis pembayaran:</h5>
                    <div class="tombol-pembayaran">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="tombol">Uang Tunai</button>
                                <button type="button" class="tombol">OVO</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="tombol">Dana</button>
                                <button type="button" class="tombol">QRIS</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="tombol">LinkAja</button>
                                <button type="button" class="tombol">Transfer</button>
                            </div>
                        </div>

                    </div>
                </div>
                <h4>Uang Tunai</h4>
                <h4>Total Yang Harus Dibayarkan</h4>
                <h2><b>Rp. 90.000</b></h2>
            </div>
            <div class="col">
                <div class="total" data-aos="fade-up" data-aos-delay="800px">
                    <h5>Jumlah Yang Harus Dibayarkan</h5>
                    <span>
                        <h4>Rp. 35.000</h4>
                    </span>
                    <br><br><br><br><br><br>
                    <button type="button" class="tombol" style="width: 300px; font-size:20px;">Pesan</button>

                </div>
            </div>
        </div>

    </div>
</section>

            window.removeEventListener("click", closePopupOutside);
        }
    }
</Script>
<?= $this->endSection(); ?>