@extends('Main')

@section('title')
    Learning Package | TOEFL Preparation
@endsection

@section('content')
<!-- Custom CSS for Learning Package Page -->
<style>
    /* Learning Package Card Styles */
    .learning-package-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .learning-package-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .package-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Package Feature Styles */
    .package-feature-icon {
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .learning-package-card {
            margin-bottom: 20px;
        }
    }
</style>

<!-- Learning Package Hero Section -->
<section class="learning-package-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Comprehensive TOEFL Learning Packages</h1>
                <p class="lead mb-4">Flexible and tailored learning solutions to help you achieve your target TOEFL score with comprehensive study materials and support.</p>
                <div class="d-flex gap-3">
                    <a href="#package-options" class="btn btn-primary">Explore Packages</a>
                    <a href="#package-features" class="btn btn-outline-primary">View Features</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/learning-package-hero.png') }}" alt="TOEFL Learning Packages" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Package Options Section -->
<section id="package-options" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Our Learning Packages</h2>
            <p class="lead">Choose the perfect package to match your TOEFL preparation needs</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Basic Package -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 learning-package-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/basic-package.jpg') }}" class="card-img-top" alt="Basic TOEFL Package">
                        <div class="package-badge bg-warning text-dark">Basic</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Starter Package</h4>
                        <p class="card-text">Perfect for beginners looking to build foundational TOEFL skills.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 500,000</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Online Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Practice Tests</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Basic Video Tutorials</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Package</a>
                    </div>
                </div>
            </div>

            <!-- Standard Package -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 learning-package-card border-primary">
                    <div class="position-relative">
                        <img src="{{ asset('img/standard-package.jpg') }}" class="card-img-top" alt="Standard TOEFL Package">
                        <div class="package-badge bg-primary text-white">Most Popular</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Comprehensive Package</h4>
                        <p class="card-text">Comprehensive training covering all TOEFL sections with in-depth resources.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 1,000,000</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Comprehensive Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Multiple Practice Tests</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Detailed Video Tutorials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Online Mock Exams</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Package</a>
                    </div>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 learning-package-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/premium-package.jpg') }}" class="card-img-top" alt="Premium TOEFL Package">
                        <div class="package-badge bg-success text-white">Premium</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Ultimate Package</h4>
                        <p class="card-text">Complete TOEFL preparation with personalized coaching and advanced resources.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 1,500,000</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Advanced Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Unlimited Practice Tests</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Expert Coaching Sessions</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Personalized Performance Analysis</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Priority Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Package Features Section -->
<section id="package-features" class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Why Choose Our Learning Packages?</h2>
            <p class="lead">Comprehensive resources designed to maximize your TOEFL preparation</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-book-open package-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Comprehensive Materials</h4>
                        <p>Expertly curated study materials covering all TOEFL test sections.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-video package-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Video Tutorials</h4>
                        <p>Engaging video lessons from experienced TOEFL instructors.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-laptop package-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Online Practice</h4>
                        <p>Multiple online practice tests simulating the actual TOEFL exam.</p>
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
            <h2 class="display-5 fw-bold">Success Stories</h2>
            <p class="lead">Hear from students who achieved their target TOEFL scores</p>
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
                <h2 class="display-5 fw-bold">Ready to Start Your TOEFL Journey?</h2>
                <p class="lead">Choose the perfect learning package and take the first step towards success.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#package-options" class="btn btn-light btn-lg">Choose a Package</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('Home.section.footer')

@endsection