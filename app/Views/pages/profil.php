<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
$username = $_SESSION["username"];
$id_user = $_SESSION["id_user"];
$id_pengguna = $_SESSION["id_pengguna"];
$level = $_SESSION["level"];
?>

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
        overflow: hidden;
    }

    .image-container {
        position: relative;
        width: 1320px;
        height: 630px;
    }

    .image-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
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

    #hubungi {
        width: 400px;
        margin-left: 100px;
    }

    .profilku {
        margin: 2px 200px 0px;
        background-color: aliceblue;
        height: 520px;
        border-radius: 50px;
        color: black;
        box-shadow: 0px 20px 11px rgba(0, 0, 0, 0.25);
    }

    .col-10 {
        background-image: url(/img/profil-bg.png);
        border-radius: 0px 50px 0px 75px;
        width: 760px;
    }

    .section-1 button {
        display: inline-block;
        padding: 5px 15px;
        margin: 5px;
        background: #0FC598;
        border-radius: 10px;
        border: 10px black;
        cursor: pointer;
        color: white;
    }

    .form-row {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .form-column {
        flex-basis: 100%;
        display: flex;
        align-items: center;
    }

    label {
        margin-right: 10px;
        flex-shrink: 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2) !important;
        border-style: none;
        width: 250px;
    }

    input {
        flex-grow: 1;
        background: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2) !important;
        border-style: none;
    }

    .profile-upload {
        position: relative;
        display: inline-block;
    }

    .upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
    }

    .upload-icon {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #f1f1f1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .upload-icon i {
        font-size: 50px;
        color: #777;
    }

    .upload-text {
        margin-top: 10px;
        font-size: 14px;
        color: #777;
    }

    #image-preview {
        margin-top: 10px;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: #f1f1f1;
        display: none;
        background-size: cover;
        background-position: center;
    }
</style>

