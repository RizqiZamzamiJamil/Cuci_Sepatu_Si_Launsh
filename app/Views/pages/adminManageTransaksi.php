<?= $this->extend('layout/templateDashboard'); ?>

<?= $this->section('content'); ?>

<div class="head-title">
    <div class="left">
        <h1>TRANSAKSI</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Manajer Data</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Transaksi</a>
            </li>
        </ul>
    </div>
</div>

<div class="order">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NAMA</th>
                <th>ID PELANGGAN</th>
                <th>JENIS LAYANAN</th>
                <th>METODE PEMBAYARAN</th>
                <th>TOTAL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>RAHMAWAN SAPUTRA</td>
                <td>123928301</td>
                <td>CUCI SEPATU</td>
                <td>UANG TUNAI</td>
                <td>Rp. 50.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>SAFITRI SALSABILLA</td>
                <td>1319813729</td>
                <td>CUCI HELM</td>
                <td>UANG TUNAI</td>
                <td>Rp. 45.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>DICKY WAHYU KRISTIANTO</td>
                <td>123988372</td>
                <td>CUCI UNYELLOWING</td>
                <td>TRANSFER</td>
                <td>Rp. 60.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>PUTRI RAHAYU</td>
                <td>129183734</td>
                <td>CUCI SEPATU</td>
                <td>QRIS</td>
                <td>Rp. 50.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>BRYAN ADITYA</td>
                <td>129327392</td>
                <td>CUCI HELM</td>
                <td>OVO</td>
                <td>Rp. 45.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>DANIEL SANJAYA</td>
                <td>129832038</td>
                <td>CUCI UNYELLOWING</td>
                <td>QRIS</td>
                <td>Rp. 60.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>RATIH FRANSISCA</td>
                <td>219833728</td>
                <td>CUCI HELM</td>
                <td>DANA</td>
                <td>Rp. 50.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>GALIH ISKANDAR</td>
                <td>219328789</td>
                <td>CUCI UNYELLOWING</td>
                <td>OVO</td>
                <td>Rp. 45.000</td>
                <td>
                    <a onclick="edit()" href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>


        </tbody>
    </table>
</div>

