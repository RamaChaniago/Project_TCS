<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User Profile')</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .profile-sidebar {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .profile-nav {
            margin-top: 20px;
        }
        .profile-nav .nav-link {
            color: #6c757d;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .profile-nav .nav-link:hover,
        .profile-nav .nav-link.active {
            background-color: #e9ecef;
            color: #007bff;
        }
        .profile-content {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .profile-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #e9ecef;
        }
    </style>

    @yield('head')
</head>
<body>
    <div class="container-fluid py-5">
        <div class="row">
            <!-- Profile Sidebar Column -->
            <div class="col-md-3">
                <div class="profile-sidebar p-4 text-center">
                    <!-- Profile Image -->
                    <img src="{{ asset('path/to/default/profile/image.jpg') }}"
                         alt="Profile Image"
                         class="profile-image mb-4">

                    <!-- Profile Navigation -->
                    <div class="profile-nav">
                        <nav class="nav flex-column">
                            {{-- <a class="nav-link @if(Request::is('profile/info')) active @endif" href="{{ route('profile.info') }}">
                                <i class="bi bi-person-fill me-2"></i>Informasi Akun
                            </a>
                            <a class="nav-link @if(Request::is('profile/edit')) active @endif" href="{{ route('profile.edit') }}">
                                <i class="bi bi-pencil-square me-2"></i>Edit Profil
                            </a>
                            <a class="nav-link @if(Request::is('profile/password')) active @endif" href="{{ route('profile.password') }}">
                                <i class="bi bi-lock-fill me-2"></i>Ubah Password
                            </a>
                            <a class="nav-link @if(Request::is('profile/settings')) active @endif" href="{{ route('profile.settings') }}">
                                <i class="bi bi-gear-fill me-2"></i>Pengaturan
                            </a> --}}
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Profile Content Column -->
            <div class="col-md-9">
                <div class="profile-content">
                    <div class="row mb-4">
                        <div class="col-12">
                            <h3 class="font-weight-bold mb-2">@yield('profile_title', 'Informasi Akun')</h3>
                            <p class="text-muted">@yield('profile_subtitle', 'Lengkapi Informasi tentang dirimu')</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            @yield('profile_content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            easing: 'slide',
            once: true
        });
    </script>

    @yield('scripts')
</body>
</html>
