<?php
include 'db.php';

$id = $_GET['id'];

// Ambil nama file gambar untuk dihapus dari folder (opsional)
$data = mysqli_query($conn, "SELECT gambar FROM berita WHERE id = '$id'");
$row = mysqli_fetch_assoc($data);
$gambar = $row['gambar'];

// Hapus file gambar jika ada
if (file_exists("foto/$gambar")) {
  unlink("foto/$gambar");
}

// Hapus data dari database
mysqli_query($conn, "DELETE FROM berita WHERE id = '$id'");

echo "<script>alert('Berita berhasil dihapus!'); location.href='../indexadm.php';</script>";
?>
