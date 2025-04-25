<?php
include 'db.php';

$nama = $_POST['nama'];
$email = $_POST ['email'];
$pesan = $_POST['pesan'];


$query = "INSERT INTO pesan_kontak (nama, email, pesan) 
          VALUES ('$nama','$email', '$pesan')";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Pesan berhasil dikirim!'); window.location='../index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
