<?php
include 'koneksi.php';
include 'functionpelayanan.php';
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
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
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
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Surat Keterangan
                        </a>
                        <a class="nav-link" href="">
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
                                <a class="nav-link" href="">KTP-el (Kartu Tanda Penduduk)</a>
                                <a class="nav-link" href="">KIA (Kartu Identitas Anak)</a>
                                <a class="nav-link" href="">KK (Kartu Keluarga)</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsakta" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Akta
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayoutsakta" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Akta Kelahiran</a>
                                <a class="nav-link" href="">Akta Kematian</a>
                                <a class="nav-link" href="">Akta Perkawinan</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Inovasi Layanan</div>
                        <a class="nav-link" href="">
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
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Inovasi Layanan Lain
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="">Desaku Tuntas</a>
                                        <a class="nav-link" href="">e-ADMINDUK</a>
                                        <a class="nav-link" href="">KETAN IRENG</a>
                                        <a class="nav-link" href="">JEBOL ANDUK</a>
                                        <a class="nav-link" href="">PLAT-N</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    ADMIN
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pelayanan Publik Kecamatan Dau
                        </div>

                        <div class="card-body">

                            <?php
                            // Periksa apakah ada variabel session edit_success atau edit_error
                            if (isset($_SESSION['edit_success'])) {
                                // Jika ada, tampilkan alert success dan hapus variabel session
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo 'Data berhasil diupdate!';
                                echo '</div>';
                                unset($_SESSION['edit_success']);
                            } elseif (isset($_SESSION['edit_error'])) {
                                // Jika ada, tampilkan alert error dan hapus variabel session
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                echo 'Gagal mengupdate data!';
                                echo '</div>';
                                unset($_SESSION['edit_error']);
                            }

                            if (isset($_SESSION['input_success'])) {
                                // Jika ada, tampilkan alert success dan hapus variabel session
                                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                                echo 'Data berhasil ditambahkan!';
                                echo '</div>';
                                unset($_SESSION['input_success']);
                            } elseif (isset($_SESSION['input_error'])) {
                                // Jika ada, tampilkan alert error dan hapus variabel session
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                echo 'Gagal menambahkan data!';
                                echo '</div>';
                                unset($_SESSION['input_error']);
                            }

                            if (isset($_SESSION['hapus_success'])) {
                                // Jika ada, tampilkan alert success dan hapus variabel session
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                echo 'Data berhasil dihapus';
                                echo '</div>';
                                unset($_SESSION['hapus_success']);
                            } elseif (isset($_SESSION['hapus_error'])) {
                                // Jika ada, tampilkan alert error dan hapus variabel session
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                echo 'Gagal menghapus data!';
                                echo '</div>';
                                unset($_SESSION['hapus_error']);
                            }
                            ?>


                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputdata">
                                Tambah
                            </button>
                            <div class="table-responsive-sm">
                                <table class="table table-bordered" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kategori Pelayanan</th>
                                            <th>Tanggal Pelayanan</th>
                                            <th>Persyaratan</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query1 = "SELECT * FROM tb_pelayanan 
                                        INNER JOIN tb_kategori ON tb_pelayanan.id_kategori = tb_kategori.id_kategori";
                                        $no = 1;
                                        $sql = mysqli_query($koneksi, $query1);
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <tr>
                                                <td scope="row"> <?php echo $no++; ?> </td>
                                                <td> <?php echo $data['nama']; ?> </td>
                                                <td> <?php echo $data['kategori']; ?> </td>
                                                <td> <?php echo date('d-m-Y', strtotime($data['tgl_pelayanan'])); ?> </td>
                                                <td> <?php echo $data['persyaratan']; ?> </td>
                                                <td> <?php echo $data['status']; ?> </td>
                                                <td> <?php echo $data['keterangan']; ?> </td>
                                                <td>
                                                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?= $no; ?>"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $no; ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <!-- The Modal Edit-->
                                            <div class="modal" id="edit<?= $no; ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Harap Edit Data Dengan Benar</h3>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="POST" action="functionpelayanan.php">
                                                                <div class="mb-3 mt-3">
                                                                    <label for="nama">Nama:</label>
                                                                    <input type="text" class="form-control" id="nama" value="<?php echo $data['nama']; ?>" name="nama" disabled>
                                                                </div>
                                                                <div class="mb-3 mt-3">
                                                                    <label for="kategori">Kategori Pelayanan:</label>
                                                                    <input type="text" class="form-control" id="kategori" value="<?php echo $data['kategori']; ?>" name="kategori" disabled>
                                                                </div>
                                                                <div class="mb-3 mt-3">
                                                                    <label for="tanggal">Tanggal Pelayanan:</label>
                                                                    <input type="text" class="form-control" id="tanggal" value="<?php echo $data['tgl_pelayanan']; ?>" name="tanggal" disabled>
                                                                </div>
                                                                <div class="mb-3 mt-3">
                                                                    <label for="persyaratan">Persyaratan:</label>
                                                                    <select class="form-select" id="persyaratan" name="persyaratanedit">
                                                                        <option>Tidak Lengkap</option>
                                                                        <option>Lengkap</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 mt-3">
                                                                    <label for="status">Status:</label>
                                                                    <select class="form-select" id="status" name="statusedit">
                                                                        <option>Belum Selesai</option>
                                                                        <option>Selesai</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 mt-3">
                                                                    <label for="keterangan">Keterangan:</label>
                                                                    <select class="form-select" id="keterangan" name="keteranganedit">
                                                                        <option>Belum Diambil</option>
                                                                        <option>Sudah Diambil</option>
                                                                    </select>
                                                                </div>
                                                                <input type="hidden" name="id_pelayanan" value="<?php echo $data['id_pelayanan']; ?>">
                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary" name="btnedit" data-bs-dismiss="modal">Edit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- The Modal Delete-->
                                            <div class="modal" id="delete<?= $no; ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">Konfirmasi Penghapusan</h3>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <h5 class="text-center">Apakah Anda Yakin Akan Menghapus Data ini..? <br>
                                                                <span class="text-danger">
                                                                    <?php
                                                                    echo $data['nama'];
                                                                    ?>
                                                                    Pelayanan
                                                                    <?php
                                                                    echo $data['kategori'];
                                                                    ?>
                                                                </span>
                                                            </h5>
                                                        </div>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <a href="functionpelayanan.php?id_pelayanan=<?php echo $data['id_pelayanan']; ?>" class="btn btn-danger" name="btndelete">Delete</a>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
    <script>
        // Fungsi untuk menampilkan alert
        function showAlert(message) {
            alert(message);
        }
    </script>
