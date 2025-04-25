<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];

    // Validasi gambar
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $fileType = $_FILES['gambar']['type'];
    
    if (in_array($fileType, $allowedTypes)) {
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];

        // Memindahkan file gambar ke folder 'foto'
        move_uploaded_file($tmp, '../foto/' . $gambar);

        // Menggunakan prepared statement untuk menghindari SQL Injection
        $stmt = $conn->prepare("INSERT INTO berita (judul, deskripsi, gambar, tanggal) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $judul, $deskripsi, $gambar, $tanggal);

        if ($stmt->execute()) {
            echo "<script>alert('Berita berhasil ditambahkan!'); location.href='../indexadm.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan berita!'); location.href='../indexadm.php';</script>";
        }
    } else {
        echo "<script>alert('Format gambar tidak valid!'); location.href='../indexadm.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Tambah Berita</h4>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" placeholder="Masukkan deskripsi berita" required></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success">Tambah Berita</button>
          <a href="../indexadm.php" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
