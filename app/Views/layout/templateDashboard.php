<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>
    <link href="/img/logo.png" rel="icon">

    <!-- Boxicons -->

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/stylee.css">

    <title>AdminHub</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img id="logo" src="/img/logo.png" alt="">
            <span class="text">SiLaunsh</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="/pages/adminDashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#">
                    <i class='bx bxs-package'></i>
                    <span class="text">Pesanan</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="/pages/adminCuciSepatu">Cuci Sepatu</a></li>
                    <li><a href="#">Cuci Helm</a></li>
                    <li><a href="#">UnYellowing</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">
                    <i class='bx bxs-user-detail'></i>
                    <span class="text">Manajer Data</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Pemilik</a></li>
                    <li><a href="#">Kasir</a></li>
                    <li><a href="#">Pelanggan</a></li>
                    <li><a href="#">Barang</a></li>
                    <li><a href="#">Transaksi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">
                    <i class='bx bx-message-square-error'></i>
                    <span class="text">Laporan Pelanggan</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Testimoni</a></li>
                    <li><a href="#">Pengaduan</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Pengaturan</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Akun</a></li>
                </ul>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a onclick="keluar()" href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">

            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <?php if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    echo '<span style="margin-bottom: 5px;"><b>' . $username . '</b></span>';
                }
                ?>
                <img src="img/people.png" alt="">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <?= $this->renderSection('content'); ?>

            <!-- Konfirmasi Pop Up -->
            <div id="confirmationContainer" class="confirmation-container">
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
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        background-color: #fff;
                        width: 400px;
                        padding: 20px;
                        margin: 270px auto;
                        border-radius: 20px;
                    }

                    .button-container {
                        text-align: right;
                        margin-top: 20px;
                    }

                    .cancel,
                    .confirm {
                        padding: 10px 20px;
                        margin-left: 10px;
                    }

                    button {
                        cursor: pointer;
                        color: white;
                        border-radius: 10px;
                        width: 100px;
                    }

                    .confirm {
                        background-color: red;
                        transition: background-color 0.3s ease;
                    }

                    .cancel {
                        background-color: blue;
                        transition: background-color 0.3s ease;
                    }

                    .confirm:hover {
                        background-color: rgba(255, 0, 0, 0.5);
                    }

                    .cancel:hover {
                        background-color: rgba(0, 0, 255, 0.5);
                    }
                </style>
                <div id="confirmation-modal" class="modal">
                    <div class="modal-content">
                        <h2>Yakin mau keluar?</h2>
                        <div class="button-container">
                            <button class="cancel" onclick="enggak()">Enggak</button>
                            <button class="confirm" onclick="iya()">Iya</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->



    <script>
            // konfimasi keluar
    function keluar() {
        document.getElementById("confirmation-modal").style.display = "block";
    }

    function enggak() {
        document.getElementById("confirmation-modal").style.display = "none";
    }

    function iya() {
        window.location.href = "<?= site_url('auth/logout') ?>";
    }
    </script>
    <script src="/js/scriptAdmin.js"></script>

</body>

</html>