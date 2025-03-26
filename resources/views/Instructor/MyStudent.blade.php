@extends('Instructor.MainDashboardInstructor')

@section('title')
My Students
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">My Students</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Live Classes Students Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Live Classes Students</h5>
                <div class="d-flex align-items-center">
                    {{-- <span class="badge bg-primary text-white me-2">{{ count($liveClassStudents) }} Students</span> --}}
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-filter me-1"></i>Filter
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Attendance</th>
                            <th>Progress</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse($liveClassStudents as $student)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ $student->profile_picture ?? '/default-avatar.png' }}"
                                         class="rounded-circle me-3"
                                         width="40" height="40"
                                         alt="{{ $student->name }}">
                                    <div>
                                        <strong>{{ $student->name }}</strong>
                                        <div class="text-muted small">{{ $student->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $student->course }}</td>
                            <td>
                                <span class="badge bg-{{ $student->attendance > 80 ? 'success' : 'warning' }}">
                                    {{ $student->attendance }}%
                                </span>
                            </td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar"
                                         role="progressbar"
                                         style="width: {{ $student->progress }}%"
                                         aria-valuenow="{{ $student->progress }}"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                        {{ $student->progress }}%
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-info" title="View Details">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary" title="Send Message">
                                        <i class="bi bi-chat"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @empty --}}
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                No students found in live classes
                            </td>
                        </tr>
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- One-on-One Sessions Students Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">One-on-One Sessions Students</h5>
                <div class="d-flex align-items-center">
                    {{-- <span class="badge bg-success text-white me-2">{{ count($oneOnOneStudents) }} Students</span> --}}
                    <button class="btn btn-outline-success btn-sm">
                        <i class="bi bi-filter me-1"></i>Filter
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Session Focus</th>
                            <th>Session Progress</th>
                            <th>Next Session</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse($oneOnOneStudents as $student) --}}
                        <tr>
                            <td>
                                {{-- <div class="d-flex align-items-center">
                                    <img src="{{ $student->profile_picture ?? '/default-avatar.png' }}"
                                         class="rounded-circle me-3"
                                         width="40" height="40"
                                         alt=
                                         "{{ $student->name }}">
                                    <div>
                                        <strong>{{ $student->name }}</strong>
                                        <div class="text-muted small">
                                            {{ $student->email }}
                                        </div>
                                    </div>
                                </div> --}}
                            </td>
                            <td>
                                {{-- {{ $student->session_focus }} --}}
                            </td>
                            <td>
                                {{-- <div class="progress" style="height: 20px;">
                                    <div class="progress-bar bg-success"
                                         role="progressbar"
                                         style="width: {{ $student->session_progress }}%"
                                         aria-valuenow="{{ $student->session_progress }}"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                        {{ $student->session_progress }}%
                                    </div>
                                </div> --}}
                            </td>
                            <td>
                                <span class="badge bg-info">
                                    {{-- {{ $student->next_session_date }} --}}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-info" title="View Session Details">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-primary" title="Reschedule">
                                        <i class="bi bi-calendar-plus"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        {{-- @empty --}}
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                No students in one-on-one sessions
                            </td>
                        </tr>
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: Add interactive features like sorting, filtering
    });
</script>
@endsection
