@extends('Member.MainDashboardMember')

@section('title')
Certification Tests
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Certification Tests Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Certification Tests</h3>
    </div>

    <!-- My Certification Tests Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">My Test History</h5>
        </div>
        <div class="card-body p-0">
            <!-- If there are tests -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Completed: 15 Maret 2025
                    </div>
                    <div>
                        <span class="badge bg-success text-white">
                            <i class="bi bi-check-circle me-1"></i> Passed
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 mb-2">
                        <img src="images/toefl-cert.jpg" alt="TOEFL Certification"
                             class="rounded" width="100" height="80"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">TOEFL Certification Test</h6>
                        <div class="text-muted small mb-1">Score: 92/120</div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 76%;" 
                                 aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-muted small mt-1">Performance: 76%</div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <a href="#" class="btn btn-primary rounded-pill mb-2">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Download Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-eye me-1"></i> Test Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Another Test Entry -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Completed: 10 Februari 2025
                    </div>
                    <div>
                        <span class="badge bg-warning text-white">
                            <i class="bi bi-exclamation-triangle me-1"></i> Pending
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 mb-2">
                        <img src="images/ielts-cert.jpg" alt="IELTS Certification"
                             class="rounded" width="100" height="80"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">IELTS Academic Test</h6>
                        <div class="text-muted small mb-1">Waiting for Results</div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" 
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-muted small mt-1">Processing: 50%</div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <span class="btn btn-outline-secondary rounded-pill mb-2 disabled">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Certificate Pending
                        </span>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-eye me-1"></i> Test Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-tests.svg" alt="No Certification Tests" class="mb-3" width="120">
                <h5>No Certification Tests</h5>
                <p class="text-muted">You haven't taken any certification tests yet.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Browse Tests</a>
            </div>
        </div>
    </div>

    <!-- Available Certification Tests Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Available Certification Tests</h5>
        </div>
        <div class="card-body p-0">
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <h5 class="fw-bold mb-0">TOEFL Certification Exam</h5>
                    </div>
                    <div>
                        <span class="badge bg-primary text-white">
                            <i class="bi bi-star-fill me-1"></i> Recommended
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="me-3 mb-2">
                        <img src="images/toefl-test.jpg" alt="TOEFL Test"
                             class="rounded" width="120" height="90"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <div class="text-muted mb-2">Standardized test for measuring English language proficiency for non-native speakers.</div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-clock me-1"></i> 4 Hours Duration
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-bar-chart me-1"></i> 4 Sections
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-globe me-1"></i> International Recognized
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div class="text-end">
                            <div class="text-decoration-line-through text-muted small">Rp 2.500.000</div>
                            <div class="fw-bold text-primary mb-2">Rp 2.200.000</div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill">
                            <i class="bi bi-pencil-square me-1"></i> Register for Test
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-tests-available.svg" alt="No Tests Available" class="mb-3" width="120">
                <h5>No Tests Available</h5>
                <p class="text-muted">There are currently no certification tests available for your account.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Explore Options</a>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if(isset($tests) && count($tests) > 5)
    <nav aria-label="Certification tests pagination" class="mt-4">
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