@extends('Admin.MainDashboardAdmin')

@section('title')
    Checkout
@endsection

@section('content')
    <style>
        .section-title {
            border-left: 5px solid #0d6efd;
            padding-left: 10px;
        }
        .table-responsive {
            max-height: 600px;
            overflow-y: auto;
        }
        .btn-action {
            margin-right: 5px;
        }
        .question-card {
            border-left: 3px solid #0d6efd;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="display-5 section-title">TOEFL ITP Question Bank</h1>
                <p class="lead">Manage your TOEFL ITP questions with this CRUD application</p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Question List</h5>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addQuestionModal">
                            <i class="fas fa-plus"></i> Add New Question
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <select class="form-select" id="sectionFilter">
                                    <option value="">All Sections</option>
                                    <option value="Listening">Listening</option>
                                    <option value="Structure">Structure & Written Expression</option>
                                    <option value="Reading">Reading</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" id="difficultyFilter">
                                    <option value="">All Difficulty Levels</option>
                                    <option value="Easy">Easy</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Hard">Hard</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Section</th>
                                        <th>Question</th>
                                        <th>Difficulty</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="questionTableBody">
                                    <tr>
                                        <td>1</td>
                                        <td><span class="badge bg-info">Listening</span></td>
                                        <td>What does the professor mainly discuss?</td>
                                        <td><span class="badge bg-success">Easy</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-info btn-action" data-bs-toggle="modal" data-bs-target="#viewQuestionModal" onclick="viewQuestion(1)">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning btn-action" data-bs-toggle="modal" data-bs-target="#editQuestionModal" onclick="editQuestion(1)">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger btn-action" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal" onclick="confirmDelete(1)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><span class="badge bg-warning text-dark">Structure</span></td>
                                        <td>The city council has voted to expand the public transportation system, ______ will cost millions of dollars.</td>
                                        <td><span class="badge bg-warning text-dark">Medium</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-info btn-action" data-bs-toggle="modal" data-bs-target="#viewQuestionModal" onclick="viewQuestion(2)">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning btn-action" data-bs-toggle="modal" data-bs-target="#editQuestionModal" onclick="editQuestion(2)">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger btn-action" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal" onclick="confirmDelete(2)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><span class="badge bg-danger">Reading</span></td>
                                        <td>According to the passage, what was the main reason for the economic decline in the region?</td>
                                        <td><span class="badge bg-danger">Hard</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-info btn-action" data-bs-toggle="modal" data-bs-target="#viewQuestionModal" onclick="viewQuestion(3)">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning btn-action" data-bs-toggle="modal" data-bs-target="#editQuestionModal" onclick="editQuestion(3)">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger btn-action" data-bs-toggle="modal" data-bs-target="#deleteQuestionModal" onclick="confirmDelete(3)">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span>Showing 1 to 3 of 3 entries</span>
                            </div>
                            <nav>
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item disabled">
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

    <!-- Add Question Modal -->
    <div class="modal fade" id="addQuestionModal" tabindex="-1" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addQuestionModalLabel">Add New TOEFL ITP Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addQuestionForm">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="addSection" class="form-label">Section</label>
                                <select class="form-select" id="addSection" required>
                                    <option value="">Select Section</option>
                                    <option value="Listening">Listening</option>
                                    <option value="Structure">Structure & Written Expression</option>
                                    <option value="Reading">Reading</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="addDifficulty" class="form-label">Difficulty Level</label>
                                <select class="form-select" id="addDifficulty" required>
                                    <option value="">Select Difficulty</option>
                                    <option value="Easy">Easy</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Hard">Hard</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="addQuestion" class="form-label">Question Text</label>
                            <textarea class="form-control" id="addQuestion" rows="3" required></textarea>
                        </div>

                        <div class="mb-3" id="addPassageContainer" style="display: none;">
                            <label for="addPassage" class="form-label">Reading Passage (for Reading section)</label>
                            <textarea class="form-control" id="addPassage" rows="5"></textarea>
                        </div>

                        <div class="mb-3" id="addAudioContainer" style="display: none;">
                            <label for="addAudioScript" class="form-label">Audio Script (for Listening section)</label>
                            <textarea class="form-control" id="addAudioScript" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Answer Options</label>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">A</span>
                                        <input type="text" class="form-control" id="addOptionA" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">B</span>
                                        <input type="text" class="form-control" id="addOptionB" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">C</span>
                                        <input type="text" class="form-control" id="addOptionC" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">D</span>
                                        <input type="text" class="form-control" id="addOptionD" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="addCorrectAnswer" class="form-label">Correct Answer</label>
                            <select class="form-select" id="addCorrectAnswer" required>
                                <option value="">Select Correct Answer</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="addExplanation" class="form-label">Answer Explanation</label>
                            <textarea class="form-control" id="addExplanation" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="saveNewQuestion()">Save Question</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Question Modal -->
    <div class="modal fade" id="viewQuestionModal" tabindex="-1" aria-labelledby="viewQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="viewQuestionModalLabel">View TOEFL ITP Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="card-header bg-light">
                            <div class="d-flex justify-content-between">
                                <span>ID: <span id="viewQuestionId">1</span></span>
                                <span>Section: <span class="badge bg-info" id="viewSection">Listening</span></span>
                                <span>Difficulty: <span class="badge bg-success" id="viewDifficulty">Easy</span></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="viewPassageContainer" style="display: none;" class="mb-4">
                                <h6 class="card-subtitle mb-2 text-muted">Reading Passage</h6>
                                <div class="card p-3 bg-light mb-3">
                                    <p id="viewPassage" class="mb-0">No passage available</p>
                                </div>
                            </div>

                            <div id="viewAudioContainer" style="display: none;" class="mb-4">
                                <h6 class="card-subtitle mb-2 text-muted">Audio Script</h6>
                                <div class="card p-3 bg-light mb-3">
                                    <p id="viewAudioScript" class="mb-0">Man: I'm really interested in taking that new psychology course, but I'm not sure if I meet the prerequisites. Woman: Well, all you need is to have completed the Introduction to Psychology course and get permission from the department head.</p>
                                </div>
                            </div>

                            <h6 class="card-subtitle mb-2 text-muted">Question</h6>
                            <p class="card-text" id="viewQuestion">What does the professor mainly discuss?</p>

                            <h6 class="card-subtitle mb-2 text-muted">Answer Options</h6>
                            <div class="card p-3 mb-3">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="viewAnswerOptions" id="viewOptionA" disabled>
                                    <label class="form-check-label" for="viewOptionA">
                                        <span>A.</span> <span id="viewOptionAText">The history of psychological studies</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="viewAnswerOptions" id="viewOptionB" disabled>
                                    <label class="form-check-label" for="viewOptionB">
                                        <span>B.</span> <span id="viewOptionBText">The requirements for a psychology course</span>
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="viewAnswerOptions" id="viewOptionC" disabled>
                                    <label class="form-check-label" for="viewOptionC">
                                        <span>C.</span> <span id="viewOptionCText">The woman's experience with psychology</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="viewAnswerOptions" id="viewOptionD" disabled>
                                    <label class="form-check-label" for="viewOptionD">
                                        <span>D.</span> <span id="viewOptionDText">The difficulty level of psychology courses</span>
                                    </label>
                                </div>
                            </div>

                            <div class="alert alert-success">
                                <h6 class="card-subtitle mb-2">Correct Answer: <strong id="viewCorrectAnswer">B</strong></h6>
                                <h6 class="card-subtitle mb-2">Explanation:</h6>
                                <p id="viewExplanation" class="mb-0">The conversation is about the prerequisites or requirements needed to take a psychology course. The woman explains to the man what he needs to do to enroll in the course.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editQuestionModal" onclick="prepareEdit()">Edit Question</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Question Modal -->
    <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="editQuestionModalLabel">Edit TOEFL ITP Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editQuestionForm">
                        <input type="hidden" id="editQuestionId" value="1">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="editSection" class="form-label">Section</label>
                                <select class="form-select" id="editSection" required>
                                    <option value="">Select Section</option>
                                    <option value="Listening">Listening</option>
                                    <option value="Structure">Structure & Written Expression</option>
                                    <option value="Reading">Reading</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="editDifficulty" class="form-label">Difficulty Level</label>
                                <select class="form-select" id="editDifficulty" required>
                                    <option value="">Select Difficulty</option>
                                    <option value="Easy">Easy</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Hard">Hard</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="editQuestion" class="form-label">Question Text</label>
                            <textarea class="form-control" id="editQuestion" rows="3" required>What does the professor mainly discuss?</textarea>
                        </div>

                        <div class="mb-3" id="editPassageContainer" style="display: none;">
                            <label for="editPassage" class="form-label">Reading Passage (for Reading section)</label>
                            <textarea class="form-control" id="editPassage" rows="5"></textarea>
                        </div>

                        <div class="mb-3" id="editAudioContainer">
                            <label for="editAudioScript" class="form-label">Audio Script (for Listening section)</label>
                            <textarea class="form-control" id="editAudioScript" rows="5">Man: I'm really interested in taking that new psychology course, but I'm not sure if I meet the prerequisites. Woman: Well, all you need is to have completed the Introduction to Psychology course and get permission from the department head.</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Answer Options</label>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">A</span>
                                        <input type="text" class="form-control" id="editOptionA" value="The history of psychological studies" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">B</span>
                                        <input type="text" class="form-control" id="editOptionB" value="The requirements for a psychology course" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">C</span>
                                        <input type="text" class="form-control" id="editOptionC" value="The woman's experience with psychology" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text">D</span>
                                        <input type="text" class="form-control" id="editOptionD" value="The difficulty level of psychology courses" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="editCorrectAnswer" class="form-label">Correct Answer</label>
                            <select class="form-select" id="editCorrectAnswer" required>
                                <option value="">Select Correct Answer</option>
                                <option value="A">A</option>
                                <option value="B" selected>B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="editExplanation" class="form-label">Answer Explanation</label>
                            <textarea class="form-control" id="editExplanation" rows="3">The conversation is about the prerequisites or requirements needed to take a psychology course. The woman explains to the man what he needs to do to enroll in the course.</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="updateQuestion()">Update Question</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Question Modal -->
    <div class="modal fade" id="deleteQuestionModal" tabindex="-1" aria-labelledby="deleteQuestionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteQuestionModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this question? This action cannot be undone.</p>
                    <div class="alert alert-warning">
                        <p class="mb-0">Question ID: <span id="deleteQuestionId">1</span></p>
                        <p class="mb-0">Question: <span id="deleteQuestionText">What does the professor mainly discuss?</span></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="deleteQuestion()">Delete Question</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sample data for the questions
        const questions = [
            {
                id: 1,
                section: "Listening",
                question: "What does the professor mainly discuss?",
                difficulty: "Easy",
                optionA: "The history of psychological studies",
                optionB: "The requirements for a psychology course",
                optionC: "The woman's experience with psychology",
                optionD: "The difficulty level of psychology courses",
                correctAnswer: "B",
                explanation: "The conversation is about the prerequisites or requirements needed to take a psychology course. The woman explains to the man what he needs to do to enroll in the course.",
                audioScript: "Man: I'm really interested in taking that new psychology course, but I'm not sure if I meet the prerequisites. Woman: Well, all you need is to have completed the Introduction to Psychology course and get permission from the department head.",
                passage: ""
            },
            {
                id: 2,
                section: "Structure",
                question: "The city council has voted to expand the public transportation system, ______ will cost millions of dollars.",
                difficulty: "Medium",
                optionA: "that",
                optionB: "which",
                optionC: "it",
                optionD: "what",
                correctAnswer: "B",
                explanation: "This is a relative clause that provides additional information about the preceding noun phrase. 'Which' is the appropriate relative pronoun here because it refers to the entire preceding clause as a whole.",
                audioScript: "",
                passage: ""
            },
            {
                id: 3,
                section: "Reading",
                question: "According to the passage, what was the main reason for the economic decline in the region?",
                difficulty: "Hard",
                optionA: "Natural disasters",
                optionB: "Political instability",
                optionC: "Depletion of natural resources",
                optionD: "Competition from neighboring regions",
                correctAnswer: "C",
                explanation: "The passage explicitly states that the depletion of natural resources, particularly timber and minerals, led to the economic decline of the region as businesses closed and people moved away.",
                audioScript: "",
                passage: "The region experienced significant economic growth during the mid-20th century, largely due to abundant natural resources that supported timber and mining industries. However, by the late 1970s, these resources had been largely depleted through decades of intensive extraction. As the timber became scarce and mines were exhausted, businesses began to close, unemployment rates soared, and many residents left the area in search of better opportunities elsewhere. Despite attempts by local governments to diversify the economy by promoting tourism and small-scale manufacturing, the region has never fully recovered from this economic downturn."
            }
        ];

        // Show/hide section-specific fields based on selection
        document.getElementById('addSection').addEventListener('change', function() {
            const section = this.value;
            document.getElementById('addPassageContainer').style.display = section === 'Reading' ? 'block' : 'none';
            document.getElementById('addAudioContainer').style.display = section === 'Listening' ? 'block' : 'none';
        });

        document.getElementById('editSection').addEventListener('change', function() {
            const section = this.value;
            document.getElementById('editPassageContainer').style.display = section === 'Reading' ? 'block' : 'none';
            document.getElementById('editAudioContainer').style.display = section === 'Listening' ? 'block' : 'none';
        });

        // View question details
        function viewQuestion(id) {
            const question = questions.find(q => q.id === id);
            if (question) {
                document.getElementById('viewQuestionId').textContent = question.id;
                document.getElementById('viewSection').textContent = question.section;
                document.getElementById('viewSection').className = getBadgeClass(question.section);
                document.getElementById('viewDifficulty').textContent = question.difficulty;
                document.getElementById('viewDifficulty').className = getDifficultyBadgeClass(question.difficulty);
                document.getElementById('viewQuestion').textContent = question.question;

                // Set passage or audio script
                document.getElementById('viewPassageContainer').style.display = question.section === 'Reading' && question.passage ? 'block' : 'none';
                document.getElementById('viewAudioContainer').style.display = question.section === 'Listening' && question.audioScript ? 'block' : 'none';

                if (question.passage) {
                    document.getElementById('viewPassage').textContent = question.passage;
                }

                if (question.audioScript) {
                    document.getElementById('viewAudioScript').textContent = question.audioScript;
                }

                // Set options
                document.getElementById('viewOptionAText').textContent = question.optionA;
                document.getElementById('viewOptionBText').textContent = question.optionB;
                document.getElementById('viewOptionCText').textContent = question.optionC;
                document.getElementById('viewOptionDText').textContent = question.optionD;

                // Set correct answer
                document.getElementById('viewCorrectAnswer').textContent = question.correctAnswer;
                document.getElementById('viewExplanation').textContent = question.explanation;

                // Check the correct radio button
                document.getElementById('viewOptionA').checked = question.correctAnswer === 'A';
                document.getElementById('viewOptionB').checked = question.correctAnswer === 'B';
                document.getElementById('viewOptionC').checked = question.correctAnswer === 'C';
                document.getElementById('viewOptionD').checked = question.correctAnswer === 'D';
            }
        }

        // Prepare edit form
        function editQuestion(id) {
            const question = questions.find(q => q.id === id);
            if (question) {
                document.getElementById('editQuestionId').value = question.id;
                document.getElementById('editSection').value = question.section;
                document.getElementById('editDifficulty').value = question.difficulty;
                document.getElementById('editQuestion').value = question.question;

                // Show/hide section-specific fields
                document.getElementById('editPassageContainer').style.display = question.section === 'Reading' ? 'block' : 'none';
                document.getElementById('editAudioContainer').style.display = question.section === 'Listening' ? 'block' : 'none';

                // Set passage or audio script
                if (question.passage) {
                    document.getElementById('editPassage').value = question.passage;
                }

                if (question.audioScript) {
                    document.getElementById('editAudioScript').value = question.audioScript;
                }

                // Set options
                document.getElementById('editOptionA').value = question.optionA;
                document.getElementById('editOptionB').value = question.optionB;
                document.getElementById('editOptionC').value = question.optionC;
                document.getElementById('editOptionD').value = question.optionD;

                // Set correct answer
                document.getElementById('editCorrectAnswer').value = question.correctAnswer;
                document.getElementById('editExplanation').value = question.explanation;
            }
        }

        // Prepare edit from view
        function prepareEdit() {
            const id = parseInt(document.getElementById('viewQuestionId').textContent);
            editQuestion(id);
        }

        // Confirm delete
        function confirmDelete(id) {
            const question = questions.find(q => q.id === id);
            if (question) {
                document.getElementById('deleteQuestionId').textContent = question.id;
                document.getElementById('deleteQuestionText').textContent = question.question;
            }
        }

        // Save new question
        function saveNewQuestion() {
            const form = document.getElementById('addQuestionForm');

            // Basic form validation
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Get form values
            const section = document.getElementById('addSection').value;
            const difficulty = document.getElementById('addDifficulty').value;
            const questionText = document.getElementById('addQuestion').value;
            const optionA = document.getElementById('addOptionA').value;
            const optionB = document.getElementById('addOptionB').value;
            const optionC = document.getElementById('addOptionC').value;
            const optionD = document.getElementById('addOptionD').value;
            const correctAnswer = document.getElementById('addCorrectAnswer').value;
            const explanation = document.getElementById('addExplanation').value;

            // Get section-specific fields
            let passage = '';
            let audioScript = '';

            if (section === 'Reading') {
                passage = document.getElementById('addPassage').value;
            } else if (section === 'Listening') {
                audioScript = document.getElementById('addAudioScript').value;
            }

            // Generate new ID (in a real app, this would come from the backend)
            const newId = questions.length > 0 ? Math.max(...questions.map(q => q.id)) + 1 : 1;

            // Create new question object
            const newQuestion = {
                id: newId,
                section,
                question: questionText,
                difficulty,
                optionA,
                optionB,
                optionC,
                optionD,
                correctAnswer,
                explanation,
                passage,
                audioScript
            };

            // Add to questions array (in a real app, this would be an API call)
            questions.push(newQuestion);

            // Update table
            updateQuestionTable();

            // Close modal and reset form
            const modal = bootstrap.Modal.getInstance(document.getElementById('addQuestionModal'));
            modal.hide();
            form.reset();

            // Show success message
            showAlert('Question added successfully!', 'success');
        }

        // Update existing question
        function updateQuestion() {
            const form = document.getElementById('editQuestionForm');

            // Basic form validation
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Get form values
            const id = parseInt(document.getElementById('editQuestionId').value);
            const section = document.getElementById('editSection').value;
            const difficulty = document.getElementById('editDifficulty').value;
            const questionText = document.getElementById('editQuestion').value;
            const optionA = document.getElementById('editOptionA').value;
            const optionB = document.getElementById('editOptionB').value;
            const optionC = document.getElementById('editOptionC').value;
            const optionD = document.getElementById('editOptionD').value;
            const correctAnswer = document.getElementById('editCorrectAnswer').value;
            const explanation = document.getElementById('editExplanation').value;

            // Get section-specific fields
            let passage = '';
            let audioScript = '';

            if (section === 'Reading') {
                passage = document.getElementById('editPassage').value;
            } else if (section === 'Listening') {
                audioScript = document.getElementById('editAudioScript').value;
            }

            // Find question index
            const index = questions.findIndex(q => q.id === id);

            if (index !== -1) {
                // Update question
                questions[index] = {
                    id,
                    section,
                    question: questionText,
                    difficulty,
                    optionA,
                    optionB,
                    optionC,
                    optionD,
                    correctAnswer,
                    explanation,
                    passage,
                    audioScript
                };

                // Update table
                updateQuestionTable();

                // Close modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('editQuestionModal'));
                modal.hide();

                // Show success message
                showAlert('Question updated successfully!', 'success');
            }
        }

        // Delete question
        function deleteQuestion() {
            const id = parseInt(document.getElementById('deleteQuestionId').textContent);

            // Find question index
            const index = questions.findIndex(q => q.id === id);

            if (index !== -1) {
                // Remove question
                questions.splice(index, 1);

                // Update table
                updateQuestionTable();

                // Close modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('deleteQuestionModal'));
                modal.hide();

                // Show success message
                showAlert('Question deleted successfully!', 'danger');
            }
        }

        // Update question table
        function updateQuestionTable() {
            const tableBody = document.getElementById('questionTableBody');

            // Filter questions based on selected filters
            const filteredQuestions = filterQuestions();

            // Clear table
            tableBody.innerHTML = '';

            // Add rows
            filteredQuestions.forEach(question => {
                const row = document.createElement('tr');

                // ID cell
                const idCell = document.createElement('td');
                idCell.textContent = question.id;
                row.appendChild(idCell);

                // Section cell
                const sectionCell = document.createElement('td');
                const sectionBadge = document.createElement('span');
                sectionBadge.textContent = question.section;
                sectionBadge.className = getBadgeClass(question.section);
                sectionCell.appendChild(sectionBadge);
                row.appendChild(sectionCell);

                // Question cell
                const questionCell = document.createElement('td');
                questionCell.textContent = question.question;
                row.appendChild(questionCell);

                // Difficulty cell
                const difficultyCell = document.createElement('td');
                const difficultyBadge = document.createElement('span');
                difficultyBadge.textContent = question.difficulty;
                difficultyBadge.className = getDifficultyBadgeClass(question.difficulty);
                difficultyCell.appendChild(difficultyBadge);
                row.appendChild(difficultyCell);

                // Actions cell
                const actionsCell = document.createElement('td');

                // View button
                const viewBtn = document.createElement('button');
                viewBtn.className = 'btn btn-sm btn-info btn-action';
                viewBtn.setAttribute('data-bs-toggle', 'modal');
                viewBtn.setAttribute('data-bs-target', '#viewQuestionModal');
                viewBtn.innerHTML = '<i class="fas fa-eye"></i>';
                viewBtn.onclick = () => viewQuestion(question.id);
                actionsCell.appendChild(viewBtn);

                // Edit button
                const editBtn = document.createElement('button');
                editBtn.className = 'btn btn-sm btn-warning btn-action';
                editBtn.setAttribute('data-bs-toggle', 'modal');
                editBtn.setAttribute('data-bs-target', '#editQuestionModal');
                editBtn.innerHTML = '<i class="fas fa-edit"></i>';
                editBtn.onclick = () => editQuestion(question.id);
                actionsCell.appendChild(editBtn);

                // Delete button
                const deleteBtn = document.createElement('button');
                deleteBtn.className = 'btn btn-sm btn-danger btn-action';
                deleteBtn.setAttribute('data-bs-toggle', 'modal');
                deleteBtn.setAttribute('data-bs-target', '#deleteQuestionModal');
                deleteBtn.innerHTML = '<i class="fas fa-trash"></i>';
                deleteBtn.onclick = () => confirmDelete(question.id);
                actionsCell.appendChild(deleteBtn);

                row.appendChild(actionsCell);

                tableBody.appendChild(row);
            });

            // Update table info
            updateTableInfo(filteredQuestions.length);
        }

        // Filter questions based on selected filters
        function filterQuestions() {
            const sectionFilter = document.getElementById('sectionFilter').value;
            const difficultyFilter = document.getElementById('difficultyFilter').value;
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();

            return questions.filter(question => {
                const matchesSection = !sectionFilter || question.section === sectionFilter;
                const matchesDifficulty = !difficultyFilter || question.difficulty === difficultyFilter;
                const matchesSearch = !searchTerm ||
                    question.question.toLowerCase().includes(searchTerm) ||
                    question.optionA.toLowerCase().includes(searchTerm) ||
                    question.optionB.toLowerCase().includes(searchTerm) ||
                    question.optionC.toLowerCase().includes(searchTerm) ||
                    question.optionD.toLowerCase().includes(searchTerm);

                return matchesSection && matchesDifficulty && matchesSearch;
            });
        }

        // Update table info
        function updateTableInfo(count) {
            const infoElement = document.querySelector('.d-flex .pagination').previousElementSibling.querySelector('span');
            infoElement.textContent = `Showing 1 to ${count} of ${count} entries`;
        }

        // Get badge class for section
        function getBadgeClass(section) {
            switch (section) {
                case 'Listening':
                    return 'badge bg-info';
                case 'Structure':
                    return 'badge bg-warning text-dark';
                case 'Reading':
                    return 'badge bg-danger';
                default:
                    return 'badge bg-primary';
            }
        }

        // Get badge class for difficulty
        function getDifficultyBadgeClass(difficulty) {
            switch (difficulty) {
                case 'Easy':
                    return 'badge bg-success';
                case 'Medium':
                    return 'badge bg-warning text-dark';
                case 'Hard':
                    return 'badge bg-danger';
                default:
                    return 'badge bg-primary';
            }
        }

        // Show alert message
        function showAlert(message, type) {
            // Create alert element
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-4`;
            alertDiv.style.zIndex = '9999';
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            `;

            // Add to body
            document.body.appendChild(alertDiv);

            // Remove after 3 seconds
            setTimeout(() => {
                alertDiv.remove();
            }, 3000);
        }

        // Event listeners for filters
        document.getElementById('sectionFilter').addEventListener('change', updateQuestionTable);
        document.getElementById('difficultyFilter').addEventListener('change', updateQuestionTable);
        document.getElementById('searchInput').addEventListener('input', updateQuestionTable);

        // Initialize table
        updateQuestionTable();
    </script>
@endsection
