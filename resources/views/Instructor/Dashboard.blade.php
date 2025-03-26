@extends('Instructor.MainDashboardInstructor')

@section('title')
Instructor Dashboard
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Dashboard Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Instructor Dashboard</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- My Schedule Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">My Schedule</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Upcoming Classes</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">5</h4>
                                <i class="bi bi-calendar-event text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">One-on-One Sessions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">3</h4>
                                <i class="bi bi-person-video text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Weekly Hours</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">12</h4>
                                <i class="bi bi-clock text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Next Scheduled Class</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">TOEFL Prep</h4>
                                <i class="bi bi-calendar-check text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Live Class Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Live Class Management</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Live Classes</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">7</h4>
                                <i class="bi bi-camera-video text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Students Enrolled</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">142</h4>
                                <i class="bi bi-people text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Class Completion Rate</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">92%</h4>
                                <i class="bi bi-check-circle text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- One-on-One Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">One-on-One Sessions</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Sessions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">18</h4>
                                <i class="bi bi-person-video2 text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Completed Sessions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">14</h4>
                                <i class="bi bi-check-square text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Upcoming Sessions</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">4</h4>
                                <i class="bi bi-calendar-plus text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Students Counseled</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">32</h4>
                                <i class="bi bi-people-fill text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- My Students Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">My Students</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Students</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">186</h4>
                                <i class="bi bi-people text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Active Learners</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">142</h4>
                                <i class="bi bi-person-check text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Learners Improving</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">64</h4>
                                <i class="bi bi-graph-up text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Average Student Rating</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">4.6</h4>
                                <i class="bi bi-star-fill text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Assignments Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Assignments Management</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Assignments</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">24</h4>
                                <i class="bi bi-file-text text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Pending Review</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">8</h4>
                                <i class="bi bi-clock text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Graded Assignments</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">16</h4>
                                <i class="bi bi-check-square text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Average Grade</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">B+</h4>
                                <i class="bi bi-award text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Assessments Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Assessments Overview</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Assessments</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">12</h4>
                                <i class="bi bi-journal-text text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Created Assessments</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">8</h4>
                                <i class="bi bi-pencil-square text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Active Assessments</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">5</h4>
                                <i class="bi bi-activity text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Assessment Completion</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">76%</h4>
                                <i class="bi bi-graph-up text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Teaching Materials Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Teaching Materials</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Materials</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">42</h4>
                                <i class="bi bi-collection text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Recently Added</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">3</h4>
                                <i class="bi bi-plus-square text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Most Used Material</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">TOEFL Prep</h4>
                                <i class="bi bi-trophy text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Material Views</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">12,365</h4>
                                <i class="bi bi-eye text-info fs-2"></i>
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