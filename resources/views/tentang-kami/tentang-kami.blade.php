  <style>
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
  </style>
  
  <section class="container-fluid my-5" id="visi-misi">
        <div class="row mb-5">
            <div class="col text-center" data-aos="fade" data-aos-duration="2000">
                <h2 class="fw-bold">TENTANG KAMI</h2>
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