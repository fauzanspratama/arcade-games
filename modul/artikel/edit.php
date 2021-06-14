<?php  
include "../../inc/config.php";
if(!empty($_POST['judul'])){
	//proses simpan
	//mysqli_query($koneksi,"UPDATE artikel SET judul='$_POST[judul]', id_kategori='$_POST[kategori]',
	//isi='$_POST[isi]' WHERE id_artikel='$_POST[id]'");
	mysqli_query($koneksi,"CALL editArtikel('$_POST[judul]','$_POST[kategori]','$_POST[isi]','$_POST[id]')");
	header('location:../../dashboard.php?m=artikel');
}else{
	header('location:../../dashboard.php?m=artikel');
}
?>