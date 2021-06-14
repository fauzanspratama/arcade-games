<?php
if(isset($_GET['m'])){
	// Include kategori.php ke dashboard
	if($_GET['m']=='kategori'){
		include "modul/kategori/kategori.php";
	}
	// Include artikel.php ke dashboard
	elseif ($_GET['m']=='artikel'){
		include "modul/artikel/artikel.php";
	}
	else{
		echo "<h3>Modul tidak ditemukan</h3><p>Silahkan pilih menu yang lain</p>";
	}
}
// Halaman Dashboard
else{
	$sql_k=mysqli_query($koneksi,"SELECT COUNT(id_kategori) AS jumlah FROM kategori");
	$jumlah_kategori=mysqli_fetch_array($sql_k);
	$sql_a=mysqli_query($koneksi,"SELECT COUNT(id_artikel) AS jumlah FROM artikel");
	$jumlah_artikel=mysqli_fetch_array($sql_a);
	echo "
			<h2 class='pt-4'>Dashboard</h2>
			<table style='border-style: double; margin: 8px;'></table>
			<table style='padding: 16px;'>
				<tr>
					<td class='card text-center' style='background-color: #f4f4f4; height: 120px; width: 120px; border-radius: 24px'>
						<p class='pt-2'>Kategori</p>
						<h1 align='center'>$jumlah_kategori[jumlah]</h1>
					</td>
					<td width='16px'></td>
					<td class='card text-center' style='background-color: #f4f4f4; height: 120px; width: 120px; border-radius: 24px'>
						<p class='pt-2'>Artikel</p>
						<h1 align='center'>$jumlah_artikel[jumlah]</h1>
					</td>
					<td></td>
				</tr>
			</table><br><br><hr>
		";
}
