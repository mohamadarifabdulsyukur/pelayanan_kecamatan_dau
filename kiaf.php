<?php
include "koneksi.php";
include "ceklogin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pelayanan Publik Kecamatan Dau</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="bg-secondary">

    <div class="p-5 bg-primary text-white text-center" style="background-image: url('assets/img/kantordau.jpg'); background-size: cover; background-position: center;">
        <br>
        <br>
        <br>
        <h1>Pelayanan Publik Kantor Kecamatan Dau Kabupaten Malang</h1>
        <p>Jl. Raya Sengkaling No.200, Sengkaling, Mulyoagung, Kec. Dau, Kabupaten Malang, Jawa Timur 65151</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active:hover" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active:hover" href="login.php">Ajukan KIA</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="col-md">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <h1 class="mt-4">KIA (Kartu Identitas Anak)</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active ">Persyaratan Pengajuan KIA</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Manfaat KIA</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section6">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Syarat Pengurusan KIA</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section7">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section6" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Manfaat KIA</h1>
                                    <br>
                                    <p>1. Kelengkapan dokumen pelayanan pendidikan dan lain-lain</p>
                                    <p>2. Sebagai tanda pengenal atau bukti diri yang sah</p>
                                    <p>3. Sebagai salah satu syarat pendaftaran sekolah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section7" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Pengajuan Pengurusan KIA</h1>
                                    <br>
                                    <h4>Usia 0-17 tahun kurang dari satu hari dan belum menikah / belum pernah menikah dan bertempat tinggal di Kabupaten Malang</h4>
                                    <p>1. Mengisi Formulir Penerbitan KIA</p>
                                    <p>2. Fotocopy Akta Kelahiran (1 lembar)</p>
                                    <p>3. Fotocopy Kartu Keluarga (KK) orangtua atau wali ysang baru dan benar (1 lembar)</p>
                                    <p>4. Fotocopy KTP-el kedua orangtua (status"kawin") masing-masing 1 lembar</p>
                                    <p>5. Usia 5 tahun keatas melampirkan pas foto</p>
                                    <p>6. Usia 5 tahun kebawah tidak melampirkan pas foto</p>
                                    <p>7. Untuk pengajuan KIA yang hilang melampirkan surat kehilangan dari kepolisian</p>
                                    <p>8. Bagi anak WNI yang baru datang dari Luar Negeri melampirkan surat keterangan datang dari Luar Negeri yang diterbitkan oleh dinas</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Kantor Kecamatan Dau 2023 - <?php echo date("Y"); ?> </div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>