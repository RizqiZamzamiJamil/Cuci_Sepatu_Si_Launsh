<?= $this->extend('layout/templateDashboard'); ?>

<?= $this->section('content'); ?>
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
<div class="head-title">
    <div class="left">
        <h1>Cuci Sepatu</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Pesanan</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Cuci Sepatu</a>
            </li>
        </ul>
    </div>
</div>

<div class="order">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Tanggal Order</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Selesai</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Menunggu</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status pending">Menunggu</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Selesai</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status process">Proses</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status process">Proses</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status completed">Selesai</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    <p>RAHMAWAN SAPUTRA</p>
                </td>
                <td>
                    <p>JL. A. YANI NO 67, SURABAYA</p>
                </td>
                <td>
                    089767839213
                </td>
                <td>01-10-2021</td>
                <td><span class="status process">Proses</span></td>
                <td>
                    <a href="#"><i class='bx bx-detail'></i></a>
                    <a href="#"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>