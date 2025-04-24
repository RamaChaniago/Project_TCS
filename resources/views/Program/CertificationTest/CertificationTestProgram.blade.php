@extends('Main')

@section('content')
    <!-- Program Detail Page with Mobile-Desktop Transition -->
    <div class="container mt-5 pt-3">
        <div class="row">
            <!-- Left Content (Main Content) -->
            <div class="col-lg-8">
                <!-- Section 1: Program Title and Rating -->
                <section class="mb-5">
                    <span class="badge bg-primary rounded-pill mb-2">Certification Test</span>
                    <h1 class="fw-bold mb-2">Online TOEFL Test</h1>
                    <p class="text-muted fs-5 mb-3">1x Test TOEFL Online Besertifikat</p>

                    <div class="d-flex align-items-center mb-4">
                        <div class="me-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <span class="ms-1 fw-bold">4.8</span>
                        </div>
                        <span class="text-muted">(250+ reviews)</span>
                    </div>
                </section>

                <!-- Mobile Hero Banner (visible only on mobile) -->
                <div class="d-lg-none mb-4 mobile-hero-banner">
                    <div class="position-relative">
                        <img src="{{ asset('img/toefl-test-banner.jpg') }}" class="w-100 rounded" alt="TOEFL Test">
                        <!-- Mobile Price Display -->
                        <div class="mobile-price-overlay">
                            <div class="d-flex align-items-center mb-1">
                                <span class="badge bg-danger rounded-pill me-2">82%</span>
                                <span class="text-decoration-line-through text-white">Rp550.000</span>
                            </div>
                            <h3 class="fw-bold text-white mb-2">Rp99.000</h3>
                            <div id="mobile-countdown" class="text-white small mb-2">Berakhir dalam: 04:36:22</div>
                        </div>
                    </div>
                    <!-- Mobile Action Buttons -->
                    <div class="mt-3 d-flex gap-2">
                        <a href="/checkout" class="btn btn-primary flex-grow-1 text-center">Beli Sekarang</a>
                        <a href="https://wa.me/+6282177980624" target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-chat-text"></i> Chat Admin
                        </a>
                    </div>
                </div>

                <!-- Section 2: About The Program -->
                <section class="mb-5">
                    <h2 class="fw-bold mb-4">Tentang Program</h2>

                    <!-- Test Overview -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-4 border-end border-light">
                                    <div class="text-center">
                                        <i class="bi bi-list-check fs-3 text-primary mb-2"></i>
                                        <h5 class="fw-bold">Total Soal</h5>
                                        <p class="mb-0">140 soal</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-end border-light">
                                    <div class="text-center">
                                        <i class="bi bi-clock fs-3 text-primary mb-2"></i>
                                        <h5 class="fw-bold">Durasi</h5>
                                        <p class="mb-0">120 menit</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <i class="bi bi-shield-exclamation fs-3 text-primary mb-2"></i>
                                        <h5 class="fw-bold">Perhatian</h5>
                                        <p class="mb-0">Fokus saat test</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3">Deskripsi</h4>
                            <p>Test TOEFL online ini dirancang untuk mengukur kemampuan bahasa Inggris Anda secara
                                komprehensif. Dengan format yang mirip dengan TOEFL ITP, test ini mencakup tiga bagian:
                                Listening Comprehension, Structure and Written Expression, dan Reading Comprehension.
                                Setelah menyelesaikan test, Anda akan menerima sertifikat resmi dengan skor yang berlaku
                                selama 2 tahun.</p>
                            <p class="mb-0">Test ini dapat diakses dari mana saja dengan koneksi internet stabil dan
                                tersedia selama 24 jam setelah pembayaran. Hasil dan sertifikat akan dikirimkan ke email
                                dalam waktu 1-2 hari kerja.</p>
                        </div>
                    </div>

                    <!-- Target Students -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3">Target Siswa</h4>
                            <p class="mb-0">Test TOEFL online ini cocok untuk mahasiswa, profesional, atau siapa saja yang
                                membutuhkan sertifikat TOEFL untuk keperluan akademik, pekerjaan, atau pengembangan diri.
                            </p>
                        </div>
                    </div>

                    <!-- Test Sections -->
                    <div class="card mb-4 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3">Sesi Test</h4>

                            <div class="accordion" id="testSections">
                                <!-- Listening Section -->
                                <div class="accordion-item border-0 mb-3">
                                    <h2 class="accordion-header" id="headingListening">
                                        <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseListening" aria-expanded="true"
                                            aria-controls="collapseListening">
                                            <strong>Listening Comprehension</strong> - 50 soal (35 menit)
                                        </button>
                                    </h2>
                                    <div id="collapseListening" class="accordion-collapse collapse show"
                                        aria-labelledby="headingListening" data-bs-parent="#testSections">
                                        <div class="accordion-body">
                                            <p>Mengukur kemampuan Anda memahami percakapan dan ceramah dalam bahasa Inggris.
                                                Anda akan mendengarkan rekaman audio dan menjawab pertanyaan terkait. Bagian
                                                ini menguji pemahaman Anda tentang ide utama, detail, inferensi, dan tujuan
                                                pembicara.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Structure Section -->
                                <div class="accordion-item border-0 mb-3">
                                    <h2 class="accordion-header" id="headingStructure">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseStructure"
                                            aria-expanded="false" aria-controls="collapseStructure">
                                            <strong>Structure and Written Expression</strong> - 40 soal (25 menit)
                                        </button>
                                    </h2>
                                    <div id="collapseStructure" class="accordion-collapse collapse"
                                        aria-labelledby="headingStructure" data-bs-parent="#testSections">
                                        <div class="accordion-body">
                                            <p>Mengukur kemampuan Anda mengenali tata bahasa yang benar dalam bahasa
                                                Inggris. Anda akan mengidentifikasi kesalahan dalam kalimat dan memilih
                                                struktur kalimat yang tepat. Bagian ini menguji pengetahuan Anda tentang
                                                aturan tata bahasa Inggris.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Reading Section -->
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingReading">
                                        <button class="accordion-button collapsed bg-light" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseReading"
                                            aria-expanded="false" aria-controls="collapseReading">
                                            <strong>Reading Comprehension</strong> - 50 soal (55 menit)
                                        </button>
                                    </h2>
                                    <div id="collapseReading" class="accordion-collapse collapse"
                                        aria-labelledby="headingReading" data-bs-parent="#testSections">
                                        <div class="accordion-body">
                                            <p>Mengukur kemampuan Anda memahami teks akademik dalam bahasa Inggris. Anda
                                                akan membaca beberapa teks dan menjawab pertanyaan tentang isi, gagasan
                                                utama, kesimpulan, dan kosakata. Bagian ini menguji pemahaman membaca dan
                                                keterampilan analitis Anda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews - Vertikal dengan animasi scroll -->
                    <div class="card mb-4 border-0 shadow-sm animate-on-scroll">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="fw-bold mb-0">Review Siswa</h4>
                                <div>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-half text-warning"></i>
                                    <span class="ms-1 fw-bold">4.8</span>
                                    <span class="text-muted">(250+ reviews)</span>
                                </div>
                            </div>

                            <!-- Rating bars diubah menjadi vertikal -->
                            <div class="d-flex flex-column gap-3">
                                <!-- 5 stars -->
                                <div class="d-flex align-items-center">
                                    <span class="fw-medium me-3 text-nowrap" style="width: 50px;">5 <i
                                            class="bi bi-star-fill text-warning small"></i></span>
                                    <div class="progress flex-grow-1" style="height: 12px;">
                                        <div class="progress-bar bg-warning rating-bar" role="progressbar"
                                            style="width: 0%" data-width="90%"></div>
                                    </div>
                                    <span class="ms-2 text-muted small">90%</span>
                                </div>

                                <!-- 4 stars -->
                                <div class="d-flex align-items-center">
                                    <span class="fw-medium me-3 text-nowrap" style="width: 50px;">4 <i
                                            class="bi bi-star-fill text-warning small"></i></span>
                                    <div class="progress flex-grow-1" style="height: 12px;">
                                        <div class="progress-bar bg-warning rating-bar" role="progressbar"
                                            style="width: 0%" data-width="70%"></div>
                                    </div>
                                    <span class="ms-2 text-muted small">70%</span>
                                </div>

                                <!-- 3 stars -->
                                <div class="d-flex align-items-center">
                                    <span class="fw-medium me-3 text-nowrap" style="width: 50px;">3 <i
                                            class="bi bi-star-fill text-warning small"></i></span>
                                    <div class="progress flex-grow-1" style="height: 12px;">
                                        <div class="progress-bar bg-warning rating-bar" role="progressbar"
                                            style="width: 0%" data-width="20%"></div>
                                    </div>
                                    <span class="ms-2 text-muted small">20%</span>
                                </div>

                                <!-- 2 stars -->
                                <div class="d-flex align-items-center">
                                    <span class="fw-medium me-3 text-nowrap" style="width: 50px;">2 <i
                                            class="bi bi-star-fill text-warning small"></i></span>
                                    <div class="progress flex-grow-1" style="height: 12px;">
                                        <div class="progress-bar bg-warning rating-bar" role="progressbar"
                                            style="width: 0%" data-width="5%"></div>
                                    </div>
                                    <span class="ms-2 text-muted small">5%</span>
                                </div>

                                <!-- 1 star -->
                                <div class="d-flex align-items-center">
                                    <span class="fw-medium me-3 text-nowrap" style="width: 50px;">1 <i
                                            class="bi bi-star-fill text-warning small"></i></span>
                                    <div class="progress flex-grow-1" style="height: 12px;">
                                        <div class="progress-bar bg-warning rating-bar" role="progressbar"
                                            style="width: 0%" data-width="2%"></div>
                                    </div>
                                    <span class="ms-2 text-muted small">2%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section 3: Recommended Courses -->
                <section class="mb-5">
                    <h2 class="fw-bold mb-4">Kelas Lain yang Direkomendasikan</h2>

                    <div class="row">
                        <!-- Recommended Course 1 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm animate-on-scroll">
                                <img src="{{ asset('img/toefl-prep-course.jpg') }}" class="card-img-top"
                                    alt="TOEFL Preparation Course">
                                <div class="card-body">
                                    <span class="badge bg-info mb-2">Kelas Persiapan</span>
                                    <h5 class="card-title fw-bold">TOEFL Preparation Course</h5>
                                    <p class="card-text text-muted">Kelas intensif untuk mempersiapkan test TOEFL dengan
                                        materi lengkap dan simulasi ujian.</p>
                                    <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>

                        <!-- Recommended Course 2 -->
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm animate-on-scroll">
                                <img src="{{ asset('img/toefl-speaking-course.jpg') }}" class="card-img-top"
                                    alt="TOEFL Speaking Course">
                                <div class="card-body">
                                    <span class="badge bg-success mb-2">Kelas Skill</span>
                                    <h5 class="card-title fw-bold">TOEFL Speaking Course</h5>
                                    <p class="card-text text-muted">Fokus meningkatkan kemampuan speaking untuk TOEFL
                                        dengan mentor berpengalaman.</p>
                                    <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Right Content (Floating Card) - Only visible on desktop -->
            <div class="col-lg-4 d-none d-lg-block">
                <div class="card border-0 shadow floating-card">
                    <!-- Image at the top of the card -->
                    <div class="p-3 bg-primary rounded-top">
                        <img src="{{ asset('img/toefl-test-banner.jpg') }}" class="card-img-top rounded"
                            alt="TOEFL Test">
                    </div>

                    <div class="card-body p-4">
                        <!-- Countdown Timer -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Berakhir dalam</span>
                            <div class="fw-bold" id="desktop-countdown">04:36:22</div>
                        </div>

                        <!-- Price with Discount -->
                        <div class="mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-danger rounded-pill me-2">82%</span>
                                <span class="text-decoration-line-through text-muted">Rp550.000</span>
                            </div>
                            <h3 class="fw-bold text-primary">Rp99.000</h3>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2 mb-3">
                            <button class="btn btn-primary flex-grow-1">Beli Sekarang</button>
                            <button class="btn btn-outline-primary"><i class="bi bi-cart"></i></button>
                        </div>
                        <button class="btn btn-outline-secondary w-100">Chat Admin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Bottom Action Bar (fixed at bottom on mobile) -->
    <div class="mobile-action-bar d-lg-none">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <span class="text-decoration-line-through text-muted small">Rp550.000</span>
                <div class="fw-bold">Rp99.000</div>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-outline-secondary">Chat</button>
                <button class="btn btn-sm btn-primary">Beli</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('Home.section.footer')


    <!-- Scripts for animations and transitions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variables for tracking state
            let isTransitioning = false;
            let lastScrollPosition = window.scrollY;
            let lastScreenWidth = window.innerWidth;
            let ticking = false;

            // DOM elements
            const floatingCard = document.querySelector('.floating-card');
            const mainContentArea = document.querySelector('.col-lg-8');
            const mobileActionBar = document.querySelector('.mobile-action-bar');
            const desktopCountdown = document.getElementById('desktop-countdown');
            const mobileCountdown = document.getElementById('mobile-countdown');

            // Configuration constants
            const NAVBAR_HEIGHT = 80; // Adjust this value based on your actual navbar height
            const FOOTER_HEIGHT = 120; // Adjust this value based on your actual footer height
            const BREAKPOINT_LG = 992; // Bootstrap lg breakpoint

            // Function to detect viewport
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8
                );
            }

            // Handle scroll animations
            function handleScrollAnimation() {
                // Animate elements with class animate-on-scroll
                document.querySelectorAll('.animate-on-scroll').forEach(function(element) {
                    if (isElementInViewport(element)) {
                        element.classList.add('fade-in-element');
                    }
                });

                // Animate rating bars
                document.querySelectorAll('.rating-bar').forEach(function(bar) {
                    if (isElementInViewport(bar)) {
                        const targetWidth = bar.getAttribute('data-width');
                        bar.style.width = targetWidth;
                    }
                });
            }

            // Handle floating card positioning
            function updateFloatingCard() {
                const currentScrollPosition = window.scrollY;

                // Handle desktop floating behavior only if elements exist and screen is wide enough
                if (floatingCard && mainContentArea && window.innerWidth >= BREAKPOINT_LG) {
                    // Find the bottom boundary (last review section or end of main content)
                    const reviewSection = document.querySelector('.col-lg-8 section:last-of-type');
                    const reviewBottom = reviewSection ? reviewSection.offsetTop + reviewSection.offsetHeight : 0;
                    const mainContentBottom = Math.min(
                        reviewBottom || Number.MAX_VALUE,
                        mainContentArea.offsetTop + mainContentArea.offsetHeight
                    );

                    const floatingCardParent = floatingCard.parentElement;
                    const floatingCardHeight = floatingCard.offsetHeight;
                    const windowHeight = window.innerHeight;
                    const initialCardTop = floatingCardParent.offsetTop;

                    // Calculate maximum position to stop before footer or review section end
                    const maxTop = mainContentBottom - floatingCardHeight;

                    // Set the width of the floating card to match parent width
                    const parentWidth = floatingCardParent.offsetWidth;

                    // Reset card to initial state if window is resized or at the top
                    if (currentScrollPosition <= initialCardTop - NAVBAR_HEIGHT) {
                        // At initial position or above - position normally
                        floatingCard.style.position = 'relative';
                        floatingCard.style.top = '0';
                        floatingCard.style.width = '100%';
                    }
                    // If scrolled and card should be fixed, but not yet reached bottom boundary
                    else if (currentScrollPosition + NAVBAR_HEIGHT + floatingCardHeight < maxTop) {
                        floatingCard.style.position = 'fixed';
                        floatingCard.style.top = NAVBAR_HEIGHT + 'px';
                        floatingCard.style.width = parentWidth + 'px';
                    }
                    // If we've reached or passed the bottom boundary
                    else {
                        floatingCard.style.position = 'absolute';
                        floatingCard.style.top = (maxTop - initialCardTop) + 'px';
                        floatingCard.style.width = '100%';
                    }
                } else if (floatingCard) {
                    // Reset any floating card styles on mobile
                    floatingCard.style.position = '';
                    floatingCard.style.top = '';
                    floatingCard.style.width = '';
                }

                // Mobile action bar visibility behavior
                if (mobileActionBar && window.innerWidth < BREAKPOINT_LG) {
                    // Show/hide based on scroll direction
                    if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 300) {
                        // Scrolling down and not at top - hide
                        mobileActionBar.classList.add('mobile-action-bar-hidden');
                    } else {
                        // Scrolling up or at top - show
                        mobileActionBar.classList.remove('mobile-action-bar-hidden');
                    }
                }

                lastScrollPosition = currentScrollPosition;
                ticking = false;
            }

            // Handle resize events
            function handleResize() {
                const currentWidth = window.innerWidth;

                // If crossing the breakpoint
                if ((lastScreenWidth < BREAKPOINT_LG && currentWidth >= BREAKPOINT_LG) ||
                    (lastScreenWidth >= BREAKPOINT_LG && currentWidth < BREAKPOINT_LG)) {

                    // Prevent multiple transitions
                    if (!isTransitioning) {
                        isTransitioning = true;

                        // Add transition class
                        document.body.classList.add('layout-transitioning');

                        // Remove transition class after animation completes
                        setTimeout(() => {
                            document.body.classList.remove('layout-transitioning');
                            isTransitioning = false;

                            // Reset any floating card styles
                            if (floatingCard) {
                                floatingCard.style.position = '';
                                floatingCard.style.top = '';
                                floatingCard.style.width = '';
                            }

                            // Force an update of the floating card
                            updateFloatingCard();
                        }, 500);
                    }
                }

                // Update floating card width on any resize
                if (floatingCard && window.innerWidth >= BREAKPOINT_LG &&
                    (floatingCard.style.position === 'fixed' || floatingCard.style.position === 'absolute')) {
                    const parentWidth = floatingCard.parentElement.offsetWidth;
                    floatingCard.style.width = parentWidth + 'px';
                }

                lastScreenWidth = currentWidth;
            }

            // Setup countdown timer
            function setupCountdown() {
                if (!desktopCountdown && !mobileCountdown) return;

                // Set the initial time (4 hours, 36 minutes, 22 seconds)
                let hours = 4;
                let minutes = 36;
                let seconds = 22;

                // Update countdown every second
                const countdownInterval = setInterval(function() {
                    // Decrease time
                    if (seconds > 0) {
                        seconds--;
                    } else {
                        if (minutes > 0) {
                            minutes--;
                            seconds = 59;
                        } else {
                            if (hours > 0) {
                                hours--;
                                minutes = 59;
                                seconds = 59;
                            } else {
                                // Time's up
                                clearInterval(countdownInterval);
                                if (desktopCountdown) desktopCountdown.textContent = "Waktu habis!";
                                if (mobileCountdown) mobileCountdown.textContent =
                                    "Berakhir dalam: Waktu habis!";
                                return;
                            }
                        }
                    }

                    // Format time values
                    const hoursFormatted = hours.toString().padStart(2, '0');
                    const minutesFormatted = minutes.toString().padStart(2, '0');
                    const secondsFormatted = seconds.toString().padStart(2, '0');
                    const timeString = `${hoursFormatted}:${minutesFormatted}:${secondsFormatted}`;

                    // Update countdown displays
                    if (desktopCountdown) desktopCountdown.textContent = timeString;
                    if (mobileCountdown) mobileCountdown.textContent = `Berakhir dalam: ${timeString}`;
                }, 1000);
            }

            // Optimized scroll handler with requestAnimationFrame
            function onScroll() {
                if (!ticking) {
                    window.requestAnimationFrame(() => {
                        updateFloatingCard();
                        handleScrollAnimation();
                        ticking = false;
                    });
                    ticking = true;
                }
            }

            // Initialize
            setTimeout(() => {
                handleScrollAnimation();
                updateFloatingCard();
            }, 300);

            setupCountdown();

            // Event listeners with optimized handlers
            window.addEventListener('scroll', onScroll, {
                passive: true
            });
            window.addEventListener('resize', handleResize, {
                passive: true
            });
            window.addEventListener('load', updateFloatingCard);
        });
    </script>

    <!-- Enhanced CSS for transitions and animations -->
    <style>
        /* Animation for scrolled elements */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in-element {
            opacity: 1;
            transform: translateY(0);
        }

        .rating-bar {
            transition: width 1s ease-in-out;
        }

        /* Mobile to Desktop transition */
        .layout-transitioning * {
            transition: all 0.5s ease-in-out !important;
        }

        /* Floating card on desktop */
        .floating-card {
            width: 100%;
            will-change: position, top;
            transition: top 0.2s ease-out, position 0.2s ease-out;
            z-index: 100;
        }

        /* Mobile hero banner styling */
        .mobile-hero-banner {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            margin-top: -2rem;
            margin-bottom: 2rem;
        }

        .mobile-hero-banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        /* Enhanced mobile banner for landing page effect */
        @media (max-width: 991px) {
            .mobile-hero-banner {
                margin: -1.5rem -1rem 2rem;
                border-radius: 0;
            }

            .mobile-hero-banner img {
                min-height: 45vh;
                object-fit: cover;
                transform: scale(1.05);
            }

            /* Make the top section appear as a landing page */
            .container.mt-5.pt-3 {
                padding-top: 0 !important;
                margin-top: 0 !important;
            }

            section:first-of-type {
                margin-top: -0.5rem;
                position: relative;
                z-index: 10;
            }

            /* Fade effect for text over image */
            section:first-of-type {
                background: linear-gradient(rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0.8) 30%, rgba(255, 255, 255, 1) 60%);
                padding-top: 1rem;
                border-radius: 20px 20px 0 0;
                margin-top: -25px;
            }
        }

        /* Price overlay on mobile banner */
        .mobile-price-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            padding: 30px 15px 15px;
            color: white;
        }

        /* Fixed bottom bar on mobile */
        .mobile-action-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .mobile-action-bar-hidden {
            transform: translateY(100%);
        }

        /* Smoother transitions for responsive layout changes */
        @media (min-width: 992px) {
            .d-lg-block {
                transition: opacity 0.5s ease, transform 0.5s ease;
            }

            .d-lg-none {
                transition: opacity 0.5s ease, transform 0.5s ease;
            }

            /* Ensure content has enough space to scroll past */
            .col-lg-8 {
                min-height: 100vh;
            }

            /* Improved floating card behavior */
            .floating-card {
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                transform: translateZ(0);
                /* Force hardware acceleration */
            }

            /* Add gentle hover effect */
            .floating-card:hover {
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            }
        }

        /* Make the right column properly handle the floating card */
        @media (min-width: 992px) {
            .col-lg-4 {
                position: relative;
            }
        }

        /* Fix container padding on mobile for full-width banner effect */
        @media (max-width: 767px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        /* Add padding to bottom to account for fixed mobile action bar */
        @media (max-width: 991px) {
            body {
                padding-bottom: 65px;
            }

            /* Keep footer above the action bar */
            footer {
                margin-bottom: 60px;
            }
        }

        /* Smooth scroll behavior for better UX */
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection
