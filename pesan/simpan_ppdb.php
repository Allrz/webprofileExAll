<?php
include 'db.php';

$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$asal_sekolah = $_POST['asal_sekolah'];
$nama_ortu = $_POST['nama_orang_tua'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO ppdb (nama, tanggal_lahir, asal_sekolah, nama_orang_tua, no_telepon, alamat) 
          VALUES ('$nama', '$tanggal_lahir', '$asal_sekolah', '$nama_ortu', '$no_telepon', '$alamat')";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Pendaftaran berhasil!'); window.location='../link/daftar.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
