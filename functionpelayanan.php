<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();
include "koneksi.php";
$sukses = '';
$eror = '';

if (isset($_POST['btnedit'])) {
    // Ambil data dari form modal edit
    $id_pelayanan = $_POST['id_pelayanan'];
    $persyaratan = $_POST['persyaratanedit'];
    $status = $_POST['statusedit'];
    $keterangan = $_POST['keteranganedit'];

    // Update data pelayanan ke database berdasarkan ID pelayanan
    $queryedit = "UPDATE tb_pelayanan 
              SET persyaratan = ?, 
                  status = ?, 
                  keterangan = ? 
              WHERE id_pelayanan = ?";

    $stmt = mysqli_prepare($koneksi, $queryedit);
    mysqli_stmt_bind_param($stmt, "sssi", $persyaratan, $status, $keterangan, $id_pelayanan);

    if (mysqli_stmt_execute($stmt)) {
        // Jika berhasil mengupdate data, redirect kembali ke halaman admin dengan pesan alert berhasil
        $sukses = "Data berhasil diupdate!";
        $_SESSION['edit_success'] = true;
    } else {
        // Jika gagal mengupdate data, tampilkan pesan alert gagal
        $eror = "Gagal mengupdate data!";
        $_SESSION['edit_error'] = true;
    }

    mysqli_stmt_close($stmt);
    header("Location: admin.php");
    exit();
}


if (isset($_GET['id_pelayanan'])) {
    $id_pelayanan = $_GET['id_pelayanan'];

    // Query untuk menghapus data berdasarkan ID pelayanan
    $querydelete = "DELETE FROM tb_pelayanan WHERE id_pelayanan = '$id_pelayanan'";
    $delete = mysqli_query($koneksi, $querydelete);

    if ($delete) {
        // Jika data berhasil dihapus, arahkan kembali ke halaman sebelumnya atau halaman lain yang diinginkan
        header('Location: admin.php');
        $sukses = "Data berhasil ditambahkan!";
        $_SESSION['hapus_success'] = true;
        exit();
    } else {
        $sukses = "Data berhasil ditambahkan!";
        $_SESSION['hapus_success'] = true;
    }
}

if (isset($_POST['btninput'])) {
    $nama = $_POST['namainput'];
    $kategori = $_POST['kategoriinput'];
    $tgl = $_POST['tanggalinput'];
    $persyaratan = $_POST['persyarataninput'];
    $status = $_POST['statusinput'];
    $ket = $_POST['keteranganinput'];

    $queryCheckKategori = "SELECT COUNT(*) as count FROM tb_kategori WHERE id_kategori = '$kategori'";
    $resultCheckKategori = mysqli_query($koneksi, $queryCheckKategori);
    $rowCheckKategori = mysqli_fetch_assoc($resultCheckKategori);
    $countKategori = $rowCheckKategori['count'];

    if ($countKategori == 1) {
        $formattgl = date('Y-m-d H:i:s', strtotime($tgl));
        $sqlinput = "INSERT INTO tb_pelayanan (nama,id_kategori,tgl_pelayanan,persyaratan,status,keterangan) VALUES ('$nama','$kategori','$formattgl','$persyaratan','$status','$ket')";
        $input = mysqli_query($koneksi, $sqlinput);
        if ($input) {
            header('Location: admin.php');
            $sukses = "Data berhasil ditambahkan!";
            $_SESSION['input_success'] = true;
            exit();
        } else {
            $sukses = "Data gagal ditambahkan!";
            $_SESSION['input_error'] = true;
        }
    }
}
