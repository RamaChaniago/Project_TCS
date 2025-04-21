@extends('Main')

@section('title')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/program">Program</a></li>
                    <li class="breadcrumb-item"><a href="/program/live-class">Live Class</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Grammar for Speaking</li>
                </ol>
            </nav>

            <h1 class="display-5 fw-bold mb-4">Grammar for Speaking</h1>
            <p class="lead mb-4">Master English grammar rules and apply them confidently in your daily conversations.</p>

            <div class="d-flex align-items-center mb-4">
                <div class="bg-primary text-white rounded-circle p-3 me-3">
                    <i class="bi bi-calendar-check fs-4"></i>
                </div>
                <div>
                    <h5 class="mb-0">Next Batch</h5>
                    <p class="mb-0">April 25, 2025</p>
                </div>
            </div>

            <a href="#registration" class="btn btn-primary btn-lg px-5 py-3 mb-5">Register Now</a>
        </div>
        <div class="col-lg-4">
            <div class="card shadow border-0 rounded-4 overflow-hidden">
                <img src="/images/grammar-speaking.jpg" class="card-img-top" alt="Grammar for Speaking Course">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <span class="badge bg-success fs-6 p-2">Live Class</span>
                        <span class="fw-bold text-primary">$199</span>
                    </div>
                    <h5 class="card-title">Course Details</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-clock me-3 text-primary"></i>
                            <div>
                                <p class="mb-0 fw-medium">Duration</p>
                                <p class="mb-0 text-muted">8 Weeks</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-translate me-3 text-primary"></i>
                            <div>
                                <p class="mb-0 fw-medium">Level</p>
                                <p class="mb-0 text-muted">Intermediate</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="bi bi-camera-video me-3 text-primary"></i>
                            <div>
                                <p class="mb-0 fw-medium">Class Type</p>
                                <p class="mb-0 text-muted">Live Online</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Details Section -->
    <div class="row mb-5">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">About This Course</h2>
                    <p>The Grammar for Speaking course is designed to help students understand and apply English grammar in real conversations. This interactive live class focuses on practical usage rather than just memorizing rules.</p>
                    <p>You'll learn to identify common grammar patterns in everyday speech, practice forming correct sentences spontaneously, and gain confidence in expressing your thoughts clearly in English.</p>

                    <div class="row g-4 mt-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-light rounded-circle p-3 me-3">
                                    <i class="bi bi-trophy text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h5>What You'll Achieve</h5>
                                    <p class="text-muted">Speak with greater accuracy and confidence in various situations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="bg-light rounded-circle p-3 me-3">
                                    <i class="bi bi-person-check text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h5>Perfect For</h5>
                                    <p class="text-muted">Students who want to improve their spoken English in professional settings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">Course Curriculum</h2>

                    <div class="accordion" id="courseAccordion">
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#week1" aria-expanded="true" aria-controls="week1">
                                    Week 1: Present Tenses in Conversation
                                </button>
                            </h3>
                            <div id="week1" class="accordion-collapse collapse show" data-bs-parent="#courseAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Understanding Present Simple vs Present Continuous</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Practical Applications in Daily Conversations</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Common Mistakes and How to Avoid Them</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#week2" aria-expanded="false" aria-controls="week2">
                                    Week 2: Past Tenses for Storytelling
                                </button>
                            </h3>
                            <div id="week2" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Past Simple vs Past Continuous</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Using Perfect Tenses in Stories</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Narrative Techniques and Connectors</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#week3" aria-expanded="false" aria-controls="week3">
                                    Week 3: Future Forms and Planning
                                </button>
                            </h3>
                            <div id="week3" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Will vs Going to vs Present Continuous</span>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Expressing Certainty and Probability</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="bi bi-play-circle me-3 text-primary"></i>
                                            <span>Making Plans and Arrangements</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-outline-primary">View Full Curriculum</a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4" id="registration">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">Registration Form</h2>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="col-12">
                                <label for="englishLevel" class="form-label">Current English Level</label>
                                <select class="form-select" id="englishLevel" required>
                                    <option value="" selected disabled>Select your level</option>
                                    <option value="beginner">Beginner</option>
                                    <option value="intermediate">Intermediate</option>
                                    <option value="advanced">Advanced</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms">
                                        I agree to the terms and conditions
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Submit Registration</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4 sticky-lg-top" style="top: 2rem;">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Meet Your Instructor</h3>
                    <div class="text-center mb-4">
                        <img src="/images/instructor.jpg" class="rounded-circle img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;" alt="Instructor">
                        <h4 class="mt-3 mb-1">Sarah Johnson</h4>
                        <p class="text-muted">TEFL Certified English Instructor</p>
                    </div>
                    <p>Sarah has over 10 years of experience teaching English grammar in conversational contexts. She specializes in helping intermediate students overcome the plateau and achieve fluency.</p>
                    <hr class="my-4">
                    <h3 class="card-title mb-3">Course Highlights</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-0 ps-0">
                            <div class="d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>8 weeks of live interactive classes</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 ps-0">
                            <div class="d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Practice sessions with native speakers</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 ps-0">
                            <div class="d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Personalized feedback on your speech</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 ps-0">
                            <div class="d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Certificate of completion</span>
                            </div>
                        </li>
                        <li class="list-group-item border-0 ps-0">
                            <div class="d-flex">
                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                <span>Lifetime access to course materials</span>
                            </div>
                        </li>
                    </ul>
                    <div class="d-grid gap-2 mt-4">
                        <a href="#registration" class="btn btn-primary">Register Now</a>
                        <a href="#" class="btn btn-outline-primary">Download Syllabus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">What Our Students Say</h2>
            <p class="lead">Hear from people who have transformed their English speaking skills</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="card-text mb-4">"This course completely changed how I think about grammar. Instead of memorizing rules, I learned to apply them naturally in conversations. Now I speak with much more confidence!"</p>
                        <div class="d-flex align-items-center">
                            <img src="/images/testimonial1.jpg" class="rounded-circle me-3" width="50" height="50" alt="Student">
                            <div>
                                <h5 class="mb-0">Michael Lee</h5>
                                <small class="text-muted">Business Professional</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="card-text mb-4">"The interactive approach and small class size made all the difference. Sarah is an amazing teacher who tailors her feedback to each student's needs. Highly recommended!"</p>
                        <div class="d-flex align-items-center">
                            <img src="/images/testimonial2.jpg" class="rounded-circle me-3" width="50" height="50" alt="Student">
                            <div>
                                <h5 class="mb-0">Elena Petrova</h5>
                                <small class="text-muted">University Student</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <p class="card-text mb-4">"I've taken many English courses before, but this was the first one that actually improved my speaking. The focus on practical usage rather than theory makes all the difference."</p>
                        <div class="d-flex align-items-center">
                            <img src="/images/testimonial3.jpg" class="rounded-circle me-3" width="50" height="50" alt="Student">
                            <div>
                                <h5 class="mb-0">Carlos Rodriguez</h5>
                                <small class="text-muted">Marketing Specialist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">Frequently Asked Questions</h2>
            <p class="lead">Everything you need to know about our Grammar for Speaking course</p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                What level of English do I need for this course?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                This course is designed for intermediate English learners (B1-B2 level). You should already have basic grammar knowledge and vocabulary but want to improve your speaking accuracy and fluency.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                How are the live classes conducted?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Classes are conducted via Zoom with a maximum of 12 students per class to ensure everyone gets individual attention. Each session lasts 90 minutes and includes theory, practice exercises, and conversation practice.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                What if I miss a live session?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                All live sessions are recorded and made available to enrolled students within 24 hours. However, we recommend attending live whenever possible as the interactive practice is a key component of the learning experience.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Is there a payment plan available?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer a flexible payment plan where you can pay in two installments. Please contact our support team for more details on setting this up.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Will I receive a certificate after completing the course?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, upon successful completion of the course (attending at least 80% of live sessions and completing all assignments), you will receive a digital certificate that you can add to your LinkedIn profile or resume.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 bg-primary text-white rounded-4">
                    <div class="card-body p-5 text-center">
                        <h2 class="display-6 fw-bold mb-3">Ready to Transform Your English Speaking?</h2>
                        <p class="lead mb-4">Join our Grammar for Speaking course and start communicating with confidence.</p>
                        <a href="#registration" class="btn btn-light btn-lg px-5">Register Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script>
    // Add any custom JavaScript you need here
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>
@endsection
