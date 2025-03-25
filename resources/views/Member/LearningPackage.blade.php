@extends('Member.MainDashboardMember')

@section('title')
Learning Package
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Learning Package Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Learning Packages</h3>
    </div>

    <!-- My Learning Packages Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">My Learning Packages</h5>
        </div>
        <div class="card-body p-0">
            <!-- Jika ada paket -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Purchased: 24 Maret 2025
                    </div>
                    <div>
                        <span class="badge bg-success text-white">
                            <i class="bi bi-check-circle me-1"></i> Active
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="me-3 mb-2">
                        <img src="images/toefl-package.jpg" alt="TOEFL Package"
                             class="rounded" width="100" height="80"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">TOEFL Preparation Advanced Course</h6>
                        <div class="text-muted small mb-1">Valid until: 24 Juni 2025</div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%;" 
                                 aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-muted small mt-1">Course progress: 45%</div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <a href="#" class="btn btn-success rounded-pill mb-2">
                            <i class="bi bi-play-fill me-1"></i> Continue
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">
                            <i class="bi bi-eye me-1"></i> View Content
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-my-courses.svg" alt="No Purchased Packages" class="mb-3" width="120">
                <h5>No Learning Packages Yet</h5>
                <p class="text-muted">You haven't purchased any learning packages yet.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Browse Packages</a>
            </div>
        </div>
    </div>

    <!-- Spacer jika tidak ada jarak -->
    <div class="mb-4"></div>

    <!-- Available Packages Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Available Packages</h5>
        </div>
        <div class="card-body p-0">
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <h5 class="fw-bold mb-0">TOEFL Preparation Advanced Course</h5>
                    </div>
                    <div>
                        <span class="badge bg-primary text-white">
                            <i class="bi bi-star-fill me-1"></i> Premium
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="me-3 mb-2">
                        <img src="images/toefl-package.jpg" alt="TOEFL Package"
                             class="rounded" width="120" height="90"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <div class="text-muted mb-2">Comprehensive preparation course designed to maximize your TOEFL score.</div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-book me-1"></i> 12 Modules
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-clock me-1"></i> 3 Months Access
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-person-video3 me-1"></i> 4 Live Sessions
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div class="text-end">
                            <div class="text-decoration-line-through text-muted small">Rp 1.800.000</div>
                            <div class="fw-bold text-primary mb-2">Rp 1.500.000</div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill">
                            <i class="bi bi-cart-plus me-1"></i> Purchase
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-packages.svg" alt="No Packages" class="mb-3" width="120">
                <h5>No Learning Packages Available</h5>
                <p class="text-muted">There are currently no learning packages available for your account level.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Upgrade Account</a>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if(isset($packages) && count($packages) > 5)
    <nav aria-label="Learning packages pagination" class="mt-4">
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
