@extends('Admin.MainDashboardAdmin')

@section('title')
Content Management
@endsection

@section('content')
<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="font-weight-bold mb-0">Content Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Skill Content Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Skill Content Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSkillContentModal">
                <i class="bi bi-plus-circle me-2"></i>Add Skill Content
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Speaking Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $speakingContents }}</h4> --}}
                                </div>
                                <i class="bi bi-mic text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Writing Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $writingContents }}</h4> --}}
                                </div>
                                <i class="bi bi-pencil text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Listening Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $listeningContents }}</h4> --}}
                                </div>
                                <i class="bi bi-headphones text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Reading Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $readingContents }}</h4> --}}
                                </div>
                                <i class="bi bi-book text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skill Contents Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Skill Type</th>
                            <th>Title</th>
                            <th>Difficulty</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($skillContents as $content)
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->skill_type }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->difficulty }}</td>
                            <td>
                                <span class="badge {{ $content->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $content->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewSkillContentModal{{ $content->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSkillContentModal{{ $content->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSkillContentModal{{ $content->id }}">
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

    <!-- Grammar Content Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Grammar Content Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGrammarContentModal">
                <i class="bi bi-plus-circle me-2"></i>Add Grammar Content
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Grammar Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalGrammarContents }}</h4> --}}
                                </div>
                                <i class="bi bi-journal-text text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Grammar Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeGrammarContents }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Grammar Categories</h6>
                                    {{-- <h4 class="fw-bold">{{ $grammarCategories }}</h4> --}}
                                </div>
                                <i class="bi bi-collection text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grammar Contents Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Complexity</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($grammarContents as $content)
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->category }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->complexity }}</td>
                            <td>
                                <span class="badge {{ $content->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $content->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewGrammarContentModal{{ $content->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editGrammarContentModal{{ $content->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteGrammarContentModal{{ $content->id }}">
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

    <!-- Vocabulary Content Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Vocabulary Content Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVocabularyContentModal">
                <i class="bi bi-plus-circle me-2"></i>Add Vocabulary Content
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Vocabulary Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalVocabularyContents }}</h4> --}}
                                </div>
                                <i class="bi bi-book text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Vocabulary Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeVocabularyContents }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Vocabulary Categories</h6>
                                    {{-- <h4 class="fw-bold">{{ $vocabularyCategories }}</h4> --}}
                                </div>
                                <i class="bi bi-collection text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vocabulary Contents Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Difficulty</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($vocabularyContents as $content)
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->category }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->difficulty }}</td>
                            <td>
                                <span class="badge {{ $content->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $content->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewVocabularyContentModal{{ $content->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editVocabularyContentModal{{ $content->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteVocabularyContentModal{{ $content->id }}">
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

    <!-- TOEFL Content Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">TOEFL Content Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTOEFLContentModal">
                <i class="bi bi-plus-circle me-2"></i>Add TOEFL Content
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total TOEFL Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalTOEFLContents }}</h4> --}}
                                </div>
                                <i class="bi bi-globe text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active TOEFL Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $activeTOEFLContents }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">TOEFL Sections</h6>
                                    {{-- <h4 class="fw-bold">{{ $TOEFLSections }}</h4> --}}
                                </div>
                                <i class="bi bi-collection text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TOEFL Contents Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Section</th>
                            <th>Title</th>
                            <th>Difficulty</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($TOEFLContents as $content)
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->section }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->difficulty }}</td>
                            <td>
                                <span class="badge {{ $content->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $content->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewTOEFLContentModal{{ $content->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editTOEFLContentModal{{ $content->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTOEFLContentModal{{ $content->id }}">
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

    <!-- Practical English Content Management Section -->
    <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Practical English Content Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPracticalEnglishContentModal">
                <i class="bi bi-plus-circle me-2"></i>Add Practical English Content
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Practical English Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $totalPracticalEnglishContents }}</h4> --}}
                                </div>
                                <i class="bi bi-chat-dots text-primary fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Active Practical English Contents</h6>
                                    {{-- <h4 class="fw-bold">{{ $activePracticalEnglishContents }}</h4> --}}
                                </div>
                                <i class="bi bi-check-circle text-success fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Practical English Categories</h6>
                                    {{-- <h4 class="fw-bold">{{ $practicalEnglishCategories }}</h4> --}}
                                </div>
                                <i class="bi bi-collection text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Practical English Contents Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Difficulty</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($practicalEnglishContents as $content)
                        <tr>
                            <td>{{ $content->id }}</td>
                            <td>{{ $content->category }}</td>
                            <td>{{ $content->title }}</td>
                            <td>{{ $content->difficulty }}</td>
                            <td>
                                <span class="badge {{ $content->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ $content->status }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewPracticalEnglishContentModal{{ $content->id }}">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editPracticalEnglishContentModal{{ $content->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deletePracticalEnglishContentModal{{ $content->id }}">
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

<!-- Modals for Content Management -->
{{-- Modals for:
     - Add/Edit/View/Delete Contents for each section
     (Skill, Grammar, Vocabulary, TOEFL, Practical English)
--}}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Content CRUD operations
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

        // Export functionality
        document.getElementById('exportContentsBtn')?.addEventListener('click', function() {
            // Implement export logic
            console.log('Exporting contents');
        });

        // Additional event listeners for CRUD operations can be added here
    });
</script>
@endsection
