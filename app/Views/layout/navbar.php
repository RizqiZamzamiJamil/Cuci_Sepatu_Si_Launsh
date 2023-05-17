<style>
    .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .navbar .navbar-brand .logo {
        max-height: 40px;
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
        margin-left: 575px;
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
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" alt="Logo" class="logo">
            SI LAUNSH
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                <a class="nav-link" href="/pages/about">Tentang Kami</a>
                <a class="nav-link" href="/pages/testimoni">Testimoni</a>
                <a class="nav-link" href="#">Hubungi Kami</a>
                <a class="signup" href="/pages/daftar">Daftar</a>
                <a class="signin" href="/pages/masuk">Masuk</a>
            </div>
        </div>
    </div>
</nav>