<section class="section-1" data-aos="fade-up">
    <div class="container">
        <div class="image-container">
            <div class="image-wrapper">
                <img data-aos="fade-left" data-aos-delay="100" src="/img/hero-helm.png" alt="" id="helm">
                <img data-aos="fade-right" data-aos-delay="200" src="/img/hero-sepatu.png" alt="" id="sepatu">
                <img data-aos="fade-up" data-aos-delay="300" src="/img/hero-bulat.png" alt="" id="bulatan">
            </div>

            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <h1 style="margin: 10px 0px 0px 300px; font-size:40px;"><b>PROFIL</b></h1>
                </div>
            </div>
            <div class="profilku" data-aos="fade-up" data-aos-delay="300">
                <div class="row">
                    <!-- Foto Profil -->
                    <div class="col-2" data-aos="zoom-out" data-aos-delay="400">
                        <div class="fp d-flex align-items-center justify-content-center" style="position: absolute;  width: 120px; height:120px; border-radius:50%; border:1px solid black; background:white;">
                            <i class="fas fa-user" style="font-size: 60px;"></i>
                        </div>
                        <img src="/img/<?php echo $foto; ?>" alt="" style="width: 120px; border-radius:50%;">

                        <!-- <div class="profile-upload d-flex align-items-center justify-content-center">
                            <input type="file" id="upload-input" accept="/img/" onchange="previewImage(event)" />
                            <label for="upload-input" class="upload-label">
                                <div class="upload-icon">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <span class="upload-text">Upload Foto</span>
                            </label>
                            <div id="image-preview"></div>
                        </div> -->


                    </div>

                    <!-- Nama ft JK -->
                    <div class="col-10" style="margin: 10px 10px 0px 0px; height:100px;" data-aos="zoom-out" data-aos-delay="500">
                        <div class="namajk d-flex align-items-center" style="padding-left: 20px; margin: 0; height:100%;">
                            <div class="my-auto">
                                <h2 style="margin-bottom: -5px;">
                                    <b><?php echo $nama; ?></b>
                                </h2>
                                <h3>
                                    <?php echo $jk; ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row" style="padding: 26px; height:415px;">
                    <!-- Menu Kiri -->
                    <div class="col-3"
                        style="background: #F3F3F3; margin-right:20px; border-radius: 0px 40px 40px 40px;" data-aos="zoom-out" data-aos-delay="600">
                        <div class="row" style="margin-top: 20px;" data-aos="fade-up" data-aos-delay="700">
                            <div class="btn-group">
                                <button style="background: none; border:none; color:black;"
                                    class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img style="width: 20px; margin-right:5px;" src="/img/profil-proses.png" alt="">
                                    Proses
                                </button>
                                <ul style="background: none; border:none;" class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Menunggu</a></li>
                                    <li><a class="dropdown-item" href="#">Proses Cuci</a></li>
                                    <li><a class="dropdown-item" href="#">Siap Di Ambil</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 100px;" data-aos="fade-up" data-aos-delay="800">
                            <div class="btn-group">
                                <button style="background: none; border:none; color:black;"
                                    class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img style="width: 20px; margin-right:5px;" src="/img/profil-akun.png" alt=""> Akun
                                </button>
                                <ul style="background: none; border:none;" class="dropdown-menu">
                                    <li><a id="ubah" class="dropdown-item" href="#">Ubah Akun</a></li>
                                    <!-- <form id="delete-form" action="/auth/<?= $_SESSION['username'] ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <li><a onclick="return confirm('Yakin ingin menghapus akun?')"
                                                class="dropdown-item" href="#">Hapus Akun</a></li>
                                    </form> -->
                                    <li><a onclick="hapus()" class="dropdown-item" href="#">Hapus Akun</a></li>
                                    <li><a onclick="keluar()" class="dropdown-item" href="#">Keluar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Form Kanan -->
                    <div class="col" style="background: #F3F3F3; border-radius: 40px 0px 40px 40px;" data-aos="zoom-out" data-aos-delay="600">
                        <form action="" style="margin: 20px;">
                            <h6 style="margin-bottom: -3px;" data-aos="zoom-out" data-aos-delay="900">Nomor Customer</h6>
                            <?php echo '<h2 data-aos="zoom-out data-aos-delay="1000">' . $id_pengguna . '</h2>';
                            ?>

                            <!-- Form tampilan data akun -->
                            <div class="form-row">
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1100">
                                    <label for="email">Alamat Surel</label>
                                </div>
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1200">
                                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1300">
                                    <label for="password">Kata Sandi</label>
                                </div>
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1400">
                                    <input type="password" id="password" name="password"
                                        value="<?php echo $password; ?>" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1500">
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1600">
                                    <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>"
                                        disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1700">
                                    <label for="email">Nomor Telepon</label>
                                </div>
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1800">
                                    <input type="phone" id="phone" name="phone" value="<?php echo $no_hp; ?>" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="1900">
                                    <label for="ttl">Tanggal Lahir</label>
                                </div>
                                <div class="form-column" data-aos="zoom-out" data-aos-delay="2000">
                                    <input type="date" id="ttl" name="ttl" value="<?php echo $tgl_lahir; ?>" disabled>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

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
    <div id="confirmation-delete" class="modal">
        <div class="modal-content">
            <h2>Yakin ingin menghapus akun?</h2>
            <div class="button-container">
                <button class="cancel" onclick="no()">Enggak</button>
                <button class="confirm" onclick="yes()">Iya</button>
            </div>
        </div>
    </div>
</div>

<script>
    // mengubah input disabled menjadi enabled
    const inputFields = document.querySelectorAll('input[disabled]');
    document.getElementById("ubah").addEventListener("click", function () {
        inputFields.forEach(function (field) {
            field.removeAttribute("disabled");
        });
    });


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

    // Jquery dropdown
/*     $(document).ready(function() {
        $('.dropdown-toggle').click(function() {
            $('.dropdown-menu').slideDown(300); // Menggunakan slideDown() untuk membuat dropdown muncul perlahan dengan durasi 300ms
        });

        $(document).click(function(event) {
            var target = $(event.target);
            if (!target.closest('.btn-group').length) {
                $('.dropdown-menu').slideUp(300); // Menggunakan slideUp() untuk menyembunyikan dropdown perlahan ketika klik di luar dropdown
            }
        });
    }); */
    
    /* Edit Foto */
    /*     function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById("image-preview");
                preview.style.backgroundImage = "url(" + reader.result + ")";
                preview.style.display = "block";
            };
            reader.readAsDataURL(event.target.files[0]);
        } */

    // document.getElementById('delete-form').addEventListener('submit', function(e){
    //     e.preventDefault();

    //     var xhr = new XMLHttpRequest();
    //     xhr.open('POST', this.get)
    // })

    function hapus() {
        document.getElementById("confirmation-delete").style.display = "block";
    }

    function no() {
        document.getElementById("confirmation-delete").style.display = "none";
    }

    function yes() {
        window.location.href = "<?= site_url('auth/hapusAkun') ?>";
    }
</script>
<?= $this->endSection(); ?>