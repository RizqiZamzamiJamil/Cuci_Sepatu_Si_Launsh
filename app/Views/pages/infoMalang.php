<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="/img/logo.png" rel="icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
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
            width: 230px;
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

        #pp {
            width: 40px;
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

                    <?php if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];

                        //Tampilkan tombol logo profil dan nama username
                        echo '<a style="margin-left:60px;" class="nav-link" href="/pages/profil"> <b>' . $username . '</b><img id="pp" src="/img/profil.png" alt="Profile"></a>';
                    } else {
                        // Tampilkan tombol daftar dan masuk
                        echo '<a class="signup ' . (strpos($_SERVER['REQUEST_URI'], '/pages/daftar') !== false ? 'active' : '') . '" href="/pages/daftar">Daftar</a>';
                        echo '<a class="signin ' . (strpos($_SERVER['REQUEST_URI'], '/pages/masuk') !== false ? 'active' : '') . '" href="/pages/masuk">Masuk</a>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </nav>


    <style>
        .tentang-kami .container {
            position: relative;
            background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%),
                url(/img/tentang-bg1.png);
            background-blend-mode: multiply;
            background-size: cover;
            background-position: center;
            height: 630px;
            box-shadow: -18px 10px 38px rgba(0, 0, 0, 0.5);
            border-radius: 400px 0px 0px 0px;
            color: white;
            overflow: hidden;
        }

        .image-wrapper img {
            position: absolute;
        }

        .tentang {
            position: relative;
            max-width: 900px;
            width: 100%;
            margin-left: 200px;
            color: white;
        }

        .tentang h1 {
            font-size: 50px;
            margin-top: 60px;
        }

        .tentang h2 {
            font-size: 30px;
        }


        #helm {
            top: 30px;
            right: 0;
            height: 250px;

        }

        #sepatu {
            height: 230px;
            bottom: -80px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 130px;
        }

        .image-wrapper button {
            position: absolute;
            background-color: #fff;
            color: black;
            padding: 10px;
            bottom: 20px;
            left: 300px;
            width: 150px;
            border-radius: 15px;
            border: none;
            z-index: 999;
        }

        .image-wrapper button:hover {
            background-color: #0FC598;
            border: 2px solid white;
            color: white;
        }

        .konten {
            margin-top: -50px;
        }

        .tentang .bx {
            font-size: 50px;
        }

        table td {
            padding: 0px 10px;
        }
    </style>

    <section class="tentang-kami" data-aos="fade-up">

        <div class="container">
            <div class="image-wrapper">
                <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
                <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
                <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
                <a href="/pages/"><button>Kembali</button></a>

            </div>
            <div class="tentang">
                <h1 data-aos="fade-up" data-aos-delay="100"><b>MALANG</b></h1>
                <br><br>
                <div class="konten d-flex flex-row bd-highlight mb-3">
                    <div class="maps">
                        <div class="maps" data-aos="fade-up" data-aos-delay="200">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.531480173888!2d112.61107729999999!3d-7.9438995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882731dd1ab5d%3A0xac0f06bdba00cb2!2sJalan%20Mayjend%20Jl.%20MT.%20Haryono%20No.39%2C%20Dinoyo%2C%20Lowokwaru%2C%20Malang%20City%2C%20East%20Java%2065145!5e0!3m2!1sid!2sid!4v1686841108858!5m2!1sid!2sid" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="d-flex flex-column bd-highlight mb-3">
                            <div class="d-flex flex-row mb-1" data-aos="fade-up" data-aos-delay="300">
                                <div class="p-2 bd-highlight">
                                    <i class='bx bx-map'></i>
                                </div>
                                <div class="p-2 ">
                                    <h2><b>Alamat</b></h2>
                                    <p>Jl. MT. Haryono No.39,
                                        Dinoyo, Kec. Lowokwaru,
                                        Kota Malang, Jawa Timur 65145</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-1" data-aos="fade-up" data-aos-delay="400">
                                <div class="p-2 bd-highlight">
                                    <i class='bx bx-time-five'></i>
                                </div>
                                <div class="p-2 ">
                                    <h2><b>Jam Oprasional</b></h2>
                                    <table>
                                        <tr>
                                            <td>Senin-Kamis</td>
                                            <td>09.00 - 20.00</td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td>13.00 - 21.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>08.00 - 19.00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex flex-row mb-1" data-aos="fade-up" data-aos-delay="500">
                                <div class="p-2 bd-highlight">
                                    <i class='bx bx-phone'></i>
                                </div>
                                <div class="p-2 ">
                                    <h2><b>Hubungi</b></h2>
                                    <p>08123676487</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
<style>
    footer {
        background-color: #ffffff;
        padding: 20px;
        text-align: center;
        clear: both;
        width: 100%;
        position: sticky;
    }

    .footer-content {
        margin: auto;
        width: 100%;
    }

    .footer-links a {
        margin-right: 10px;
        color: #333333;
    }
</style>
<footer>
    <div class="footer-content">
        <p>&copy; 2023 SiLaunsh</p>
        <div class="footer-links">
            <a href="#">Kebijakan</a>
            <a href="#">|</a>
            <a href="#">Dukungan</a>
        </div>
    </div>
</footer>

</html>