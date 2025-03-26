@extends('Main')

@section('title')
    TOEFL Certification Test
@endsection

@section('content')
<!-- Custom CSS for Certification Test Page -->
<style>
    /* Test Card Styles */
    .test-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .test-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .test-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Test Icon Styles */
    .test-icon {
        width: 80px;
        height: 80px;
        background-color: rgba(0, 102, 204, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .test-icon i {
        color: #0066cc;
        font-size: 40px;
    }

    /* Divider Styles */
    .divider {
        height: 4px;
        width: 70px;
        background-color: #0066cc;
        border-radius: 2px;
        margin: 20px auto;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .test-card {
            margin-bottom: 20px;
        }
    }

    /* Test Preparation Checklist */
    .test-prep-list {
        background-color: rgba(0, 102, 204, 0.05);
        border-left: 4px solid #0066cc;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }
</style>

<!-- Certification Test Hero Section -->
<section class="test-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Official TOEFL Certification Test</h1>
                <p class="lead mb-4">Get certified with our comprehensive TOEFL testing platform. Professional, accurate, and recognized worldwide.</p>
                <div class="d-flex gap-3">
                    <a href="#test-options" class="btn btn-primary">Explore Test Options</a>
                    <a href="#test-preparation" class="btn btn-outline-primary">Test Preparation</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/certification-test-hero.png') }}" alt="TOEFL Certification Test" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Test Options Section -->
<section id="test-options" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Test Options</h2>
            <p class="lead">Choose the right test format for your needs</p>
            <div class="divider"></div>
        </div>

        <div class="row g-4">
            <!-- Test Card 1 - Full TOEFL Test -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center test-card">
                    <div class="card-body">
                        <div class="test-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Full TOEFL Test</h3>
                        <p class="mb-4">Complete test covering all four sections: Reading, Listening, Speaking, and Writing.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>4 Sections</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>3 Hours 45 Minutes</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Official Certification</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Book Full Test</a>
                    </div>
                </div>
            </div>

            <!-- Test Card 2 - Partial Test -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center test-card">
                    <div class="card-body">
                        <div class="test-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Section-Specific Test</h3>
                        <p class="mb-4">Choose and focus on specific sections you want to improve or validate.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Select Individual Sections</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Flexible Duration</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Targeted Improvement</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Sections</a>
                    </div>
                </div>
            </div>

            <!-- Test Card 3 - Mock Test -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center test-card">
                    <div class="card-body">
                        <div class="test-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Mock Practice Test</h3>
                        <p class="mb-4">Simulate real TOEFL test conditions and assess your current proficiency level.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Realistic Test Environment</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Comprehensive Scoring</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Detailed Performance Report</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Start Mock Test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Test Preparation Section -->
<section id="test-preparation" class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Test Preparation Checklist</h2>
            <p class="lead">Ensure you're fully prepared for your TOEFL Certification Test</p>
            <div class="divider"></div>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="test-prep-list">
                    <h4 class="fw-bold mb-3">Documentation & Requirements</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Valid International Passport</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Test Confirmation Email</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Recent Passport-sized Photograph</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Additional Government-issued ID</li>
                    </ul>
                </div>
                <div class="test-prep-list">
                    <h4 class="fw-bold mb-3">Technical Requirements</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stable Internet Connection</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Updated Web Browser</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Webcam and Microphone</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Quiet, Well-lit Testing Environment</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="test-prep-list">
                    <h4 class="fw-bold mb-3">Test Day Recommendations</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arrive/Log in 30 Minutes Early</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Have Water and Snacks Ready</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Wear Comfortable Clothing</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Get Adequate Sleep Night Before</li>
                    </ul>
                </div>
                <div class="test-prep-list">
                    <h4 class="fw-bold mb-3">Recommended Study Materials</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Official TOEFL Preparation Books</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Online Practice Tests</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Vocabulary and Grammar Guides</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Listening and Speaking Practice Resources</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Test Pricing</h2>
            <p class="lead">Transparent and competitive pricing for your TOEFL Certification</p>
            <div class="divider"></div>
        </div>

        <div class="row g-4">
            <!-- Pricing Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4">Full TOEFL Test</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 2,500,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Complete Test</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Official Certification</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Detailed Score Report</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Pricing Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center border-primary">
                    <div class="card-body">
                        <span class="badge bg-primary mb-3">Most Popular</span>
                        <h3 class="fw-bold mb-4">Section-Specific Test</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 1,000,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Choose 2-3 Sections</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Partial Certification</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Targeted Performance Report</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Sections</a>
                    </div>
                </div>
            </div>

            <!-- Pricing Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4">Mock Practice Test</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 350,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Simulated Test Environment</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Comprehensive Scoring</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Detailed Performance Analysis</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Start Practice Test</a>
                    </div>
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
                <h2 class="display-5 fw-bold">Ready to Take Your TOEFL Test?</h2>
                <p class="lead">Schedule your test today and take the first step towards your academic and professional goals.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#test-options" class="btn btn-light btn-lg">Schedule Test</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('Home.section.footer')

@endsection