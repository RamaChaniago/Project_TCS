<!doctype html>
<html lang="en">
{{-- Ini adalah halaman utama web D'Waroeng --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TOEFL Academy - Belajar TOEFL dengan Mudah')</title>
    <!-- CSS & JS Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary-color: #3f51b5;
            --secondary-color: #f50057;
            --light-bg: #f8f9fa;
            --dark-bg: #212529;
            --text-color: #333;
            --hover-color: #303f9f;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-color);
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background-color: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-nav .nav-link {
            color: var(--text-color);
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color);
        }

        /* Dropdown */
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 250px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 50;
            border-radius: 8px;
            overflow: hidden;
            animation: fadeIn 0.3s ease-in-out;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            padding: 10px 15px;
            transition: background 0.3s ease-in-out;
            border-radius: 5px;
        }

        .dropdown-item:hover {
            background-color: rgba(63, 81, 181, 0.1);
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        /* Splash Screen */
        .splash-container {
            position: fixed;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0d6efd, #0dcaf0);
            color: white;
            z-index: 9999;
            transition: opacity 0.5s ease-in-out;
        }

        .splash-logo {
            width: 150px;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .navbar-collapse {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .content-container {
                padding: 20px;
            }
        }
    </style>

</head>

<body class="bg-gray-50 font-sans">
    <!-- Splash Screen -->
    <div class="splash-container fade-out" id="splashScreen">
        <div class="logo">
            <div class="logo-text">T</div>
        </div>
        <h1 class="app-name">TOEFL Test Application</h1>
        <p class="app-description">Sistem ujian TOEFL online berbasis web untuk meningkatkan kemampuan bahasa Inggris
            Anda</p>
        <div class="d-flex">
            <div class="spinner-grow text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="/images/toefl-logo.png" alt="TOEFL Academy Logo" class="h-10">
                    <span class="ml-3 text-xl font-bold text-indigo-700">TOEFL Academy</span>
                </a>

                <!-- Navigation Items -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/" class="nav-link text-gray-700 hover:text-indigo-600 font-medium">Beranda</a>

                    <!-- Dropdown for Daftar Kursus -->
                    <div class="dropdown">
                        <a href="#"
                            class="nav-link text-gray-700 hover:text-indigo-600 font-medium flex items-center">
                            Daftar Kursus <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="dropdown-content rounded-lg mt-2">
                            <div class="p-4 grid grid-cols-2 gap-2">
                                <a href="/kursus/live-class" class="p-3 rounded-lg hover:bg-indigo-50 flex items-start">
                                    <div class="p-2 rounded-full bg-indigo-100 mr-3">
                                        <i class="fas fa-video text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Live Class</p>
                                        <p class="text-xs text-gray-600">Belajar langsung dengan instruktur</p>
                                    </div>
                                </a>
                                <a href="/kursus/one-on-one" class="p-3 rounded-lg hover:bg-indigo-50 flex items-start">
                                    <div class="p-2 rounded-full bg-indigo-100 mr-3">
                                        <i class="fas fa-user-friends text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">One on One</p>
                                        <p class="text-xs text-gray-600">Bimbingan privat personal</p>
                                    </div>
                                </a>
                                <a href="/kursus/certification-test"
                                    class="p-3 rounded-lg hover:bg-indigo-50 flex items-start">
                                    <div class="p-2 rounded-full bg-indigo-100 mr-3">
                                        <i class="fas fa-certificate text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Certification Test</p>
                                        <p class="text-xs text-gray-600">Ujian sertifikasi resmi</p>
                                    </div>
                                </a>
                                <a href="/kursus/learning-package"
                                    class="p-3 rounded-lg hover:bg-indigo-50 flex items-start">
                                    <div class="p-2 rounded-full bg-indigo-100 mr-3">
                                        <i class="fas fa-box text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Learning Package</p>
                                        <p class="text-xs text-gray-600">Paket pembelajaran lengkap</p>
                                    </div>
                                </a>
                                <a href="/kursus/smart-book" class="p-3 rounded-lg hover:bg-indigo-50 flex items-start">
                                    <div class="p-2 rounded-full bg-indigo-100 mr-3">
                                        <i class="fas fa-book text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Smart Book</p>
                                        <p class="text-xs text-gray-600">Materi pembelajaran digital</p>
                                    </div>
                                </a>
                                <a href="/kursus/subscription"
                                    class="p-3 rounded-lg hover:bg-indigo-50 flex items-start">
                                    <div class="p-2 rounded-full bg-indigo-100 mr-3">
                                        <i class="fas fa-sync-alt text-indigo-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-800">Subscription</p>
                                        <p class="text-xs text-gray-600">Akses semua konten premium</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="/blog" class="nav-link text-gray-700 hover:text-indigo-600 font-medium">Blog</a>
                    <a href="/promo" class="nav-link text-gray-700 hover:text-indigo-600 font-medium">Promo</a>
                    <a href="/karir" class="nav-link text-gray-700 hover:text-indigo-600 font-medium">Karir</a>
                </div>

                <!-- Login Button -->
                <a href="/login"
                    class="btn-primary bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-full flex items-center">
                    <span>Masuk</span>
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-indigo-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4">
                <a href="/" class="block py-2 hover:bg-indigo-50 px-4 rounded">Beranda</a>
                <div class="py-2 px-4">
                    <button id="mobile-dropdown-btn" class="flex justify-between items-center w-full text-left">
                        Daftar Kursus <i class="fas fa-chevron-down"></i>
                    </button>
                    <div id="mobile-dropdown" class="hidden mt-2 pl-4 border-l-2 border-indigo-200">
                        <a href="/kursus/live-class" class="block py-2">Live Class</a>
                        <a href="/kursus/one-on-one" class="block py-2">One on One</a>
                        <a href="/kursus/certification-test" class="block py-2">Certification Test</a>
                        <a href="/kursus/learning-package" class="block py-2">Learning Package</a>
                        <a href="/kursus/smart-book" class="block py-2">Smart Book</a>
                        <a href="/kursus/subscription" class="block py-2">Subscription</a>
                    </div>
                </div>
                <a href="/blog" class="block py-2 hover:bg-indigo-50 px-4 rounded">Blog</a>
                <a href="/promo" class="block py-2 hover:bg-indigo-50 px-4 rounded">Promo</a>
                <a href="/karir" class="block py-2 hover:bg-indigo-50 px-4 rounded">Karir</a>
            </div>
        </div>
    </nav>




    <div class="container-fluid">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Mobile Dropdown Toggle
        document.getElementById('mobile-dropdown-btn').addEventListener('click', function() {
            document.getElementById('mobile-dropdown').classList.toggle('hidden');
        });

        // Initialize any other custom scripts here
        @yield('scripts')
    </script>
</body>

</html>
