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
                    <a class="nav-link active:hover" href="login.php">Ajukan Surat Keterangan</a>
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
                            <h1 class="mt-4">Surat Keterangan</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active ">Persyaratan Pengajuan Surat Keterangan</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Laporan Perkawinan</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section6">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Akta Pengesahan Anak</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section7">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Akta Pengakuan Anak</div>
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
                                    <h1>Persyaratan Pengajuan Surat Keterangan Laporan Perkawinan</h1>
                                    <br>
                                    <p>1. Fotocopy Akta Kelahiran (WNI) yang sudah dilegalisir</p>
                                    <p>2. Fotocopy KK dan KTP (status "belum kawin")</p>
                                    <p>3. Fotocopy Buku Paspor (WNA) dan Dokumen lain yang dimiliki</p>
                                    <p>4. Surat Keterangan Laporan KBRI di Negara atau dari Krdutaan Besar Negara Setempat di Indonesia jika menikah diluar negeri</p>
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
                                    <h1>Persyaratan Pengajuan Akta Pengesahan Anak</h1>
                                    <br>
                                    <h4>Bagi Non-Muslim</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) dengan mencantumkan nama dan identitas 2 (dua) orang saksi</p>
                                    <p>2. Fotocopy Akta Perkawinan Orangtua</p>
                                    <p>3. Fotocopy Kartu Keluarga (KK) dan KTP Orangtua</p>
                                    <p>4. Akta Kelahiarn Asli</p>
                                    <br>
                                    <h4>Bagi Muslim</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) dengan mencantumkan nama dan identitas 2 (dua) orang saksi</p>
                                    <p>2. Fotocopy Akta Perkawinan Orangtua</p>
                                    <p>3. Fotocopy Kartu Keluarga (KK) dan KTP Orangtua</p>
                                    <p>4. Akta Kelahiarn Asli</p>
                                    <p>5. Fotokopy Surat Nikah Orangtua dilegalisir</p>
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
                                    <h1>Persyaratan Pengajuan Akta Pengakuan Anak</h1>
                                    <br>
                                    <h4>Pencatatan Pengakuan Anak di Wilayah NKRI</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) dengan mencantumkan nama dan identitas 2 (dua) orang saksi</p>
                                    <p>2. Asli surat pernyataan pengakuan anak dari ayah biologis yang disetujui oleh ibu kandung atau fotokopy penetapan pengadilan mengenai pengakuan anak jika ibukandung OA</p>
                                    <p>3. Fotokopy surat keterangan telah terjadinya perkawinan dari pemuka agama atau penghayat kepercayaan terhadap Tuhan YME</p>
                                    <p>4. Kutipan Akta Kelahiran Anak</p>
                                    <p>5. Fotokopy Kartu Keluaarga (KK) Ayah atau Ibu</p>
                                    <p>6. Fotokopy Dokumen Perjalanan bagi ibu kandung OA</p>
                                    <br>
                                    <h4>Pencatatan Pengakuan Anak yang dilahirkan di luar perkawinan yang sah menurut hukum atau kepercayaan terhadap Tuhan YME di wilayah NKRI</h4>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) dengan mencantumkan nama dan identitas 2 (dua) orang saksi</p>
                                    <p>2. Fotocopy Salinan penetapan pengadilan</p>
                                    <p>3. Kutipan Akta Kelahiran</p>
                                    <p>4. Fotokopy Kartu Keluarga (KK)</p>
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