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
</style>

<section class="section-1">
    <div class="container">
        <div class="image-container">
            <div class="image-wrapper">
                <img src="/img/hero-helm.png" alt="" id="helm">
                <img src="/img/hero-sepatu.png" alt="" id="sepatu">
                <img src="/img/hero-bulat.png" alt="" id="bulatan">
            </div>
            <div class="row">
                <div class="col">
                    <h1 style="margin: 10px 0px 0px 300px; font-size:40px;"><b>PROFIL</b></h1>
                </div>
            </div>
            <div class="profilku">
                <div class="row">
                    <div class="col-2">
                        <img src="/img/<?php echo $foto; ?>" alt="" style="width: 120px; border-radius:50%;">
                    </div>
                    <div class="col-10" style="margin: 10px 10px 0px 0px;">
                        <div class="row">
                            <div class="col-9" style="padding-left: 20px; margin: 15px 0px;">
                                <h2 style="margin-bottom: -5px;"><b>
                                        <?php echo $nama; ?>
                                    </b></h2>
                                <h3>
                                    <?php echo $jk; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="padding: 26px; height:415px;">
                    <div class="col-3"
                        style="background: #F3F3F3; margin-right:20px; border-radius: 0px 40px 40px 40px;">
                        <div class="row" style="margin-top: 20px;">
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
                        <div class="row" style="margin-top: 100px;">
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
                    <div class="col" style="background: #F3F3F3; border-radius: 40px 0px 40px 40px;">
                        <form action="" style="margin: 20px;">
                            <h6 style="margin-bottom: -3px;">Nomor Customer</h6>
                            <?php echo '<h2>' . $id_pengguna . '</h2>';
                            ?>

                            <!-- Form tampilan data akun -->
                            <div class="form-row">
                                <div class="form-column">
                                    <label for="email">Alamat Surel</label>
                                </div>
                                <div class="form-column">
                                    <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-column">
                                    <label for="password">Kata Sandi</label>
                                </div>
                                <div class="form-column">
                                    <input type="password" id="password" name="password"
                                        value="<?php echo $password; ?>" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-column">
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="form-column">
                                    <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>"
                                        disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-column">
                                    <label for="email">Nomor Telepon</label>
                                </div>
                                <div class="form-column">
                                    <input type="phone" id="phone" name="phone" value="<?php echo $no_hp; ?>" disabled>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-column">
                                    <label for="ttl">Tanggal Lahir</label>
                                </div>
                                <div class="form-column">
                                    <input type="date" id="ttl" name="ttl" value="<?php echo $tgl_lahir; ?>" disabled>
                                </div>
                            </div>

                            <!-- <form>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" value="Nama Akun" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" value="email@example.com" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" rows="3" readonly>Alamat Akun</textarea>
                                </div>
                                <button type="button" class="btn btn-primary" id="editBtn">Edit</button>
                            </form> -->

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
        // Loop melalui setiap elemen input dan textarea
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