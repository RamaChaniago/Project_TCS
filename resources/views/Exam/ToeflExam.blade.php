<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOEFL ITP Examination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9fafb;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        .answer-option {
            transition: all 0.2s ease;
            cursor: pointer;
        }
        .answer-option:hover {
            border-color: #0d6efd !important;
            background-color: #f8f9ff;
        }
        .answer-option.selected {
            border-color: #0d6efd !important;
            background-color: #e7f1ff;
        }
        .sticky-lg-top {
            top: 1.5rem;
        }
        .question-button-wrapper {
            width: 20%;
            padding: 0.25rem;
        }
        .aspect-ratio-1x1 {
            height: 2.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @media (max-width: 767px) {
            .question-button-wrapper {
                width: 25% !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid py-5">
        <div class="card shadow-sm border-0 rounded-3 mb-4" data-aos="fade-up">
            <div class="card-header bg-white p-4 border-0">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div>
                        <h4 class="fw-bold mb-1">TOEFL ITP Examination</h4>
                        <p class="text-muted mb-0">Test your English proficiency with this standardized test</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="text-center">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-clock text-primary"></i>
                                <span id="timer" class="fw-semibold">02:00:00</span>
                            </div>
                            <small class="text-muted">Time Remaining</small>
                        </div>
                        <button class="btn btn-outline-danger rounded-pill" id="exitButton">
                            <i class="bi bi-box-arrow-right me-1"></i> Exit
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0 rounded-3 mb-4" data-aos="fade-up">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                    <h5 class="mb-0">Section 1: Listening Comprehension</h5>
                    <span class="badge bg-primary px-3 py-2">Question 5 of 50</span>
                </div>
                <div class="progress" style="height: 0.5rem;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-2 small text-muted">
                    <span>10% completed</span>
                    <span>40 questions remaining</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm border-0 rounded-3" data-aos="fade-up">
                    <div class="card-header bg-white p-4 border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Question #5</h5>
                            <span class="badge bg-dark px-3 py-2">
                                <i class="bi bi-soundwave me-1"></i> Listening
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="bg-light p-4 rounded-3 mb-4">
                            <div class="text-center mb-3">
                                <i class="bi bi-volume-up-fill text-primary" style="font-size: 2rem;"></i>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <button class="btn btn-primary rounded-circle" id="playButton" style="width: 2.5rem; height: 2.5rem;">
                                    <i class="bi bi-play-fill"></i>
                                </button>
                                <div class="progress flex-grow-1" style="height: 0.5rem;">
                                    <div class="progress-bar bg-primary" id="audioProgress" role="progressbar"
                                         style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted" id="audioTime">00:00 / 01:30</small>
                            </div>
                            <div class="text-center text-muted small">
                                <i class="bi bi-info-circle me-1"></i> Audio can be played twice
                                <span class="ms-2 badge bg-light text-dark">1 play remaining</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="fw-semibold mb-2">Listen to the conversation and answer:</p>
                            <p>What is the woman primarily discussing?</p>
                        </div>

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

                        <div class="d-flex justify-content-between mt-5 flex-wrap gap-2">
                            <button class="btn btn-outline-secondary rounded-pill px-4" id="prevButton">
                                <i class="bi bi-arrow-left me-1"></i> Previous
                            </button>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-warning rounded-pill" id="flagButton">
                                    <i class="bi bi-flag-fill me-1"></i> Flag
                                </button>
                                <button class="btn btn-primary rounded-pill px-4" id="nextButton">
                                    Next <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm border-0 rounded-3 sticky-lg-top" data-aos="fade-up">
                    <div class="card-header bg-white p-4 border-0">
                        <h5 class="mb-0">Question Navigator</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="nav nav-pills nav-fill mb-3" id="section-tab" role="tablist">
                            <button class="nav-link active" id="listening-tab" data-bs-toggle="pill"
                                    data-bs-target="#listening" type="button" role="tab">Listening</button>
                            <button class="nav-link" id="structure-tab" data-bs-toggle="pill"
                                    data-bs-target="#structure" type="button" role="tab">Structure</button>
                            <button class="nav-link" id="reading-tab" data-bs-toggle="pill"
                                    data-bs-target="#reading" type="button" role="tab">Reading</button>
                        </div>

                        <div class="tab-content p-2" id="section-tabContent">
                            <div class="tab-pane fade show active" id="listening" role="tabpanel">
                                <div class="d-flex flex-wrap">
                                    <script>
                                        for (let i = 1; i <= 50; i++) {
                                            let btnClass = 'btn-outline-secondary';
                                            if (i === 5) btnClass = 'btn-primary';
                                            else if (i < 5) btnClass = 'btn-success';
                                            else if (i === 7 || i === 12) btnClass = 'btn-warning';
                                            document.write(`
                                                <div class="question-button-wrapper">
                                                    <button class="btn ${btnClass} w-100 aspect-ratio-1x1">${i}</button>
                                                </div>
                                            `);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="structure" role="tabpanel">
                                <div class="d-flex flex-wrap">
                                    <script>
                                        for (let i = 1; i <= 40; i++) {
                                            document.write(`
                                                <div class="question-button-wrapper">
                                                    <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1">${i}</button>
                                                </div>
                                            `);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reading" role="tabpanel">
                                <div class="d-flex flex-wrap">
                                    <script>
                                        for (let i = 1; i <= 50; i++) {
                                            document.write(`
                                                <div class="question-button-wrapper">
                                                    <button class="btn btn-outline-secondary w-100 aspect-ratio-1x1">${i}</button>
                                                </div>
                                            `);
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <div class="small mb-2">Question Status:</div>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-success me-2" style="width: 1rem; height: 1rem;"></div>
                                    <span class="small text-muted">Answered</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-primary me-2" style="width: 1rem; height: 1rem;"></div>
                                    <span class="small text-muted">Current</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-warning me-2" style="width: 1rem; height: 1rem;"></div>
                                    <span class="small text-muted">Flagged</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="badge bg-outline-secondary border me-2" style="width: 1rem; height: 1rem;"></div>
                                    <span class="small text-muted">Unanswered</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex justify-content-between mb-2 small">
                                <span>Questions answered:</span>
                                <span class="fw-semibold">4/140</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3 small">
                                <span>Questions flagged:</span>
                                <span class="fw-semibold text-warning">2</span>
                            </div>
                            <button class="btn btn-success w-100 rounded-pill" id="submitTestBtn">
                                <i class="bi bi-check2-circle me-1"></i> Submit Test
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow-sm">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <i class="bi bi-exclamation-triangle-fill text-warning mb-3" style="font-size: 3rem;"></i>
                        <h4 class="mb-3">Submit Your Test?</h4>
                        <p class="text-muted mb-4">You have answered 4/140 questions. Sure you want to submit?</p>
                        <form id="submitForm" action="/exam-toefl/result" method="POST">
                            <input type="hidden" name="testId" id="testIdInput">
                            <input type="hidden" name="answers" id="answersInput">
                            <input type="hidden" name="flagged" id="flaggedInput">
                            <input type="hidden" name="timeRemaining" id="timeRemainingInput">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success rounded-pill py-2" id="confirmSubmitBtn">
                                    <i class="bi bi-check2-circle me-1"></i> Submit Test
                                </button>
                                <button type="button" class="btn btn-outline-secondary rounded-pill py-2" data-bs-dismiss="modal">
                                    Continue Working
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exitModal" tabindex="-1" aria-labelledby="exitModalLabel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded-4 shadow-sm">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <i class="bi bi-exclamation-triangle-fill text-danger mb-3" style="font-size: 3rem;"></i>
                        <h4 class="mb-3">Exit Without Submitting?</h4>
                        <p class="text-muted mb-4">Your progress will be lost. Sure you want to exit?</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger rounded-pill py-2" id="confirmExitBtn">
                                <i class="bi bi-box-arrow-right me-1"></i> Exit Test
                            </button>
                            <button class="btn btn-outline-secondary rounded-pill py-2" data-bs-dismiss="modal">
                                Continue Test
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({ duration: 600, once: true });

            const urlParams = new URLSearchParams(window.location.search);
            const testId = urlParams.get('testId') || '0';

            let totalSeconds = 7200; // 2 hours
            const timerElement = document.getElementById('timer');
            const updateTimer = () => {
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
            };
            const timerInterval = setInterval(updateTimer, 1000);

            const playButton = document.getElementById('playButton');
            const audioProgress = document.getElementById('audioProgress');
            const audioTime = document.getElementById('audioTime');
            let audioPlaying = false;
            let currentAudioTime = 0;
            const totalAudioTime = 90;
            let audioInterval;

            playButton.addEventListener('click', () => {
                if (audioPlaying) {
                    clearInterval(audioInterval);
                    playButton.innerHTML = '<i class="bi bi-play-fill"></i>';
                    audioPlaying = false;
                } else {
                    audioPlaying = true;
                    playButton.innerHTML = '<i class="bi bi-pause-fill"></i>';
                    audioInterval = setInterval(() => {
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

            document.getElementById('exitButton').addEventListener('click', () => {
                new bootstrap.Modal(document.getElementById('exitModal')).show();
            });

            document.getElementById('submitTestBtn').addEventListener('click', () => {
                new bootstrap.Modal(document.getElementById('submitModal')).show();
            });

            document.getElementById('confirmExitBtn').addEventListener('click', () => finishExam('exit'));

            document.querySelectorAll('.answer-option').forEach(option => {
                option.addEventListener('click', () => {
                    document.querySelectorAll('.answer-option').forEach(opt => opt.classList.remove('selected'));
                    option.classList.add('selected');
                    option.querySelector('input[type="radio"]').checked = true;
                });
            });

            const flagButton = document.getElementById('flagButton');
            let isQuestionFlagged = false;
            flagButton.addEventListener('click', () => {
                isQuestionFlagged = !isQuestionFlagged;
                flagButton.classList.toggle('btn-outline-warning', !isQuestionFlagged);
                flagButton.classList.toggle('btn-warning', isQuestionFlagged);

                const currentQuestionBtn = document.querySelector('.btn-primary:not(.rounded-pill)') ||
                                         document.querySelector('.btn-warning:not(.rounded-pill)');
                if (currentQuestionBtn) {
                    currentQuestionBtn.className = currentQuestionBtn.className
                        .replace(/btn-(primary|warning)/, isQuestionFlagged ? 'btn-warning' :
                        document.querySelector('input[name="question5"]:checked') ? 'btn-success' : 'btn-primary');
                }
            });

            document.getElementById('nextButton').addEventListener('click', () => alert('Moving to next question'));
            document.getElementById('prevButton').addEventListener('click', () => alert('Moving to previous question'));

            const autoSubmitTest = () => {
                alert('Time is up! Test submitting automatically.');
                submitTestData('timeout');
            };

            const submitTestData = (reason) => {
                const answersData = {
                    testId,
                    currentQuestion: 5,
                    answers: { question5: document.querySelector('input[name="question5"]:checked')?.value || null },
                    flagged: [7, 12],
                    timeRemaining: totalSeconds
                };

                document.getElementById('testIdInput').value = answersData.testId;
                document.getElementById('answersInput').value = JSON.stringify(answersData.answers);
                document.getElementById('flaggedInput').value = JSON.stringify(answersData.flagged);
                document.getElementById('timeRemainingInput').value = answersData.timeRemaining;

                document.getElementById('submitForm').submit();
            };

            const finishExam = (reason) => {
                setTimeout(() => {
                    window.location.href = `/certification-test?examCompleted=true&reason=${reason}&testId=${testId}`;
                }, 500);
            };

            setInterval(() => {
                const answersData = {
                    testId,
                    currentQuestion: 5,
                    answers: { question5: document.querySelector('input[name="question5"]:checked')?.value || null },
                    flagged: [7, 12],
                    timeRemaining: totalSeconds
                };
                console.log('Progress saved:', answersData);
            }, 30000);
        });
    </script>
</body>
</html>
