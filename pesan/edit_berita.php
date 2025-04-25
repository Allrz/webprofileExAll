<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$id'");
$row = mysqli_fetch_assoc($data);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $gambar_lama = $_POST['gambar_lama'];

    // Validasi gambar jika diunggah
    if ($_FILES['gambar']['name']) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = $_FILES['gambar']['type'];

        if (in_array($fileType, $allowedTypes)) {
            $gambar = $_FILES['gambar']['name'];
            $tmp = $_FILES['gambar']['tmp_name'];

            // Memindahkan file gambar ke folder 'foto'
            move_uploaded_file($tmp, '../foto/' . $gambar);
        } else {
            echo "<script>alert('Format gambar tidak valid!'); location.href='edit_berita.php?id=$id';</script>";
            exit;
        }
    } else {
        // Jika gambar tidak diubah, gunakan gambar lama
        $gambar = $gambar_lama;
    }

    // Menggunakan prepared statements untuk menghindari SQL Injection
    $stmt = $conn->prepare("UPDATE berita SET judul = ?, deskripsi = ?, gambar = ?, tanggal = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $judul, $deskripsi, $gambar, $tanggal, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Berita berhasil diupdate!'); location.href='../indexadm.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate berita!'); location.href='edit_berita.php?id=$id';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Berita</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Edit Berita</h4>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= $row['judul']; ?>" placeholder="Masukkan judul berita" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" placeholder="Masukkan deskripsi berita" required><?= $row['deskripsi']; ?></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="<?= $row['tanggal']; ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Gambar</label>
            <input type="file" name="gambar" class="form-control">
            <input type="hidden" name="gambar_lama" value="<?= $row['gambar']; ?>">
            <br>
            <img src="../foto/<?= $row['gambar']; ?>" alt="Gambar Berita" width="150px">
          </div>
          <button type="submit" class="btn btn-success">Update Berita</button>
          <a href="../indexadm.php" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
