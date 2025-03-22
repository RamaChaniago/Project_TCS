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

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: white;
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 50;
            border-radius: 8px;
            overflow: hidden;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-content {
            display: inline-block;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

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

        .nav-link {
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #4F46E5;
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }

        .btn-primary {
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>

<body class="bg-gray-50 font-sans">
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
