<?php

//panggil koneksi database
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    echo "<script>alert('Maaf, username telah terdaftar!');document.location='index.php'</script>";
 } else {
	 $sql = mysqli_query($koneksi, "CALL InsertDataUser('$username','$_POST[nama_lengkap]','$password','$level')"); 
    //$sql=mysqli_query($koneksi,"INSERT INTO pengguna (username,nama_lengkap,password,level) 
      //  VALUES ('$username','$_POST[nama_lengkap]','$password','$level')");
    header('location:index.php');
}
