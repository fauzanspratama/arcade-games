<!--Cek Login-->
<?php

session_start();
include 'koneksi.php';


if (($_SESSION['level']) != "admin") {

    header('location: login.php');
    exit;

   //echo "<script> alert('$message')window.location.replace('login.php'); </script>";
} else {
    $result = mysqli_query($koneksi, "SELECT * FROM pengguna");

    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<script src="tinymce/tinymce.min.js"></script>

	    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

      body {
        font-family: 'Nunito', sans-serif;
        background-color: #f4f6f8;
      }

      .menu li {
        margin: 16px;
        text-align: center;
        width: 70%;
        list-style: none;
      }

      .menu a {
        color: white;
        text-decoration: none;
        font-weight: 600;
      }

      .btn:hover {
        transform: scale(1.05);
      }
    </style>
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary custom-navbar mb-5" data-scroll-index="0" id="home">
      <div class="container" data-scroll-index="0">
        <a class="font-weight-bold navbar-brand" href="#">Dashboard Admin.</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
          <img src="./assets/bars.svg" width="40" alt="" />
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
          <ul class="navbar-nav ml-auto d-flex align-items-center">
            <li class="nav-item d-flex align-items-center">
              <a class="navbar-brand">
                Hello,
                <?= $_SESSION['nama_lengkap'] ?>!
              </a>
            </li>
            <li>
              <form class="form-inline">
                <button class="btn btn-light rounded-pill px-4" type="submit"><a style="text-decoration: none" href="logout.php">Logout</a></button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<!-- Navbar Ends -->

    <!-- Sidebar -->
    <table width="100%">
      <tr>
        <td class="menu pl-4 pt-4" valign="top" width="20%">
          <li class="btn btn-primary"><a href="./dashboard.php">Dashboard</a></li>
          <li class="btn btn-primary"><a href="./dashboard.php?m=kategori">Kategori</a></li>
          <li class="btn btn-primary"><a href="./dashboard.php?m=artikel">Artikel</a></li>
          <li class="btn btn-primary"><a href="./index.php">Halaman Utama</a></li>
        </td>
        <td width="8px"></td>
        <td class="content" valign="top">
          <?php include "content.php"; ?>
        </td>
      </tr>
    </table>
    <!-- Sidebar Ends -->

	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>