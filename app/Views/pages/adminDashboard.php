<?= $this->extend('layout/templateDashboard'); ?>

<?= $this->section('content'); ?>

<div class="head-title">
    <div class="left">
        <h1>Dashboard</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li><i class='bx bx-chevron-right'></i></li>
            <li>
                <a class="active" href="#">Home</a>
            </li>
        </ul>
    </div>
</div>

<div class="dash">
    <div class="item">
        <div style="position: relative; width: 300px; height: 150px;">
            <canvas id="dougnutChart"></canvas>
        </div>
        <div style="position: relative; width: 100%; height: 150px; top:10px;">
            Cuci Sepatu
            <progress class="progress-bar" value="40" max="100"></progress>
            Cuci Helm
            <progress class="progress-bar" value="60" max="100"></progress>
            UnYellowing
            <progress class="progress-bar" value="50" max="100"></progress>
        </div>
        <button style="width: 150px; background-color:#0FC598; border-radius:18px; padding:7px 0px; position: absolute; right: 20px; bottom:20px; border:none;">Pelaporan</button>
    </div>
    <div class="item">
        <div>
            <h4>Pesanan</h4>
            <h5>Jum'at, 09 Juni 2023</h5>
        </div>
        <div class="table-container">
            <table class="container">
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'">
                    <td class="col-3">
                        10.35
                    </td>
                    <td class="col-9">
                        Rahmawan Saputra
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="item">
        <a href="#" style="position: absolute; top:20px; right:20px; font-size:30px; color:#0FAA98;">
            <i class='bx bx-dots-vertical-rounded'></i>
        </a>

        <h4>Karyawan</h4>
        <div class="legend-container">
            <ul class="legend-list" style="list-style-type: none; padding:0; margin:0;">
                <li class="legend-item">
                    <span class="color-box red" style="background-color: #0FAA98;"></span>
                    Masuk
                </li>
                <li class="legend-item">
                    <span class="color-box green" style="background-color: red;"></span>
                    Libur
                </li>
            </ul>
        </div>
        <div class="table-container">
            <table class="container">
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: #0FAA98;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Fablo Aimar</b>
                        <br>
                        <small>Malang</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: #0FAA98;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Halim Teguh</b>
                        <br>
                        <small>Sidoarjo</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: red;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Nur Alimah</b>
                        <br>
                        <small>Mojokerto</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: #0FAA98;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Jati Wahyu</b>
                        <br>
                        <small>Malang</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: #0FAA98;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Anas Wirayudha</b>
                        <br>
                        <small>Pasuruan</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: #0FAA98;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Rizqi Zamzami</b>
                        <br>
                        <small>Surabaya</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: red;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Kansha Maulidya</b>
                        <br>
                        <small>Sidoarjo</small>
                    </td>
                </tr>
                <tr class="row" onclick="window.location.href='halaman-tujuan.html'" style="background-color: red;">
                    <td class="col" style="padding: 5px 40px; ">
                        <b>Nafiatul Fadlilah</b>
                        <br>
                        <small>Malang</small>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<br>

