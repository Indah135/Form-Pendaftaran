<?php
include "koneksi.php";

$nama    = $_POST['nama'];
$nim     = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$email   = $_POST['email'];
$telepon = $_POST['telepon'];

$sql = "INSERT INTO pendaftar (nama, nim, jurusan, email, telepon) 
        VALUES ('$nama', '$nim', '$jurusan', '$email', '$telepon')";

if (mysqli_query($koneksi, $sql)) {
    echo "Pendaftaran berhasil! 🎉";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
