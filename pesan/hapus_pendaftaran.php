<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login_admin.php");
    exit;
}

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = mysqli_query($conn, "DELETE FROM ppdb WHERE id = $id");

    if ($hapus) {
        echo "<script>alert('Data berhasil dihapus.'); window.location='admin_pendaftaran.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data.'); window.location='admin_pendaftaran.php';</script>";
    }
} else {
    header("Location: admin_pendaftaran.php");
}
?>
