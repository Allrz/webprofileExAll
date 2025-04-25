<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login_admin.php");
  exit;
}

$conn = mysqli_connect("localhost", "root", "", "sekolah_db");

$id = $_GET['id']; // Ambil id dari parameter URL

// Hapus pesan berdasarkan ID
$sql = "DELETE FROM pesan_kontak WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Pesan berhasil dihapus!'); window.location='admin_pesan.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
