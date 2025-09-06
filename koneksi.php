<?php
$host = "localhost";
$user = "root";   // username MySQL
$pass = "";       // password MySQL (isi kalau ada)
$db   = "himpunan_informatika";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
