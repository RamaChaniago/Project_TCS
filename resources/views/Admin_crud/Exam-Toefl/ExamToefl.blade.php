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
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search questions..." id="searchListening">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
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
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-sm btn-outline-primary rounded-circle me-2">
                                                        <i class="bi bi-play-fill"></i>
                                                    </button>
                                                    <span class="small text-muted">audio_1.mp3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">What is the woman primarily discussing?</p>
                                                <span class="badge bg-info">Part A</span>
                                            </td>
                                            <td><span class="badge bg-success">C</span></td>
                                            <td><small>2023-08-15 14:30</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-sm btn-outline-primary rounded-circle me-2">
                                                        <i class="bi bi-play-fill"></i>
                                                    </button>
                                                    <span class="small text-muted">audio_2.mp3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">What does the professor imply about the assignment?</p>
                                                <span class="badge bg-info">Part B</span>
                                            </td>
                                            <td><span class="badge bg-success">A</span></td>
                                            <td><small>2023-08-16 09:15</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <button class="btn btn-sm btn-outline-primary rounded-circle me-2">
                                                        <i class="bi bi-play-fill"></i>
                                                    </button>
                                                    <span class="small text-muted">audio_3.mp3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">What will the students do next?</p>
                                                <span class="badge bg-info">Part C</span>
                                            </td>
                                            <td><span class="badge bg-success">D</span></td>
                                            <td><small>2023-08-17 11:45</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                <div class="small text-muted">Showing 1-3 of 50 questions</div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search questions..." id="searchStructure">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
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
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <p class="mb-1">________ the discovery of penicillin, many bacterial infections were fatal.</p>
                                                <span class="badge bg-info">Structure</span>
                                            </td>
                                            <td><span class="badge bg-success">B</span></td>
                                            <td><small>2023-08-15 10:30</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <p class="mb-1">The research paper was so poorly written that the professor requested the student to revise it.</p>
                                                <span class="badge bg-info">Written Expression</span>
                                            </td>
                                            <td><span class="badge bg-success">C</span></td>
                                            <td><small>2023-08-16 14:22</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                <div class="small text-muted">Showing 1-2 of 40 questions</div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search questions..." id="searchReading">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
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
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <span class="badge rounded-pill bg-secondary">Passage #1</span>
                                                <small class="d-block text-muted mt-1">Environmental Science</small>
                                            </td>
                                            <td>
                                                <p class="mb-1">According to the passage, what is the main cause of coral reef destruction?</p>
                                            </td>
                                            <td><span class="badge bg-success">A</span></td>
                                            <td><small>2023-08-10 09:15</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <span class="badge rounded-pill bg-secondary">Passage #1</span>
                                                <small class="d-block text-muted mt-1">Environmental Science</small>
                                            </td>
                                            <td>
                                                <p class="mb-1">The word "devastating" in line 12 is closest in meaning to:</p>
                                            </td>
                                            <td><span class="badge bg-success">D</span></td>
                                            <td><small>2023-08-10 09:20</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <span class="badge rounded-pill bg-secondary">Passage #2</span>
                                                <small class="d-block text-muted mt-1">History</small>
                                            </td>
                                            <td>
                                                <p class="mb-1">The passage primarily focuses on which aspect of ancient civilization?</p>
                                            </td>
                                            <td><span class="badge bg-success">B</span></td>
                                            <td><small>2023-08-11 14:35</small></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#viewQuestionModal">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination -->
                            <div class="d-flex justify-content-between align-items-center p-3 border-top">
                                <div class="small text-muted">Showing 1-3 of 50 questions</div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODALS -->

