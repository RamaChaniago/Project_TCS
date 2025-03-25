@extends('Main')

@section('title')
    Karir
@endsection

@section('content')
<!-- Custom CSS for Promo Page -->
<style>
    /* Promo Card Styles */
    .promo-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .promo-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .discount-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Countdown Timer Styles */
    .countdown-item {
        background-color: rgba(255, 255, 255, 0.2);
        padding: 10px 15px;
        border-radius: 10px;
        min-width: 100px;
        text-align: center;
    }

    /* Divider */
    .divider {
        height: 4px;
        width: 70px;
        background-color: #0066cc;
        border-radius: 2px;
    }

    /* Step Icon */
    .step-icon {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: rgba(0, 102, 204, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .step-icon:hover {
        transform: scale(1.1);
        background-color: rgba(0, 102, 204, 0.2);
    }

    /* Accordion Customization */
    .accordion-item {
        border: none;
        margin-bottom: 15px;
        border-radius: 10px;
        overflow: hidden;
    }

    .accordion-button {
        font-weight: 600;
        padding: 20px;
        background-color: #f8f9fa;
    }

    .accordion-button:not(.collapsed) {
        background-color: #e7f1ff;
        color: #0066cc;
        box-shadow: none;
    }

    .accordion-button:focus {
        box-shadow: none;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .countdown-item {
            min-width: 70px;
            padding: 8px 10px;
        }

        .countdown-value {
            font-size: 1.8rem !important;
        }

        .countdown-label {
            font-size: 0.8rem;
        }
    }
</style>

<!-- Promo Hero Section -->
<section class="promo-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Special TOEFL Course Promotions</h1>
                <p class="lead mb-4">Get exclusive discounts on our top-rated TOEFL preparation courses. Limited time offers available now!</p>
                <div class="d-flex gap-3">
                    <a href="#current-promos" class="btn btn-primary">View Promotions</a>
                    <a href="/courses.learning-package" class="btn btn-outline-primary">Explore Courses</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/promo-hero.png') }}" alt="TOEFL Promotion" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Timer Section -->
<section class="py-4 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h3 class="mb-3">Limited Time Offer! Promotions End In:</h3>
                <div class="countdown-timer d-flex justify-content-center">
                    <div class="countdown-item mx-2 mx-md-4">
                        <div class="countdown-value display-5 fw-bold" id="days">00</div>
                        <div class="countdown-label">Days</div>
                    </div>
                    <div class="countdown-item mx-2 mx-md-4">
                        <div class="countdown-value display-5 fw-bold" id="hours">00</div>
                        <div class="countdown-label">Hours</div>
                    </div>
                    <div class="countdown-item mx-2 mx-md-4">
                        <div class="countdown-value display-5 fw-bold" id="minutes">00</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                    <div class="countdown-item mx-2 mx-md-4">
                        <div class="countdown-value display-5 fw-bold" id="seconds">00</div>
                        <div class="countdown-label">Seconds</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Promotions Section -->
<section id="current-promos" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Current Promotions</h2>
            <p class="lead">Grab these special offers before they expire!</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Promo Card 1 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow promo-card overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('img/promo-1.jpg') }}" class="card-img-top" alt="TOEFL One-on-One Discount">
                        <div class="discount-badge bg-danger text-white fw-bold">30% OFF</div>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">One-on-One</span>
                        <h4 class="card-title fw-bold">Premium One-on-One TOEFL Coaching</h4>
                        <p class="card-text">Get personalized training from expert TOEFL instructors at a discounted price.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <del class="text-muted me-2">Rp 2,500,000</del>
                                <span class="text-primary fw-bold">Rp 1,750,000</span>
                            </div>
                            <span class="badge bg-success">Save Rp 750,000</span>
                        </div>
                        <a href="/courses.one-on-one" class="btn btn-primary w-100">Claim Offer</a>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-clock me-1"></i> Offer expires in 7 days</small>
                    </div>
                </div>
            </div>

            <!-- Promo Card 2 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow promo-card overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('img/promo-2.jpg') }}" class="card-img-top" alt="Certification Bundle">
                        <div class="discount-badge bg-danger text-white fw-bold">25% OFF</div>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-info mb-2">Certification</span>
                        <h4 class="card-title fw-bold">TOEFL Certification Test Bundle</h4>
                        <p class="card-text">Complete test preparation package including mock tests and certification.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <del class="text-muted me-2">Rp 1,800,000</del>
                                <span class="text-primary fw-bold">Rp 1,350,000</span>
                            </div>
                            <span class="badge bg-success">Save Rp 450,000</span>
                        </div>
                        <a href="/courses.certification-test" class="btn btn-primary w-100">Claim Offer</a>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-clock me-1"></i> Offer expires in 5 days</small>
                    </div>
                </div>
            </div>

            <!-- Promo Card 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow promo-card overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('img/promo-3.jpg') }}" class="card-img-top" alt="Live Class Discount">
                        <div class="discount-badge bg-danger text-white fw-bold">40% OFF</div>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Live Class</span>
                        <h4 class="card-title fw-bold">Group Live Classes</h4>
                        <p class="card-text">Join our interactive live classes with limited students for optimal learning.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <del class="text-muted me-2">Rp 1,500,000</del>
                                <span class="text-primary fw-bold">Rp 900,000</span>
                            </div>
                            <span class="badge bg-success">Save Rp 600,000</span>
                        </div>
                        <a href="/courses.live-class" class="btn btn-primary w-100">Claim Offer</a>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-clock me-1"></i> Offer expires in 3 days</small>
                    </div>
                </div>
            </div>

            <!-- Promo Card 4 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow promo-card overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('img/promo-4.jpg') }}" class="card-img-top" alt="Complete Package">
                        <div class="discount-badge bg-danger text-white fw-bold">50% OFF</div>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">Learning Package</span>
                        <h4 class="card-title fw-bold">Complete TOEFL Learning Package</h4>
                        <p class="card-text">Comprehensive learning materials, practice tests, and video lessons.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <del class="text-muted me-2">Rp 3,000,000</del>
                                <span class="text-primary fw-bold">Rp 1,500,000</span>
                            </div>
                            <span class="badge bg-success">Save Rp 1,500,000</span>
                        </div>
                        <a href="/courses.learning-package" class="btn btn-primary w-100">Claim Offer</a>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-clock me-1"></i> Limited slots available</small>
                    </div>
                </div>
            </div>

            <!-- Promo Card 5 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 shadow promo-card overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('img/promo-5.jpg') }}" class="card-img-top" alt="Smart Book Offer">
                        <div class="discount-badge bg-danger text-white fw-bold">35% OFF</div>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-dark mb-2">Smart Book</span>
                        <h4 class="card-title fw-bold">TOEFL Smart Book Collection</h4>
                        <p class="card-text">Digital and physical books with tried and tested TOEFL strategies.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <del class="text-muted me-2">Rp 850,000</del>
                                <span class="text-primary fw-bold">Rp 552,500</span>
                            </div>
                            <span class="badge bg-success">Save Rp 297,500</span>
                        </div>
                        <a href="/courses.smart-book" class="btn btn-primary w-100">Claim Offer</a>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-clock me-1"></i> Only today!</small>
                    </div>
                </div>
            </div>

            <!-- Promo Card 6 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 shadow promo-card overflow-hidden">
                    <div class="position-relative">
                        <img src="{{ asset('img/promo-6.jpg') }}" class="card-img-top" alt="Annual Subscription">
                        <div class="discount-badge bg-danger text-white fw-bold">60% OFF</div>
                    </div>
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Subscription</span>
                        <h4 class="card-title fw-bold">Annual Premium Subscription</h4>
                        <p class="card-text">Get full access to all ToeflPCT courses and resources for a whole year.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <del class="text-muted me-2">Rp 5,000,000</del>
                                <span class="text-primary fw-bold">Rp 2,000,000</span>
                            </div>
                            <span class="badge bg-success">Save Rp 3,000,000</span>
                        </div>
                        <a href="/courses.subscription" class="btn btn-primary w-100">Claim Offer</a>
                    </div>
                    <div class="card-footer bg-light">
                        <small class="text-muted"><i class="fas fa-clock me-1"></i> Anniversary special</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Bundle Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="{{ asset('img/bundle-promo.png') }}" alt="Special Bundle" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="section-heading mb-4">
                    <h2 class="display-5 fw-bold">Ultimate TOEFL Bundle</h2>
                    <div class="divider my-3"></div>
                </div>
                <p class="lead mb-4">Get everything you need to ace your TOEFL exam in one comprehensive package. This exclusive bundle includes:</p>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-primary me-2"></i> 10 one-on-one coaching sessions</li>
                    <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-primary me-2"></i> Complete set of TOEFL smart books</li>
                    <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-primary me-2"></i> 5 mock tests with detailed analysis</li>
                    <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-primary me-2"></i> 3-month premium subscription access</li>
                    <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-primary me-2"></i> TOEFL certification test fee included</li>
                </ul>
                <div class="price-box mb-4">
                    <span class="h3 fw-bold text-primary">Rp 4,500,000</span>
                    <span class="text-muted ms-2"><del>Rp 9,000,000</del></span>
                    <span class="badge bg-danger ms-2 p-2">50% OFF</span>
                </div>
                <div class="d-grid gap-2 d-md-flex">
                    <a href="/courses.learning-package" class="btn btn-primary">Get the Bundle</a>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#bundleDetailsModal">View Details</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How to Claim Section -->
