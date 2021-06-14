<?php  
include "../../inc/config.php";
//proses hapus
mysqli_query($koneksi,"DELETE FROM artikel WHERE id_artikel='$_GET[id]'");
header('location:../../dashboard.php?m=artikel');
?>