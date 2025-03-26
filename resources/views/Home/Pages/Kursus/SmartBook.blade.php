@extends('Main')

@section('title')
    Smart Book | TOEFL Preparation
@endsection

@section('content')
<!-- Custom CSS for Smart Book Page -->
<style>
    /* Smart Book Card Styles */
    .smart-book-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .smart-book-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .book-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Book Feature Styles */
    .book-feature-icon {
        color: #0066cc;
        margin-right: 15px;
        font-size: 24px;
    }

    /* Section Divider */
    .divider {
        height: 4px;
        width: 70px;
        background-color: #0066cc;
        border-radius: 2px;
    }

    /* Book Preview Styles */
    .book-preview {
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .smart-book-card {
            margin-bottom: 20px;
        }
    }
</style>

<!-- Smart Book Hero Section -->
<section class="smart-book-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">TOEFL Smart Book: Your Ultimate Study Companion</h1>
                <p class="lead mb-4">Comprehensive, interactive, and intelligent study materials designed to boost your TOEFL performance.</p>
                <div class="d-flex gap-3">
                    <a href="#book-options" class="btn btn-primary">Explore Smart Books</a>
                    <a href="#book-features" class="btn btn-outline-primary">View Features</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/smart-book-hero.png') }}" alt="TOEFL Smart Book" class="img-fluid rounded-3 shadow-lg book-preview">
            </div>
        </div>
    </div>
</section>

<!-- Smart Book Options Section -->
<section id="book-options" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Our Smart Book Collection</h2>
            <p class="lead">Powerful study resources tailored to your TOEFL preparation needs</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Basic Smart Book -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 smart-book-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/basic-smart-book.jpg') }}" class="card-img-top" alt="Basic TOEFL Smart Book">
                        <div class="book-badge bg-warning text-dark">Beginner</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Foundation Smart Book</h4>
                        <p class="card-text">Essential TOEFL skills and foundational learning materials.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 250,000</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Basic Grammar Guide</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Vocabulary Expansion</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Starter Practice Exercises</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Smart Book</a>
                    </div>
                </div>
            </div>

            <!-- Advanced Smart Book -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 smart-book-card border-primary">
                    <div class="position-relative">
                        <img src="{{ asset('img/advanced-smart-book.jpg') }}" class="card-img-top" alt="Advanced TOEFL Smart Book">
                        <div class="book-badge bg-primary text-white">Recommended</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Comprehensive Smart Book</h4>
                        <p class="card-text">Complete TOEFL preparation with in-depth learning resources.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 500,000</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Comprehensive Study Guide</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Advanced Practice Tests</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Section-Specific Strategies</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Interactive Learning Tools</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Smart Book</a>
                    </div>
                </div>
            </div>

            <!-- Premium Smart Book -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 smart-book-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/premium-smart-book.jpg') }}" class="card-img-top" alt="Premium TOEFL Smart Book">
                        <div class="book-badge bg-success text-white">Premium</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Elite Smart Book</h4>
                        <p class="card-text">Ultimate TOEFL preparation with personalized learning experience.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 750,000</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Comprehensive Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>AI-Powered Learning Paths</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Performance Analytics</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Expert Support</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Exclusive Online Resources</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Smart Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart Book Features Section -->
<section id="book-features" class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Why Choose Our Smart Books?</h2>
            <p class="lead">Innovative learning resources for effective TOEFL preparation</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-book-reader book-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Interactive Learning</h4>
                        <p>Engaging content designed to make studying more effective and enjoyable.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-chart-line book-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Performance Tracking</h4>
                        <p>Real-time progress monitoring and personalized insights.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-mobile-alt book-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Multi-Platform Access</h4>
                        <p>Study anytime, anywhere with our mobile and web-compatible resources.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Student Success Stories</h2>
            <p class="lead">Discover how our Smart Books have helped students excel</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    <!-- Testimonial items would be dynamically populated -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold">Transform Your TOEFL Preparation</h2>
                <p class="lead">Choose a Smart Book and start your journey to TOEFL success today.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#book-options" class="btn btn-light btn-lg">View Smart Books</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('Home.section.footer')

@endsection