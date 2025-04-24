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

<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="fw-bold mb-4">TOEFL Preparation & Certification Test</h1>
                <p class="lead mb-4">Take our comprehensive online TOEFL test to evaluate your English proficiency and prepare for the official exam.</p>
                <div class="d-flex gap-3">
                    <a href="#practice-test" class="btn btn-primary">Start Practice Test</a>
                    <a href="#test-info" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/toefl-test-hero.jpg') }}" alt="TOEFL Test" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Test Information Section -->
<section id="test-info" class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="fw-bold mb-3">About Our TOEFL Test</h2>
                <p class="lead">Our online TOEFL test follows the official exam format and provides accurate assessment of your skills</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-headphones text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="card-title">Listening</h5>
                        <p class="card-text">Measures your ability to understand spoken English in academic settings.</p>
                        <p><strong>34-51 Questions</strong> • <strong>60-90 Minutes</strong></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-book text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="card-title">Reading</h5>
                        <p class="card-text">Evaluates your ability to understand academic reading passages.</p>
                        <p><strong>30-40 Questions</strong> • <strong>54-72 Minutes</strong></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-mic text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="card-title">Speaking</h5>
                        <p class="card-text">Tests your ability to speak English effectively in academic contexts.</p>
                        <p><strong>4 Tasks</strong> • <strong>17 Minutes</strong></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-pencil text-primary" style="font-size: 2.5rem;"></i>
                        </div>
                        <h5 class="card-title">Writing</h5>
                        <p class="card-text">Assesses your ability to write academic English at university level.</p>
                        <p><strong>2 Tasks</strong> • <strong>50 Minutes</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Test Types Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="fw-bold mb-3">Our TOEFL Test Offerings</h2>
                <p class="lead">Choose the option that works best for your preparation needs</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-3">Free</span>
                        <h3 class="fw-bold mb-3">Practice Test</h3>
                        <p class="mb-4">Try our shortened version of the TOEFL test for free. Great for initial assessment.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sample questions from all sections</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Basic score report</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> 30-minute time limit</li>
                            <li class="mb-2"><i class="bi bi-x-circle-fill text-danger me-2"></i> No detailed analytics</li>
                        </ul>
                        <a href="/program/certification-testw" class="btn btn-outline-primary w-100">Start Practice Test</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm border-primary">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-3">Most Popular</span>
                        <h3 class="fw-bold mb-3">Full-Length Test</h3>
                        <p class="mb-4">Complete TOEFL test experience with detailed analytics and performance report.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> All four sections included</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Detailed score report</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Full exam time (3+ hours)</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Performance analytics</li>
                        </ul>
                        <a href="/program/certification-test" class="btn btn-primary w-100">Take Full Test</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-3">Premium</span>
                        <h3 class="fw-bold mb-3">Certified Assessment</h3>
                        <p class="mb-4">Get a professionally evaluated TOEFL test with instructor feedback.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Full-length TOEFL test</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Expert evaluation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Personalized feedback</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Improvement strategies</li>
                        </ul>
                        <a href="/program/certification-test" class="btn btn-outline-primary w-100">Get Certified Assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Test Section -->
