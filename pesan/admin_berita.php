<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal = $_POST['tanggal'];

  // Upload gambar
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  move_uploaded_file($tmp, 'foto/' . $gambar);

  // Simpan ke database
  mysqli_query($conn, "INSERT INTO berita (judul, deskripsi, gambar, tanggal)
                       VALUES ('$judul', '$deskripsi', '$gambar', '$tanggal')");

  echo "<script>alert('Berita berhasil ditambahkan!'); location.href='admin_berita.php';</script>";
}
?>

<form method="POST" enctype="multipart/form-data">
  <input type="text" name="judul" class="form-control mb-2" placeholder="Judul" required>
  <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi" required></textarea>
  <input type="date" name="tanggal" class="form-control mb-2" required>
  <input type="file" name="gambar" class="form-control mb-3" required>
  <button type="submit" class="btn btn-success">Tambah Berita</button>
</form>
