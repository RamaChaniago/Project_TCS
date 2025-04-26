@extends('Main')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Checkout Progress Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="font-weight-bold mb-0">Checkout Process</h2>
                    <div class="d-flex gap-2">
                        <span class="badge bg-info text-white">
                            <i class="bi bi-clock me-1"></i> Order in Progress
                        </span>
                    </div>
                </div>

                <!-- Checkout Sections -->
                <div class="row g-4">
                    <!-- Section 1: Login/Register -->
                    <div class="col-12">
                        <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                            <div
                                class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">
                                    <i class="bi bi-person-check me-2 text-primary"></i>
                                    1. Login or Register
                                </h5>
                                <button class="btn btn-link toggle-collapse" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#loginSection" aria-expanded="{{ Auth::check() ? 'false' : 'true' }}" aria-controls="loginSection">
                                    <i class="bi bi-chevron-{{ Auth::check() ? 'down' : 'up' }}"></i>
                                </button>
                            </div>
                            <div id="loginSection" class="collapse {{ Auth::check() ? '' : 'show' }}">
                                <div class="card-body">
                                    @if(Auth::check())
                                        <div class="alert alert-success">
                                            <i class="bi bi-check-circle me-2"></i> You are logged in as {{ Auth::user()->email }}
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Login Form -->
                                                <form id="loginForm" action="{{ route('login') }}" method="POST" class="needs-validation" novalidate>
                                                    @csrf
                                                    <input type="hidden" name="redirect_to" value="{{ url()->current() }}">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email Address</label>
                                                        <input type="email"
                                                            class="form-control rounded-pill @error('email') is-invalid @enderror"
                                                            id="email" name="email" value="{{ old('email') }}" autofocus>
                                                        @error('email')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password"
                                                            class="form-control rounded-pill @error('password') is-invalid @enderror"
                                                            id="password" name="password" autocomplete="current-password">
                                                        @error('password')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="bi bi-box-arrow-in-right me-2"></i> Login
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Register Section -->
                                                <div class="border-start ps-3">
                                                    <h6 class="text-muted">New to Our Platform?</h6>
                                                    <p>Create an account to access exclusive courses and features.</p>
                                                    <a href="{{ route('register') }}?redirect={{ urlencode(url()->current()) }}" class="btn btn-outline-primary">
                                                        <i class="bi bi-person-plus me-2"></i> Create Account
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Your Order -->
                    <div class="col-12">
                        <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                            <div
                                class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">
                                    <i class="bi bi-basket me-2 text-success"></i>
                                    2. Your Order
                                </h5>
                                <button class="btn btn-link toggle-collapse" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#orderSection" aria-expanded="true" aria-controls="orderSection">
                                    <i class="bi bi-chevron-up"></i>
                                </button>
                            </div>
                            <div id="orderSection" class="collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="border-0">Course Package</th>
                                                    <th class="border-0">Description</th>
                                                    <th class="border-0 text-end">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border-0">TOEFL Preparation Package</td>
                                                    <td class="border-0">Complete TOEFL Preparation with 10 Live Sessions
                                                    </td>
                                                    <td class="border-0 text-end">Rp 1,500,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Order Summary & Payment -->
                    <div class="col-12">
                        <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                            <div
                                class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">
                                    <i class="bi bi-credit-card me-2 text-warning"></i>
                                    3. Order Summary & Payment
                                </h5>
                                <button class="btn btn-link toggle-collapse" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#paymentSection" aria-expanded="true" aria-controls="paymentSection">
                                    <i class="bi bi-chevron-up"></i>
                                </button>
                            </div>
                            <div id="paymentSection" class="collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="mb-3">Order Summary</h6>
                                            <div class="card bg-light border-0">
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li
                                                            class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0">
                                                            <span>Subtotal</span>
                                                            <strong>Rp 1,500,000</strong>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0">
                                                            <span>Discount</span>
                                                            <strong class="text-danger">- Rp 150,000</strong>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0">
                                                            <span>Tax (10%)</span>
                                                            <strong>Rp 135,000</strong>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0 fw-bold">
                                                            <span class="text-primary">Total</span>
                                                            <strong class="text-primary">Rp 1,485,000</strong>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="mb-3">Payment Methods</h6>
                                        {{-- <form id="paymentMethodForm" action="{{ route('payment.store') }}" method="POST"> --}}
                                                @csrf
                                                <input type="hidden" name="order_id" value="ORD-{{ strtoupper(Str::random(10)) }}">
                                                <input type="hidden" name="payment_method" id="payment_method" value="qris">

                                                <div class="d-grid gap-2">
                                                    <button type="button" class="btn btn-outline-primary rounded-pill payment-method"
                                                        data-method="bank-transfer">
                                                        <i class="bi bi-bank me-2"></i> Bank Transfer
                                                    </button>
                                                    <button type="button" class="btn btn-outline-success rounded-pill payment-method"
                                                        data-method="credit-card">
                                                        <i class="bi bi-credit-card me-2"></i> Credit Card
                                                    </button>
                                                    <button type="button" class="btn btn-outline-info rounded-pill payment-method"
                                                        data-method="e-wallet">
                                                        <i class="bi bi-wallet2 me-2"></i> E-Wallet
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary rounded-pill payment-method"
                                                        data-method="qris">
                                                        <i class="bi bi-qr-code me-2"></i> QRIS
                                                    </button>
                                                </div>

                                                <div class="mt-4 text-end">
                                                    <button type="submit" class="btn btn-primary btn-lg" id="proceedPayment" {{ Auth::check() ? '' : 'disabled' }}>
                                                        Proceed to Payment
                                                        <i class="bi bi-arrow-right ms-2"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom checkout styles */
        body {
            background-color: #f4f6f9;
        }

        .card {
            transition: all 0.3s ease-in-out;
            margin-bottom: 1rem;
        }

        .card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .card-header {
            background-color: #ffffff !important;
        }

        .payment-method {
            transition: all 0.3s ease;
        }

        .payment-method:hover {
            transform: scale(1.05);
        }

        .payment-method.active {
            background-color: #007bff;
            color: white;
        }

        .list-group-item {
            background-color: transparent !important;
        }

        .toggle-collapse .bi {
            transition: transform 0.3s ease;
        }

        .toggle-collapse[aria-expanded="false"] .bi {
            transform: rotate(180deg);
        }

        /* Remove borders completely */
        .table-borderless,
        .table-borderless th,
        .table-borderless td {
            border: none !important;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Check if user is logged in from Laravel Auth
    const isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};

    // Form Validation
    const loginForm = document.getElementById('loginForm');
    const loginSection = document.getElementById('loginSection');
    const proceedPaymentBtn = document.getElementById('proceedPayment');
    const loginToggleBtn = document.querySelector('[data-bs-target="#loginSection"]');
    const paymentMethodForm = document.getElementById('paymentMethodForm');
    const paymentMethodInput = document.getElementById('payment_method');

    // Set up login section based on authentication status
    if (isLoggedIn) {
        // Add success indicator to login section header
        const loginHeader = loginToggleBtn.parentElement;

        // Check if badge already exists to avoid duplication
        if (!loginHeader.querySelector('.badge.bg-success')) {
            const successBadge = document.createElement('span');
            successBadge.className = 'badge bg-success ms-2';
            successBadge.innerHTML = '<i class="bi bi-check-circle"></i> Completed';
            loginHeader.appendChild(successBadge);
        }

        // Ensure the section is collapsed by default when logged in
        if (loginSection.classList.contains('show')) {
            loginSection.classList.remove('show');
        }

        // Make sure the toggle button is enabled and can be used
        loginToggleBtn.removeAttribute('disabled');

        // Update the toggle icon to show section is closed
        const icon = loginToggleBtn.querySelector('.bi');
        if (icon.classList.contains('bi-chevron-up')) {
            icon.classList.remove('bi-chevron-up');
            icon.classList.add('bi-chevron-down');
        }
    } else {
        // If not logged in, ensure the login section is open and can't be closed
        loginToggleBtn.setAttribute('disabled', 'disabled');

        // Add required indicator if it doesn't exist
        const loginHeader = loginToggleBtn.parentElement;
        if (!loginHeader.querySelector('.badge.bg-danger')) {
            const requiredBadge = document.createElement('span');
            requiredBadge.className = 'badge bg-danger ms-2';
            requiredBadge.innerHTML = '<i class="bi bi-exclamation-circle"></i> Required';
            loginHeader.appendChild(requiredBadge);
        }
    }

    // Form validation for client-side checking
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            if (!loginForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
                loginForm.classList.add('was-validated');
            }
        }, false);
    }

    // Payment Method Selection
    const paymentMethods = document.querySelectorAll('.payment-method');
    let paymentMethodSelected = false;

    // Set default payment method (QRIS)
    const defaultMethod = document.querySelector('.payment-method[data-method="qris"]');
    defaultMethod.classList.remove('btn-outline-secondary');
    defaultMethod.classList.add('active', 'btn-secondary');
    paymentMethodSelected = true;

    paymentMethods.forEach(method => {
        method.addEventListener('click', function() {
            // Get the payment method
            const methodName = this.getAttribute('data-method');

            // Update the hidden input value
            paymentMethodInput.value = methodName;

            // Remove active class from all payment methods
            paymentMethods.forEach(m => {
                m.classList.remove('active');
                const btnStyle = m.classList[1].split('-')[1];
                m.classList.remove('btn-primary', 'btn-success', 'btn-info', 'btn-secondary');
                m.classList.add('btn-outline-' + btnStyle);
            });

            // Add active class to clicked method
            this.classList.add('active');
            const btnStyle = this.classList[1].split('-')[1];
            this.classList.remove('btn-outline-' + btnStyle);

            // Add the appropriate button style
            if (btnStyle === 'primary') {
                this.classList.add('btn-primary');
            } else if (btnStyle === 'success') {
                this.classList.add('btn-success');
            } else if (btnStyle === 'info') {
                this.classList.add('btn-info');
            } else if (btnStyle === 'secondary') {
                this.classList.add('btn-secondary');
            }

            // Mark payment method as selected
            paymentMethodSelected = true;

            // Check if we can enable the payment button
            checkPaymentEligibility();
        });
    });

    // Function to check if we can enable the payment button
    function checkPaymentEligibility() {
        if (isLoggedIn && paymentMethodSelected) {
            proceedPaymentBtn.disabled = false;
        } else {
            proceedPaymentBtn.disabled = true;
        }
    }

    // Initial check
    checkPaymentEligibility();

    // Collapse Toggle for other sections
    const collapseToggles = document.querySelectorAll('.toggle-collapse:not([disabled])');
    collapseToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const icon = this.querySelector('.bi');
            icon.classList.toggle('bi-chevron-up');
            icon.classList.toggle('bi-chevron-down');
        });
    });

    // Check if there's a login error message or success message in the URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('login_error')) {
        const errorAlert = document.createElement('div');
        errorAlert.className = 'alert alert-danger';
        errorAlert.innerHTML = '<i class="bi bi-exclamation-triangle me-2"></i> ' + urlParams.get('login_error');
        if (loginForm) {
            loginForm.prepend(errorAlert);
        }
    } else if (urlParams.has('login_success')) {
        // Show success message and close login section
        const successAlert = document.createElement('div');
        successAlert.className = 'alert alert-success';
        successAlert.innerHTML = '<i class="bi bi-check-circle me-2"></i> ' + urlParams.get('login_success');
        document.querySelector('.container-fluid').insertAdjacentElement('afterbegin', successAlert);

        // Automatically close the login section
        if (loginSection && loginSection.classList.contains('show')) {
            const bsCollapse = new bootstrap.Collapse(loginSection, {
                toggle: false
            });
            bsCollapse.hide();
        }

        setTimeout(() => {
            successAlert.remove();
        }, 5000);
    }
});
    </script>
@endsection
