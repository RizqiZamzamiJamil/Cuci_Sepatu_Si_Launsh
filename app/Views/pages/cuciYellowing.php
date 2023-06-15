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

    .image-wrapper button {
        position: absolute;
        background-color: #fff;
        color: black;
        padding: 10px;
        bottom: 20px;
        left: 20px;
        width: 150px;
        border-radius: 15px;
        border: none;
    }

    .image-wrapper button:hover {
        background-color: #0FC598;
        border: 2px solid white;
        color: white;
    }
</style>
<section class="section-1" data-aos="fade-up">
    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
            <a href="/pages/cuci"><button>Kembali</button></a>
        </div>

        <div class="konten">
            <div class="row d-flex">
                <div class="col">
                    <h1 data-aos="fade-up" data-aos-delay="200"><b>Detail Pesanan </b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4" data-aos="fade-up" data-aos-delay="400">
                    <img src="/img/cuci-yellow.png" alt="" id="cs">
                </div>
                <div class="col-8">
                    <h2 data-aos="fade-up" data-aos-delay="500"><b>Unyellowing</b></h2>
                    <hr data-aos="fade-up" data-aos-delay="550" style="width: 250px;opacity: 1;">
                    <form action="/pemesanan/insertPesanan">
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
                        <div class="row" style="margin-top: 10px;" data-aos="fade-up" data-aos-delay="800">
                            <div class="col">
                                <label data-aos="fade-up" data-aos-delay="800" for="Alamat" class="form-label">Alamat</label>
                                <input data-aos="fade-up" data-aos-delay="850" type="text" id="alamat" class="form-input2" name="alamat" value="<?php echo $alamat; ?>" required>
                            </div>
                            <div class="col">
                                <label data-aos="fade-up" data-aos-delay="950" for="jenisbayar" class="form-label">Jenis Pembayaran</label>
                                <select class="dropdown" id="metode" name="metode">
                                    <option value="">Pilih Jenis Pembayaran</option>
                                    <option value="Uang Tunai">Uang Tunai</option>
                                    <option value="OVO">OVO</option>
                                    <option value="Dana">Dana</option>
                                    <option value="QRIS">QRIS</option>
                                    <option value="LinkAja">LinkAja</option>
                                    <option value="Transfer">Transfer</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;" data-aos="fade-up" data-aos-delay="1100">
                            <div class="col">

                            </div>
                            <div class="col">
                                <button onclick="hitung_total()" type="button" class="tombol">Lihat Detail</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="pop-up">
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            animation: fade-in 0.6s forwards;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #fff;
            width: 700px;
            padding: 20px;
            margin: 150px auto;
            border-radius: 20px;
        }

        .modal-content h1 {
            margin-left: 30px;
        }

        .modal-content h2 {
            margin-left: 70px;
            margin-right: 30px;
        }

        .modal-content h4 {
            margin-left: 70px;
            margin-right: 30px;
        }

        #tombol-bayar {
            position: absolute;
            width: 250px;
            right: 20px;
            bottom: 20px;
            padding: 10px;
            background-color: #b0b0b0;
            color: black;
            font-size: 20px;
            border: none;
            border-radius: 10px;
        }

        #tombol-bayar:hover {
            background-color: #0FC598;
            color: white;
        }
    </style>

    <div id="detail-modal" class="modal">
        <div class="modal-content">
            <h1><b>Detail Pemesanan</b></h1>
            <div class="detail">
                <h4 id="nama_pemesan"><?= $nama; ?></h4>
                <h4 id="alamat_pemesan"><?= $alamat; ?></h4>
                <h4 id="telepon_pemesan"><?= $no_hp; ?></h4>
                <div class="row">
                    <div class="col-7">
                        <h4 id="layanan-terpilih"></h4>
                    </div>
                    <div class="col-5">
                        <h4 id="harga-layanan" style="position:absolute; right:0px"><b></b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <h4 id="kategori-terpilih"></h4>
                    </div>
                    <div class="col-5">
                        <h4 id="harga-kategori" style="position:absolute; right:0px"><b></b></h4>
                    </div>
                </div>
                <h4 id="metode-terpilih"></h4>
                <h4>Total Yang Harus Dibayarkan</h4>
                <h2 id="total_harga"><b></b></h2>
            </div>
            <button onclick="simpanUnyellowing()" id="tombol-bayar" type="button">
                Bayar Sekarang
            </button>
        </div>
    </div>
</div>


<Script>
    function detail() {
        var modal = document.getElementById("detail-modal");
        modal.style.display = "block";

        window.addEventListener("click", closePopupOutside);
    }

    function closePopupOutside(event) {
        var modal = document.getElementById("detail-modal");
        var modalContent = document.querySelector(".modal-content");

        if (event.target === modal) {
            modal.style.display = "none";

            window.removeEventListener("click", closePopupOutside);
        }
    }

    function hitung_total() {
        var selectElementMetode = document.getElementById('metode'); // ambil elemen dari id metode
        var selectMetode = selectElementMetode.options[selectElementMetode.selectedIndex].value; // ambil nilai dari elemen terpilih

        var data = {
            metode: selectMetode,
        }

        $.ajax({
            url: '<?php echo base_url('pemesanan/totalUnyellowing'); ?>',
            type: 'POST',
            data: data,
            success: function(response) {
                $('#layanan-terpilih').text(response.layanan);
                $('#harga-layanan').text(response.harga_layanan);
                $('#kategori-terpilih').text(response.kategori);
                $('#harga-kategori').text(response.harga_kategori);
                $('#metode-terpilih').text(response.metode);
                $('#total_harga').text(response.total_harga);
            }
        });

        detail(); // panggil fungsi ini untuk menampilkan data realtime ke pop up
    }

    function simpanUnyellowing() {
        var getNama = document.getElementById('pemesan');
        var nama = getNama.value;

        var getAlamat = document.getElementById('alamat');
        var alamat = getAlamat.value;

        var getTelepon = document.getElementById('telepon');
        var telepon = getTelepon.value;

        var metode = $('#metode-terpilih').text(); // untuk mengambil nilai dari id metode-terpilih
        var layanan = $('#layanan-terpilih').text();
        var kategori = $('#kategori-terpilih').text();

        var insertData = {
            nama: nama,
            telepon: telepon,
            alamat: alamat,
            layanan: layanan,
            kategori: kategori,
            metode: metode
        }

        $.ajax({
            url: '<?php echo base_url('pemesanan/insertPesanan'); ?>',
            type: 'POST',
            data: insertData,
            success: function(html) {
                alert('Data Pesanan Unyellowing berhasil ditambahkan');
            }
        });
    }
</Script>
<?= $this->endSection(); ?>