<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login_admin.php");
  exit;
}

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "sekolah_db");

// Ambil semua pesan dari database
$result = mysqli_query($conn, "SELECT * FROM pesan_kontak ORDER BY waktu DESC");

// Hitung jumlah pesan
$count_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM pesan_kontak");
$row_count = mysqli_fetch_assoc($count_result);
$total_pesan = $row_count['total'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin - Pesan Kontak</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar / Header -->
  <nav class="navbar navbar-expand-lg" style="background-color: #18cb39">
    <div class="container-fluid">
    <img src="../foto/logo.png" alt="Logo Tut Wuri Handayani" style="width: 65px; height: 50px;">
      <a class="navbar-brand" href="#" style="font-family:poppins; color:white; font-weight: 500;">Dashbord Admin SDN Lebak Wangi</a>
      <div class="d-flex">
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <h2 class="text-center mb-4" style="font-family:poppins;">Daftar Pesan Masuk</h2>

    <!-- Info Jumlah Pesan -->
    <div class="mb-4 text-center">
      <h4>Total Pesan Masuk: <span class="badge bg-primary"><?= $total_pesan ?></span></h4>
    </div>

    <!-- Tabel Daftar Pesan -->
    <div class="table-responsive shadow-sm">
      <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Waktu</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php while($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['pesan'])) ?></td>
            <td><?= $row['waktu'] ?></td>
            <td>
              <!-- Hapus Pesan -->
              <a href="hapus_pesan.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <a href="admin_dashboard.php" class="btn btn-secondary mb-3">← Kembali ke Dashboard</a>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
