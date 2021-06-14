<?php  
include "../../inc/config.php";
if(!empty($_POST['kategori'])){
	//proses update
	mysqli_query($koneksi,"CALL editKategori('$_POST[kategori]','$_POST[id]')");
	header('location:../../dashboard.php?m=kategori');
}else{
	header('location:../../dashboard.php?m=kategori');
}
?>