<div class="pemesanan">
    <div class="item">
        <h4>Data Pemesanan</h4>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="kota">
                        <h3>Surabaya</h3>
                        <span style="width:300px;">
                            <h1 class="jml"><b>19</b></h1>
                            <h6 class="jml">Pesanan</h6>
                        </span>
                        <br>
                        <div class="menunggu" style="position:relative;">
                            Menunggu
                            <span style="position:absolute; right:0;">5</span>
                            <progress class="progress-bar-kota" value="40" max="100"></progress>
                        </div>
                        <div class="proses" style="position:relative;">
                            Proses
                            <span style="position:absolute; right:0;">7</span>
                            <progress class="progress-bar-kota" value="60" max="100"></progress>
                        </div>
                        <div class="selesai" style="position:relative;">
                            Selesai
                            <span style="position:absolute; right:0;">6</span>
                            <progress class="progress-bar-kota" value="50" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kota">
                        <h3>Sidoarjo</h3>
                        <span style="width:300px;">
                            <h1 class="jml"><b>19</b></h1>
                            <h6 class="jml">Pesanan</h6>
                        </span>
                        <br>
                        <div class="menunggu" style="position:relative;">
                            Menunggu
                            <span style="position:absolute; right:0;">5</span>
                            <progress class="progress-bar-kota" value="40" max="100"></progress>
                        </div>
                        <div class="proses" style="position:relative;">
                            Proses
                            <span style="position:absolute; right:0;">7</span>
                            <progress class="progress-bar-kota" value="60" max="100"></progress>
                        </div>
                        <div class="selesai" style="position:relative;">
                            Selesai
                            <span style="position:absolute; right:0;">6</span>
                            <progress class="progress-bar-kota" value="50" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kota">
                        <h3>Pasuruan</h3>
                        <span style="width:300px;">
                            <h1 class="jml"><b>19</b></h1>
                            <h6 class="jml">Pesanan</h6>
                        </span>
                        <br>
                        <div class="menunggu" style="position:relative;">
                            Menunggu
                            <span style="position:absolute; right:0;">5</span>
                            <progress class="progress-bar-kota" value="40" max="100"></progress>
                        </div>
                        <div class="proses" style="position:relative;">
                            Proses
                            <span style="position:absolute; right:0;">7</span>
                            <progress class="progress-bar-kota" value="60" max="100"></progress>
                        </div>
                        <div class="selesai" style="position:relative;">
                            Selesai
                            <span style="position:absolute; right:0;">6</span>
                            <progress class="progress-bar-kota" value="50" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kota">
                        <h3>Mojokerto</h3>
                        <span style="width:300px;">
                            <h1 class="jml"><b>19</b></h1>
                            <h6 class="jml">Pesanan</h6>
                        </span>
                        <br>
                        <div class="menunggu" style="position:relative;">
                            Menunggu
                            <span style="position:absolute; right:0;">5</span>
                            <progress class="progress-bar-kota" value="40" max="100"></progress>
                        </div>
                        <div class="proses" style="position:relative;">
                            Proses
                            <span style="position:absolute; right:0;">7</span>
                            <progress class="progress-bar-kota" value="60" max="100"></progress>
                        </div>
                        <div class="selesai" style="position:relative;">
                            Selesai
                            <span style="position:absolute; right:0;">6</span>
                            <progress class="progress-bar-kota" value="50" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kota">
                        <h3>Malang</h3>
                        <span style="width:300px;">
                            <h1 class="jml"><b>19</b></h1>
                            <h6 class="jml">Pesanan</h6>
                        </span>
                        <br>
                        <div class="menunggu" style="position:relative;">
                            Menunggu
                            <span style="position:absolute; right:0;">5</span>
                            <progress class="progress-bar-kota" value="40" max="100"></progress>
                        </div>
                        <div class="proses" style="position:relative;">
                            Proses
                            <span style="position:absolute; right:0;">7</span>
                            <progress class="progress-bar-kota" value="60" max="100"></progress>
                        </div>
                        <div class="selesai" style="position:relative;">
                            Selesai
                            <span style="position:absolute; right:0;">6</span>
                            <progress class="progress-bar-kota" value="50" max="100"></progress>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="item item-2-3">
        <a href="#" style="position: absolute; top:20px; right:20px; font-size:30px; color:#0FAA98;">
            <i class='bx bx-dots-vertical-rounded'></i>
        </a>
        <h4>Grafik Pemesanan</h4>
        <canvas id="lineChart" style="width:100px;"></canvas>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var xValues = ["Selesai", "Proses"];
    var yValues = [60, 40];
    var barColors = [
        "#0FC598",
        "#248973"
    ];

    new Chart("dougnutChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "My Doughnut Chart"
            },
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right'
                }
            }
        }
    });

    const bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];

    new Chart("lineChart", {
        type: "line",
        data: {
            labels: bulan,
            datasets: [{
                data: [46, 56, 52, 47, 65, 49, 53, 58, 51, 44, 64, 49],
                borderColor: "#FC3030",
                label: "Sepatu",
                tension: 0,
                fill: false
            }, {
                data: [48, 39, 48, 51, 57, 42, 54, 58, 51, 43, 46, 57],
                borderColor: "#FFA800",
                label: "Helm",
                tension: 0,
                fill: false
            }, {
                data: [53, 43, 45, 40, 50, 52, 53, 51, 48, 46, 58, 53, 54],
                borderColor: "#00FF84",
                label: "UnYellowing",
                tension: 0,
                fill: false
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            }
        }
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


    /* MAIN */
    /* CONTENT */

    .legend-item {
        display: flex;
        align-items: center;
        padding: 5px;
    }

    .color-box {
        display: inline-block;
        width: 20px;
        height: 20px;
        margin-right: 10px;
        border-radius: 5px;
    }

    .kota {
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        background-color: #0FAA98;
        width: 300px;
        border-radius: 25px;
        color: white;
        justify-content: center;
    }

    .kota .jml {
        display: inline;
    }

    .progress-bar-kota {
        width: 100%;
        height: 15px;
        appearance: none;
        background-color: #f1f1f1;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-bar-kota::-webkit-progress-bar {
        background-color: #D9D9D9;
        border-radius: 10px;
    }

    .progress-bar-kota::-webkit-progress-value {
        background-color: #248973;
        border-radius: 10px;
    }

    .progress-bar {
        width: 100%;
        height: 20px;
        appearance: none;
        background-color: #f1f1f1;
        border-radius: 10px;
        overflow: hidden;
    }

    .progress-bar::-webkit-progress-bar {
        background-color: #248973;
        border-radius: 10px;
    }

    .progress-bar::-webkit-progress-value {
        background-color: #0FC598;
        border-radius: 10px;
    }

    .table-container {
        height: 280px;
        overflow-y: scroll;
        scrollbar-width: none;
    }

    .table-container::-webkit-scrollbar {
        width: 0;
        /* Menghilangkan lebar tombol scroll di browser WebKit */
    }

    .pesanan {
        width: 100%;
        padding: 5px 10px;
        border-collapse: collapse;
    }

    .row {
        background-color: #0FC598;
        border-radius: 13px;
        align-items: center;
        cursor: pointer;
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: 600;
        margin: 10px 0px;
    }

    .row:hover {
        background-color: #0FAA98;
    }

    .row-hidden {
        display: none;
    }

    .col-3,
    .col-9 {
        padding: 10px 30px;
    }

    .col-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .dash {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;
    }

    .item {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 20px;
        border-radius: 20px;
        height: 380px;
        background-color: white;
        color: #248973;
    }

    .item h4 {
        font-weight: 600;
    }

    .item h5 {
        margin-top: -10px;
    }

    .pemesanan {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;
    }

    .item-2-3 {
        grid-column: span 2;
    }
</style>
<script>

</script>

<?= $this->endSection(); ?>