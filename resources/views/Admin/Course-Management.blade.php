@extends('Admin.MainDashboardAdmin')

@section('title')
    Course Management
@endsection

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container-fluid pt-3 pb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Course Management</h3>
            <div class="d-flex gap-2">
                <span class="badge bg-info text-white">
                    <i class="bi bi-calendar3 me-1"></i> {{ date('d M Y') }}
                </span>
            </div>
        </div>

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
                </div>

                <form action="{{ route('questions.filter') }}" method="GET" class="row mb-3">
                    <div class="col-md-4 mb-2">
                        <select class="form-select" id="sectionFilter" name="section" onchange="this.form.submit()">
                            <option value="" {{ request('section') == '' ? 'selected' : '' }}>All Sections</option>
                            <option value="Listening" {{ request('section') == 'Listening' ? 'selected' : '' }}>Listening
                            </option>
                            <option value="Structure" {{ request('section') == 'Structure' ? 'selected' : '' }}>Structure &
                                Written Expression</option>
                            <option value="Reading" {{ request('section') == 'Reading' ? 'selected' : '' }}>Reading
                            </option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <select class="form-select" id="difficultyFilter" name="difficulty" onchange="this.form.submit()">
                            <option value="" {{ request('difficulty') == '' ? 'selected' : '' }}>All Difficulty
                                Levels</option>
                            <option value="Easy" {{ request('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                            <option value="Medium" {{ request('difficulty') == 'Medium' ? 'selected' : '' }}>Medium
                            </option>
                            <option value="Hard" {{ request('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="input-group">
                            <input type="text" class="form-control" id="searchInput" name="search"
                                placeholder="Search questions..." value="{{ request('search') ?? '' }}">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="questionsTable">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Gambar/Audio</th>
                                <th>Question Preview</th>
                                <th>Answer</th>
                                <th>Level Difficulty</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="questionsTableBody">
                            @forelse($questions as $index => $question)
                                <tr data-id="{{ $question->id }}">
                                    <td>{{ $loop->iteration + $questions->firstItem() - 1 }}</td>
                                    <td class="media-cell">
                                        @if ($question->section == 'Listening' && $question->audio_file)
                                            <audio controls class="w-100" style="max-width: 200px;">
                                                <source src="{{ Storage::url($question->audio_file) }}"
                                                    type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        @elseif(in_array($question->section, ['Structure', 'Reading']) && $question->image_file)
                                            <img src="{{ Storage::url($question->image_file) }}" alt="Question Image"
                                                class="img-fluid" style="max-width: 100px; max-height: 100px;"
                                                onerror="this.src='/images/placeholder.png';">
                                        @else
                                            <span class="text-muted">No media</span>
                                        @endif
                                    </td>
                                    <td class="question-text">{{ Str::limit($question->question_text, 60) }}</td>
                                    <td class="correct-answer">
                                        @php
                                            $option = match ($question->correct_answer) {
                                                'A' => $question->option_a,
                                                'B' => $question->option_b,
                                                'C' => $question->option_c,
                                                'D' => $question->option_d,
                                                default => 'N/A',
                                            };
                                        @endphp
                                        Option {{ $question->correct_answer }}: {{ Str::limit($option, 30) }}
                                    </td>
                                    <td class="difficulty">
                                        @if ($question->difficulty == 'Easy')
                                            <span class="badge bg-success">Easy</span>
                                        @elseif($question->difficulty == 'Medium')
                                            <span class="badge bg-warning text-dark">Medium</span>
                                        @elseif($question->difficulty == 'Hard')
                                            <span class="badge bg-danger">Hard</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <!-- Tombol View hanya menyimpan data-id -->
                                            <button class="btn btn-sm btn-info view-question-btn" data-bs-toggle="modal"
                                                data-bs-target="#viewQuestionModal" data-id="{{ $question->id }}">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning edit-question-btn"
                                                data-bs-toggle="modal" data-bs-target="#editQuestionModal"
                                                data-id="{{ $question->id }}"
                                                data-section="{{ $question->section ?? '' }}"
                                                data-difficulty="{{ $question->difficulty ?? '' }}"
                                                data-question-text="{{ htmlspecialchars($question->question_text ?? '') }}"
                                                data-option-a="{{ htmlspecialchars($question->option_a ?? '') }}"
                                                data-option-b="{{ htmlspecialchars($question->option_b ?? '') }}"
                                                data-option-c="{{ htmlspecialchars($question->option_c ?? '') }}"
                                                data-option-d="{{ htmlspecialchars($question->option_d ?? '') }}"
                                                data-correct-answer="{{ $question->correct_answer ?? '' }}"
                                                data-audio-file="{{ $question->audio_file ? Storage::url($question->audio_file) : '' }}"
                                                data-image-file="{{ $question->image_file ? Storage::url($question->image_file) : '' }}"
                                                data-explanation="{{ htmlspecialchars($question->explanation ?? '') }}">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteQuestionModal_{{ $question->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="deleteQuestionModal_{{ $question->id }}" tabindex="-1"
                                    aria-labelledby="deleteQuestionModalLabel_{{ $question->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title"
                                                    id="deleteQuestionModalLabel_{{ $question->id }}">Delete Question</h5>
                                                <button type="button" class="btn-close btn-close-white"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="text-center mb-3">
                                                    <i class="bi bi-exclamation-triangle-fill text-danger"
                                                        style="font-size: 3rem;"></i>
                                                </div>
                                                <p class="text-center mb-0">Are you sure you want to delete this question?
                                                    This action cannot be undone.</p>
                                                <p class="text-center fw-bold mt-2">Question:
                                                    {{ Str::limit($question->question_text, 100) }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <form action="{{ route('questions.destroy', $question->id) }}"
                                                    method="POST">
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
                                    <td colspan="6" class="text-center">No questions found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        <span>Showing {{ $questions->firstItem() }} to {{ $questions->lastItem() }} of
                            {{ $questions->total() }} entries</span>
                    </div>
                    {{ $questions->appends(request()->query())->links() }}
                </div>
            </div>
        </div>

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
                                    <h6 class="mb-1">Total Test Duration:
                                        <strong>{{ $listeningTime + $structureTime + $readingTime }} minutes</strong></h6>
                                    <p class="mb-0">Last updated: {{ $lastTimingUpdate->format('F d, Y H:i') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addQuestionModal" tabindex="-1" aria-labelledby="addQuestionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addQuestionModalLabel">Add New Question</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('questions.store') }}" method="POST" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="section" class="form-label">Section <span class="text-danger">*</span></label>
                            <select class="form-select" id="section" name="section" required>
                                <option value="" {{ old('section') == '' ? 'selected' : '' }}>Select Section
                                </option>
                                <option value="Listening" {{ old('section') == 'Listening' ? 'selected' : '' }}>Listening
                                </option>
                                <option value="Structure" {{ old('section') == 'Structure' ? 'selected' : '' }}>Structure
                                    & Written Expression</option>
                                <option value="Reading" {{ old('section') == 'Reading' ? 'selected' : '' }}>Reading
                                </option>
                            </select>
                            <div class="invalid-feedback">Please select a section.</div>
                        </div>
                        <div class="mb-3">
                            <label for="difficulty" class="form-label">Difficulty Level <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="difficulty" name="difficulty" required>
                                <option value="" {{ old('difficulty') == '' ? 'selected' : '' }}>Select Difficulty
                                </option>
                                <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                                <option value="Medium" {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>Medium
                                </option>
                                <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
                            </select>
                            <div class="invalid-feedback">Please select a difficulty level.</div>
                        </div>
                        <div class="mb-3">
                            <label for="audioFile" class="form-label">Upload Audio (MP3/WAV)</label>
                            <input type="file" class="form-control" id="audioFile" name="audio_file"
                                accept="audio/mpeg,audio/wav">
                            <small id="audioFileHelp" class="form-text text-muted">Upload an audio file for Listening
                                section questions only.</small>
                            @error('audio_file')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="imageFile" class="form-label">Upload Picture (JPG/PNG)</label>
                            <input type="file" class="form-control" id="imageFile" name="image_file"
                                accept="image/jpeg,image/png">
                            <small id="imageFileHelp" class="form-text text-muted">Upload an image for Structure or
                                Reading section questions only.</small>
                            @error('image_file')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="questionText" class="form-label">Question Text <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="questionText" name="question_text" rows="3" required>{{ old('question_text') }}</textarea>
                            <div class="invalid-feedback">Please enter the question text.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Answer Options <span class="text-danger">*</span></label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">A</span>
                                        <input type="text" class="form-control" name="option_a"
                                            value="{{ old('option_a') }}" required>
                                        <div class="invalid-feedback">Please enter option A.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">B</span>
                                        <input type="text" class="form-control" name="option_b"
                                            value="{{ old('option_b') }}" required>
                                        <div class="invalid-feedback">Please enter option B.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">C</span>
                                        <input type="text" class="form-control" name="option_c"
                                            value="{{ old('option_c') }}" required>
                                        <div class="invalid-feedback">Please enter option C.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">D</span>
                                        <input type="text" class="form-control" name="option_d"
                                            value="{{ old('option_d') }}" required>
                                        <div class="invalid-feedback">Please enter option D.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="correctAnswer" class="form-label">Correct Answer <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="correctAnswer" name="correct_answer" required>
                                <option value="" {{ old('correct_answer') == '' ? 'selected' : '' }}>Select Correct
                                    Answer</option>
                                <option value="A" {{ old('correct_answer') == 'A' ? 'selected' : '' }}>Option A
                                </option>
                                <option value="B" {{ old('correct_answer') == 'B' ? 'selected' : '' }}>Option B
                                </option>
                                <option value="C" {{ old('correct_answer') == 'C' ? 'selected' : '' }}>Option C
                                </option>
                                <option value="D" {{ old('correct_answer') == 'D' ? 'selected' : '' }}>Option D
                                </option>
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

    <div class="modal fade" id="viewQuestionModal" tabindex="-1" aria-labelledby="viewQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="viewQuestionModalLabel">View Question Details</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="viewErrorMessage" class="alert alert-danger d-none"></div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6 class="text-muted">Section:</h6>
                            <p class="fw-bold" id="view-section">
                                @if(isset($viewQuestion))
                                    {{ $viewQuestion->section ?? 'N/A' }}
                                @else
                                    N/A
                                @endif
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">Difficulty Level:</h6>
                            <span class="badge" id="view-difficulty">
                                @if(isset($viewQuestion))
                                    @if($viewQuestion->difficulty == 'Easy')
                                        <span class="badge bg-success">Easy</span>
                                    @elseif($viewQuestion->difficulty == 'Medium')
                                        <span class="badge bg-warning text-dark">Medium</span>
                                    @elseif($viewQuestion->difficulty == 'Hard')
                                        <span class="badge bg-danger">Hard</span>
                                    @else
                                        N/A
                                    @endif
                                @else
                                    N/A
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="mb-3" id="view-audio" style="display: none;">
                        <h6 class="text-muted">Audio:</h6>
                        <audio controls class="w-100 mb-3" id="view-audio-player">
                            <source src="@if(isset($viewQuestion) && $viewQuestion->section == 'Listening' && $viewQuestion->audio_file){{ Storage::url($viewQuestion->audio_file) }}@endif" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="mb-3" id="view-image" style="display: none;">
                        <h6 class="text-muted">Image:</h6>
                        <img id="view-image-src" src="@if(isset($viewQuestion) && in_array($viewQuestion->section, ['Structure', 'Reading']) && $viewQuestion->image_file){{ Storage::url($viewQuestion->image_file) }}@endif" alt="Question Image" class="img-fluid mb-3" style="max-height: 300px;" onerror="this.src='/images/placeholder.png';">
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted">Question:</h6>
                        <div class="card bg-light p-3">
                            <p class="mb-0" id="view-question-text">
                                @if(isset($viewQuestion))
                                    {{ $viewQuestion->question_text ?? 'N/A' }}
                                @else
                                    N/A
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted">Answer Options:</h6>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body py-2 px-3">
                                        <span class="fw-bold me-2">A:</span>
                                        <span id="view-option-a">
                                            @if(isset($viewQuestion))
                                                {{ $viewQuestion->option_a ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body py-2 px-3">
                                        <span class="fw-bold me-2">B:</span>
                                        <span id="view-option-b">
                                            @if(isset($viewQuestion))
                                                {{ $viewQuestion->option_b ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body py-2 px-3">
                                        <span class="fw-bold me-2">C:</span>
                                        <span id="view-option-c">
                                            @if(isset($viewQuestion))
                                                {{ $viewQuestion->option_c ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body py-2 px-3">
                                        <span class="fw-bold me-2">D:</span>
                                        <span id="view-option-d">
                                            @if(isset($viewQuestion))
                                                {{ $viewQuestion->option_d ?? 'N/A' }}
                                            @else
                                                N/A
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted">Correct Answer:</h6>
                        <p class="fw-bold text-success" id="view-correct-answer">
                            @if(isset($viewQuestion))
                                {{ $viewQuestion->correct_answer ? 'Option ' . $viewQuestion->correct_answer : 'N/A' }}
                            @else
                                N/A
                            @endif
                        </p>
                    </div>
                    <div class="mb-3" id="view-explanation" style="display: none;">
                        <h6 class="text-muted">Explanation:</h6>
                        <div class="card bg-light p-3">
                            <p class="mb-0" id="view-explanation-text">
                                @if(isset($viewQuestion) && $viewQuestion->explanation)
                                    {{ $viewQuestion->explanation }}
                                @else
                                    N/A
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning edit-from-view" data-id="@if(isset($viewQuestion)){{ $viewQuestion->id }}@endif">Edit Question</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editQuestionModalLabel">Edit Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editQuestionForm" method="POST" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="question_id" id="editQuestionId">
                    <div class="modal-body">
                        <div id="editFormMessages"></div>
                        <div class="mb-3">
                            <label for="editSection" class="form-label">Section <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="editSection" name="section" required>
                                <option value="">Select Section</option>
                                <option value="Listening">Listening</option>
                                <option value="Structure">Structure & Written Expression</option>
                                <option value="Reading">Reading</option>
                            </select>
                            <div class="invalid-feedback">Please select a section.</div>
                        </div>
                        <div class="mb-3">
                            <label for="editDifficulty" class="form-label">Difficulty Level <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="editDifficulty" name="difficulty" required>
                                <option value="">Select Difficulty</option>
                                <option value="Easy">Easy</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                            <div class="invalid-feedback">Please select a difficulty level.</div>
                        </div>
                        <div class="mb-3">
                            <label for="editAudioFile" class="form-label">Upload Audio (MP3/WAV)</label>
                            <input type="file" class="form-control" id="editAudioFile" name="audio_file"
                                accept="audio/mpeg,audio/wav">
                            <small id="editAudioFileHelp" class="form-text text-muted"></small>
                            @error('audio_file')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="editImageFile" class="form-label">Upload Picture (JPG/PNG)</label>
                            <input type="file" class="form-control" id="editImageFile" name="image_file"
                                accept="image/jpeg,image/png">
                            <small id="editImageFileHelp" class="form-text text-muted"></small>
                            @error('image_file')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="editQuestionText" class="form-label">Question Text <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="editQuestionText" name="question_text" rows="3" required></textarea>
                            <div class="invalid-feedback">Please enter the question text.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Answer Options <span class="text-danger">*</span></label>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">A</span>
                                        <input type="text" class="form-control" id="editOptionA" name="option_a"
                                            required>
                                        <div class="invalid-feedback">Please enter option A.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">B</span>
                                        <input type="text" class="form-control" id="editOptionB" name="option_b"
                                            required>
                                        <div class="invalid-feedback">Please enter option B.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">C</span>
                                        <input type="text" class="form-control" id="editOptionC" name="option_c"
                                            required>
                                        <div class="invalid-feedback">Please enter option C.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">D</span>
                                        <input type="text" class="form-control" id="editOptionD" name="option_d"
                                            required>
                                        <div class="invalid-feedback">Please enter option D.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editCorrectAnswer" class="form-label">Correct Answer <span
                                    class="text-danger">*</span></label>
                            <select class="form-select" id="editCorrectAnswer" name="correct_answer" required>
                                <option value="">Select Correct Answer</option>
                                <option value="A">Option A</option>
                                <option value="B">Option B</option>
                                <option value="C">Option C</option>
                                <option value="D">Option D</option>
                            </select>
                            <div class="invalid-feedback">Please select the correct answer.</div>
                        </div>
                        <div class="mb-3">
                            <label for="editExplanation" class="form-label">Explanation (Optional)</label>
                            <textarea class="form-control" id="editExplanation" name="explanation" rows="2"></textarea>
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

    <div class="modal fade" id="editTimingModal" tabindex="-1" aria-labelledby="editTimingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editTimingModalLabel">Update Test Timing</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form action="{{ route('test.timing.update') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="listeningTime" class="form-label">Listening Section Time (minutes) <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="listeningTime" name="listening_time"
                                min="5" max="120" value="{{ old('listening_time', $listeningTime) }}"
                                required>
                            <div class="invalid-feedback">Please enter a valid time (5-120 minutes).</div>
                        </div>
                        <div class="mb-3">
                            <label for="structureTime" class="form-label">Structure Section Time (minutes) <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="structureTime" name="structure_time"
                                min="5" max="120" value="{{ old('structure_time', $structureTime) }}"
                                required>
                            <div class="invalid-feedback">Please enter a valid time (5-120 minutes).</div>
                        </div>
                        <div class="mb-3">
                            <label for="readingTime" class="form-label">Reading Section Time (minutes) <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="readingTime" name="reading_time"
                                min="5" max="120" value="{{ old('reading_time', $readingTime) }}" required>
                            <div class="invalid-feedback">Please enter a valid time (5-120 minutes).</div>
                        </div>
                        <div class="alert alert-info">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-info-circle me-2"></i>
                                <p class="mb-0">Total test duration: <strong
                                        id="totalTestTime">{{ old('listening_time', $listeningTime) + old('structure_time', $structureTime) + old('reading_time', $readingTime) }}</strong>
                                    minutes</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Logika untuk update total time
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

            // Form validation
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

            // Logika untuk View Question Modal
            const viewModal = document.getElementById('viewQuestionModal');
            viewModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const questionId = button.getAttribute('data-id');
                const errorMessage = document.getElementById('viewErrorMessage');
                errorMessage.classList.add('d-none');
                errorMessage.textContent = '';

                // Log the question ID being fetched
                console.log('Fetching details for question ID:', questionId);

                // Reset modal fields
                document.getElementById('view-section').textContent = 'N/A';
                const difficultyBadge = document.getElementById('view-difficulty');
                difficultyBadge.textContent = 'N/A';
                difficultyBadge.className = 'badge';
                document.getElementById('view-question-text').textContent = 'N/A';
                document.getElementById('view-option-a').textContent = 'N/A';
                document.getElementById('view-option-b').textContent = 'N/A';
                document.getElementById('view-option-c').textContent = 'N/A';
                document.getElementById('view-option-d').textContent = 'N/A';
                document.getElementById('view-correct-answer').textContent = 'N/A';
                document.getElementById('view-audio').style.display = 'none';
                document.getElementById('view-image').style.display = 'none';
                document.getElementById('view-explanation').style.display = 'none';
                document.querySelector('.edit-from-view').setAttribute('data-id', '');

                // Fetch data via AJAX
                fetch(`/course-management/${questionId}/details`, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => {
                    console.log('AJAX Response Status:', response.status);
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('AJAX Response Data:', data);
                    if (!data.success) {
                        throw new Error(data.message || 'Failed to load question details.');
                    }

                    const question = data.data;

                    // Populate Section
                    document.getElementById('view-section').textContent = question.section;

                    // Populate Difficulty
                    const difficultyBadge = document.getElementById('view-difficulty');
                    difficultyBadge.textContent = question.difficulty;
                    difficultyBadge.className = 'badge ' + (question.difficulty === 'Easy' ? 'bg-success' :
                        question.difficulty === 'Medium' ? 'bg-warning text-dark' : 'bg-danger');

                    // Populate Audio
                    const audioSection = document.getElementById('view-audio');
                    const audioPlayer = document.getElementById('view-audio-player');
                    if (question.section === 'Listening' && question.audio_file) {
                        audioPlayer.querySelector('source').src = question.audio_file;
                        audioPlayer.load();
                        audioSection.style.display = 'block';
                    } else {
                        audioSection.style.display = 'none';
                    }

                    // Populate Image
                    const imageSection = document.getElementById('view-image');
                    const imageSrc = document.getElementById('view-image-src');
                    if (['Structure', 'Reading'].includes(question.section) && question.image_file) {
                        imageSrc.src = question.image_file;
                        imageSection.style.display = 'block';
                    } else {
                        imageSrc.src = '';
                        imageSection.style.display = 'none';
                    }

                    // Populate Question Text
                    document.getElementById('view-question-text').textContent = question.question_text;

                    // Populate Answer Options
                    document.getElementById('view-option-a').textContent = question.option_a;
                    document.getElementById('view-option-b').textContent = question.option_b;
                    document.getElementById('view-option-c').textContent = question.option_c;
                    document.getElementById('view-option-d').textContent = question.option_d;

                    // Populate Correct Answer
                    document.getElementById('view-correct-answer').textContent = question.correct_answer !== 'N/A' ? `Option ${question.correct_answer}` : 'N/A';

                    // Populate Explanation
                    const explanationSection = document.getElementById('view-explanation');
                    const explanationText = document.getElementById('view-explanation-text');
                    if (question.explanation && question.explanation !== '') {
                        explanationText.textContent = question.explanation;
                        explanationSection.style.display = 'block';
                    } else {
                        explanationSection.style.display = 'none';
                    }

                    // Set Edit Button ID
                    document.querySelector('.edit-from-view').setAttribute('data-id', question.id);
                })
                .catch(error => {
                    console.error('Error fetching question details:', error);
                    errorMessage.textContent = error.message || 'Failed to load question details. Please try again.';
                    errorMessage.classList.remove('d-none');
                });
            });

            // Logika untuk Edit Question Modal
            const editModal = document.getElementById('editQuestionModal');
            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const data = {
                    id: button.getAttribute('data-id'),
                    section: button.getAttribute('data-section'),
                    difficulty: button.getAttribute('data-difficulty'),
                    questionText: decodeURIComponent(button.getAttribute('data-question-text')) || '',
                    optionA: decodeURIComponent(button.getAttribute('data-option-a')) || '',
                    optionB: decodeURIComponent(button.getAttribute('data-option-b')) || '',
                    optionC: decodeURIComponent(button.getAttribute('data-option-c')) || '',
                    optionD: decodeURIComponent(button.getAttribute('data-option-d')) || '',
                    correctAnswer: button.getAttribute('data-correct-answer'),
                    audioFile: button.getAttribute('data-audio-file'),
                    imageFile: button.getAttribute('data-image-file'),
                    explanation: decodeURIComponent(button.getAttribute('data-explanation')) || ''
                };

                const editForm = document.getElementById('editQuestionForm');
                editForm.action = `/course-management/${data.id}`;
                document.getElementById('editQuestionId').value = data.id || '';
                document.getElementById('editSection').value = data.section || '';
                document.getElementById('editDifficulty').value = data.difficulty || '';
                document.getElementById('editQuestionText').value = data.questionText || '';
                document.getElementById('editOptionA').value = data.optionA || '';
                document.getElementById('editOptionB').value = data.optionB || '';
                document.getElementById('editOptionC').value = data.optionC || '';
                document.getElementById('editOptionD').value = data.optionD || '';
                document.getElementById('editCorrectAnswer').value = data.correctAnswer || '';
                document.getElementById('editExplanation').value = data.explanation || '';

                const audioHelp = document.getElementById('editAudioFileHelp');
                const imageHelp = document.getElementById('editImageFileHelp');
                const audioInput = document.getElementById('editAudioFile');
                const imageInput = document.getElementById('editImageFile');

                audioHelp.textContent = data.audioFile ? `Current: ${data.audioFile.split('/').pop()}` :
                    'No audio uploaded';
                imageHelp.textContent = data.imageFile ? `Current: ${data.imageFile.split('/').pop()}` :
                    'No image uploaded';

                toggleEditUploadFields(data.section, audioInput, imageInput, audioHelp, imageHelp);
                document.getElementById('editFormMessages').innerHTML = '';
            });

            const editSectionSelect = document.getElementById('editSection');
            const editAudioFileInput = document.getElementById('editAudioFile');
            const editImageFileInput = document.getElementById('editImageFile');
            const editAudioFileHelp = document.getElementById('editAudioFileHelp');
            const editImageFileHelp = document.getElementById('editImageFileHelp');

            function toggleEditUploadFields(section, audioInput, imageInput, audioHelp, imageHelp) {
                const currentAudio = audioHelp.textContent.includes('Current') ? audioHelp.textContent.split(
                    'Current: ')[1] : 'No audio uploaded';
                const currentImage = imageHelp.textContent.includes('Current') ? imageHelp.textContent.split(
                    'Current: ')[1] : 'No image uploaded';

                if (section === 'Listening') {
                    audioInput.disabled = false;
                    imageInput.disabled = true;
                    audioHelp.textContent =
                        `Current: ${currentAudio} | Upload an audio file for Listening questions.`;
                    imageHelp.textContent =
                        `Current: ${currentImage} | Image upload is not available for Listening section.`;
                    audioInput.value = '';
                    imageInput.value = '';
                } else if (section === 'Structure' || section === 'Reading') {
                    audioInput.disabled = true;
                    imageInput.disabled = false;
                    audioHelp.textContent =
                        `Current: ${currentAudio} | Audio upload is only available for Listening section.`;
                    imageHelp.textContent =
                        `Current: ${currentImage} | Upload an image for Structure or Reading questions.`;
                    audioInput.value = '';
                    imageInput.value = '';
                } else {
                    audioInput.disabled = true;
                    imageInput.disabled = true;
                    audioHelp.textContent = `Current: ${currentAudio} | Please select a section to enable uploads.`;
                    imageHelp.textContent = `Current: ${currentImage} | Please select a section to enable uploads.`;
                    audioInput.value = '';
                    imageInput.value = '';
                }
            }

            if (editSectionSelect) {
                editSectionSelect.addEventListener('change', () => {
                    toggleEditUploadFields(editSectionSelect.value, editAudioFileInput, editImageFileInput,
                        editAudioFileHelp, editImageFileHelp);
                });
            }

            // Logika untuk Edit dari View Modal
            document.querySelector('.edit-from-view').addEventListener('click', function() {
                const questionId = this.getAttribute('data-id');
                const editButton = document.querySelector(`.edit-question-btn[data-id="${questionId}"]`);
                if (editButton) {
                    bootstrap.Modal.getInstance(viewModal).hide();
                    editButton.click();
                }
            });

            // Logika untuk Edit Form Submission
            const editForm = document.getElementById('editQuestionForm');
            editForm.addEventListener('submit', function(event) {
                event.preventDefault();
                if (!editForm.checkValidity()) {
                    editForm.classList.add('was-validated');
                    return;
                }

                const formData = new FormData(editForm);
                const questionId = formData.get('question_id');
                const actionUrl = `/course-management/${questionId}`;

                fetch(actionUrl, {
                        method: 'POST', // Laravel handles _method=PUT
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        const messagesContainer = document.getElementById('editFormMessages');
                        messagesContainer.innerHTML = '';

                        if (data.success) {
                            messagesContainer.innerHTML = `
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    ${data.message}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            `;

                            const row = document.querySelector(
                                `#questionsTable tr[data-id="${questionId}"]`);
                            if (row) {
                                const updatedQuestion = data.question;
                                const cells = row.cells;

                                cells[2].textContent = updatedQuestion.question_text.substring(0, 60) +
                                    (updatedQuestion.question_text.length > 60 ? '...' : '');
                                const correctOption = updatedQuestion[
                                    `option_${updatedQuestion.correct_answer.toLowerCase()}`];
                                cells[3].textContent =
                                    `Option ${updatedQuestion.correct_answer}: ${correctOption.substring(0, 30)}${correctOption.length > 30 ? '...' : ''}`;
                                cells[4].innerHTML = updatedQuestion.difficulty === 'Easy' ?
                                    '<span class="badge bg-success">Easy</span>' :
                                    updatedQuestion.difficulty === 'Medium' ?
                                    '<span class="badge bg-warning text-dark">Medium</span>' :
                                    '<span class="badge bg-danger">Hard</span>';

                                let mediaHtml = '<span class="text-muted">No media</span>';
                                if (updatedQuestion.section === 'Listening' && updatedQuestion
                                    .audio_file) {
                                    mediaHtml = `<audio controls class="w-100" style="max-width: 200px;">
                                            <source src="${updatedQuestion.audio_file}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>`;
                                } else if (['Structure', 'Reading'].includes(updatedQuestion.section) &&
                                    updatedQuestion.image_file) {
                                    mediaHtml =
                                        `<img src="${updatedQuestion.image_file}" alt="Question Image" class="img-fluid" style="max-width: 100px; max-height: 100px;" onerror="this.src='/images/placeholder.png';">`;
                                }
                                cells[1].innerHTML = mediaHtml;

                                const editButton = row.querySelector('.edit-question-btn');
                                editButton.setAttribute('data-section', updatedQuestion.section || '');
                                editButton.setAttribute('data-difficulty', updatedQuestion.difficulty ||
                                    '');
                                editButton.setAttribute('data-question-text', encodeURIComponent(
                                    updatedQuestion.question_text || ''));
                                editButton.setAttribute('data-option-a', encodeURIComponent(
                                    updatedQuestion.option_a || ''));
                                editButton.setAttribute('data-option-b', encodeURIComponent(
                                    updatedQuestion.option_b || ''));
                                editButton.setAttribute('data-option-c', encodeURIComponent(
                                    updatedQuestion.option_c || ''));
                                editButton.setAttribute('data-option-d', encodeURIComponent(
                                    updatedQuestion.option_d || ''));
                                editButton.setAttribute('data-correct-answer', updatedQuestion
                                    .correct_answer || '');
                                editButton.setAttribute('data-audio-file', updatedQuestion.audio_file ||
                                    '');
                                editButton.setAttribute('data-image-file', updatedQuestion.image_file ||
                                    '');
                                editButton.setAttribute('data-explanation', encodeURIComponent(
                                    updatedQuestion.explanation || ''));
                            }

                            setTimeout(() => {
                                bootstrap.Modal.getInstance(editModal).hide();
                                editForm.classList.remove('was-validated');
                            }, 1000);
                        } else {
                            const errors = data.errors || {
                                general: ['Failed to update question']
                            };
                            messagesContainer.innerHTML = `
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <ul class="mb-0">
                                        ${Object.values(errors).flat().map(error => `<li>${error}</li>`).join('')}
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            `;
                        }
                    })
                    .catch(error => {
                        const messagesContainer = document.getElementById('editFormMessages');
                        messagesContainer.innerHTML = `
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                An error occurred while updating the question: ${error.message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                    });
            });
        });
    </script>
@endsection
