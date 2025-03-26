@extends('Main')

@section('title')
    Checkout
@endsection

@section('styles')
<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<!-- Custom Checkout Styles -->
<style>
    /* Add top padding to prevent navbar overlap */
    .checkout-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 6rem 1rem 2rem; /* Increased top padding */
    }

    .checkout-page-header {
        position: relative;
        z-index: 10;
        margin-bottom: 1.5rem;
    }

    .checkout-card {
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .order-summary {
        background-color: #f8f9fa;
        position: sticky;
        top: 7rem;
    }

    .payment-method {
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .payment-method:hover {
        transform: scale(1.02);
    }

    .payment-method.active {
        border: 2px solid #007bff;
        box-shadow: 0 0 10px rgba(0,123,255,0.3);
    }

    @media (max-width: 768px) {
        .checkout-container {
            padding: 5rem 0.5rem 1rem; /* Adjusted for smaller screens */
        }

        .order-summary {
            position: static;
            top: auto;
        }
    }
</style>
@endsection

@section('content')
<div class="container-fluid checkout-container">
    <!-- Checkout Header with additional spacing -->
    <div class="d-flex justify-content-between align-items-center mb-4 checkout-page-header">
        <h3 class="font-weight-bold mb-0">Course Checkout</h3>
        <span class="badge bg-info text-white">
            <i class="bi bi-cart-check me-1"></i> Secure Checkout
        </span>
    </div>

    <!-- Checkout Row -->
    <div class="row g-4">
        <!-- Checkout Details -->
        <div class="col-lg-8">
            <div class="card checkout-card border-0">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">Course Details</h5>
                </div>
                <div class="card-body">
                    <!-- Course Information -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <img src="/api/placeholder/300/200" alt="Course Thumbnail" class="img-fluid rounded">
                        </div>
                        <div class="col-md-8">
                            <h4>Advanced TOEFL Preparation Course</h4>
                            <p class="text-muted">Comprehensive TOEFL training with expert instructors</p>
                            <div class="d-flex justify-content-between">
                                <span>
                                    <i class="bi bi-clock me-2"></i> 8 Weeks
                                </span>
                                <span class="fw-bold text-primary">
                                    <i class="bi bi-tag me-2"></i> Rp 2,500,000
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Details Form -->
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="card checkout-card border-0 mt-4">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">Payment Methods</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="card payment-method text-center p-3 border">
                                <i class="bi bi-credit-card fs-2 mb-2 text-primary"></i>
                                <h6>Credit Card</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card payment-method text-center p-3 border">
                                <i class="bi bi-bank fs-2 mb-2 text-success"></i>
                                <h6>Bank Transfer</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card payment-method text-center p-3 border">
                                <i class="bi bi-wallet2 fs-2 mb-2 text-warning"></i>
                                <h6>Digital Wallet</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4">
            <div class="card checkout-card order-summary border-0">
                <div class="card-header bg-white p-4 border-0">
                    <h5 class="mb-0">Order Summary</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Course Price</span>
                        <span class="fw-bold">Rp 2,500,000</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Discount</span>
                        <span class="text-success">-Rp 250,000</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <h5>Total</h5>
                        <h5 class="text-primary">Rp 2,250,000</h5>
                    </div>
                    <button class="btn btn-primary w-100">
                        <i class="bi bi-lock me-2"></i> Complete Payment
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Bootstrap 5.3 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Payment Method Selection
        const paymentMethods = document.querySelectorAll('.payment-method');
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                paymentMethods.forEach(m => m.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>
@endsection