<section class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">How to Claim Your Promo</h2>
            <p class="lead">Follow these simple steps to redeem your exclusive offer</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center">
                    <div class="step-icon mx-auto mb-3">
                        <i class="fas fa-mouse-pointer fa-3x text-primary"></i>
                    </div>
                    <h4 class="fw-bold">Step 1</h4>
                    <p>Choose your desired promo and click "Claim Offer"</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center">
                    <div class="step-icon mx-auto mb-3">
                        <i class="fas fa-user-plus fa-3x text-primary"></i>
                    </div>
                    <h4 class="fw-bold">Step 2</h4>
                    <p>Log in or create an account if you're new</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center">
                    <div class="step-icon mx-auto mb-3">
                        <i class="fas fa-shopping-cart fa-3x text-primary"></i>
                    </div>
                    <h4 class="fw-bold">Step 3</h4>
                    <p>Complete your purchase with the discount applied</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center">
                    <div class="step-icon mx-auto mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4 class="fw-bold">Step 4</h4>
                    <p>Start learning and prepare for your TOEFL success!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
            <p class="lead">Everything you need to know about our promotions</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                How long are these promotions valid?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Each promotion has its own expiration date, which is displayed on the promo card. Some offers are available for a limited time only, while others may be available until a certain number of slots are filled. We recommend claiming your desired promotion as soon as possible!
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                Can I combine multiple promotions?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Generally, promotions cannot be combined with other offers or discounts. However, the Ultimate TOEFL Bundle is already a combination of multiple services at a heavily discounted price. If you have specific needs, please contact our customer service team for personalized assistance.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                What payment methods are accepted?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We accept various payment methods including credit/debit cards (Visa, Mastercard, American Express), bank transfers, e-wallets (GoPay, OVO, Dana), and installment options through selected banks. All transactions are secure and encrypted.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                What is your refund policy?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer a 7-day money-back guarantee on most of our courses and packages. If you're not satisfied with the course content or services, you can request a refund within 7 days of purchase. Please note that certain conditions apply, and some promotional items may have different refund policies.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                How do I schedule my one-on-one sessions?
                            </button>
                        </h2>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                After purchasing a one-on-one coaching package, you'll gain access to our scheduling system where you can book sessions based on your preferred time and instructor availability. You can schedule sessions up to 3 months from the date of purchase, and reschedule with at least 24 hours notice.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold">Ready to Boost Your TOEFL Score?</h2>
                <p class="lead">Don't miss out on these limited-time offers to accelerate your English proficiency journey.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#current-promos" class="btn btn-light btn-lg">Claim Your Promo Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Bundle Details Modal -->
