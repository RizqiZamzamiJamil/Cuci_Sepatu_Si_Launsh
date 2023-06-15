<?= $this->extend('layout/templateDashboard'); ?>

<?= $this->section('content'); ?>

<div class="head-title">
    <div class="left">
        <h1>PELANGGAN</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Manajer Data</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Pelanggan</a>
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
                <th>ALAMAT EMAIL</th>
                <th>JENIS KELAMIN</th>
                <th>ID PELANGGAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>FABLO AIMAR</td>
                <td>rahmawansaputraaa@gmail.com</td>
                <td>LAKI-LAKI</td>
                <td>123928301</td>
                <td>
                    <a href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>RIZQI ZAMZAMI JAMIL</td>
                <td>rahmawansaputraaa@gmail.com</td>
                <td>LAKI-LAKI</td>
                <td>123928301</td>
                <td>
                    <a href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>NAFIATUL FADLILAH</td>
                <td>rahmawansaputraaa@gmail.com</td>
                <td>LAKI-LAKI</td>
                <td>123928301</td>
                <td>
                    <a href="#"><i class='bx bxs-edit-alt'></i></i></a>
                    <a onclick="konfirmasi()" href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>HALIM TEGUH SAPUTRO</td>
                <td>rahmawansaputraaa@gmail.com</td>
                <td>LAKI-LAKI</td>
                <td>123928301</td>
                <td>
                    <a href="#"><i class='bx bxs-edit-alt'></i></i></a>
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

<script>
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