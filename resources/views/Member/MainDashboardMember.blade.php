<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Member - ToeflPCT</title>
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
            transition: all 0.3s ease;
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
        }

        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-link:hover,
        .nav-link.active {
            color: #0066cc !important;
        }

        /* Dropdown hover functionality */
        .navbar-nav .dropdown:hover .dropdown-menu,
        .navbar-nav .dropdown.show .dropdown-menu {
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
            /* margin-top: 0; */
        }

        .navbar-nav .dropdown-item {
            /* border: none;
            padding: 8px 16px; */
            transition: all 0.2s ease;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #f0f7ff;
            color: #0066cc;
            transform: translateX(5px);
        }

        /* Button Styles */
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

        @media (max-width: 992px) {
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
    </style>
</head>

<body>
    {{-- @include('sweetalert::alert') --}}
    <!-- Navbar -->
    @include('Home.section.navbar')
    <!-- Sidebar -->
    <div id="sidebar">
        <!-- Toggle Sidebar Button (moved inside the sidebar) -->
        <button id="toggle-sidebar-btn" class="toggle-sidebar">
            <i class="bi bi-chevron-left"></i>
        </button>

        <!-- Profile Section -->
        <div class="sidebar-profile">
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="User Profile" class="rounded-circle">
            <div class="sidebar-profile-text">
                <h6 class="mb-1">Oline Manuel Chay</h6>
                <a href="/profile-member" class="text-decoration-none small">View Profile</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/transaction" class="nav-link">
                        <i class="bi bi-receipt"></i>
                        <span class="sidebar-item-text">Transaction</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/learning-package" class="nav-link">
                        <i class="bi bi-book"></i>
                        <span class="sidebar-item-text">Learning Package</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/certification-test" class="nav-link">
                        <i class="bi bi-award"></i>
                        <span class="sidebar-item-text">Certification Test</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/smart-book" class="nav-link">
                        <i class="bi bi-journal-text"></i>
                        <span class="sidebar-item-text">Smart Book</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/sertifikat" class="nav-link">
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
            @yield('content')
        </div>
    </div>

    <!-- Main Content -->
    {{-- @yield('content') --}}



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
                sidebar.classList.toggle('collapsed');
                content.classList.toggle('expanded');

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
            const navLinks = document.querySelectorAll('.sidebar-menu .nav-link');
            const currentPath = window.location.pathname;

            console.log("Current Path:", currentPath);

            navLinks.forEach(link => {
                const linkPath = link.getAttribute('href');
                console.log("Checking:", linkPath);

                // Pastikan path cocok sepenuhnya atau dengan pola
                if (currentPath === linkPath || currentPath.startsWith(linkPath)) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>

</body>

</html>
