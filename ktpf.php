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
                    <a class="nav-link active:hover" href="login.php">Ajukan KTP-el</a>
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
                            <h1 class="mt-4">KTP-el</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active ">Persyaratan Pengajuan KTP-el</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Kegunaan Kartu Tanda Penduduk Elektronik (KTP-el)</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section6">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Perubahan dan Kehilangan KTP-el</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section7">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">KTP-el Baru</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section8">Lihat</a>
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
                                    <h1>Kegunaan Kartu Tanda Penduduk Elektronik (KTP-el)</h1>
                                    <br>
                                    <p>1. Sebagai Identitas Diri</p>
                                    <p>2. Berlaku Nasional, sehingga tidak perlu lagi membuat KTP lokal untuk pengurusan izin pembuatan akta tanah dan sebagainya</p>
                                    <p>3. Mencegah KTP ganda dan pemalsuan KTP</p>
                                    <p>4. Dapat dipergunakan sebagai ID Card untuk kepengurusan Bank, Asuransi, atau sebagai kartu pemilih pada pemilu legislatif / presiden / pilkada</p>
                                    <p>5. Terciptanya keakuratan data penduduk untuk mendukung program pembangunan</p>
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
                                    <h1>Persyaratan Pengajuan KTP-el Perubahan dan Kehilangan</h1>
                                    <br>
                                    <p>1. Mengisi Formulir (F-1.02)</p>
                                    <p>2. Fotocopy Kartu Keluarga (KK) terbaru dan benar</p>
                                    <p>3. Melaksanakan perekaman biometrik KTP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section8" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                <h1>Persyaratan Pengajuan KTP-el Baru</h1>
                                    <br>
                                    <p>1. KTP-el Lama (untuk perubahan)</p>
                                    <p>2. Fotocopy Kartu Keluarga (KK) terbaru dan benar</p>
                                    <p>3. Surat keterangan kehilangan dari kepolisian (untuk kehilangan)</p>
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