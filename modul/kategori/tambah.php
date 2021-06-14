<?php  
include "../../inc/config.php";
if(!empty($_POST['kategori'])){
	//proses simpan
	mysqli_query($koneksi,"CALL tambahKategori('$_POST[kategori]')");
	header('location:../../dashboard.php?m=kategori');
}else{
	header('location:../../dashboard.php?m=kategori');
}
?>