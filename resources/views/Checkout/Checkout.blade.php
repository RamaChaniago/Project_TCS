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
                <h3 class="font-weight-bold mb-0">Checkout Process</h3>
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
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#loginSection" aria-expanded="true" aria-controls="loginSection">
                                <i class="bi bi-chevron-down"></i>
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
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-box-arrow-in-right me-2"></i> Login
                                            </button>
                                            <a href="#" class="btn btn-link">Forgot Password?</a>
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
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#orderSection" aria-expanded="true" aria-controls="orderSection">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                        <div id="orderSection" class="collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover borderless">
                                        <thead>
                                            <tr>
                                                <th>Package</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TOEFL Preparation Package</td>
                                                <td>Complete TOEFL Preparation with 10 Live Sessions</td>
                                                <td>Rp 1,500,000</td>
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
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#paymentSection" aria-expanded="true" aria-controls="paymentSection">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                        <div id="paymentSection" class="collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Order Summary</h6>
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item d-flex justify-content-between px-0">
                                                <span>Subtotal</span>
                                                <strong>Rp 1,500,000</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between px-0">
                                                <span>Discount</span>
                                                <strong>- Rp 150,000</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between px-0">
                                                <span>Tax (10%)</span>
                                                <strong>Rp 135,000</strong>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between px-0 bg-light">
                                                <span class="text-primary">Total</span>
                                                <strong class="text-primary">Rp 1,485,000</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Payment Methods</h6>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-outline-primary rounded-pill">
                                                <i class="bi bi-bank me-2"></i> Bank Transfer
                                            </button>
                                            <button class="btn btn-outline-success rounded-pill">
                                                <i class="bi bi-credit-card me-2"></i> Credit Card
                                            </button>
                                            <button class="btn btn-outline-info rounded-pill">
                                                <i class="bi bi-wallet2 me-2"></i> E-Wallet
                                            </button>
                                            <button class="btn btn-outline-secondary rounded-pill">
                                                <i class="bi bi-qr-code me-2"></i> QRIS
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-end">
                                    <button class="btn btn-primary btn-lg">
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
    .card {
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.02);
    }
    .list-group-item {
        background-color: transparent;
        border-color: #e9ecef;
    }
    .btn-link {
        color: inherit;
        text-decoration: none;
    }
    .borderless {
        border: none;
    }
    .borderless th, .borderless td {
        border: none;
    }
</style>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Form Validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    // Optional: Dynamic interactions
    document.addEventListener('DOMContentLoaded', function() {
        // Example: Highlight selected payment method
        const paymentButtons = document.querySelectorAll('.btn-outline-primary, .btn-outline-success, .btn-outline-info, .btn-outline-secondary');
        paymentButtons.forEach(button => {
            button.addEventListener('click', function() {
                paymentButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Toggle chevron icon for collapsible sections
        const collapseButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');
        collapseButtons.forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('.bi');
                icon.classList.toggle('bi-chevron-down');
                icon.classList.toggle('bi-chevron-up');
            });
        });
    });
</script>
@endsection
