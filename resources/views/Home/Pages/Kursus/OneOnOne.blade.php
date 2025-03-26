@extends('Main')

@section('title')
    One-on-One TOEFL Tutoring
@endsection

@section('content')
<!-- Custom CSS for One-on-One Tutoring Page -->
<style>
    /* One-on-One Card Styles */
    .tutor-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .tutor-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .tutor-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Tutor Styles */
    .tutor-avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #0066cc;
    }

    /* Session Schedule Styles */
    .schedule-item {
        background-color: rgba(0, 102, 204, 0.05);
        border-left: 4px solid #0066cc;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    /* Section Divider */
    .divider {
        height: 4px;
        width: 70px;
        background-color: #0066cc;
        border-radius: 2px;
    }

    /* Expertise Badges */
    .expertise-badge {
        margin-right: 5px;
        margin-bottom: 5px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .tutor-card {
            margin-bottom: 20px;
        }
    }
</style>

<!-- One-on-One Hero Section -->
<section class="one-on-one-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Personalized TOEFL Coaching</h1>
                <p class="lead mb-4">Get tailored, individual guidance from expert TOEFL tutors. Focused, flexible, and designed to maximize your test performance.</p>
                <div class="d-flex gap-3">
                    <a href="#tutors" class="btn btn-primary">Find Your Tutor</a>
                    <a href="#session-types" class="btn btn-outline-primary">Explore Session Types</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/one-on-one-hero.png') }}" alt="One-on-One TOEFL Tutoring" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Session Types Section -->
<section id="session-types" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Customized Learning Paths</h2>
            <p class="lead">Choose the perfect session type for your TOEFL preparation</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Session Type 1: Speaking Intensive -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-comments fa-3x text-primary mb-3"></i>
                        <h3 class="fw-bold mb-3">Speaking Intensive</h3>
                        <p>Focused sessions to improve pronunciation, fluency, and strategic speaking techniques.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Mock Speaking Tasks</li>
                            <li><i class="fas fa-check text-success me-2"></i>Real-time Feedback</li>
                            <li><i class="fas fa-check text-success me-2"></i>Strategy Development</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Session Type 2: Writing Mastery -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-pen-nib fa-3x text-primary mb-3"></i>
                        <h3 class="fw-bold mb-3">Writing Mastery</h3>
                        <p>Detailed guidance on crafting high-scoring integrated and independent essays.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>Essay Structure Analysis</li>
                            <li><i class="fas fa-check text-success me-2"></i>Grammar & Coherence</li>
                            <li><i class="fas fa-check text-success me-2"></i>Personalized Corrections</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Session Type 3: Comprehensive Prep -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                        <h3 class="fw-bold mb-3">Comprehensive Prep</h3>
                        <p>Full TOEFL preparation covering all sections with a holistic, strategic approach.</p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fas fa-check text-success me-2"></i>All Section Coverage</li>
                            <li><i class="fas fa-check text-success me-2"></i>Diagnostic Assessment</li>
                            <li><i class="fas fa-check text-success me-2"></i>Personalized Study Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tutors Section -->
<section id="tutors" class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Expert One-on-One Tutors</h2>
            <p class="lead">Meet our highly qualified TOEFL specialists</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Tutor Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 tutor-card">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/tutor-1.jpg') }}" alt="Dr. Amanda Lee" class="tutor-avatar mb-3">
                        <h4 class="fw-bold">Dr. Amanda Lee</h4>
                        <p class="text-muted mb-3">Speaking & Listening Specialist</p>
                        <div class="mb-3">
                            <span class="badge bg-primary expertise-badge">IELTS 9.0</span>
                            <span class="badge bg-success expertise-badge">10+ Years Experience</span>
                        </div>
                        <p>Advanced communication strategies and pronunciation techniques for top-tier TOEFL performance.</p>
                        <a href="#" class="btn btn-outline-primary mt-3">Book Session</a>
                    </div>
                </div>
            </div>

            <!-- Tutor Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 tutor-card">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/tutor-2.jpg') }}" alt="Prof. David Kim" class="tutor-avatar mb-3">
                        <h4 class="fw-bold">Prof. David Kim</h4>
                        <p class="text-muted mb-3">Writing & Reading Expert</p>
                        <div class="mb-3">
                            <span class="badge bg-primary expertise-badge">Published Author</span>
                            <span class="badge bg-success expertise-badge">Academic Writing</span>
                        </div>
                        <p>Comprehensive writing techniques and advanced reading comprehension strategies.</p>
                        <a href="#" class="btn btn-outline-primary mt-3">Book Session</a>
                    </div>
                </div>
            </div>

            <!-- Tutor Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 tutor-card">
                    <div class="card-body text-center">
                        <img src="{{ asset('img/tutor-3.jpg') }}" alt="Sarah Rodriguez" class="tutor-avatar mb-3">
                        <h4 class="fw-bold">Sarah Rodriguez</h4>
                        <p class="text-muted mb-3">Comprehensive TOEFL Coach</p>
                        <div class="mb-3">
                            <span class="badge bg-primary expertise-badge">ETS Certified</span>
                            <span class="badge bg-success expertise-badge">Global Test Prep</span>
                        </div>
                        <p>Holistic TOEFL preparation with personalized learning strategies and test-taking techniques.</p>
                        <a href="#" class="btn btn-outline-primary mt-3">Book Session</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">One-on-One Tutoring Packages</h2>
            <p class="lead">Flexible and personalized learning options</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Pricing Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4">Basic Package</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 1,500,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 One-on-One Sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>60-minute Each Session</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Study Materials</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Package</a>
                    </div>
                </div>
            </div>

            <!-- Pricing Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center border-primary">
                    <div class="card-body">
                        <span class="badge bg-primary mb-3">Most Popular</span>
                        <h3 class="fw-bold mb-4">Standard Package</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 2,750,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>8 One-on-One Sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>90-minute Each Session</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Comprehensive Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mock Test Review</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Package</a>
                    </div>
                </div>
            </div>

            <!-- Pricing Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4">Premium Package</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 4,500,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>12 One-on-One Sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>120-minute Each Session</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Extensive Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Multiple Mock Test Reviews</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Personalized Performance Analysis</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Select Package</a>
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
                <h2 class="display-5 fw-bold">Transform Your TOEFL Journey</h2>
                <p class="lead">Start your personalized learning experience with our expert one-on-one tutors.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#tutors" class="btn btn-light btn-lg">Find Your Tutor</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('Home.section.footer')

@endsection
