@extends('Main')

@section('title')
    Payment Process
@endsection

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Payment Progress Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="font-weight-bold mb-0">Payment Process</h2>
                <div class="d-flex gap-2">
                    <span class="badge bg-warning text-white">
                        <i class="bi bi-credit-card me-1"></i> Payment Pending
                    </span>
                </div>
            </div>

            <!-- Payment Section -->
            <div class="row g-4">
                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                        <div class="card-header bg-white p-4 border-0">
                            <h5 class="mb-0">
                                <i class="bi bi-receipt me-2 text-primary"></i>
                                Order Summary
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Order ID</span>
                                <span class="fw-bold">ORD-{{ date('Ymd') }}-{{ rand(1000, 9999) }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Date</span>
                                <span>{{ date('d M Y, H:i') }}</span>
                            </div>

                            <hr>

                            <h6 class="mb-3">Order Items</h6>
                            <div class="card bg-light border-0 mb-3">
                                <div class="card-body p-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="fw-bold">TOEFL Preparation Package</span>
                                        <span>Rp 1,500,000</span>
                                    </div>
                                    <small class="text-muted">Complete TOEFL Preparation with 10 Live Sessions</small>
                                </div>
                            </div>

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

                            <div class="mt-4">
                                <div class="alert alert-info d-flex align-items-center" role="alert">
                                    <i class="bi bi-info-circle-fill me-2"></i>
                                    <div>
                                        Payment must be completed within <strong>24 hours</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                        <div class="card-header bg-white p-4 border-0">
                            <h5 class="mb-0">
                                <i class="bi bi-credit-card me-2 text-success"></i>
                                Payment Method: <span id="selectedPaymentMethod">QRIS</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <!-- Payment Method Tabs -->
                            <ul class="nav nav-pills nav-fill mb-4" id="paymentTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bank-transfer-tab" data-bs-toggle="pill" data-bs-target="#bank-transfer" type="button" role="tab">
                                        <i class="bi bi-bank me-2"></i> Bank Transfer
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="credit-card-tab" data-bs-toggle="pill" data-bs-target="#credit-card" type="button" role="tab">
                                        <i class="bi bi-credit-card me-2"></i> Credit Card
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="e-wallet-tab" data-bs-toggle="pill" data-bs-target="#e-wallet" type="button" role="tab">
                                        <i class="bi bi-wallet2 me-2"></i> E-Wallet
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="qris-tab" data-bs-toggle="pill" data-bs-target="#qris" type="button" role="tab">
                                        <i class="bi bi-qr-code me-2"></i> QRIS
                                    </button>
                                </li>
                            </ul>

                            <!-- Payment Method Content -->
                            <div class="tab-content" id="paymentTabContent">
                                <!-- Bank Transfer Content -->
                                <div class="tab-pane fade" id="bank-transfer" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-3 border payment-option" data-bank="bca">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bank-logo me-3">
                                                            <i class="bi bi-bank fs-2 text-primary"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Bank BCA</h6>
                                                            <small class="text-muted">Transfer to Virtual Account</small>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="bankOption" id="bcaOption" value="bca">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-3 border payment-option" data-bank="mandiri">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bank-logo me-3">
                                                            <i class="bi bi-bank fs-2 text-warning"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Bank Mandiri</h6>
                                                            <small class="text-muted">Transfer to Virtual Account</small>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="bankOption" id="mandiriOption" value="mandiri">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-3 border payment-option" data-bank="bni">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="bank-logo me-3">
                                                            <i class="bi bi-bank fs-2 text-info"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">Bank BNI</h6>
                                                            <small class="text-muted">Transfer to Virtual Account</small>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="bankOption" id="bniOption" value="bni">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 border-start bank-details">
                                            <div class="p-3">
                                                <h6>Virtual Account Details</h6>
                                                <p class="text-muted small">Please select a bank to see the virtual account details</p>

                                                <div class="bank-instruction d-none" id="bca-details">
                                                    <div class="alert alert-light border">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <span>Account Number:</span>
                                                            <span class="fw-bold">8277 1234 5678 90</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Account Name:</span>
                                                            <span>COURSE-PLATFORM</span>
                                                        </div>
                                                        <button class="btn btn-sm btn-outline-primary mt-2 w-100 copy-btn" data-copy="8277 1234 5678 90">
                                                            <i class="bi bi-clipboard me-1"></i> Copy Account Number
                                                        </button>
                                                    </div>

                                                    <h6 class="mt-3">Payment Instructions:</h6>
                                                    <ol class="small">
                                                        <li>Log in to your BCA Mobile or Internet Banking</li>
                                                        <li>Select "Transfer" and choose "Virtual Account"</li>
                                                        <li>Enter the virtual account number</li>
                                                        <li>Confirm your payment details</li>
                                                        <li>Enter your PIN or password to complete the transaction</li>
                                                    </ol>
                                                </div>

                                                <div class="bank-instruction d-none" id="mandiri-details">
                                                    <!-- Similar structure as BCA but with Mandiri details -->
                                                    <div class="alert alert-light border">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <span>Account Number:</span>
                                                            <span class="fw-bold">8900 1234 5678 90</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Account Name:</span>
                                                            <span>COURSE-PLATFORM</span>
                                                        </div>
                                                        <button class="btn btn-sm btn-outline-primary mt-2 w-100 copy-btn" data-copy="8900 1234 5678 90">
                                                            <i class="bi bi-clipboard me-1"></i> Copy Account Number
                                                        </button>
                                                    </div>

                                                    <h6 class="mt-3">Payment Instructions:</h6>
                                                    <ol class="small">
                                                        <li>Log in to your Mandiri Mobile or Internet Banking</li>
                                                        <li>Select "Payment" and choose "Virtual Account"</li>
                                                        <li>Enter the virtual account number</li>
                                                        <li>Confirm your payment details</li>
                                                        <li>Enter your PIN or password to complete the transaction</li>
                                                    </ol>
                                                </div>

                                                <div class="bank-instruction d-none" id="bni-details">
                                                    <!-- Similar structure as BCA but with BNI details -->
                                                    <div class="alert alert-light border">
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <span>Account Number:</span>
                                                            <span class="fw-bold">8122 1234 5678 90</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span>Account Name:</span>
                                                            <span>COURSE-PLATFORM</span>
                                                        </div>
                                                        <button class="btn btn-sm btn-outline-primary mt-2 w-100 copy-btn" data-copy="8122 1234 5678 90">
                                                            <i class="bi bi-clipboard me-1"></i> Copy Account Number
                                                        </button>
                                                    </div>

                                                    <h6 class="mt-3">Payment Instructions:</h6>
                                                    <ol class="small">
                                                        <li>Log in to your BNI Mobile or Internet Banking</li>
                                                        <li>Select "Transfer" and choose "Virtual Account"</li>
                                                        <li>Enter the virtual account number</li>
                                                        <li>Confirm your payment details</li>
                                                        <li>Enter your PIN or password to complete the transaction</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Credit Card Content -->
                                <div class="tab-pane fade" id="credit-card" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <form id="creditCardForm" class="needs-validation" novalidate>
                                                <div class="mb-3">
                                                    <label for="cardNumber" class="form-label">Card Number</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                                                        <span class="input-group-text">
                                                            <i class="bi bi-credit-card"></i>
                                                        </span>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please enter a valid card number
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="cardExpiry" class="form-label">Expiry Date</label>
                                                        <input type="text" class="form-control" id="cardExpiry" placeholder="MM/YY" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a valid expiry date
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="cardCvv" class="form-label">CVV</label>
                                                        <input type="text" class="form-control" id="cardCvv" placeholder="123" required>
                                                        <div class="invalid-feedback">
                                                            Please enter a valid CVV
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="cardName" class="form-label">Cardholder Name</label>
                                                    <input type="text" class="form-control" id="cardName" placeholder="John Doe" required>
                                                    <div class="invalid-feedback">
                                                        Please enter the cardholder name
                                                    </div>
                                                </div>

                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-primary">
                                                        Pay Rp 1,485,000
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-5 border-start">
                                            <div class="p-3">
                                                <h6 class="mb-3">Supported Cards</h6>
                                                <div class="d-flex gap-2 mb-4">
                                                    <div class="card-icon">
                                                        <i class="bi bi-credit-card fs-1 text-primary"></i>
                                                    </div>
                                                    <div class="card-icon">
                                                        <i class="bi bi-credit-card-2-front fs-1 text-danger"></i>
                                                    </div>
                                                    <div class="card-icon">
                                                        <i class="bi bi-credit-card-2-back fs-1 text-success"></i>
                                                    </div>
                                                </div>

                                                <div class="alert alert-info">
                                                    <i class="bi bi-shield-check me-2"></i>
                                                    Your payment information is secure and encrypted
                                                </div>

                                                <div class="text-muted small">
                                                    <p>By proceeding with your payment, you agree to our terms and conditions. Your card will be charged Rp 1,485,000 immediately upon confirmation.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- E-Wallet Content -->
                                <div class="tab-pane fade" id="e-wallet" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-3 border payment-option" data-wallet="gopay">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="wallet-logo me-3">
                                                            <i class="bi bi-wallet2 fs-2 text-primary"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">GoPay</h6>
                                                            <small class="text-muted">Pay with GoPay</small>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="walletOption" id="gopayOption" value="gopay">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-3 border payment-option" data-wallet="ovo">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="wallet-logo me-3">
                                                            <i class="bi bi-wallet2 fs-2 text-danger"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">OVO</h6>
                                                            <small class="text-muted">Pay with OVO</small>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="walletOption" id="ovoOption" value="ovo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card mb-3 border payment-option" data-wallet="dana">
                                                <div class="card-body p-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="wallet-logo me-3">
                                                            <i class="bi bi-wallet2 fs-2 text-info"></i>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0">DANA</h6>
                                                            <small class="text-muted">Pay with DANA</small>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="walletOption" id="danaOption" value="dana">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 border-start wallet-details">
                                            <div class="p-3">
                                                <h6>E-Wallet Payment</h6>
                                                <p class="text-muted small">Please select an e-wallet to continue</p>

                                                <div class="wallet-instruction d-none" id="gopay-details">
                                                    <div class="text-center mb-3">
                                                        <img src="/api/placeholder/200/200" alt="GoPay QR Code" class="img-fluid border">
                                                    </div>
                                                    <div class="alert alert-light border">
                                                        <p class="mb-0 text-center">Scan this QR code with your GoPay app</p>
                                                    </div>

                                                    <h6 class="mt-3">Payment Instructions:</h6>
                                                    <ol class="small">
                                                        <li>Open your GoPay app</li>
                                                        <li>Tap on "Scan" or "Pay"</li>
                                                        <li>Scan the QR code above</li>
                                                        <li>Confirm the payment details</li>
                                                        <li>Complete the payment within the app</li>
                                                    </ol>
                                                </div>

                                                <div class="wallet-instruction d-none" id="ovo-details">
                                                    <!-- Similar structure as GoPay but for OVO -->
                                                    <div class="text-center mb-3">
                                                        <img src="/api/placeholder/200/200" alt="OVO QR Code" class="img-fluid border">
                                                    </div>
                                                    <div class="alert alert-light border">
                                                        <p class="mb-0 text-center">Scan this QR code with your OVO app</p>
                                                    </div>

                                                    <h6 class="mt-3">Payment Instructions:</h6>
                                                    <ol class="small">
                                                        <li>Open your OVO app</li>
                                                        <li>Tap on "Scan QR"</li>
                                                        <li>Scan the QR code above</li>
                                                        <li>Confirm the payment details</li>
                                                        <li>Enter your PIN to complete payment</li>
                                                    </ol>
                                                </div>

                                                <div class="wallet-instruction d-none" id="dana-details">
                                                    <!-- Similar structure as GoPay but for DANA -->
                                                    <div class="text-center mb-3">
                                                        <img src="/api/placeholder/200/200" alt="DANA QR Code" class="img-fluid border">
                                                    </div>
                                                    <div class="alert alert-light border">
                                                        <p class="mb-0 text-center">Scan this QR code with your DANA app</p>
                                                    </div>

                                                    <h6 class="mt-3">Payment Instructions:</h6>
                                                    <ol class="small">
                                                        <li>Open your DANA app</li>
                                                        <li>Tap on "Scan"</li>
                                                        <li>Scan the QR code above</li>
                                                        <li>Confirm the payment details</li>
                                                        <li>Complete the payment</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- QRIS Content -->
                                <div class="tab-pane fade show active" id="qris" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 text-center">
                                            <div class="p-4">
                                                <div class="mb-3">
                                                    <span class="badge bg-success mb-2">Recommended</span>
                                                    <h5>QRIS Payment</h5>
                                                    <p class="text-muted">Pay using any mobile banking or e-wallet app that supports QRIS</p>
                                                </div>

                                                <div class="qr-container border p-3 bg-white">
                                                    <img src="/api/placeholder/250/250" alt="QRIS Code" class="img-fluid qr-code">
                                                </div>

                                                <div class="mt-3">
                                                    <button class="btn btn-outline-primary btn-sm" id="downloadQr">
                                                        <i class="bi bi-download me-1"></i> Download QR Code
                                                    </button>
                                                    <button class="btn btn-outline-secondary btn-sm" id="refreshQr">
                                                        <i class="bi bi-arrow-clockwise me-1"></i> Refresh
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 border-start">
                                            <div class="p-3">
                                                <h6 class="mb-3">Supported Payment Methods</h6>
                                                <div class="row g-2 mb-4">
                                                    <div class="col-3 text-center">
                                                        <div class="payment-logo p-2 border rounded">
                                                            <i class="bi bi-wallet2 fs-3 text-primary"></i>
                                                            <div class="small mt-1">GoPay</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <div class="payment-logo p-2 border rounded">
                                                            <i class="bi bi-wallet2 fs-3 text-danger"></i>
                                                            <div class="small mt-1">OVO</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <div class="payment-logo p-2 border rounded">
                                                            <i class="bi bi-wallet2 fs-3 text-info"></i>
                                                            <div class="small mt-1">DANA</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <div class="payment-logo p-2 border rounded">
                                                            <i class="bi bi-bank fs-3 text-success"></i>
                                                            <div class="small mt-1">BCA</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h6 class="mt-4 mb-3">Payment Instructions:</h6>
                                                <ol class="small">
                                                    <li>Open your mobile banking or e-wallet app</li>
                                                    <li>Find and tap on "Scan QR" or "QRIS" option</li>
                                                    <li>Scan the QR code displayed</li>
                                                    <li>Confirm the payment amount is Rp 1,485,000</li>
                                                    <li>Complete the payment within your app</li>
                                                </ol>

                                                <div class="alert alert-warning mt-3">
                                                    <div class="d-flex">
                                                        <div class="me-2">
                                                            <i class="bi bi-clock fs-4"></i>
                                                        </div>
                                                        <div>
                                                            <strong>QR Code Expires In:</strong>
                                                            <div id="qrCountdown" class="fw-bold">14:59</div>
                                                            <small>Please complete your payment before the QR code expires</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Actions -->
                            <div class="mt-4 d-flex justify-content-between">
                                < href="{{ route('checkout') }}" class="btn btn-outline-secondary">
                                    <i class="bi bi-arrow-left me-1"></i> Back to Checkout
                                    <a href="#" class="btn btn-success" id="confirmPayment">
                                        I've Completed Payment <i class="bi bi-check-circle ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Status -->
                        <div class="card shadow-lg border-0 rounded-lg mt-4" data-aos="fade-up">
                            <div class="card-header bg-white p-4 border-0">
                                <h5 class="mb-0">
                                    <i class="bi bi-info-circle me-2 text-info"></i>
                                    Payment Status
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="status-timeline">
                                    <div class="d-flex">
                                        <div class="status-line">
                                            <div class="status-dot completed">
                                                <i class="bi bi-check-circle-fill"></i>
                                            </div>
                                        </div>
                                        <div class="status-content ms-3 mb-4">
                                            <h6 class="mb-1">Order Created</h6>
                                            <p class="text-muted small mb-0">{{ date('d M Y, H:i') }}</p>
                                            <span class="badge bg-success">Completed</span>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="status-line">
                                            <div class="status-dot active pulsing">
                                                <i class="bi bi-clock-fill"></i>
                                            </div>
                                        </div>
                                        <div class="status-content ms-3 mb-4">
                                            <h6 class="mb-1">Waiting for Payment</h6>
                                            <p class="text-muted small mb-0">Payment pending confirmation</p>
                                            <span class="badge bg-warning text-dark">In Progress</span>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="status-line">
                                            <div class="status-dot">
                                                <i class="bi bi-hourglass"></i>
                                            </div>
                                        </div>
                                        <div class="status-content ms-3 mb-4">
                                            <h6 class="mb-1">Payment Verification</h6>
                                            <p class="text-muted small mb-0">Verifying your payment</p>
                                            <span class="badge bg-secondary">Pending</span>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="status-line">
                                            <div class="status-dot">
                                                <i class="bi bi-check-lg"></i>
                                            </div>
                                        </div>
                                        <div class="status-content ms-3">
                                            <h6 class="mb-1">Order Confirmed</h6>
                                            <p class="text-muted small mb-0">Course access will be granted</p>
                                            <span class="badge bg-secondary">Pending</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <p class="text-muted small">Having issues with your payment? Contact our support</p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-headset me-1"></i> Contact Support
                                    </a>
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
        /* Custom payment page styles */
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

        /* Payment method options */
        .payment-option {
            transition: all 0.2s ease;
            cursor: pointer;
        }
        .payment-option:hover {
            border-color: #007bff !important;
            background-color: #f8f9ff;
        }
        .payment-option.active {
            border-color: #007bff !important;
            background-color: #f0f7ff;
        }

        /* QR Code styles */
        .qr-container {
            display: inline-block;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }
        .qr-code {
            max-width: 100%;
            height: auto;
        }

        /* Status timeline styles */
        .status-line {
            position: relative;
            width: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .status-line:before {
            content: '';
            position: absolute;
            top: 30px;
            bottom: 0;
            left: 50%;
            width: 2px;
            background-color: #e9ecef;
            transform: translateX(-50%);
            z-index: 0;
        }
        .status-line:last-child:before {
            display: none;
        }
        .status-dot {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #f8f9fa;
            border: 2px solid #dee2e6;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }
        .status-dot.completed {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
        .status-dot.active {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }
        .status-dot.error {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }
        .pulsing {
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 193, 7, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 193, 7, 0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 767.98px) {
            .border-start {
                border-left: none !important;
                border-top: 1px solid #dee2e6;
                margin-top: 1.5rem;
                padding-top: 1.5rem;
            }
        }
    </style>
    @endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update selected payment method in header
            const paymentTabs = document.querySelectorAll('[data-bs-toggle="pill"]');
            const selectedPaymentMethodEl = document.getElementById('selectedPaymentMethod');

            paymentTabs.forEach(tab => {
                tab.addEventListener('shown.bs.tab', function(event) {
                    const targetId = event.target.getAttribute('id');
                    const paymentMethod = targetId.replace('-tab', '');
                    selectedPaymentMethodEl.textContent = paymentMethod.replace('-', ' ').replace(/\b\w/g, l => l.toUpperCase());
                });
            });

            // Bank transfer options
            const bankOptions = document.querySelectorAll('[data-bank]');
            const bankDetails = document.querySelectorAll('.bank-instruction');

            bankOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const bank = this.getAttribute('data-bank');
                    const radioInput = this.querySelector('input[type="radio"]');

                    // Update active state
                    bankOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');

                    // Check radio button
                    radioInput.checked = true;

                    // Show corresponding bank details
                    bankDetails.forEach(detail => detail.classList.add('d-none'));
                    document.getElementById(`${bank}-details`).classList.remove('d-none');
                });
            });

            // E-wallet options
            const walletOptions = document.querySelectorAll('[data-wallet]');
            const walletDetails = document.querySelectorAll('.wallet-instruction');

            walletOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const wallet = this.getAttribute('data-wallet');
                    const radioInput = this.querySelector('input[type="radio"]');

                    // Update active state
                    walletOptions.forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');

                    // Check radio button
                    radioInput.checked = true;

                    // Show corresponding wallet details
                    walletDetails.forEach(detail => detail.classList.add('d-none'));
                    document.getElementById(`${wallet}-details`).classList.remove('d-none');
                });
            });

            // Credit card form validation
            const creditCardForm = document.getElementById('creditCardForm');
            if (creditCardForm) {
                creditCardForm.addEventListener('submit', function(event) {
                    if (!creditCardForm.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    creditCardForm.classList.add('was-validated');
                }, false);
            }

            // Copy account number to clipboard
            const copyButtons = document.querySelectorAll('.copy-btn');
            copyButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const textToCopy = this.getAttribute('data-copy');
                    navigator.clipboard.writeText(textToCopy).then(() => {
                        // Change button text temporarily
                        const originalText = this.innerHTML;
                        this.innerHTML = '<i class="bi bi-check me-1"></i> Copied!';
                        this.classList.remove('btn-outline-primary');
                        this.classList.add('btn-success');

                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.classList.remove('btn-success');
                            this.classList.add('btn-outline-primary');
                        }, 2000);
                    });
                });
            });

            // QR Code countdown timer
            const qrCountdown = document.getElementById('qrCountdown');
            if (qrCountdown) {
                let minutes = 14;
                let seconds = 59;

                const updateCountdown = () => {
                    qrCountdown.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                    if (minutes === 0 && seconds === 0) {
                        clearInterval(countdownInterval);
                        qrCountdown.parentElement.innerHTML = '<div class="text-danger fw-bold">Expired</div><button class="btn btn-sm btn-danger mt-2">Generate New QR</button>';
                        return;
                    }

                    if (seconds === 0) {
                        minutes--;
                        seconds = 59;
                    } else {
                        seconds--;
                    }
                };

                const countdownInterval = setInterval(updateCountdown, 1000);
            }

            // Refresh QR Code button
            const refreshQrBtn = document.getElementById('refreshQr');
            if (refreshQrBtn) {
                refreshQrBtn.addEventListener('click', function() {
                    const qrCode = document.querySelector('.qr-code');

                    // Add loading indicator
                    qrCode.style.opacity = '0.5';

                    // Simulate refreshing (would be an actual API call in production)
                    setTimeout(() => {
                        qrCode.style.opacity = '1';

                        // Reset countdown if implemented
                        if (qrCountdown) {
                            minutes = 14;
                            seconds = 59;
                        }

                        // Show success message
                        const alertDiv = document.createElement('div');
                        alertDiv.className = 'alert alert-success alert-dismissible fade show mt-3';
                        alertDiv.innerHTML = `
                            <i class="bi bi-check-circle me-2"></i>
                            QR Code refreshed successfully
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        `;

                        const qrContainer = document.querySelector('.qr-container').parentElement;
                        qrContainer.appendChild(alertDiv);

                        // Auto remove after 3 seconds
                        setTimeout(() => alertDiv.remove(), 3000);
                    }, 800);
                });
            }

            // Download QR Code button
            const downloadQrBtn = document.getElementById('downloadQr');
            if (downloadQrBtn) {
                downloadQrBtn.addEventListener('click', function() {
                    // In a real implementation, this would trigger actual download
                    alert('QR Code download started');
                });
            }

            // Confirm payment button
            const confirmPaymentBtn = document.getElementById('confirmPayment');
            if (confirmPaymentBtn) {
                confirmPaymentBtn.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Show confirmation modal
                    const modalHTML = `
                        <div class="modal fade" id="paymentConfirmationModal" tabindex="-1" aria-labelledby="paymentConfirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="paymentConfirmationModalLabel">Confirm Payment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Have you completed the payment of <strong>Rp 1,485,000</strong>?</p>
                                        <p>Our system will verify your payment. This may take a few moments.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Not yet</button>
                                        <button type="button" class="btn btn-success" id="verifyPaymentBtn">
                                            Yes, I've completed payment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    // Add modal to DOM and show it
                    document.body.insertAdjacentHTML('beforeend', modalHTML);
                    const modal = new bootstrap.Modal(document.getElementById('paymentConfirmationModal'));
                    modal.show();

                    // Verify payment button logic
                    document.getElementById('verifyPaymentBtn').addEventListener('click', function() {
                        // Close modal
                        modal.hide();

                        // Show loading state
                        confirmPaymentBtn.disabled = true;
                        confirmPaymentBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Verifying payment...';

                        // Simulate verification process
                        setTimeout(() => {
                            // Update status timeline
                            const statusDots = document.querySelectorAll('.status-dot');
                            const statusBadges = document.querySelectorAll('.status-content .badge');

                            // Update second status (payment)
                            statusDots[1].classList.remove('active', 'pulsing');
                            statusDots[1].classList.add('completed');
                            statusDots[1].innerHTML = '<i class="bi bi-check-circle-fill"></i>';
                            statusBadges[1].classList.remove('bg-warning', 'text-dark');
                            statusBadges[1].classList.add('bg-success');
                            statusBadges[1].textContent = 'Completed';

                            // Update third status (verification)
                            statusDots[2].classList.add('active', 'pulsing');
                            statusDots[2].innerHTML = '<i class="bi bi-clock-fill"></i>';
                            statusBadges[2].classList.remove('bg-secondary');
                            statusBadges[2].classList.add('bg-warning', 'text-dark');
                            statusBadges[2].textContent = 'In Progress';

                            // Update header badge
                            const headerBadge = document.querySelector('.badge.bg-warning.text-white');
                            headerBadge.innerHTML = '<i class="bi bi-hourglass-split me-1"></i> Verifying Payment';

                            // Update button
                            confirmPaymentBtn.innerHTML = 'Payment Verification In Progress <i class="bi bi-check-circle ms-1"></i>';
                            confirmPaymentBtn.classList.remove('btn-success');
                            confirmPaymentBtn.classList.add('btn-info');

                            // Simulate verification complete (in a real app, this would be triggered by a webhook or polling)
                            setTimeout(() => {
                                // Redirect to success page (in a real application)
                                window.location.href = '{{ route("payment.success") }}';
                            }, 5000);
                        }, 2000);
                    });
                });
            }
        });
    </script>
    @endsection
