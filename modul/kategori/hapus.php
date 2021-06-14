<?php  
include "../../inc/config.php";
//proses hapus
mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$_GET[id]'");
header('location:../../dashboard.php?m=kategori');
?>