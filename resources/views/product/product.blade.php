<style>
    .service-glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            border-radius: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-glass:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
        }

        .card-body i {
            transition: transform 0.3s ease;
        }

        .service-glass:hover i {
            transform: scale(1.2) rotate(5deg);
        }
</style>
<!-- Product -->
<section id="service" class="py-5 bg-dark text-white position-relative overflow-hidden"
    style="box-shadow: 0 10px 15px -5px rgba(0,0,0,0.3);">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold">LAYANAN KAMI</h2>
        <p class="mb-5 text-light">
            Kami hadir di dunia teknologi informasi untuk memberikan solusi, perencanaan, dan strategi yang
            terintegrasi sebagai nilai tambah maksimal bagi kebutuhan dan permasalahan Anda.
        </p>

        <div class="row g-4 justify-content-center">
            <!-- Web Development -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="card service-glass text-white border-0 h-100 shadow-lg">
                    <div class="card-body text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="fas fa-code fa-2x text-info"></i>
                        </div>
                        <h5 class="fw-semibold">Web Development</h5>
                        <p class="small text-light opacity-75">Pemeliharaan Situs Website</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalWebDev"
                            class="text-info small text-decoration-underline">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Desain Grafis -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                <div class="card service-glass text-white border-0 h-100 shadow-lg">
                    <div class="card-body text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="fa-solid fa-paintbrush fa-2x text-primary"></i>
                        </div>
                        <h5 class="fw-semibold">Desain Grafis</h5>
                        <p class="small text-light opacity-75">Spanduk, Banner, UI/UX, Logo</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalDesain"
                            class="text-primary small text-decoration-underline">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Hardware & Network -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="card service-glass text-white border-0 h-100 shadow-lg">
                    <div class="card-body text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="fas fa-network-wired fa-2x text-info "></i>
                        </div>
                        <h5 class="fw-semibold">Hardware & Network</h5>
                        <p class="small text-light opacity-75">Konfigurasi</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalNetwork"
                            class="text-info small text-decoration-underline">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <!-- Consulting -->
            <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
                <div class="card service-glass text-white border-0 h-100 shadow-lg">
                    <div class="card-body text-center py-4 px-3">
                        <div class="mb-3">
                            <i class="fas fa-comments fa-2x text-warning"></i>
                        </div>
                        <h5 class="fw-semibold">Consulting & Training</h5>
                        <p class="small text-light opacity-75">Konsultasikan kebutuhan IT Anda pada kami</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalConsulting"
                            class="text-warning small text-decoration-underline">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- MODAL WEB --}}
    <!-- Modal Web Development -->
    <div class="modal fade" id="modalWebDev" tabindex="-1" aria-labelledby="modalWebDevLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalWebDevLabel">Web Development</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Kami menyediakan layanan pembuatan dan pemeliharaan situs website profesional, termasuk CMS, portal
                    instansi,
                    e-commerce, serta integrasi API dan hosting.
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="openStep1()">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>

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
    <div class="modal fade" id="modalStep2" tabindex="-1" aria-labelledby="modalStep2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Checklist Kebutuhan Pembuatan Website (2/3)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <input class="form-check-input" type="checkbox" value="Kebijakan privasi" name="legal">
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
    <div class="modal fade" id="modalStep3" tabindex="-1" aria-labelledby="modalStep3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Checklist Kebutuhan Pembuatan Website (3/3)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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


