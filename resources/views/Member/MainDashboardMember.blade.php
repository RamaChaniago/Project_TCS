<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Member - EnglishVit</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* Font dan Warna Dasar */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar Styling */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1050;
            padding: 15px 0;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 45px;
        }

        /* Vertically center align navbar items */
        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: #333 !important;
            margin: 0 10px;
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #0066cc !important;
        }

        /* Dropdown hover functionality */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .navbar-nav .dropdown-menu {
            display: block;
            opacity: 0;
            transform: translateY(10px);
            pointer-events: none;
            transition: all 0.3s ease;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }

        .navbar-nav .dropdown-item {
            border: none;
            padding: 8px 16px;
            transition: all 0.2s ease;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #f0f7ff;
            color: #0066cc;
            transform: translateX(5px);
        }

        /* Sidebar Styling with Smooth Transitions */
        #sidebar {
            width: 250px;
            position: fixed;
            top: 85px;
            /* Adjusted to account for navbar height */
            left: 0;
            height: calc(100vh - 85px);
            background: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding-top: 15px;
            transition: all 0.3s ease-in-out;
            z-index: 999;
            overflow-x: hidden;
        }

        #sidebar.collapsed {
            width: 70px;
            padding-left: 0;
            padding-right: 0;
        }

        .sidebar-profile {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease-in-out;
            white-space: nowrap;
        }

        .sidebar-profile img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 2px solid #f0f0f0;
            flex-shrink: 0;
        }

        .sidebar-profile-text {
            margin-left: 15px;
            transition: all 0.3s ease-in-out;
            white-space: nowrap;
        }

        #sidebar.collapsed .sidebar-profile {
            justify-content: center;
            padding: 15px 5px;
        }

        #sidebar.collapsed .sidebar-profile-text {
            display: none;
        }

        .sidebar-menu .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            margin: 5px 10px;
            font-size: 14px;
            color: #505050;
            border-radius: 8px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        #sidebar.collapsed .sidebar-menu .nav-link {
            justify-content: center;
            padding: 12px;
            margin: 5px;
        }

        .sidebar-menu .nav-link.active {
            background-color: #0066cc;
            color: white !important;
            box-shadow: 0 4px 8px rgba(0, 102, 204, 0.2);
        }

        .sidebar-menu .nav-link:hover:not(.active) {
            background-color: #e6f0ff;
            color: #0066cc !important;
            transform: translateX(5px);
            /* Improved contrast for hover state */
            border-left: 3px solid #0066cc;
        }

        #sidebar.collapsed .sidebar-menu .nav-link:hover:not(.active) {
            transform: scale(1.1);
            border-left: none;
        }

        .sidebar-menu .nav-link i {
            font-size: 18px;
            min-width: 24px;
            text-align: center;
            flex-shrink: 0;
        }

        .sidebar-item-text {
            transition: opacity 0.2s ease-in-out;
            opacity: 1;
        }

        #sidebar.collapsed .sidebar-item-text {
            display: none;
        }

        /* Toggle Sidebar Button */
        .toggle-sidebar {
            position: absolute;
            top: 10px;
            right: -16px;
            background: #0066cc;
            border: none;
            color: white;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            z-index: 1001;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
        }

        .toggle-sidebar:hover {
            background: #0055aa;
            transform: scale(1.1);
        }

        /* User profile styling in navbar */
        .user-profile-nav img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Content Area Adjustment */
        #content {
            margin-left: 250px;
            transition: margin-left 0.3s ease-in-out;
            min-height: 100vh;
            padding-top: 85px;
            /* Adjusted to account for navbar height */
        }

        #content.expanded {
            margin-left: 70px;
        }

        /* Mobile View Responsiveness */
        @media (max-width: 992px) {
            #sidebar {
                width: 70px;
            }

            #sidebar.expanded {
                width: 250px;
            }

            #content {
                margin-left: 70px;
            }

            #content.expanded {
                margin-left: 250px;
            }

            #sidebar .sidebar-profile-text {
                display: none;
            }

            #sidebar.expanded .sidebar-profile-text {
                display: block;
            }

            #sidebar .sidebar-item-text {
                display: none;
            }

            #sidebar.expanded .sidebar-item-text {
                display: block;
            }

            #sidebar .sidebar-profile {
                justify-content: center;
                padding: 15px 5px;
            }

            #sidebar.expanded .sidebar-profile {
                justify-content: flex-start;
                padding: 15px;
            }

            #sidebar .sidebar-menu .nav-link {
                justify-content: center;
                padding: 12px;
                margin: 5px;
            }

            #sidebar.expanded .sidebar-menu .nav-link {
                justify-content: flex-start;
                padding: 12px 20px;
                margin: 5px 10px;
            }

            /* For mobile view, revert to click dropdown since hover doesn't work well on touch */
            .navbar-nav .dropdown:hover .dropdown-menu {
                display: none;
                opacity: 0;
                transform: translateY(10px);
                pointer-events: none;
            }

            .navbar-nav .dropdown.show .dropdown-menu {
                display: block;
                opacity: 1;
                transform: translateY(0);
                pointer-events: auto;
            }
        }

        /* Add this to your existing CSS in the style section */
        @media (min-width: 992px) {
            .user-profile-nav .dropdown-menu {
                right: 0;
                left: auto;
                min-width: 180px;
                /* Control the width */
                max-width: 200px;
                /* Limit maximum width */
                margin-top: 10px;
                /* Create some space from the navbar */
            }
        }

        /* For mobile views */
        @media (max-width: 991.98px) {
            .user-profile-nav .dropdown-menu {
                position: absolute;
                right: 0;
                left: auto;
                width: 180px;
                /* Fixed width for mobile */
                transform: none !important;
                /* Prevent any transformations that might cause issues */
            }
        }

        /* Add a position relative to ensure dropdown positioning context */
        .user-profile-nav {
            position: relative;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-2">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="#">
                <img src="images/englishvit-logo.png" alt="EnglishVit Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Daftar Kursus
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Live Class</a></li>
                            <li><a class="dropdown-item" href="#">One on One</a></li>
                            <li><a class="dropdown-item" href="#">Certification Test</a></li>
                            <li><a class="dropdown-item" href="#">Learning Package</a></li>
                            <li><a class="dropdown-item" href="#">Smart Book</a></li>
                            <li><a class="dropdown-item" href="#">Subscription</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kelas Saya</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link cart-button" href="#">
                            <i class="bi bi-cart fs-5"></i>
                            <span class="cart-count">3</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown user-profile-nav active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-current="page">
                            <img src="images/user-avatar.jpg" alt="User Profile">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profil Saya</a></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->
    <div id="sidebar">
        <!-- Toggle Sidebar Button (moved inside the sidebar) -->
        <button id="toggle-sidebar-btn" class="toggle-sidebar">
            <i class="bi bi-chevron-left"></i>
        </button>

        <!-- Profile Section -->
        <div class="sidebar-profile">
            <img src="images/user-avatar.jpg" alt="User Profile" class="rounded-circle">
            <div class="sidebar-profile-text">
                <h6 class="mb-1">John Doe</h6>
                <a href="#" class="text-decoration-none small">View Profile</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-receipt"></i>
                        <span class="sidebar-item-text">Transaction</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-book"></i>
                        <span class="sidebar-item-text">Learning Package</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-award"></i>
                        <span class="sidebar-item-text">Certification Test</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-journal-text"></i>
                        <span class="sidebar-item-text">Smart Book</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-patch-check"></i>
                        <span class="sidebar-item-text">Sertifikat</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content Area -->
    <div id="content">
        <div class="container-fluid p-4">
            <h1>Dashboard Content</h1>
            <p>This is a placeholder for the dashboard content. The actual content will be added separately.</p>
        </div>
    </div>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const toggleButton = document.getElementById('toggle-sidebar-btn');
            const toggleIcon = toggleButton.querySelector('i');

            // Function to toggle sidebar visibility with smooth animation
            function toggleSidebar() {
                // Toggle sidebar collapsed state
                sidebar.classList.toggle('collapsed');

                // Toggle content expanded state
                content.classList.toggle('expanded');

                // Toggle icon direction
                if (sidebar.classList.contains('collapsed')) {
                    toggleIcon.classList.remove('bi-chevron-left');
                    toggleIcon.classList.add('bi-chevron-right');
                } else {
                    toggleIcon.classList.remove('bi-chevron-right');
                    toggleIcon.classList.add('bi-chevron-left');
                }
            }

            // Add click event listener to toggle button
            toggleButton.addEventListener('click', toggleSidebar);

            // Handle mobile dropdown behavior
            if (window.innerWidth < 992) {
                const dropdowns = document.querySelectorAll('.navbar-nav .dropdown');
                dropdowns.forEach(dropdown => {
                    const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                    dropdownToggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        dropdown.classList.toggle('show');
                    });
                });
            }

            // Handle responsive behavior
            function handleResponsiveLayout() {
                if (window.innerWidth < 992) {
                    if (!sidebar.classList.contains('collapsed') && !sidebar.classList.contains('expanded')) {
                        // Auto-collapse sidebar on small screens but still show icons
                        sidebar.classList.add('collapsed');
                        content.classList.add('expanded');
                        toggleIcon.classList.remove('bi-chevron-left');
                        toggleIcon.classList.add('bi-chevron-right');
                    }
                }
            }

            // Check on page load
            handleResponsiveLayout();

            // Check on window resize
            window.addEventListener('resize', handleResponsiveLayout);
        });
    </script>

</body>

</html>