<div class="modal-overlay">
    <style>
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
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

        .hapus {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <div class="hapus">
        <h2>Konfirmasi Hapus Data</h2>
        <p>Anda yakin ingin menghapus data ini?</p>
        <div class="button-container">
            <button class="cancel" onclick="tutupModal()">Enggak</button>
            <button class="confirm" onclick="hapusData()">Iya</button>
        </div>
    </div>
</div>

<div class="pop-up">
    <style>
        .edit {
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
            height: 630px;
            padding: 20px;
            margin: 50px auto;
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

    <div id="edit-modal" class="edit">
        <div class="modal-content">
            <header>
                <h3>EDIT DETAIL TRANSAKSI</h3>
                <hr>
            </header>
            <div class="isi">
                <div class="identitas">
                    <h6><b>ID Pelanggan</b></h6>
                    <h6>123928301</h6>
                    <h6><b>NAMA</b></h6>
                    <h6>RAHMAWAN SAPUTRA</h6>
                </div>
                <div class="isi">
                    <form id="payment-form">
                        <div class="form-group">
                            <label for="jenis-layanan">Jenis Layanan</label>
                            <select class="form-control" id="jenis-layanan">
                                <option value="">Pilih jenis layanan</option>
                                <option value="cuci-sepatu">Cuci Sepatu</option>
                                <option value="cuci-helm">Cuci Helm</option>
                                <option value="unyellowing">Unyellowing</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="layanan-pengerjaan">Layanan Pengerjaan</label>
                            <select class="form-control" id="layanan-pengerjaan">
                                <option value="">Pilih layanan pengerjaan</option>
                                <option value="normal">Normal</option>
                                <option value="kilat">Kilat</option>
                                <option value="super-kilat">Super Kilat</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="metode-pembayaran">Metode Pembayaran</label>
                            <select class="form-control" id="metode-pembayaran">
                                <option value="">Pilih metode pembayaran</option>
                                <option value="cash">Cash</option>
                                <option value="transfer">Transfer</option>
                                <option value="e-wallet">E-Wallet</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <p id="total">Rp. 40.000</p>
                        </div>

                        <div class="form-group">
                            <label for="nominal-pembayaran">Nominal Pembayaran</label>
                            <input type="text" class="form-control" id="nominal-pembayaran">
                        </div>

                        <div class="form-group">
                            <label>Kembalian</label>
                            <p id="kembalian">Rp. 60.000</p>
                        </div>

                    </form>
                </div>
            </div>
            <button id="cetak" type="button">
                Simpan
            </button>
        </div>
    </div>
</div>

<script>
    function edit() {
        var modal = document.getElementById("edit-modal");
        modal.style.display = "block";

        window.addEventListener("click", close);
    }

    function close(event) {
        var modal = document.getElementById("edit-modal");
        var modalContent = document.querySelector(".modal-content");

        if (event.target === modal) {
            modal.style.display = "none";

            window.removeEventListener("click", closePopupOutside);
        }
    }

    function konfirmasi() {
        var modalOverlay = document.querySelector('.modal-overlay');
        modalOverlay.style.display = 'flex';
    }

    function tutupModal() {
        var modalOverlay = document.querySelector('.modal-overlay');
        modalOverlay.style.display = 'none';
    }

    function hapusData() {
        // Logika untuk menghapus data
        window.location.href = "<?= site_url('auth/hapusOrder') ?>";
        tutupModal();
    }

    // Ambil elemen-elemen yang diperlukan
    const totalElement = document.getElementById('total');
    const nominalPembayaranElement = document.getElementById('nominal-pembayaran');
    const kembalianElement = document.getElementById('kembalian');

    // Tambahkan event listener pada form submit
    document.getElementById('payment-form').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form submit

        // Ambil nilai total dan nominal pembayaran
        const total = parseFloat(totalElement.innerText);
        const nominalPembayaran = parseFloat(nominalPembayaranElement.value);

        // Hitung kembalian
        const kembalian = nominalPembayaran - total;

        // Tampilkan kembalian
        kembalianElement.innerText = kembalian.toFixed(2);
    });
</script>

<style>
    /* MAIN */
    #content main {
        width: 100%;
        padding: 36px 24px;
        font-family: var(--poppins);
        max-height: calc(100vh - 56px);
        overflow-y: auto;
    }

    #content main .head-title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        grid-gap: 16px;
        flex-wrap: wrap;
    }

    #content main .head-title .left h1 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 10px;
        color: var(--dark);
    }

    #content main .head-title .left .breadcrumb {
        display: flex;
        align-items: center;
        grid-gap: 16px;
    }

    #content main .head-title .left .breadcrumb li {
        color: var(--dark);
    }

    #content main .head-title .left .breadcrumb li a {
        color: var(--dark-grey);
        pointer-events: none;
    }

    #content main .head-title .left .breadcrumb li a.active {
        color: var(--blue);
        pointer-events: unset;
    }

    #content main .order {
        flex-grow: 1;
        flex-basis: 500px;
        background-color: white;
        padding: 20px;
        border-radius: 40px;
        position: relative;
        top: 30px;
        margin-bottom: 30px;
    }

    #content main .order table {
        width: 100%;
        border-collapse: collapse;
    }

    #content main .order table th {
        padding-bottom: 12px;
        font-size: 13px;
        text-align: left;
        border-bottom: 1px solid var(--grey);
    }

    #content main .order table td {
        padding: 16px 0;
    }

    #content main .order table tr td:first-child {
        display: flex;
        align-items: center;
        grid-gap: 12px;
        padding-left: 6px;
    }

    #content main .order table td img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
    }

    #content main .order table tbody tr:hover {
        background: var(--grey);
    }

    #content main .order table tr td .status {
        font-size: 10px;
        padding: 6px 16px;
        color: var(--light);
        border-radius: 20px;
        font-weight: 700;
        display: flex;
        justify-content: center;
        width: 100px;
    }

    #content main .order table tr td .status.completed {
        background: var(--blue);
    }

    #content main .order table tr td .status.process {
        background: var(--yellow);
    }

    #content main .order table tr td .status.pending {
        background: var(--orange);
    }
</style>
<?= $this->endSection(); ?>