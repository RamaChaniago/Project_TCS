@extends('Admin.MainDashboardAdmin')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-white p-4 border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-1">TOEFL Exam Questions Management</h4>
                            <div class="text-muted">Create, view, update, and delete exam questions for TOEFL ITP test</div>
                        </div>
                        <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addQuestionModal">
                            <i class="bi bi-plus-circle me-2"></i>Add New Question
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Tabs -->
    <div class="card shadow-lg border-0 rounded-lg mb-4">
        <div class="card-body p-0">
            <ul class="nav nav-pills nav-fill p-3" id="sectionTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="listening-tab" data-bs-toggle="pill" data-bs-target="#listeningSection" type="button" role="tab" aria-controls="listeningSection" aria-selected="true">
                        <i class="bi bi-soundwave me-2"></i>Listening Comprehension
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="structure-tab" data-bs-toggle="pill" data-bs-target="#structureSection" type="button" role="tab" aria-controls="structureSection" aria-selected="false">
                        <i class="bi bi-diagram-3 me-2"></i>Structure & Written Expression
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reading-tab" data-bs-toggle="pill" data-bs-target="#readingSection" type="button" role="tab" aria-controls="readingSection" aria-selected="false">
                        <i class="bi bi-book me-2"></i>Reading Comprehension
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Display flash messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Tab Content -->
    <div class="tab-content" id="sectionTabsContent">
        <!-- Listening Comprehension Section -->
        <div class="tab-pane fade show active" id="listeningSection" role="tabpanel" aria-labelledby="listening-tab">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow border-0 rounded-lg">
                        <div class="card-header bg-white p-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <i class="bi bi-soundwave me-2 text-primary"></i>Listening Comprehension Questions
                            </h5>
                            <div>
                                <form action="" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search_listening" placeholder="Search questions..." value="{{ request('search_listening') }}">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col" width="5%">#</th>
                                            <th scope="col" width="15%">Audio</th>
                                            <th scope="col" width="35%">Question</th>
                                            <th scope="col" width="15%">Correct Answer</th>
                                            <th scope="col" width="15%">Last Updated</th>
                                            <th scope="col" width="15%">Actions</th>
                                        </tr>
                                    </thead>
                                    {{-- <tbody>
                                        @forelse($listeningQuestions as $question)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-sm btn-outline-primary rounded-circle me-2" onclick="playAudio('{{ Storage::url('audio/' . $question->audio_file) }}')">
                                                        <i class="bi bi-play-fill"></i>
                                                    </button>
                                                    <span class="small text-muted">{{ $question->audio_file }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">{{ $question->question_text }}</p>
                                                <span class="badge bg-info">Part {{ $question->listening_part }}</span>
                                            </td>
                                            <td><span class="badge bg-success">{{ $question->correct_answer }}</span></td>
                                            <td><small>{{ $question->updated_at->format('Y-m-d H:i') }}</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.toefl-questions.show', $question->id) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" 
                                                            data-bs-toggle="modal" data-bs-target="#editQuestionModal" 
                                                            data-question-id="{{ $question->id }}"
                                                            data-question-text="{{ $question->question_text }}"
                                                            data-option-a="{{ $question->option_a }}"
                                                            data-option-b="{{ $question->option_b }}"
                                                            data-option-c="{{ $question->option_c }}"
                                                            data-option-d="{{ $question->option_d }}"
                                                            data-correct-answer="{{ $question->correct_answer }}"
                                                            data-difficulty="{{ $question->difficulty }}"
                                                            data-notes="{{ $question->notes }}"
                                                            data-listening-part="{{ $question->listening_part }}"
                                                            data-audio-file="{{ $question->audio_file }}">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <form action="{{ route('admin.toefl-questions.destroy', $question->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-outline-danger delete-confirm" 
                                                                data-question-text="{{ $question->question_text }}">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center py-4">No listening questions found</td>
                                        </tr>
                                        @endforelse
                                    </tbody> --}}
                                </table>
                            </div>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                {{-- <div class="small text-muted">
                                    Showing {{ $listeningQuestions->firstItem() ?? 0 }}-{{ $listeningQuestions->lastItem() ?? 0 }} of {{ $listeningQuestions->total() }} questions
                                </div>
                                {{ $listeningQuestions->appends(['structure_page' => request('structure_page'), 'reading_page' => request('reading_page')])->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Structure & Written Expression Section -->
        <div class="tab-pane fade" id="structureSection" role="tabpanel" aria-labelledby="structure-tab">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow border-0 rounded-lg">
                        <div class="card-header bg-white p-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <i class="bi bi-diagram-3 me-2 text-primary"></i>Structure & Written Expression Questions
                            </h5>
                            <div>
                                <form action="{{ route('admin.toefl-exam') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search_structure" placeholder="Search questions..." value="{{ request('search_structure') }}">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col" width="5%">#</th>
                                            <th scope="col" width="50%">Question</th>
                                            <th scope="col" width="15%">Correct Answer</th>
                                            <th scope="col" width="15%">Last Updated</th>
                                            <th scope="col" width="15%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($structureQuestions as $question)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <p class="mb-1">{{ $question->question_text }}</p>
                                                <span class="badge bg-info">{{ ucfirst($question->structure_type) }}</span>
                                            </td>
                                            <td><span class="badge bg-success">{{ $question->correct_answer }}</span></td>
                                            <td><small>{{ $question->updated_at->format('Y-m-d H:i') }}</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.toefl-questions.show', $question->id) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" 
                                                            data-bs-toggle="modal" data-bs-target="#editQuestionModal" 
                                                            data-question-id="{{ $question->id }}"
                                                            data-question-text="{{ $question->question_text }}"
                                                            data-option-a="{{ $question->option_a }}"
                                                            data-option-b="{{ $question->option_b }}"
                                                            data-option-c="{{ $question->option_c }}"
                                                            data-option-d="{{ $question->option_d }}"
                                                            data-correct-answer="{{ $question->correct_answer }}"
                                                            data-difficulty="{{ $question->difficulty }}"
                                                            data-notes="{{ $question->notes }}"
                                                            data-structure-type="{{ $question->structure_type }}">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <form action="{{ route('admin.toefl-questions.destroy', $question->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-outline-danger delete-confirm" 
                                                                data-question-text="{{ $question->question_text }}">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4">No structure questions found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                <div class="small text-muted">
                                    Showing {{ $structureQuestions->firstItem() ?? 0 }}-{{ $structureQuestions->lastItem() ?? 0 }} of {{ $structureQuestions->total() }} questions
                                </div>
                                {{ $structureQuestions->appends(['listening_page' => request('listening_page'), 'reading_page' => request('reading_page')])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reading Comprehension Section -->
        <div class="tab-pane fade" id="readingSection" role="tabpanel" aria-labelledby="reading-tab">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow border-0 rounded-lg">
                        <div class="card-header bg-white p-3 d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">
                                <i class="bi bi-book me-2 text-primary"></i>Reading Comprehension Questions
                            </h5>
                            <div>
                                <form action="{{ route('admin.toefl-exam') }}" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search_reading" placeholder="Search questions..." value="{{ request('search_reading') }}">
                                        <button class="btn btn-outline-secondary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th scope="col" width="5%">#</th>
                                            <th scope="col" width="20%">Passage</th>
                                            <th scope="col" width="30%">Question</th>
                                            <th scope="col" width="15%">Correct Answer</th>
                                            <th scope="col" width="15%">Last Updated</th>
                                            <th scope="col" width="15%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($readingQuestions as $question)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <span class="badge rounded-pill bg-secondary">Passage #{{ $question->readingPassage->id }}</span>
                                                <small class="d-block text-muted mt-1">{{ $question->readingPassage->topic }}</small>
                                            </td>
                                            <td>
                                                <p class="mb-1">{{ $question->question_text }}</p>
                                            </td>
                                            <td><span class="badge bg-success">{{ $question->correct_answer }}</span></td>
                                            <td><small>{{ $question->updated_at->format('Y-m-d H:i') }}</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.toefl-questions.show', $question->id) }}" class="btn btn-sm btn-outline-primary">
                                                        <a href="{{ route('admin.toefl-questions.show', $question->id) }}" class="btn btn-sm btn-outline-primary">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-sm btn-outline-warning" 
                                                                data-bs-toggle="modal" data-bs-target="#editQuestionModal" 
                                                                data-question-id="{{ $question->id }}"
                                                                data-question-text="{{ $question->question_text }}"
                                                                data-option-a="{{ $question->option_a }}"
                                                                data-option-b="{{ $question->option_b }}"
                                                                data-option-c="{{ $question->option_c }}"
                                                                data-option-d="{{ $question->option_d }}"
                                                                data-correct-answer="{{ $question->correct_answer }}"
                                                                data-difficulty="{{ $question->difficulty }}"
                                                                data-notes="{{ $question->notes }}"
                                                                data-passage-id="{{ $question->reading_passage_id }}">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                        <form action="{{ route('admin.toefl-questions.destroy', $question->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-sm btn-outline-danger delete-confirm" 
                                                                    data-question-text="{{ $question->question_text }}">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-4">No reading questions found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                    <div class="small text-muted">
                                        Showing {{ $readingQuestions->firstItem() ?? 0 }}-{{ $readingQuestions->lastItem() ?? 0 }} of {{ $readingQuestions->total() }} questions
                                    </div>
                                    {{ $readingQuestions->appends(['listening_page' => request('listening_page'), 'structure_page' => request('structure_page')])->links() }}
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addQuestionModalLabel">Add New TOEFL Question</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Question Type Selection -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Select Question Type</label>
                        <div class="btn-group w-100" role="group" aria-label="Question Type">
                            <input type="radio" class="btn-check" name="questionType" id="listeningType" value="listening" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" for="listeningType">
                                <i class="bi bi-soundwave me-2"></i>Listening
                            </label>
                            
                            <input type="radio" class="btn-check" name="questionType" id="structureType" value="structure" autocomplete="off">
                            <label class="btn btn-outline-primary" for="structureType">
                                <i class="bi bi-diagram-3 me-2"></i>Structure
                            </label>
                            
                            <input type="radio" class="btn-check" name="questionType" id="readingType" value="reading" autocomplete="off">
                            <label class="btn btn-outline-primary" for="readingType">
                                <i class="bi bi-book me-2"></i>Reading
                            </label>
                        </div>
                    </div>
    
                    <!-- Form Container for Dynamic Forms -->
                    <div id="questionFormContainer">
                        <!-- Listening Question Form (Default) -->
                        <form id="listeningForm" action="{{ route('admin.toefl-questions.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="section" value="listening">
                            
                            <div class="mb-3">
                                <label for="listening_part" class="form-label">Listening Part</label>
                                <select class="form-select" id="listening_part" name="listening_part" required>
                                    <option value="" selected disabled>Select part...</option>
                                    <option value="A">Part A - Short Conversations</option>
                                    <option value="B">Part B - Extended Conversations</option>
                                    <option value="C">Part C - Lectures/Talks</option>
                                </select>
                            </div>
    
                            <div class="mb-3">
                                <label for="audio_file" class="form-label">Audio File</label>
                                <input type="file" class="form-control" id="audio_file" name="audio_file" accept="audio/*" required>
                                <small class="text-muted">Upload MP3, WAV or OGG file (max 10MB)</small>
                            </div>
    
                            <div class="mb-3">
                                <label for="question_text" class="form-label">Question Text</label>
                                <textarea class="form-control" id="question_text" name="question_text" rows="3" required></textarea>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="option_a" class="form-label">Option A</label>
                                    <input type="text" class="form-control" id="option_a" name="option_a" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="option_b" class="form-label">Option B</label>
                                    <input type="text" class="form-control" id="option_b" name="option_b" required>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="option_c" class="form-label">Option C</label>
                                    <input type="text" class="form-control" id="option_c" name="option_c" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="option_d" class="form-label">Option D</label>
                                    <input type="text" class="form-control" id="option_d" name="option_d" required>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="correct_answer" class="form-label">Correct Answer</label>
                                    <select class="form-select" id="correct_answer" name="correct_answer" required>
                                        <option value="" selected disabled>Select answer...</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="difficulty" class="form-label">Difficulty Level</label>
                                    <select class="form-select" id="difficulty" name="difficulty" required>
                                        <option value="" selected disabled>Select level...</option>
                                        <option value="easy">Easy</option>
                                        <option value="medium">Medium</option>
                                        <option value="hard">Hard</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <label for="notes" class="form-label">Notes (Optional)</label>
                                <textarea class="form-control" id="notes" name="notes" rows="2"></textarea>
                                <small class="text-muted">Add any additional notes about this question</small>
                            </div>
    
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-2"></i>Add Listening Question
                                </button>
                            </div>
                        </form>
    
                        <!-- Structure Question Form (Hidden by Default) -->
                        <form id="structureForm" action="{{ route('admin.toefl-questions.store') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="section" value="structure">
                            
                            <div class="mb-3">
                                <label for="structure_type" class="form-label">Structure Type</label>
                                <select class="form-select" id="structure_type" name="structure_type" required>
                                    <option value="" selected disabled>Select type...</option>
                                    <option value="completion">Sentence Completion</option>
                                    <option value="error">Error Identification</option>
                                </select>
                            </div>
    
                            <div class="mb-3">
                                <label for="question_text" class="form-label">Question Text</label>
                                <textarea class="form-control" id="structure_question_text" name="question_text" rows="3" required></textarea>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="structure_option_a" class="form-label">Option A</label>
                                    <input type="text" class="form-control" id="structure_option_a" name="option_a" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="structure_option_b" class="form-label">Option B</label>
                                    <input type="text" class="form-control" id="structure_option_b" name="option_b" required>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="structure_option_c" class="form-label">Option C</label>
                                    <input type="text" class="form-control" id="structure_option_c" name="option_c" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="structure_option_d" class="form-label">Option D</label>
                                    <input type="text" class="form-control" id="structure_option_d" name="option_d" required>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="structure_correct_answer" class="form-label">Correct Answer</label>
                                    <select class="form-select" id="structure_correct_answer" name="correct_answer" required>
                                        <option value="" selected disabled>Select answer...</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="structure_difficulty" class="form-label">Difficulty Level</label>
                                    <select class="form-select" id="structure_difficulty" name="difficulty" required>
                                        <option value="" selected disabled>Select level...</option>
                                        <option value="easy">Easy</option>
                                        <option value="medium">Medium</option>
                                        <option value="hard">Hard</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <label for="structure_notes" class="form-label">Notes (Optional)</label>
                                <textarea class="form-control" id="structure_notes" name="notes" rows="2"></textarea>
                                <small class="text-muted">Add any additional notes about this question</small>
                            </div>
    
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-2"></i>Add Structure Question
                                </button>
                            </div>
                        </form>
    
                        <!-- Reading Question Form (Hidden by Default) -->
                        <form id="readingForm" action="{{ route('admin.toefl-questions.store') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="section" value="reading">
                            
                            <div class="mb-3">
                                <label for="reading_passage_id" class="form-label">Reading Passage</label>
                                <select class="form-select" id="reading_passage_id" name="reading_passage_id" required>
                                    <option value="" selected disabled>Select passage...</option>
                                    @foreach($readingPassages as $passage)
                                        <option value="{{ $passage->id }}">Passage #{{ $passage->id }}: {{ $passage->topic }}</option>
                                    @endforeach
                                </select>
                                <div class="d-flex justify-content-end mt-1">
                                    <a href="{{ route('admin.toefl-passages.create') }}" class="btn btn-sm btn-outline-primary" target="_blank">
                                        <i class="bi bi-plus-circle me-1"></i>Add New Passage
                                    </a>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <label for="reading_question_text" class="form-label">Question Text</label>
                                <textarea class="form-control" id="reading_question_text" name="question_text" rows="3" required></textarea>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reading_option_a" class="form-label">Option A</label>
                                    <input type="text" class="form-control" id="reading_option_a" name="option_a" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="reading_option_b" class="form-label">Option B</label>
                                    <input type="text" class="form-control" id="reading_option_b" name="option_b" required>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reading_option_c" class="form-label">Option C</label>
                                    <input type="text" class="form-control" id="reading_option_c" name="option_c" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="reading_option_d" class="form-label">Option D</label>
                                    <input type="text" class="form-control" id="reading_option_d" name="option_d" required>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="reading_correct_answer" class="form-label">Correct Answer</label>
                                    <select class="form-select" id="reading_correct_answer" name="correct_answer" required>
                                        <option value="" selected disabled>Select answer...</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="reading_difficulty" class="form-label">Difficulty Level</label>
                                    <select class="form-select" id="reading_difficulty" name="difficulty" required>
                                        <option value="" selected disabled>Select level...</option>
                                        <option value="easy">Easy</option>
                                        <option value="medium">Medium</option>
                                        <option value="hard">Hard</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="mb-3">
                                <label for="reading_notes" class="form-label">Notes (Optional)</label>
                                <textarea class="form-control" id="reading_notes" name="notes" rows="2"></textarea>
                                <small class="text-muted">Add any additional notes about this question</small>
                            </div>
    
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-2"></i>Add Reading Question
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Edit Question Modal -->
    <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editQuestionModalLabel">Edit TOEFL Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editQuestionForm" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_section" name="section">
                        
                        <!-- Dynamic fields will be populated based on question type -->
                        <div id="editFormFields">
                            <!-- Fields will be inserted here via JavaScript -->
                        </div>
    
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-check-circle me-2"></i>Update Question
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the following question?</p>
                    <div class="alert alert-light border p-3">
                        <p id="questionToDelete" class="mb-0"></p>
                    </div>
                    <p class="text-danger mb-0"><strong>Warning:</strong> This action cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete Question</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Audio Player -->
    <audio id="audioPlayer" style="display: none;"></audio>
    
    <script>
        // Show/hide question forms based on selection
        document.addEventListener('DOMContentLoaded', function() {
            // Handle question type selection
            const typeRadios = document.querySelectorAll('input[name="questionType"]');
            const formContainer = document.getElementById('questionFormContainer');
            const forms = {
                listening: document.getElementById('listeningForm'),
                structure: document.getElementById('structureForm'),
                reading: document.getElementById('readingForm')
            };
            
            typeRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    // Hide all forms
                    Object.values(forms).forEach(form => {
                        form.style.display = 'none';
                    });
                    
                    // Show selected form
                    forms[this.value].style.display = 'block';
                });
            });
            
            // Handle delete confirmation
            const deleteButtons = document.querySelectorAll('.delete-confirm');
            const questionToDelete = document.getElementById('questionToDelete');
            const confirmDeleteBtn = document.getElementById('confirmDelete');
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'));
            
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const questionText = this.dataset.questionText;
                    const form = this.closest('form');
                    
                    questionToDelete.textContent = questionText;
                    confirmDeleteBtn.onclick = function() {
                        form.submit();
                        deleteModal.hide();
                    };
                    
                    deleteModal.show();
                });
            });
            
            // Audio player functionality
            window.playAudio = function(url) {
                const audioPlayer = document.getElementById('audioPlayer');
                audioPlayer.src = url;
                audioPlayer.play();
            };
            
            // Edit question modal
            const editModal = document.getElementById('editQuestionModal');
            if (editModal) {
                editModal.addEventListener('show.bs.modal', function(event) {
                    const button = event.relatedTarget;
                    const questionId = button.getAttribute('data-question-id');
                    const form = document.getElementById('editQuestionForm');
                    
                    // Set the form action URL
                    form.action = `/admin/toefl-questions/${questionId}`;
                    
                    // Determine section based on available attributes
                    let section;
                    if (button.hasAttribute('data-listening-part')) {
                        section = 'listening';
                        document.getElementById('edit_section').value = 'listening';
                        populateListeningForm(button);
                    } else if (button.hasAttribute('data-structure-type')) {
                        section = 'structure';
                        document.getElementById('edit_section').value = 'structure';
                        populateStructureForm(button);
                    } else if (button.hasAttribute('data-passage-id')) {
                        section = 'reading';
                        document.getElementById('edit_section').value = 'reading';
                        populateReadingForm(button);
                    }
                });
            }
            
            // Populate edit forms based on question type
            function populateListeningForm(button) {
                const fieldsContainer = document.getElementById('editFormFields');
                
                fieldsContainer.innerHTML = `
                    <div class="mb-3">
                        <label for="edit_listening_part" class="form-label">Listening Part</label>
                        <select class="form-select" id="edit_listening_part" name="listening_part" required>
                            <option value="A" ${button.getAttribute('data-listening-part') === 'A' ? 'selected' : ''}>Part A - Short Conversations</option>
                            <option value="B" ${button.getAttribute('data-listening-part') === 'B' ? 'selected' : ''}>Part B - Extended Conversations</option>
                            <option value="C" ${button.getAttribute('data-listening-part') === 'C' ? 'selected' : ''}>Part C - Lectures/Talks</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="edit_audio_file" class="form-label">Audio File</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-muted">${button.getAttribute('data-audio-file')}</span>
                            <input type="file" class="form-control" id="edit_audio_file" name="audio_file" accept="audio/*">
                        </div>
                        <small class="text-muted">Leave blank to keep current audio</small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="edit_question_text" class="form-label">Question Text</label>
                        <textarea class="form-control" id="edit_question_text" name="question_text" rows="3" required>${button.getAttribute('data-question-text')}</textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_a" class="form-label">Option A</label>
                            <input type="text" class="form-control" id="edit_option_a" name="option_a" value="${button.getAttribute('data-option-a')}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_b" class="form-label">Option B</label>
                            <input type="text" class="form-control" id="edit_option_b" name="option_b" value="${button.getAttribute('data-option-b')}" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_c" class="form-label">Option C</label>
                            <input type="text" class="form-control" id="edit_option_c" name="option_c" value="${button.getAttribute('data-option-c')}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_d" class="form-label">Option D</label>
                            <input type="text" class="form-control" id="edit_option_d" name="option_d" value="${button.getAttribute('data-option-d')}" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit_correct_answer" class="form-label">Correct Answer</label>
                            <select class="form-select" id="edit_correct_answer" name="correct_answer" required>
                                <option value="A" ${button.getAttribute('data-correct-answer') === 'A' ? 'selected' : ''}>A</option>
                                <option value="B" ${button.getAttribute('data-correct-answer') === 'B' ? 'selected' : ''}>B</option>
                                <option value="C" ${button.getAttribute('data-correct-answer') === 'C' ? 'selected' : ''}>C</option>
                                <option value="D" ${button.getAttribute('data-correct-answer') === 'D' ? 'selected' : ''}>D</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit_difficulty" class="form-label">Difficulty Level</label>
                            <select class="form-select" id="edit_difficulty" name="difficulty" required>
                                <option value="easy" ${button.getAttribute('data-difficulty') === 'easy' ? 'selected' : ''}>Easy</option>
                                <option value="medium" ${button.getAttribute('data-difficulty') === 'medium' ? 'selected' : ''}>Medium</option>
                                <option value="hard" ${button.getAttribute('data-difficulty') === 'hard' ? 'selected' : ''}>Hard</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="edit_notes" class="form-label">Notes (Optional)</label>
                        <textarea class="form-control" id="edit_notes" name="notes" rows="2">${button.getAttribute('data-notes') || ''}</textarea>
                    </div>
                `;
            }
            
            function populateStructureForm(button) {
                const fieldsContainer = document.getElementById('editFormFields');
                
                fieldsContainer.innerHTML = `
                    <div class="mb-3">
                        <label for="edit_structure_type" class="form-label">Structure Type</label>
                        <select class="form-select" id="edit_structure_type" name="structure_type" required>
                            <option value="completion" ${button.getAttribute('data-structure-type') === 'completion' ? 'selected' : ''}>Sentence Completion</option>
                            <option value="error" ${button.getAttribute('data-structure-type') === 'error' ? 'selected' : ''}>Error Identification</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="edit_question_text" class="form-label">Question Text</label>
                        <textarea class="form-control" id="edit_question_text" name="question_text" rows="3" required>${button.getAttribute('data-question-text')}</textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_a" class="form-label">Option A</label>
                            <input type="text" class="form-control" id="edit_option_a" name="option_a" value="${button.getAttribute('data-option-a')}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_b" class="form-label">Option B</label>
                            <input type="text" class="form-control" id="edit_option_b" name="option_b" value="${button.getAttribute('data-option-b')}" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_c" class="form-label">Option C</label>
                            <input type="text" class="form-control" id="edit_option_c" name="option_c" value="${button.getAttribute('data-option-c')}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit_option_d" class="
                            <div class="col-md-6 mb-3">
                        <label for="edit_option_d" class="form-label">Option D</label>
                        <input type="text" class="form-control" id="edit_option_d" name="option_d" value="${button.getAttribute('data-option-d')}" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edit_correct_answer" class="form-label">Correct Answer</label>
                        <select class="form-select" id="edit_correct_answer" name="correct_answer" required>
                            <option value="A" ${button.getAttribute('data-correct-answer') === 'A' ? 'selected' : ''}>A</option>
                            <option value="B" ${button.getAttribute('data-correct-answer') === 'B' ? 'selected' : ''}>B</option>
                            <option value="C" ${button.getAttribute('data-correct-answer') === 'C' ? 'selected' : ''}>C</option>
                            <option value="D" ${button.getAttribute('data-correct-answer') === 'D' ? 'selected' : ''}>D</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_difficulty" class="form-label">Difficulty Level</label>
                        <select class="form-select" id="edit_difficulty" name="difficulty" required>
                            <option value="easy" ${button.getAttribute('data-difficulty') === 'easy' ? 'selected' : ''}>Easy</option>
                            <option value="medium" ${button.getAttribute('data-difficulty') === 'medium' ? 'selected' : ''}>Medium</option>
                            <option value="hard" ${button.getAttribute('data-difficulty') === 'hard' ? 'selected' : ''}>Hard</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="edit_notes" class="form-label">Notes (Optional)</label>
                    <textarea class="form-control" id="edit_notes" name="notes" rows="2">${button.getAttribute('data-notes') || ''}</textarea>
                </div>
            `;
        }
        
        function populateReadingForm(button) {
            const fieldsContainer = document.getElementById('editFormFields');
            
            fieldsContainer.innerHTML = `
                <div class="mb-3">
                    <label for="edit_reading_passage_id" class="form-label">Reading Passage</label>
                    <select class="form-select" id="edit_reading_passage_id" name="reading_passage_id" required>
                        ${generatePassageOptions(button.getAttribute('data-passage-id'))}
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="edit_question_text" class="form-label">Question Text</label>
                    <textarea class="form-control" id="edit_question_text" name="question_text" rows="3" required>${button.getAttribute('data-question-text')}</textarea>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edit_option_a" class="form-label">Option A</label>
                        <input type="text" class="form-control" id="edit_option_a" name="option_a" value="${button.getAttribute('data-option-a')}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_option_b" class="form-label">Option B</label>
                        <input type="text" class="form-control" id="edit_option_b" name="option_b" value="${button.getAttribute('data-option-b')}" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edit_option_c" class="form-label">Option C</label>
                        <input type="text" class="form-control" id="edit_option_c" name="option_c" value="${button.getAttribute('data-option-c')}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_option_d" class="form-label">Option D</label>
                        <input type="text" class="form-control" id="edit_option_d" name="option_d" value="${button.getAttribute('data-option-d')}" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edit_correct_answer" class="form-label">Correct Answer</label>
                        <select class="form-select" id="edit_correct_answer" name="correct_answer" required>
                            <option value="A" ${button.getAttribute('data-correct-answer') === 'A' ? 'selected' : ''}>A</option>
                            <option value="B" ${button.getAttribute('data-correct-answer') === 'B' ? 'selected' : ''}>B</option>
                            <option value="C" ${button.getAttribute('data-correct-answer') === 'C' ? 'selected' : ''}>C</option>
                            <option value="D" ${button.getAttribute('data-correct-answer') === 'D' ? 'selected' : ''}>D</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_difficulty" class="form-label">Difficulty Level</label>
                        <select class="form-select" id="edit_difficulty" name="difficulty" required>
                            <option value="easy" ${button.getAttribute('data-difficulty') === 'easy' ? 'selected' : ''}>Easy</option>
                            <option value="medium" ${button.getAttribute('data-difficulty') === 'medium' ? 'selected' : ''}>Medium</option>
                            <option value="hard" ${button.getAttribute('data-difficulty') === 'hard' ? 'selected' : ''}>Hard</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="edit_notes" class="form-label">Notes (Optional)</label>
                    <textarea class="form-control" id="edit_notes" name="notes" rows="2">${button.getAttribute('data-notes') || ''}</textarea>
                </div>
            `;
        }
        
        // Function to generate passage options
        function generatePassageOptions(selectedId) {
            let options = '';
            const passages = @json($readingPassages);
            
            passages.forEach(passage => {
                const selected = passage.id == selectedId ? 'selected' : '';
                options += `<option value="${passage.id}" ${selected}>Passage #${passage.id}: ${passage.topic}</option>`;
            });
            
            return options;
        }
    });
</script>
@endsection