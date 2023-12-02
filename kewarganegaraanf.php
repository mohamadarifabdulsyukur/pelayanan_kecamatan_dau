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
                    <a class="nav-link active:hover" href="login.php">Ajukan Kewarganegaraan</a>
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
                            <h1 class="mt-4">Kewarganegaraan</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active ">Persyaratan Pengajuan Surat Keterangan</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Perubahan Status WNA Menjadi WNI di Wilayah NKRI</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section6">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Anak Berkewarganegaraan Ganda (ABG)</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section7">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Perubahan Status WNI Menjadi WNA</div>
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
                                    <h1>Persyaratan Pencatatan Perubahan Status Kewarganegaraan WNA menjadi WNI di Wilayah NKRI</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01)</p>
                                    <p>2. Fotocopy Petikan Keputusan Presiden tentang pewarganegaraan atau Petikan Keputusan Menteri yang menyelenggarakan urusan pemerintahan di bidang hukum tentang perubahan status kewarganegaraan</p>
                                    <p>3. Berita Acara pengucapan sumpah atau pernyataan janji setia</p>
                                    <p>4. Kutipan Akta Pencatatan Sipil Asli</p>
                                    <p>5. Kartu Keluarga (KK) Asli</p>
                                    <p>6. KTP-el Asli</p>
                                    <p>7. Fotocopy Dokumen Perjalanan</p>
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
                                    <h1>Persyaratan Pencatatan Anak yang lahir dari perkawinan campuran atau Anak Berkewarganegaraan Ganda (ABG)</h1>
                                    <br>
                                    <h4>Pencatatan ABG yang telah memiliki Sertifikat bukti pendaftaran ABG</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) atau (F-.202)</p>
                                    <p>2. Fotocopy Sertifikat Bukti Pendaftaran ABG dari kantor imigrasi atau perwakilan</p>
                                    <p>3. Republik Indonesia</p>
                                    <p>4. Kutipan Akta Kelahiarn Asli</p>
                                    <br>
                                    <h4>Pencatatan ABG yang memilih menjadi WNI</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) atau (F-2.02)</p>
                                    <p>2. Fotocopy Keputusan Menteri yang menyelenggarakan urusan pemerintahan di bidang hukum tentang perubahan staatus kewarganegaraan</p>
                                    <p>3. Kutipan Akta Pencatatan Sipil Asli</p>
                                    <p>4. Fotocopy Kartu Keluarga (KK) bagi penduduk WNI</p>
                                    <br>
                                    <h4>Pencatatan ABG yang memilih menjadi WNA</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) atau (F-2.02)</p>
                                    <p>2. Fotocopy Surat bukti penyerahan dokumen kewarganegaraan dan keimigrasian</p>
                                    <p>3. Kutipan Akta Pencatatan Sipil Asli</p>
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
                                    <h1>Persyaratan Pencatatan Perubahan Status Kewarganegaraan WNI menjadi WNA</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01)</p>
                                    <p>2. Fotocopy Petikan Keputusan Menteri yang menyelenggarakan urusan pemerintahan di bidang hukum tentang perubahan status kewarganegaraan</p>
                                    <p>3. Salah Satu Kutipan Akta Pencatatan Sipil Asli</p>
                                    <p>4. Fotocopy Dokumen Perjalanan Republik Indonesia</p>
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