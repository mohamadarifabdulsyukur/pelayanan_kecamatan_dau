<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pelayanan Publik Kecamatan Dau</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin.php">Pelayanan Publik</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">SURAT-SURAT</div>
                            <a class="nav-link" href="suratketerangan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Surat Keterangan
                            </a>
                            <a class="nav-link" href="kewarganegaraan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Kewarganegaraan
                            </a>
                            <div class="sb-sidenav-menu-heading">KARTU DAN AKTA</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                                Kartu
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ktp.php">KTP-el (Kartu Tanda Penduduk)</a>
                                    <a class="nav-link" href="kia.php">KIA (Kartu Identitas Anak)</a>
                                    <a class="nav-link" href="kk.php">KK (Kartu Keluarga)</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsakta" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Akta
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsakta" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="kelahiran.php">Akta Kelahiran</a>
                                    <a class="nav-link" href="kematian.php">Akta Kematian</a>
                                    <a class="nav-link" href="perkawinan.php">Akta Perkawinan</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Inovasi Layanan</div>
                            <a class="nav-link" href="pkk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                PKK
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-triangle"></i></div>
                                Lain-Lain
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="html/401.html">401 Page</a>
                                            <a class="nav-link" href="html/404.html">404 Page</a>
                                            <a class="nav-link" href="html/500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        ADMIN ATAU MASYARAKAT
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kewarganegaraan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Persyaratan Pengajuan Kewarganegaraan</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Perubahan Status WNA Menjadi WNI di Wilayah NKRI</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#section1">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body">Anak Berkewarganegaraan Ganda (ABG)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#section2">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Perubahan Status WNI Menjadi WNA</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#section3">Lihat</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class ="row">
                            <div id="section1" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
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
                            <div id="section2" class="container-fluid bg-dark text-white" style="padding:100px 20px;">
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
                            <div id="section3" class="container-fluid bg-secondary text-white" style="padding:100px 20px;">
                                <h1>Persyaratan Pencatatan Perubahan Status Kewarganegaraan WNI menjadi WNA</h1>
                                <br>
                                <p>1. Mengisi Formulir Pelaporan (F-2.01)</p>
                                <p>2. Fotocopy Petikan Keputusan Menteri yang menyelenggarakan urusan pemerintahan di bidang hukum tentang perubahan status kewarganegaraan</p>
                                <p>3. Salah Satu Kutipan Akta Pencatatan Sipil Asli</p>
                                <p>4. Fotocopy Dokumen Perjalanan Republik Indonesia</p>
                            </div>
                        </div>

                    </div>
                </main>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Kantor Kecamatan Dau 2023 - <?php echo date("Y");?> </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>