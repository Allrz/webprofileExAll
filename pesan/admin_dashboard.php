<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #18cb39">
    <div class="container-fluid">
    <img src="../foto/logo.png" alt="Logo Tut Wuri Handayani" style="width: 65px; height: 50px;">
      <a class="navbar-brand" href="#" style="font-family:poppins; color:white; font-weight: 500;">Dashbord Admin SDN Lebak Wangi</a>
      <div class="d-flex">
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="mt-4">
      <a href="admin_pendaftaran.php" class="btn btn-success mb-2 w-100"> Lihat Data Pendaftar PPDB</a>
      <a href="admin_pesan.php" class="btn btn-primary mb-2 w-100"> Lihat Pesan Kontak</a><br><br>
      <a href="../indexadm.php" class="btn btn-danger w-100"><-- Kembali</a>
    </div>
  </div>
</body>
</html>
