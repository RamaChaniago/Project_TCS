@extends('Admin.MainDashboardAdmin')

@section('title')
User Management
@endsection

@section('content')
<div class="container-fluid py-5">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">User Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Admin Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Admin Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                <i class="bi bi-plus-circle me-2"></i>Add Admin
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Admins</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalAdmins }}</h4> --}}
                                </div>
                                <i class="bi bi-person-workspace text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Admins</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeAdmins }}</h4> --}}
                                </div>
                                <i class="bi bi-person-check-fill text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Admins (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newAdmins }}</h4> --}}
                                </div>
                                <i class="bi bi-person-plus-fill text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- admin List Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            {{-- <th>Specialization</th> --}}
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{ (($admins->currentPage() - 1) * $admins->perPage()) + $loop->iteration }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            {{-- <td>{{ $admin->specialization }}</td> --}}
                            <td>
                                <span class="badge {{ $admin->getAdminInfo && $admin->getAdminInfo->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $admin->getAdminInfo ? $admin->getAdminInfo->status : 'inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewAdminModal{{ $admin->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editAdminModal{{ $admin->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAdminModal{{ $admin->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Instructor Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Instructor Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                <i class="bi bi-plus-circle me-2"></i>Add Instructor
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Instructors</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalInstructors }}</h4> --}}
                                </div>
                                <i class="bi bi-person-workspace text-primary fs-2"></i>
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
                                    {{-- <h4 class="fw-bold">{{ $activeInstructors }}</h4> --}}
                                </div>
                                <i class="bi bi-person-check-fill text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Instructors (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newInstructors }}</h4> --}}
                                </div>
                                <i class="bi bi-person-plus-fill text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instructor List Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Specialization</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($instructors as $instructor)
                        <tr>
                            <td>{{ (($instructors->currentPage() - 1) * $instructors->perPage()) + $loop->iteration }}</td>
                            <td>{{ $instructor->name }}</td>
                            <td>{{ $instructor->email }}</td>
                            <td>{{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->specialization : '-' }}</td>
                            <td>
                                <span class="badge {{ $instructor->getInstructorInfo && $instructor->getInstructorInfo->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->status : 'inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewInstructorModal{{ $instructor->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editInstructorModal{{ $instructor->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteInstructorModal{{ $instructor->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- User/Customer Management Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">User/Customer Management</h5>
            <div class="d-flex gap-2">
                {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                    <i class="bi bi-plus-circle me-2"></i>Add User
                </button>
                <button class="btn btn-success" id="syncGoogleUsers">
                    <i class="bi bi-google me-2"></i>Sync Google Users
                </button> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Users</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalUsers }}</h4> --}}
                                </div>
                                <i class="bi bi-people-fill text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Google Users</h6>
                                    {{-- <h4 class="fw-bold">{{ $googleUsers }}</h4> --}}
                                </div>
                                <i class="bi bi-google text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Users</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeUsers }}</h4> --}}
                                </div>
                                <i class="bi bi-person-check-fill text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Users (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newUsers }}</h4> --}}
                                </div>
                                <i class="bi bi-person-plus-fill text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User List Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registration Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ (($users->currentPage() - 1) * $users->perPage()) + $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge {{ $user->getMemberInfo && $user->getMemberInfo->registration_type == 'google' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $user->getMemberInfo ? $user->getMemberInfo->registration_type : 'manual' }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $user->getMemberInfo && $user->getMemberInfo->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $user->getMemberInfo ? $user->getMemberInfo->status : 'inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewUserModal{{ $user->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal{{ $user->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Modals for Instructor Management -->
{{-- @include('Admin.Modals.AddInstructorModal')
@include('Admin.Modals.EditInstructorModal')
@include('Admin.Modals.ViewInstructorModal')
@include('Admin.Modals.DeleteInstructorModal') --}}

<!-- Modals for User Management -->
{{-- @include('Admin.Modals.AddUserModal')
@include('Admin.Modals.EditUserModal')
@include('Admin.Modals.ViewUserModal')
@include('Admin.Modals.DeleteUserModal') --}}

@include('Admin.Modals.modalusermanagement')
{{-- @include('Admin.Modals.EditInstructorModal') --}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Google User Sync Functionality
        document.getElementById('syncGoogleUsers').addEventListener('click', function() {
            // Implement Google OAuth user sync logic
            fetch('/admin/sync-google-users', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Users Synced',
                        text: `${data.newUsers} new users imported from Google`
                    });
                    // Optionally refresh the page or update the table
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Sync Failed',
                        text: data.message
                    });
                }
            });
        });
        
        // Pre-select user type based on which button was clicked
        const adminBtn = document.querySelector('button[data-bs-toggle="modal"][data-user-type="admin"]');
        const instructorBtn = document.querySelector('button[data-bs-toggle="modal"][data-user-type="instructor"]');
        const userBtn = document.querySelector('button[data-bs-toggle="modal"][data-user-type="user"]');
        
        if (adminBtn) {
            adminBtn.addEventListener('click', function() {
                document.getElementById('user_type').value = 'admin';
                // Hide instructor/user specific fields
                document.querySelectorAll('.instructor-field, .user-field').forEach(el => el.classList.add('d-none'));
            });
        }
        
        if (instructorBtn) {
            instructorBtn.addEventListener('click', function() {
                document.getElementById('user_type').value = 'instructor';
                // Show instructor fields, hide user fields
                document.querySelectorAll('.instructor-field').forEach(el => el.classList.remove('d-none'));
                document.querySelectorAll('.user-field').forEach(el => el.classList.add('d-none'));
            });
        }
        
        if (userBtn) {
            userBtn.addEventListener('click', function() {
                document.getElementById('user_type').value = 'user';
                // Show user fields, hide instructor fields
                document.querySelectorAll('.user-field').forEach(el => el.classList.remove('d-none'));
                document.querySelectorAll('.instructor-field').forEach(el => el.classList.add('d-none'));
            });
        }
        
        // Fix for showing password fields in edit modals
        document.querySelectorAll('.change-password').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                const targetId = this.getAttribute('data-target');
                const passwordFields = document.querySelectorAll(`.password-fields-${targetId}`);
                
                passwordFields.forEach(function(field) {
                    if (checkbox.checked) {
                        field.classList.remove('d-none');
                    } else {
                        field.classList.add('d-none');
                    }
                });
            });
        });
    });
</script>
@endsection