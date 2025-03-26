@extends('Instructor.MainDashboardInstructor')

@section('title')
Assessment Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Assessment Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAssessmentModal">
                <i class="bi bi-plus-circle me-2"></i>Create New Assessment
            </button>
        </div>
    </div>

    <!-- Assessment List Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Assessment Overview</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Class</th>
                            <th>Type</th>
                            <th>Total Score</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($assessments as $assessment)
                        <tr>
                            <td>{{ $assessment->id }}</td>
                            <td>{{ $assessment->title }}</td>
                            <td>{{ $assessment->class_name }}</td>
                            <td>
                                <span class="badge 
                                    @if($assessment->type == 'Quiz') bg-primary 
                                    @elseif($assessment->type == 'Exam') bg-danger 
                                    @else bg-success 
                                    @endif">
                                    {{ $assessment->type }}
                                </span>
                            </td>
                            <td>{{ $assessment->total_score }}</td>
                            <td>{{ $assessment->created_at->format('d M Y') }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" 
                                        data-bs-target="#viewAssessmentModal-{{ $assessment->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" 
                                        data-bs-target="#editAssessmentModal-{{ $assessment->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" 
                                        data-bs-target="#deleteAssessmentModal-{{ $assessment->id }}">
                                        <i class="bi bi-trash"></i>
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

    <!-- Student Performance Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Student Performance</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Student Name</th>
                            <th>Assessment</th>
                            <th>Score</th>
                            <th>Grade</th>
                            <th>Submission Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($studentAssessments as $studentAssessment)
                        <tr>
                            <td>{{ $studentAssessment->student_name }}</td>
                            <td>{{ $studentAssessment->assessment_title }}</td>
                            <td>{{ $studentAssessment->score }}/{{ $studentAssessment->total_score }}</td>
                            <td>
                                <span class="badge 
                                    @if($studentAssessment->grade == 'A') bg-success 
                                    @elseif($studentAssessment->grade == 'B') bg-primary 
                                    @elseif($studentAssessment->grade == 'C') bg-warning 
                                    @else bg-danger 
                                    @endif">
                                    {{ $studentAssessment->grade }}
                                </span>
                            </td>
                            <td>{{ $studentAssessment->submitted_at->format('d M Y') }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" data-bs-toggle="modal" 
                                    data-bs-target="#viewStudentAssessmentModal-{{ $studentAssessment->id }}">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Create Assessment Modal -->
<div class="modal fade" id="createAssessmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Assessment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            {{-- <form action="{{ route('assessments.store') }}" method="POST"> --}}
                {{-- @csrf --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Assessment Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Assessment Type</label>
                            <select class="form-select" name="type" required>
                                <option value="Quiz">Quiz</option>
                                <option value="Exam">Exam</option>
                                <option value="Assignment">Assignment</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Class</label>
                            <select class="form-select" name="class_id" required>
                                {{-- @foreach($classes as $class)
                                <option value="{{ $class->id }}">{{ $class->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Total Score</label>
                            <input type="number" class="form-control" name="total_score" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Assessment</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: Add assessment management specific JavaScript
        // For example, form validation, dynamic filtering, etc.
    });
</script>
@endsection