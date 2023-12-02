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

<body>

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
          <a class="nav-link active:hover" href="#section1">Pelayanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active:hover" href="#section2">Peta Kecamatan Dau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active:hover" href="#section3">Login User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active:hover" href="#section4">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active:hover" href="#section5">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active:hover" href="#section6">PKK</a>
        </li>
      </ul>
    </div>
  </nav>

  <main>
    <div id="section1" class="container fluid">
      <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding-top: 10px;">
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
              <div class="card-body">Surat Keterangan</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="suratketeranganf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-dark text-white mb-4">
              <div class="card-body">Kewarganegaraan</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="kewarganegaraanf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
              <div class="card-body">KTP-el</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="ktpf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-dark text-white mb-4">
              <div class="card-body">KIA (Kartu Identitas Anak)</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="kiaf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
              <div class="card-body">KK (Kartu Keluarga)</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="kkf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-dark text-white mb-4">
              <div class="card-body">Akta Perkawinan</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="perkawinanf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
              <div class="card-body">Akta Kelahiran</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="kelahiranf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-dark text-white mb-4">
              <div class="card-body">Akta Kematian</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="kematianf.php">Lihat</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="section2" class="container fluid">
      <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding: 10px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126445.88358896722!2d112.45130223099162!3d-7.9540364071658125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78838e54ec2753%3A0x67f48ad263bc43db!2sKec.%20Dau%2C%20Kabupaten%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1688522616891!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div id="section3" class="container fluid">
      <div class="row card shadow-lg border-0 rounded-lg mt-5">
        <?php
        include "login.php";
        ?>
      </div>
    </div>

    <div id="section4" class="container fluid">
      <div class="row card shadow-lg border-0 rounded-lg mt-5">
        <?php
        include "register.php";
        ?>
      </div>
    </div>

    <div id="section5" class="container fluid">
      <div class="row card shadow-lg border-0 rounded-lg mt-5" style="padding: 10px;">
        <div class="row">
          <div class="col-md">
            <div class="card bg-light text-dark ">
              <div class="card-body text-center"><i class='fas fa-phone-volume' style="font-size: 70px;"></i></div>
              <div class="card-footer text-center">
                <div class="card-title" style="font-size: large; color: green;">Telephone: 462764</div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark">
              <div class="card-body text-center"><i class='fas fa-globe' style="font-size: 70px;"></i></div>
              <div class="card-footer text-center">
                <div class="card-title" style="font-size: large; color: green;">Web: https://dau.malangkab.go.id</div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark">
              <div class="card-body text-center"><i class='fas fa-envelope-open' style="font-size: 70px;"></i></div>
              <div class="card-footer text-center">
                <div class="card-title" style="font-size: large; color: green;">Email: Dau@malangkab.go.id</div>
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