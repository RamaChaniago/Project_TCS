```php
@extends('Admin.MainDashboardAdmin')

@section('title')
Transaction Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Transaction Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Payment Method Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Payment Method Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPaymentMethodModal">
                <i class="bi bi-plus-circle me-2"></i>Add Payment Method
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Payment Methods</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalPaymentMethods }}</h4> --}}
                                </div>
                                <i class="bi bi-credit-card text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Methods</h6>
                                    {{-- <h4 class="fw-bold">{{ $activePaymentMethods }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Most Used Method</h6>
                                    {{-- <h4 class="fw-bold">{{ $mostUsedPaymentMethod }}</h4> --}}
                                </div>
                                <i class="bi bi-star text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Methods (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newPaymentMethods }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Method Name</th>
                            <th>Provider</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($paymentMethods as $method)
                        <tr>
                            <td>{{ $method->id }}</td>
                            <td>{{ $method->name }}</td>
                            <td>{{ $method->provider }}</td>
                            <td>{{ $method->type }}</td>
                            <td>
                                <span class="badge {{ $method->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $method->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewPaymentMethodModal{{ $method->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPaymentMethodModal{{ $method->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePaymentMethodModal{{ $method->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Transaction Summary Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Transaction Summary</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-primary" id="exportTransactionsBtn">
                    <i class="bi bi-file-earmark-excel me-2"></i>Export
                </button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                    <i class="bi bi-plus-circle me-2"></i>Add Transaction
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Transactions</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalTransactions }}</h4> --}}
                                </div>
                                <i class="bi bi-receipt text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Revenue</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalRevenue }}</h4> --}}
                                </div>
                                <i class="bi bi-cash-stack text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Pending Transactions</h6>
                                    {{-- <h4 class="fw-bold">{{ $pendingTransactions }}</h4> --}}
                                </div>
                                <i class="bi bi-clock text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Monthly Volume</h6>
                                    {{-- <h4 class="fw-bold">{{ $monthlyTransactionVolume }}</h4> --}}
                                </div>
                                <i class="bi bi-graph-up text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->user->name }}</td>
                            <td>{{ $transaction->amount }}</td>
                            <td>{{ $transaction->paymentMethod->name }}</td>
                            <td>{{ $transaction->created_at->format('d M Y') }}</td>
                            <td>
                                <span class="badge {{ $transaction->status_color }}">
                                    {{ $transaction->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewTransactionModal{{ $transaction->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editTransactionModal{{ $transaction->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTransactionModal{{ $transaction->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Transaction Management -->
{{-- Modals for:
     - Add/Edit/View/Delete Payment Method
     - Add/Edit/View/Delete Transaction
--}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Transaction and Payment Method CRUD operations
        function handleCRUDOperation(endpoint, method, data) {
            fetch(endpoint, {
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Operation Successful',
                        text: data.message
                    });
                    // Refresh table or page
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Operation Failed',
                        text: data.message
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An unexpected error occurred'
                });
            });
        }

        // Export transactions functionality
        document.getElementById('exportTransactionsBtn')?.addEventListener('click', function() {
            // Implement export logic
            console.log('Exporting transactions');
        });

        // Add event listeners for other CRUD operations
    });
</script>
@endsection
```