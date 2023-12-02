<?php
include 'koneksi.php';
//cek register
$sukses = "";
$eror = "";
$info = "";
if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    
    //insert data ke database t_pengguna
    if($nama && $password && $email && $alamat && $nohp){
        $sqlinsert = "INSERT INTO tb_pengguna (id_pengguna,username,password,email,alamat,no_hp) VALUES ('','$nama','$password','$email','$alamat','$nohp')";
        $ceksql = mysqli_query($koneksi,$sqlinsert);
        if($ceksql){
            $sukses = "Berhasil Membuat Akun";
            header('location:login.php');
        } else {
            $eror = " Gagal Membuat Akun";
            header('location:register.php');
        }
    } else {
        $info = "Silahkan Masukan Data Anda";
    }
};
?>