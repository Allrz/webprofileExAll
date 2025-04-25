<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login_admin.php");
    exit;
}
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM ppdb ORDER BY tanggal_daftar DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Data Pendaftar PPDB</title>
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

  <div class="container mt-4">
    <h3 class="mb-4">Data Pendaftar PPDB</h3>
    <a href="admin_dashboard.php" class="btn btn-secondary mb-3">← Kembali ke Dashboard</a>
    <table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th>
      <th>Nama Calon Siswa</th>
      <th>Tanggal Lahir</th>
      <th>Asal Sekolah</th>
      <th>Orang Tua</th>
      <th>No. Telepon</th>
      <th>Alamat</th>
      <th>Tgl Daftar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['tanggal_lahir'] ?></td>
      <td><?= $row['asal_sekolah'] ?></td>
      <td><?= $row['nama_orang_tua'] ?></td>
      <td><?= $row['no_telepon'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td><?= $row['tanggal_daftar'] ?></td>
      <td>
        <a href="hapus_pendaftaran.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<a href="export_excel.php" class="btn btn-success">Ekspor ke Excel</a>


  </div>
</body>
</html>
