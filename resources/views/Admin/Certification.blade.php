@extends('Admin.MainDashboardAdmin')

@section('title')
Certificate Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Certificate Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Certificate Template Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Certificate Template Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCertificateTemplateModal">
                <i class="bi bi-plus-circle me-2"></i>Add Certificate Template
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Templates</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalCertificateTemplates }}</h4> --}}
                                </div>
                                <i class="bi bi-file-earmark-text text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Templates</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeCertificateTemplates }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Programs Covered</h6>
                                    {{-- <h4 class="fw-bold">{{ $programsCovered }}</h4> --}}
                                </div>
                                <i class="bi bi-collection text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Recent Templates</h6>
                                    {{-- <h4 class="fw-bold">{{ $recentTemplates }}</h4> --}}
                                </div>
                                <i class="bi bi-clock text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate Templates Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Template Name</th>
                            <th>Program Type</th>
                            <th>Design</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($certificateTemplates as $template)
                        <tr>
                            <td>{{ $template->id }}</td>
                            <td>{{ $template->name }}</td>
                            <td>{{ $template->program_type }}</td>
                            <td>
                                <img src="{{ $template->preview_image }}" class="img-thumbnail" style="max-width: 100px;">
                            </td>
                            <td>
                                <span class="badge {{ $template->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $template->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewTemplateModal{{ $template->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editTemplateModal{{ $template->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTemplateModal{{ $template->id }}">
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

    <!-- Issued Certificates Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Issued Certificates</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-primary" id="exportCertificatesBtn">
                    <i class="bi bi-file-earmark-excel me-2"></i>Export
                </button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#issueCertificateModal">
                    <i class="bi bi-plus-circle me-2"></i>Issue Certificate
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Certificates</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalCertificates }}</h4> --}}
                                </div>
                                <i class="bi bi-award text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Certificates This Month</h6>
                                    {{-- <h4 class="fw-bold">{{ $monthCertificates }}</h4> --}}
                                </div>
                                <i class="bi bi-calendar-check text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Pending Certificates</h6>
                                    {{-- <h4 class="fw-bold">{{ $pendingCertificates }}</h4> --}}
                                </div>
                                <i class="bi bi-clock text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Programs Certified</h6>
                                    {{-- <h4 class="fw-bold">{{ $programsCertified }}</h4> --}}
                                </div>
                                <i class="bi bi-graph-up text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificates Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Certificate ID</th>
                            <th>Participant</th>
                            <th>Program</th>
                            <th>Template</th>
                            <th>Issue Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($certificates as $certificate)
                        <tr>
                            <td>{{ $certificate->id }}</td>
                            <td>{{ $certificate->user->name }}</td>
                            <td>{{ $certificate->program->name }}</td>
                            <td>{{ $certificate->template->name }}</td>
                            <td>{{ $certificate->issued_at->format('d M Y') }}</td>
                            <td>
                                <span class="badge {{ $certificate->status_color }}">
                                    {{ $certificate->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewCertificateModal{{ $certificate->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#reissueCertificateModal{{ $certificate->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCertificateModal{{ $certificate->id }}">
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

<!-- Modals for Certificate Management -->
{{-- Modals for:
     - Add/Edit/View/Delete Certificate Templates
     - Issue/Edit/View/Delete Certificates
--}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Certificate and Template CRUD operations
        function handleCRUDOperation(endpoint, method, data) {
            fetch(endpoint, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Operation Successful',
                        text: data.message
                    });
                    // Refresh table or page
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Operation Failed',
                        text: data.message
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An unexpected error occurred'
                });
            });
        }

        // Export certificates functionality
        document.getElementById('exportCertificatesBtn')?.addEventListener('click', function() {
            // Implement export logic
            console.log('Exporting certificates');
        });

        // Add event listeners for other CRUD operations
    });
</script>
@endsection
```
