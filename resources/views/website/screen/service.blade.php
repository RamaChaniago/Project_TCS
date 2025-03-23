@extends('website.main')

@section('title')
    GH Academy - Service
@endsection


@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Services</h4>
                    <h1 class="display-4 mb-4">We Provide Best Services</h1>
                    <p class = "mb-0" > 
                        Dengan metode belajar yang fleksibel—baik melalui kelas online, hybrid,
                        maupun pelatihan intensif — GH Academy memastikan setiap siswa dapat belajar dengan cara yang paling sesuai untuk mereka. 
                        Kami juga menggunakan pendekatan pembelajaran berbasis proyek,
                        sehingga siswa tidak hanya belajar teori tetapi juga langsung menerapkannya dalam studi kasus nyata. 
                        Selain itu,
                        kami memberikan dukungan karir, mulai dari pelatihan wawancara, penyusunan portofolio,
                        hingga akses ke jaringan rekrutmen eksklusif. GH Academy adalah pilihan terbaik bagi mereka yang ingin belajar,
                        berkembang, dan berhasil di era digital.
                    </p>
                </div>

                <div class="row g-4 justify-content-center">

                    <!-- English Grammar -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/1.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-book"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">English Grammar</a>
                                    <p class="mb-4">Pelajari tata bahasa Inggris dengan mudah dan efektif.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Speaking & Conversation -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/2.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-mic"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Speaking & Conversation</a>
                                    <p class="mb-4">Latih kemampuan berbicara dan percaya diri dalam komunikasi.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- English for Business -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/3.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-briefcase"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">English for Business</a>
                                    <p class="mb-4">Tingkatkan kemampuan bahasa Inggris dalam dunia bisnis.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- IELTS & TOEFL Preparation -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/4.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">IELTS & TOEFL Preparation</a>
                                    <p class="mb-4">Persiapkan diri untuk ujian bahasa Inggris internasional.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Writing & Composition -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="1.0s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/5.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-pencil"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Writing & Composition</a>
                                    <p class="mb-4">Belajar menulis esai, laporan, dan teks akademik dengan baik.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- English for Travel -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/6.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-airplane"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">English for Travel</a>
                                    <p class="mb-4">Persiapkan diri untuk berbicara dalam perjalanan internasional.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Pronunciation & Accent Training -->
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="1.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/7.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-volume-up"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Pronunciation & Accent Training</a>
                                    <p class="mb-4">Latih pelafalan dan aksen bahasa Inggris dengan profesional.</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Courses</a>
                    </div> --}}
                
                </div>
                
                
                
            </div>
        </div>
        <!-- Service End -->


        <div class="container-fluid blog py-5">
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
                                <img src="{{ asset('assets/images/5.jpg') }}" class="img-fluid rounded-top w-100" alt="">
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
                                <img src="{{ asset('assets/images/6.jpg') }}" class="img-fluid rounded-top w-100" alt="">
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
                                <img src="{{ asset('assets/images/7.jpg') }}" class="img-fluid rounded-top w-100" alt="">
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
                    
                </div>
            </div>
        </div>


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                    <p class = "mb-0" > 
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam,
                        ad culpa deserunt sint dolorem autem obcaecati,
                        ipsam mollitia hic.
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