<div class="modal fade" id="bundleDetailsModal" tabindex="-1" aria-labelledby="bundleDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="bundleDetailsModalLabel">Ultimate TOEFL Bundle Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="{{ asset('img/bundle-details.jpg') }}" alt="Bundle Details" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-bold mb-3">What's Included:</h4>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>10 One-on-One Sessions:</strong> Personalized coaching with TOEFL experts</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>Complete Smart Book Set:</strong> All digital and physical study materials</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>5 Mock Tests:</strong> Full-length practice tests with detailed feedback</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>3-Month Subscription:</strong> Full platform access with all resources</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>TOEFL Test Fee:</strong> Registration for your official TOEFL exam</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>Study Planner:</strong> Customized study schedule based on your goals</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-primary me-2"></i> <strong>Progress Tracking:</strong> Detailed analytics on your performance</li>
                        </ul>
                        <div class="price-box mb-4">
                            <span class="h3 fw-bold text-primary">Rp 4,500,000</span>
                            <span class="text-muted ms-2"><del>Rp 9,000,000</del></span>
                            <span class="badge bg-danger ms-2 p-2">50% OFF</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h4 class="fw-bold mb-3">Bundle Benefits:</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Comprehensive preparation covering all TOEFL sections</li>
                                <li>Flexible scheduling for one-on-one sessions</li>
                                <li>Targeted feedback on your weaknesses</li>
                                <li>Proven strategies from experienced instructors</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Access to exclusive resources not sold separately</li>
                                <li>Significant cost savings compared to individual purchases</li>
                                <li>Priority support from our customer service team</li>
                                <li>Score improvement guarantee or money back</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="/courses.learning-package" class="btn btn-primary">Get This Bundle</a>
            </div>
        </div>
    </div>
</div>
<!-- Script for Countdown Timer -->
<script>
    // Set the countdown date (7 days from now)
    const countdownDate = new Date();
    countdownDate.setDate(countdownDate.getDate() + 7);

    // Update the countdown every 1 second
    const countdownTimer = setInterval(function() {
        // Get current date and time
        const now = new Date().getTime();

        // Find the distance between now and the countdown date
        const distance = countdownDate - now;

        // Calculate days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result
        document.getElementById("days").innerHTML = days < 10 ? "0" + days : days;
        document.getElementById("hours").innerHTML = hours < 10 ? "0" + hours : hours;
        document.getElementById("minutes").innerHTML = minutes < 10 ? "0" + minutes : minutes;
        document.getElementById("seconds").innerHTML = seconds < 10 ? "0" + seconds : seconds;

        // If the countdown is finished, display expired text
        if (distance < 0) {
            clearInterval(countdownTimer);
            document.getElementById("days").innerHTML = "00";
            document.getElementById("hours").innerHTML = "00";
            document.getElementById("minutes").innerHTML = "00";
            document.getElementById("seconds").innerHTML = "00";
        }
    }, 1000);

    // Add animation to promo cards on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const promoCards = document.querySelectorAll('.promo-card');

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        promoCards.forEach(card => {
            observer.observe(card);
        });
    });
</script>

<!-- Footer -->
@include('Home.section.footer')
@endsection
