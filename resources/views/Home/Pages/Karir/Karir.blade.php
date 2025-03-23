@extends('Main')

@section('title')
    Karir
@endsection

<style>
    /* Career Page Specific Styles */

/* Hero Section */
.career-hero {
    background-color: #f8f9fa;
    padding: 80px 0;
    position: relative;
    overflow: hidden;
}

.career-hero h1 {
    font-weight: 700;
    color: #0d1b2a;
    margin-bottom: 1.5rem;
}

.career-hero .img-fluid {
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.career-hero .img-fluid:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

/* Why Join Us Section */
.why-join-us .card {
    border-radius: 15px;
    transition: all 0.3s ease;
    height: 100%;
}

.why-join-us .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
}

.why-join-us .rounded-circle {
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

/* Our Values Section */
.our-values {
    background-color: #f8f9fa;
}

.our-values .accordion-button:not(.collapsed) {
    background-color: #f0f7ff;
    color: #0066cc;
    box-shadow: none;
}

.our-values .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0, 102, 204, 0.1);
}

.our-values .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230066cc'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

/* Benefits Section */
.benefits .rounded-circle {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefits .d-flex {
    margin-bottom: 30px;
}

.benefits .d-flex:hover i {
    transform: scale(1.2);
    transition: all 0.3s ease;
}

/* Open Positions Section */
.open-positions {
    background-color: #f8f9fa;
}

.open-positions .card {
    border-radius: 15px;
    transition: all 0.3s ease;
}

.open-positions .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
}

.open-positions .badge {
    font-size: 0.8rem;
    font-weight: 500;
    letter-spacing: 0.5px;
}

/* Team Testimonials Section */
.testimonial-carousel .testimonial-item {
    transition: all 0.3s ease;
    margin: 15px;
}

.testimonial-carousel .testimonial-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
}

.testimonial-carousel .owl-item {
    padding: 15px 0;
}

.testimonial-carousel .owl-dots {
    text-align: center;
    margin-top: 20px;
}

.testimonial-carousel .owl-dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0 5px;
    background: #dddddd;
    border-radius: 50%;
}

.testimonial-carousel .owl-dot.active {
    background: #0066cc;
}

/* Application Process Section */
.timeline {
    position: relative;
    padding: 40px 0;
}

.timeline:before {
    content: '';
    position: absolute;
    width: 2px;
    background-color: #e9ecef;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -1px;
}

.timeline-step {
    position: relative;
    margin-bottom: 50px;
}

.timeline-step:last-child {
    margin-bottom: 0;
}

.timeline-number {
    width: 50px;
    height: 50px;
    background-color: #0066cc;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
    position: absolute;
    top: 15px;
    left: -25px;
    z-index: 1;
}

.timeline-content {
    margin-left: 30px;
    position: relative;
}

.timeline .row:nth-child(even) .timeline-number {
    left: auto;
    right: -25px;
}

.timeline .row:nth-child(even) .timeline-content {
    margin-left: 0;
    margin-right: 30px;
}

/* FAQ Section */
.faq .accordion-button:not(.collapsed) {
    background-color: #f0f7ff;
    color: #0066cc;
    box-shadow: none;
}

.faq .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0, 102, 204, 0.1);
}

.faq .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230066cc'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

