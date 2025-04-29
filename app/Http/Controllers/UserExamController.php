<?php

namespace App\Http\Controllers;

use App\Models\ToeflQuestion;
use App\Models\ToeflPassage;
use App\Models\ToeflTestSetting;
use App\Models\UserExam; // New model for tracking user exam progress
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserExamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // Ensure user is authenticated
    }

    public function index(Request $request)
    {
        $testId = $request->query('testId', '0');

        // Fetch questions and settings
        $listeningQuestions = ToeflQuestion::where('section', 'listening')->get();
        $structureQuestions = ToeflQuestion::where('section', 'structure')->get();
        $readingPassages = ToeflPassage::with('questions')->get();
        $testSettings = ToeflTestSetting::first();

        // Load user progress if exists
        $userExam = UserExam::where('user_id', Auth::id())->where('test_id', $testId)->first();
        $answers = $userExam ? json_decode($userExam->answers, true) : [];
        $flagged = $userExam ? json_decode($userExam->flagged, true) : [];
        $currentQuestion = $userExam ? $userExam->current_question : 0;
        $timeRemaining = $userExam ? $userExam->time_remaining : ($testSettings->listening_time + $testSettings->structure_time + $testSettings->reading_time) * 60;

        return view('exam', compact('listeningQuestions', 'structureQuestions', 'readingPassages', 'testSettings', 'testId', 'answers', 'flagged', 'currentQuestion', 'timeRemaining'));
    }

    public function saveProgress(Request $request)
    {
        $data = $request->validate([
            'testId' => 'required|string',
            'currentQuestion' => 'required|integer',
            'answers' => 'required|array',
            'flagged' => 'required|array',
            'timeRemaining' => 'required|integer'
        ]);

        $userExam = UserExam::updateOrCreate(
            ['user_id' => Auth::id(), 'test_id' => $data['testId']],
            [
                'current_question' => $data['currentQuestion'],
                'answers' => json_encode($data['answers']),
                'flagged' => json_encode($data['flagged']),
                'time_remaining' => $data['timeRemaining']
            ]
        );

        return response()->json(['status' => 'success', 'message' => 'Progress saved']);
    }

    public function submit(Request $request)
    {
        $data = $request->validate([
            'testId' => 'required|string',
            'answers' => 'required|array',
            'flagged' => 'required|array',
            'timeRemaining' => 'required|integer'
        ]);

        // Save final answers and mark exam as completed
        $userExam = UserExam::updateOrCreate(
            ['user_id' => Auth::id(), 'test_id' => $data['testId']],
            [
                'answers' => json_encode($data['answers']),
                'flagged' => json_encode($data['flagged']),
                'time_remaining' => $data['timeRemaining'],
                'completed_at' => now()
            ]
        );

        // Calculate score (simplified example)
        $score = 0;
        foreach ($data['answers'] as $questionId => $answer) {
            $question = ToeflQuestion::find($questionId);
            if ($question && $question->correct_answer === $answer) {
                $score++;
            }
        }

        $userExam->update(['score' => $score]);

        return response()->json(['status' => 'success', 'message' => 'Exam submitted', 'score' => $score]);
    }
}
