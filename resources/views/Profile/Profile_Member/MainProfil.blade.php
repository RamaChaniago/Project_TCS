<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 70px;
        }
        .profile-sidebar {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: sticky;
            top: 80px;
        }
        .profile-sidebar:hover {
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        .profile-image-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #e9ecef;
            transition: all 0.3s ease;
        }
        .profile-image:hover {
            border-color: #007bff;
            transform: scale(1.05);
        }
        .edit-profile-image {
            position: absolute;
            bottom: 0;
            right: 50%;
            transform: translateX(50%);
            background-color: #007bff;
            color: white;
            border-radius: 50%;
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .edit-profile-image:hover {
            background-color: #0069d9;
            transform: translateX(50%) scale(1.1);
        }
        .profile-name {
            font-weight: 600;
            color: #343a40;
            margin-bottom: 5px;
        }
        .profile-role {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        .profile-nav {
            margin-top: 10px;
            text-align: left;
        }
        .profile-nav .nav-link {
            color: #495057;
            padding: 12px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }
        .profile-nav .nav-link i {
            margin-right: 10px;
            font-size: 1.1rem;
        }
        .profile-nav .nav-link:hover,
        .profile-nav .nav-link.active {
            background-color: #e9f5ff;
            color: #007bff;
            transform: translateX(5px);
        }
        .profile-content {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 25px;
            height: 100%;
            min-height: 500px;
            transition: all 0.3s ease;
        }
        .profile-content:hover {
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 15px 0;
        }
        .menu-header {
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #6c757d;
            padding: 0 15px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .content-section {
            display: none;
        }
        .content-section.active {
            display: block;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
        }
        .main-container {
            margin-top: 20px;
        }
        .preview-container {
            width: 200px;
            height: 200px;
            margin: 0 auto 20px;
            position: relative;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(255,255,255,0.7);
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .remove-image:hover {
            background: rgba(255,0,0,0.7);
            color: white;
        }
        .image-upload-container {
            text-align: center;
        }
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }
        .upload-instruction {
            color: #6c757d;
            font-size: 0.9rem;
            margin: 15px 0;
        }
        .image-preview-badge {
            position: absolute;
            top: 5px;
            left: 5px;
            background: rgba(0,123,255,0.8);
            color: white;
            border-radius: 10px;
            padding: 0 10px;
            font-size: 0.7rem;
        }
        .alert-flash {
            position: fixed;
            top: 80px;
            right: 20px;
            z-index: 1050;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Alert Messages -->
    @if (session('success'))
    <div class="alert alert-success alert-flash alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-flash alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container main-container py-4">
        <div class="row g-4">
            <!-- Profile Sidebar Column -->
            <div class="col-lg-3 col-md-4">
                <div class="profile-sidebar p-4">
                    <!-- Profile Image -->
                    <div class="profile-image-container">
                        <img src="{{ Auth::user()->getMemberInfo && Auth::user()->getMemberInfo->profile_image ? asset('storage/profile_images/' . Auth::user()->getMemberInfo->profile_image) : 'https://via.placeholder.com/150' }}" alt="Profile Image" class="profile-image">
                        <div class="edit-profile-image" data-bs-toggle="modal" data-bs-target="#changeProfileImageModal">
                            <i class="bi bi-camera-fill"></i>
                        </div>
                    </div>

                    <h5 class="profile-name text-center">{{ Auth::user()->name }}</h5>
                    <p class="profile-role text-center">Member</p>

                    <div class="divider"></div>

                    <!-- Profile Navigation -->
                    <div class="menu-header">Akun</div>
                    <div class="profile-nav">
                        <nav class="nav flex-column">
                            <a class="nav-link active" href="#info" data-section="info">
                                <i class="bi bi-person-fill"></i>
                                <span>Informasi Akun</span>
                            </a>
                            <a class="nav-link" href="#edit" data-section="edit">
                                <i class="bi bi-pencil-square"></i>
                                <span>Edit Profil</span>
                            </a>
                            <a class="nav-link" href="#password" data-section="password">
                                <i class="bi bi-lock-fill"></i>
                                <span>Ubah Password</span>
                            </a>
                        </nav>
                    </div>

                    <div class="divider"></div>

                    <div class="menu-header">Pengaturan</div>
                    <div class="profile-nav">
                        <nav class="nav flex-column">
                            <a class="nav-link" href="#settings" data-section="settings">
                                <i class="bi bi-gear-fill"></i>
                                <span>Pengaturan</span>
                            </a>
                            <a class="nav-link" href="#notifications" data-section="notifications">
                                <i class="bi bi-bell-fill"></i>
                                <span>Notifikasi</span>
                            </a>
                            <a class="nav-link" href="#privacy" data-section="privacy">
                                <i class="bi bi-shield-lock-fill"></i>
                                <span>Privasi</span>
                            </a>
                        </nav>
                    </div>

                    <div class="divider"></div>

                    <div class="profile-nav">
                        <nav class="nav flex-column">
                            <a class="nav-link text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Profile Content Column -->
            <div class="col-lg-9 col-md-8">
                <!-- Main Content Area -->
                <div class="profile-content fade-in">
                    <!-- Info Section -->
                    <div class="content-section active" id="info-section">
                        <h3 class="mb-3">Informasi Akun</h3>
                        <p class="text-muted mb-4">Informasi dasar tentang akun Anda</p>

                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <p class="mb-0">Nama Lengkap</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <p class="mb-0">No. Telepon</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0">{{ Auth::user()->phone ?? 'Belum diatur' }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0">{{ Auth::user()->address ?? 'Belum diatur' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Profile Section -->
                    <div class="content-section" id="edit-section">
                        <h3 class="mb-3">Edit Profil</h3>
                        <p class="text-muted mb-4">Perbarui informasi profil Anda</p>

                        <div class="row mb-4">
                            <div class="col-md-4 text-center">
                                <div class="mb-3">
                                    <img src="{{ Auth::user()->getMemberInfo && Auth::user()->getMemberInfo->profile_image ? asset('storage/profile_images/' . Auth::user()->getMemberInfo->profile_image) : 'https://via.placeholder.com/150' }}"
                                         alt="Profile Image" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#changeProfileImageModal">
                                    <i class="bi bi-camera-fill me-1"></i> Ubah Foto
                                </button>
                            </div>
                            <div class="col-md-8">
                                <form action="{{ route('member.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="fullName" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="fullName" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No. Telepon</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="address" name="address" rows="3">{{ Auth::user()->address }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Password Section -->
                    <div class="content-section" id="password-section">
                        <h3 class="mb-3">Ubah Password</h3>
                        <p class="text-muted mb-4">Pastikan password Anda kuat dan aman</p>

                        <form action="{{ route('member.update.password') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="currentPassword" class="form-label">Password Saat Ini</label>
                                <input type="password" class="form-control" id="currentPassword" name="current_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="newPassword" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="newPassword" name="new_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="confirmPassword" name="new_password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Password</button>
                        </form>
                    </div>

                    <!-- Settings Section -->
                    <div class="content-section" id="settings-section">
                        <h3 class="mb-3">Pengaturan</h3>
                        <p class="text-muted mb-4">Kelola pengaturan akun Anda</p>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Pengaturan Tampilan</h5>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="darkModeSwitch">
                                    <label class="form-check-label" for="darkModeSwitch">Mode Gelap</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="compactViewSwitch">
                                    <label class="form-check-label" for="compactViewSwitch">Tampilan Kompak</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications Section -->
                    <div class="content-section" id="notifications-section">
                        <h3 class="mb-3">Notifikasi</h3>
                        <p class="text-muted mb-4">Kelola preferensi notifikasi Anda</p>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Preferensi Email</h5>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="emailUpdatesSwitch" checked>
                                    <label class="form-check-label" for="emailUpdatesSwitch">Pembaruan Sistem</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="emailPromoSwitch">
                                    <label class="form-check-label" for="emailPromoSwitch">Penawaran dan Promosi</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="emailNewsletterSwitch" checked>
                                    <label class="form-check-label" for="emailNewsletterSwitch">Newsletter Bulanan</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Privacy Section -->
                    <div class="content-section" id="privacy-section">
                        <h3 class="mb-3">Privasi</h3>
                        <p class="text-muted mb-4">Kelola pengaturan privasi Anda</p>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Pengaturan Akun</h5>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="profileVisibilitySwitch" checked>
                                    <label class="form-check-label" for="profileVisibilitySwitch">Profil Publik</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="activityTrackingSwitch" checked>
                                    <label class="form-check-label" for="activityTrackingSwitch">Izinkan Pelacakan Aktivitas</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="dataCollectionSwitch" checked>
                                    <label class="form-check-label" for="dataCollectionSwitch">Izinkan Pengumpulan Data</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Image Change Modal -->
    <div class="modal fade" id="changeProfileImageModal" tabindex="-1" aria-labelledby="changeProfileImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeProfileImageModalLabel">Ubah Foto Profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('member.update.image') }}" method="POST" enctype="multipart/form-data" id="modalProfileImageForm">
                        @csrf
                        @method('PUT')
                        <div class="image-upload-container">
                            <div class="preview-container">
                                <img id="modal-preview-image" src="{{ Auth::user()->getMemberInfo && Auth::user()->getMemberInfo->profile_image ? asset('storage/profile_images/' . Auth::user()->getMemberInfo->profile_image) : 'https://via.placeholder.com/200' }}" class="preview-image" alt="Profile Image Preview">
                                <div class="remove-image" id="modal-remove-image" style="display: none;">
                                    <i class="bi bi-x"></i>
                                </div>
                            </div>

                            <p class="upload-instruction">
                                Unggah gambar berformat JPG, PNG, atau GIF dengan ukuran maksimal 2MB
                            </p>

                            <div class="upload-btn-wrapper">
                                <button class="btn btn-primary" type="button">
                                    <i class="bi bi-upload me-1"></i> Pilih Gambar
                                </button>
                                <input type="file" name="profile_image" id="modal-profile-image-input" accept="image/*">
                            </div>

                            <div class="mt-3" id="modal-file-selected-name" style="display: none;">
                                <span class="text-muted">File terpilih: <span id="modal-selected-file-name"></span></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="save-modal-image">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const flashMessages = document.querySelectorAll('.alert-flash');
                flashMessages.forEach(message => {
                    const bsAlert = new bootstrap.Alert(message);
                    bsAlert.close();
                });
            }, 5000);

            setTimeout(function() {
                const fadeElements = document.querySelectorAll('.fade-in');
                fadeElements.forEach(element => {
                    element.style.opacity = '1';
                });
            }, 200);

            const navLinks = document.querySelectorAll('.nav-link[data-section]');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    navLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');

                    const sectionId = this.getAttribute('data-section');
                    const allSections = document.querySelectorAll('.content-section');
                    allSections.forEach(section => section.classList.remove('active'));

                    const contentElement = document.querySelector('.profile-content');
                    contentElement.style.opacity = '0';

                    setTimeout(function() {
                        const activeSection = document.getElementById(sectionId + '-section');
                        activeSection.classList.add('active');
                        contentElement.style.opacity = '1';
                    }, 300);
                });
            });

            const sidebarItems = document.querySelectorAll('.profile-nav .nav-link');
            sidebarItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(5px)';
                });
                item.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('active')) {
                        this.style.transform = 'translateX(0)';
                    }
                });
            });

            const modalProfileImageInput = document.getElementById('modal-profile-image-input');
            const modalPreviewImage = document.getElementById('modal-preview-image');
            const modalFileSelectedName = document.getElementById('modal-file-selected-name');
            const modalSelectedFileName = document.getElementById('modal-selected-file-name');
            const modalRemoveImage = document.getElementById('modal-remove-image');
            const saveModalImage = document.getElementById('save-modal-image');

            modalProfileImageInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        modalPreviewImage.src = e.target.result;
                        modalFileSelectedName.style.display = 'block';
                        modalSelectedFileName.textContent = modalProfileImageInput.files[0].name;
                        modalRemoveImage.style.display = 'flex';
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });

            modalRemoveImage.addEventListener('click', function() {
                modalProfileImageInput.value = '';
                modalPreviewImage.src = "{{ Auth::user()->getMemberInfo && Auth::user()->getMemberInfo->profile_image ? asset('storage/profile_images/' . Auth::user()->getMemberInfo->profile_image) : 'https://via.placeholder.com/200' }}";
                modalFileSelectedName.style.display = 'none';
                modalRemoveImage.style.display = 'none';
            });

            saveModalImage.addEventListener('click', function() {
                if (modalProfileImageInput.files && modalProfileImageInput.files[0]) {
                    document.getElementById('modalProfileImageForm').submit();
                } else {
                    alert('Silakan pilih gambar terlebih dahulu');
                }
            });
        });
    </script>
</body>
</html>