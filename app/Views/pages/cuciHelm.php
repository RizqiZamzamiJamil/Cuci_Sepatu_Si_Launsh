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
        position: absolute;
        width: 1320px;
        height: 711px;
        z-index: 1;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    #hero-bulat {
        width: 150px;
        margin-top: 470px;
        margin-left: 1158px;
    }

    .konten {
        position: relative;
        z-index: 2;
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
        margin-top: 100px;
        margin-left: 180px;
    }

    .konten h2 {
        font-size: 40px;
    }

    .section-2 {
        position: relative;
        margin-bottom: 100px;
        z-index: 2;
    }

    .section-2 h2 {
        margin-top: 50px;
    }

    .section-2 h5 {
        margin-top: 50px;
    }

    .layanan-lain {
        margin-top: 100px;
        margin-left: 150px;
    }

    .jenis-pembayaran {
        margin-top: 100px;
        margin-left: 150px;
    }

    .total {
        margin-top: 100px;
        margin-left: 150px;
    }

    .tombol-pembayaran {
        flex-wrap: wrap;
        justify-content: center;
    }

    .tombol {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        background: none;
        border: 3px solid black;
        border-radius: 10px;
        font-size: 14px;
        cursor: pointer;
        width: 200px;
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

    span {
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
        width: 350px;
        height: 42px;
        border: 3px solid white;
        border-radius: 10px;
    }
</style>
<section class="section-1">
    <div class="container">
        <div class="image-container">
            <img src="/img/hero-bulat.png" alt="" id="hero-bulat">
        </div>
        <div class="konten">
            <div class="row d-flex">
                <div class="col">
                    <h1><b>Detail Pesanan </b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="/img/cuci-helm.png" alt="" id="cs">
                </div>
                <div class="col-8">
                    <h2><b>Cuci Helm</b></h2>
                    <hr style="width: 250px;">
                    <form>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="Nama Pemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" id="pemesan" class="form-input2" name="pemesan" required>
                            </div>
                            <div class="col">
                                <label for="Telepon" class="form-label">Telepon</label>
                                <input type="phone" id="telepon" class="form-input2" name="telepon" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="Kategori Layanan" class="form-label">Kategori Layanan</label>
                                <button type="button" class="tombol" style="width: 160px; border: 3px solid white; color:white;">Regular</button>
                                <button type="button" class="tombol" style="width: 160px; border: 3px solid white; color:white;">Express</button>
                            </div>
                            <div class="col">
                                <label for="Alamat" class="form-label">Alamat</label>
                                <input type="text" id="alamat" class="form-input2" name="alamat" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="tanggal" class="form-label">Pilih Tanggal Pengiriman</label>
                                <input type="text" id="alamat" class="form-input2" name="alamat" required>
                            </div>
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
        <div class="layanan-lain">
            <h5>Layanan Lainnya</h5>
            <button type="button" class="tombol">Antar & Jemput</button>
        </div>
        <div class="row">
            <div class="col">
                <div class="jenis-pembayaran">
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
            </div>
            <div class="col">
                <div class="total">
                    <h5>Jumlah Yang Harus Dibayarkan</h5>
                    <span>
                        <h4>Rp. 35.000</h4>
                    </span>
                    <br><br><br><br><br><br>
                    <button type="button" class="tombol" style="width: 300px;">Pesan</button>

                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->endSection(); ?>