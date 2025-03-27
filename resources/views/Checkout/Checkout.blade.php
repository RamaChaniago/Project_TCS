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
                        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <i class="bi bi-person-check me-2 text-primary"></i>
                                1. Login or Register
                            </h5>
                            <button class="btn btn-link toggle-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#loginSection" aria-expanded="true" aria-controls="loginSection">
                                <i class="bi bi-chevron-up"></i>
                            </button>
                        </div>
                        <div id="loginSection" class="collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Login Form -->
                                        <form id="loginForm" class="needs-validation" novalidate>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" required>
                                                <div class="invalid-feedback">
                                                    Please enter a valid email address
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password" required>
                                                <div class="invalid-feedback">
                                                    Password is required
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="bi bi-box-arrow-in-right me-2"></i> Login
                                                </button>
                                                <a href="#" class="text-decoration-none">Forgot Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Register Section -->
                                        <div class="border-start ps-3">
                                            <h6 class="text-muted">New to Our Platform?</h6>
                                            <p>Create an account to access exclusive courses and features.</p>
                                            <a href="#" class="btn btn-outline-primary">
                                                <i class="bi bi-person-plus me-2"></i> Create Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Your Order -->
                <div class="col-12">
                    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <i class="bi bi-basket me-2 text-success"></i>
                                2. Your Order
                            </h5>
                            <button class="btn btn-link toggle-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#orderSection" aria-expanded="true" aria-controls="orderSection">
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
                                                <td class="border-0">Complete TOEFL Preparation with 10 Live Sessions</td>
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
                        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <i class="bi bi-credit-card me-2 text-warning"></i>
                                3. Order Summary & Payment
                            </h5>
                            <button class="btn btn-link toggle-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#paymentSection" aria-expanded="true" aria-controls="paymentSection">
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
                                                    <li class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0">
                                                        <span>Subtotal</span>
                                                        <strong>Rp 1,500,000</strong>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0">
                                                        <span>Discount</span>
                                                        <strong class="text-danger">- Rp 150,000</strong>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0">
                                                        <span>Tax (10%)</span>
                                                        <strong>Rp 135,000</strong>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between px-0 bg-transparent border-0 fw-bold">
                                                        <span class="text-primary">Total</span>
                                                        <strong class="text-primary">Rp 1,485,000</strong>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="mb-3">Payment Methods</h6>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-outline-primary rounded-pill payment-method" data-method="bank-transfer">
                                                <i class="bi bi-bank me-2"></i> Bank Transfer
                                            </button>
                                            <button class="btn btn-outline-success rounded-pill payment-method" data-method="credit-card">
                                                <i class="bi bi-credit-card me-2"></i> Credit Card
                                            </button>
                                            <button class="btn btn-outline-info rounded-pill payment-method" data-method="e-wallet">
                                                <i class="bi bi-wallet2 me-2"></i> E-Wallet
                                            </button>
                                            <button class="btn btn-outline-secondary rounded-pill payment-method" data-method="qris">
                                                <i class="bi bi-qr-code me-2"></i> QRIS
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-end">
                                    <button class="btn btn-primary btn-lg" id="proceedPayment" disabled>
                                        Proceed to Payment
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
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
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
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
        // Form Validation
        const loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', function(event) {
            if (!loginForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            loginForm.classList.add('was-validated');
        }, false);

        // Payment Method Selection
        const paymentMethods = document.querySelectorAll('.payment-method');
        const proceedPaymentBtn = document.getElementById('proceedPayment');

        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                // Remove active class from all payment methods
                paymentMethods.forEach(m => {
                    m.classList.remove('active');
                    m.classList.remove('btn-primary');
                    m.classList.add('btn-outline-' + m.classList[1].split('-')[1]);
                });
                
                // Add active class to clicked method
                this.classList.add('active');
                this.classList.remove('btn-outline-' + this.classList[1].split('-')[1]);
                this.classList.add('btn-primary');
                
                // Enable proceed to payment button
                proceedPaymentBtn.disabled = false;
            });
        });

        // Collapse Toggle
        const collapseToggles = document.querySelectorAll('.toggle-collapse');
        collapseToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const icon = this.querySelector('.bi');
                const targetId = this.getAttribute('data-bs-target');
                const targetSection = document.querySelector(targetId);
                
                // Toggle chevron icon
                icon.classList.toggle('bi-chevron-up');
                icon.classList.toggle('bi-chevron-down');
            });
        });
    });
</script>
@endsection