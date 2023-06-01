<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .navbar .navbar-brand .logo {
        max-height: 40px;
    }

    .navbar-nav {
        width: 1000px;
    }

    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
        color: #0FC598;
    }

    .navbar-brand {
        color: #0FC598;
    }


    .collapse {
        margin-left: 500px;
    }

    .navbar .signin,
    .navbar .signin:focus {
        text-decoration: none;
        padding: 8px 20px;
        margin-left: 10px;
        border-radius: 9px;
        color: #0FC598;
    }

    .navbar .signin:hover,
    .navbar .signin:focus:hover {
        color: #fff;
        background: #0FC598;
    }

    .navbar .signup,
    .navbar .signup:focus {
        text-decoration: none;
        padding: 8px 20px;
        margin-left: 8px;
        border-radius: 9px;
        color: #0FC598;
    }

    .navbar .signup:hover,
    .navbar .signup:focus:hover {
        color: #fff;
        background: #0FC598;
    }

    .navbar-nav .nav-link.active {
        color: #0FC598;
    }

    .navbar-nav .signup.active,
    .signin.active {
        background-color: #0FC598;
        color: white;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" alt="Logo" class="logo">
            SI LAUNSH
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] == '/' ? 'active' : ''); ?>" href="/">Beranda</a>
                <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/pages/about') !== false ? 'active' : ''); ?>" href="/pages/about">Tentang Kami</a>
                <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/pages/testimoni') !== false ? 'active' : ''); ?>" href="/pages/testimoni">Testimoni</a>
                <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/pages/hubungi') !== false ? 'active' : ''); ?>" href="/pages/hubungi">Hubungi Kami</a>
                <?php if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];

                    // Tampilkan tombol logo profil dan nama username
                    echo '<a style="margin-left:60px;" class="nav-link" href="/pages/profil"> <b>'.$username.'</b></a>';
                    echo '<a id="icon-profil" href="/pages/profil"><img src="/img/profil.png" alt="Profile"></a>';

                } else {
                    // Tampilkan tombol daftar dan masuk
                    echo '<a class="signup ' . (strpos($_SERVER['REQUEST_URI'], '/pages/daftar') !== false ? 'active' : '') . '" href="/pages/daftar">Daftar</a>';
                    echo '<a class="signin ' . (strpos($_SERVER['REQUEST_URI'], '/pages/masuk') !== false ? 'active' : '') . '" href="/pages/masuk">Masuk</a>';
                }
                ?>
                <!-- <a class="signup <?php echo (strpos($_SERVER['REQUEST_URI'], '/pages/daftar') !== false ? 'active' : ''); ?>" href="/pages/daftar">Daftar</a>
                <a class="signin <?php echo (strpos($_SERVER['REQUEST_URI'], '/pages/masuk') !== false ? 'active' : ''); ?>" href="/pages/masuk">Masuk</a> -->
            </div>
        </div>
    </div>
</nav>