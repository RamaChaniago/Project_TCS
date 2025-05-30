<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToeflPCT - TOEFL Training & Certification</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- AOS Animation -->
    {{-- Rama --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        /* ==========================
   Base Styles
   ========================== */
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            overflow-x: hidden;
            padding-top: 70px;
            /* Sesuaikan dengan tinggi navbar */
        }

        /* ==========================
   Navbar Styles
   ========================== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1050;
            /* Pastikan lebih tinggi dari elemen lain */
            padding: 15px 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 45px;
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            margin: 0 10px;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #0066cc !important;
        }

        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        /* navbar-active.css */
        .navbar-nav .nav-link.active {
            color: #007bff !important;
            /* Warna biru Bootstrap */
            font-weight: bold;
        }

        .user-profile-nav img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* ==========================
   Dropdown Styles
   ========================== */
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .dropdown-item {
            padding: 10px 20px;
            font-size: 0.9rem;
        }

        .dropdown-item:hover {
            background-color: #f0f7ff;
            color: #0066cc;
        }

        /* ==========================
   Button Styles
   ========================== */
        .btn-primary {
            background-color: #0066cc;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0055b3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 204, 0.3);
        }

        .btn-outline-primary {
            border: 2px solid #0066cc;
            color: #0066cc;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #0066cc;
            color: white;
        }

        /* ==========================
   Footer Styles
   ========================== */
        footer {
            background-color: #0d1b2a;
            color: #fff;
            padding: 60px 0 20px;
        }

        footer h5 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 20px;
        }

        footer ul {
            list-style: none;
            padding-left: 0;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            color: #d0d0d0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer ul li a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }

        .modal-footer {
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* ==========================
   Social Media Icons
   ========================== */
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: #fff;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background-color: #0066cc;
            transform: translateY(-3px);
        }

        /* ==========================
   Splash Screen Styles
   ========================== */
        .splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: all 0.5s ease;
        }

        .splash-content {
            text-align: center;
        }

        .splash-logo {
            width: 160px;
            animation: pulse 1s infinite;
        }

        .loading-bar {
            width: 200px;
            height: 4px;
            background-color: #e9ecef;
            border-radius: 4px;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
        }

        .loading-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 0;
            background-color: #0066cc;
            animation: loading 2s ease-in-out forwards;
        }

        /* ==========================
   Animations
   ========================== */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes loading {
            0% {
                width: 0;
            }

            100% {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Splash Screen -->
    {{-- <div class="splash-screen">
        <div class="splash-content">
            <img src="{{ asset('img/logo.png') }}" alt="ToeflPCT Logo" class="splash-logo">
            <div class="loading-bar"></div>
            <p>Loading amazing TOEFL courses for you...</p>
        </div>
    </div> --}}

    @include('sweetalert::alert')

    <!-- Navbar -->

    @include('Home.section.navbar')
    <!-- Main Content -->
    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        // Splash Screen Animation
        $(window).on('load', function() {
            setTimeout(function() {
                $('.splash-screen').fadeOut(500);
            }, 2500);
        });

        // Initialize AOS Animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Navbar Scroll Effect
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

        // Testimonial Carousel
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        // Logo Carousel (Partners)
        $('.logo-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplaySpeed: 2000,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                }
            }
        });

        // Blog Carousel
        $('.blog-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        // FAQ Accordion
        $('.faq-item').click(function() {
            $(this).toggleClass('active');
            $(this).find('.faq-answer').slideToggle();
        });

        // navbar-active.js
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan URL saat ini
            const currentLocation = window.location.pathname;

            // Pilih semua nav links
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                // Hapus kelas active dari semua link
                link.classList.remove('active');

                // Periksa apakah href link cocok dengan URL saat ini
                if (link.getAttribute('href') === currentLocation) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>

</html>
