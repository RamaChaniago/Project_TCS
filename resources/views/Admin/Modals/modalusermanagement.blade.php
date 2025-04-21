<!-- Modals for Instructor Management -->

<!-- Add Admin Modal -->
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addAdminModalLabel">Add New Admin</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="admin_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="admin_name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="admin_email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="admin_phone" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="admin_role" class="form-label">Role</label>
                            <select class="form-select" id="admin_role" name="role" required>
                                <option value="superadmin">Super Admin</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="admin_password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="admin_password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_status" class="form-label">Status</label>
                            <select class="form-select" id="admin_status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="admin_profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="admin_profile_image" name="profile_image">
                        </div>
                        <div class="col-12">
                            <label for="admin_bio" class="form-label">Bio/Description</label>
                            <textarea class="form-control" id="admin_bio" name="bio" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Add Instructor Modal -->
<div class="modal fade" id="addInstructorModal" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addInstructorModalLabel">Add New Instructor</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="specialization" class="form-label">Specialization</label>
                            <input type="text" class="form-control" id="specialization" name="specialization" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="profile_image" name="profile_image">
                        </div>
                        <div class="col-12">
                            <label for="bio" class="form-label">Bio/Description</label>
                            <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Instructor</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Instructor Modal -->
<div class="modal fade" id="viewInstructorModal" tabindex="-1" aria-labelledby="viewInstructorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="viewInstructorModalLabel">Instructor Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center mb-3">
                        <img src="" id="instructor_profile_image" alt="Instructor Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <div id="instructor_status" class="badge bg-success">Active</div>
                    </div>
                    <div class="col-md-8">
                        <h4 id="instructor_name">Instructor Name</h4>
                        <p id="instructor_specialization" class="text-muted">Specialization Area</p>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <p><strong>Email:</strong> <span id="instructor_email"></span></p>
                                <p><strong>Phone:</strong> <span id="instructor_phone"></span></p>
                                <p><strong>Joined:</strong> <span id="instructor_joined_date"></span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Courses:</strong> <span id="instructor_courses_count">0</span></p>
                                <p><strong>Students:</strong> <span id="instructor_students_count">0</span></p>
                                <p><strong>Rating:</strong> <span id="instructor_rating">N/A</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h5>Bio</h5>
                    <p id="instructor_bio">Instructor bio text will appear here.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Instructor Modal -->
<div class="modal fade" id="editInstructorModal" tabindex="-1" aria-labelledby="editInstructorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editInstructorModalLabel">Edit Instructor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editInstructorForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="edit_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="edit_email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="edit_phone" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_specialization" class="form-label">Specialization</label>
                            <input type="text" class="form-control" id="edit_specialization" name="specialization" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_status" class="form-label">Status</label>
                            <select class="form-select" id="edit_status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="edit_profile_image" name="profile_image">
                            <div class="form-text">Leave empty to keep current image</div>
                        </div>
                        <div class="col-12">
                            <label for="edit_bio" class="form-label">Bio/Description</label>
                            <textarea class="form-control" id="edit_bio" name="bio" rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="change_password" name="change_password">
                                <label class="form-check-label" for="change_password">
                                    Change Password
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 password-fields d-none">
                            <label for="edit_password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="edit_password" name="password">
                        </div>
                        <div class="col-md-6 password-fields d-none">
                            <label for="edit_password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="edit_password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update Instructor</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Instructor Modal -->
<div class="modal fade" id="deleteInstructorModal" tabindex="-1" aria-labelledby="deleteInstructorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteInstructorModalLabel">Delete Instructor</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="deleteInstructorForm" action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
                    </div>
                    <p>Are you sure you want to delete this instructor? This action cannot be undone.</p>
                    <p class="fw-bold">Instructor: <span id="delete_instructor_name"></span></p>
                    <div class="alert alert-warning">
                        <i class="bi bi-info-circle me-2"></i>This will also remove all related data including courses, materials, and other content created by this instructor.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Instructor</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modals for User Management -->

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="user_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="user_name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="user_email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="user_email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="user_password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="user_password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="user_password_confirmation" name="password_confirmation" required>
                        </div>
                        <div class="col-md-6">
                            <label for="user_status" class="form-label">Status</label>
                            <select class="form-select" id="user_status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="user_registration_type" class="form-label">Registration Type</label>
                            <select class="form-select" id="user_registration_type" name="registration_type" required>
                                <option value="standard">Standard</option>
                                <option value="google">Google</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="user_profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="user_profile_image" name="profile_image">
                        </div>
                        <div class="col-md-6">
                            <label for="user_phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="user_phone" name="phone">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View User Modal -->
