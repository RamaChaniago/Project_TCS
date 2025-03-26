@extends('Instructor.MainDashboardInstructor')

@section('title')
Assignment Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Assignment Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAssignmentModal">
                <i class="bi bi-plus-circle me-1"></i> Create New Assignment
            </button>
        </div>
    </div>

    <!-- Assignment Statistics -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Assignment Overview</h5>
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

    <!-- Assignment List -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Assignments List</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Class</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($assignments as $assignment)
                        <tr>
                            <td>{{ $assignment->title }}</td>
                            <td>{{ $assignment->class_name }}</td>
                            <td>{{ $assignment->deadline }}</td>
                            <td>
                                <span class="badge 
                                    @if($assignment->status == 'Pending') bg-warning 
                                    @elseif($assignment->status == 'Completed') bg-success 
                                    @else bg-secondary 
                                    @endif">
                                    {{ $assignment->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewAssignmentModal{{ $assignment->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editAssignmentModal{{ $assignment->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $assignment->id }})">
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
</div>

<!-- Create Assignment Modal -->
<div class="modal fade" id="createAssignmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Assignment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            {{-- <form action="{{ route('assignments.store') }}" method="POST"> --}}
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Assignment Title</label>
                            <input type="text" class="form-control" name="title" required>
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
                            <label class="form-label">Deadline</label>
                            <input type="datetime-local" class="form-control" name="deadline" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Assignment Type</label>
                            <select class="form-select" name="type" required>
                                <option value="homework">Homework</option>
                                <option value="project">Project</option>
                                <option value="quiz">Quiz</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Assignment</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function confirmDelete(assignmentId) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Implement delete logic here
                axios.delete(`/assignments/${assignmentId}`)
                    .then(response => {
                        Swal.fire(
                            'Deleted!',
                            'Assignment has been deleted.',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    })
                    .catch(error => {
                        Swal.fire(
                            'Error!',
                            'Could not delete the assignment.',
                            'error'
                        );
                    });
            }
        });
    }
</script>
@endsection