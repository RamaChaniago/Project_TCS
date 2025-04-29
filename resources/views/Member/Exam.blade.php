<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOEFL ITP Examination</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
            font-family: 'Poppins', sans-serif;
            color: #2d3748;
        }
        .container-fluid {
            max-width: 1400px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }
        .aspect-ratio-1x1 {
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
        }
        .aspect-ratio-1x1 button {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .answer-option {
            transition: all 0.3s ease;
        }
        .answer-option:hover {
            border-color: #5a67d8 !important;
            background-color: #f8f9ff;
        }
        .answer-option.selected {
            border-color: #5a67d8 !important;
            background-color: #f0f7ff;
        }
        .sticky-lg-top {
            top: 20px;
        }
        .progress {
            height: 8px;
            border-radius: 5px;
        }
        .progress-bar {
            background-color: #5a67d8;
        }
        .audio-player {
            background: #f1f3f5;
            padding: 20px;
            border-radius: 10px;
        }
        .btn-primary {
            background: #5a67d8;
            border: none;
            border-radius: 10px;
        }
        .btn-primary:hover {
            background: #4c51bf;
        }
        .btn-outline-warning, .btn-warning {
            border-radius: 10px;
        }
        .nav-pills .nav-link {
            border-radius: 10px;
            margin: 5px;
            font-weight: 500;
        }
        .nav-pills .nav-link.active {
            background: #5a67d8;
            color: #ffffff;
        }
        @media (max-width: 767px) {
            .question-button-wrapper {
                width: 25% !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <!-- Exam Header -->
        <div class="card shadow-lg border-0 mb-4" data-aos="fade-up">
            <div class="card-header bg-white p-4 border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-1">TOEFL ITP Examination</h4>
                        <div class="text-muted">Test your English proficiency with this standardized test</div>
                    </div>
                    <div class="text-end">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-clock me-1 text-primary"></i>
                                    <span id="timer" class="fw-bold">00:00:00</span>
                                </div>
                                <div class="small text-muted">Time Remaining</div>
                            </div>
                            <button class="btn btn-outline-danger rounded-pill" id="exitButton">
                                <i class="bi bi-box-arrow-right me-1"></i> Exit Test
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exam Content -->
        <div class="row">
            <!-- Questions Panel -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-lg border-0" data-aos="fade-up">
                    <div class="card-header bg-white p-4 border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0" id="question-title">Question #1</h5>
                            <span class="badge bg-dark px-3 py-2" id="section-badge">
                                <i class="bi bi-soundwave me-1"></i> Listening
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <!-- Question Content -->
                        <div id="question-content">
                            @foreach ($listeningQuestions as $index => $question)
                                <div class="question-container {{ $index == 0 ? '' : 'd-none' }}" data-question="{{ $index }}" data-section="listening" data-id="{{ $question->id }}">
                                    @if ($question->audio_file)
                                        <div class="audio-player mb-4">
                                            <div class="text-center mb-3">
                                                <i class="bi bi-volume-up-fill text-primary" style="font-size: 2.5rem;"></i>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center mb-3">
                                                <button class="btn btn-primary rounded-circle me-3 play-button" data-plays="2">
                                                    <i class="bi bi-play-fill"></i>
                                                </button>
                                                <div class="progress flex-grow-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%;" id="audio-progress-{{ $question->id }}"></div>
                                                </div>
                                                <div class="ms-3 text-muted small" id="audio-time-{{ $question->id }}">00:00 / 01:30</div>
                                            </div>
                                            <div class="text-center text-muted small">
                                                <i class="bi bi-info-circle me-1"></i> You can play this audio only twice
                                                <span class="ms-2 badge bg-light text-dark" id="plays-remaining-{{ $question->id }}">2 plays remaining</span>
                                            </div>
                                            <audio id="audio-{{ $question->id }}" src="{{ asset('storage/' . $question->audio_file) }}" preload="auto"></audio>
                                        </div>
                                    @endif
                                    <div class="mb-4">
                                        <p class="mb-2 fw-bold">Listen to the conversation and answer the question:</p>
                                        <p>{!! nl2br(e($question->question_text)) !!}</p>
                                    </div>
                                    <form class="question-form">
                                        <div class="mb-3">
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_a_{{ $question->id }}" value="A">
                                                <label class="form-check-label w-100" for="option_a_{{ $question->id }}">{{ $question->option_a }}</label>
                                            </div>
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_b_{{ $question->id }}" value="B">
                                                <label class="form-check-label w-100" for="option_b_{{ $question->id }}">{{ $question->option_b }}</label>
                                            </div>
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_c_{{ $question->id }}" value="C">
                                                <label class="form-check-label w-100" for="option_c_{{ $question->id }}">{{ $question->option_c }}</label>
                                            </div>
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_d_{{ $question->id }}" value="D">
                                                <label class="form-check-label w-100" for="option_d_{{ $question->id }}">{{ $question->option_d }}</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach

                            @foreach ($structureQuestions as $index => $question)
                                <div class="question-container d-none" data-question="{{ $index }}" data-section="structure" data-id="{{ $question->id }}">
                                    <div class="mb-4">
                                        <p class="mb-2 fw-bold">{{ $question->structureTypeDisplay }}:</p>
                                        <p>{!! nl2br(e($question->question_text)) !!}</p>
                                    </div>
                                    <form class="question-form">
                                        <div class="mb-3">
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_a_{{ $question->id }}" value="A">
                                                <label class="form-check-label w-100" for="option_a_{{ $question->id }}">{{ $question->option_a }}</label>
                                            </div>
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_b_{{ $question->id }}" value="B">
                                                <label class="form-check-label w-100" for="option_b_{{ $question->id }}">{{ $question->option_b }}</label>
                                            </div>
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_c_{{ $question->id }}" value="C">
                                                <label class="form-check-label w-100" for="option_c_{{ $question->id }}">{{ $question->option_c }}</label>
                                            </div>
                                            <div class="form-check p-3 border rounded mb-3 answer-option">
                                                <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_d_{{ $question->id }}" value="D">
                                                <label class="form-check-label w-100" for="option_d_{{ $question->id }}">{{ $question->option_d }}</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endforeach

                            @foreach ($readingPassages as $passage)
                                <div class="passage-content d-none" data-passage="{{ $passage->id }}">
                                    <h5 class="fw-bold mb-3">{{ $passage->title }}</h5>
                                    <p>{!! nl2br(e($passage->content)) !!}</p>
                                </div>
                                @foreach ($passage->questions as $index => $question)
                                    <div class="question-container d-none" data-question="{{ $index }}" data-section="reading" data-passage="{{ $passage->id }}" data-id="{{ $question->id }}">
                                        <div class="mb-4">
                                            <p class="mb-2 fw-bold">Reading Comprehension:</p>
                                            <p>{!! nl2br(e($question->question_text)) !!}</p>
                                        </div>
                                        <form class="question-form">
                                            <div class="mb-3">
                                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                                    <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_a_{{ $question->id }}" value="A">
                                                    <label class="form-check-label w-100" for="option_a_{{ $question->id }}">{{ $question->option_a }}</label>
                                                </div>
                                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                                    <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_b_{{ $question->id }}" value="B">
                                                    <label class="form-check-label w-100" for="option_b_{{ $question->id }}">{{ $question->option_b }}</label>
                                                </div>
                                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                                    <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_c_{{ $question->id }}" value="C">
                                                    <label class="form-check-label w-100" for="option_c_{{ $question->id }}">{{ $question->option_c }}</label>
                                                </div>
                                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                                    <input class="form-check-input" type="radio" name="question_{{ $question->id }}" id="option_d_{{ $question->id }}" value="D">
                                                    <label class="form-check-label w-100" for="option_d_{{ $question->id }}">{{ $question->option_d }}</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="d-flex justify-content-between mt-5">
                            <button class="btn btn-outline-secondary rounded-pill px-4" id="prevButton" disabled>
                                <i class="bi bi-arrow-left me-1"></i> Previous
                            </button>
                            <div>
                                <button class="btn btn-outline-warning rounded-pill me-2" id="flagButton">
                                    <i class="bi bi-flag-fill me-1"></i> Flag for Review
                                </button>
                                <button class="btn btn-primary rounded-pill px-4" id="nextButton">
                                    Next <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Question Navigation -->
            <div class="col-lg-4 mb-4">
                <div class="card shadow border-0 rounded-lg sticky-lg-top" data-aos="fade-up">
                    <div class="card-header bg-white p-4 border-0">
                        <h5 class="mb-0">Question Navigator</h5>
                    </div>
                    <div class="card-body p-3">
                        <!-- Section Navigation -->
                        <div class="nav nav-pills nav-fill mb-3" id="section-tab" role="tablist">
                            <button class="nav-link active" id="listening-tab" data-bs-toggle="pill" data-bs-target="#listening-nav" type="button" role="tab">Listening</button>
                            <button class="nav-link" id="structure-tab" data-bs-toggle="pill" data-bs-target="#structure-nav" type="button" role="tab">Structure</button>
                            <button class="nav-link" id="reading-tab" data-bs-toggle="pill" data-bs-target="#reading-nav" type="button" role="tab">Reading</button>
                        </div>

                        <!-- Question Buttons -->
                        <div class="tab-content p-2" id="section-tabContent">
                            <div class="tab-pane fade show active" id="listening-nav" role="tabpanel" aria-labelledby="listening-tab">
                                <div class="d-flex flex-wrap">
                                    @foreach ($listeningQuestions as $index => $question)
                                        <div class="question-button-wrapper" style="width: 20%; padding: 4px;">
                                            <button class="btn {{ $index == 0 ? 'btn-primary' : 'btn-outline-secondary' }} w-100 aspect-ratio-1x1" data-index="{{ $index }}" data-section="listening" data-id="{{ $question->id }}">{{ $index + 1 }}</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="structure-nav" role="tabpanel" aria-labelledby="structure-tab">
                                <div class="d-flex flex-wrap">
                                    @foreach ($structureQuestions as $index => $question)
                                        <div class="question-button-wrapper" style="width: 20%; padding: 4px;">
                                            <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1" data-index="{{ $index }}" data-section="structure" data-id="{{ $question->id }}">{{ $index + 1 }}</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reading-nav" role="tabpanel" aria-labelledby="reading-tab">
                                <div class="d-flex flex-wrap">
                                    @php $globalIndex = 0; @endphp
                                    @foreach ($readingPassages as $passage)
                                        @foreach ($passage->questions as $index => $question)
                                            <div class="question-button-wrapper" style="width: 20%; padding: 4px;">
                                                <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1" data-index="{{ $globalIndex }}" data-section="reading" data-passage="{{ $passage->id }}" data-id="{{ $question->id }}">{{ $index + 1 }}</button>
                                            </div>
                                            @php $globalIndex++; @endphp
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Legend -->
                        <div class="mt-4 pt-3 border-top">
                            <div class="mb-1 small">Question Status:</div>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-success me-2" style="width:15px; height:15px;"></div>
                                    <span class="small text-muted">Answered</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-primary me-2" style="width:15px; height:15px;"></div>
                                    <span class="small text-muted">Current</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-warning me-2" style="width:15px; height:15px;"></div>
                                    <span class="small text-muted">Flagged</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-outline-secondary border me-2" style="width:15px; height:15px;"></div>
                                    <span class="small text-muted">Unanswered</span>
                                </div>
                            </div>
                        </div>

                        <!-- Summary & Submit -->
                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="small">Questions answered:</div>
                                <div class="fw-bold" id="answered-count">0/140</div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="small">Questions flagged:</div>
                                <div class="fw-bold text-warning" id="flagged-count">0</div>
                            </div>
                            <button class="btn btn-success w-100 rounded-pill" id="submitTestBtn">
                                <i class="bi bi-check2-circle me-1"></i> Submit Test
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Confirmation Modal -->
        <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 border-0 shadow">
                    <div class="modal-header border-0 pb-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center px-4 pt-0 pb-4">
                        <div class="mb-4">
                            <i class="bi bi-exclamation-triangle-fill text-warning" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="mb-3" id="submitModalLabel">Submit Your Test?</h4>
                        <p class="text-muted mb-4">
                            You have only answered <span id="modal-answered-count">0</span> out of 140 questions.
                            Are you sure you want to submit your test now?
                        </p>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success rounded-pill py-2" id="confirmSubmitBtn">
                                <i class="bi bi-check2-circle me-1"></i> Yes, Submit My Test
                            </button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill py-2" data-bs-dismiss="modal">
                                Continue Working
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exit Confirmation Modal -->
        <div class="modal fade" id="exitModal" tabindex="-1" aria-labelledby="exitModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 border-0 shadow">
                    <div class="modal-header border-0 pb-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center px-4 pt-0 pb-4">
                        <div class="mb-4">
                            <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="mb-3" id="exitModalLabel">Exit Without Submitting?</h4>
                        <p class="text-muted mb-4">
                            Your progress will be lost if you exit now.
                            Are you sure you want to leave the test?
                        </p>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-danger rounded-pill py-2" id="confirmExitBtn">
                                <i class="bi bi-box-arrow-right me-1"></i> Yes, Exit Test
                            </button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill py-2" data-bs-dismiss="modal">
                                Continue Test
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Custom JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animations
            AOS.init({ duration: 800, once: true });

            // Timer
            let totalSeconds = {{ $testSettings->listening_time + $testSettings->structure_time + $testSettings->reading_time }} * 60;
            const timerElement = document.getElementById('timer');

            function updateTimer() {
                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;
                timerElement.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                if (totalSeconds <= 0) {
                    clearInterval(timerInterval);
                    autoSubmitTest();
                } else {
                    totalSeconds--;
                }
            }

            const timerInterval = setInterval(updateTimer, 1000);

            // Question navigation
            const questions = document.querySelectorAll('.question-container');
            const passages = document.querySelectorAll('.passage-content');
            const navButtons = document.querySelectorAll('.question-button-wrapper button');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            const flagButton = document.getElementById('flagButton');
            const questionTitle = document.getElementById('question-title');
            const sectionBadge = document.getElementById('section-badge');
            const answeredCount = document.getElementById('answered-count');
            const flaggedCount = document.getElementById('flagged-count');
            const modalAnsweredCount = document.getElementById('modal-answered-count');
            let currentIndex = 0;
            let answers = {};
            let flagged = new Set();

            function showQuestion(index) {
                questions.forEach(q => q.classList.add('d-none'));
                passages.forEach(p => p.classList.add('d-none'));
                navButtons.forEach(b => b.classList.remove('btn-primary', 'btn-success', 'btn-warning'));
                navButtons.forEach(b => b.classList.add('btn-outline-secondary'));

                const currentQuestion = questions[index];
                currentQuestion.classList.remove('d-none');
                const navButton = navButtons[index];
                navButton.classList.remove('btn-outline-secondary');
                navButton.classList.add(answers[currentQuestion.dataset.id] ? 'btn-success' : 'btn-primary');

                if (flagged.has(currentQuestion.dataset.id)) {
                    navButton.classList.remove('btn-primary', 'btn-success');
                    navButton.classList.add('btn-warning');
                    flagButton.classList.remove('btn-outline-warning');
                    flagButton.classList.add('btn-warning');
                } else {
                    flagButton.classList.remove('btn-warning');
                    flagButton.classList.add('btn-outline-warning');
                }

                if (currentQuestion.dataset.section === 'reading') {
                    const passage = document.querySelector(`.passage-content[data-passage="${currentQuestion.dataset.passage}"]`);
                    passage.classList.remove('d-none');
                }

                questionTitle.textContent = `Question #${index + 1}`;
                sectionBadge.innerHTML = currentQuestion.dataset.section === 'listening' ?
                    '<i class="bi bi-soundwave me-1"></i> Listening' :
                    currentQuestion.dataset.section === 'structure' ?
                    '<i class="bi bi-pencil-square me-1"></i> Structure' :
                    '<i class="bi bi-book me-1"></i> Reading';

                prevButton.disabled = index === 0;
                if (index === questions.length - 1) {
                    nextButton.classList.add('d-none');
                    nextButton.insertAdjacentHTML('afterend', '<button class="btn btn-primary rounded-pill px-4" id="submitButton">Submit <i class="bi bi-check2-circle ms-1"></i></button>');
                    document.getElementById('submitButton').addEventListener('click', () => {
                        const submitModal = new bootstrap.Modal(document.getElementById('submitModal'));
                        submitModal.show();
                    });
                } else {
                    document.querySelector('#submitButton')?.remove();
                    nextButton.classList.remove('d-none');
                }

                updateSummary();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            function updateSummary() {
                const answered = Object.keys(answers).length;
                answeredCount.textContent = `${answered}/140`;
                modalAnsweredCount.textContent = answered;
                flaggedCount.textContent = flagged.size;
            }

            // Audio player
            document.querySelectorAll('.play-button').forEach(button => {
                button.addEventListener('click', function() {
                    const question = this.closest('.question-container');
                    const audio = document.getElementById(`audio-${question.dataset.id}`);
                    const progress = document.getElementById(`audio-progress-${question.dataset.id}`);
                    const timeDisplay = document.getElementById(`audio-time-${question.dataset.id}`);
                    const playsRemaining = document.getElementById(`plays-remaining-${question.dataset.id}`);
                    let plays = parseInt(this.dataset.plays);

                    if (plays <= 0) {
                        alert('No plays remaining for this audio.');
                        return;
                    }

                    if (audio.paused) {
                        audio.play();
                        this.innerHTML = '<i class="bi bi-pause-fill"></i>';
                        const updateProgress = () => {
                            const percent = (audio.currentTime / audio.duration) * 100;
                            progress.style.width = `${percent}%`;
                            const minutes = Math.floor(audio.currentTime / 60);
                            const seconds = Math.floor(audio.currentTime % 60);
                            const durationMinutes = Math.floor(audio.duration / 60);
                            const durationSeconds = Math.floor(audio.duration % 60);
                            timeDisplay.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')} / ${String(durationMinutes).padStart(2, '0')}:${String(durationSeconds).padStart(2, '0')}`;
                        };
                        audio.addEventListener('timeupdate', updateProgress);
                        audio.onended = () => {
                            this.innerHTML = '<i class="bi bi-play-fill"></i>';
                            plays--;
                            this.dataset.plays = plays;
                            playsRemaining.textContent = `${plays} plays remaining`;
                            audio.currentTime = 0;
                            progress.style.width = '0%';
                            audio.removeEventListener('timeupdate', updateProgress);
                        };
                    } else {
                        audio.pause();
                        this.innerHTML = '<i class="bi bi-play-fill"></i>';
                    }
                });
            });

            // Answer handling
            document.querySelectorAll('.answer-option').forEach(option => {
                option.addEventListener('click', function() {
                    const question = this.closest('.question-container');
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                    question.querySelectorAll('.answer-option').forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    answers[question.dataset.id] = radio.value;
                    const navButton = Array.from(navButtons).find(b => b.dataset.id === question.dataset.id);
                    navButton.classList.remove('btn-primary', 'btn-warning');
                    navButton.classList.add(flagged.has(question.dataset.id) ? 'btn-warning' : 'btn-success');
                    updateSummary();
                    saveProgress();
                });
            });

            // Flag handling
            flagButton.addEventListener('click', function() {
                const question = questions[currentIndex];
                const navButton = Array.from(navButtons).find(b => b.dataset.id === question.dataset.id);
                if (flagged.has(question.dataset.id)) {
                    flagged.delete(question.dataset.id);
                    this.classList.remove('btn-warning');
                    this.classList.add('btn-outline-warning');
                    navButton.classList.remove('btn-warning');
                    navButton.classList.add(answers[question.dataset.id] ? 'btn-success' : 'btn-primary');
                } else {
                    flagged.add(question.dataset.id);
                    this.classList.remove('btn-outline-warning');
                    this.classList.add('btn-warning');
                    navButton.classList.remove('btn-primary', 'btn-success');
                    navButton.classList.add('btn-warning');
                }
                updateSummary();
                saveProgress();
            });

            // Navigation
            navButtons.forEach(button => {
                button.addEventListener('click', () => {
                    currentIndex = parseInt(button.dataset.index);
                    showQuestion(currentIndex);
                });
            });

            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    showQuestion(currentIndex);
                }
            });

            nextButton.addEventListener('click', () => {
                if (currentIndex < questions.length - 1) {
                    currentIndex++;
                    showQuestion(currentIndex);
                }
            });

            // Modals
            document.getElementById('exitButton').addEventListener('click', () => {
                const exitModal = new bootstrap.Modal(document.getElementById('exitModal'));
                exitModal.show();
            });

            document.getElementById('submitTestBtn').addEventListener('click', () => {
                const submitModal = new bootstrap.Modal(document.getElementById('submitModal'));
                submitModal.show();
            });

            document.getElementById('confirmSubmitBtn').addEventListener('click', () => {
                submitTest();
            });

            document.getElementById('confirmExitBtn').addEventListener('click', () => {
                window.location.href = '/certification-test?examCompleted=true&reason=exit&testId={{ $testId }}';
            });

            function autoSubmitTest() {
                alert('Time is up! Your test will be submitted automatically.');
                submitTest();
            }

            function saveProgress() {
                fetch('{{ route('exam.saveProgress') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        testId: '{{ $testId }}',
                        currentQuestion: currentIndex,
                        answers: answers,
                        flagged: Array.from(flagged),
                        timeRemaining: totalSeconds
                    })
                }).then(response => response.json()).catch(error => console.error('Error saving progress:', error));
            }

            function submitTest() {
                fetch('{{ route('exam.submit') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        testId: '{{ $testId }}',
                        answers: answers,
                        flagged: Array.from(flagged)
                    })
                }).then(response => response.json()).then(data => {
                    window.location.href = '/certification-test?examCompleted=true&reason=submit&testId={{ $testId }}';
                }).catch(error => console.error('Error submitting test:', error));
            }

            // Initialize
            showQuestion(0);
        });
    </script>
</body>
</html>
