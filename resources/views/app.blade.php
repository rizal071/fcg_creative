<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Creative Group</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="icon" href="assets/images/logo/logo_tab.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
        .demo {
            background-color: #55aaff;
            border-radius: 50px;
            border: 1px solid #f8f9fa;
        }
        footer {
            background-color: #55aaff;
            color: white;
            padding: 40px 0;
        }
    </style>
</head>

<body>
    @include('navbar.navbar')
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
            <p class="lead">"Transforming Ideas Into Reliable Digital Solutions"</p>
        </div>
    </section>
@include('tentang-kami.tentang-kami')

{{-- KEAHLIAN --}}
<section id="tools" class="bg-light d-flex justify-content-center align-items-center"
        style="height: 25vh; margin: 0; padding: 0; box-shadow: 0 -10px 15px -5px rgba(0,0,0,0.3);">
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
@include('product.product')
@include('project.project-kami')
@include('testimoni.testimoni')

    <!-- Footer -->
    <footer class="text-white py-4" style="background-color: #222;">
        <div class="container">
            <div class="row text-center text-md-start align-items-start justify-content-between">
                <!-- Kolom 1: Logo, Alamat & Deskripsi Perusahaan -->
                <div class="col-md-4 mb-4">
                    <div class="mb-3">
                        <a href="#">
                            <img src="../assets/images/logo/logo_putih.png" alt="Logo" height="70">
                        </a>
                    </div>
                    <p class="mb-3 text-justify" style="text-align: justify"><b>Focus Creative Group</b> adalah
                        Perusahaan IT Konsultan yang berfokus pada pengembangan aplikasi berbasis web, sistem informasi,
                        dan solusi digital.
                        Kami membantu perusahaan, institusi, dan startup membangun sistem yang efisien, aman, dan dapat
                        dikembangkan sesuai kebutuhan bisnis..</p>
                    <p class="mb-1">Cibinong, Kabupaten Bogor, Jawa Barat</p>
                    <p class="mb-0">Indonesia</p>
                </div>

                <!-- Kolom 2: Kontak -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="https://wa.me/6287844346046" class="btn btn-success"
                                style="background-color: #25D366; border-color: #25D366;">
                                <i class="fab fa-whatsapp me-2"></i>Hubungi via WhatsApp
                            </a>
                        </li>
                        <li>Email:
                            <a href="mailto:info@focuscreative.com" class="text-white text-decoration-none">
                                info@focuscreative.com
                            </a>
                        </li>
                        <li>Instagram:
                            <a href="https://instagram.com/focuscreative" target="_blank"
                                class="text-white text-decoration-none">
                                @focuscreative
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kolom 3: Peta -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="fw-bold mb-3">Lokasi Kami</h5>
                    <div class="rounded overflow-hidden" style="height: 200px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.099486425106!2d106.80016507531396!3d-6.509089993483257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3cc4822742f%3A0x92090fce70997b23!2sMULTIDAYA%20%26%20Acropolis%20Co-Working%20%26%20Virtual%20Office!5e0!3m2!1sen!2sid!4v1750253606446!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <hr class="border-light mt-4">
            <div class="text-center">
                <small>&copy; 2025 Focus Creative Group. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script>
        function openStep1() {
            const modalWebDevEl = document.getElementById('modalWebDev');
            const modalWebDev = bootstrap.Modal.getInstance(modalWebDevEl) || new bootstrap.Modal(modalWebDevEl);
            modalWebDev.hide();
            setTimeout(() => {
                const modalStep1 = new bootstrap.Modal(document.getElementById('modalStep1'));
                modalStep1.show();
            }, 500); 
        }
    </script>
    <script>
        AOS.init({
            once: true
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
                scrollRatio = Math.max(0, Math.min(1, scrollRatio));

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




    <script>
        document.addEventListener('click', function(event) {
            const navbar = document.getElementById('navbarNav');
            const toggler = document.querySelector('.navbar-toggler');

            const isNavbarOpen = navbar.classList.contains('show');
            const clickedOutsideNavbar = !navbar.contains(event.target) && !toggler.contains(event.target);
            if (window.innerWidth < 992 && isNavbarOpen && clickedOutsideNavbar) {
                const collapse = new bootstrap.Collapse(navbar, {
                    toggle: false
                });
                collapse.hide();
            }
        });
    </script>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" >
    </script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</body>
</html>
