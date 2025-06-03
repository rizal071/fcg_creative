<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Focus Creative Group</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="assets/images/logo/logo_tab.png" type="image/png">
  <style>
    /* html */
    html {
      scroll-behavior: smooth;
    }
    section {
      padding: 100px 0;
    }

    /* Hero */
  #hero {
    background-size: cover;
    background-position: center;
    transition: background-image 1s ease-in-out;
     padding-top: 150px;
  }

  /* Produk */
  .feature-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.1);
  }

  .feature-card i {
    transition: color 0.3s ease;
  }

  .feature-card:hover i {
    color: #0d6efd !important;
  }

  /* Testimoni */
  .testimonial-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .testimonial-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.1);
  }

  /* Fotter */
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
    <h2 class="mb-4 fw-bold">Features</h2>
    <p class="mb-5 text-muted">
      Kami hadir di dunia teknologi informasi untuk memberikan solusi, perencanaan, dan strategi yang terintegrasi sebagai nilai tambah maksimal bagi kebutuhan dan permasalahan Anda.
    </p>
    <div class="row g-4">
      
      <!-- Feature Card -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm feature-card border-0">
          <div class="card-body text-center">
            <i class="fas fa-code fa-2x text-primary mb-3"></i>
            <h5 class="card-title fw-semibold">Software & Program</h5>
            <p class="card-text text-muted">Software yang sesuai dengan Business Process Anda</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm feature-card border-0">
          <div class="card-body text-center">
            <i class="fas fa-globe fa-2x text-success mb-3"></i>
            <h5 class="card-title fw-semibold">Web Design</h5>
            <p class="card-text text-muted">Bangun identitas bisnis dan usaha Anda</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm feature-card border-0">
          <div class="card-body text-center">
            <i class="fas fa-chart-line fa-2x text-warning mb-3"></i>
            <h5 class="card-title fw-semibold">SEO Service</h5>
            <p class="card-text text-muted">Memberikan Anda peluang lebih besar dibanding kompetitor</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm feature-card border-0">
          <div class="card-body text-center">
            <i class="fas fa-shield-alt fa-2x text-danger mb-3"></i>
            <h5 class="card-title fw-semibold">IT Audit</h5>
            <p class="card-text text-muted">Evaluasi sistem, kinerja, dan infrastruktur</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm feature-card border-0">
          <div class="card-body text-center">
            <i class="fas fa-network-wired fa-2x text-info mb-3"></i>
            <h5 class="card-title fw-semibold">Hardware & Network</h5>
            <p class="card-text text-muted">Hardware dan Infrastruktur Jaringan yang baik</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 shadow-sm feature-card border-0">
          <div class="card-body text-center">
            <i class="fas fa-comments fa-2x text-secondary mb-3"></i>
            <h5 class="card-title fw-semibold">Consulting</h5>
            <p class="card-text text-muted">Konsultasikan kebutuhan IT Anda pada kami</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- Testimoni -->
<section id="testimoni" class="bg-light py-5">
  <div class="container">
    <h2 class="mb-4 text-center fw-bold">Testimoni</h2>
    <div class="row g-4">

      <!-- Testimonial Item -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
          <img src="https://i.pravatar.cc/100?img=1" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="Andi">
          <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
          <p class="text-muted small">"Pelayanan sangat profesional dan membantu kami membangun sistem yang efisien."</p>
          <h6 class="mt-2 fw-semibold mb-0">Andi</h6>
          <small class="text-muted">CEO StartUp</small>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
          <img src="https://i.pravatar.cc/100?img=2" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="Sari">
          <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
          <p class="text-muted small">"Timnya sangat komunikatif dan memahami kebutuhan bisnis kami."</p>
          <h6 class="mt-2 fw-semibold mb-0">Sari</h6>
          <small class="text-muted">Digital Marketer</small>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
          <img src="https://i.pravatar.cc/100?img=3" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="Budi">
          <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
          <p class="text-muted small">"Desain websitenya menarik dan user-friendly. Terima kasih banyak!"</p>
          <h6 class="mt-2 fw-semibold mb-0">Budi</h6>
          <small class="text-muted">Pemilik Toko Online</small>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
          <img src="https://i.pravatar.cc/100?img=4" class="rounded-circle mx-auto mb-3" width="80" height="80" alt="Lina">
          <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
          <p class="text-muted small">"Sangat puas dengan hasil audit dan rekomendasi yang diberikan."</p>
          <h6 class="mt-2 fw-semibold mb-0">Lina</h6>
          <small class="text-muted">Manager IT</small>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- Footer -->
<footer class="bg-dark text-white py-4" style="background-color: red,">
  <div class="container">
    <div class="row">
      <!-- Kiri: Nama PT dan Alamat -->
      <div class="col-md-6 mb-3 mb-md-0">
      <div class="mb-3">
      <a class="mb-4" href="#">
        <img src="../assets/images/logo/logo_fcg_it2.png" alt="Logo" height="70">
       </a>
       </div> 
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
