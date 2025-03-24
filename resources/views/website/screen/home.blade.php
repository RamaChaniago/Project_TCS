@extends('website.main')

@section('title')
    GH Academy
@endsection


@section('content')
    
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    {{-- <h1 class="display-1 text-white mb-4">Cerdas Digital Untuk Masa Depan</h1> --}}
                                    <h1 class="display-1 text-white mb-4">Ngomong Inggris Jadi Mudah Dijamin Pasti Bisa!</h1>
                                    <p class="mb-5 fs-5">
                                        Kursus Bahasa Inggris SepakOut Program untuk meningkatkan skill berbicara 
                                        bahasa inggris Kamu dengan pembelajaran yang aktif dan praktis.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        {{-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> --}}
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight">
                                <div class="calrousel-img" style="object-fit: cover;">
                                    <img src="{{ asset('assets/images/speakout1.png') }}" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                            <div class="col-lg-5 animated fadeInLeft">
                                <div class="calrousel-img">
                                    <img src="{{ asset('assets/images/speakout1.png') }}" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 animated fadeInRight">
                                <div class="text-sm-center text-md-end">
                                    {{-- <h1 class="display-1 text-white mb-4">Cerdas Digital Untuk Masa Depan</h1> --}}
                                    <h1 class="display-1 text-white mb-4">Ngomong Inggris Jadi Mudah Dijamin Pasti Bisa!</h1>
                                    <p class="mb-5 fs-5">
                                        Kursus Bahasa Inggris SepakOut Program untuk meningkatkan skill berbicara 
                                        bahasa inggris Kamu dengan pembelajaran yang aktif dan praktis.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                        {{-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> --}}
                                        <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Feature Start -->
        {{-- <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Features</h4>
                    <h1 class="display-4 mb-4">Insurance Provide you a Better Future</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="far fa-handshake fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Trusted Company</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-dollar-sign fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Anytime Money Back</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-bullseye fa-3x"></i>
                            </div>
                            <h4 class="mb-4">Flexible Plans</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-headphones fa-3x"></i>
                            </div>
                            <h4 class="mb-4">24/7 Fast Support</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Feature End -->

        <!-- About Start -->
        <div class="container-fluid bg-light about pb-5 mt-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            <h1 class="display-4 mb-4">Sudah Lama Belajar Bahasa Inggris Tapi Masih Belum Bisa?</h1>

                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Sulit memahami bahasa Inggris di lingkungan sekolah, Kerja atau Sosial?</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Mengalamai hambatan belajar bahasa inggris karena tempat yang kurang nyaman?</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Tidak sempat belajar karena terhambat aktifitas kerja atau sekolah ?</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Ingin meningkatkan skor tes bahasa inggris seperti TOEFL atau IELTS tapi tidak tahu harus mulai dari mana?</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12">
                                    <div class="rounded" style="background-color: #ffff">
                                        <img src="{{ asset('assets/images/logo_pct.png') }}" class="img-fluid rounded w-50" alt="">
                                        <img src="{{ asset('assets/images/logo_speakout.png') }}" class="img-fluid rounded w-25" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">12</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Jumlah Alumni</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">3</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Awards WON</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Topik Materi</h4>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="counter-item bg-light rounded p-3 h-100">
                                        <div class="counter-counting">
                                            <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">10</span>
                                            <span class="h1 fw-bold text-primary">+</span>
                                        </div>
                                        <h4 class="mb-0 text-dark">Team Teacher</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <div class="container-fluid bg-light about pb-5 mt-5">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            <h1 class="display-4 mb-4">Mengapa Memilih Speak Out?</h1>

                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i><strong>100% </strong> Daily conversation di setiap sesi pembelajaran</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Sistem Belajar Cabin Class Maksimal 4 Orang</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i><strong>Hybrid Class</strong> Ikut kursus berasa di kelas walaupun ga sempat ke tatap muka</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i><strong>English CLub </strong>Kegiatan belajar tambahan untuk mengingkatkan skill</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i><strong>Jadwal Flexibel </strong>Jadwal Flexibel Sesuai Kebutuhan Siswa</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i><strong>Free Toefl Test </strong>Tersedia tes TOEFL gratis untuk siswa</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Start -->
        {{-- <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">Program Terbaik Kami</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/images/1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>English For Family</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Makin Jago, Hidup Makin Asyik! Pengen ngorbol sama teman bule atau nonton film tanpa Subtitle?</a>
                                <p class="mb-3">Kursus ini bakal bantu kamu menguasai bahasa Inggris sehari-hari, dari ngobrolin tugas sekolah sampai ngobrolin hal-hal seru lainnya. Dijamin bikin hidupmu bermakna"</p>
                                <a href="#" class="btn p-0">Lihat Program  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/images/2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>English For Family</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Makin Jago, Hidup Makin Asyik! Pengen ngorbol sama teman bule atau nonton film tanpa Subtitle?</a>
                                <p class="mb-3">Kursus ini bakal bantu kamu menguasai bahasa Inggris sehari-hari, dari ngobrolin tugas sekolah sampai ngobrolin hal-hal seru lainnya. Dijamin bikin hidupmu bermakna"</p>
                                <a href="#" class="btn p-0">Lihat Program  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/images/3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>English For Family</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Makin Jago, Hidup Makin Asyik! Pengen ngorbol sama teman bule atau nonton film tanpa Subtitle?</a>
                                <p class="mb-3">Kursus ini bakal bantu kamu menguasai bahasa Inggris sehari-hari, dari ngobrolin tugas sekolah sampai ngobrolin hal-hal seru lainnya. Dijamin bikin hidupmu bermakna"</p>
                                <a href="#" class="btn p-0">Lihat Program  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('assets/images/4.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="blog-categiry py-2 px-4">
                                    <span>English For Family</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <div class="blog-comment d-flex justify-content-between mb-3">
                                    <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Makin Jago, Hidup Makin Asyik! Pengen ngorbol sama teman bule atau nonton film tanpa Subtitle?</a>
                                <p class="mb-3">Kursus ini bakal bantu kamu menguasai bahasa Inggris sehari-hari, dari ngobrolin tugas sekolah sampai ngobrolin hal-hal seru lainnya. Dijamin bikin hidupmu bermakna"</p>
                                <a href="#" class="btn p-0">Lihat Program  <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> --}}


        {{-- Perlu Perbaikan Lagi disini --}}
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">Program Terbaik Kami</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
        
                <div id="programCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
        
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/images/1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                            <div class="blog-categiry py-2 px-4"><span>English For Family</span></div>
                                        </div>
                                        <div class="blog-content p-4">
                                            <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Makin Jago!</a>
                                            <p class="mb-3">Kursus ini bakal bantu kamu menguasai bahasa Inggris sehari-hari.</p>
                                            <a href="#" class="btn p-0">Lihat Program <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/images/2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                            <div class="blog-categiry py-2 px-4"><span>English For Work</span></div>
                                        </div>
                                        <div class="blog-content p-4">
                                            <a href="#" class="h4 d-inline-block mb-3">Siap Kerja dengan English!</a>
                                            <p class="mb-3">Latih bahasa Inggris profesionalmu agar sukses di dunia kerja.</p>
                                            <a href="#" class="btn p-0">Lihat Program <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/images/3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                            <div class="blog-categiry py-2 px-4"><span>English For Kids</span></div>
                                        </div>
                                        <div class="blog-content p-4">
                                            <a href="#" class="h4 d-inline-block mb-3">Belajar Sambil Bermain!</a>
                                            <p class="mb-3">Program interaktif khusus anak-anak dengan metode menyenangkan.</p>
                                            <a href="#" class="btn p-0">Lihat Program <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/images/4.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                            <div class="blog-categiry py-2 px-4"><span>English For Travel</span></div>
                                        </div>
                                        <div class="blog-content p-4">
                                            <a href="#" class="h4 d-inline-block mb-3">Jalan-jalan Tanpa Hambatan!</a>
                                            <p class="mb-3">Siapkan kemampuan bahasa Inggris untuk petualangan seru di luar negeri.</p>
                                            <a href="#" class="btn p-0">Lihat Program <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row g-4 justify-content-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/images/5.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                            <div class="blog-categiry py-2 px-4"><span>English For Business</span></div>
                                        </div>
                                        <div class="blog-content p-4">
                                            <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Bisnis</a>
                                            <p class="mb-3">Tingkatkan kemampuan komunikasi bisnis dalam bahasa Inggris.</p>
                                            <a href="#" class="btn p-0">Lihat Program <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <img src="{{ asset('assets/images/6.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                            <div class="blog-categiry py-2 px-4"><span>English For Tech</span></div>
                                        </div>
                                        <div class="blog-content p-4">
                                            <a href="#" class="h4 d-inline-block mb-3">Bahasa Inggris Teknologi</a>
                                            <p class="mb-3">Kuasai istilah teknologi dalam bahasa Inggris untuk karier IT.</p>
                                            <a href="#" class="btn p-0">Lihat Program <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
        
                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#programCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#programCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Blog End -->


        <!-- FAQs Start -->
        <div class="container-fluid faq-section bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="h-100">
                            <div class="mb-5">
                                <h4 class="text-primary">Some Important FAQ's</h4>
                                <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: Berapa Lama Durasi Kegiatan Belajar?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body rounded">
                                            A: Durasi belajar selamat 60 menit sampai dengan 90 menit di setiap sesi pertemuan.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: Apa Saja Fasilitas yang Diperoleh Selama Belajar?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Fasilitasnya sangat lengkap dimulai dari tempat belajar yang nyaman, ruang kelas ful AC, media belajar TV, dan Tutor Pembimbingnya yang Friendly.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q: Berapa Biaya Kursusnya?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Biaya kursus mulai dari 250rb sampai dengan 550rb
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Q: Berapa Lama Masa Belajarnya?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A: Masa belajar selama 4 Bulan di setiap Level
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="../templateLS/img/carousel-2.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

        

        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../templateLS/img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../templateLS/img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../templateLS/img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="../templateLS/img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="team-icon">
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-title p-4">
                                <h4 class="mb-0">David James</h4>
                                <p class="mb-0">Profession</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="../templateLS/img/testimonial-1.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="../templateLS/img/testimonial-2.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="../templateLS/img/testimonial-3.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

@endsection