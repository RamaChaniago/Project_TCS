@extends('Main')

@section('title')
    Live TOEFL Classes
@endsection

@section('content')
<!-- Custom CSS for Live Class Page -->
<style>
    /* Live Class Card Styles */
    .live-class-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }

    .live-class-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .instructor-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        border-radius: 50px;
        font-size: 14px;
    }

    /* Instructor Styles */
    .instructor-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #0066cc;
    }

    /* Class Schedule Styles */
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

    /* Filter Buttons */
    .filter-btn {
        margin: 0 5px;
        transition: all 0.3s ease;
    }

    .filter-btn.active {
        background-color: #0066cc;
        color: white;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .live-class-card {
            margin-bottom: 20px;
        }
    }
</style>

<!-- Live Class Hero Section -->
<section class="live-class-hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4 fw-bold mb-4">Interactive Live TOEFL Classes</h1>
                <p class="lead mb-4">Join our engaging live online classes led by expert TOEFL instructors. Small group sizes ensure personalized learning and maximum interaction.</p>
                <div class="d-flex gap-3">
                    <a href="#class-schedule" class="btn btn-primary">View Class Schedule</a>
                    <a href="#instructors" class="btn btn-outline-primary">Meet Our Instructors</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/live-class-hero.png') }}" alt="Live TOEFL Classes" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Class Types Filter -->
<section class="py-4 bg-white">
    <div class="container text-center">
        <div class="btn-group" role="group" aria-label="Class Type Filters">
            <button type="button" class="btn btn-outline-primary filter-btn active" data-filter="all">All Classes</button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="speaking">Speaking Focus</button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="writing">Writing Focus</button>
            <button type="button" class="btn btn-outline-primary filter-btn" data-filter="comprehensive">Comprehensive</button>
        </div>
    </div>
</section>

<!-- Live Class Schedule Section -->
<section id="class-schedule" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Upcoming Live Classes</h2>
            <p class="lead">Interactive online sessions to boost your TOEFL performance</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Live Class Card 1 - Speaking Focus -->
            <div class="col-md-6 col-lg-4 class-card speaking" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow live-class-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/speaking-class.jpg') }}" class="card-img-top" alt="TOEFL Speaking Class">
                        <div class="instructor-badge bg-warning text-dark">Speaking Focus</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">TOEFL Speaking Mastery</h4>
                        <p class="card-text">Advanced techniques to improve your speaking score with real-time feedback.</p>
                        <div class="schedule-item">
                            <div class="d-flex justify-content-between">
                                <span><i class="fas fa-calendar text-primary me-2"></i>Every Mon & Wed</span>
                                <span><i class="fas fa-clock text-primary me-2"></i>18:00 WIB</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/instructor-1.jpg') }}" alt="Instructor" class="instructor-avatar me-3">
                                <div>
                                    <h6 class="mb-0 fw-bold">Sarah Johnson</h6>
                                    <small class="text-muted">TOEFL Expert</small>
                                </div>
                            </div>
                            <span class="badge bg-success">10 Slots Left</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary w-100">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Live Class Card 2 - Writing Focus -->
            <div class="col-md-6 col-lg-4 class-card writing" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow live-class-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/writing-class.jpg') }}" class="card-img-top" alt="TOEFL Writing Class">
                        <div class="instructor-badge bg-info text-white">Writing Focus</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">TOEFL Writing Workshop</h4>
                        <p class="card-text">Detailed strategies for crafting high-scoring integrated and independent essays.</p>
                        <div class="schedule-item">
                            <div class="d-flex justify-content-between">
                                <span><i class="fas fa-calendar text-primary me-2"></i>Tue & Thu</span>
                                <span><i class="fas fa-clock text-primary me-2"></i>19:30 WIB</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/instructor-2.jpg') }}" alt="Instructor" class="instructor-avatar me-3">
                                <div>
                                    <h6 class="mb-0 fw-bold">Michael Chen</h6>
                                    <small class="text-muted">Writing Specialist</small>
                                </div>
                            </div>
                            <span class="badge bg-warning">5 Slots Left</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary w-100">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Live Class Card 3 - Comprehensive -->
            <div class="col-md-6 col-lg-4 class-card comprehensive" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow live-class-card">
                    <div class="position-relative">
                        <img src="{{ asset('img/comprehensive-class.jpg') }}" class="card-img-top" alt="Comprehensive TOEFL Class">
                        <div class="instructor-badge bg-success text-white">Comprehensive</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Full TOEFL Preparation</h4>
                        <p class="card-text">Complete TOEFL training covering all sections with strategic approaches.</p>
                        <div class="schedule-item">
                            <div class="d-flex justify-content-between">
                                <span><i class="fas fa-calendar text-primary me-2"></i>Sat & Sun</span>
                                <span><i class="fas fa-clock text-primary me-2"></i>09:00 WIB</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('img/instructor-3.jpg') }}" alt="Instructor" class="instructor-avatar me-3">
                                <div>
                                    <h6 class="mb-0 fw-bold">Emily Rodriguez</h6>
                                    <small class="text-muted">TOEFL Master Trainer</small>
                                </div>
                            </div>
                            <span class="badge bg-danger">2 Slots Left</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary w-100">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Class Feature Highlight -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="section-heading mb-4">
                    <h2 class="display-5 fw-bold">Why Choose Our Live Classes?</h2>
                    <div class="divider my-3"></div>
                </div>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-3"></i>Small group sizes for personalized attention</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-3"></i>Real-time interaction with expert instructors</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-3"></i>Immediate feedback and performance tracking</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-3"></i>Flexible online learning platform</li>
                    <li class="mb-3"><i class="fas fa-check-circle text-primary me-3"></i>Comprehensive study materials included</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">Learn More</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/live-class-features.png') }}" alt="Live Class Features" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Instructors Section -->