{{-- MODAL DESAIN GRAFIS --}}
    <!-- Modal Desain Grafis -->
    <div class="modal fade" id="modalDesain" tabindex="-1" aria-labelledby="modalDesainLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalDesainLabel">Desain Grafis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Layanan desain grafis meliputi pembuatan spanduk, banner promosi, desain UI/UX aplikasi, branding, dan logo profesional
            untuk kebutuhan personal atau bisnis.
        </div>
        <div class="modal-footer border-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" data-bs-target="#modalDesainStep1" data-bs-toggle="modal" data-bs-dismiss="modal">Pesan Sekarang</button>
        </div>
        </div>
    </div>
    </div>

    <form id="desainForm">

    <!-- Step 1 -->
    <div class="modal fade" id="modalDesainStep1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Desain Grafis (1/3)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek">
            </div>
            <div class="mb-3">
                <label class="form-label">Deadline</label>
                <input type="date" class="form-control" name="deadline">
            </div>

            <h6>1. Jenis Desain</h6>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_desain" value="Spanduk/Banner">
                <label class="form-check-label">Spanduk / Banner</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_desain" value="Logo & Branding">
                <label class="form-check-label">Logo & Branding</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_desain" value="Desain UI/UX">
                <label class="form-check-label">Desain UI/UX</label>
            </div>
            <input class="form-control mt-2" placeholder="Lainnya..." name="jenis_desain">

            <h6 class="mt-3">2. Referensi Desain</h6>
            <input type="text" class="form-control" name="referensi">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-target="#modalDesainStep2" data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="modal fade" id="modalDesainStep2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Desain Grafis (2/3)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <h6>3. Warna dan Gaya</h6>
            <input type="text" class="form-control mb-3" name="warna_gaya" placeholder="Contoh: Warna dominan biru, gaya minimalis">

            <h6>4. Ukuran Desain</h6>
            <input type="text" class="form-control mb-3" name="ukuran" placeholder="Contoh: 1080x1350px, A4, dll">

            <h6>5. Teks atau Slogan</h6>
            <input type="text" class="form-control" name="teks_slogan">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-target="#modalDesainStep1" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary" data-bs-target="#modalDesainStep3" data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Step 3 -->
    <div class="modal fade" id="modalDesainStep3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Desain Grafis (3/3)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <h6>6. File Pendukung (opsional)</h6>
            <input type="file" class="form-control mb-3" name="file_pendukung">

            <h6>7. Catatan Tambahan</h6>
            <textarea class="form-control" name="catatan" rows="4" placeholder="Keterangan khusus dari Anda..."></textarea>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-target="#modalDesainStep2" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        </div>
    </div>
</form>


{{-- MODAL HARDWARE & NETWORK --}}
    <div class="modal fade" id="modalNetwork" tabindex="-1" aria-labelledby="modalNetworkLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalNetworkLabel">Hardware & Network</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Kami menyediakan jasa instalasi, konfigurasi, dan troubleshooting jaringan (LAN/WAN), server, perangkat keras komputer,
            serta pengamanan sistem IT.
        </div>
        <div class="modal-footer border-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" data-bs-target="#modalHardwareStep1" data-bs-toggle="modal" data-bs-dismiss="modal">Pesan Sekarang</button>
        </div>
        </div>
    </div>
    </div>

    <form id="hardwareForm">

    <!-- Step 1 -->
    <div class="modal fade" id="modalHardwareStep1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Hardware & Network (1/2)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nama Proyek</label>
                <input type="text" class="form-control" name="nama_proyek">
            </div>
            <div class="mb-3">
                <label class="form-label">Deadline</label>
                <input type="date" class="form-control" name="deadline">
            </div>

            <h6>1. Jenis Layanan</h6>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_layanan" value="Instalasi Jaringan">
                <label class="form-check-label">Instalasi Jaringan</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_layanan" value="Konfigurasi Server">
                <label class="form-check-label">Konfigurasi Server</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_layanan" value="Pengadaan Hardware">
                <label class="form-check-label">Pengadaan Hardware</label>
            </div>
            <input class="form-control mt-2" placeholder="Lainnya..." name="jenis_layanan">

            <h6 class="mt-3">2. Jumlah dan Skala</h6>
            <input type="text" class="form-control" name="jumlah_skala" placeholder="Contoh: 10 unit PC, 3 lantai jaringan">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-target="#modalHardwareStep2" data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="modal fade" id="modalHardwareStep2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Hardware & Network (2/2)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <h6>3. Lokasi Implementasi</h6>
            <input type="text" class="form-control mb-3" name="lokasi" placeholder="Alamat atau deskripsi lokasi">

            <h6>4. Catatan Tambahan</h6>
            <textarea class="form-control" name="catatan" rows="4" placeholder="Catatan teknis atau kebutuhan khusus..."></textarea>

            <h6 class="mt-3">5. Kontak PIC</h6>
            <input type="text" class="form-control" name="kontak_pic" placeholder="Nama dan nomor yang bisa dihubungi">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-target="#modalHardwareStep1" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        </div>
    </div>