</body>

<!-- The Modal Input-->
<div class="modal" id="inputdata">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Harap Tambahkan Data Dengan Benar</h4>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3 mt-3">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" value="" name="namainput">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="kategori">Kategori Pelayanan:</label>
                        <select class="form-select" name="kategoriinput" id="kategori">
                            <option>-pilih-</option>
                            <?php
                            include "koneksi.php";
                            $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_kategori") or die(mysqli_error($koneksi));
                            while ($data = mysqli_fetch_array($ambildata)) {
                                echo "<option value=$data[id_kategori]> $data[kategori] </option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tanggal">Tanggal Pelayanan:</label>
                        <input type="text" class="form-control" id="datepicker" value="" name="tanggalinput">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="persyaratan">Persyaratan:</label>
                        <select class="form-select" id="persyaratan" name="persyarataninput">
                            <option>Tidak Lengkap</option>
                            <option>Lengkap</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="status">Status:</label>
                        <select class="form-select" id="status" name="statusinput">
                            <option>Belum Selesai</option>
                            <option>Selesai</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="keterangan">Keterangan:</label>
                        <select class="form-select" id="keterangan" name="keteranganinput">
                            <option>Belum Diambil</option>
                            <option>Sudah Diambil</option>
                        </select>
                    </div>
                    <input type="hidden" name="id_pelayanan">

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="btninput">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</html>