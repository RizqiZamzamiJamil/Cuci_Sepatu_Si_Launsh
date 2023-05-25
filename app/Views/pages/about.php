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
    }

    .image-container {
        position: relative;
        width: 1320px;
        height: 630px;
        overflow: hidden;
    }

    .image-container img {
        position: absolute;
        top: 0;
        left: 0;
    }

    .image-container .row {
        position: relative;
        width: 790px;
        color: white;
        margin-left: 300px;
    }

    .image-container .row h1 {
        margin-top: 100px;
    }

    .image-container .row h3 {
        font-size: 20px;
        margin-top: -10px;
    }

    .image-container .row h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 52px;
        font-weight: 700px;
        width: 614px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 10px;
    }

    .image-container .row p {
        margin-left: 60px;
        margin-top: 30px;
        font-size: 20px;
        font-weight: 400;
    }

    .image-wrapper {
        overflow: hidden;
    }

    #backg {
        width: 1320px;
        margin-top: -54px;
        margin-left: -12px;
        height: 707px;
    }

    #backg2 {
        width: 1320px;
        margin-left: -12px;
        margin-top: -7px;
        height: 650px;
    }

    #helm {
        position: absolute;
        width: 190px;
        height: 245px;
        left: 1118px;
        margin-top: 30px;
    }

    #sepatu {
        width: 350px;
        margin-left: -50px;
        margin-top: 470px;
    }

    #bulatan {
        margin-top: 500px;
        width: 120px;
        left: 1187px;
    }

    footer {

    }
</style>

<section class="tentang-kami">
    <div class="container">
        <div class="image-container">
            <div class="image-wrapper">
                <img src="/img/hero-helm.png" alt="" id="helm">
                <img src="/img/hero-sepatu.png" alt="" id="sepatu">
                <img src="/img/hero-bulat.png" alt="" id="bulatan">
            </div>

            <div class="row">
                <div class="col">
                    <h1><b>TENTANG KAMI </b></h1>
                    <h3><b>Wash And Care To Make You Feel Confident</b></h3>
                    <p>Si Launsh merupakan usaha yang bergerak dibidang jasa laundry cuci sepatu dan Helm berkualitas yang berasal dari Kota Malang dan Juga memiliki Beberapa Cabang Di kota kota besar di Jawa Timur.
                        Berbagai layanan seperti pencucian sepatu dan helm kami tawarkan untuk mengembalikan kejayaan sepatu dan helm anda. Sesuai dengan motto kami “Wash And Care To Make You Feel Confident“. Sampai saat ini kami telah menyelesaikan 30317 pasang sepatu dan helm yang akan terus bertambah. Tunggu apalagi? Yuk Antar Sepatu dan Helm anda ke toko kami, dan dapatkan pelayanan yang memuaskan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>