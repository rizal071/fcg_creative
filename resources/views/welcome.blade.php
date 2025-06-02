<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Focus Creative Group</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="assets/images/logo/logo_tab.png" type="image/png">
  <style>
    html {
      scroll-behavior: smooth;
    }
    section {
      padding: 100px 0;
    }
  #hero {
    background-size: cover;
    background-position: center;
    transition: background-image 1s ease-in-out;
     padding-top: 150px;
  }
    footer {
      background-color: #343a40;
      color: white;
      padding: 40px 0;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px);">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/images/logo/logo_fcg_it2.png" alt="Logo" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" href="#hero">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#visi-misi">Visi & Misi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#testimoni">Testimoni</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<!-- Hero Section -->
<section id="hero" class="text-white position-relative">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5); z-index: 1;"></div>
  <div class="container position-relative" style="z-index: 2; padding: 100px 0;">
    <h1 class="display-4 fw-bold">Focus Creative Group</h1>
    <p class="lead">Solusi modern untuk kebutuhan digital Anda</p>
  </div>
</section>

<!-- Visi & Misi -->
<section id="visi-misi" class="bg-light">
  <div class="container">
    <h2 class="mb-4 text-center">Visi & Misi</h2>
    <div class="row">
      <div class="col-md-6">
        <h4>Visi</h4>
        <p>
          Menjadi perusahaan kreatif digital terdepan yang mampu memberikan solusi inovatif dan berdaya saing tinggi di era transformasi digital.
        </p>
      </div>
      <div class="col-md-6">
        <h4>Misi</h4>
        <ul>
          <li>Mengembangkan layanan digital yang berkualitas dan efisien.</li>
          <li>Memberdayakan talenta muda melalui teknologi dan kreativitas.</li>
          <li>Membangun kemitraan yang kuat dan berkelanjutan.</li>
          <li>Mengedepankan kepuasan klien dalam setiap layanan yang diberikan.</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- Product -->
<section id="product" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">Features</h2>
    <p class="mb-5">Kami hadir di dunia teknologi informasi untuk memberikan solusi, perencanaan, dan strategi yang terintegrasi sebagai nilai tambah maksimal bagi kebutuhan dan permasalahan Anda.</p>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Software & Program</h5>
            <p class="card-text">Software yang sesuai dengan Business Process Anda</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Web Design</h5>
            <p class="card-text">Bangun identitas bisnis dan usaha Anda</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">SEO Service</h5>
            <p class="card-text">Memberikan Anda peluang lebih besar dibanding kompetitor</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">IT Audit</h5>
            <p class="card-text">Evaluasi sistem, kinerja, dan infrastruktur</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Hardware & Network</h5>
            <p class="card-text">Hardware dan Infrastruktur Jaringan yang baik</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Consulting</h5>
            <p class="card-text">Konsultasikan kebutuhan IT Anda pada kami</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Testimoni -->
<section id="testimoni" class="bg-light py-5">
  <div class="container text-center">
    <h2 class="mb-4">Testimoni</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">"Pelayanan sangat profesional dan membantu kami membangun sistem yang efisien."</p>
            <h6 class="card-subtitle mt-3 text-muted">- Andi, CEO StartUp</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">"Timnya sangat komunikatif dan memahami kebutuhan bisnis kami."</p>
            <h6 class="card-subtitle mt-3 text-muted">- Sari, Digital Marketer</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">"Desain websitenya menarik dan user-friendly. Terima kasih banyak!"</p>
            <h6 class="card-subtitle mt-3 text-muted">- Budi, Pemilik Toko Online</h6>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">"Sangat puas dengan hasil audit dan rekomendasi yang diberikan."</p>
            <h6 class="card-subtitle mt-3 text-muted">- Lina, Manager IT</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- Kiri: Nama PT dan Alamat -->
      <div class="col-md-6 mb-3 mb-md-0">
        <h5 class="fw-bold">PT. Focus Creative Group</h5>
        <p class="mb-1">Jl. Teknologi No. 123, Jakarta Selatan</p>
        <p class="mb-0">Indonesia, 12430</p>
      </div>

      <!-- Kanan: Kontak -->
      <div class="col-md-6">
        <h5 class="fw-bold">Kontak Kami</h5>
        <ul class="list-unstyled mb-0">
          <li>WhatsApp: <a href="https://wa.me/6281234567890" class="text-white text-decoration-none">+62 812-3456-7890</a></li>
          <li>Email: <a href="mailto:info@focuscreative.com" class="text-white text-decoration-none">info@focuscreative.com</a></li>
          <li>Instagram: <a href="https://instagram.com/focuscreative" target="_blank" class="text-white text-decoration-none">@focuscreative</a></li>
        </ul>
      </div>
    </div>
    <hr class="border-light mt-4">
    <div class="text-center">
      <small>&copy; 2025 PT. Focus Creative Group. All rights reserved.</small>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const heroSection = document.getElementById('hero');
    const images = [
      'assets/images/hero/bg1.jpg',
      'assets/images/hero/bg2.jpg',
      'assets/images/hero/bg3.jpg'
    ];
    let current = 0;

    function changeBackground() {
      heroSection.style.backgroundImage = `url('${images[current]}')`;
      current = (current + 1) % images.length;
    }

    // Set initial background
    changeBackground();
    // Ganti setiap 5 detik
    setInterval(changeBackground, 3000);
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const heroSection = document.getElementById('hero');
    const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbar = document.querySelector('.navbar');

    function updateNavbarTextColor() {
      const heroBottom = heroSection.getBoundingClientRect().bottom;

      navbarLinks.forEach(link => {
        if (heroBottom <= 50) {
          link.classList.remove('text-light');
          link.classList.add('text-dark');
        } else {
          link.classList.remove('text-dark');
          link.classList.add('text-light');
        }
      });
    }

    window.addEventListener('scroll', updateNavbarTextColor);
    updateNavbarTextColor(); // jalankan sekali saat load
  });
</script>

</body>
</html>