</form>

{{-- MODAL CONSULTING --}}
    <div class="modal fade" id="modalConsulting" tabindex="-1" aria-labelledby="modalConsultingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalConsultingLabel">Consulting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Konsultasikan kebutuhan digital dan teknologi Anda bersama tim ahli kami. Kami membantu menyusun strategi,
            roadmap pengembangan sistem, hingga eksekusi implementasi.
        </div>
        <div class="modal-footer border-0">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" data-bs-target="#modalConsultingStep1" data-bs-toggle="modal" data-bs-dismiss="modal">Pesan Sekarang</button>
        </div>
        </div>
    </div>
    </div>

    <form id="consultingForm">

    <!-- Step 1 -->
    <div class="modal fade" id="modalConsultingStep1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Konsultasi IT (1/2)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nama Perusahaan / Instansi</label>
                <input type="text" class="form-control" name="nama_perusahaan">
            </div>
            <div class="mb-3">
                <label class="form-label">Tujuan Konsultasi</label>
                <textarea class="form-control" name="tujuan_konsultasi" rows="3" placeholder="Contoh: menyusun roadmap IT, audit sistem, dll"></textarea>
            </div>

            <h6>1. Area Fokus Konsultasi</h6>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fokus_konsultasi" value="Strategi Digital">
                <label class="form-check-label">Strategi Digital</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fokus_konsultasi" value="Pengembangan Sistem">
                <label class="form-check-label">Pengembangan Sistem</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="fokus_konsultasi" value="Keamanan IT">
                <label class="form-check-label">Keamanan IT</label>
            </div>
            <input class="form-control mt-2" placeholder="Lainnya..." name="fokus_konsultasi">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-target="#modalConsultingStep2" data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="modal fade" id="modalConsultingStep2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Checklist Konsultasi IT (2/2)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <h6>2. Jadwal Konsultasi yang Diinginkan</h6>
            <input type="text" class="form-control mb-3" name="jadwal" placeholder="Contoh: Minggu ke-3 bulan ini, jam kerja">

            <h6>3. Penanggung Jawab (PIC)</h6>
            <input type="text" class="form-control mb-3" name="pic" placeholder="Nama dan kontak PIC">

            <h6>4. Catatan Tambahan</h6>
            <textarea class="form-control" name="catatan" rows="4" placeholder="Masukkan pertanyaan atau informasi tambahan..."></textarea>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-target="#modalConsultingStep1" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        </div>
    </div>
</form>


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

<script type="text/javascript">
    emailjs.init("dkCXSs5nVE2UjlZjh");

    // Daftar semua form yang ingin ditangani
    const formIds = ['websiteForm', 'desainForm', 'hardwareForm', 'consultingForm'];

    formIds.forEach(formId => {
        const form = document.getElementById(formId);
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                emailjs.sendForm('service_pm9zo89', 'template_v43orgt', this)
                    .then(function (response) {
                        alert('Berhasil dikirim!');
                        console.log('SUCCESS!', response.status, response.text);
                        form.reset(); // Reset form setelah kirim
                    }, function (error) {
                        alert('Gagal mengirim, silakan coba lagi.');
                        console.error('FAILED...', error);
                    });
            });
        }
    });
</script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>

