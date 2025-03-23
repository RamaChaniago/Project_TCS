
        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="https://maps.app.goo.gl/RnBfw1M5wVf2MjPa9" target="_blank" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            </div>
                            <div class="ps-3">
                                <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>palcomtech@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                {{-- <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a> --}}
                                <a class="btn p-0 text-primary me-3" href="https://www.instagram.com/palcomtech.palembang/" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            {{-- <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Bangla</a>
                                    <a href="#" class="dropdown-item">French</a>
                                    <a href="#" class="dropdown-item">Spanish</a>
                                    <a href="#" class="dropdown-item">Arabic</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="{{ url('/') }}" class="navbar-brand p-0">
                        {{-- <h1 class="text-primary mb-0"><i class="fa-solid fa-school"></i> Speakout</h1> --}}
                        {{-- <sub>Guru Honor School</sub> --}}
                        <img src="{{ asset('assets/images/logo_speakout.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <a href="{{ url('/') }}" aria-current="page" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                            {{-- <a href="/about" class="nav-item nav-link">About</a> --}}
                            <a href="{{ url('/service') }}" aria-current="page" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
                            <a href="{{ url('/blog') }}" aria-current="page" class="nav-item nav-link {{ Request::is('blog') ? 'active' : '' }}">Blog</a>
                            <a href="{{ url('/sertifikasi') }}" aria-current="page" class="nav-item nav-link {{ Request::is('sertifikasi') ? 'active' : '' }}">Sertifikasi</a>
                            {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Pages</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="feature.html" class="dropdown-item">Our Features</a>
                                    <a href="team.html" class="dropdown-item">Our team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div> --}}
                            <a href="{{ url('/contact') }}" aria-current="page" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                            <a href="{{ url('/login') }}" aria-current="page" class="nav-item nav-link {{ Request::is('login') ? 'active' : '' }}">Login</a>
                            <div class="nav-btn px-3">
                                <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                {{-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Get a Quote</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3">
                            <span>Call to Our Experts</span>
                            <a href="https://wa.me/+6282177980624" target="_blank"><span class="text-dark">Free: +62 821 7798 0624</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
