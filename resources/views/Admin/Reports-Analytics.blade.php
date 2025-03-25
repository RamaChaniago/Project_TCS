@extends('Admin.MainDashboardAdmin')

@section('title')
Reports & Analytics - EnglishVIT
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">TOEFL Performance Analytics</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Performance Overview Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Performance Overview</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-primary" id="exportReportsBtn">
                    <i class="bi bi-file-earmark-excel me-2"></i>Export Reports
                </button>
                <select class="form-select w-auto" id="dateRangeSelector">
                    <option value="this_month">This Month</option>
                    <option value="last_month">Last Month</option>
                    <option value="this_year">This Year</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Test Takers</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalTestTakers }}</h4> --}}
                                </div>
                                <i class="bi bi-people text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Average Total Score</h6>
                                    {{-- <h4 class="fw-bold">{{ $averageTotalScore }}</h4> --}}
                                </div>
                                <i class="bi bi-graph-up text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Highest Score</h6>
                                    {{-- <h4 class="fw-bold">{{ $highestScore }}</h4> --}}
                                </div>
                                <i class="bi bi-trophy text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Completed Tests</h6>
                                    {{-- <h4 class="fw-bold">{{ $completedTests }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Score Breakdown -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Section Score Breakdown</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-0 bg-light mb-3">
                        <div class="card-body">
                            <h6 class="text-muted mb-3">Reading Section Performance</h6>
                            {{-- Chart or visualization for reading scores --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 bg-light mb-3">
                        <div class="card-body">
                            <h6 class="text-muted mb-3">Listening Section Performance</h6>
                            {{-- Chart or visualization for listening scores --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Test Takers Details -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Test Takers Details</h5>
            <div class="d-flex gap-2">
                <input type="text" class="form-control" placeholder="Search Participant" id="searchParticipant">
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Participant ID</th>
                            <th>Name</th>
                            <th>Test Date</th>
                            <th>Total Score</th>
                            <th>Reading</th>
                            <th>Listening</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($testTakers as $participant)
                        <tr>
                            <td>{{ $participant->id }}</td>
                            <td>{{ $participant->name }}</td>
                            <td>{{ $participant->test_date->format('d M Y') }}</td>
                            <td>{{ $participant->total_score }}</td>
                            <td>{{ $participant->reading_score }}</td>
                            <td>{{ $participant->listening_score }}</td>
                            <td>
                                <span class="badge {{ $participant->status_color }}">
                                    {{ $participant->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewParticipantModal{{ $participant->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Detailed Views -->
{{-- Modals for detailed participant information --}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Export reports functionality
        document.getElementById('exportReportsBtn')?.addEventListener('click', function() {
            const selectedDateRange = document.getElementById('dateRangeSelector').value;
            // Implement export logic
            console.log('Exporting reports for:', selectedDateRange);
        });

        // Search participant functionality
        document.getElementById('searchParticipant')?.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search functionality
            console.log('Searching for:', searchTerm);
        });

        // Date range change event
        document.getElementById('dateRangeSelector')?.addEventListener('change', function(e) {
            const selectedDateRange = e.target.value;
            // Implement date range filtering
            console.log('Selected date range:', selectedDateRange);
        });
    });
</script>
@endsection