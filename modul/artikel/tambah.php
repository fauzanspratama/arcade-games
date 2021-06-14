<?php  
include "../../inc/config.php";
if(!empty($_POST['judul'])){
	//proses simpan
	$tanggal=date('y-m-d');
	$id_user=mysqli_fetch_array($koneksi,"SELECT id FROM pengguna WHERE username='$_SESSION[username]'");
	mysqli_query($koneksi,"CALL tambahArtikel('$_POST[kategori]','$_POST[judul]','$_POST[isi]','$tanggal','$id_user[id]')");
	header('location:../../dashboard.php?m=artikel');
}else{
	header('location:../../dashboard.php?m=artikel');
}
?>