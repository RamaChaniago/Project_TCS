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
            background-color: #f8f9fa;
        }
        .aspect-ratio-1x1 {
            position: relative;
            width: 100%;
            padding-bottom: 0;
            font-size: 14px;
            font-weight: 500;
        }
        .answer-option:hover {
            border-color: #0d6efd !important;
            background-color: #f8f9ff;
        }
        .answer-option.selected {
            border-color: #0d6efd !important;
            background-color: #f0f7ff;
        }
        .sticky-lg-top {
            top: 20px;
        }
        @media (max-width: 767px) {
            .question-button-wrapper {
                width: 20% !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <!-- Exam Header -->
        <div class="card shadow-lg border-0 rounded-lg mb-4" data-aos="fade-up">
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
                                    <span id="timer" class="fw-bold">02:00:00</span>
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

        <!-- Test Progress -->
        <div class="card shadow border-0 rounded-lg mb-4" data-aos="fade-up">
            <div class="card-body p-4">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Section 1: Listening Comprehension</h5>
                    <div class="badge bg-primary px-3 py-2">Question 5 of 50</div>
                </div>
                <div class="progress" style="height: 8px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="small text-muted">10% completed</div>
                    <div class="small text-muted">40 questions remaining</div>
                </div>
            </div>
        </div>

        <!-- Exam Content -->
        <div class="row">
            <!-- Questions Panel -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-lg border-0 rounded-lg" data-aos="fade-up">
                    <div class="card-header bg-white p-4 border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Question #5</h5>
                            <span class="badge bg-dark px-3 py-2">
                                <i class="bi bi-soundwave me-1"></i> Listening
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <!-- Audio Player for Listening Section -->
                        <div class="bg-light p-4 rounded-3 mb-4">
                            <div class="text-center mb-3">
                                <i class="bi bi-volume-up-fill text-primary" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <button class="btn btn-primary rounded-circle me-3" id="playButton">
                                    <i class="bi bi-play-fill"></i>
                                </button>
                                <div class="progress flex-grow-1" style="height: 8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0%;"
                                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="audioProgress"></div>
                                </div>
                                <div class="ms-3 text-muted small" id="audioTime">00:00 / 01:30</div>
                            </div>
                            <div class="text-center text-muted small">
                                <i class="bi bi-info-circle me-1"></i> You can play this audio only twice
                                <span class="ms-2 badge bg-light text-dark">1 play remaining</span>
                            </div>
                        </div>

                        <!-- Question Text -->
                        <div class="mb-4">
                            <p class="mb-2 fw-bold">Listen to the conversation and answer the question:</p>
                            <p>What is the woman primarily discussing?</p>
                        </div>

                        <!-- Answer Choices -->
                        <form id="questionForm">
                            <div class="mb-3">
                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                    <input class="form-check-input" type="radio" name="question5" id="q5a" value="a">
                                    <label class="form-check-label w-100" for="q5a">
                                        A research paper she needs to complete
                                    </label>
                                </div>
                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                    <input class="form-check-input" type="radio" name="question5" id="q5b" value="b">
                                    <label class="form-check-label w-100" for="q5b">
                                        A schedule change for the upcoming semester
                                    </label>
                                </div>
                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                    <input class="form-check-input" type="radio" name="question5" id="q5c" value="c">
                                    <label class="form-check-label w-100" for="q5c">
                                        Her difficulties with a science course
                                    </label>
                                </div>
                                <div class="form-check p-3 border rounded mb-3 answer-option">
                                    <input class="form-check-input" type="radio" name="question5" id="q5d" value="d">
                                    <label class="form-check-label w-100" for="q5d">
                                        A plan to join a study group
                                    </label>
                                </div>
                            </div>
                        </form>

                        <!-- Navigation Buttons -->
                        <div class="d-flex justify-content-between mt-5">
                            <button class="btn btn-outline-secondary rounded-pill px-4" id="prevButton">
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
                            <button class="nav-link active" id="listening-tab" data-bs-toggle="pill" data-bs-target="#listening" type="button" role="tab">
                                Listening
                            </button>
                            <button class="nav-link" id="structure-tab" data-bs-toggle="pill" data-bs-target="#structure" type="button" role="tab">
                                Structure
                            </button>
                            <button class="nav-link" id="reading-tab" data-bs-toggle="pill" data-bs-target="#reading" type="button" role="tab">
                                Reading
                            </button>
                        </div>

                        <!-- Question Buttons -->
                        <div class="tab-content p-2" id="section-tabContent">
                            <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening-tab">
                                <div class="d-flex flex-wrap">
                                    <?php for ($i = 1; $i <= 50; $i++): ?>
                                        <div class="question-button-wrapper" style="width: 20%; padding: 4px;">
                                            <?php if ($i == 5): ?>
                                                <button class="btn btn-primary w-100 aspect-ratio-1x1 d-flex align-items-center justify-content-center" style="height: 40px;"><?php echo $i; ?></button>
                                            <?php elseif ($i < 5): ?>
                                                <button class="btn btn-success w-100 aspect-ratio-1x1 d-flex align-items-center justify-content-center" style="height: 40px;"><?php echo $i; ?></button>
                                            <?php elseif ($i == 7 || $i == 12): ?>
                                                <button class="btn btn-warning w-100 aspect-ratio-1x1 d-flex align-items-center justify-content-center" style="height: 40px;"><?php echo $i; ?></button>
                                            <?php else: ?>
                                                <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1 d-flex align-items-center justify-content-center" style="height: 40px;"><?php echo $i; ?></button>
                                            <?php endif; ?>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="structure" role="tabpanel" aria-labelledby="structure-tab">
                                <div class="d-flex flex-wrap">
                                    <?php for ($i = 1; $i <= 40; $i++): ?>
                                        <div class="question-button-wrapper" style="width: 20%; padding: 4px;">
                                            <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1 d-flex align-items-center justify-content-center" style="height: 40px;"><?php echo $i; ?></button>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reading" role="tabpanel" aria-labelledby="reading-tab">
                                <div class="d-flex flex-wrap">
                                    <?php for ($i = 1; $i <= 50; $i++): ?>
                                        <div class="question-button-wrapper" style="width: 20%; padding: 4px;">
                                            <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1 d-flex align-items-center justify-content-center" style="height: 40px;"><?php echo $i; ?></button>
                                        </div>
                                    <?php endfor; ?>
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
                                <div class="fw-bold">4/140</div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div class="small">Questions flagged:</div>
                                <div class="fw-bold text-warning">2</div>
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
                            You have only answered 4 out of 140 questions.
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
            AOS.init({
                duration: 800,
                once: true
            });

            // Store the test ID or any needed data from URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const testId = urlParams.get('testId') || '0';

            // Set initial time (2 hours)
            let totalSeconds = 2 * 60 * 60;
            const timerElement = document.getElementById('timer');

            function updateTimer() {
                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;

                timerElement.textContent = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

                if (totalSeconds <= 0) {
                    clearInterval(timerInterval);
                    // Auto-submit when time runs out
                    autoSubmitTest();
                } else {
                    totalSeconds--;
                }
            }

            // Update timer every second
            const timerInterval = setInterval(updateTimer, 1000);

            // Audio player simulation
            const playButton = document.getElementById('playButton');
            const audioProgress = document.getElementById('audioProgress');
            const audioTime = document.getElementById('audioTime');
            let audioPlaying = false;
            let audioInterval;
            let currentAudioTime = 0;
            const totalAudioTime = 90; // 1:30 in seconds

            playButton.addEventListener('click', function() {
                if (audioPlaying) {
                    // Pause audio
                    clearInterval(audioInterval);
                    playButton.innerHTML = '<i class="bi bi-play-fill"></i>';
                    audioPlaying = false;
                } else {
                    // Play audio
                    audioPlaying = true;
                    playButton.innerHTML = '<i class="bi bi-pause-fill"></i>';

                    audioInterval = setInterval(function() {
                        currentAudioTime++;
                        const progressPercent = (currentAudioTime / totalAudioTime) * 100;
                        audioProgress.style.width = `${progressPercent}%`;

                        const minutes = Math.floor(currentAudioTime / 60);
                        const seconds = currentAudioTime % 60;
                        audioTime.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')} / 01:30`;

                        if (currentAudioTime >= totalAudioTime) {
                            clearInterval(audioInterval);
                            playButton.innerHTML = '<i class="bi bi-play-fill"></i>';
                            audioPlaying = false;
                            currentAudioTime = 0;
                        }
                    }, 1000);
                }
            });

            // Exit button functionality
            document.getElementById('exitButton').addEventListener('click', function() {
                const exitModal = new bootstrap.Modal(document.getElementById('exitModal'));
                exitModal.show();
            });

            // Submit test button functionality
            document.getElementById('submitTestBtn').addEventListener('click', function() {
                const submitModal = new bootstrap.Modal(document.getElementById('submitModal'));
                submitModal.show();
            });

            // Confirm submit button functionality
            document.getElementById('confirmSubmitBtn').addEventListener('click', function() {
                finishExam('submit');
            });

            // Confirm exit button functionality
            document.getElementById('confirmExitBtn').addEventListener('click', function() {
                finishExam('exit');
            });

            // Answer option highlighting
            const answerOptions = document.querySelectorAll('.answer-option');
            answerOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Add highlighting when selected
                    answerOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');

                    // Ensure the radio button is checked
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                });
            });

            // Flag button functionality
            const flagButton = document.getElementById('flagButton');
            let isQuestionFlagged = false;

            flagButton.addEventListener('click', function() {
                isQuestionFlagged = !isQuestionFlagged;

                if (isQuestionFlagged) {
                    flagButton.classList.remove('btn-outline-warning');
                    flagButton.classList.add('btn-warning');
                    // Update the current question button to flagged state
                    const currentQuestionBtn = document.querySelector('.btn-primary:not(.rounded-pill)');
                    if (currentQuestionBtn) {
                        currentQuestionBtn.classList.remove('btn-primary');
                        currentQuestionBtn.classList.add('btn-warning');
                    }
                } else {
                    flagButton.classList.remove('btn-warning');
                    flagButton.classList.add('btn-outline-warning');
                    // Revert to normal state
                    const currentQuestionBtn = document.querySelector('.btn-warning:not(.rounded-pill)');
                    if (currentQuestionBtn) {
                        currentQuestionBtn.classList.remove('btn-warning');
                        // Determine if it should be answered (success) or current (primary)
                        const isAnswered = document.querySelector('input[name="question5"]:checked') !== null;
                        currentQuestionBtn.classList.add(isAnswered ? 'btn-success' : 'btn-primary');
                    }
                }
            });

            // Navigation buttons functionality (simplified)
            document.getElementById('nextButton').addEventListener('click', function() {
                // Simulate moving to next question
                alert('Moving to next question - this would be implemented with actual question data');
            });

            document.getElementById('prevButton').addEventListener('click', function() {
                // Simulate moving to previous question
                alert('Moving to previous question - this would be implemented with actual question data');
            });

            // Function to auto-submit when time runs out
            function autoSubmitTest() {
                alert('Time is up! Your test will be submitted automatically.');
                finishExam('timeout');
            }

            // Function to handle exam completion and redirect specifically to /certification-test
            function finishExam(reason) {
                // In a real application, you'd submit the answers to the server first
                // For this example, we'll just simulate the submission

                // Create AJAX request to submit answers (in a real implementation)
                // For demonstration purposes, we'll just do a timeout to simulate processing
                setTimeout(function() {
                    // Redirect to specified route with parameters
                    window.location.href = '/certification-test?examCompleted=true&reason=' + reason + '&testId=' + testId;
                }, 500);
            }

            // Save exam progress periodically (every 30 seconds)
            setInterval(function() {
                // This would save the current exam state to the server or localStorage
                console.log('Saving exam progress...');
                // In a real implementation, collect and save all answers and current question

                const answersData = {
                    testId: testId,
                    currentQuestion: 5,
                    answers: {
                        // Collect all answers here
                        'question5': document.querySelector('input[name="question5"]:checked')?.value || null
                    },
                    flagged: [7, 12], // Example of flagged questions
                    timeRemaining: totalSeconds
                };

                // This would typically be an AJAX request to save progress
                console.log('Progress data:', answersData);
            }, 30000);
        });
    </script>
</body>
</html>
