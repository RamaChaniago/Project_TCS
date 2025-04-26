<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOEFL ITP Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #ffffff; }
        .question { margin-bottom: 20px; }
        .passage { margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">TOEFL ITP Exam</h1>
        <form method="POST" action="{{ route('exam.submit') }}">
            @csrf
            <input type="hidden" name="exam_attempt_id" value="{{ $examAttempt->id }}">

            <!-- Listening Section -->
            <div id="section-listening" class="section">
                <h2>Listening Section</h2>
                <div id="timer-listening" class="mb-3 text-muted"></div>
                @foreach ($listeningQuestions as $question)
                    <div class="question">
                        @if ($question->audio_file)
                            <audio controls class="mb-2">
                                <source src="{{ asset('storage/' . $question->audio_file) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        @endif
                        <p>{{ $question->question_text }}</p>
                        <div>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="A"> {{ $question->option_a }}</label><br>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="B"> {{ $question->option_b }}</label><br>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="C"> {{ $question->option_c }}</label><br>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="D"> {{ $question->option_d }}</label>
                        </div>
                    </div>
                @endforeach
                <button type="button" class="btn btn-primary mt-3" onclick="nextSection()">Next</button>
            </div>

            <!-- Structure Section -->
            <div id="section-structure" class="section" style="display: none;">
                <h2>Structure Section</h2>
                <div id="timer-structure" class="mb-3 text-muted"></div>
                @foreach ($structureQuestions as $question)
                    <div class="question">
                        <p>{{ $question->question_text }}</p>
                        <div>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="A"> {{ $question->option_a }}</label><br>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="B"> {{ $question->option_b }}</label><br>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="C"> {{ $question->option_c }}</label><br>
                            <label><input type="radio" name="answer[{{ $question->id }}]" value="D"> {{ $question->option_d }}</label>
                        </div>
                    </div>
                @endforeach
                <button type="button" class="btn btn-primary mt-3" onclick="nextSection()">Next</button>
            </div>

            <!-- Reading Section -->
            <div id="section-reading" class="section" style="display: none;">
                <h2>Reading Section</h2>
                <div id="timer-reading" class="mb-3 text-muted"></div>
                @foreach ($readingPassages as $passage)
                    <div class="passage">
                        <p>{{ $passage->reading_passage }}</p>
                        @foreach ($passage->questions as $question)
                            <div class="question">
                                <p>{{ $question->question_text }}</p>
                                <div>
                                    <label><input type="radio" name="answer[{{ $question->id }}]" value="A"> {{ $question->option_a }}</label><br>
                                    <label><input type="radio" name="answer[{{ $question->id }}]" value="B"> {{ $question->option_b }}</label><br>
                                    <label><input type="radio" name="answer[{{ $question->id }}]" value="C"> {{ $question->option_c }}</label><br>
                                    <label><input type="radio" name="answer[{{ $question->id }}]" value="D"> {{ $question->option_d }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <button type="submit" class="btn btn-success mt-3" id="submit-btn">Submit Exam</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sectionTimes = {
            'listening': {{ $listeningTime * 60 }},
            'structure': {{ $structureTime * 60 }},
            'reading': {{ $readingTime * 60 }},
        };
        const sections = ['listening', 'structure', 'reading'];
        let currentSectionIndex = 0;
        let timerInterval;

        function startTimer(section) {
            let timeLeft = sectionTimes[section];
            const timerElement = document.getElementById(`timer-${section}`);
            timerInterval = setInterval(() => {
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    nextSection();
                } else {
                    timeLeft--;
                    const minutes = Math.floor(timeLeft / 60);
                    const seconds = timeLeft % 60;
                    timerElement.textContent = `Time remaining: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                }
            }, 1000);
        }

        function nextSection() {
            clearInterval(timerInterval);
            if (currentSectionIndex < sections.length - 1) {
                document.getElementById(`section-${sections[currentSectionIndex]}`).style.display = 'none';
                currentSectionIndex++;
                document.getElementById(`section-${sections[currentSectionIndex]}`).style.display = 'block';
                startTimer(sections[currentSectionIndex]);
            }
        }

        // Start with the Listening section
        startTimer(sections[currentSectionIndex]);
    </script>
</body>
</html>
