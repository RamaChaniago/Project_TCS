@extends('Member.MainDashboardMember')

@section('title')
Transaction
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Transaction List Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Transaction List</h3>
    </div>

    <!-- Purchase History Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Riwayat Pembelian</h5>
        </div>
        <div class="card-body p-0">
            <!-- Individual Transaction Item -->
            <div class="border-bottom p-4">
                <!-- First Row: Purchase Date and Invoice Number -->
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Pembelian: 24 Maret 2025
                    </div>
                    <div>
                        <span class="badge bg-light text-dark">
                            <i class="bi bi-receipt me-1"></i> Invoice: INV/20250324/001
                        </span>
                    </div>
                </div>

                <!-- Second Row: Product Details -->
                <div class="d-flex flex-wrap">
                    <!-- Left: Product Image -->
                    <div class="me-3 mb-2">
                        <img src="images/course-thumbnail.jpg" alt="Course Thumbnail"
                             class="rounded" width="100" height="80"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>

                    <!-- Middle: Course Information -->
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">TOEFL Preparation Advanced Course</h6>
                        <div class="text-muted small mb-1">Learning Package</div>
                        <div class="badge bg-info text-white">1 Program</div>
                    </div>

                    <!-- Right: Price Information and Button -->
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div class="text-end">
                            <div class="text-muted small">Total Produk</div>
                            <div class="fw-bold text-primary mb-2">Rp 1.500.000</div>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">
                            <i class="bi bi-eye me-1"></i> Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- You can add more transaction items here following the same structure -->

            <!-- Empty State (when no transactions) -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-transaction.svg" alt="No Transactions" class="mb-3" width="120">
                <h5>Belum Ada Transaksi</h5>
                <p class="text-muted">Anda belum melakukan transaksi apapun.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Jelajahi Kursus</a>
            </div>
        </div>
    </div>

    <!-- Pagination - will only show if there are more than 5 items -->
    @if(isset($transactions) && count($transactions) > 5)
    <nav aria-label="Transaction pagination" class="mt-4">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    @endif
</div>
@endsection