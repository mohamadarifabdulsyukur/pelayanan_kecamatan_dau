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
                    <a class="nav-link active:hover" href="login.php">Ajukan Kartu Keluarga</a>
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
                            <h1 class="mt-4">KK (Kartu Keluarga)</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active ">Persyaratan Pengajuan Kartu Keluarga</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Pengajuan Baru</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section6">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Perubahan Biodata KK yang Salah atau Dirubah</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section7">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Penerbitan KK Hilang atau Rusak</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section8">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Pengajuan Baru Pindah Datang</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section9">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Perubahan Pengurangan Anggota</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section10">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Perubahan Penambahan Anggota</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section11">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Perpindahan WNI Keluar antar Kab/Kota (SKPWNI)</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section12">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Perpindahan WNI Keluar Wilayah NKRI (SKPLN)</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section13">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Perpindahan WNI Datang dari Luar Negeri</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section14">Lihat</a>
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
                                    <h1>Persyaratan Pengajuan KK (Kartu Keluarga) Baru</h1>
                                    <br>
                                    <p>1. Mengisi Formulir KK (F-1.01)</p>
                                    <p>2. KK Asli yang akan ditumpangi</p>
                                    <p>3. Surat Pengantar asli dari RT RW atau yang disebut dengan nama lain</p>
                                    <p>4. Fotocopy Akta Kelahiran atau Pernyataan Kelahiran</p>
                                    <p>5. Fotocopy Akta Kawin, Cerai atau Keterangan Nikah dari Desa/KUA</p>
                                    <p>6. Fotocopy Akta Kawin Orangtua atau Keterangan Nikah dari Desa/KUA</p>
                                    <p>7. Pernyataan Luar Nikah bagi yang tidak mempunyai akta kawin</p>
                                    <p>8. Akta Kematian atau Surat Kematian</p>
                                    <p>9. Fotocopy Ijazah atau Keterangan tidak pernah sekolah dari desa</p>
                                    <p>10. Keterangan tidak bisa datang karena sakit mengetahui puskesmas setempat karena sakit (bagi yang sakit)</p>
                                    <p>11. Pengajuan KTP</p>
                                    <P>12. Cek Biometrik ke bagian perekaman biometrik KTP-el</P>
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
                                    <h1>Perubahan Biodata KK yang Salah atau Dirubah</h1>
                                    <br>
                                    <p>1. Mengisi Formuli KK (F-1.01)</p>
                                    <p>2. Surat Keterangan / Bukti perubahan peristiwa kependudukan dan peristiwa penting</p>
                                    <br>
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
                                    <h1>Penerbitan KK (Kartu Keluarga) Hilang atau Rusak</h1>
                                    <br>
                                    <p>1. Mengisi Formulir KK (F-1.01)</p>
                                    <p>2. Surat Keterangan Kehilangan dari Kepolisian atas Kehilangan KK</p>
                                    <p>3. KK (Kartu Keluarga) yang Rusak</p>
                                    <p>4. Fotocopy KK yang hilang jika ada</p>
                                    <p>5. Fotocopy Surat Nikah</p>
                                    <p>6. Fotocopy KTP-el</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section9" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Pengajuan Baru Pindah Datang</h1>
                                    <br>
                                    <p>1. Mengisi Formulir KK (F-1.01)</p>
                                    <p>2. Fotocopy Surat Nikah / Akta Nikah / Kutipan Akta Perkawinan</p>
                                    <p>3. Fotocopy Surat Kelahiran / Akta Kelahiran bagi keluarga yang mempunyai anak</p>
                                    <p>4. Surat Pindah dari tempat asal (Dalam NKRI Konsolidasi)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section10" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Perubahan Pengurangan Anggota</h1>
                                    <br>
                                    <p>1. Mengisi Formulir KK (F-1.01)</p>
                                    <p>2. KK (SIAK) Asli</p>
                                    <p>3. Fotocopy Akta Kematian</p>
                                    <p>4. Fotocopy Akta Cerai</p>
                                    <p>5. Surat Pindah Tempat bagi yang pindah (dalam NKRI)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section11" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Perubahan Penambahan Anggota</h1>
                                    <br>
                                    <p>1. Mengisi Formulir KK (F-1.01)</p>
                                    <p>2. KK (SIAK) Asli</p>
                                    <p>3. KK yang ditumpangi asli bila pecah KK</p>
                                    <p>4. Akta Kelahiran / Surat Kelahiran dari bidan dan desa bagi keluarga yang mempunyai anak</p>
                                    <p>5. Akta Nikah / Surat Nikah / Kutipan Akta Perkawinan</p>
                                    <p>6. Surat Pindah Datang dari tempat asal (dalam NKRI)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section12" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Perpindahan WNI Keluar antar Kab/Kota (SKPWNI)</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Perpindahan Penduduk (F-1.03)</p>
                                    <p>2. Fotocopy KK (Kartu Keluarga)</p>
                                    <p>3. Fotocopy KTP</p>
                                    <p>4. Lampiran fotocopy dokumen pendukung jika ada perubahan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section13" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Perpindahan WNI Keluar Wilayah NKRI (SKPLN)</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Perpindahan Penduduk (F-1.03)</p>
                                    <p>2. Fotocopy KK (Kartu Keluarga)</p>
                                    <p>3. Fotocopy KTP</p>
                                    <p>Catatan : WNI yang telah pindah dan berstatus menetap di luar negeri wajib melaporkan kepada perwakilan Republik Indonesia paling lambat 30 hari sejak kedatangannya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section14" class="container">
            <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div>
                                    <h1>Persyaratan Perpindahan WNI Datang dari Luar Negeri</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Perpindahan Penduduk (F-1.03)</p>
                                    <p>2. Fotocopy Dokumen Perjalanan Republik Indonesia</p>
                                    <p>3. SKPLN dari Dinas atau SKP dari Perwakilan Republik Indonesia</p>
                                    <p>Catatan : WNI yang datang dari luar negeri wajib melaporkan kedatangannya Kepada Instansi Pelaksana  paling lambat 14 hari sejak tanggal kedatangan</p>
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