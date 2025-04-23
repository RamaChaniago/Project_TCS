<!-- Admin modals -->
@foreach($admins as $admin)
    <!-- View Admin Modal -->
    <div class="modal fade" id="viewAdminModal{{ $admin->id }}" tabindex="-1" aria-labelledby="viewAdminModalLabel{{ $admin->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="viewAdminModalLabel{{ $admin->id }}">Admin Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            @if($admin->getAdminInfo && $admin->getAdminInfo->profile_image)
                                <img src="{{ asset('storage/'.$admin->getAdminInfo->profile_image) }}" alt="Admin Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Default Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                            @endif
                            <div class="badge {{ $admin->getAdminInfo && $admin->getAdminInfo->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                {{ $admin->getAdminInfo ? $admin->getAdminInfo->status : 'inactive' }}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $admin->name }}</h4>
                            <p class="text-muted">{{ $admin->role }}</p>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> {{ $admin->email }}</p>
                                    <p><strong>Phone:</strong> {{ $admin->phone ?? 'N/A' }}</p>
                                    <p><strong>Joined:</strong> {{ $admin->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>Bio</h5>
                        <p>{{ $admin->getAdminInfo ? $admin->getAdminInfo->bio : 'No bio available.' }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Admin Modal -->
    <div class="modal fade" id="editAdminModal{{ $admin->id }}" tabindex="-1" aria-labelledby="editAdminModalLabel{{ $admin->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editAdminModalLabel{{ $admin->id }}">Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user-management.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_name{{ $admin->id }}" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="edit_name{{ $admin->id }}" name="name" value="{{ $admin->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_email{{ $admin->id }}" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="edit_email{{ $admin->id }}" name="email" value="{{ $admin->email }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_phone{{ $admin->id }}" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="edit_phone{{ $admin->id }}" name="phone" value="{{ $admin->phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="edit_status{{ $admin->id }}" class="form-label">Status</label>
                                <select class="form-select" id="edit_status{{ $admin->id }}" name="status" required>
                                    <option value="active" {{ $admin->getAdminInfo && $admin->getAdminInfo->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $admin->getAdminInfo && $admin->getAdminInfo->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_profile_image{{ $admin->id }}" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="edit_profile_image{{ $admin->id }}" name="profile_image">
                                <div class="form-text">Leave empty to keep current image</div>
                            </div>
                            <div class="col-12">
                                <label for="edit_bio{{ $admin->id }}" class="form-label">Bio/Description</label>
                                <textarea class="form-control" id="edit_bio{{ $admin->id }}" name="bio" rows="3">{{ $admin->getAdminInfo ? $admin->getAdminInfo->bio : '' }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input change-password" type="checkbox" id="change_password{{ $admin->id }}" name="change_password" data-target="{{ $admin->id }}">
                                    <label class="form-check-label" for="change_password{{ $admin->id }}">
                                        Change Password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 password-fields-{{ $admin->id }} d-none">
                                <label for="edit_password{{ $admin->id }}" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="edit_password{{ $admin->id }}" name="password">
                            </div>
                            <div class="col-md-6 password-fields-{{ $admin->id }} d-none">
                                <label for="edit_password_confirmation{{ $admin->id }}" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="edit_password_confirmation{{ $admin->id }}" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Update Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Admin Modal -->
    <div class="modal fade" id="deleteAdminModal{{ $admin->id }}" tabindex="-1" aria-labelledby="deleteAdminModalLabel{{ $admin->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteAdminModalLabel{{ $admin->id }}">Delete Admin</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user-management.destroy', $admin->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
                        </div>
                        <p>Are you sure you want to delete this admin? This action cannot be undone.</p>
                        <p class="fw-bold">Admin: {{ $admin->name }}</p>
                        <div class="alert alert-warning">
                            <i class="bi bi-info-circle me-2"></i>This will permanently delete the admin account and all associated data.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

<!-- Instructor modals -->
@foreach($instructors as $instructor)
    <!-- View Instructor Modal -->
    <div class="modal fade" id="viewInstructorModal{{ $instructor->id }}" tabindex="-1" aria-labelledby="viewInstructorModalLabel{{ $instructor->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="viewInstructorModalLabel{{ $instructor->id }}">Instructor Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            @if($instructor->getInstructorInfo && $instructor->getInstructorInfo->profile_image)
                                <img src="{{ asset('storage/'.$instructor->getInstructorInfo->profile_image) }}" alt="Instructor Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Default Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                            @endif
                            <div class="badge {{ $instructor->getInstructorInfo && $instructor->getInstructorInfo->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                {{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->status : 'inactive' }}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $instructor->name }}</h4>
                            <p class="text-muted">{{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->specialization : 'No specialization' }}</p>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> {{ $instructor->email }}</p>
                                    <p><strong>Phone:</strong> {{ $instructor->phone ?? 'N/A' }}</p>
                                    <p><strong>Joined:</strong> {{ $instructor->created_at->format('d M Y') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Courses:</strong> 0</p>
                                    <p><strong>Students:</strong> 0</p>
                                    <p><strong>Rating:</strong> N/A</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>Bio</h5>
                        <p>{{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->bio : 'No bio available.' }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Instructor Modal -->
    <div class="modal fade" id="editInstructorModal{{ $instructor->id }}" tabindex="-1" aria-labelledby="editInstructorModalLabel{{ $instructor->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editInstructorModalLabel{{ $instructor->id }}">Edit Instructor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user-management.update', $instructor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_name{{ $instructor->id }}" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="edit_name{{ $instructor->id }}" name="name" value="{{ $instructor->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_email{{ $instructor->id }}" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="edit_email{{ $instructor->id }}" name="email" value="{{ $instructor->email }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_phone{{ $instructor->id }}" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="edit_phone{{ $instructor->id }}" name="phone" value="{{ $instructor->phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="edit_specialization{{ $instructor->id }}" class="form-label">Specialization</label>
                                <input type="text" class="form-control" id="edit_specialization{{ $instructor->id }}" name="specialization" value="{{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->specialization : '' }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_status{{ $instructor->id }}" class="form-label">Status</label>
                                <select class="form-select" id="edit_status{{ $instructor->id }}" name="status" required>
                                    <option value="active" {{ $instructor->getInstructorInfo && $instructor->getInstructorInfo->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $instructor->getInstructorInfo && $instructor->getInstructorInfo->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_profile_image{{ $instructor->id }}" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="edit_profile_image{{ $instructor->id }}" name="profile_image">
                                <div class="form-text">Leave empty to keep current image</div>
                            </div>
                            <div class="col-12">
                                <label for="edit_bio{{ $instructor->id }}" class="form-label">Bio/Description</label>
                                <textarea class="form-control" id="edit_bio{{ $instructor->id }}" name="bio" rows="3">{{ $instructor->getInstructorInfo ? $instructor->getInstructorInfo->bio : '' }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input change-password" type="checkbox" id="change_password{{ $instructor->id }}" name="change_password" data-target="{{ $instructor->id }}">
                                    <label class="form-check-label" for="change_password{{ $instructor->id }}">
                                        Change Password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 password-fields-{{ $instructor->id }} d-none">
                                <label for="edit_password{{ $instructor->id }}" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="edit_password{{ $instructor->id }}" name="password">
                            </div>
                            <div class="col-md-6 password-fields-{{ $instructor->id }} d-none">
                                <label for="edit_password_confirmation{{ $instructor->id }}" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="edit_password_confirmation{{ $instructor->id }}" name="password_confirmation">
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
    <div class="modal fade" id="deleteInstructorModal{{ $instructor->id }}" tabindex="-1" aria-labelledby="deleteInstructorModalLabel{{ $instructor->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteInstructorModalLabel{{ $instructor->id }}">Delete Instructor</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user-management.destroy', $instructor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
                        </div>
                        <p>Are you sure you want to delete this instructor? This action cannot be undone.</p>
                        <p class="fw-bold">Instructor: {{ $instructor->name }}</p>
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
@endforeach

<!-- User modals -->
@foreach($users as $user)
    <!-- View User Modal -->
    <div class="modal fade" id="viewUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="viewUserModalLabel{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="viewUserModalLabel{{ $user->id }}">User Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-3">
                            @if($user->getMemberInfo && $user->getMemberInfo->profile_image)
                                <img src="{{ asset('storage/'.$user->getMemberInfo->profile_image) }}" alt="User Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Default Profile" class="img-fluid rounded-circle mb-2" style="width: 150px; height: 150px; object-fit: cover;">
                            @endif
                            <div class="badge {{ $user->getMemberInfo && $user->getMemberInfo->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                {{ $user->getMemberInfo ? $user->getMemberInfo->status : 'inactive' }}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>{{ $user->name }}</h4>
                            <p class="text-muted">
                                <span class="badge {{ $user->getMemberInfo && $user->getMemberInfo->registration_type == 'google' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $user->getMemberInfo ? $user->getMemberInfo->registration_type : 'manual' }}
                                </span>
                                Member since {{ $user->created_at->format('d M Y') }}
                            </p>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> {{ $user->email }}</p>
                                    <p><strong>Phone:</strong> {{ $user->phone ?? 'N/A' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Enrolled Courses:</strong> 0</p>
                                    <p><strong>Completed Courses:</strong> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>Activity Summary</h5>
                        <div class="progress mb-2">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 mb-2">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h3 class="mb-1">0</h3>
                                        <p class="mb-0 text-muted">Total Logins</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h3 class="mb-1">N/A</h3>
                                        <p class="mb-0 text-muted">Last Login</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h3 class="mb-1">0</h3>
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
    <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editUserModalLabel{{ $user->id }}">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user-management.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="edit_user_name{{ $user->id }}" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="edit_user_name{{ $user->id }}" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_user_email{{ $user->id }}" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="edit_user_email{{ $user->id }}" name="email" value="{{ $user->email }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_user_phone{{ $user->id }}" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="edit_user_phone{{ $user->id }}" name="phone" value="{{ $user->phone }}">
                            </div>
                            <div class="col-md-6">
                                <label for="edit_user_status{{ $user->id }}" class="form-label">Status</label>
                                <select class="form-select" id="edit_user_status{{ $user->id }}" name="status" required>
                                    <option value="active" {{ $user->getMemberInfo && $user->getMemberInfo->status == 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ $user->getMemberInfo && $user->getMemberInfo->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_user_registration_type{{ $user->id }}" class="form-label">Registration Type</label>
                                <select class="form-select" id="edit_user_registration_type{{ $user->id }}" name="registration_type" required>
                                    <option value="manual" {{ $user->getMemberInfo && $user->getMemberInfo->registration_type == 'manual' ? 'selected' : '' }}>Manual</option>
                                    <option value="google" {{ $user->getMemberInfo && $user->getMemberInfo->registration_type == 'google' ? 'selected' : '' }}>Google</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="edit_user_profile_image{{ $user->id }}" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="edit_user_profile_image{{ $user->id }}" name="profile_image">
                                <div class="form-text">Leave empty to keep current image</div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input change-password" type="checkbox" id="edit_user_change_password{{ $user->id }}" name="change_password" data-target="{{ $user->id }}">
                                    <label class="form-check-label" for="edit_user_change_password{{ $user->id }}">
                                        Change Password
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 password-fields-{{ $user->id }} d-none">
                                <label for="edit_user_password{{ $user->id }}" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="edit_user_password{{ $user->id }}" name="password">
                            </div>
                            <div class="col-md-6 password-fields-{{ $user->id }} d-none">
                                <label for="edit_user_password_confirmation{{ $user->id }}" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="edit_user_password_confirmation{{ $user->id }}" name="password_confirmation">
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
    <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteUserModalLabel{{ $user->id }}">Delete User</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('user-management.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <i class="bi bi-exclamation-triangle-fill text-danger fs-1"></i>
                        </div>
                        <p>Are you sure you want to delete this user account? This action cannot be undone.</p>
                        <p class="fw-bold">User: {{ $user->name }}</p>
                        <div class="alert alert-warning">
                            <i class="bi bi-info-circle me-2"></i>This will permanently delete the user account and all associated data including course enrollments, progress, and achievements.
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
@endforeach

<!-- Create New User Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="createUserModalLabel">Create New User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('user-management.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="user_type" class="form-label">User Type</label>
                            <select class="form-select" id="user_type" name="role" required>
                                <option value="" selected disabled>Select User Type</option>
                                <option value="admin">Admin</option>
                                <option value="instructor">Instructor</option>
                                <option value="user">Student/User</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
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
                        <div class="col-md-6 instructor-field d-none">
                            <label for="specialization" class="form-label">Specialization</label>
                            <input type="text" class="form-control" id="specialization" name="specialization">
                        </div>
                        <div class="col-md-6 user-field d-none">
                            <label for="registration_type" class="form-label">Registration Type</label>
                            <select class="form-select" id="registration_type" name="registration_type">
                                <option value="manual" selected>Manual</option>
                                <option value="google">Google</option>
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
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for modals -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show/hide password fields when change password checkbox is clicked
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
        
        // Show/hide fields based on user type selection in create form
        const userTypeSelect = document.getElementById('user_type');
        if (userTypeSelect) {
            userTypeSelect.addEventListener('change', function() {
                const instructorFields = document.querySelectorAll('.instructor-field');
                const userFields = document.querySelectorAll('.user-field');
                
                instructorFields.forEach(field => field.classList.add('d-none'));
                userFields.forEach(field => field.classList.add('d-none'));
                
                if (this.value === 'instructor') {
                    instructorFields.forEach(field => field.classList.remove('d-none'));
                } else if (this.value === 'user') {
                    userFields.forEach(field => field.classList.remove('d-none'));
                }
            });
        }
        
        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Form validation enhancement
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
        
        // Profile image preview functionality
        const profileInputs = document.querySelectorAll('input[type="file"][name="profile_image"]');
        profileInputs.forEach(input => {
            input.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const previewId = this.id + '_preview';
                    let preview = document.getElementById(previewId);
                    
                    if (!preview) {
                        preview = document.createElement('img');
                        preview.id = previewId;
                        preview.className = 'img-thumbnail mt-2';
                        preview.style.maxHeight = '150px';
                        this.parentNode.appendChild(preview);
                    }
                    
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
        
        // Confirmation dialog enhancement
        const deleteButtons = document.querySelectorAll('button[type="submit"][class*="btn-danger"]');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                const form = this.closest('form');
                if (!confirm('Are you absolutely sure you want to delete this record? This action cannot be undone.')) {
                    e.preventDefault();
                }
            });
        });
    });
</script>