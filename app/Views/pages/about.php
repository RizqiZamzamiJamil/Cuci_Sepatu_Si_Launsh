<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    .tentang-kami .container {
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

    .image-container {
        position: absolute;
        width: 1320px;
        height: 630px;

    }

    .image-container img {
        position: absolute;
        height: auto;
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        top: 0;
        left: 0;
    }

    .row {
        position: relative;
        width: 790px;
        color: white;
        margin-left: 300px;
    }

    .row h1 {
        margin-top: 100px;
    }

    .row h3 {
        font-size: 20px;
        margin-top: -10px;
    }

    .row h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 52px;
        font-weight: 700px;
        width: 614px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
    }

    .row p {
        margin-left: 60px;
        margin-top: 30px;
        font-size: 20px;
        font-weight: 400;
    }

    #helm {
        width: 190px;
        /*         height: 280px; */
        margin-top: 40px;
        margin-left: 1120px;
    }

    #sepatu {
        width: 350px;
        margin-left: -50px;
        margin-top: 470px;
    }

    #bulatan {
        width: 150px;
        margin-top: 480px;
        margin-left: 1158px;
    }
</style>

<section class="tentang-kami" data-aos="fade-up">
    <div class="container">
        <div class="image-container">
            <img data-aos="fade-left" src="/img/hero-helm.png" alt="" id="helm">
            <img data-aos="fade-right" data-aos-delay="100" src="/img/hero-sepatu.png" alt="" id="sepatu">
            <img data-aos="fade-up" data-aos-delay="200" src="/img/hero-bulat.png" alt="" id="bulatan">

        </div>
        <div class="row">
            <div class="col">
                <h1 data-aos="fade-up" data-aos-delay="100"><b>TENTANG KAMI </b></h1>
                <h3 data-aos="fade-up" data-aos-delay="200"><b>Wash And Care To Make You Feel Confident</b></h3>
                <p data-aos="fade-up" data-aos-delay="300">Si Launsh merupakan usaha yang bergerak dibidang jasa laundry cuci sepatu dan Helm berkualitas yang berasal dari Kota Malang dan Juga memiliki Beberapa Cabang Di kota kota besar di Jawa Timur.
                    Berbagai layanan seperti pencucian sepatu dan helm kami tawarkan untuk mengembalikan kejayaan sepatu dan helm anda. Sesuai dengan motto kami “Wash And Care To Make You Feel Confident“. Sampai saat ini kami telah menyelesaikan 30317 pasang sepatu dan helm yang akan terus bertambah. Tunggu apalagi? Yuk Antar Sepatu dan Helm anda ke toko kami, dan dapatkan pelayanan yang memuaskan</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>