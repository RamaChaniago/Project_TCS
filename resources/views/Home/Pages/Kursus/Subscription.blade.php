@extends('Main')

@section('title')
    Subscription | TOEFL Preparation
@endsection

@section('content')
<!-- Custom CSS for Subscription Page -->
<style>
    /* Subscription Package Card Styles */
    .subscription-package-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .subscription-package-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .subscription-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Subscription Feature Styles */
    .subscription-feature-icon {
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
        .subscription-package-card {
            margin-bottom: 20px;
        }
    }

    /* Pricing Highlight */
    .pricing-highlight {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .pricing-highlight .badge {
        position: absolute;
        top: 10px;
        right: 10px;
    }
</style>

<!-- Subscription Hero Section -->
<section class="subscription-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Unlimited TOEFL Learning Access</h1>
                <p class="lead mb-4">Flexible subscription plans designed to support your continuous TOEFL preparation journey.</p>
                <div class="d-flex gap-3">
                    <a href="#subscription-options" class="btn btn-primary">View Plans</a>
                    <a href="#subscription-benefits" class="btn btn-outline-primary">Key Benefits</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/subscription-hero.png') }}" alt="TOEFL Subscription" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Subscription Options Section -->
<section id="subscription-options" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Subscription Plans</h2>
            <p class="lead">Choose a plan that fits your TOEFL preparation needs</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Monthly Plan -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 subscription-package-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/monthly-plan.jpg') }}" class="card-img-top" alt="Monthly Subscription">
                        <div class="subscription-badge bg-warning text-dark">Monthly</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Monthly Access</h4>
                        <p class="card-text">Perfect for short-term TOEFL preparation.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 150,000 / month</div>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Full Learning Materials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Practice Tests</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Online Tutorials</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Monthly Plan</a>
                    </div>
                </div>
            </div>

            <!-- Quarterly Plan -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 subscription-package-card border-primary">
                    <div class="position-relative">
                        <img src="{{ asset('img/quarterly-plan.jpg') }}" class="card-img-top" alt="Quarterly Subscription">
                        <div class="subscription-badge bg-primary text-white">Most Popular</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Quarterly Plan</h4>
                        <p class="card-text">Comprehensive preparation with better value.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 400,000 / quarter</div>
                            <small class="text-muted">Save 15% compared to monthly</small>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>All Monthly Features</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Advanced Tutorials</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Mock Exams</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Progress Tracking</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Quarterly Plan</a>
                    </div>
                </div>
            </div>

            <!-- Annual Plan -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 subscription-package-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/annual-plan.jpg') }}" class="card-img-top" alt="Annual Subscription">
                        <div class="subscription-badge bg-success text-white">Best Value</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Annual Plan</h4>
                        <p class="card-text">Complete TOEFL preparation with maximum savings.</p>
                        <div class="mb-4">
                            <div class="h3 fw-bold text-primary">Rp 1,200,000 / year</div>
                            <small class="text-muted">Save 30% compared to monthly</small>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>All Quarterly Features</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Personal Coaching</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Exclusive Webinars</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Priority Support</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Lifetime Course Updates</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Annual Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscription Benefits Section -->
<section id="subscription-benefits" class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Why Choose Our Subscription?</h2>
            <p class="lead">Uninterrupted learning with comprehensive resources</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-book-open subscription-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Unlimited Access</h4>
                        <p>Complete access to all TOEFL learning resources.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-sync subscription-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Regular Updates</h4>
                        <p>Continuously updated materials and practice tests.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-chart-line subscription-feature-icon"></i>
                    <div>
                        <h4 class="fw-bold">Progress Tracking</h4>
                        <p>Detailed performance analytics and recommendations.</p>
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
                <h2 class="display-5 fw-bold">Start Your TOEFL Subscription Today</h2>
                <p class="lead">Unlock continuous learning and maximize your TOEFL preparation.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#subscription-options" class="btn btn-light btn-lg">Choose a Plan</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('Home.section.footer')

@endsection