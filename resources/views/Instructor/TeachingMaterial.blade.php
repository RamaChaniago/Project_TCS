@extends('Instructor.MainDashboardInstructor')

@section('title')
Teaching Materials Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Teaching Materials Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createMaterialModal">
                <i class="bi bi-plus-circle me-1"></i> Add New Material
            </button>
        </div>
    </div>

    <!-- Materials Table -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">My Teaching Materials</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Subject</th>
                            <th>Created Date</th>
                            <th>Views</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($materials as $material)
                        <tr>
                            <td>{{ $material->title }}</td>
                            <td>
                                <span class="badge bg-info">{{ $material->type }}</span>
                            </td>
                            <td>{{ $material->subject }}</td>
                            <td>{{ $material->created_at->format('d M Y') }}</td>
                            <td>{{ $material->views_count }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-outline-primary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#viewMaterialModal-{{ $material->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editMaterialModal-{{ $material->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger" 
                                            onclick="confirmDelete({{ $material->id }})">
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

    <!-- Material Statistics -->
    <div class="row mt-4">
        <div class="col-md-3 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="text-muted mb-2">Total Materials</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <h4 class="fw-bold">{{ $totalMaterials }}</h4> --}}
                        <i class="bi bi-collection text-primary fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="text-muted mb-2">Most Used Material</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <h4 class="fw-bold">{{ $mostUsedMaterial->title ?? 'N/A' }}</h4> --}}
                        <i class="bi bi-trophy text-warning fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="text-muted mb-2">Total Material Views</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <h4 class="fw-bold">{{ $totalMaterialViews }}</h4> --}}
                        <i class="bi bi-eye text-info fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card border-0 bg-light">
                <div class="card-body">
                    <h6 class="text-muted mb-2">Materials This Month</h6>
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- <h4 class="fw-bold">{{ $materialsThisMonth }}</h4> --}}
                        <i class="bi bi-plus-square text-success fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Material Modal -->
<div class="modal fade" id="createMaterialModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Teaching Material</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            {{-- <form action="{{ route('instructor.materials.store') }}" method="POST" enctype="multipart/form-data"> --}}
                {{-- @csrf --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Material Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Material Type</label>
                            <select class="form-select" name="type" required>
                                <option value="Worksheet">Worksheet</option>
                                <option value="Presentation">Presentation</option>
                                <option value="Video">Video</option>
                                <option value="PDF">PDF</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload File</label>
                        <input type="file" class="form-control" name="material_file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Material</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function confirmDelete(materialId) {
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
                axios.delete(`/instructor/materials/${materialId}`)
                    .then(response => {
                        Swal.fire('Deleted!', 'Material has been deleted.', 'success')
                        // Reload or remove the row
                        location.reload();
                    })
                    .catch(error => {
                        Swal.fire('Error', 'Could not delete the material.', 'error')
                    });
            }
        });
    }
</script>
@endsection