<?php
include "inc/config.php";
$sql=mysqli_query($koneksi,"SELECT * FROM artikel AS a INNER JOIN kategori AS b 
	ON a.id_kategori=b.id_kategori WHERE id_artikel='$_GET[id]'");
$a=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "$a[judul]"; ?></title>
	<link rel="stylesheet" type="text/css" href="css/view.css">
</head>
<body>
    <div class="container">
    	<div class="back-button">
	        <button>
	        	<a href="index.php" style="color: #e83e8c;"><i class="fas fa-arrow-left" style="margin-right: 16px;"></i>Kembali</a>
	        </button>
	    </div>
    	<div class="box">
            <h1><?php echo "$a[judul]"; ?></h1>
            <div style="background-color: #f0f0f0">
            	<small><?php echo "$a[nama_kategori]  |  $a[tanggal]"; ?></small>
            </div>
            <p><?php echo "$a[isi]"; ?></p>
        </div>
    </div>
</body>
</html>