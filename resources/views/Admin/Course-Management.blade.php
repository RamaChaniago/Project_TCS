@extends('Admin.MainDashboardAdmin')

@section('title')
Course Management
@endsection

@section('content')
<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<div class="container-fluid py-5">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0">Course Management</h3>
        <div class="d-flex gap-2">
            <span class="badge bg-info text-white">
                <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Certificate Test Management Section -->
    <div class="card shadow-lg border-0 rounded-4 mb-4">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">TOEFL ITP Question Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addQuestionModal">
                <i class="bi bi-plus-circle me-2"></i>Add New Question
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Total Questions</h6>
                                    <h4 class="fw-bold">{{ $totalQuestions ?? 0 }}</h4>
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
                                    <h6 class="text-muted mb-1">Listening Questions</h6>
                                    <h4 class="fw-bold">{{ $listeningQuestions ?? 0 }}</h4>
                                </div>
                                <i class="bi bi-headphones text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Structure Questions</h6>
                                    <h4 class="fw-bold">{{ $structureQuestions ?? 0 }}</h4>
                                </div>
                                <i class="bi bi-type text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Reading Questions</h6>
                                    <h4 class="fw-bold">{{ $readingQuestions ?? 0 }}</h4>
                                </div>
                                <i class="bi bi-book text-danger fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Question Filter Options (Server-side Form) -->
            <form action="{{ route('questions.filter') }}" method="GET" class="row mb-3">
                <div class="col-md-4 mb-2">
                    <select class="form-select" id="sectionFilter" name="section" onchange="this.form.submit()">
                        <option value="" {{ request('section') == '' ? 'selected' : '' }}>All Sections</option>
                        <option value="Listening" {{ request('section') == 'Listening' ? 'selected' : '' }}>Listening</option>
                        <option value="Structure" {{ request('section') == 'Structure' ? 'selected' : '' }}>Structure & Written Expression</option>
                        <option value="Reading" {{ request('section') == 'Reading' ? 'selected' : '' }}>Reading</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2">
                    <select class="form-select" id="difficultyFilter" name="difficulty" onchange="this.form.submit()">
                        <option value="" {{ request('difficulty') == '' ? 'selected' : '' }}>All Difficulty Levels</option>
                        <option value="Easy" {{ request('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                        <option value="Medium" {{ request('difficulty') == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="Hard" {{ request('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
                    </select>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchInput" name="search" placeholder="Search questions..." value="{{ request('search') ?? '' }}">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Questions Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Section</th>
                            <th>Question Preview</th>
                            <th>Difficulty</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="questionsTableBody">
                        @forelse($questions as $question)
                        <tr>
                            <td>{{ $question->id }}</td>
                            <td>
                                @if($question->section == 'Listening')
                                    <span class="badge bg-info">Listening</span>
                                @elseif($question->section == 'Structure')
                                    <span class="badge bg-warning text-dark">Structure</span>
                                @elseif($question->section == 'Reading')
                                    <span class="badge bg-danger">Reading</span>
                                @endif
                            </td>
                            <td>{{ Str::limit($question->question_text, 60) }}</td>
                            <td>
                                @if($question->difficulty == 'Easy')
                                    <span class="badge bg-success">Easy</span>
                                @elseif($question->difficulty == 'Medium')
                                    <span class="badge bg-warning text-dark">Medium</span>
                                @elseif($question->difficulty == 'Hard')
                                    <span class="badge bg-danger">Hard</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('questions.show', $question->id) }}" class="btn btn-sm btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal_{{ $question->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Delete Modal for Each Question -->
                        <div class="modal fade" id="deleteQuestionModal_{{ $question->id }}" tabindex="-1" aria-labelledby="deleteQuestionModalLabel_{{ $question->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="deleteQuestionModalLabel_{{ $question->id }}">Delete Question</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center mb-3">
                                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                                        </div>
                                        <p class="text-center mb-0">Are you sure you want to delete this question? This action cannot be undone.</p>
                                        <p class="text-center fw-bold mt-2">Question: {{ Str::limit($question->question_text, 100) }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete Question</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No questions found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    <span>Showing {{ $questions->firstItem() }} to {{ $questions->lastItem() }} of {{ $questions->total() }} entries</span>
                </div>
                {{ $questions->appends(request()->query())->links() }}
            </div>
        </div>
    </div>

    <!-- Test Timing Management Section -->
    <div class="card shadow-lg border-0 rounded-4 mb-4">
        <div class="card-header bg-white p-4 border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Test Timing Management</h5>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editTimingModal">
                <i class="bi bi-clock-history me-2"></i>Update Test Timing
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Listening Section</h6>
                                    <h4 class="fw-bold">{{ $listeningTime }} minutes</h4>
                                </div>
                                <i class="bi bi-headphones text-info fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Structure Section</h6>
                                    <h4 class="fw-bold">{{ $structureTime }} minutes</h4>
                                </div>
                                <i class="bi bi-type text-warning fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-0 bg-light">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted mb-1">Reading Section</h6>
                                    <h4 class="fw-bold">{{ $readingTime }} minutes</h4>
                                </div>
                                <i class="bi bi-book text-danger fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-info">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-info-circle-fill me-2 fs-4"></i>
                            <div>
                                <h6 class="mb-1">Total Test Duration: <strong>{{ $listeningTime + $structureTime + $readingTime }} minutes</strong></h6>
                                <p class="mb-0">Last updated: {{ $lastTimingUpdate->format('F d, Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Question Modal -->
<div class="modal fade" id="addQuestionModal" tabindex="-1" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addQuestionModalLabel">Add New Question</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('questions.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="section" class="form-label">Section <span class="text-danger">*</span></label>
                            <select class="form-select" id="section" name="section" required>
                                <option value="" {{ old('section') == '' ? 'selected' : '' }}>Select Section</option>
                                <option value="Listening" {{ old('section') == 'Listening' ? 'selected' : '' }}>Listening</option>
                                <option value="Structure" {{ old('section') == 'Structure' ? 'selected' : '' }}>Structure & Written Expression</option>
                                <option value="Reading" {{ old('section') == 'Reading' ? 'selected' : '' }}>Reading</option>
                            </select>
                            <div class="invalid-feedback">Please select a section.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="difficulty" class="form-label">Difficulty Level <span class="text-danger">*</span></label>
                            <select class="form-select" id="difficulty" name="difficulty" required>
                                <option value="" {{ old('difficulty') == '' ? 'selected' : '' }}>Select Difficulty</option>
                                <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                                <option value="Medium" {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
                            </select>
                            <div class="invalid-feedback">Please select a difficulty level.</div>
                        </div>
                    </div>

                    <div class="mb-3" id="listeningFileContainer" style="display: none;">
                        <label for="audioFile" class="form-label">Audio File (MP3/WAV)</label>
                        <input type="file" class="form-control" id="audioFile" name="audio_file" accept="audio/*">
                    </div>

                    <div class="mb-3" id="readingPassageContainer" style="display: none;">
                        <label for="readingPassage" class="form-label">Reading Passage</label>
                        <textarea class="form-control" id="readingPassage" name="reading_passage" rows="5">{{ old('reading_passage') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="questionText" class="form-label">Question Text <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="questionText" name="question_text" rows="3" required>{{ old('question_text') }}</textarea>
                        <div class="invalid-feedback">Please enter the question text.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Answer Options <span class="text-danger">*</span></label>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">A</span>
                                    <input type="text" class="form-control" name="option_a" value="{{ old('option_a') }}" required>
                                    <div class="invalid-feedback">Please enter option A.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">B</span>
                                    <input type="text" class="form-control" name="option_b" value="{{ old('option_b') }}" required>
                                    <div class="invalid-feedback">Please enter option B.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">C</span>
                                    <input type="text" class="form-control" name="option_c" value="{{ old('option_c') }}" required>
                                    <div class="invalid-feedback">Please enter option C.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">D</span>
                                    <input type="text" class="form-control" name="option_d" value="{{ old('option_d') }}" required>
                                    <div class="invalid-feedback">Please enter option D.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correctAnswer" class="form-label">Correct Answer <span class="text-danger">*</span></label>
                        <select class="form-select" id="correctAnswer" name="correct_answer" required>
                            <option value="" {{ old('correct_answer') == '' ? 'selected' : '' }}>Select Correct Answer</option>
                            <option value="A" {{ old('correct_answer') == 'A' ? 'selected' : '' }}>Option A</option>
                            <option value="B" {{ old('correct_answer') == 'B' ? 'selected' : '' }}>Option B</option>
                            <option value="C" {{ old('correct_answer') == 'C' ? 'selected' : '' }}>Option C</option>
                            <option value="D" {{ old('correct_answer') == 'D' ? 'selected' : '' }}>Option D</option>
                        </select>
                        <div class="invalid-feedback">Please select the correct answer.</div>
                    </div>

                    <div class="mb-3">
                        <label for="explanation" class="form-label">Explanation (Optional)</label>
                        <textarea class="form-control" id="explanation" name="explanation" rows="2">{{ old('explanation') }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Question</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Question Modal -->
@if(isset($viewQuestion))
<div class="modal fade" id="viewQuestionModal" tabindex="-1" aria-labelledby="viewQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="viewQuestionModalLabel">View Question Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h6 class="text-muted">Section:</h6>
                        <p class="fw-bold">{{ $viewQuestion->section }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-muted">Difficulty Level:</h6>
                        <span class="badge {{ $viewQuestion->difficulty == 'Easy' ? 'bg-success' : ($viewQuestion->difficulty == 'Medium' ? 'bg-warning text-dark' : 'bg-danger') }}">{{ $viewQuestion->difficulty }}</span>
                    </div>
                </div>

                @if($viewQuestion->section == 'Listening' && $viewQuestion->audio_file)
                <div id="viewListeningContainer">
                    <h6 class="text-muted">Audio:</h6>
                    <audio id="viewAudio" controls class="w-100 mb-3" src="{{ Storage::url($viewQuestion->audio_file) }}"></audio>
                </div>
                @endif

                @if($viewQuestion->section == 'Reading' && $viewQuestion->reading_passage)
                <div id="viewReadingContainer">
                    <h6 class="text-muted">Reading Passage:</h6>
                    <div class="card bg-light p-3 mb-3">
                        <p class="mb-0">{{ $viewQuestion->reading_passage }}</p>
                    </div>
                </div>
                @endif

                <div class="mb-3">
                    <h6 class="text-muted">Question:</h6>
                    <div class="card bg-light p-3">
                        <p class="mb-0">{{ $viewQuestion->question_text }}</p>
                    </div>
                </div>

                <div class="mb-3">
                    <h6 class="text-muted">Answer Options:</h6>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="card mb-2">
                                <div class="card-body py-2 px-3">
                                    <span class="fw-bold me-2">A:</span>
                                    <span>{{ $viewQuestion->option_a }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-2">
                                <div class="card-body py-2 px-3">
                                    <span class="fw-bold me-2">B:</span>
                                    <span>{{ $viewQuestion->option_b }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-2">
                                <div class="card-body py-2 px-3">
                                    <span class="fw-bold me-2">C:</span>
                                    <span>{{ $viewQuestion->option_c }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-2">
                                <div class="card-body py-2 px-3">
                                    <span class="fw-bold me-2">D:</span>
                                    <span>{{ $viewQuestion->option_d }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <h6 class="text-muted">Correct Answer:</h6>
                    <p class="fw-bold text-success">Option {{ $viewQuestion->correct_answer }}</p>
                </div>

                @if($viewQuestion->explanation)
                <div id="viewExplanationContainer">
                    <h6 class="text-muted">Explanation:</h6>
                    <div class="card bg-light p-3">
                        <p class="mb-0">{{ $viewQuestion->explanation }}</p>
                    </div>
                </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{ route('questions.edit', $viewQuestion->id) }}" class="btn btn-warning">Edit Question</a>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Edit Question Modal -->
@if(isset($editQuestion))
<div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editQuestionModalLabel">Edit Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('questions.update', $editQuestion->id) }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="editSection" class="form-label">Section <span class="text-danger">*</span></label>
                            <select class="form-select" id="editSection" name="section" required>
                                <option value="" {{ old('section', $editQuestion->section) == '' ? 'selected' : '' }}>Select Section</option>
                                <option value="Listening" {{ old('section', $editQuestion->section) == 'Listening' ? 'selected' : '' }}>Listening</option>
                                <option value="Structure" {{ old('section', $editQuestion->section) == 'Structure' ? 'selected' : '' }}>Structure & Written Expression</option>
                                <option value="Reading" {{ old('section', $editQuestion->section) == 'Reading' ? 'selected' : '' }}>Reading</option>
                            </select>
                            <div class="invalid-feedback">Please select a section.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="editDifficulty" class="form-label">Difficulty Level <span class="text-danger">*</span></label>
                            <select class="form-select" id="editDifficulty" name="difficulty" required>
                                <option value="" {{ old('section', $editQuestion->difficulty) == '' ? 'selected' : '' }}>Select Difficulty</option>
                                <option value="Easy" {{ old('section', $editQuestion->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
                                <option value="Medium" {{ old('section', $editQuestion->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Hard" {{ old('section', $editQuestion->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
                            </select>
                            <div class="invalid-feedback">Please select a difficulty level.</div>
                        </div>
                    </div>

                    <div class="mb-3" id="editListeningFileContainer" style="display: {{ $editQuestion->section == 'Listening' ? 'block' : 'none' }};">
                        <label for="editAudioFile" class="form-label">Audio File (MP3/WAV)</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="editAudioFile" name="audio_file" accept="audio/*">
                            <span class="input-group-text">Current: {{ $editQuestion->audio_file ? basename($editQuestion->audio_file) : 'None' }}</span>
                        </div>
                    </div>

                    <div class="mb-3" id="editReadingPassageContainer" style="display: {{ $editQuestion->section == 'Reading' ? 'block' : 'none' }};">
                        <label for="editReadingPassage" class="form-label">Reading Passage</label>
                        <textarea class="form-control" id="editReadingPassage" name="reading_passage" rows="5">{{ old('reading_passage', $editQuestion->reading_passage) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editQuestionText" class="form-label">Question Text <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="editQuestionText" name="question_text" rows="3" required>{{ old('question_text', $editQuestion->question_text) }}</textarea>
                        <div class="invalid-feedback">Please enter the question text.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Answer Options <span class="text-danger">*</span></label>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">A</span>
                                    <input type="text" class="form-control" id="editOptionA" name="option_a" value="{{ old('option_a', $editQuestion->option_a) }}" required>
                                    <div class="invalid-feedback">Please enter option A.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">B</span>
                                    <input type="text" class="form-control" id="editOptionB" name="option_b" value="{{ old('option_b', $editQuestion->option_b) }}" required>
                                    <div class="invalid-feedback">Please enter option B.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">C</span>
                                    <input type="text" class="form-control" id="editOptionC" name="option_c" value="{{ old('option_c', $editQuestion->option_c) }}" required>
                                    <div class="invalid-feedback">Please enter option C.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">D</span>
                                    <input type="text" class="form-control" id="editOptionD" name="option_d" value="{{ old('option_d', $editQuestion->option_d) }}" required>
                                    <div class="invalid-feedback">Please enter option D.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="editCorrectAnswer" class="form-label">Correct Answer <span class="text-danger">*</span></label>
                        <select class="form-select" id="editCorrectAnswer" name="correct_answer" required>
                            <option value="" {{ old('correct_answer', $editQuestion->correct_answer) == '' ? 'selected' : '' }}>Select Correct Answer</option>
                            <option value="A" {{ old('correct_answer', $editQuestion->correct_answer) == 'A' ? 'selected' : '' }}>Option A</option>
                            <option value="B" {{ old('correct_answer', $editQuestion->correct_answer) == 'B' ? 'selected' : '' }}>Option B</option>
                            <option value="C" {{ old('correct_answer', $editQuestion->correct_answer) == 'C' ? 'selected' : '' }}>Option C</option>
                            <option value="D" {{ old('correct_answer', $editQuestion->correct_answer) == 'D' ? 'selected' : '' }}>Option D</option>
                        </select>
                        <div class="invalid-feedback">Please select the correct answer.</div>
                    </div>

                    <div class="mb-3">
                        <label for="editExplanation" class="form-label">Explanation (Optional)</label>
                        <textarea class="form-control" id="editExplanation" name="explanation" rows="2">{{ old('explanation', $editQuestion->explanation) }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning">Update Question</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

<!-- Edit Test Timing Modal -->
<div class="modal fade" id="editTimingModal" tabindex="-1" aria-labelledby="editTimingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editTimingModalLabel">Update Test Timing</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('test.timing.update') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="listeningTime" class="form-label">Listening Section Time (minutes) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="listeningTime" name="listening_time" min="5" max="120" value="{{ old('listening_time', $listeningTime) }}" required>
                        <div class="invalid-feedback">Please enter a valid time (5-120 minutes).</div>
                    </div>
                    <div class="mb-3">
                        <label for="structureTime" class="form-label">Structure Section Time (minutes) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="structureTime" name="structure_time" min="5" max="120" value="{{ old('structure_time', $structureTime) }}" required>
                        <div class="invalid-feedback">Please enter a valid time (5-120 minutes).</div>
                    </div>
                    <div class="mb-3">
                        <label for="readingTime" class="form-label">Reading Section Time (minutes) <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="readingTime" name="reading_time" min="5" max="120" value="{{ old('reading_time', $readingTime) }}" required>
                        <div class="invalid-feedback">Please enter a valid time (5-120 minutes).</div>
                    </div>
                    <div class="alert alert-info">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-info-circle me-2"></i>
                            <p class="mb-0">Total test duration: <strong id="totalTestTime">{{ old('listening_time', $listeningTime) + old('structure_time', $structureTime) + old('reading_time', $readingTime) }}</strong> minutes</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Timing</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Configure section-specific form fields for Add Question Modal
        const sectionSelect = document.getElementById('section');
        const listeningFileContainer = document.getElementById('listeningFileContainer');
        const readingPassageContainer = document.getElementById('readingPassageContainer');

        if (sectionSelect) {
            // Initialize based on current value
            const selectedSection = sectionSelect.value;
            listeningFileContainer.style.display = selectedSection === 'Listening' ? 'block' : 'none';
            readingPassageContainer.style.display = selectedSection === 'Reading' ? 'block' : 'none';

            sectionSelect.addEventListener('change', function() {
                const selectedSection = this.value;
                listeningFileContainer.style.display = selectedSection === 'Listening' ? 'block' : 'none';
                readingPassageContainer.style.display = selectedSection === 'Reading' ? 'block' : 'none';
            });
        }

        // Configure section-specific form fields for Edit Question Modal
        const editSectionSelect = document.getElementById('editSection');
        const editListeningFileContainer = document.getElementById('editListeningFileContainer');
        const editReadingPassageContainer = document.getElementById('editReadingPassageContainer');

        if (editSectionSelect) {
            // Initialize based on current value
            const selectedSection = editSectionSelect.value;
            editListeningFileContainer.style.display = selectedSection === 'Listening' ? 'block' : 'none';
            editReadingPassageContainer.style.display = selectedSection === 'Reading' ? 'block' : 'none';

            editSectionSelect.addEventListener('change', function() {
                const selectedSection = this.value;
                editListeningFileContainer.style.display = selectedSection === 'Listening' ? 'block' : 'none';
                editReadingPassageContainer.style.display = selectedSection === 'Reading' ? 'block' : 'none';
            });
        }

        // Update total test time dynamically
        const listeningTimeInput = document.getElementById('listeningTime');
        const structureTimeInput = document.getElementById('structureTime');
        const readingTimeInput = document.getElementById('readingTime');
        const totalTestTime = document.getElementById('totalTestTime');

        function updateTotalTime() {
            const listening = parseInt(listeningTimeInput.value) || 0;
            const structure = parseInt(structureTimeInput.value) || 0;
            const reading = parseInt(readingTimeInput.value) || 0;
            totalTestTime.textContent = listening + structure + reading;
        }

        if (listeningTimeInput && structureTimeInput && readingTimeInput) {
            listeningTimeInput.addEventListener('input', updateTotalTime);
            structureTimeInput.addEventListener('input', updateTotalTime);
            readingTimeInput.addEventListener('input', updateTotalTime);
        }

        // Bootstrap form validation
        const forms = document.querySelectorAll('.needs-validation');
        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });

        // Auto-show modals if data is present
        @if(isset($viewQuestion))
            new bootstrap.Modal(document.getElementById('viewQuestionModal')).show();
        @endif
        @if(isset($editQuestion))
            new bootstrap.Modal(document.getElementById('editQuestionModal')).show();
        @endif
    });
</script>
@endsection
