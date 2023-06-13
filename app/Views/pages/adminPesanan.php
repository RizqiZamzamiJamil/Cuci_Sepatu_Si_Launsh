<?= $this->extend('layout/templateDashboard'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-3">
        <div class="foto">
            <div class="overlay">
                <span class="name">RAHMAWAN SAPUTRA</span>
            </div>
            <img src="/img/admin-pesanan-sample.png" alt="RAHMAWAN SAPUTRA">
        </div>
    </div>
    <div class="col-9" style="position: relative;">
        <div class="data-status">
            <div class="data">
                <h4>Data Pesanan</h4>
                <br>
                <div class="row">
                    <div class="col">
                        <h5>Jenis Layanan</h5>
                        <h6>Cuci Sepatu</h6>
                    </div>
                    <div class="col">
                        <h5>Tanggal Masuk</h5>
                        <h6>02 Oktober 2023</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Alamat</h5>
                        <h6>Jl. A Yani No. 87 Surabaya</h6>
                    </div>
                    <div class="col">
                        <h5>Estimasi Selesai</h5>
                        <h6>05 Oktober 2023</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>No. Telepon</h5>
                        <h6>082435578100</h6>
                    </div>
                    <div class="col">
                        <h5>Pembayaran</h5>
                        <h6>Uang Tunai</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>Jenis Kelamin</h5>
                        <h6>Laki-laki</h6>
                    </div>
                    <div class="col">
                        <h5>Kasir</h5>
                        <h6>Kansha Maulidya</h6>
                    </div>
                </div>
            </div>
            <div class="item">
                <h4>Status</h4>
                <h6>Senin, 02 Oktober 2023 </h6>
                <h6>13.32</h6>
                <div class="status">
                    <button class="status">Menunggu</button>
                    <button class="status">Pengerjaan</button>
                    <button class="status">Selesai</button>
                </div>
            </div>
        </div>
        <div class="detail-riwayat-proses">
            <div class="item">
                <h4>Detail Barang</h4>
                <br>
                <div>
                    <h5>Jenis Layanan</h5>
                    <h6>Cuci Sepatu</h6>
                </div>
                <div>
                    <h5>Layanan</h5>
                    <h6>Fast Clean</h6>
                </div>
                <div>
                    <h5>Kategori Barang</h5>
                    <h6>Sneaker</h6>
                </div>
                <div>
                    <h5>Warna Barang</h5>
                    <h6>Coklat</h6>
                </div>
            </div>
            <div class="item">
                <h4>Riwayat Pemesanan</h4>
                <br>
                <table>
                    <tr>
                        <td>
                            <h5>Cuci Sepatu</h5>
                        </td>
                        <td>
                            <h6>28 Agustus 2023</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Cuci Sepatu</h5>
                        </td>
                        <td>
                            <h6>28 Agustus 2023</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Cuci Sepatu</h5>
                        </td>
                        <td>
                            <h6>28 Agustus 2023</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Cuci Sepatu</h5>
                        </td>
                        <td>
                            <h6>28 Agustus 2023</h6>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="item">
                <h4>Proses Transaksi</h4>
                <br>
                <div>
                    <h5>Status Pembayaran</h5>
                    <h6>Lunas</h6>
                </div>
                <div>
                    <h5>Jenis Pembayaran</h5>
                    <h6>Uang Tunai</h6>
                </div>
                <div>
                    <h5>Nominal</h5>
                    <h6>Rp. 50.000</h6>
                </div>
                <div class="transaksi">
                    <button onclick="detail()">Transaksi</button>
                </div>
            </div>
        </div>
        <button onclick="save()" id="simpan">Simpan</button>
    </div>
</div>

<div class="pop-up">
    <style>
        .modal {
            display: none;
            position: fixed;
            color: #248973;
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
            background-color: #fff;
            width: 400px;
            height: 470px;
            padding: 20px;
            margin: 150px auto;
            border-radius: 20px;
        }

        .modal-content h3 {
            margin-bottom: 10px;
            text-align: center;
        }

        .modal-content h5 {
            margin-bottom: -2px;
            margin-top: 10px;
        }

        .struk {
            position: relative;
            margin-top: -10px;
        }

        .struk .tanggal {
            position: absolute;
            right: 0;
            top: 0;
        }

        .pembayaran .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 4px;
        }

        .pembayaran .row .col:last-child {
            text-align: right;
        }

        #cetak {
            position: absolute;
            right: 20px;
            bottom: 20px;
            padding: 5px;
            background-color: #b0b0b0;
            color: black;
            font-weight: 600;
            font-size: 15px;
            border: none;
            border-radius: 10px;
        }

        #cetak:hover {
            background-color: #0FC598;
            color: white;
        }
    </style>

    <div id="detail-modal" class="modal">
        <div class="modal-content">
            <header>
                <h3>STRUK PELANGGAN</h3>
                <hr>
            </header>
            <div class="struk">
                <div class="tanggal">
                    Senin, 02 Oktober 2023
                </div>
                <br>
                <div class="isi">
                    <div>
                        <h5>Jenis Layanan</h5>
                        Cuci Sepatu
                    </div>
                    <div>
                        <h5>Layanan Pengerjaan</h5>
                        Deep Clean
                    </div>
                    <div>
                        <h5>Jenis Pembayaran</h5>
                        Uang Tunai
                    </div>
                </div>

                <div class="pembayaran">
                    <h5>Pembayaran</h5>
                    <div class="row">
                        <div class="col">
                            Cuci Sepatu
                        </div>
                        <div class="col">
                            1x
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Nominal
                        </div>
                        <div class="col">
                            Rp. 50.000
                        </div>
                    </div>
                    <hr style="margin: -2px 0px 0px 1px;">
                    <div class="row">
                        <div class="col">
                            Uang Tunai
                        </div>
                        <div class="col">
                            Rp. 100.000
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Kembalian
                        </div>
                        <div class="col">
                            Rp. 50.000
                        </div>
                    </div>
                    <br>
                </div>

            </div>
            <button id="cetak" type="button">
                Cetak
            </button>
        </div>
    </div>