<section id="practice-test" class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="fw-bold mb-3">Start Your Free Practice Test</h2>
                <p class="lead">Get familiar with the TOEFL format and assess your current level</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form>
                            <div class="mb-4">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                            </div>
                            
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label d-block">Select Test Sections</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="readingSection" checked>
                                    <label class="form-check-label" for="readingSection">Reading</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="listeningSection" checked>
                                    <label class="form-check-label" for="listeningSection">Listening</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="speakingSection">
                                    <label class="form-check-label" for="speakingSection">Speaking</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="writingSection">
                                    <label class="form-check-label" for="writingSection">Writing</label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Current English Level (Estimate)</label>
                                <select class="form-select">
                                    <option selected>Select your approximate level</option>
                                    <option value="beginner">Beginner (0-30)</option>
                                    <option value="intermediate">Intermediate (31-60)</option>
                                    <option value="advanced">Advanced (61-90)</option>
                                    <option value="proficient">Proficient (91-120)</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="termsCheck" required>
                                    <label class="form-check-label" for="termsCheck">
                                        I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100 py-3">Begin Practice Test</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Score Scale Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="fw-bold mb-3">TOEFL Score Scale</h2>
                <p class="lead">Understanding how TOEFL scores translate to language proficiency</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Section</th>
                                <th>Score Range</th>
                                <th>Beginner (0-30)</th>
                                <th>Intermediate (31-60)</th>
                                <th>Advanced (61-90)</th>
                                <th>Proficient (91-120)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reading</td>
                                <td>0-30</td>
                                <td>Basic comprehension of simple texts</td>
                                <td>Understanding of standard academic texts</td>
                                <td>Good comprehension of complex texts</td>
                                <td>Complete understanding of academic material</td>
                            </tr>
                            <tr>
                                <td>Listening</td>
                                <td>0-30</td>
                                <td>Basic understanding of slow, clear speech</td>
                                <td>Understanding of standard lectures and conversations</td>
                                <td>Good comprehension of complex academic speech</td>
                                <td>Complete understanding of native-speed academic speech</td>
                            </tr>
                            <tr>
                                <td>Speaking</td>
                                <td>0-30</td>
                                <td>Basic communication on familiar topics</td>
                                <td>Clear expression on general topics</td>
                                <td>Effective communication on complex issues</td>
                                <td>Natural, fluent speech on specialized topics</td>
                            </tr>
                            <tr>
                                <td>Writing</td>
                                <td>0-30</td>
                                <td>Basic writing on familiar topics</td>
                                <td>Clear expression of ideas with some errors</td>
                                <td>Well-developed essays with minimal errors</td>
                                <td>Sophisticated, error-free academic writing</td>
                            </tr>
                            <tr class="table-primary">
                                <td><strong>Total Score</strong></td>
                                <td><strong>0-120</strong></td>
                                <td><strong>0-30</strong></td>
                                <td><strong>31-60</strong></td>
                                <td><strong>61-90</strong></td>
                                <td><strong>91-120</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="lead">Find answers to common questions about our TOEFL test program</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How accurate is your online TOEFL test compared to the official ETS TOEFL?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our test is designed to closely mirror the format, question types, and scoring system of the official TOEFL iBT test. While no practice test can be 100% identical to the official exam, our tests are created by experienced TOEFL instructors and regularly updated to reflect the latest changes to the TOEFL format.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can I take the test on my mobile device?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, our online TOEFL test is fully responsive and can be taken on smartphones and tablets. However, for the best experience, especially for the speaking and writing sections, we recommend using a computer with a reliable microphone and keyboard.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How soon will I receive my test results?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                For the practice test, you'll receive automated scores for the reading and listening sections immediately. For the full test and certified assessment, reading and listening scores are immediate, while speaking and writing evaluations take 24-48 hours as they require human assessment.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Is your certification accepted by universities?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our certification is designed for practice and self-assessment. It is not an official TOEFL score and is not accepted by universities as a replacement for the official TOEFL iBT test administered by ETS. However, our assessment provides valuable insights into your potential performance on the official exam.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How many times can I take the test?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can take the free practice test as many times as you like. For the full-length test, you have two attempts included with your purchase. The certified assessment includes one attempt with detailed feedback from our instructors.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-center text-lg-start" data-aos="fade-right">
                <h2 class="fw-bold mb-3">Ready to excel in your TOEFL test?</h2>
                <p class="lead mb-0">Join thousands of students who have improved their scores with our program.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0" data-aos="fade-left">
                <a href="#practice-test" class="btn btn-light btn-lg px-4 py-3">Start Free Practice Test</a>
            </div>
        </div>
    </div>
</section>

<!-- Terms Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>1. Test Usage Agreement</h6>
                <p>By using our online TOEFL test services, you agree to use the materials for personal study purposes only. The content may not be reproduced, distributed, or used for commercial purposes without explicit permission.</p>
                
                <h6>2. Test Results</h6>
                <p>The test scores and assessments provided are for practice and self-evaluation only. They are not official TOEFL scores and cannot be used as substitutes for the official TOEFL iBT test administered by ETS.</p>
                
                <h6>3. Privacy Policy</h6>
                <p>We collect personal information solely for the purpose of providing our testing services. Your information will be kept confidential and will not be shared with third parties except as required by law.</p>
                
                <h6>4. Technical Requirements</h6>
                <p>You are responsible for ensuring that your device and internet connection meet the minimum requirements for taking the online test. We are not responsible for technical issues that may affect your test experience.</p>
                
                <h6>5. Refund Policy</h6>
                <p>For paid tests, refunds are available within 24 hours of purchase if you have not started the test. Once a test has been started, no refunds will be issued.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('Home.section.footer')

@endsection