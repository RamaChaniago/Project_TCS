@extends('Main')

@section('title', 'TOEFL Academy - Persiapan TOEFL Terbaik di Indonesia')
Home
@endsection

@section('content')
<style>
    .hero-section {
        padding-top: 120px;
        padding-bottom: 80px;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/hero-bg.jpg') }}');
        background-size: cover;
        background-position: center;
    }

    .program-card {
        transition: all 0.3s ease;
    }

    .program-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .reason-card {
        height: 100%;
        transition: all 0.3s ease;
    }

    .reason-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .partner-logo {
        max-height: 60px;
        filter: grayscale(100%);
        transition: all 0.3s ease;
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

<!-- Include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- 1. Hero/CTA Section -->
<section class="hero-section text-white text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">Tingkatkan Skor TOEFL Anda Bersama Kami</h1>
                <p class="lead mb-5">Solusi pembelajaran TOEFL terbaik dengan metode yang terbukti dan tutor
                    berpengalaman. Raih impian Anda untuk studi di luar negeri.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="#program" class="btn btn-primary rounded-pill px-5 py-3 me-md-2 fw-bold">Mulai Belajar</a>
                    <a href="#" class="btn btn-outline-light rounded-pill px-5 py-3 fw-bold">Konsultasi Gratis</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Pilihan Program Belajar -->
<section class="py-5" id="program">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold">Pilihan Program Belajar</h2>
                <p class="lead">Pilih program belajar yang sesuai dengan kebutuhan dan gaya belajar Anda</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4 col-lg-2">
                <div class="card h-100 border-0 shadow-sm program-card text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-video fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Live Class</h5>
                        <p class="card-text small">Belajar langsung dengan tutor secara online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="card h-100 border-0 shadow-sm program-card text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-user-friends fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">One on One</h5>
                        <p class="card-text small">Belajar privat dengan tutor pilihan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="card h-100 border-0 shadow-sm program-card text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-certificate fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Certification Test</h5>
                        <p class="card-text small">Simulasi tes TOEFL sesuai standar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="card h-100 border-0 shadow-sm program-card text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-box fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Learning Package</h5>
                        <p class="card-text small">Paket belajar lengkap dan hemat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="card h-100 border-0 shadow-sm program-card text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-book fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Smart Book</h5>
                        <p class="card-text small">E-book dan materi belajar premium</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2">
                <div class="card h-100 border-0 shadow-sm program-card text-center">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-sync-alt fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Subscription</h5>
                        <p class="card-text small">Akses semua materi dengan berlangganan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Program Rekomendasi Terbaik -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold">Program Rekomendasi Terbaik</h2>
                <p class="lead">Program yang paling diminati dan direkomendasikan oleh alumni kami</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/program-1.jpg') }}" class="card-img-top" alt="Program 1">
                        <span class="position-absolute top-0 end-0 badge bg-danger m-3">Best Seller</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">TOEFL Preparation Intensive</h5>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary fw-bold">Rp1.500.000</span>
                            <div>
                                <span class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </span>
                                <span class="ms-1">4.8</span>
                            </div>
                        </div>
                        <p class="card-text">Kursus intensif 2 bulan untuk meningkatkan skor TOEFL hingga 100+ point.
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-users me-2"></i>500+ Siswa</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/program-2.jpg') }}" class="card-img-top" alt="Program 2">
                        <span class="position-absolute top-0 end-0 badge bg-info m-3">New</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">One-on-One TOEFL Coaching</h5>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary fw-bold">Rp2.500.000</span>
                            <div>
                                <span class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                <span class="ms-1">5.0</span>
                            </div>
                        </div>
                        <p class="card-text">Kursus privat dengan tutor profesional yang menyesuaikan dengan kebutuhan
                            Anda.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-users me-2"></i>250+ Siswa</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/program-3.jpg') }}" class="card-img-top" alt="Program 3">
                        <span class="position-absolute top-0 end-0 badge bg-warning m-3">Popular</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">TOEFL Complete Package</h5>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary fw-bold">Rp2.200.000</span>
                            <div>
                                <span class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                                <span class="ms-1">4.5</span>
                            </div>
                        </div>
                        <p class="card-text">Paket lengkap dengan akses live class, materi, dan simulasi tes selama 3
                            bulan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-users me-2"></i>350+ Siswa</span>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/kursus" class="btn btn-primary rounded-pill px-4 py-2">Lihat Semua Kelas</a>
        </div>
    </div>
</section>

<!-- 4. Lembaga dan Instansi -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Lembaga dan Instansi yang Telah Bekerja Sama</h2>
            <p class="lead">Dipercaya oleh berbagai universitas dan lembaga terkemuka</p>
        </div>
        <div class="row align-items-center justify-content-center g-4">
            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('images/university-1.png') }}" alt="Partner Logo" class="img-fluid partner-logo">
            </div>
            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('images/university-2.png') }}" alt="Partner Logo" class="img-fluid partner-logo">
            </div>
            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('images/university-3.png') }}" alt="Partner Logo" class="img-fluid partner-logo">
            </div>
            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('images/university-4.png') }}" alt="Partner Logo" class="img-fluid partner-logo">
            </div>
            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('images/university-5.png') }}" alt="Partner Logo" class="img-fluid partner-logo">
            </div>
            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('images/university-6.png') }}" alt="Partner Logo" class="img-fluid partner-logo">
            </div>
        </div>
    </div>
