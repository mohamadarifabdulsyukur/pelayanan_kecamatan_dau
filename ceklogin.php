<?php
include 'koneksi.php';
$sukses = '';
$eror = '';
$info ='';
//cek login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    //cek kesamaan dengan database
    $cekdb = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE email='$email'");
    //cek semua data
    $hitung = mysqli_num_rows($cekdb);
    if($hitung>0){
        $pw = mysqli_fetch_array($cekdb);
        $pwsekarang = $pw['password'];
        if(password_verify($password,$pwsekarang)){
            if($password === 'dau23'){
                header('location:admin.php');
            } else{
                header('location:masyarakat.php');
            }
        } else{
            $eror = "Email atau Password Salah";
        }
    } else{
        $info = "Silahkan Masukan email dan password yang sudah terdaftar";
    }
};
?>