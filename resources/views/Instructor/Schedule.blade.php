@extends('Instructor.MainDashboardInstructor')

@section('title')
Instructor Schedule
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Schedule Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">My Teaching Schedule</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Live Classes Schedule -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Live Classes Schedule</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Course</th>
                            <th>Class Type</th>
                            <th>Students</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Apr 2024</td>
                            <td>10:00 AM</td>
                            <td>TOEFL Preparation</td>
                            <td><span class="badge bg-primary">Group Class</span></td>
                            <td>24</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>16 Apr 2024</td>
                            <td>02:00 PM</td>
                            <td>Advanced English Grammar</td>
                            <td><span class="badge bg-warning">Semi-Private</span></td>
                            <td>6</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- One-on-One Sessions Schedule -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">One-on-One Sessions</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Student</th>
                            <th>Purpose</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>17 Apr 2024</td>
                            <td>11:00 AM</td>
                            <td>Emily Chen</td>
                            <td>IELTS Speaking Prep</td>
                            <td>45 mins</td>
                            <td><span class="badge bg-success">Scheduled</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>18 Apr 2024</td>
                            <td>03:00 PM</td>
                            <td>Michael Rodriguez</td>
                            <td>Business English</td>
                            <td>60 mins</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Upcoming Schedule Overview -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Upcoming Schedule Summary</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Upcoming Classes</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">7</h4>
                                <i class="bi bi-calendar-event text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Upcoming One-on-Ones</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">4</h4>
                                <i class="bi bi-person-video text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Pending Confirmations</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">3</h4>
                                <i class="bi bi-clock text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <h6 class="text-muted mb-2">Total Teaching Hours</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="fw-bold">15</h4>
                                <i class="bi bi-clock-history text-info fs-2"></i>
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
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: Add interactivity for schedule management
        // For example, filtering, sorting tables, etc.
    });
</script>
@endsection
