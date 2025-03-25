@extends('Admin.MainDashboardAdmin')

@section('title')
Course Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Course Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Live Class Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Live Class Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLiveClassModal">
                <i class="bi bi-plus-circle me-2"></i>Add Live Class
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Live Classes</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalLiveClasses }}</h4> --}}
                                </div>
                                <i class="bi bi-collection-play text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Classes</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeLiveClasses }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">Upcoming Classes</h6>
                                    {{-- <h4 class="fw-bold">{{ $upcomingLiveClasses }}</h4> --}}
                                </div>
                                <i class="bi bi-calendar-plus text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Classes (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newLiveClasses }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Live Class List Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Class Name</th>
                            <th>Instructor</th>
                            <th>Schedule</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($liveClasses as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>{{ $class->picture }}</td>
                            <td>{{ $class->name }}</td>
                            <td>{{ $class->instructor->name }}</td>
                            <td>{{ $class->schedule }}</td>
                            <td>
                                <span class="badge {{ $class->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $class->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewLiveClassModal{{ $class->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editLiveClassModal{{ $class->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteLiveClassModal{{ $class->id }}">
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

    <!-- One on One Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">One on One Session Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOneOnOneModal">
                <i class="bi bi-plus-circle me-2"></i>Add Session
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Sessions</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalOneOnOneSessions }}</h4> --}}
                                </div>
                                <i class="bi bi-person-video3 text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Booked Sessions</h6>
                                    {{-- <h4 class="fw-bold">{{ $bookedOneOnOneSessions }}</h4> --}}
                                </div>
                                <i class="bi bi-calendar-check text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Available Sessions</h6>
                                    {{-- <h4 class="fw-bold">{{ $availableOneOnOneSessions }}</h4> --}}
                                </div>
                                <i class="bi bi-hourglass-split text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Sessions (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newOneOnOneSessions }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- One on One Sessions Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Instructor</th>
                            <th>Student</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($oneOnOneSessions as $session)
                        <tr>
                            <td>{{ $session->id }}</td>
                            <td>{{ $session->picture }}</td>
                            <td>{{ $session->instructor->name }}</td>
                            <td>{{ $session->student->name }}</td>
                            <td>{{ $session->scheduled_date }}</td>
                            <td>
                                <span class="badge {{ $session->status == 'booked' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $session->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewOneOnOneModal{{ $session->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editOneOnOneModal{{ $session->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteOneOnOneModal{{ $session->id }}">
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

    <!-- Certificate Test Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Certificate Test Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCertificateTestModal">
                <i class="bi bi-plus-circle me-2"></i>Add Certificate Test
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Tests</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalCertificateTests }}</h4> --}}
                                </div>
                                <i class="bi bi-file-earmark-text text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Tests</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeCertificateTests }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">Upcoming Tests</h6>
                                    {{-- <h4 class="fw-bold">{{ $upcomingCertificateTests }}</h4> --}}
                                </div>
                                <i class="bi bi-calendar-plus text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Tests (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newCertificateTests }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Certificate Test Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Test Name</th>
                            <th>Subject</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($certificateTests as $test)
                        <tr>
                            <td>{{ $test->id }}</td>
                            <td>{{ $test->picture }}</td>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->subject }}</td>
                            <td>{{ $test->duration }} minutes</td>
                            <td>
                                <span class="badge {{ $test->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $test->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewCertificateTestModal{{ $test->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editCertificateTestModal{{ $test->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCertificateTestModal{{ $test->id }}">
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

    <!-- Learning Package Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Learning Package Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLearningPackageModal">
                <i class="bi bi-plus-circle me-2"></i>Add Learning Package
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Packages</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalLearningPackages }}</h4> --}}
                                </div>
                                <i class="bi bi-briefcase text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Packages</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeLearningPackages }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">Best Selling</h6>
                                    {{-- <h4 class="fw-bold">{{ $bestSellingPackage }}</h4> --}}
                                </div>
                                <i class="bi bi-award text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Packages (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newLearningPackages }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Package Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Package Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($learningPackages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->picture }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->category }}</td>
                            <td>{{ $package->price }}</td>
                            <td>
                                <span class="badge {{ $package->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $package->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewLearningPackageModal{{ $package->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editLearningPackageModal{{ $package->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteLearningPackageModal{{ $package->id }}">
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

    <!-- Smart-Book Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Smart-Book Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSmartBookModal">
                <i class="bi bi-plus-circle me-2"></i>Add Smart-Book
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Smart-Books</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalSmartBooks }}</h4> --}}
                                </div>
                                <i class="bi bi-book text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Smart-Books</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeSmartBooks }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">Most Read</h6>
                                    {{-- <h4 class="fw-bold">{{ $mostReadSmartBook }}</h4> --}}
                                </div>
                                <i class="bi bi-heart text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">New Smart-Books (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newSmartBooks }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Smart-Book Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Book Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($smartBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->picture }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->category }}</td>
                            <td>
                                <span class="badge {{ $book->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $book->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewSmartBookModal{{ $book->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSmartBookModal{{ $book->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSmartBookModal{{ $book->id }}">
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

    <!-- Subscription Management Section -->
    <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Subscription Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSubscriptionModal">
                <i class="bi bi-plus-circle me-2"></i>Add Subscription Plan
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Subscriptions</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalSubscriptions }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">Active Subscriptions</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeSubscriptions }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">Popular Plan</h6>
                                    {{-- <h4 class="fw-bold">{{ $popularSubscriptionPlan }}</h4> --}}
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
                                    <h6 class="text-muted mb-1">New Subscriptions (30d)</h6>
                                    {{-- <h4 class="fw-bold">{{ $newSubscriptions }}</h4> --}}
                                </div>
                                <i class="bi bi-plus-square text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Subscription Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Plan Name</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($subscriptions as $subscription)
                        <tr>
                            <td>{{ $subscription->id }}</td>
                            <td>{{ $subscription->picture }}</td>
                            <td>{{ $subscription->name }}</td>
                            <td>{{ $subscription->duration }} months</td>
                            <td>{{ $subscription->price }}</td>
                            <td>
                                <span class="badge {{ $subscription->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $subscription->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewSubscriptionModal{{ $subscription->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSubscriptionModal{{ $subscription->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSubscriptionModal{{ $subscription->id }}">
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

<!-- Modals for Course Management -->
{{-- Modals for each section would be included here:
     - Live Class Modals (Add, Edit, View, Delete)
     - One on One Session Modals (Add, Edit, View, Delete)
     - Certificate Test Modals (Add, Edit, View, Delete)
     - Learning Package Modals (Add, Edit, View, Delete)
     - Smart-Book Modals (Add, Edit, View, Delete)
     - Subscription Modals (Add, Edit, View, Delete)
--}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Placeholder for any JavaScript functionality
        // For example, handling modal interactions, AJAX requests for CRUD operations

        // Example of a generic CRUD operation handler
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
                    // Optionally refresh the table or page
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

        // Example event listeners for different sections
        // These would be expanded with actual implementation
        document.getElementById('addLiveClassBtn')?.addEventListener('click', function() {
            // Handle adding a live class
        });

        document.getElementById('addOneOnOneSessionBtn')?.addEventListener('click', function() {
            // Handle adding a one-on-one session
        });

        // Similar event listeners for other sections
    });
</script>
@endsection
