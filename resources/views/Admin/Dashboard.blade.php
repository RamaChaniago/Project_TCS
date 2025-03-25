@extends('Admin.MainDashboardAdmin')

@section('title')
Admin Dashboard
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Dashboard Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Admin Dashboard</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- User Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">User Management Statistics</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Users</h6>
                                    <h4 class="fw-bold">5,420</h4>
                                </div>
                                <i class="bi bi-people-fill text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Instructors</h6>
                                    <h4 class="fw-bold">126</h4>
                                </div>
                                <i class="bi bi-person-workspace text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Registrations (30d)</h6>
                                    <h4 class="fw-bold">342</h4>
                                </div>
                                <i class="bi bi-person-plus-fill text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Course Management</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Courses</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">84</h4>
                                <i class="bi bi-book-half text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Active Customers</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">2,365</h4>
                                <i class="bi bi-person-check-fill text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Course Enrollments</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">1,542</h4>
                                <i class="bi bi-journal-check text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Avg. Course Rating</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">4.7</h4>
                                <i class="bi bi-star-fill text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaction Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Transaction Statistics</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Transactions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">1,287</h4>
                                <i class="bi bi-receipt text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Cart Abandonment</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">542</h4>
                                <i class="bi bi-cart-x text-danger fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Revenue</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">Rp 245,670,000</h4>
                                <i class="bi bi-cash-stack text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Certification Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Certification Statistics</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Live Class Completion</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">342</h4>
                                <i class="bi bi-camera-video text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">One-on-One Completed</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">128</h4>
                                <i class="bi bi-person-video text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">TOEFL Certifications</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">214</h4>
                                <i class="bi bi-patch-check text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Learning Package Complete</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">456</h4>
                                <i class="bi bi-bag-check text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Content Management</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Content Items</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">624</h4>
                                <i class="bi bi-collection text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Monthly Content Views</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">42,356</h4>
                                <i class="bi bi-eye text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Most Viewed Content</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">TOEFL Prep</h4>
                                <i class="bi bi-trophy text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reports & Analytics Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Conversion Funnel Analytics</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Page Visits</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">78,542</h4>
                                <i class="bi bi-window text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Program Interest</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">12,365</h4>
                                <i class="bi bi-heart text-danger fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Cart Additions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">3,214</h4>
                                <i class="bi bi-cart-plus text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Completed Transactions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">1,287</h4>
                                <i class="bi bi-check-circle text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Optional: Add any dashboard-specific JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize any charts or dynamic elements
    });
</script>
@endsection