<section id="instructors" class="py-5">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Our Expert Instructors</h2>
            <p class="lead">Meet the professionals who will guide you to TOEFL success</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Instructor Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <img src="{{ asset('img/instructor-1.jpg') }}" alt="Sarah Johnson" class="instructor-avatar mb-3">
                        <h4 class="fw-bold">Sarah Johnson</h4>
                        <p class="text-muted mb-3">Speaking & Listening Specialist</p>
                        <p>Over 10 years of TOEFL training experience with a proven track record of student success.</p>
                    </div>
                </div>
            </div>

            <!-- Instructor Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <img src="{{ asset('img/instructor-2.jpg') }}" alt="Michael Chen" class="instructor-avatar mb-3">
                        <h4 class="fw-bold">Michael Chen</h4>
                        <p class="text-muted mb-3">Writing & Reading Expert</p>
                        <p>Published author and TOEFL curriculum developer with extensive international teaching experience.</p>
                    </div>
                </div>
            </div>

            <!-- Instructor Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <img src="{{ asset('img/instructor-3.jpg') }}" alt="Emily Rodriguez" class="instructor-avatar mb-3">
                        <h4 class="fw-bold">Emily Rodriguez</h4>
                        <p class="text-muted mb-3">Comprehensive TOEFL Trainer</p>
                        <p>Certified TOEFL examiner with a holistic approach to test preparation and student success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-heading text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold">Live Class Pricing</h2>
            <p class="lead">Flexible and affordable options for every learner</p>
            <div class="divider mx-auto my-3"></div>
        </div>

        <div class="row g-4">
            <!-- Pricing Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4">Basic Package</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 750,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>4 Live Class Sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Group Learning</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Basic Study Materials</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Choose Plan</a>
                    </div>
                </div>
            </div>

            <!-- Pricing Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center border-primary">
                    <div class="card-body">
                        <span class="badge bg-primary mb-3">Most Popular</span>
                        <h3 class="fw-bold mb-4">Standard Package</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 1,250,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>8 Live Class Sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Small Group Learning</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Comprehensive Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mock Test Included</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Choose Plan</a>
                    </div>
                </div>
            </div>

            <!-- Pricing Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h3 class="fw-bold mb-4">Premium Package</h3>
                        <div class="h2 fw-bold text-primary mb-4">Rp 2,000,000</div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>12 Live Class Sessions</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>1-on-1 Mentoring</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Extensive Study Materials</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Multiple Mock Tests</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Personal Performance Analysis</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Choose Plan</a>
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
                <h2 class="display-5 fw-bold">Ready to Elevate Your TOEFL Skills?</h2>
                <p class="lead">Join our live classes and take the first step towards your target TOEFL score.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#class-schedule" class="btn btn-light btn-lg">Enroll Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('Home.section.footer')

<!-- JavaScript for Class Filtering -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const classCards = document.querySelectorAll('.class-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filter = this.getAttribute('data-filter');

                classCards.forEach(card => {
                    if (filter === 'all' || card.classList.contains(filter)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection
