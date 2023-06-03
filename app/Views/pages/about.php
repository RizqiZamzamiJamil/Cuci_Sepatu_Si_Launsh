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
        max-width: 790px;
        width: 100%;
        margin-left: 300px;
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
        margin-top: 30px;
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
            margin-top: 30px;
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
            border-radius: 330px 0px 0px 0px; /* -50 */
        }

        .tentang {
            max-width: 790px;
            width: 55%; /* -5 */
            margin-left: 220px; /* -60 */
        }

        .tentang h1 {
            font-size: 36px; /* -2 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 18px; /* -1 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 18px; /* -1 */
            margin-left: 60px;
            margin-top: 30px;
        }

        #helm {
            top: 30px; 
            right: 0;
            height: 220px; /* -20 */

        }

        #sepatu {
            height: 200px; /* -20 */
            bottom: -80px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 110px; /* -10 */
        }
    }

    @media (max-width:991px) {
        .tentang-kami .container {
            border-radius: 250px 0px 0px 0px; /* -80 */
        }

        .tentang {
            max-width: 790px;
            width: 55%; /* -10 */
            margin-left: 150px; /* -70 */
        }

        .tentang h1 {
            font-size: 28px; /* -8 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 15px; /* -3 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 15px; /* -3 */
            margin-left: 60px;
            margin-top: 30px;
        }

        #helm {
            top: 30px; 
            right: 0;
            height: 180px; /* -50 */

        }

        #sepatu {
            height: 150px; /* -50 */
            bottom: -50px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 80px; /* -30 */
        }
    }

    @media (max-width:767px) {
        .tentang-kami .container {
            border-radius: 200px 0px 0px 0px; /* -50 */
        }

        .tentang {
            max-width: 790px;
            width: 60%;
            margin-left: 80px; /* -40 */
        }

        .tentang h1 {
            font-size: 26px; /* -2 */
            margin-top: 100px;
        }

        .tentang h2 {
            font-size: 13px; /* -2 */
            margin-top: -10px;
        }

        .tentang p {
            font-size: 13px; /* -2 */
            margin-left: 60px;
            margin-top: 30px;
        }

        #helm {
            top: 30px; 
            right: 0;
            height: 150px; /* -30 */

        }

        #sepatu {
            height: 130px; /* -20 */
            bottom: -35px;
            left: -40px;
        }

        #bulatan {
            bottom: 0;
            right: 0;
            height: 80px; /* -30 */
        }
    }
</style>

<section class="tentang-kami" data-aos="fade-up">
    <div class="container">
        <div class="image-wrapper">
            <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
        </div>
        <div class="tentang">
            <h1 data-aos="fade-up" data-aos-delay="100"><b>TENTANG KAMI </b></h1>
            <h2 data-aos="fade-up" data-aos-delay="200"><b>Wash And Care To Make You Feel Confident</b></h2>
            <p data-aos="fade-up" data-aos-delay="300">Si Launsh merupakan usaha yang bergerak dibidang jasa laundry cuci sepatu dan Helm berkualitas yang berasal dari Kota Malang dan Juga memiliki Beberapa Cabang Di kota kota besar di Jawa Timur.
                Berbagai layanan seperti pencucian sepatu dan helm kami tawarkan untuk mengembalikan kejayaan sepatu dan helm anda. Sesuai dengan motto kami “Wash And Care To Make You Feel Confident“. Sampai saat ini kami telah menyelesaikan 30317 pasang sepatu dan helm yang akan terus bertambah. Tunggu apalagi? Yuk Antar Sepatu dan Helm anda ke toko kami, dan dapatkan pelayanan yang memuaskan</p>
        </div>
        <div class="tentang">
            <div class="col">

            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>