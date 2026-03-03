<?php
// FILE: koneksi.php

// PENTING: Gunakan nama container database, BUKAN localhost!
$host = "db-server"; 
$user = "root";
$pass = "rahasia";
$db   = "db_latihan";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Gagal terkoneksi ke Database: " . mysqli_connect_error());
}
?>
