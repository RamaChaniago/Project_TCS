@extends('Admin.MainDashboardAdmin')

@section('title')
System Settings
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">System Settings</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- System Configuration Sections -->
    <div class="row">
        <!-- User Management Section -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">User Management</h5>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="bi bi-plus-circle me-2"></i>Add User
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-muted mb-1">Total Users</h6>
                                            {{-- <h4 class="fw-bold">{{ $totalUsers }}</h4> --}}
                                        </div>
                                        <i class="bi bi-people text-primary fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-muted mb-1">Active Users</h6>
                                            {{-- <h4 class="fw-bold">{{ $activeUsers }}</h4> --}}
                                        </div>
                                        <i class="bi bi-person-check text-success fs-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Users Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <span class="badge {{ $user->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                            {{ $user->status }}
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
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Settings Section -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">Application Settings</h5>
                </div>
                <div class="card-body">
                    <form id="applicationSettingsForm">
                        <div class="mb-3">
                            <label class="form-label">Site Name</label>
                            <input type="text" class="form-control" name="site_name" value="EnglishVIT">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Site Logo</label>
                            <input type="file" class="form-control" name="site_logo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Configuration</label>
                            <input type="email" class="form-control" name="admin_email" placeholder="Admin Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Maintenance Mode</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="maintenance_mode">
                                <label class="form-check-label">Enable Maintenance Mode</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- System Configurations Section -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">System Configurations</h5>
                </div>
                <div class="card-body">
                    <form id="systemConfigForm">
                        <div class="mb-3">
                            <label class="form-label">Max Test Attempts</label>
                            <input type="number" class="form-control" name="max_test_attempts" value="3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Test Duration (minutes)</label>
                            <input type="number" class="form-control" name="test_duration" value="120">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Passing Score</label>
                            <input type="number" class="form-control" name="passing_score" value="80">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Language Sections</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="sections[]" value="listening" checked>
                                <label class="form-check-label">Listening</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="sections[]" value="reading" checked>
                                <label class="form-check-label">Reading</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="sections[]" value="writing" checked>
                                <label class="form-check-label">Writing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="sections[]" value="speaking" checked>
                                <label class="form-check-label">Speaking</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Configurations</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment and Subscription Settings -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Payment & Subscription Settings</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPaymentMethodModal">
                <i class="bi bi-plus-circle me-2"></i>Add Payment Method
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Subscriptions</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalSubscriptions }}</h4> --}}
                                </div>
                                <i class="bi bi-credit-card text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Subscriptions</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeSubscriptions }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Payment Methods</h6>
                                    {{-- <h4 class="fw-bold">{{ $paymentMethods }}</h4> --}}
                                </div>
                                <i class="bi bi-wallet2 text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Method</th>
                            <th>Provider</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($paymentMethodsList as $method)
                        <tr>
                            <td>{{ $method->name }}</td>
                            <td>{{ $method->provider }}</td>
                            <td>
                                <span class="badge {{ $method->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $method->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPaymentMethodModal{{ $method->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePaymentMethodModal{{ $method->id }}">
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

<!-- Modals for System Settings Management -->
{{-- Modals for:
     - Add/Edit/View/Delete Users
     - Add/Edit/Delete Payment Methods
     - Other system-related modals
--}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // System Settings CRUD Operations
        function handleSystemSettingsOperation(endpoint, method, data) {
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

        // Event listeners for form submissions
        document.getElementById('applicationSettingsForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            handleSystemSettingsOperation('/admin/settings/application', 'POST', Object.fromEntries(formData));
        });

        document.getElementById('systemConfigForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            handleSystemSettingsOperation('/admin/settings/system', 'POST', Object.fromEntries(formData));
        });

        // Additional event listeners for other settings operations
    });
</script>
@endsection