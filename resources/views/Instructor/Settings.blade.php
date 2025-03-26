@extends('Instructor.MainDashboardInstructor')

@section('title')
Account Settings
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Account Settings</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-gear me-1"></i> Manage Profile
            </span>
        </div>
    </div>

    <!-- Profile and Settings Container -->
    <div class="row">
        <!-- Profile Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">Profile Overview</h5>
                </div>
                <div class="card-body text-center">
                    <div class="position-relative d-inline-block mb-3">
                        <img src="{{ asset('assets/images/profile2.jpeg') }}" 
                             alt="Profile Picture" 
                             class="rounded-circle mb-3" 
                             style="width: 150px; height: 150px; object-fit: cover;">
                        <button class="btn btn-primary btn-sm position-absolute bottom-0 end-0 rounded-circle" 
                                style="padding: 5px 10px;"
                                data-bs-toggle="modal" 
                                data-bs-target="#profilePictureModal">
                            <i class="bi bi-pencil"></i>
                        </button>
                    </div>
                    <h4 class="mb-1">Fritzy Rosemerian</h4>
                    <p class="text-muted mb-2">Language Instructor</p>
                    <span class="badge bg-success">Active</span>
                </div>
            </div>

            <!-- Account Status Card -->
            <div class="card shadow-lg border-0 rounded-lg mt-4">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">Account Status</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-success me-2"></i>
                            Account Verified
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-person-check text-primary me-2"></i>
                            Last Login: 26 Mar 2025, 10:30 AM
                        </li>
                        <li>
                            <i class="bi bi-clock text-warning me-2"></i>
                            Member Since: Jan 2024
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Settings Tabs -->
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-white p-4 border-0">
                    <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" 
                                    data-bs-target="#profile-content" type="button">
                                Profile
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="security-tab" data-bs-toggle="tab" 
                                    data-bs-target="#security-content" type="button">
                                Security
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" 
                                    data-bs-target="#notifications-content" type="button">
                                Notifications
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="settingsTabsContent">
                        <!-- Profile Tab -->
                        <div class="tab-pane fade show active" id="profile-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" value="Fritzy">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="Rosemerian">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" value="fritzy.rosemerian@example.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" value="+62 812-3456-7890">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="4">Passionate language instructor with 5+ years of experience in TOEFL and English language training.</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-2"></i>Save Profile
                                </button>
                            </form>
                        </div>

                        <!-- Security Tab -->
                        <div class="tab-pane fade" id="security-content">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control" placeholder="Enter current password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" placeholder="Enter new password">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm new password">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="twoFactorAuth">
                                    <label class="form-check-label" for="twoFactorAuth">
                                        Enable Two-Factor Authentication
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-warning">
                                    <i class="bi bi-shield-lock me-2"></i>Change Password
                                </button>
                            </form>
                        </div>

                        <!-- Notifications Tab -->
                        <div class="tab-pane fade" id="notifications-content">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h6>Email Notifications</h6>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="newStudentNotif" checked>
                                        <label class="form-check-label" for="newStudentNotif">
                                            New Student Enrollments
                                        </label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="messageNotif" checked>
                                        <label class="form-check-label" for="messageNotif">
                                            New Messages
                                        </label>
                                    </div>
                                    <div class="form-check form-switch mb-2">
                                        <input class="form-check-input" type="checkbox" id="assignmentNotif">
                                        <label class="form-check-label" for="assignmentNotif">
                                            Assignment Submissions
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-bell me-2"></i>Save Notification Preferences
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profile Picture Modal -->
<div class="modal fade" id="profilePictureModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Profile Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <img src="{{ asset('assets/images/profile2.jpeg') }}" 
                         alt="Current Profile" 
                         class="img-fluid rounded mb-3" 
                         style="max-height: 250px;">
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload New Picture</label>
                    <input type="file" class="form-control" accept="image/*">
                </div>
                <div class="alert alert-info">
                    <i class="bi bi-info-circle me-2"></i>
                    Max file size: 5MB. Recommended dimensions: 500x500 pixels.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Optional: Add custom scripts for settings page
        const settingsTabs = document.querySelectorAll('#settingsTabs .nav-link');
        settingsTabs.forEach(tab => {
            tab.addEventListener('shown.bs.tab', function(event) {
                // Optional: Add tab switch logic
                console.log('Tab switched:', event.target.id);
            });
        });
    });
</script>
@endsection