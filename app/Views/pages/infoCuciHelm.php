<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
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
        font-size: 40px;
        margin-top: 100px;
    }

    .tentang h2 {
        font-size: 20px;
        margin-top: -10px;
    }

    .tentang p {
        margin-left: 60px;

        font-size: 20px;
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
    }

    .cuci-sekarang {
        background-color: #fff;
        position: absolute;
        top: 80px;
        left: 800px;
        width: 200px;
        border-radius: 3px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.6);
    }

    .cuci-sekarang:hover {
        transform: scale(1.1);
    }

    a {
        text-decoration: none;
    }

    .cuci-sekarang h4 {
        color: #000;
        padding: 20px;
        font-size: 20px;
        text-align: center;
    }

    .image-wrapper button:hover {
        background-color: #0FC598;
        border: 2px solid white;
        color: white;
    }

    @media (max-width: 1399px) {
        .tentang-kami .container {
            border-radius: 380px 0px 0px 0px;
        }

        .tentang {
            max-width: 790px;
            width: 60%;
            margin-left: 280px;
            /* -20 */
        }

        .tentang h1 {
            font-size: 38px;
            /* -2 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 19px;
            /* -1 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 19px;
            /* -1 */
            margin-left: 60px;

        }

        #helm {
            top: 30px;
            right: 0;
            height: 240px;

        }

        #sepatu {
            height: 220px;
            bottom: -80px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 120px;
        }

    }

    @media (max-width:1199px) {
        .tentang-kami .container {
            border-radius: 330px 0px 0px 0px;
            /* -50 */
        }

        .tentang {
            max-width: 790px;
            width: 55%;
            /* -5 */
            margin-left: 220px;
            /* -60 */
        }

        .tentang h1 {
            font-size: 36px;
            /* -2 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 18px;
            /* -1 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 18px;
            /* -1 */
            margin-left: 60px;

        }

        #helm {
            top: 30px;
            right: 0;
            height: 220px;
            /* -20 */

        }

        #sepatu {
            height: 200px;
            /* -20 */
            bottom: -80px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 110px;
            /* -10 */
        }
    }

    @media (max-width:991px) {
        .tentang-kami .container {
            border-radius: 250px 0px 0px 0px;
            /* -80 */
        }

        .tentang {
            max-width: 790px;
            width: 55%;
            /* -10 */
            margin-left: 150px;
            /* -70 */
        }

        .tentang h1 {
            font-size: 28px;
            /* -8 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 15px;
            /* -3 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 15px;
            /* -3 */
            margin-left: 60px;

        }

        #helm {
            top: 30px;
            right: 0;
            height: 180px;
            /* -50 */

        }

        #sepatu {
            height: 150px;
            /* -50 */
            bottom: -50px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 80px;
            /* -30 */
        }
    }

    @media (max-width:767px) {
        .tentang-kami .container {
            border-radius: 200px 0px 0px 0px;
            /* -50 */
        }

        .tentang {
            max-width: 790px;
            width: 60%;
            margin-left: 80px;
            /* -40 */
        }

        .tentang h1 {
            font-size: 26px;
            /* -2 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 13px;
            /* -2 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 13px;
            /* -2 */
            margin-left: 60px;

        }

        #helm {
            top: 30px;
            right: 0;
            height: 150px;
            /* -30 */

        }

        #sepatu {
            height: 130px;
            /* -20 */
            bottom: -35px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 80px;
            /* -30 */
        }
    }
</style>

<section class="tentang-kami" data-aos="fade-up">

    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
            <a href="/pages/"><button>Kembali</button></a>
            <?php if (isset($_SESSION['isLoggedIn'])) { ?>
            <div class="cuci-sekarang">
                <a href="<?= base_url('/pages/cuci/') ?>">
                    <h4>
                        Cuci Sekarang
                    </h4>
                </a>
            </div>
        <?php } ?>
        </div>
        <div class="tentang">
            <h1 data-aos="fade-up" data-aos-delay="100"><b>Cuci Helm </b></h1>
            <br><br>
            <h2 data-aos="fade-up" data-aos-delay="200"><b>Regular</b></h2>
            <p data-aos="fade-up" data-aos-delay="300">Mencuci Helm dengan durasi pengerjaan sedikit lebih lama dibandingkan dengan Tipe Layanan Express, dan tentu memperhatikan kebersihan helm sebelum diserahkan kepada pelanggan</p>
            <h2 data-aos="fade-up" data-aos-delay="200"><b>Express</b></h2>
            <p data-aos="fade-up" data-aos-delay="300">Mencuci Helm dengan durasi pengerjaan yang cepat sesuai dengan nama layananya, Dengan membersihkan baik bagian dalam dan bagian luar helm agar terlihat seperti baru kembali dan tentu memperhatikan kebersihan helm sebelum diserahkan kepada pelanggan</p>
        </div>
        
    </div>
</section>
<?= $this->endSection(); ?>