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

                    <!-- Web Programming -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/webprogramming.png') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-laptop"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Web Programming</a>
                                    <p class="mb-4">Belajar pemorgraman web dan asah kemampuan Anda</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Aplikasi Perkantoran -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/aplikasiperkantoran.png') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Aplikasi Perkantoran</a>
                                    <p class="mb-4">Pelajari aplikasi-aplikasi kebutuhan sesuai yang industri gunakan</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Jaringan Komputer -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/jaringankomputer.png') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-wifi"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Jaringan Komputer</a>
                                    <p class="mb-4">Belajar jaringan, keamanan dan terhubung dengan dunia</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- Digital Marketing -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ url('/assets/images/digitalmarketing.png') }}" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3" style="font-size: 20px">
                                    <i class="bi bi-shop"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">Digital Marketing</a>
                                    <p class="mb-4">Belajar dan tingkatkan kemampuan marketing Anda secara digital</p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


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