</div>

<div class="penyimpanan">
    <style>
        .save-modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
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

        .save-modal .modal-content {
            background-color: #fff;
            height: 150px;
            padding: 20px;
            margin: 270px auto;
            border-radius: 20px;
            justify-content: center;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .save-modal .modal-content .close:hover,
        .save-modal .modal-content .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        h2 {
            margin-top: 0;
        }

        p {
            margin-bottom: 0;
        }
    </style>

    <div id="save" class="save-modal">
        <div class="modal-content">

            <h2>Data Tersimpan</h2>
            <p>Data Anda telah berhasil disimpan</p>
        </div>
    </div>

</div>


<style>
    main {
        width: 100%;
        padding: 36px 24px;
        font-family: var(--poppins);
        max-height: calc(100vh - 56px);
        overflow-y: auto;
    }

    main h4 {
        font-size: 20px;
        font-weight: 600;
    }

    main h5 {
        font-size: 17px;
        font-weight: 600;
    }

    main h6 {
        margin-top: -8px;
        font-size: 12px;
    }

    .foto img {
        width: 270px;
        height: 585px;
    }


    .foto {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
    }

    .overlay {
        position: absolute;
        font-weight: 600;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0;
        background-color: rgba(255, 255, 255, 0);
        color: #0FC598;
        overflow: hidden;
        transition: height 0.3s, background-color 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .foto:hover .overlay {
        height: 50px;
        /* Mengubah tinggi overlay ke 100% */
        background-color: rgba(255, 255, 255, 0.8);
        /* Mengubah warna latar belakang menjadi putih dengan opasitas 0.8 */
    }

    .name {
        padding: 5px;
    }

    .data-status {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 20px;
    }

    .data {
        grid-column: span 2;
    }

    .data,
    .item {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 20px;
        border-radius: 30px;
        height: 255px;
        background-color: white;
        color: #248973;
    }

    .detail-riwayat-proses {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 20px;
    }

    td {
        display: block;
    }

    .status {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .status button {
        border-radius: 40px;
        padding: 10px;
        width: 150px;
        margin: 5px;
        color: #248973;
        border: none;
        background-color: #D9D9D9;
    }

    .status button:hover {
        color: #D9D9D9;
        background-color: #248973;
    }

    .transaksi {
        position: relative;
        height: 100%;
    }

    .transaksi button {
        position: absolute;
        bottom: 0;
        right: 0;
        padding: 5px;
        color: #248973;
        border: none;
        background-color: #D9D9D9;
    }

    .transaksi button:hover {
        color: #D9D9D9;
        background-color: #248973;
    }

    #simpan {
        position: absolute;
        bottom: 0;
        right: 12px;
        background-color: #0FC598;
        padding: 10px;
        border-radius: 15px;
        border: none;
    }

    #simpan:hover {
        background-color: #248973;
    }
</style>

<script>
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

    function save() {
        var modal = document.getElementById("save");
        modal.style.display = "block";

        setTimeout(function() {
            modal.style.display = "none";
            window.location.href = "/pages/adminCuciSepatu"; // Ganti dengan URL halaman yang diinginkan
        }, 2000);
    }

    var modal = document.getElementById("save");
    modal.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
            window.location.href = "/pages/adminCuciSepatu"; // Ganti dengan URL halaman yang diinginkan
        }
    });
</script>

<?= $this->endSection(); ?>