<style>
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

</style>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo_speakout.png') }}" alt="ToeflPCT Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Daftar Kursus
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/courses-one-on-one">One on One</a></li>
                        <li><a class="dropdown-item" href="/courses-certification-test">Certification Test</a></li>
                        <li><a class="dropdown-item" href="/courses-live-class">Live Class</a></li>
                        <li><a class="dropdown-item" href="/courses-learning-package">Learning Package</a></li>
                        <li><a class="dropdown-item" href="/courses-smart-book">Smart Book</a></li>
                        <li><a class="dropdown-item" href="/courses-subscription">Subscription</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Promo">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Karir">Karir</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/member">Kelas Saya</a>
                </li>


                <li class="nav-item me-2">
                    <a class="nav-link cart-button" href="/checkout">
                        <i class="bi bi-cart fs-5"></i>
                        <span class="cart-count">3</span>
                    </a>
                </li>
                <li class="nav-item dropdown user-profile-nav active">
                    <a class="nav-link dropdown-toggle" href="#" role="button" aria-current="page">
                        <img src="{{ asset('assets/images/profile.jpg') }}" width="10%" alt="profile">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a class="btn btn-primary" href="/login">Masuk</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
