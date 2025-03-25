@extends('Member.MainDashboardMember')

@section('title')
My Certificates
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Certificates Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">My Certificates</h3>
        <div>
            <a href="#" class="btn btn-outline-primary rounded-pill">
                <i class="bi bi-search me-1"></i> Browse Certificates
            </a>
        </div>
    </div>

    <!-- Completed Programs Certificates Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Completed Programs</h5>
        </div>
        <div class="card-body p-0">
            <!-- Certificate Item 1 -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Issued: 15 March 2025
                    </div>
                    <div>
                        <span class="badge bg-success text-white">
                            <i class="bi bi-check-circle me-1"></i> Verified
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 mb-2">
                        <img src="images/certificate-icon.jpg" alt="Certificate"
                             class="rounded" width="100" height="150"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">Advanced Web Development Bootcamp</h6>
                        <div class="text-muted small mb-1">Issued by: Tech Academy</div>
                        <div class="text-muted small mb-2">Duration: 3 Months</div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-award me-1"></i> Professional Certification
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-journal-code me-1"></i> Web Development
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <a href="#" class="btn btn-primary rounded-pill mb-2">
                            <i class="bi bi-download me-1"></i> Download Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-info-circle me-1"></i> Certificate Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Certificate Item 2 -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Issued: 22 February 2025
                    </div>
                    <div>
                        <span class="badge bg-warning text-white">
                            <i class="bi bi-clock me-1"></i> Pending Verification
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 mb-2">
                        <img src="images/certificate-icon-2.jpg" alt="Certificate"
                             class="rounded" width="100" height="150"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">Data Science Professional Course</h6>
                        <div class="text-muted small mb-1">Issued by: Data Institute</div>
                        <div class="text-muted small mb-2">Duration: 6 Months</div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-award me-1"></i> Professional Certification
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-graph-up me-1"></i> Data Science
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <a href="#" class="btn btn-warning rounded-pill mb-2">
                            <i class="bi bi-download me-1"></i> Download Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-info-circle me-1"></i> Certificate Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State (Hidden by default) -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-certificates.svg" alt="No Certificates" class="mb-3" width="120">
                <h5>No Certificates Yet</h5>
                <p class="text-muted">You haven't completed any programs or courses.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Explore Programs</a>
            </div>
        </div>
    </div>

    <!-- Available Programs Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Recommended Programs</h5>
        </div>
        <div class="card-body p-0">
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <h5 class="fw-bold mb-0">Artificial Intelligence Expert Program</h5>
                    </div>
                    <div>
                        <span class="badge bg-info text-white">
                            <i class="bi bi-star-fill me-1"></i> Most Popular
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="me-3 mb-2">
                        <img src="images/ai-program.jpg" alt="AI Program"
                             class="rounded" width="120" height="180"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <div class="text-muted mb-2">Comprehensive AI certification program covering advanced machine learning and deep learning techniques.</div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-clock me-1"></i> 6 Months
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-person-workspace me-1"></i> Online & Offline
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-trophy me-1"></i> Advanced Level
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div class="text-end">
                            <div class="text-decoration-line-through text-muted small">Rp 15.000.000</div>
                            <div class="fw-bold text-primary mb-2">Rp 12.500.000</div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill">
                            <i class="bi bi-cart-plus me-1"></i> Enroll Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State (Hidden by default) -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-programs.svg" alt="No Recommended Programs" class="mb-3" width="120">
                <h5>No Recommendations Available</h5>
                <p class="text-muted">We couldn't find any recommended programs for you at the moment.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Explore Programs</a>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if(isset($certificates) && count($certificates) > 5)
    <nav aria-label="Certificates pagination" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    @endif
</div>
@endsection
