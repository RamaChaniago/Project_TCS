@extends('Member.MainDashboardMember')

@section('title')
My Smart Books
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Smart Books Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">My Smart Books</h3>
        <div>
            <a href="#" class="btn btn-outline-primary rounded-pill">
                <i class="bi bi-search me-1"></i> Browse Books
            </a>
        </div>
    </div>

    <!-- My Purchased Books Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">My Purchased Books</h5>
        </div>
        <div class="card-body p-0">
            <!-- If books exist -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Purchased: 15 Maret 2025
                    </div>
                    <div>
                        <span class="badge bg-success text-white">
                            <i class="bi bi-check-circle me-1"></i> Active
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 mb-2">
                        <img src="images/science-book.jpg" alt="Science Book"
                             class="rounded" width="100" height="150"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">Advanced Physics Principles</h6>
                        <div class="text-muted small mb-1">Author: Dr. John Smith</div>
                        <div class="text-muted small mb-2">Edition: 2nd, Published: 2024</div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;"
                                 aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-muted small mt-1">Reading progress: 65%</div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <a href="#" class="btn btn-primary rounded-pill mb-2">
                            <i class="bi bi-book-half me-1"></i> Continue Reading
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-info-circle me-1"></i> Book Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Another Book -->
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="text-muted">
                        <i class="bi bi-calendar3 me-1"></i> Purchased: 22 Februari 2025
                    </div>
                    <div>
                        <span class="badge bg-warning text-white">
                            <i class="bi bi-clock me-1"></i> In Progress
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="me-3 mb-2">
                        <img src="images/programming-book.jpg" alt="Programming Book"
                             class="rounded" width="100" height="150"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <h6 class="mb-1">Modern Web Development</h6>
                        <div class="text-muted small mb-1">Author: Emily Rodriguez</div>
                        <div class="text-muted small mb-2">Edition: 1st, Published: 2024</div>
                        <div class="progress" style="height: 6px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;"
                                 aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="text-muted small mt-1">Reading progress: 35%</div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <a href="#" class="btn btn-warning rounded-pill mb-2">
                            <i class="bi bi-book-half me-1"></i> Continue Reading
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-secondary rounded-pill">
                            <i class="bi bi-info-circle me-1"></i> Book Details
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State (Hidden by default) -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-books.svg" alt="No Purchased Books" class="mb-3" width="120">
                <h5>No Books Purchased Yet</h5>
                <p class="text-muted">You haven't purchased any books in your library.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Explore Books</a>
            </div>
        </div>
    </div>

    <!-- Available Books Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0">
            <h5 class="mb-0">Recommended Books</h5>
        </div>
        <div class="card-body p-0">
            <div class="border-bottom p-4">
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <h5 class="fw-bold mb-0">Artificial Intelligence: A Modern Approach</h5>
                    </div>
                    <div>
                        <span class="badge bg-info text-white">
                            <i class="bi bi-star-fill me-1"></i> Bestseller
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="me-3 mb-2">
                        <img src="images/ai-book.jpg" alt="AI Book"
                             class="rounded" width="120" height="180"
                             style="object-fit: cover; background-color: #f0f0f0;">
                    </div>
                    <div class="flex-grow-1 mb-2">
                        <div class="text-muted mb-2">Comprehensive guide to understanding modern artificial intelligence concepts and applications.</div>
                        <div class="d-flex flex-wrap gap-2 mb-2">
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-book me-1"></i> 500 Pages
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-person me-1"></i> Stuart Russell, Peter Norvig
                            </div>
                            <div class="badge bg-light text-dark">
                                <i class="bi bi-calendar me-1"></i> 4th Edition, 2024
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div class="text-end">
                            <div class="text-decoration-line-through text-muted small">Rp 750.000</div>
                            <div class="fw-bold text-primary mb-2">Rp 650.000</div>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill">
                            <i class="bi bi-cart-plus me-1"></i> Purchase
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empty State (Hidden by default) -->
            <div class="text-center p-5 d-none">
                <img src="images/empty-recommended.svg" alt="No Recommended Books" class="mb-3" width="120">
                <h5>No Recommendations Available</h5>
                <p class="text-muted">We couldn't find any recommended books for you at the moment.</p>
                <a href="#" class="btn btn-primary rounded-pill py-2">Explore Library</a>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    @if(isset($books) && count($books) > 5)
    <nav aria-label="Books pagination" class="mt-4">
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