</section>

<!-- 5. Today's Special Promo -->
<section class="py-5 promo-section">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold">Today's Special Promo</h2>
                <p class="lead">Dapatkan penawaran spesial hanya untuk hari ini</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="{{ asset('images/promo.jpg') }}" class="img-fluid h-100 object-fit-cover"
                                alt="Promo">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body p-4 p-lg-5">
                                <div class="mb-4">
                                    <span class="badge bg-danger p-2 mb-2">Limited Offer</span>
                                    <h3 class="card-title fw-bold">Paket TOEFL Complete Course</h3>
                                    <p class="text-muted">Berakhir dalam:</p>
                                    <div class="d-flex gap-2 my-3">
                                        <div class="bg-primary text-white p-2 px-3 rounded">
                                            <span id="hours">24</span>
                                        </div>
                                        <div class="bg-primary text-white p-2 px-3 rounded">
                                            <span id="minutes">00</span>
                                        </div>
                                        <div class="bg-primary text-white p-2 px-3 rounded">
                                            <span id="seconds">00</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="card-text">Dapatkan akses ke semua kursus TOEFL kami selama 6 bulan dengan
                                    diskon 40%.</p>
                                <div class="d-flex align-items-center mb-4">
                                    <span class="text-decoration-line-through text-muted me-2">Rp3.500.000</span>
                                    <span class="text-primary fs-3 fw-bold">Rp2.100.000</span>
                                </div>
                                <a href="#" class="btn btn-primary rounded-pill w-100 py-3 fw-bold">Ambil Promo
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. Kenapa Harus Memilih Kami -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold">Kenapa Harus Memilih Kami?</h2>
                <p class="lead">6 alasan mengapa kami adalah pilihan terbaik untuk persiapan TOEFL Anda</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm reason-card p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-user-tie fa-3x"></i>
                    </div>
                    <h4 class="card-title mb-3">Tutor Berpengalaman</h4>
                    <p class="card-text">Semua tutor kami memiliki sertifikasi dan pengalaman mengajar lebih dari 5
                        tahun dengan skor TOEFL minimal 600.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm reason-card p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-book-open fa-3x"></i>
                    </div>
                    <h4 class="card-title mb-3">Materi Terlengkap</h4>
                    <p class="card-text">Materi pembelajaran yang selalu diperbarui sesuai dengan format dan standar
                        tes TOEFL terbaru.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm reason-card p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-laptop fa-3x"></i>
                    </div>
                    <h4 class="card-title mb-3">Platform Modern</h4>
                    <p class="card-text">Akses belajar kapan saja dan di mana saja melalui platform digital yang mudah
                        digunakan dan responsif.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm reason-card p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                    <h4 class="card-title mb-3">Progress Terukur</h4>
                    <p class="card-text">Pantau kemajuan belajar Anda melalui analisis performa dan skor simulasi test
                        secara berkala.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm reason-card p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h4 class="card-title mb-3">Komunitas Belajar</h4>
                    <p class="card-text">Bergabung dengan komunitas belajar untuk diskusi, berbagi pengalaman, dan
                        praktik speaking.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm reason-card p-4">
                    <div class="mb-3 text-primary">
                        <i class="fas fa-medal fa-3x"></i>
                    </div>
                    <h4 class="card-title mb-3">Jaminan Hasil</h4>
                    <p class="card-text">Jaminan kenaikan skor minimal 50 point atau uang kembali 100% untuk program
                        intensive kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Banner dan CTA -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Mulai Persiapan TOEFL Anda Hari Ini</h2>
                <p class="lead mb-4">Jangan tunda lagi impian Anda untuk studi di luar negeri atau karir internasional.
                    Mulai persiapan TOEFL Anda bersama kami sekarang!</p>
                <a href="/register" class="btn btn-light btn-lg rounded-pill px-5 py-3 text-primary fw-bold">Daftar
                    Sekarang</a>
            </div>
        </div>
    </div>
