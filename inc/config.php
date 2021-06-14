<?php
    $server         = 'localhost';
    $user           = 'root';
    $password       = '';

    $koneksi = mysqli_connect($server, $user, $password);

    mysqli_select_db($koneksi,"db_cms") or die ("Database tidak ditemukan");
?>