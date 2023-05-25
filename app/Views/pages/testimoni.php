<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .section-1 .container {
        background: linear-gradient(136.6deg, #0FC598 21.76%, #BFDB38 146.07%),
            url(/img/tentang-bg1.png);
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center;
        height: 630px;
        box-shadow: -18px -24px 38px rgba(0, 0, 0, 0.25);
        border-radius: 400px 0px 0px 0px;
        color: white;
    }

</style>

<section class="section-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2> Berikut Testimoninya</h2>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>