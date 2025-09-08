<?php
$host = "localhost";
$user = "root";   // username MySQL
$pass = "";       // password MySQL (isi kalau ada)
$db   = "form_himaforka";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
