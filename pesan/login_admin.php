<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location:../indexadm.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-image: url('../foto/g2.jpeg');
      background-size: cover;
      font-family: 'Poppins', sans-serif;
    }

    .card-custom {
      background: white;
      border-radius: 25px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      padding: 2rem;
      transition: 0.3s;
    }

    .card-custom:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .form-label {
      font-weight: 600;
      color: #333;
    }

    .btn-custom {
      background-color: #28a745;
      color: white;
      font-weight: bold;
      border-radius: 20px;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background-color: #218838;
      transform: scale(1.02);
    }

    .btn-back {
      background-color: #ffffff;
      color: #28a745;
      font-weight: bold;
      border: 2px solid #28a745;
      border-radius: 20px;
      margin-top: 10px;
      transition: 0.3s;
    }

    .btn-back:hover {
      background-color: #28a745;
      color: white;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

  <div class="card card-custom" style="width: 100%; max-width: 400px; background-color: rgba(253, 251, 251, 1)">
    <h3 class="text-center mb-4" style="color: #444;">Login Admin</h3>
    <form action="cek_login.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required />
      </div>
      <button type="submit" class="btn btn-custom w-100">Masuk</button>
      <a href="../logAwal.php" class="btn btn-back w-100">← Kembali ke Beranda</a>
    </form>
  </div>

</body>
</html>