<div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="viewUserModalLabel">User Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center mb-3">
                        <img src="" id="view_user_profile_image" alt="User Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                        <div id="view_user_status" class="badge bg-success">Active</div>
                    </div>
                    <div class="col-md-8">
                        <h4 id="view_user_name">User Name</h4>
                        <p class="text-muted">
                            <span id="view_user_registration_type" class="badge bg-secondary me-2">Standard</span>
                            Member since <span id="view_user_joined_date"></span>
                        </p>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <p><strong>Email:</strong> <span id="view_user_email"></span></p>
                                <p><strong>Phone:</strong> <span id="view_user_phone">N/A</span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Enrolled Courses:</strong> <span id="view_user_courses_count">0</span></p>
                                <p><strong>Completed Courses:</strong> <span id="view_user_completed_courses">0</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h5>Activity Summary</h5>
                    <div class="progress mb-2">
                        <div id="view_user_progress" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-2">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h3 id="view_user_logins" class="mb-1">0</h3>
                                    <p class="mb-0 text-muted">Total Logins</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h3 id="view_user_last_login" class="mb-1">N/A</h3>
                                    <p class="mb-0 text-muted">Last Login</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h3 id="view_user_purchases" class="mb-1">0</h3>
                                    <p class="mb-0 text-muted">Purchases</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editUserForm" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="edit_user_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="edit_user_name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_user_email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="edit_user_email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_user_phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="edit_user_phone" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_user_status" class="form-label">Status</label>
                            <select class="form-select" id="edit_user_status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_user_registration_type" class="form-label">Registration Type</label>
                            <select class="form-select" id="edit_user_registration_type" name="registration_type" required>
                                <option value="standard">Standard</option>
                                <option value="google">Google</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_user_profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control" id="edit_user_profile_image" name="profile_image">
                            <div class="form-text">Leave empty to keep current image</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="edit_user_change_password" name="change_password">
                                <label class="form-check-label" for="edit_user_change_password">
                                    Change Password
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 user-password-fields d-none">
                            <label for="edit_user_password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="edit_user_password" name="password">
                        </div>
                        <div class="col-md-6 user-password-fields d-none">
                            <label for="edit_user_password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="edit_user_password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete User Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="deleteUserForm" action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
                    </div>
                    <p>Are you sure you want to delete this user? This action cannot be undone.</p>
                    <p class="fw-bold">User: <span id="delete_user_name"></span></p>
                    <div class="alert alert-warning">
                        <i class="bi bi-info-circle me-2"></i>This will also remove all related data including courses enrollment, progress, certificates, and other user data.
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add this to your scripts section -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password fields in instructor edit modal
        document.getElementById('change_password').addEventListener('change', function() {
            const passwordFields = document.querySelectorAll('.password-fields');
            passwordFields.forEach(field => {
                field.classList.toggle('d-none', !this.checked);
                if (this.checked) {
                    field.querySelector('input').setAttribute('required', 'required');
                } else {
                    field.querySelector('input').removeAttribute('required');
                }
            });
        });

        // Toggle password fields in user edit modal
        document.getElementById('edit_user_change_password').addEventListener('change', function() {
            const passwordFields = document.querySelectorAll('.user-password-fields');
            passwordFields.forEach(field => {
                field.classList.toggle('d-none', !this.checked);
                if (this.checked) {
                    field.querySelector('input').setAttribute('required', 'required');
                } else {
                    field.querySelector('input').removeAttribute('required');
                }
            });
        });

        // Populate modal data dynamically - add data attributes to buttons in table or use JavaScript events
        // Example for view instructor modal:
        document.querySelectorAll('[data-bs-target="#viewInstructorModal"]').forEach(button => {
            button.addEventListener('click', function() {
                const instructorId = this.getAttribute('data-instructor-id');
                // Fetch instructor details via AJAX and populate the modal
                fetch(`/admin/instructors/${instructorId}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('instructor_name').textContent = data.name;
                        document.getElementById('instructor_email').textContent = data.email;
                        // Populate other fields...
                    });
            });
        });

        // Similar event handlers for other modals...
    });
</script>
