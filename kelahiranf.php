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
                    <a class="nav-link active:hover" href="login.php">Ajukan Akta Kelahiran</a>
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
                            <h1 class="mt-4">Akta Kelahiran</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active ">Persyaratan Pengajuan Akta Kelahiran</li>
                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Manfaat Akta Kelahiran</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section6">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-dark text-white mb-4">
                                        <div class="card-body">Persyaratan Pengajuan Akta Kelahiran WNI</div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#section7">Lihat</a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">Persyaratan Pengajuan Akta Kelahiran WNA</div>
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
                                    <h1>Manfaat Akta Kelahiran</h1>
                                    <br>
                                    <p>1. Sebagai wujud pengakuan negara mengenai status individu, status perdata, dan status kewarganegaraan seseorang</p>
                                    <p>2. Sebagai dokumen atau bukti sah identitas seseorang</p>
                                    <p>3. Sebagai bahan rujukan penetapan identitas dalam dokumen lain misalnya ijazah</p>
                                    <p>4. Persyaratan masuk sekolah</p>
                                    <p>5. Melamar pekerjaan</p>
                                    <p>6. Pembuatan KTP, KK, dan NIK</p>
                                    <p>7. Pembuatan Paspor</p>
                                    <p>8. Pengurusan tunjangan keluarga</p>
                                    <p>9. Pengurusan warisan</p>
                                    <p>10. Pengurusan beasiswa</p>
                                    <p>11. Pengurusan pensuin bagi pegawai</p>
                                    <p>12. Pengurusan pencatatan perkawinan</p>
                                    <p>13. Pengurusan kematian</p>
                                    <P>14. Pengurusan perceraian</P>
                                    <p>15. Pengurusan pengakuan anak</p>
                                    <p>16. Pengurusan pengangkatan anak / adopsi</p>
                                    <p>17. Pengurusan Pengesahan anak</p>
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
                                    <h1>Persyaratan Pengajuan Akta Kelahiran WNI</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) dan mencantumkan identitas 2 orang saksi</p>
                                    <p>2. Surat keterangan kelahiran dari rumah sakit / puskesmas / fasilitas kesehatan / dokter / bidan</p>
                                    <p>3. Fotocopy buku nikah / Kutipan akta perkawinan atau bukti lainnya yang sah</p>
                                    <p>4. Fotocopy KK dimana penduduk terdaftar atau akan didaftarkan sebagai anggota keluarga</p>
                                    <p>5. Fotocopy KTP-el kedua orangtua</p>
                                    <p>6. Penduduk dapat membuat SPTJM kebenaran data kelahiran dengan mengisi F-2.03 jika tidak memenuhi persyaratan sebagaimana nomor 2</p>
                                    <p>7. Penduduk dapat membuat SPTJM kebenaran sebagai pasangan suami istri dengan mengisi F-2.04 jika tidak memenuhi persyaratan sebagaimana nomor 3</p>
                                    <p>8. Berita Acara dari Kepolisian (bagi anak yang tidak diketahui asal usul/keberadaan orangtuannya)</p>
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
                                    <h1>Persyaratan Pengajuan Akta Kelahiran WNA</h1>
                                    <br>
                                    <p>1. Mengisi Formulir Pelaporan (F-2.01) dan mencantumkan identitas 2 orang saksi</p>
                                    <p>2. Surat keterangan kelahiran dari rumah sakit / puskesmas / fasilitas kesehatan / dokter / bidan</p>
                                    <p>3. Fotocopy buku nikah / Kutipan akta perkawinan orangtua (diterjemahkan ke dalam Bahasa Indonesia oleh lembaga resmi dan dilegalisir oleh perwakilan negeri setempat di Indonesia)</p>
                                    <p>4. Fotocopy KK (Kartu Keluarga) dan KTP (Kartu Tanda Penduduk) orangtua bagi pemegang ijin tetap</p>
                                    <p>5. Fotocopy Pasport/visa bagi pemegang ijin kunjungan</p>
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