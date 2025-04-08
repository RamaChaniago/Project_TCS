@extends('Admin.MainDashboardAdmin')

@section('title')
Content Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Content Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Landing Page Content Management -->
    <div class="row">
        <!-- Home Page Content -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <!-- Landing Page Content Management -->
                    <div class="col-md-12 mb-4" data-aos="fade-up">
                        <div class="card shadow-lg border-0 rounded-lg">
                            <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Landing Page Content Management</h5>
                                
                                <!-- Dropdown for Landing Page Selection -->
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="landingPageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-menu-down me-2"></i>
                                        {{-- @if(request()->has('page'))
                                            @switch(request()->get('page'))
                                                @case('career')
                                                    Career Page
                                                    @break
                                                @case('promo')
                                                    Promo Page
                                                    @break
                                                @default
                                                    Home Page
                                            @endswitch
                                        @else
                                            Home Page
                                        @endif --}}
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="landingPageDropdown">
                                        <li>
                                            {{-- <a class="dropdown-item" href="{{ route('content.management', ['page' => 'home']) }}"> --}}
                                                <i class="bi bi-house me-2 text-primary"></i>Home Page
                                            </a>
                                        </li>
                                        <li>
                                            {{-- <a class="dropdown-item" href="{{ route('content.management', ['page' => 'career']) }}"> --}}
                                                <i class="bi bi-briefcase me-2 text-success"></i>Career Page
                                            </a>
                                        </li>
                                        <li>
                                            {{-- <a class="dropdown-item" href="{{ route('content.management', ['page' => 'promo']) }}"> --}}
                                                <i class="bi bi-tag me-2 text-warning"></i>Promo Page
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Conditional Content Based on Selected Page -->
                            {{-- @php
                                $selectedPage = request()->get('page', 'home');
                            @endphp --}}
            
                            {{-- @switch($selectedPage)
                                @case('home') --}}
                                    <!-- Home Page Content Management -->
                                    <div class="card-body border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h6 class="text-primary">Hero Section & CTA</h6>
                                                <p class="text-muted">Manage headline, call-to-action, and primary buttons</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#homeHeroModal">
                                                    <i class="bi bi-pencil me-2"></i>Edit Hero Section
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <!-- Home Page Specific Content -->
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Main Headline</h6>
                                                        <p class="fw-bold">{{ $homeContent->headline ?? 'Transforming Learning Experience' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Recommended Programs</h6>
                                                        {{-- <p class="fw-bold">{{ $homeContent->recommended_program_count ?? '5' }} Programs</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">FAQs</h6>
                                                        {{-- <p class="fw-bold">{{ $homeContent->faq_count ?? '4' }} Questions</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @break --}}
            
                                {{-- @case('career') --}}
                                    <!-- Career Page Content Management -->
                                    <div class="card-body border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h6 class="text-success">Career Page Content</h6>
                                                <p class="text-muted">Manage job openings, career sections, and opportunities</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#careerPageModal">
                                                    <i class="bi bi-pencil me-2"></i>Edit Career Content
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <!-- Career Page Specific Content -->
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Open Positions</h6>
                                                        {{-- <p class="fw-bold">{{ $careerContent->open_positions ?? '10' }} Jobs</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Active Departments</h6>
                                                        {{-- <p class="fw-bold">{{ $careerContent->active_departments ?? '5' }} Departments</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Last Updated</h6>
                                                        {{-- <p class="fw-bold">{{ $careerContent->last_updated ?? now()->format('d M Y') }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @break --}}
            
                                {{-- @case('promo') --}}
                                    <!-- Promo Page Content Management -->
                                    <div class="card-body border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <h6 class="text-warning">Promo Page Content</h6>
                                                <p class="text-muted">Manage promotional offers, banners, and special deals</p>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#promoPageModal">
                                                    <i class="bi bi-pencil me-2"></i>Edit Promo Content
                                                </button>
                                            </div>
                                        </div>
                                        
                                        <!-- Promo Page Specific Content -->
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Active Promos</h6>
                                                        {{-- <p class="fw-bold">{{ $promoContent->active_promos ?? '3' }} Offers</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Discount Range</h6>
                                                        {{-- <p class="fw-bold">{{ $promoContent->discount_range ?? '10-50%' }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card border-0 bg-light">
                                                    <div class="card-body">
                                                        <h6 class="text-muted mb-2">Promo Expiry</h6>
                                                        {{-- <p class="fw-bold">{{ $promoContent->promo_expiry ?? now()->addDays(30)->format('d M Y') }}</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @break
                            @endswitch --}}
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modals for each page type -->
            <!-- Home Page Hero Modal -->
            <div class="modal fade" id="homeHeroModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Home Page Hero Section</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        {{-- <form action="{{ route('home.update.hero') }}" method="POST">
                            @csrf --}}
                            <div class="modal-body">
                                <!-- Home Page Hero Edit Fields -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Career Page Modal -->
            <div class="modal fade" id="careerPageModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Career Page Content</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        {{-- <form action="{{ route('career.update.content') }}" method="POST"> --}}
                            {{-- @csrf --}}
                            <div class="modal-body">
                                <!-- Career Page Edit Fields -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            
            <!-- Promo Page Modal -->
            <div class="modal fade" id="promoPageModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Promo Page Content</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        {{-- <form action="{{ route('promo.update.content') }}" method="POST"> --}}
                            {{-- @csrf --}}
                            <div class="modal-body">
                                <!-- Promo Page Edit Fields -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</div>

<!-- Existing Modals remain the same -->

        <!-- Promo Page Content -->
        <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Promo Page Management</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPromoModal">
                        <i class="bi bi-plus-circle me-2"></i>Add Promo
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-muted mb-1">Active Promos</h6>
                                            <h4 class="fw-bold">6</h4>
                                        </div>
                                        <i class="bi bi-tags text-warning fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-muted mb-1">Total Discount</h6>
                                            <h4 class="fw-bold">50%</h4>
                                        </div>
                                        <i class="bi bi-percent text-info fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Programs Management -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Learning Programs Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProgramModal">
                <i class="bi bi-plus-circle me-2"></i>Add Program
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Program Type</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Live Class</td>
                            <td>Interactive Group Sessions</td>
                            <td>Rp 900,000</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewProgramModal">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgramModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>One-on-One Coaching</td>
                            <td>Personalized Training</td>
                            <td>Rp 1,750,000</td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewProgramModal">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProgramModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- More program rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Careers/Job Openings Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Job Openings Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addJobModal">
                <i class="bi bi-plus-circle me-2"></i>Add Job Opening
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Department</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TOEFL Instructor</td>
                            <td>Academic</td>
                            <td>Jakarta</td>
                            <td><span class="badge bg-success">Open</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewJobModal">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editJobModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- More job rows -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for adding/editing Home Content -->
<div class="modal fade" id="editHomeContentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Home Page Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Hero Section Headline</label>
                        <input type="text" class="form-control" placeholder="Enter headline">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hero Section Subheadline</label>
                        <textarea class="form-control" rows="3" placeholder="Enter subheadline"></textarea>
                    </div>
                    <!-- More form fields for home page content -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Similar modals for adding/editing promos, programs, and job openings would be added here -->
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Content management CRUD operations
        function handleContentOperation(endpoint, method, data) {
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
                    // Refresh content or page
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

        // Add event listeners for various content management operations
    });
</script>
@endsection