<!-- Add Question Modal -->
<div class="modal fade" id="addQuestionModal" tabindex="-1" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-light p-4 border-0">
                <h5 class="modal-title" id="addQuestionModalLabel">
                    <i class="bi bi-plus-circle me-2 text-primary"></i>Add New Question
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="addQuestionForm">
                    <!-- Section Selection -->
                    <div class="mb-4">
                        <label class="form-label">Section</label>
                        <select class="form-select" id="questionSection" required>
                            <option value="">Select a section</option>
                            <option value="listening">Listening Comprehension</option>
                            <option value="structure">Structure & Written Expression</option>
                            <option value="reading">Reading Comprehension</option>
                        </select>
                    </div>

                    <!-- Dynamic Form Fields based on Section -->
                    <div id="listeningFields" class="d-none section-fields">
                        <div class="mb-3">
                            <label class="form-label">Audio File</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="audioFile" accept="audio/*">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-upload"></i>
                                </button>
                            </div>
                            <div class="form-text">Upload MP3 or WAV file. Maximum size: 10MB</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Part</label>
                            <select class="form-select" id="listeningPart">
                                <option value="A">Part A</option>
                                <option value="B">Part B</option>
                                <option value="C">Part C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Question Text</label>
                            <textarea class="form-control" id="listeningQuestion" rows="3" placeholder="Enter the question text"></textarea>
                        </div>
                    </div>

                    <div id="structureFields" class="d-none section-fields">
                        <div class="mb-3">
                            <label class="form-label">Question Type</label>
                            <select class="form-select" id="structureType">
                                <option value="structure">Structure</option>
                                <option value="written">Written Expression</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Question Text</label>
                            <textarea class="form-control" id="structureQuestion" rows="3" placeholder="Enter the question text"></textarea>
                            <div class="form-text">For structure questions, use underscores (_____) to indicate the blank space</div>
                        </div>
                    </div>

                    <div id="readingFields" class="d-none section-fields">
                        <div class="mb-3">
                            <label class="form-label">Select Passage</label>
                            <select class="form-select" id="readingPassage">
                                <option value="">Select a passage</option>
                                <option value="1">Passage #1: Environmental Science</option>
                                <option value="2">Passage #2: History</option>
                                <option value="3">Passage #3: Technology</option>
                                <option value="new">+ Add New Passage</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Question Text</label>
                            <textarea class="form-control" id="readingQuestion" rows="3" placeholder="Enter the question text"></textarea>
                        </div>
                    </div>

                    <!-- Answer Options (Common for all sections) -->
                    <div class="mb-4">
                        <label class="form-label">Answer Options</label>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">A</span>
                                <input type="text" class="form-control" id="optionA" placeholder="Option A">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">B</span>
                                <input type="text" class="form-control" id="optionB" placeholder="Option B">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">C</span>
                                <input type="text" class="form-control" id="optionC" placeholder="Option C">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">D</span>
                                <input type="text" class="form-control" id="optionD" placeholder="Option D">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correct Answer</label>
                        <select class="form-select" id="correctAnswer" required>
                            <option value="">Select correct answer</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Difficulty Level</label>
                        <select class="form-select" id="difficultyLevel">
                            <option value="easy">Easy</option>
                            <option value="medium">Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Notes (Optional)</label>
                        <textarea class="form-control" id="questionNotes" rows="2" placeholder="Any additional notes about this question"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer p-3 border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveNewQuestion">
                    <i class="bi bi-save me-1"></i>Save Question
                </button>
            </div>
        </div>
    </div>
</div>

<!-- View Question Modal -->
<div class="modal fade" id="viewQuestionModal" tabindex="-1" aria-labelledby="viewQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-light p-4 border-0">
                <h5 class="modal-title" id="viewQuestionModalLabel">
                    <i class="bi bi-eye me-2 text-primary"></i>View Question Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="fw-bold text-muted">Section:</label>
                            <p>Listening Comprehension</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="fw-bold text-muted">Part:</label>
                            <p>Part A <small class="text-muted">(Short Conversations)</small></p>
                        </div>
                    </div>
                </div>

                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <button class="btn btn-sm btn-primary rounded-circle me-2">
                                <i class="bi bi-play-fill"></i>
                            </button>
                            <span>audio_1.mp3</span>
                            <span class="badge bg-success ms-auto">Correct Answer: C</span>
                        </div>
                        <h6 class="fw-bold">Question:</h6>
                        <p>What is the woman primarily discussing?</p>
                    </div>
                </div>

                <div class="mb-4">
                    <h6 class="fw-bold mb-2">Answer Options:</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge rounded-pill bg-secondary me-2">A</span>
                            <span>A new research project</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge rounded-pill bg-secondary me-2">B</span>
                            <span>A scheduling issue</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge rounded-pill bg-success me-2">C</span>
                            <span>A campus policy change</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <span class="badge rounded-pill bg-secondary me-2">D</span>
                            <span>A personal matter</span>
                        </li>
                    </ul>
                </div>

                <div class="mb-3">
                    <h6 class="fw-bold mb-2">Additional Information:</h6>
                    <div class="card bg-light">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1"><span class="fw-bold">Difficulty Level:</span> Medium</p>
                                    <p class="mb-1"><span class="fw-bold">Created On:</span> 2023-08-15 10:30</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1"><span class="fw-bold">Last Updated:</span> 2023-08-15 14:30</p>
                                    <p class="mb-1"><span class="fw-bold">Question ID:</span> LST-A-001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-3 border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editQuestionModal">
                    <i class="bi bi-pencil me-1"></i>Edit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Question Modal -->
