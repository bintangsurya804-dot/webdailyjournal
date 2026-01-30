<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS RPL - Dunia Film & Schedule | Bintang Suriya Bagus M</title>
  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Warna aktif accordion merah */
    .accordion-button:not(.collapsed) {
      background-color: #f8d7da !important;
      color: #721c24 !important;
    }
    .accordion-button:focus {
      box-shadow: none;
    }
  </style>
</head>
<body>

  <!-- ===== NAVBAR ===== -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">🎬 Film & Schedule</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#rekomendasi">Rekomendasi</a></li>
          <li class="nav-item"><a class="nav-link" href="#review">Review</a></li>
          <li class="nav-item"><a
class="nav-link" href="#gallery">Gallery</a></li>
          <li class="nav-item"><a
 class="nav-link"
href="#schedule">Schedule</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
          <li class="nav-item"><a class="nav-link" href="#login.php">Login</a></li>
        </ul>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ===== HERO / BERANDA ===== -->
  <section id="beranda" class="bg-dark text-light text-center py-5">
    <div class="container">
      <h1 class="display-4 fw-bold">Selamat Datang di Dunia Film</h1>
      <p class="lead mb-4">Eksplorasi jadwal, film favorit, dan kisah di balik layar oleh Bintang Suriya Bagus M.</p>

      <!-- Profil Mahasiswa -->
      <div class="profil mt-4">
        <img src="https://www.shutterstock.com/image-vector/film-text-strip-font-style-260nw-1539504317.jpg"
          alt="Foto Film" class="rounded-circle shadow mb-3" width="150" height="150">
        <h3 class="fw-bold mb-1">Bintang Suriya Bagus M</h3>
        <p class="mb-1">A11.2024.16071</p>
        <p class="text-secondary">Teknik Informatika - Fakultas Ilmu Komputer</p>
      </div>

      <a href="#rekomendasi" class="btn btn-danger mt-3">Jelajahi Film</a>
    </div>
  </section>

  <!-- ===== REKOMENDASI FILM ===== -->
  <section id="rekomendasi" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Articel</h2>
      <div class="row g-4">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>

            <!-- col begin -->     
            <div class="col">
                     <div class="card h-10">
                        <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["judul"] ?></h5>
                            <p class="card-text">
                             <?= $row["isi"] ?>    
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                              <?= $row["tanggal"] ?> 
                            </small>
                        </div>
                    </div>
                </div>
         <!-- col end -->
             <?php
            }
            ?>
            </div>
        </div>
    </section>
<!-- article and -->

     <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-light">
      <div class="container">
        <h1 class="fw-bold display-5 pb-4">Gallery</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
          $hasil = $conn->query($sql);

          while ($row = $hasil->fetch_assoc()) {
          ?>
          <div class="col">
            <div class="card h-100">
              <img src="image/<?= $row['gambar']; ?>" class="card-img-top" alt="gallery">
              <div class="card-body">
                <p class="card-text"><?= $row['deskripsi']; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row['tanggal']; ?><br>
                  oleh : <?= $row['username']; ?>
                </small>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- gallery end -->

  <!-- ===== REVIEW FILM ===== -->
  <section id="review" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">📝 Review Film</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 border rounded bg-white shadow-sm h-100">
            <h5 class="fw-bold">👻 KKN di Desa Penari</h5>
            <p><strong>Genre:</strong> Horor, Misteri</p>
            <p>Film ini berhasil membawa atmosfer mencekam dan kisah berdasarkan pengalaman nyata yang viral di media sosial.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-4 border rounded bg-white shadow-sm h-100">
            <h5 class="fw-bold">🃏 Joker</h5>
            <p><strong>Genre:</strong> Drama, Psikologis</p>
            <p>Akting Joaquin Phoenix yang luar biasa menggambarkan depresi dan ketidakadilan sosial dengan sangat kuat.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-4 border rounded bg-white shadow-sm h-100">
            <h5 class="fw-bold">😈 Pengabdi Setan</h5>
            <p><strong>Genre:</strong> Horor, Keluarga</p>
            <p>Film horor klasik modern dengan atmosfer menyeramkan dan cerita keluarga yang emosional.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== SCHEDULE ===== -->
  <section id="schedule" class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">📅 Schedule Kegiatan</h2>
      <div class="row g-3">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="p-3 border rounded shadow-sm">
            <i class="bi bi-book" style="font-size: 2rem; color: red;"></i>
            <h5 class="mt-2">Membaca</h5>
            <p>Menambah wawasan setiap pagi sebelum beraktivitas.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="p-3 border rounded shadow-sm">
            <i class="bi bi-pencil" style="font-size: 2rem; color: red;"></i>
            <h5 class="mt-2">Menulis</h5>
            <p>Mencatat pengalaman dan ide setiap hari.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="p-3 border rounded shadow-sm">
            <i class="bi bi-chat-dots" style="font-size: 2rem; color: red;"></i>
            <h5 class="mt-2">Diskusi</h5>
            <p>Bertukar ide bersama teman dalam kelompok belajar.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="p-3 border rounded shadow-sm">
            <i class="bi bi-bicycle" style="font-size: 2rem; color: red;"></i>
            <h5 class="mt-2">Olahraga</h5>
            <p>Menjaga kebugaran dengan bersepeda setiap pagi.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== ABOUT ME ===== -->
  <section id="about" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-4">👤 About Me</h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              Biodata Singkat
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Nama:</strong> Bintang Suriya Bagus M <br>
              <strong>NIM:</strong> A11.2024.16071 <br>
              <strong>Prodi:</strong> Teknik Informatika - Universitas Dian Nuswantoro
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              Hobi & Minat
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Menyukai film, musik, dan teknologi. Sering menulis ulasan film dan belajar pengembangan web.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              Pengalaman
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Pernah membuat beberapa proyek berbasis web menggunakan HTML, CSS, dan Bootstrap.  
              Saat ini sedang memperdalam JavaScript dan desain UI/UX.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== KONTAK ===== -->
  <section id="kontak" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">📩 Hubungi Saya</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" placeholder="Tulis pesan atau saran..."></textarea>
            </div>
            <button type="submit" class="btn btn-dark w-100">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="bg-dark text-light text-center py-3">
    <p class="mb-0">&copy; 2025 Bintang Suriya Bagus M | A11.2024.16071 | Teknik Informatika</p>
  </footer>

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>