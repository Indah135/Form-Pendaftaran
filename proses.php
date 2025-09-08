<?php
include "koneksi.php";

$nama    = $_POST['nama'];
$email   = $_POST['email'];
$telepon = $_POST['telepon'];

$sql = "INSERT INTO pendaftar (nama, email, telepon) 
        VALUES ('$nama', '$email', '$telepon')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>
            alert('Terima kasih sudah mendaftar 🎉');
            window.location.href='index.html';
          </script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