/* CTA Section */
.cta {
    background: linear-gradient(135deg, #0066cc 0%, #004c99 100%);
}

/* Modal Styles */
.modal-content {
    border-radius: 15px;
    border: none;
}

.modal-header {
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.modal-footer {
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

/* Responsive Adjustments */
@media (max-width: 991.98px) {
    .career-hero {
        padding: 60px 0;
    }

    .timeline:before {
        left: 40px;
    }

    .timeline-number {
        left: 15px !important;
    }

    .timeline-content {
        margin-left: 70px !important;
        margin-right: 0 !important;
    }

    .timeline .row:nth-child(even) .timeline-content {
        margin-left: 70px !important;
    }
}

@media (max-width: 767.98px) {
    .career-hero {
        padding: 40px 0;
    }

    .career-hero h1 {
        font-size: 2.5rem;
    }
}

/* Animation Enhancements */
[data-aos] {
    pointer-events: none;
}

.aos-animate {
    pointer-events: auto;
}

[data-aos="fade-up"] {
    transform: translate3d(0, 30px, 0);
}

[data-aos="fade-left"] {
    transform: translate3d(-30px, 0, 0);
}

[data-aos="fade-right"] {
    transform: translate3d(30px, 0, 0);
}

[data-aos="zoom-in"] {
    transform: scale(0.9);
}

</style>
<!-- Hero Section -->
<section class="career-hero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Bergabunglah dengan Tim Kami</h1>
                <p class="fs-5 mb-4">Jadilah bagian dari perjalanan kami membantu ribuan pelajar meraih impian melalui peningkatan kemampuan bahasa Inggris dan sertifikasi TOEFL.</p>
                <a href="#open-positions" class="btn btn-primary">Lihat Lowongan <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/career-hero.jpg') }}" alt="Join Our Team" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Why Join Us Section -->
<section class="why-join-us py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Mengapa Bergabung dengan ToeflPCT?</h2>
            <p class="lead">Temukan lingkungan kerja yang mendukung pertumbuhan dan kreativitas Anda</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-rocket text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Pertumbuhan Karir</h5>
                        <p class="card-text">Kami menyediakan jalur karir yang jelas dengan peluang pengembangan dan kemajuan profesional yang berkelanjutan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-users text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Budaya Kolaboratif</h5>
                        <p class="card-text">Bergabunglah dengan tim yang dinamis dan beragam, berkolaborasi dengan para profesional yang berbakat dari berbagai latar belakang.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-lightbulb text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Inovasi</h5>
                        <p class="card-text">Kami mendorong ide-ide baru dan kreativitas dalam mengembangkan solusi pembelajaran TOEFL yang efektif dan inovatif.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-balance-scale text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Work-Life Balance</h5>
                        <p class="card-text">Kami menghargai keseimbangan hidup dan kerja dengan jadwal fleksibel dan kebijakan yang mendukung kesejahteraan karyawan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-award text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Pengakuan</h5>
                        <p class="card-text">Kontribusi Anda akan dihargai melalui program penghargaan dan insentif yang bersaing di industri pendidikan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-3">
                            <i class="fas fa-globe text-primary fa-2x"></i>
                        </div>
                        <h5 class="card-title">Dampak Global</h5>
                        <p class="card-text">Berkontribusi pada misi kami membantu siswa di seluruh dunia mencapai impian pendidikan dan karir mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="our-values py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="fw-bold mb-4">Nilai-nilai Kami</h2>
                <p class="mb-4">Kami berkomitmen untuk membangun lingkungan kerja yang inklusif, inovatif, dan berorientasi pada hasil. Nilai-nilai kami membentuk budaya perusahaan dan membimbing keputusan kami setiap hari.</p>
                <img src="{{ asset('img/values.jpg') }}" alt="Our Values" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6 offset-lg-1" data-aos="fade-left">
                <div class="accordion" id="valueAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-star text-primary me-2"></i> Excellence
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#valueAccordion">
                            <div class="accordion-body">
                                Kami berusaha untuk keunggulan dalam segala hal yang kami lakukan, dari mengembangkan materi pembelajaran berkualitas tinggi hingga memberikan pengalaman pelanggan yang luar biasa.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-handshake text-primary me-2"></i> Integritas
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#valueAccordion">
                            <div class="accordion-body">
                                Kami bertindak dengan integritas dan kejujuran dalam semua interaksi, memelihara kepercayaan dari siswa, klien, dan rekan kerja kami.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-search text-primary me-2"></i> Inovasi
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#valueAccordion">
                            <div class="accordion-body">
                                Kami terus mencari cara baru dan lebih baik untuk mengajar, belajar, dan tumbuh, mendorong batasan pendidikan bahasa.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fas fa-users text-primary me-2"></i> Kolaborasi
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#valueAccordion">
                            <div class="accordion-body">
                                Kami percaya bahwa kerja tim adalah kunci kesuksesan kita, dan kami mendorong lingkungan di mana ide-ide dapat bermekaran dan berkembang.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fas fa-heart text-primary me-2"></i> Peduli
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#valueAccordion">
                            <div class="accordion-body">
                                Kami menempatkan siswa di pusat segala yang kami lakukan, berkomitmen untuk membantu mereka mencapai tujuan pendidikan dan profesional mereka.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Benefit untuk Karyawan</h2>
            <p class="lead">Kami menghargai kontribusi setiap anggota tim</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <div class="p-3 bg-primary bg-opacity-10 rounded-circle">
                            <i class="fas fa-heartbeat text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Asuransi Kesehatan</h5>
                        <p>Paket asuransi kesehatan komprehensif untuk Anda dan keluarga Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <div class="p-3 bg-primary bg-opacity-10 rounded-circle">
                            <i class="fas fa-book text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Pengembangan Profesional</h5>
                        <p>Akses ke program pelatihan dan sertifikasi untuk meningkatkan keterampilan Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <div class="p-3 bg-primary bg-opacity-10 rounded-circle">
                            <i class="fas fa-coins text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Bonus Kinerja</h5>
                        <p>Program bonus berdasarkan kinerja individu dan tim untuk menghargai kontribusi Anda.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <div class="p-3 bg-primary bg-opacity-10 rounded-circle">
                            <i class="fas fa-home text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Kerja Fleksibel</h5>
                        <p>Opsi kerja jarak jauh dan jadwal fleksibel untuk keseimbangan kehidupan kerja yang lebih baik.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <div class="p-3 bg-primary bg-opacity-10 rounded-circle">
                            <i class="fas fa-plane text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Waktu Istirahat</h5>
                        <p>Kebijakan cuti yang kompetitif termasuk cuti tahunan, cuti sakit, dan cuti orang tua.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0">
                        <div class="p-3 bg-primary bg-opacity-10 rounded-circle">
                            <i class="fas fa-mug-hot text-primary fa-2x"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>Lingkungan Kerja Modern</h5>
                        <p>Kantor yang nyaman dengan fasilitas lengkap dan suasana kerja yang menyenangkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions Section -->
<section id="open-positions" class="open-positions py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Lowongan Tersedia</h2>
            <p class="lead">Jelajahi peluang karir kami saat ini</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Full Time</span>
                            <span class="text-muted">Jakarta</span>
                        </div>
                        <h4 class="card-title mb-3">TOEFL Instructor</h4>
                        <p class="card-text mb-4">Kami mencari instruktur TOEFL berpengalaman untuk memimpin kelas online dan offline. Kandidat ideal memiliki skor TOEFL yang tinggi dan pengalaman mengajar yang terbukti.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal" data-job="TOEFL Instructor">Lihat Detail</a>
                            <span class="text-muted small">Diposting 2 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Full Time</span>
                            <span class="text-muted">Remote</span>
                        </div>
                        <h4 class="card-title mb-3">Content Developer</h4>
                        <p class="card-text mb-4">Membantu mengembangkan materi pembelajaran TOEFL yang menarik dan efektif untuk platform online kami. Dibutuhkan pengetahuan mendalam tentang TOEFL dan keterampilan menulis yang kuat.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal" data-job="Content Developer">Lihat Detail</a>
                            <span class="text-muted small">Diposting 1 minggu yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Part Time</span>
                            <span class="text-muted">Remote</span>
                        </div>
                        <h4 class="card-title mb-3">TOEFL Essay Evaluator</h4>
                        <p class="card-text mb-4">Mengevaluasi dan memberikan umpan balik pada esai TOEFL siswa. Kandidat ideal memiliki keterampilan menulis bahasa Inggris yang kuat dan pemahaman tentang struktur esai TOEFL.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal" data-job="TOEFL Essay Evaluator">Lihat Detail</a>
                            <span class="text-muted small">Diposting 3 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-primary rounded-pill px-3 py-2">Full Time</span>
                            <span class="text-muted">Jakarta</span>
                        </div>
                        <h4 class="card-title mb-3">Marketing Specialist</h4>
                        <p class="card-text mb-4">Mengembangkan dan menerapkan strategi pemasaran untuk mempromosikan program TOEFL kami. Pengalaman dalam pemasaran digital dan pendidikan sangat diutamakan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#jobModal" data-job="Marketing Specialist">Lihat Detail</a>
                            <span class="text-muted small">Diposting 5 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <p class="mb-4">Tidak menemukan posisi yang cocok? Kirimkan resume Anda untuk pertimbangan di masa mendatang.</p>
            <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#applicationModal">Kirim Lamaran Umum</a>
        </div>
    </div>
</section>

<!-- Team Testimonials Section -->
<section class="team-testimonials py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Cerita dari Tim Kami</h2>
            <p class="lead">Dengarkan pengalaman langsung dari anggota tim ToeflPCT</p>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item p-4 bg-light rounded-3 shadow-sm" data-aos="fade-up">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('img/team/member1.jpg') }}" alt="Team Member" class="rounded-circle" width="70" height="70">
                            <div class="ms-3">
                                <h5 class="mb-0">Andi Wijaya</h5>
                                <p class="text-muted mb-0">TOEFL Instructor - 3 tahun</p>
                            </div>
                        </div>
                        <p class="mb-0">"Bekerja di ToeflPCT telah menjadi pengalaman transformatif bagi saya. Lingkungan yang mendukung dan kesempatan untuk membantu siswa mencapai impian mereka sangat memuaskan. Saya benar-benar merasa seperti membuat perbedaan setiap hari."</p>
                    </div>

                    <div class="testimonial-item p-4 bg-light rounded-3 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('img/team/member2.jpg') }}" alt="Team Member" class="rounded-circle" width="70" height="70">
                            <div class="ms-3">
                                <h5 class="mb-0">Dewi Permata</h5>
                                <p class="text-muted mb-0">Content Manager - 2 tahun</p>
                            </div>
                        </div>
                        <p class="mb-0">"Saya bergabung dengan ToeflPCT karena kualitas materinya, tapi saya tinggal karena orang-orangnya. Tim kami luar biasa, dan budaya inovasi memberi kita kebebasan untuk mencoba ide-ide baru. Ini adalah lingkungan kerja terbaik yang pernah saya alami."</p>
                    </div>

                    <div class="testimonial-item p-4 bg-light rounded-3 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('img/team/member3.jpg') }}" alt="Team Member" class="rounded-circle" width="70" height="70">
                            <div class="ms-3">
                                <h5 class="mb-0">Budi Santoso</h5>
                                <p class="text-muted mb-0">Student Success Coordinator - 1 tahun</p>
                            </div>
                        </div>
                        <p class="mb-0">"Bekerja di ToeflPCT telah memberi saya kesempatan untuk tumbuh secara profesional dan pribadi. Saya mulai dari peran entry-level dan telah menerima bimbingan dan dukungan yang luar biasa sepanjang perjalanan. Sekarang saya mengelola tim sendiri!"</p>
                    </div>

                    <div class="testimonial-item p-4 bg-light rounded-3 shadow-sm" data-aos="fade-up" data-aos-delay="300">
                        <div class="d-flex align-items-center mb-4">
                            <img src="{{ asset('img/team/member4.jpg') }}" alt="Team Member" class="rounded-circle" width="70" height="70">
                            <div class="ms-3">
                                <h5 class="mb-0">Maya Putri</h5>
                                <p class="text-muted mb-0">Marketing Specialist - 2 tahun</p>
                            </div>
                        </div>
                        <p class="mb-0">"Yang membuat ToeflPCT istimewa adalah dampak nyata yang kita buat. Ketika saya menerima pesan dari siswa yang mendapatkan skor TOEFL target mereka dan masuk ke universitas impian mereka, itu membuat semua kerja keras sepadan."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Process Section -->
<section class="application-process py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Proses Lamaran</h2>
            <p class="lead">Langkah-langkah aplikasi yang sederhana dan transparan</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="timeline" data-aos="fade-up">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="timeline-step">
                                <div class="timeline-number">1</div>
                                <div class="timeline-content shadow-sm p-4 rounded bg-white">
                                    <h5>Kirim Lamaran</h5>
                                    <p>Kirim resume dan surat lamaran Anda melalui platform karir kami. Pastikan untuk menyertakan detail yang relevan tentang pengalaman dan kualifikasi Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-6 offset-md-6">
                            <div class="timeline-step">
                                <div class="timeline-number">2</div>
                                <div class="timeline-content shadow-sm p-4 rounded bg-white">
                                    <h5>Screening Awal</h5>
                                    <p>Tim HR kami akan meninjau lamaran Anda dan menghubungi kandidat yang memenuhi syarat untuk wawancara telepon awal.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="timeline-step">
                                <div class="timeline-number">3</div>
                                <div class="timeline-content shadow-sm p-4 rounded bg-white">
                                    <h5>Wawancara & Penilaian</h5>
                                    <p>Kandidat yang lolos dari screening awal akan diundang untuk wawancara tatap muka atau virtual. Untuk beberapa posisi, mungkin melibatkan penilaian teknis atau praktik mengajar.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-6 offset-md-6">
                            <div class="timeline-step">
                                <div class="timeline-number">4</div>
                                <div class="timeline-content shadow-sm p-4 rounded bg-white">
                                    <h5>Penawaran & Onboarding</h5>
                                    <p>Kandidat terpilih akan menerima penawaran kerja. Setelah diterima, tim kami akan membantu Anda dengan proses onboarding yang lancar untuk memastikan awal yang sukses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <p>Kami berkomitmen untuk proses perekrutan yang cepat dan transparan. Anda akan menerima pembaruan tentang status aplikasi Anda di setiap tahap.</p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Pertanyaan Umum</h2>
            <p class="lead">Jawaban untuk pertanyaan umum tentang berkarir di ToeflPCT</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion" data-aos="fade-up">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                Apa saja kualifikasi umum yang dibutuhkan?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Kualifikasi bervariasi berdasarkan posisi, tetapi secara umum, kami mencari individu dengan pemahaman yang kuat tentang TOEFL dan pendidikan bahasa Inggris, keterampilan komunikasi yang sangat baik, kemampuan beradaptasi, dan semangat untuk membantu siswa berhasil.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                Apakah ToeflPCT menawarkan posisi kerja jarak jauh?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, kami menawarkan berbagai posisi kerja jarak jauh, terutama untuk peran pengajaran, pengembangan konten, dan dukungan siswa. Beberapa posisi mungkin memerlukan kombinasi kerja jarak jauh dan di kantor.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faqThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                Apakah ada peluang pengembangan karir di ToeflPCT?
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tentu! Kami berkomitmen untuk membantu karyawan kami tumbuh dan berkembang. Kami menawarkan program pengembangan karir, pelatihan reguler, dan kesempatan untuk kemajuan internal. Banyak pemimpin tim dan manajer kami telah dipromosikan dari dalam.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="faqFour">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                Berapa lama proses aplikasi biasanya?
                            </button>
                        </h2>
                        <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Proses aplikasi kami biasanya memakan waktu 2-4 minggu, tergantung pada posisi dan volume pelamar. Kami berusaha untuk memberikan tanggapan kepada semua pelamar, berhasil atau tidak, sesegera mungkin.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="faqFive">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                Apa yang membuat ToeflPCT tempat kerja yang bagus?
                            </button>
                        </h2>
                        <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Budaya kami berfokus pada kolaborasi, inovasi, dan belajar berkelanjutan. Kami menghargai keseimbangan kehidupan kerja dan menawarkan lingkungan yang mendukung di mana ide-ide baru dihargai. Yang terpenting, pekerjaan kami memiliki dampak nyata pada kehidupan banyak siswa.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="fw-bold mb-3">Siap Memulai Perjalanan Baru?</h2>
                <p class="lead mb-0">Bergabunglah dengan tim kami dan bantu ribuan pelajar mencapai skor TOEFL impian mereka.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="#open-positions" class="btn btn-light btn-lg">Lihat Lowongan</a>
            </div>
        </div>
    </div>
</section>

<!-- Job Detail Modal -->
<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="jobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobModalLabel">Detail Lowongan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="jobDetails">
                    <!-- Job details will be loaded here via JavaScript -->
                </div>

                <div class="mt-4">
                    <h5>Kirim Lamaran</h5>
                    <form id="jobApplicationForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="linkedin" class="form-label">LinkedIn (Opsional)</label>
                                <input type="url" class="form-control" id="linkedin">
                            </div>
                            <div class="col-12">
                                <label for="resume" class="form-label">Resume/CV (PDF)</label>
                                <input type="file" class="form-control" id="resume" accept=".pdf" required>
                            </div>
                            <div class="col-12">
                                <label for="coverLetter" class="form-label">Surat Lamaran</label>
                                <textarea class="form-control" id="coverLetter" rows="4" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms">
                                        Saya setuju bahwa data saya akan disimpan dan diproses sesuai dengan kebijakan privasi ToeflPCT.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Kirim Lamaran</button>
            </div>
        </div>
    </div>
</div>

<!-- General Application Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applicationModalLabel">Lamaran Umum</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tidak menemukan posisi yang sesuai dengan keterampilan Anda? Kirimkan lamaran umum, dan kami akan menghubungi Anda jika ada posisi yang cocok.</p>

                <form id="generalApplicationForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="genName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="genName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="genEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="genEmail" required>
                        </div>
                        <div class="col-md-6">
                            <label for="genPhone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="genPhone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="genPosition" class="form-label">Posisi yang Diminati</label>
                            <input type="text" class="form-control" id="genPosition" required>
                        </div>
                        <div class="col-12">
                            <label for="genResume" class="form-label">Resume/CV (PDF)</label>
                            <input type="file" class="form-control" id="genResume" accept=".pdf" required>
                        </div>
                        <div class="col-12">
                            <label for="genMessage" class="form-label">Pesan (Ceritakan tentang diri Anda dan minat karir Anda)</label>
                            <textarea class="form-control" id="genMessage" rows="4" required></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="genAgreeTerms" required>
                                <label class="form-check-label" for="genAgreeTerms">
                                    Saya setuju bahwa data saya akan disimpan dan diproses sesuai dengan kebijakan privasi ToeflPCT.
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Kirim Lamaran</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <img src="{{ asset('img/logo-white.png') }}" alt="ToeflPCT Logo" class="mb-4" height="45">
                <p class="mb-4">ToeflPCT adalah platform pelatihan TOEFL terkemuka yang membantu siswa mencapai skor impian mereka melalui kursus berkualitas tinggi dan dukungan personalisasi.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
                <h5>Perusahaan</h5>
                <ul>
                    <li><a href="/tentang-kami">Tentang Kami</a></li>
                    <li><a href="/karir">Karir</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/affiliate">Program Afiliasi</a></li>
                    <li><a href="/hubungi-kami">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 mb-5 mb-md-0">
                <h5>Kursus</h5>
                <ul>
                    <li><a href="/courses/one-on-one">One on One</a></li>
                    <li><a href="/courses/live-class">Live Class</a></li>
                    <li><a href="/courses/certification">Sertifikasi</a></li>
                    <li><a href="/courses/packages">Paket Belajar</a></li>
                    <li><a href="/courses/smart-book">Smart Book</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5>Kontak</h5>
                <ul>
                    <li><i class="fas fa-map-marker-alt me-2"></i> Jl. Pendidikan No. 123, Jakarta Selatan</li>
                    <li><i class="fas fa-phone-alt me-2"></i> (021) 123-4567</li>
                    <li><i class="fas fa-envelope me-2"></i> info@toeflpct.com</li>
                </ul>
                <div class="mt-4">
                    <h5>Berlangganan Newsletter</h5>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Email Anda">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>&copy; 2025 ToeflPCT. All Rights Reserved.</p>
        </div>
    </div>
</footer>
