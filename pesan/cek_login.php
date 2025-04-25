<?php
session_start();
include('db.php'); // Memasukkan file koneksi

$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username ada di database
$sql = "SELECT * FROM admin_lbk_wangi WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Jika username dan password ditemukan
    $_SESSION['login'] = true;
    header("Location: ../indexadm.php");
    exit;
} else {
    // Jika username atau password salah
    echo "<script>alert('Username atau Password salah!'); window.location='login_admin.php';</script>";
}

mysqli_close($conn);
?>
