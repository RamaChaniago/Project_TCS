@extends('Main')

@section('title')
    Home
@endsection

@section('content')
    <style>
        .hero-section {
            padding: 120px 0 80px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/hero-bg.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .program-card,
        .reason-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .program-card:hover,
        .reason-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .partner-logo {
            max-height: 40px;
            /* Ubah dari 60px ke 40px atau sesuaikan sesuai kebutuhan */
            width: auto;
            /* Pastikan tidak terdistorsi */
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
        }


        .promo-section {
            background-color: #f8f9fa;
        }

        .marquee {
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-content {
            display: inline-block;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset('assets/images/4.') }}');">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Tingkatkan Skor TOEFL Anda Bersama ToeflPCT</h1>
                    <p class="lead mb-4">Program persiapan TOEFL terlengkap dengan metodologi terbukti dan instruktur
                        berpengalaman.</p>
                    <div class="hero-buttons">
                        <a href="#courses" class="btn btn-primary me-3 mb-3 mb-md-0">Jelajahi Program</a>
                        <a href="#" class="btn btn-outline-primary mb-3 mb-md-0">Konsultasi Gratis</a>
                    </div>
                    <div class="mt-4 d-flex align-items-center">
                        <div class="rating me-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <div>
                            <p class="mb-0">4.9/5 Rating dari <span class="fw-bold">12,000+</span> Siswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-image text-center">
                        <img src="{{ asset('assets/images/speakout1.png') }}" alt="TOEFL Preparation" class="img-fluid" width="75%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Learning Options Section -->
    <section class="program-options py-5" id="courses">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Pilihan Program Belajar</h2>
                <p class="lead">Pilih program yang sesuai dengan kebutuhan dan jadwal Anda</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card program-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-laptop fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Live Class</h3>
                            <p class="card-text">Belajar bersama instruktur profesional dalam kelas virtual interaktif.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card program-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-user-graduate fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">One on One</h3>
                            <p class="card-text">Pembelajaran private dengan instruktur yang fokus pada kebutuhan Anda.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card program-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-certificate fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Certification Test</h3>
                            <p class="card-text">Persiapkan dan ambil ujian TOEFL dengan pengawasan resmi.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card program-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-box-open fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Learning Package</h3>
                            <p class="card-text">Paket belajar lengkap dengan materi dan latihan terpadu.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card program-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-book-reader fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Smart Book</h3>
                            <p class="card-text">E-book interaktif dengan panduan dan tips meningkatkan skor TOEFL.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card program-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mx-auto mb-4">
                                <i class="fas fa-sync-alt fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Subscription</h3>
                            <p class="card-text">Akses seluruh materi pembelajaran dengan langganan bulanan.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recommended Programs Section -->
    <section class="recommended-programs py-5 bg-light">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Program Rekomendasi Terbaik</h2>
                <p class="lead">Program unggulan dengan tingkat keberhasilan tertinggi</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card course-card h-100">
                        <div class="course-image">
                            <img src="{{ asset('img/course-1.jpg') }}" alt="TOEFL Intensive" class="img-fluid">
                            <div class="course-tag">Terlaris</div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-primary">Live Class</span>
                                <div class="course-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>4.9 (356)</span>
                                </div>
                            </div>
                            <h4 class="card-title">TOEFL Intensive Preparation</h4>
                            <p class="card-text">Program intensif 4 minggu untuk persiapan TOEFL dengan target skor 550+.
                            </p>
                            <div class="course-info d-flex justify-content-between py-3">
                                <div><i class="far fa-clock me-1"></i> 32 Jam</div>
                                <div><i class="fas fa-user-friends me-1"></i> 20 Peserta</div>
                            </div>
                            <div class="course-price d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted">Rp 2.500.000</span>
                                    <h5 class="mb-0 text-primary">Rp 1.999.000</h5>
                                </div>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card course-card h-100">
                        <div class="course-image">
                            <img src="{{ asset('img/course-2.jpg') }}" alt="TOEFL Weekend" class="img-fluid">
                            <div class="course-tag bg-success">New</div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-info">Weekend Class</span>
                                <div class="course-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>4.8 (128)</span>
                                </div>
                            </div>
                            <h4 class="card-title">TOEFL Weekend Program</h4>
                            <p class="card-text">Program weekend 8 minggu khusus untuk professional dan mahasiswa sibuk.
                            </p>
                            <div class="course-info d-flex justify-content-between py-3">
                                <div><i class="far fa-clock me-1"></i> 24 Jam</div>
                                <div><i class="fas fa-user-friends me-1"></i> 15 Peserta</div>
                            </div>
                            <div class="course-price d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted">Rp 2.300.000</span>
                                    <h5 class="mb-0 text-primary">Rp 1.799.000</h5>
                                </div>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card course-card h-100">
                        <div class="course-image">
                            <img src="{{ asset('img/course-3.jpg') }}" alt="TOEFL Private" class="img-fluid">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="badge bg-warning text-dark">One on One</span>
                                <div class="course-rating">
                                    <i class="fas fa-star text-warning"></i>
                                    <span>5.0 (92)</span>
                                </div>
                            </div>
                            <h4 class="card-title">TOEFL Private Coaching</h4>
                            <p class="card-text">Bimbingan intensif one-on-one dengan instruktur berpengalaman untuk hasil
                                maksimal.</p>
                            <div class="course-info d-flex justify-content-between py-3">
                                <div><i class="far fa-clock me-1"></i> 16 Jam</div>
                                <div><i class="fas fa-user-friends me-1"></i> 1 Peserta</div>
                            </div>
                            <div class="course-price d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted">Rp 3.500.000</span>
                                    <h5 class="mb-0 text-primary">Rp 2.999.000</h5>
                                </div>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="#" class="btn btn-outline-primary">Lihat Semua Kelas</a>
            </div>
        </div>
    </section>

    <!-- Lembaga dan Instansi -->
    <!-- Partners Section -->
    <section class="partners-section py-5">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Lembaga dan Instansi yang Telah Menggunakan Layanan Kami</h2>
                <p class="lead">Dipercaya oleh institusi terkemuka di Indonesia</p>
            </div>
            <div class="logo-carousel owl-carousel" data-aos="fade-up">
                <div class="item text-center">
                    <img src="{{ asset('img/partners/partner-1.png') }}" alt="Partner Logo"
                        class="img-fluid partner-logo">
                </div>
                <div class="item text-center">
                    <img src="{{ asset('img/partners/partner-2.png') }}" alt="Partner Logo"
                        class="img-fluid partner-logo">
                </div>
                <div class="item text-center">
                    <img src="{{ asset('img/partners/partner-3.png') }}" alt="Partner Logo"
                        class="img-fluid partner-logo">
                </div>
                <div class="item text-center">
                    <img src="{{ asset('img/partners/partner-4.png') }}" alt="Partner Logo"
                        class="img-fluid partner-logo">
                </div>
                <div class="item text-center">
                    <img src="{{ asset('img/partners/partner-5.png') }}" alt="Partner Logo"
                        class="img-fluid partner-logo">
                </div>
                <div class="item text-center">
                    <img src="{{ asset('img/partners/partner-6.png') }}" alt="Partner Logo"
                        class="img-fluid partner-logo">
                </div>
            </div>

        </div>
    </section>

    <!-- Special Promo Section -->
    <section class="promo-section py-5 bg-light">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Today's Special Promo</h2>
                <p class="lead">Penawaran spesial dengan waktu terbatas</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card promo-card h-100 border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="{{ asset('img/promo-1.jpg') }}" alt="Promo Package" class="img-fluid h-100"
                                    style="object-fit: cover;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <span class="badge bg-danger mb-2">Limited Offer</span>
                                    <h3 class="card-title">TOEFL Prep + Mock Test</h3>
                                    <p class="card-text">Dapatkan akses ke materi persiapan TOEFL lengkap dan 3x mock test
                                        dengan diskon 30%.</p>
                                    <div class="promo-timer mb-3">
                                        <span class="text-danger"><i class="far fa-clock me-1"></i> Berakhir dalam
                                            23:59:59</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">Rp 1.500.000</span>
                                            <h4 class="mb-0 text-primary">Rp 999.000</h4>
                                        </div>
                                        <a href="#" class="btn btn-primary">Ambil Promo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                    <div class="card promo-card h-100 border-0 shadow-sm">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="{{ asset('img/promo-2.jpg') }}" alt="Promo Package" class="img-fluid h-100"
                                    style="object-fit: cover;">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <span class="badge bg-warning text-dark mb-2">Flash Sale</span>
                                    <h3 class="card-title">3-Month Subscription</h3>
                                    <p class="card-text">Berlangganan 3 bulan dan dapatkan akses ke seluruh materi dan
                                        kelas dengan harga spesial.</p>
                                    <div class="promo-timer mb-3">
                                        <span class="text-danger"><i class="far fa-clock me-1"></i> Berakhir dalam
                                            11:45:30</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">Rp 2.750.000</span>
                                            <h4 class="mb-0 text-primary">Rp 1.875.000</h4>
                                        </div>
                                        <a href="#" class="btn btn-primary">Ambil Promo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-us-section py-5">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Kenapa Harus Memilih Kami</h2>
                <p class="lead">Keunggulan ToeflPCT sebagai partner belajar TOEFL Anda</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card why-us-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-user-tie fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Instruktur Berpengalaman</h3>
                            <p class="card-text">Tim pengajar kami terdiri dari lulusan universitas terkemuka dengan skor
                                TOEFL minimal 600 dan berpengalaman mengajar selama 5+ tahun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card why-us-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-book fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Materi Terkini</h3>
                            <p class="card-text">Materi pembelajaran kami selalu diperbarui mengikuti perkembangan terbaru
                                ujian TOEFL dengan contoh soal autentik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card why-us-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-chart-line fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Tingkat Keberhasilan Tinggi</h3>
                            <p class="card-text">95% siswa kami berhasil mencapai target skor TOEFL mereka dengan
                                peningkatan rata-rata 80-100 poin setelah mengikuti program.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card why-us-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-tools fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Metodologi Terbukti</h3>
                            <p class="card-text">Metode pembelajaran kami dirancang khusus untuk meningkatkan kemampuan
                                siswa di empat aspek TOEFL: listening, reading, speaking, dan writing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card why-us-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-headset fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Dukungan 24/7</h3>
                            <p class="card-text">Tim customer support dan tutor kami siap membantu Anda sepanjang
                                perjalanan belajar kapanpun dibutuhkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card why-us-card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="icon-box mb-4">
                                <i class="fas fa-medal fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title">Garansi Kepuasan</h3>
                            <p class="card-text">Kami memberikan garansi kepuasan dengan jaminan uang kembali jika Anda
                                tidak puas dengan layanan kami dalam 7 hari pertama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner Section -->
    <section class="cta-banner py-5"
        style="background-image: url('{{ asset('img/cta-bg.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white" data-aos="fade-up">
                    <h2 class="display-5 fw-bold mb-4">Siap Meningkatkan Skor TOEFL Anda?</h2>
                    <p class="lead mb-4">Bergabunglah dengan 25,000+ siswa yang telah sukses dengan ToeflPCT</p>
                    <div class="cta-buttons">
                        <a href="#" class="btn btn-primary btn-lg me-3 mb-3 mb-md-0">Mulai Sekarang</a>
                        <a href="#" class="btn btn-outline-light btn-lg mb-3 mb-md-0">Jadwalkan Konsultasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5 bg-light">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Pertanyaan yang Sering Diajukan</h2>
                <p class="lead">Jawaban untuk pertanyaan umum tentang program TOEFL kami</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Apakah ToeflPCT menyediakan sertifikat TOEFL resmi?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, ToeflPCT adalah mitra resmi ETS (Educational Testing Service) dan menyediakan
                                    layanan tes TOEFL ITP resmi dengan sertifikat yang diakui secara internasional. Kami
                                    juga menyediakan program persiapan untuk TOEFL iBT yang diselenggarakan langsung oleh
                                    ETS.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Berapa lama waktu yang dibutuhkan untuk meningkatkan skor TOEFL?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Waktu yang dibutuhkan bervariasi tergantung pada tingkat kemampuan awal dan target skor
                                    yang ingin dicapai. Secara umum, siswa kami mengalami peningkatan signifikan dalam 1-3
                                    bulan dengan program intensif. Kami menyediakan assessment awal untuk menentukan program
                                    yang paling sesuai dengan kebutuhan Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Apakah ada jaminan peningkatan skor?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, kami menawarkan program dengan jaminan peningkatan skor. Jika skor Anda tidak
                                    meningkat setelah menyelesaikan program, Anda berhak mengulang program secara gratis.
                                    Syarat dan ketentuan berlaku, termasuk kehadiran minimal 90% dan penyelesaian seluruh
                                    tugas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana format pembelajaran online di ToeflPCT?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pembelajaran online di ToeflPCT dilakukan melalui platform interaktif dengan fitur
                                    video conferencing, digital whiteboard, dan learning management system. Kami menggunakan
                                    metodologi synchronous (live class) dan asynchronous (materi rekaman dan tugas mandiri)
                                    untuk memaksimalkan hasil belajar.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Apakah ada diskon untuk grup atau institusi?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya, kami menyediakan paket khusus dengan harga spesial untuk grup (minimal 5 orang) dan
                                    institusi. Hubungi tim sales kami untuk mendapatkan penawaran yang disesuaikan dengan
                                    kebutuhan organisasi Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Berapa biaya untuk mengikuti tes TOEFL resmi?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Biaya tes TOEFL ITP di ToeflPCT adalah Rp 750.000, sudah termasuk sertifikat resmi.
                                    Untuk TOEFL iBT, biaya berkisar antara $180-200 USD (setara Rp 2.700.000 - Rp 3.000.000)
                                    yang dibayarkan langsung ke ETS. Kami juga menawarkan paket bundling persiapan + tes
                                    dengan harga lebih ekonomis.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured In Section -->
    <section class="featured-section py-5">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Telah Diliput Oleh</h2>
                <p class="lead">Media dan publikasi yang telah membahas ToeflPCT</p>
            </div>
            <div class="media-logos py-3" data-aos="fade-up">
                <div class="marquee">
                    <div class="marquee-content">
                        <img src="{{ asset('img/media/media-1.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-2.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-3.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-4.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-5.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-6.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-7.png') }}" alt="Media Logo" class="img-fluid mx-4">
                        <img src="{{ asset('img/media/media-8.png') }}" alt="Media Logo" class="img-fluid mx-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Banner Section -->
    <section class="final-cta-banner py-5"
        style="background-image: url('{{ asset('img/final-cta-bg.jpg') }}'); background-size: cover; background-position: center;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 text-white mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="display-5 fw-bold mb-4">Dapatkan Konsultasi Gratis</h2>
                    <p class="lead mb-4">Konsultasikan kebutuhan dan target TOEFL Anda dengan pakar kami. Kami akan
                        membantu menemukan program yang paling sesuai.</p>
                    <div class="d-flex flex-wrap">
                        <a href="#" class="btn btn-light btn-lg me-3 mb-3">Jadwalkan Sekarang</a>
                        <a href="#" class="btn btn-outline-light btn-lg mb-3">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-4">
                            <h3 class="text-center mb-4">Mulai Perjalanan TOEFL Anda</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Masukkan email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Nomor WhatsApp</label>
                                    <input type="tel" class="form-control" id="phone"
                                        placeholder="Masukkan nomor WhatsApp">
                                </div>
                                <div class="mb-3">
                                    <label for="program" class="form-label">Program yang Diminati</label>
                                    <select class="form-select" id="program">
                                        <option selected>Pilih program</option>
                                        <option value="1">TOEFL Intensive Preparation</option>
                                        <option value="2">TOEFL Weekend Program</option>
                                        <option value="3">TOEFL Private Coaching</option>
                                        <option value="4">TOEFL Certificate Test</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Kirim Permintaan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section py-5">
        <div class="container py-4">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Blog & Artikel Terbaru</h2>
                <p class="lead">Tips, trik, dan informasi seputar TOEFL dan bahasa Inggris</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel owl-carousel">
                        <div class="card blog-card border-0 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/blog/blog-1.jpg') }}" alt="Blog Image" class="card-img-top">
                            <div class="card-body p-4">
                                <div class="card-meta d-flex justify-content-between mb-3">
                                    <span><i class="far fa-calendar-alt me-1"></i> 15 Mar 2025</span>
                                    <span><i class="far fa-comments me-1"></i> 24</span>
                                </div>
                                <h4 class="card-title">10 Strategi Jitu Meningkatkan Skor TOEFL Reading</h4>
                                <p class="card-text">Pelajari teknik membaca cepat dan efektif untuk menguasai seksi
                                    reading TOEFL dengan mudah.</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="card blog-card border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('img/blog/blog-2.jpg') }}" alt="Blog Image" class="card-img-top">
                            <div class="card-body p-4">
                                <div class="card-meta d-flex justify-content-between mb-3">
                                    <span><i class="far fa-calendar-alt me-1"></i> 10 Mar 2025</span>
                                    <span><i class="far fa-comments me-1"></i> 18</span>
                                </div>
                                <h4 class="card-title">Cara Efektif Mempersiapkan TOEFL Speaking</h4>
                                <p class="card-text">Tips dan latihan praktis untuk menghadapi bagian speaking yang sering
                                    dianggap paling menantang.</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="card blog-card border-0 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/blog/blog-3.jpg') }}" alt="Blog Image" class="card-img-top">
                            <div class="card-body p-4">
                                <div class="card-meta d-flex justify-content-between mb-3">
                                    <span><i class="far fa-calendar-alt me-1"></i> 5 Mar 2025</span>
                                    <span><i class="far fa-comments me-1"></i> 32</span>
                                </div>
                                <h4 class="card-title">Perbedaan TOEFL ITP, IBT, dan PBT: Mana yang Tepat untuk Anda?</h4>
                                <p class="card-text">Memahami karakteristik, format, dan kegunaan dari berbagai jenis tes
                                    TOEFL.</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="card blog-card border-0 shadow-sm" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{ asset('img/blog/blog-4.jpg') }}" alt="Blog Image" class="card-img-top">
                            <div class="card-body p-4">
                                <div class="card-meta d-flex justify-content-between mb-3">
                                    <span><i class="far fa-calendar-alt me-1"></i> 28 Feb 2025</span>
                                    <span><i class="far fa-comments me-1"></i> 15</span>
                                </div>
                                <h4 class="card-title">7 Kesalahan Umum dalam TOEFL Writing dan Cara Menghindarinya</h4>
                                <p class="card-text">Hindari kesalahan-kesalahan klasik yang sering mengurangi skor writing
                                    Anda secara signifikan.</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i
                                        class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <a href="#" class="btn btn-outline-primary">Lihat Semua Artikel</a>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/logo_speakout.png') }}" alt="ToeflPCT Logo" class="mb-4" width="150">
                    <p>ToeflPCT adalah platform belajar bahasa Inggris dan persiapan TOEFL terkemuka di Indonesia dengan
                        berbagai program yang disesuaikan untuk kebutuhan Anda.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5>Program Kami</h5>
                    <ul>
                        <li><a href="#">Live Class</a></li>
                        <li><a href="#">One on One</a></li>
                        <li><a href="#">Certification Test</a></li>
                        <li><a href="#">Learning Package</a></li>
                        <li><a href="#">Smart Book</a></li>
                        <li><a href="#">Subscription</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5>Tentang Kami</h5>
                    <ul>
                        <li><a href="#">Profil Perusahaan</a></li>
                        <li><a href="#">Tim Pengajar</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Hubungi Kami</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jl. HR. Rasuna Said Kav. C-22, Jakarta Selatan</li>
                        <li><i class="fas fa-phone-alt me-2"></i> (021) 5229-2000</li>
                        <li><i class="fas fa-envelope me-2"></i> info@ToeflPCT.com</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-light">Konsultasi Gratis</a>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="col-md-6">
                    <p>&copy; 2025 ToeflPCT. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p><a href="#" class="text-white">Terms of Service</a> | <a href="#"
                            class="text-white">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>
