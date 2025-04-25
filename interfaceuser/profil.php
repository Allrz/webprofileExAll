<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil SD Negeri Lebakwangi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style.css" type="text/css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg shadow-sm fixed-top"
      style="background-color: #18cb39"
    >
      <div class="container-fluid">
        <img src="../foto/logo.png" alt="Logo Tut Wuri Handayani" style="width: 65px; height: 50px;">
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
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeri.php">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <a href="../logAwal.php" style="font-family: Poppins; border-radius: 10px; color: white; padding:8px;">Keluar
</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4 p-4">
      <!-- Beranda -->
      <!-- Tentang Kami -->
      <section id="about" class="py-5">
        <h2 class="sub">Profil Kepala Sekolah</h2>
        <img src="" alt="" />
        <p class="desc"></p>
      </section>

      <section id="about" class="py-5">
        <h2 class="sub">Profil Guru</h2>
        <img src="" alt="" />
        <p class="desc"></p>
      </section>

      <!-- Berita dan Acara -->
      <section id="news" class="bg-light py-5 p-4">
  <h2 class="sub3">Berita</h2>
  <p class="desc">Informasi terbaru dan kalender acara.</p>
  <div class="container mt-4" id="berita-container">
    <?php
    include '../pesan/db.php';
    $berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
    $i = 0;
    while ($row = mysqli_fetch_assoc($berita)) :
      $i++;
    ?>
      <div class="card mb-4 berita-item" style="display: <?= ($i <= 5) ? 'block' : 'none' ?>;">
        <img src="../foto/<?= $row['gambar'] ?>" class="card-img-top" alt="Gambar Berita" style="height: 230px; object-fit: cover;">
        <div class="card-body">
          <h5 class="card-title"><?= $row['judul'] ?></h5>
          <p class="card-text"><?= $row['deskripsi'] ?></p>
          <p class="card-text"><small class="text-muted"><?= date('d M Y', strtotime($row['tanggal'])) ?></small></p>
        </div>
      </div>
    <?php endwhile; ?>
    
    <?php if ($i > 5): ?>
      <div class="text-center mt-3">
        <button id="lihat-lebih-banyak" class="btn btn-secondary">Lihat Lebih Banyak</button>
        <button id="tampilkan-lebih-sedikit" class="btn btn-secondary" style="display: none;">Tampilkan Lebih Sedikit</button>
      </div>
    <?php endif; ?>
  </div>
</section>

<script>
  const beritaItems = document.querySelectorAll('.berita-item');
  const btnLihat = document.getElementById('lihat-lebih-banyak');
  const btnSembunyi = document.getElementById('tampilkan-lebih-sedikit');
  let visibleCount = 5; // Jumlah berita awal yang ditampilkan
  const increment = 5; // Tambahan berita tiap klik

  btnLihat?.addEventListener('click', function () {
    let total = beritaItems.length;
    let nextCount = visibleCount + increment;

    beritaItems.forEach((item, index) => {
      if (index < nextCount) {
        item.style.display = 'block';
      }
    });

    visibleCount = nextCount;

    if (visibleCount >= total) {
      btnLihat.style.display = 'none';
      btnSembunyi.style.display = 'inline-block';
    }
  });

  btnSembunyi?.addEventListener('click', function () {
    visibleCount = increment;
    beritaItems.forEach((item, index) => {
      item.style.display = (index < visibleCount) ? 'block' : 'none';
    });
    btnLihat.style.display = 'inline-block';
    btnSembunyi.style.display = 'none';
    document.getElementById('news').scrollIntoView({ behavior: 'smooth' });
  });
</script>

      <!-- Kontak -->
      <section id="contact" class="py-5 p-4">
        <h2 class="sub3">Kontak</h2>
        <p class="desc">Untuk informasi lebih lanjut, silakan hubungi kami:</p>
        <p class="desc">Alamat: Jl. Raya Parung - Bogor Kp. Saja RT.05/RW.01 Ds. Pemagarsari Kec. Parung, Kab. Bogor</p>
        <p class="desc">Telepon: - </p>
        <p class="desc">Email: lebakwangisdnegeri@gmail.com</p>
<form id="contactForm" method="POST" action="../pesan/simpan_pesan.php">
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