</section>

<!-- 8. FAQ -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
                <p class="lead">Pertanyaan yang sering ditanyakan oleh calon siswa kami</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h3 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Berapa lama waktu yang dibutuhkan untuk persiapan TOEFL?
                            </button>
                        </h3>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Waktu yang dibutuhkan untuk persiapan TOEFL bervariasi tergantung pada kemampuan awal
                                    dan target skor Anda. Secara umum, kami merekomendasikan persiapan minimal 2-3 bulan
                                    dengan belajar rutin 1-2 jam setiap hari. Program intensif kami dirancang untuk
                                    membantu Anda mencapai peningkatan skor yang signifikan dalam waktu 8 minggu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h3 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Apakah ada jaminan kenaikan skor?
                            </button>
                        </h3>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Ya, untuk program intensive kami memberikan jaminan kenaikan skor minimal 50 point
                                    dari skor awal Anda atau uang kembali 100%. Syarat dan ketentuan berlaku, termasuk
                                    kehadiran minimal 90% dan penyelesaian semua tugas yang diberikan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h3 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Apakah bisa belajar meskipun memiliki kesibukan?
                            </button>
                        </h3>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Tentu saja! Kami menawarkan berbagai program yang fleksibel untuk menyesuaikan dengan
                                    jadwal Anda. Program subscription dan smart book kami memungkinkan Anda belajar
                                    kapan saja dan di mana saja. Untuk live class, kami menyediakan rekaman sesi yang
                                    bisa Anda akses jika tidak bisa hadir secara langsung.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h3 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Apa perbedaan TOEFL iBT dan TOEFL ITP?
                            </button>
                        </h3>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>TOEFL iBT (Internet-Based Test) adalah tes yang dilakukan secara online dan mencakup
                                    4 skill: Reading, Listening, Speaking, dan Writing. Sementara TOEFL ITP
                                    (Institutional Testing Program) adalah tes berbasis kertas yang hanya mencakup 3
                                    skill: Reading, Listening, dan Structure. TOEFL iBT lebih diakui secara
                                    internasional, sementara TOEFL ITP biasanya digunakan untuk keperluan institusi
                                    tertentu. Kami menyediakan persiapan untuk kedua jenis tes tersebut.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h3 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Metode pembayaran apa saja yang tersedia?
                            </button>
                        </h3>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Kami menerima berbagai metode pembayaran seperti transfer bank, kartu kredit/debit,
                                    e-wallet (GoPay, OVO, Dana), dan cicilan 0% untuk beberapa bank tertentu. Kami juga
                                    menawarkan opsi pembayaran bertahap untuk program tertentu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h3 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Apakah ada diskon untuk group atau institusi?
                            </button>
                        </h3>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>Ya, kami menyediakan paket khusus dan diskon untuk pendaftaran grup (minimal 3 orang)
                                    atau kerjasama dengan institusi. Silakan hubungi tim kami untuk informasi lebih
                                    lanjut dan penawaran khusus yang dapat kami berikan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. Telah Diliput Oleh -->
