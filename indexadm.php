<?php
session_start();
include 'pesan/db.php';
$berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
?>


<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SD Negeri Lebakwangi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg shadow-sm fixed-top"
      style="background-color: #18cb39"
    >
      <div class="container-fluid">
        <img src="foto/logo.png" alt="Logo Tut Wuri Handayani" style="width: 65px; height: 50px;">
        <a class="navbar-brand" href="#">SD Negeri Lebakwangi</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="color:green;"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="link/profil.php">Profil Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="link/galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pesan/admin_dashboard.php">Lihat Data</a>
            </li>
            <a href="logAwal.html"
   style="font-family: Poppins; border-radius: 10px; color: white; padding:8px; ">Logout
</a>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <!-- Beranda -->
      <header class="text-black text-center py-5">
        <h1 class="judul">Selamat Datang di SD Negeri Lebakwangi</h1>
        <img
          src="foto/g1.jpeg"
          alt="SDN Lebak Wangi"
          width="350"
          height="250"
          style="margin-bottom: 15px"
        />
        <p>(slogan sekolah)</p>
      </header>

      <!-- Tentang Kami -->
      <section id="about" class="py-5 p-4">
        <h2 class="sub">Tentang Kami</h2>
        <p class="desc">
          Selamat datang di website resmi SDN Lebak Wangi! SDN Lebak Wangi
          merupakan salah satu Sekolah Dasar Negeri yang sudah terakreditasi "A" dan berkomitmen untuk memberikan pendidikan dasar yang berkualitas, membentuk karakter siswa
          sejak usia dini, serta menanamkan nilai-nilai luhur bangsa Indonesia.
          Terletak di lingkungan yang asri dan kondusif, kami hadir sebagai
          tempat belajar yang menyenangkan dan ramah anak. Sebagai lembaga
          pendidikan dasar, SDN Lebak Wangi berfokus pada pengembangan kemampuan
          akademik, keterampilan, dan karakter siswa melalui pendekatan
          pembelajaran yang aktif, kreatif, dan menyenangkan. Kami percaya bahwa
          masa depan bangsa dimulai dari pendidikan dasar yang kuat. Dengan
          tenaga pendidik yang berdedikasi, fasilitas yang terus ditingkatkan,
          serta dukungan dari orang tua dan masyarakat, kami terus berupaya
          menciptakan generasi yang cerdas, berakhlak mulia, dan siap menghadapi
          tantangan zaman. Website ini kami hadirkan sebagai media informasi dan
          komunikasi antara sekolah, orang tua, serta masyarakat luas, agar
          semakin mengenal dan mendukung kegiatan serta program-program yang ada
          di SDN Lebak Wangi. Mari bersama-sama menciptakan lingkungan
          pendidikan yang berkualitas demi masa depan anak-anak kita.
        </p>
      </section>

      <!-- Visi Misi -->
      <section id="program" class="bg-light py-5 p-4" style="border-radius: 6px;">
        <h2 class="sub2">Visi Dan Misi SD Negeri Lebak Wangi</h2>
        <h2 class="sub3">
          Visi :
          </h2>
          <p class="desc">"Terwujudnya Penyelenggaraan Pendidikan Sepanjang Hayat Sebagai Upaya Membangun Manusia Yang Berkarakter, Inovatif Dan Berprestasi." </p>
          <h2 class="sub3">
            Misi :
          </h2>
          <ol>
            <li class="desc">Merancang pembelajaran yang menarik dan menyenangkan yang mampu memotivasi peserta didik untuk selalu belajar dan menemukan pembelajaran.</li>
            <li class="desc">Membangun lingkungan sekolah yang menumbuhkan peserta didik memiliki akhlak mulia melalui rutinitas kegiatan keagamaan dan menerapkan ajaran agama melalui cara berinteraksi di sekolah.</li>
            <li class="desc">Membangun lingkungan sekolah yang berlandaskan nilai kebhinekaan global, gotong royong, dan toleransi yang tinggi.</li>
            <li class="desc">Melaksanakan pembelajaran kolaboratif, nalar kritis dan kreativitas yang memfasilitasi keragaman minat dan bakat peserta didik.</li>
            <li class="desc">Mengembangkan program sekolah yang membentuk ide dan gagasan cepat tanggap terhadap perubahan yang terjadi untuk merancang inovasi.</li>
            <li class="desc">Mengembangkan dan memfasilitasi peningkatan prestasi peserta didik sesuai minat dan bakatnya melalui proses pendampingan dan kerja sama dengan orang tua.</li>
          </ol>

          <h2 class="sub3"> Tujuan : </h2>
          <ol>
            <li class="desc">Mengoptimalkan sarana prasarana sekolah untuk menunjang rancangan pembelajaran yang memotivasi keinginan selalu belajar.</li>
            <li class="desc">Menyelenggarakan sistem penilaian dengan sistem digitalisasi.</li>
            <li class="desc">Membentuk peserta didik yang taat dan tertib dalam waktu melaksanakan ibadah.</li>
            <li class="desc">Menanamkan simpati dan empati peserta didik dalam kepedulian sosial.</li>
            <li class="desc">Mengembangkan program sekolah untuk mengenalkan implementasi kebhinekaan global di masyarakat.</li>
            <li class="desc">Merancang pembelajaran yang berbasis akan potensi daerah.</li>
            <li class="desc">Menanamkan pondasi gotong royong dalam kegiatan Kelas hingga sekolah.</li>
            <li class="desc">Melaksanakan program dan pembelajaran HOTs untuk memperkuat nalar berpikir kritis dan kreativitas.</li>
            <li class="desc">Melaksanakan pembelajaran untuk mengasah kemampuan literasi dan numerasi.</li>
            <li class="desc">Mempertahankan prestasi yang sudah tercapai sebelumnya.</li>
          </ol>
      </section>

      <!-- Berita dan Acara -->
      <!-- Berita dan Acara -->
          <div class="container mt-5">
  <h3>Kelola Berita</h3>
  <a href="pesan/tambah_berita.php" class="btn btn-success mb-3">+ Tambah Berita</a>
  <table class="table table-bordered table-striped">
    <thead class="table-dark table-cell">
      <tr style="text-align:center;">
        <th>No</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody style="text-align:center;">
      <?php $no = 1; while ($row = mysqli_fetch_assoc($berita)) : ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['judul'] ?></td>
        <td><img src="foto/<?= $row['gambar'] ?>" width="80"></td>
        <td><?= date('d-m-Y', strtotime($row['tanggal'])) ?></td>
        <td style="padding:15px;">
          <div class="d-flex gap-4">
          <a href="pesan/edit_berita.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning" style="heigth: 5px; color:white; font-weight: 400;">Edit</a>
          <a href="pesan/hapus_berita.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-sm btn-danger">Hapus</a>
      </div>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
      </section>

      <!-- Kontak -->
      <section id="contact" class="py-5 p-4">
        <h2 class="sub3">Kontak</h2>
        <p class="desc">Untuk informasi lebih lanjut, silakan hubungi kami:</p>
        <p class="desc">Alamat: Jl. Raya Parung - Bogor Kp. Saja RT.05/RW.01 Ds. Pemagarsari Kec. Parung, Kab. Bogor</p>
        <p class="desc">Telepon: - </p>
        <p class="desc">Email: lebakwangisdnegeri@gmail.com</p>
        <form id="contactForm" method="POST" action="pesan/simpan_pesan.php">
  <div class="mb-3">
    <label for="contactName" class="form-label">Nama</label>
    <H5 style="font-family:poppins; ">Nama</H5>
    <input type="text" class="form-control" id="contactName" name="nama" required />
  </div>
  <div class="mb-3">
    <label for="contactEmail" class="form-label">Email</label>
    <H5 style="font-family:poppins; ">Email</H5>
    <input type="email" class="form-control" id="contactEmail" name="email" required />
  </div>
  <div class="mb-3">
    <label for="contactMessage" class="form-label">Pesan</label>
    <H5 style="font-family:poppins; ">Pesan</H5>
    <textarea class="form-control" id="contactMessage" name="pesan" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary" style="font-family: poppins">Kirim Pesan</button>
</form>

      </section>
    </div>

          <!-- Footer -->
          <footer class="bg-dark text-white text-center py-3">
            <p>&copy; 2025 SDN Lebak Wangi. Semua hak dilindungi.</p>
            <p>
              <a href="#" class="text-white">Kebijakan Privasi</a> |
              <a href="#" class="text-white">Syarat dan Ketentuan</a>
            </p>
          </footer>

    <!-- Script JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
