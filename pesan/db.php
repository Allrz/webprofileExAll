<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sekolah_db"; // Ganti dengan nama database yang kamu pakai

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
