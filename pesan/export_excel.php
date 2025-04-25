<?php
include 'db.php'; // Sesuaikan nama file koneksi kamu

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=data_pendaftaran.csv");

// Output file pointer
$output = fopen("php://output", "w");

// Header kolom
fputcsv($output, ['No', 'Nama Calon Siswa', 'Tanggal Lahir', 'Asal Sekolah', 'Orang Tua', 'No. Telepon', 'Alamat', 'Tanggal Daftar'], ';');

// Ambil data dari database
$query = "SELECT * FROM ppdb"; // Sesuaikan nama tabel kamu
$result = mysqli_query($conn, $query);

$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $no++,
        $row['nama'],
        $row['tanggal_lahir'],
        $row['asal_sekolah'],
        $row['nama_orang_tua'],
        $row['no_telepon'],
        $row['alamat'],
        $row['tanggal_daftar']
    ], ';');    
}

fclose($output);
exit;