<div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-light p-4 border-0">
                <h5 class="modal-title" id="editQuestionModalLabel">
                    <i class="bi bi-pencil me-2 text-warning"></i>Edit Question
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="editQuestionForm">
                    <!-- Using the same form structure as Add Question but with pre-filled values -->
                    <div class="mb-4">
                        <label class="form-label">Section</label>
                        <select class="form-select" id="editQuestionSection" disabled>
                            <option value="listening" selected>Listening Comprehension</option>
                            <option value="structure">Structure & Written Expression</option>
                            <option value="reading">Reading Comprehension</option>
                        </select>
                        <div class="form-text">Section cannot be changed after creation</div>
                    </div>

                    <div id="editListeningFields">
                        <div class="mb-3">
                            <label class="form-label">Audio File</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="audio_1.mp3" readonly>
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-play-fill"></i>
                                </button>
                                <button class="btn btn-outline-primary" type="button">
                                    <i class="bi bi-upload"></i> Replace
                                </button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Part</label>
                            <select class="form-select" id="editListeningPart">
                                <option value="A" selected>Part A</option>
                                <option value="B">Part B</option>
                                <option value="C">Part C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Question Text</label>
                            <textarea class="form-control" id="editListeningQuestion" rows="3">What is the woman primarily discussing?</textarea>
                        </div>
                    </div>

                    <!-- Answer Options (pre-filled) -->
                    <div class="mb-4">
                        <label class="form-label">Answer Options</label>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">A</span>
                                <input type="text" class="form-control" value="A new research project">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">B</span>
                                <input type="text" class="form-control" value="A scheduling issue">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">C</span>
                                <input type="text" class="form-control" value="A campus policy change">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">D</span>
                                <input type="text" class="form-control" value="A personal matter">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correct Answer</label>
                        <select class="form-select" id="editCorrectAnswer">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C" selected>C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Difficulty Level</label>
                        <select class="form-select" id="editDifficultyLevel">
                            <option value="easy">Easy</option>
                            <option value="medium" selected>Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Notes</label>
                        <textarea class="form-control" id="editQuestionNotes" rows="2">This question tests the ability to identify the main topic in a short conversation.</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer p-3 border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-warning" id="updateQuestion">
                    <i class="bi bi-save me-1"></i>Update Question
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Question Modal -->
<div class="modal fade" id="deleteQuestionModal" tabindex="-1" aria-labelledby="deleteQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-light p-4 border-0">
                <h5 class="modal-title" id="deleteQuestionModalLabel">
                    <i class="bi bi-exclamation-triangle me-2 text-danger"></i>Confirm Deletion
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <div class="bg-danger bg-opacity-10 rounded-circle p-3 d-inline-block mb-3">
                        <i class="bi bi-trash text-danger fs-1"></i>
                    </div>
                    <h5>Are you sure you want to delete this question?</h5>
                    <p class="text-muted">This action cannot be undone. All data associated with this question will be permanently removed.</p>
                </div>

                <div class="card bg-light mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold">Question Preview:</h6>
                        <p>"What is the woman primarily discussing?"</p>
                        <div class="d-flex justify-content-between">
                            <span class="badge bg-info">Listening Comprehension</span>
                            <span class="badge bg-success">Correct Answer: C</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer p-3 border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">
                    <i class="bi bi-trash me-1"></i>Delete Question
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add New Passage Modal (For Reading Section) -->
<div class="modal fade" id="addPassageModal" tabindex="-1" aria-labelledby="addPassageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">
            <div class="modal-header bg-light p-4 border-0">
                <h5 class="modal-title" id="addPassageModalLabel">
                    <i class="bi bi-file-earmark-text me-2 text-primary"></i>Add New Reading Passage
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="addPassageForm">
                    <div class="mb-3">
                        <label class="form-label">Passage Title</label>
                        <input type="text" class="form-control" id="passageTitle" placeholder="Enter a descriptive title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject/Topic</label>
                        <input type="text" class="form-control" id="passageTopic" placeholder="E.g., Environmental Science, History, Technology">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Difficulty Level</label>
                        <select class="form-select" id="passageDifficulty">
                            <option value="easy">Easy</option>
                            <option value="medium" selected>Medium</option>
                            <option value="hard">Hard</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Passage Text</label>
                        <textarea class="form-control" id="passageText" rows="10" placeholder="Enter the full passage text here..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Notes (Optional)</label>
                        <textarea class="form-control" id="passageNotes" rows="2" placeholder="Any additional notes or keywords related to this passage"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer p-3 border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveNewPassage">
                    <i class="bi bi-save me-1"></i>Save Passage
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for the page -->
<script>
    // Show relevant fields based on section selection
    document.getElementById('questionSection').addEventListener('change', function() {
        // Hide all section fields
        document.querySelectorAll('.section-fields').forEach(function(el) {
            el.classList.add('d-none');
        });

        // Show the selected section fields
        const selectedSection = this.value;
        if (selectedSection) {
            document.getElementById(selectedSection + 'Fields').classList.remove('d-none');
        }
    });

    // Handle "Add New Passage" option
    document.getElementById('readingPassage')?.addEventListener('change', function() {
        if (this.value === 'new') {
            // Hide current modal and show add passage modal
            const currentModal = bootstrap.Modal.getInstance(document.getElementById('addQuestionModal'));
            currentModal.hide();

            setTimeout(() => {
                const passageModal = new bootstrap.Modal(document.getElementById('addPassageModal'));
                passageModal.show();
            }, 500);
        }
    });

    // Save new question
    document.getElementById('saveNewQuestion').addEventListener('click', function() {
        // Validate form
        const form = document.getElementById('addQuestionForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Simulate saving question
        alert('Question saved successfully!');

        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('addQuestionModal'));
        modal.hide();

        // In a real application, you would send form data to the server here
    });

    // Update question
    document.getElementById('updateQuestion').addEventListener('click', function() {
        // Validate form
        const form = document.getElementById('editQuestionForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Simulate updating question
        alert('Question updated successfully!');

        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('editQuestionModal'));
        modal.hide();

        // In a real application, you would send form data to the server here
    });

    // Delete question
    document.getElementById('confirmDelete').addEventListener('click', function() {
        // Simulate deleting question
        alert('Question deleted successfully!');

        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('deleteQuestionModal'));
        modal.hide();

        // In a real application, you would send delete request to the server here
    });

    // Save new passage
    document.getElementById('saveNewPassage').addEventListener('click', function() {
        // Validate form
        const form = document.getElementById('addPassageForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Simulate saving passage
        alert('Passage saved successfully!');

        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('addPassageModal'));
        modal.hide();

        // Re-open add question modal
        setTimeout(() => {
            const questionModal = new bootstrap.Modal(document.getElementById('addQuestionModal'));
            questionModal.show();

            // Update passage dropdown with new passage
            const passageSelect = document.getElementById('readingPassage');
            const newOption = document.createElement('option');
            const passageTitle = document.getElementById('passageTitle').value;
            const passageTopic = document.getElementById('passageTopic').value;

            newOption.value = 'new_passage';
            newOption.text = `Passage: ${passageTitle} - ${passageTopic}`;
            passageSelect.add(newOption, 3); // Add before "Add New Passage" option
            passageSelect.value = 'new_passage';
        }, 500);
    });
</script>
@endsection
