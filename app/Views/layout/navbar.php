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

    a.nav-link.active {
        font-weight: bold;
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
                <a class="nav-link <?php echo ($current_page == 'home.php') ? 'active' : ''; ?>" aria-current="page" href="/">Beranda</a>
                <a class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>" aria-current="page" href="/pages/about">Tentang Kami</a>
<!--                 <a class="nav-link" aria-current="page" href="/">Beranda</a> -->
<!--                 <a class="nav-link" href="/pages/about">Tentang Kami</a> -->
                <a class="nav-link active" href="/pages/testimoni">Testimoni</a>
                <a class="nav-link active" href="#">Hubungi Kami</a>
                <a class="signup" href="/pages/daftar">Daftar</a>
                <a class="signin" href="/pages/masuk">Masuk</a>
            </div>
        </div>
    </div>
</nav>