<section class="py-4 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="h4 fw-bold">Telah Diliput Oleh</h2>
        </div>
        <div class="marquee">
            <div class="marquee-content">
                <img src="{{ asset('images/media-1.png') }}" alt="Media Logo" class="mx-4 partner-logo"
                    style="max-height: 30px;">
                <img src="{{ asset('images/media-2.png') }}" alt="Media Logo" class="mx-4 partner-logo"
                    style="max-height: 30px;">
                <img src="{{ asset('images/media-3.png') }}" alt="Media Logo" class="mx-4 partner-logo"
                    style="max-height: 30px;">
                <img src="{{ asset('images/media-4.png') }}" alt="Media Logo" class="mx-4 partner-logo"
                    style="max-height: 30px;">
                <img src="{{ asset('images/media-5.png') }}" alt="Media Logo" class="mx-4 partner-logo"
                    style="max-height: 30px;">
                <img src="{{ asset('images/media-6.png') }}" alt="Media Logo" class="mx-4 partner-logo"
                    style="max-height: 30px;">
            </div>
        </div>
    </div>
</section>

<!-- 10. Banner dan CTA -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold">Dapatkan Konsultasi Gratis</h2>
                <p class="lead">Konsultasikan kebutuhan dan target TOEFL Anda dengan tim ahli kami. Kami akan
                    membantu Anda memilih program yang tepat.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-primary rounded-pill px-4 py-2 me-2">Jadwalkan Konsultasi</a>
                    <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/consultation.jpg') }}" alt="Konsultasi" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- 11. Blog -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-lg-8 mx-auto">
                <h2 class="display-5 fw-bold">Blog dan Artikel</h2>
                <p class="lead">Tips dan informasi terbaru seputar TOEFL dan belajar bahasa Inggris</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/blog-1.jpg') }}" class="card-img-top" alt="Blog 1">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-primary">TOEFL Tips</span>
                            <small class="text-muted">22 Mar 2025</small>
                        </div>
                        <h5 class="card-title">10 Strategi Jitu Menghadapi TOEFL Reading Section</h5>
                        <p class="card-text">Tingkatkan skor reading section Anda dengan 10 strategi yang telah
                            terbukti efektif untuk menghemat waktu dan meningkatkan akurasi.</p>
                        <a href="#" class="btn btn-link text-primary p-0">Baca selengkapnya <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/blog-2.jpg') }}" class="card-img-top" alt="Blog 2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-success">Study Abroad</span>
                            <small class="text-muted">18 Mar 2025</small>
                        </div>
                        <h5 class="card-title">5 Universitas Top yang Menerima Skor TOEFL Minimum</h5>
                        <p class="card-text">Daftar universitas terkemuka di luar negeri yang menerima aplikasi dengan
                            skor TOEFL minimal untuk program S1 dan S2.</p>
                        <a href="#" class="btn btn-link text-primary p-0">Baca selengkapnya <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/blog-3.jpg') }}" class="card-img-top" alt="Blog 3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-warning text-dark">Speaking</span>
                            <small class="text-muted">15 Mar 2025</small>
                        </div>
                        <h5 class="card-title">Cara Efektif Meningkatkan Kemampuan Speaking dalam 30 Hari</h5>
                        <p class="card-text">Panduan langkah demi langkah untuk meningkatkan skor speaking TOEFL Anda
                            hanya dalam 30 hari dengan latihan harian.</p>
                        <a href="#" class="btn btn-link text-primary p-0">Baca selengkapnya <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/blog" class="btn btn-outline-primary rounded-pill px-4 py-2">Lihat Semua Artikel</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <img src="/images/toefl-logo-white.png" alt="TOEFL Academy Logo" class="h-10 mb-4">
                <p class="text-gray-400 mb-4">TOEFL Academy adalah platform pembelajaran bahasa Inggris terdepan dengan
                    fokus pada persiapan TOEFL.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Program</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Live Class</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">One on One</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Certification
                            Test</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Learning
                            Package</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Smart Book</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Subscription</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Perusahaan</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</a>
                    </li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Karir</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Partner</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Hubungi Kami</a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-2 text-indigo-400"></i>
                        <span class="text-gray-400">Jl. Pendidikan No. 123, Jakarta Selatan, Indonesia</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt mt-1 mr-2 text-indigo-400"></i>
                        <span class="text-gray-400">+62 21 1234 5678</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-2 text-indigo-400"></i>
                        <span class="text-gray-400">info@toeflacademy.id</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-gray-800 my-8">

        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400">&copy; 2025 TOEFL Academy. All rights reserved.</p>
            <div class="mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-white transition-colors mx-2">Syarat &
                    Ketentuan</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors mx-2">Kebijakan
                    Privasi</a>
            </div>
        </div>
    </div>
</footer>
@endsection
