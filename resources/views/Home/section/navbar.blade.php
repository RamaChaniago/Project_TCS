<style>
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

    .navbar-nav .nav-link.active {
        color: #007bff !important;
        font-weight: bold;
    }

    .user-profile-nav img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
    }

    .custom-toggler {
        border: none;
        background: transparent;
        padding: 0;
    }

    .custom-toggler:focus {
        outline: none;
        box-shadow: none;
    }

    .custom-toggler img {
        width: 30px;
        height: 30px;
    }

    /* Style for logout button to match dropdown items */
    .dropdown-menu form button.dropdown-item {
        background: none;
        border: none;
        padding: 6px 16px;
        text-align: left;
        width: 100%;
        color: #333;
    }

    .dropdown-menu form button.dropdown-item:hover {
        background-color: #f8f9fa;
        color: #0066cc;
    }

    @media (max-width: 991px) {
        .navbar-nav .dropdown-menu {
            padding-left: 20px;
            border: none;
            box-shadow: none;
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
        }

        .user-profile-nav .dropdown-menu {
            padding-left: 20px;
            margin-left: 10px;
        }

        .nav-item.dropdown {
            width: 100%;
        }

        .dropdown-toggle::after {
            float: right;
            margin-top: 10px;
        }

        .navbar-nav .nav-link {
            padding-left: 0;
        }
    }
</style>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo_speakout.png') }}" alt="ToeflPCT Logo">
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{ asset('assets/images/hamburger-icon.png') }}" alt="Menu">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Daftar Kursus
                    </a>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="/courses-one-on-one">One on One</a></li> --}}
                        <li><a class="dropdown-item" href="/courses-certification-test">Certification Test</a></li>
                        {{-- <li><a class="dropdown-item" href="/courses-live-class">Live Class</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="/courses-learning-package">Learning Package</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="/courses-smart-book">Smart Book</a></li> --}}
                        {{-- <li><a class="dropdown-item" href="/courses-subscription">Subscription</a></li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/Promo">Promo</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/Karir">Karir</a>
                </li> --}}

                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/member">Kelas Saya</a>
                </li>
                {{-- <li class="nav-item me-2">
                    <a class="nav-link cart-button" href="/checkout">
                        <i class="bi bi-cart fs-5"></i>
                        <span class="cart-count">3</span>
                    </a>
                </li> --}}
                <li class="nav-item dropdown user-profile-nav">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset(Auth::user()->profile_image ?? 'assets/images/profile.jpg') }}" alt="profile">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/profile-member">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-primary" href="/login">Masuk</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
