<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Creative Group</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="assets/images/logo/logo_tab.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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

        .modal {
            z-index: 1055;
        }

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

        .testimonial-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            position: relative;
            color: #f8f9fa;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            margin-top: 5px;
            right: 0;
            background: #55aaff;
            transition: width 0.3s ease;
            -webkit-transition: width 0.3s ease;
            -moz-transition: width 0.3s ease;
            top: 100%;
            left: 0;
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
            left: 0;
            background: #55aaff;
        }

        .demo {
            background-color: #55aaff;
            border-radius: 50px;
            border: 1px solid #f8f9fa;
        }

        .visi-hover:hover {
            background-color: white !important;
            color: #212529 !important;
            transition: all 0.4s ease;
        }

        .misi-hover:hover {
            background-color: #212529 !important;
            color: white !important;
            transition: all 0.4s ease;
        }

        .visi-hover:hover h2,
        .misi-hover:hover h2,
        .visi-hover:hover p,
        .misi-hover:hover ul,
        .misi-hover:hover li {
            color: inherit !important;
        }

        @keyframes scroll-track-1 {
            0% {
                transform: translateX(-100);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes scroll-track-2 {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }


        footer {
            background-color: #55aaff;
            color: white;
            padding: 40px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow"
        style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(10px);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/images/logo/logo_fcg_it2.png" alt="Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#hero">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#visi-misi">Visi & Misi</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#service">Layanan kami</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#demo">Demo Product</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="hero" class="text-white position-relative d-flex align-items-center justify-content-center"
        style="min-height: 100vh;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
            style="background: rgba(0,0,0,0.5); z-index: 1;"></div>

        <div class="container position-relative text-center" style="z-index: 2;">
            <a class="navbar-brand" href="#">
                <img src="../assets/images/logo/logo_tab.png" alt="Logo" height="250">
            </a>
            <h1 class="display-4 fw-bold" style="font-family: 'Montserrat', sans-serif;">FOCUS Creative Group</h1>
            <p class="lead">"Transforming Ideas Into Scalable Digital Solutions"</p>

            <div class="mt-4">
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                    data-bs-target="#modalStep1">
                    Pesan Sekarang
                </button>
            </div>
        </div>
    </section>
    <!-- Modal Step 1 -->
    <form id="websiteForm">
        <!-- Modal Step 1 -->
        <div class="modal fade" id="modalStep1" tabindex="-1" aria-labelledby="modalStep1Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Checklist Kebutuhan Pembuatan Website (1/3)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Proyek</label>
                            <input type="text" class="form-control" name="nama_proyek">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="date" class="form-control" name="dateline">
                        </div>

                        <h6>1. Tujuan Website</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Company Profile/Blog" name="tujuan">
                            <label class="form-check-label">Company Profile/Blog</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Toko Online/E-Commerce"
                                name="tujuan">
                            <label class="form-check-label">Toko Online/E-Commerce</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="tujuan">

                        <div class="mt-3">
                            <label class="form-label">2. Referensi Website</label>
                            <input type="text" class="form-control" name="referensi">
                        </div>

                        <h6 class="mt-3">3. Struktur Halaman</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Beranda" name="struktur">
                            <label class="form-check-label">Beranda</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tentang Kami" name="struktur">
                            <label class="form-check-label">Tentang Kami</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="struktur">

                        <h6 class="mt-3">4. Konten Website</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Logo perusahaan" name="konten">
                            <label class="form-check-label">Logo perusahaan</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="konten">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-target="#modalStep2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Step 2 -->
        <div class="modal fade" id="modalStep2" tabindex="-1" aria-labelledby="modalStep2Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Checklist Kebutuhan Pembuatan Website (2/3)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>5. Fitur & Fungsionalitas</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Formulir kontak/pemesanan"
                                name="fitur">
                            <label class="form-check-label">Formulir kontak/pemesanan</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="fitur">

                        <h6 class="mt-3">6. Preferensi Desain</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Warna utama & sekunder"
                                name="desain">
                            <label class="form-check-label">Warna utama & sekunder</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="desain">

                        <h6 class="mt-3">7. Teknis</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Domain & hosting" name="teknis">
                            <label class="form-check-label">Domain & hosting</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="teknis">

                        <h6 class="mt-3">8. Legal & Keamanan</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Kebijakan privasi"
                                name="legal">
                            <label class="form-check-label">Kebijakan privasi</label>
                        </div>
                        <input class="form-control mt-2" placeholder="Lainnya..." name="legal">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-target="#modalStep1"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary" data-bs-target="#modalStep3"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Step 3 -->
        <div class="modal fade" id="modalStep3" tabindex="-1" aria-labelledby="modalStep3Label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Checklist Kebutuhan Pembuatan Website (3/3)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>9. Proses & Approval</h6>
                        <div class="mb-3">
                            <label class="form-label">Penanggung jawab (PIC) klien</label>
                            <input type="text" class="form-control" name="pic_klien">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mekanisme revisi</label>
                            <input type="text" class="form-control" name="mekanisme_revisi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jadwal meeting/komunikasi</label>
                            <input type="text" class="form-control" name="jadwal_meeting">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-target="#modalStep2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <section class="container-fluid my-5" id="visi-misi">
        <div class="row mb-5">
            <div class="col text-center" data-aos="fade" data-aos-duration="2000">
                <h2 class="fw-bold">Tentang Kami</h2>
                <p class="mt-3">
                    <strong>PT. Focus Creative Group</strong> adalah perusahaan IT Konsultan yang berfokus pada
                    pengembangan aplikasi berbasis web, sistem informasi, dan solusi digital. <br>Kami membantu
                    perusahaan, institusi,
                    dan startup membangun sistem yang efisien, aman, dan dapat dikembangkan sesuai kebutuhan bisnis.
                </p>
            </div>
        </div>

        <div class="row g-0">
            <!-- Visi -->
            <div class="col-md-6 bg-dark text-white p-5 visi-hover" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="mb-4">Visi</h2>
                <p>
                    Menjadi perusahaan terdepan dalam memberikan solusi terbaik di bidang IT dengan menjunjung tinggi
                    integritas, inovasi, dan profesionalisme.
                </p>
            </div>

            <!-- Misi -->
            <div class="col-md-6 bg-white text-dark p-5 misi-hover" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="mb-4">Misi</h2>
                <ul>
                    <li>Menyediakan layanan yang berkualitas dengan berorientasi pada kepuasan pelanggan.</li>
                    <li>Mendorong inovasi berkelanjutan pada setiap aspek layanan.</li>
                    <li>Membangun tim yang memiliki kompetensi baik dan berdedikasi tinggi.</li>
                    <li>Menjalin kemitraan strategis untuk membangun kebersamaan.</li>
                </ul>
            </div>
        </div>
    </section>




    <section id="tools" class="bg-light d-flex justify-content-center align-items-center"
        style="height: 25vh; margin: 0; padding: 0; border: 1px solid #47a3ff;">
        <div class="container-fluid px-0 position-relative overflow-hidden">
            <div class="tools-wrapper position-relative" style="height: 100px;">
                <!-- Track 1 -->
                <div class="scroll-track-1 position-absolute d-flex align-items-center"
                    style="gap: 4rem; animation: scroll-track-1 20s linear infinite; white-space: nowrap;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"
                        height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
                        alt="GitHub" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                        alt="Bootstrap" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="CSS3" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JS" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="HTML5" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                        alt="Laravel" height="80">
                    <!-- Duplikat isi agar seamless -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"
                        height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
                        alt="GitHub" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                        alt="Bootstrap" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="CSS3" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JS" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="HTML5" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                        alt="Laravel" height="80">

                <!-- Track 2 -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"
                        height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
                        alt="GitHub" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                        alt="Bootstrap" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="CSS3" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JS" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="HTML5" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                        alt="Laravel" height="80">
                    <!-- Duplikat isi -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"
                        height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg"
                        alt="GitHub" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                        alt="Bootstrap" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="CSS3" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JS" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="HTML5" height="80">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg"
                        alt="Laravel" height="80">
                </div>
            </div>
        </div>
    </section>
    <!-- Product -->
    <section id="service" class="py-5 bg-drak">
        <div class="container text-center">
            <h2 class="mb-4 fw-bold">Layanan Kami</h2>
            <p class="mb-5 text-muted">
                Kami hadir di dunia teknologi informasi untuk memberikan solusi, perencanaan, dan strategi yang
                terintegrasi sebagai nilai tambah maksimal bagi kebutuhan dan permasalahan Anda.
            </p>
            <div class="row g-4">

                <!-- Feature Card -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm feature-card border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-2x text-primary mb-3"></i>
                            <h5 class="card-title fw-semibold">Software & Program</h5>
                            <p class="card-text text-muted">Sistem Informasi Manajemen (ERP, CRM, HRIS)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm feature-card border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-globe fa-2x text-success mb-3"></i>
                            <h5 class="card-title fw-semibold">Web Design</h5>
                            <p class="card-text text-muted">Pengembangan Aplikasi Web Kustom</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm feature-card border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-2x text-warning mb-3"></i>
                            <h5 class="card-title fw-semibold">API</h5>
                            <p class="card-text text-muted">Integrasi API & Automasi Bisnis
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm feature-card border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fa-2x text-danger mb-3"></i>
                            <h5 class="card-title fw-semibold">Analisis</h5>
                            <p class="card-text text-muted">Analisis Kebutuhan Sistem</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm feature-card border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-network-wired fa-2x text-info mb-3"></i>
                            <h5 class="card-title fw-semibold">UI/UX</h5>
                            <p class="card-text text-muted">UI/UX Design & Prototyping</p>
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
    <section class="container py-5" id="keunggulan-kami">
  <div class="text-center mb-5">
    <h2 class="fw-bold">⭐ Keunggulan Kami</h2>
  </div>
  <div class="row g-4">
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Tim berpengalaman & profesional</h5>
          <p class="card-text text-muted">Didukung oleh tim ahli dengan rekam jejak proyek yang berhasil di berbagai sektor industri.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Teknologi terbaru dan scalable</h5>
          <p class="card-text text-muted">Menggunakan teknologi terkini yang fleksibel dan mudah dikembangkan di masa depan.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Desain responsif dan modern</h5>
          <p class="card-text text-muted">Tampilan antarmuka yang menarik dan optimal di semua perangkat.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Dukungan teknis jangka panjang</h5>
          <p class="card-text text-muted">Kami menyediakan pemeliharaan dan bantuan teknis sesuai kebutuhan bisnis Anda.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body">
          <h5 class="card-title">Proses pengembangan Agile dan transparan</h5>
          <p class="card-text text-muted">Setiap tahap pengembangan dilakukan secara iteratif dan bisa dipantau oleh klien.</p>
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
                        <img src="https://i.pravatar.cc/100?img=1" class="rounded-circle mx-auto mb-3" width="80"
                            height="80" alt="Andi">
                        <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
                        <p class="text-muted small">"Pelayanan sangat profesional dan membantu kami membangun sistem
                            yang efisien."</p>
                        <h6 class="mt-2 fw-semibold mb-0">Timen</h6>
                        <small class="text-muted">CEO StartUp</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
                        <img src="https://i.pravatar.cc/100?img=2" class="rounded-circle mx-auto mb-3" width="80"
                            height="80" alt="Sari">
                        <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
                        <p class="text-muted small">"Timnya sangat komunikatif dan memahami kebutuhan bisnis kami."</p>
                        <h6 class="mt-2 fw-semibold mb-0">Sari</h6>
                        <small class="text-muted">Digital Marketer</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
                        <img src="https://i.pravatar.cc/100?img=3" class="rounded-circle mx-auto mb-3" width="80"
                            height="80" alt="Budi">
                        <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
                        <p class="text-muted small">"Desain websitenya menarik dan user-friendly. Terima kasih banyak!"
                        </p>
                        <h6 class="mt-2 fw-semibold mb-0">Budi</h6>
                        <small class="text-muted">Pemilik Toko Online</small>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0 testimonial-card p-3 text-center">
                        <img src="https://i.pravatar.cc/100?img=4" class="rounded-circle mx-auto mb-3" width="80"
                            height="80" alt="Lina">
                        <i class="fas fa-quote-left fa-lg text-primary mb-2"></i>
                        <p class="text-muted small">"Sangat puas dengan hasil audit dan rekomendasi yang diberikan."
                        </p>
                        <h6 class="mt-2 fw-semibold mb-0">Lina</h6>
                        <small class="text-muted">Manager IT</small>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg text-white py-4" style="background-color: red,">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-start">
                <div class="col-md-6 mb-3 mb-md-0" style="max-width: 48%;">
                    <div class="mb-3">
                        <a class="mb-4" href="#">
                            <img src="../assets/images/logo/logo_fcg_it2.png" alt="Logo" height="70">
                        </a>
                    </div>
                    <p class="mb-1">Cibinong, Kabupaten Bogor, Jawa Barat</p>
                    <p class="mb-0">Indonesia</p>
                </div>

                <!-- Kanan: Kontak -->
                <div class="col-md-6" style="max-width: 48%; text-align: right;">
                    <h5 class="fw-bold">Kontak Kami</h5>
                    <ul class="list-unstyled mb-0">
                        <li>WhatsApp: <a href="https://wa.me/6281234567890"
                                class="text-white text-decoration-none">+62 812-3456-7890</a></li>
                        <li>Email: <a href="mailto:info@focuscreative.com"
                                class="text-white text-decoration-none">info@focuscreative.com</a></li>
                        <li>Instagram: <a href="https://instagram.com/focuscreative" target="_blank"
                                class="text-white text-decoration-none">@focuscreative</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-light mt-4">
            <div class="text-center">
                <small>&copy; 2025 PT. Focus Creative Group. All rights reserved.</small>
            </div>
        </div>
    </footer>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true // animasi hanya terjadi sekali saat pertama muncul
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            changeBackground();
            setInterval(changeBackground, 3000);
        });

        document.addEventListener('DOMContentLoaded', function() {
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
            updateNavbarTextColor();
        });

        window.addEventListener('scroll', () => {
            const slider = document.getElementById('toolsSlider');
            const section = document.getElementById('tools');
            const rect = section.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (rect.top < windowHeight && rect.bottom > 0) {
                const distanceToCenter = rect.top + rect.height / 2 - windowHeight / 0.8;

                let scrollRatio = 1 - Math.abs(distanceToCenter) / (windowHeight / 0.3);
                scrollRatio = Math.max(0, Math.min(1, scrollRatio)); // Clamp ke 0-1 saja

                const startTranslate = 80;
                const currentTranslate = startTranslate * (1 - scrollRatio);

                slider.style.transform = `translateX(${currentTranslate}%)`;
            }
        });
    </script>
    <script>
        const track = document.getElementById("scroll-track");
        track.innerHTML += track.innerHTML;
    </script>

    <!-- Tambah di akhir body -->
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
        emailjs.init("dkCXSs5nVE2UjlZjh");

        document.getElementById('websiteForm').addEventListener('submit', function(e) {
            e.preventDefault();

            emailjs.sendForm('service_pm9zo89', 'template_v43orgt', this)
                .then(function(response) {
                    alert('Berhasil dikirim!');
                    console.log('SUCCESS!', response.status, response.text);
                }, function(error) {
                    alert('Gagal mengirim!');
                    console.log('FAILED...', error);
                });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" >
    </script>


</body>

</html>
