<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ToeflQuestion;
use App\Models\ToeflTestSetting;
use App\Models\ToeflPassage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the questions.
     */
    public function index()
    {
        $questions = ToeflQuestion::latest()->paginate(10);

        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

        // Get test timing settings
        $testSettings = ToeflTestSetting::first();
        $listeningTime = $testSettings ? $testSettings->listening_time : 35;
        $structureTime = $testSettings ? $testSettings->structure_time : 25;
        $readingTime = $testSettings ? $testSettings->reading_time : 55;
        $lastTimingUpdate = $testSettings ? $testSettings->last_updated : now();

        return view('Admin.Course-Management', compact(
            'questions',
            'totalQuestions',
            'listeningQuestions',
            'structureQuestions',
            'readingQuestions',
            'listeningTime',
            'structureTime',
            'readingTime',
            'lastTimingUpdate'
        ));
    }

    /**
     * Filter questions based on criteria.
     */
    public function filter(Request $request)
    {
        $query = ToeflQuestion::query();

        // Apply filters
        if ($request->filled('section')) {
            $query->where('section', $request->section);
        }

        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('question_text', 'like', "%{$search}%")
                    ->orWhere('option_a', 'like', "%{$search}%")
                    ->orWhere('option_b', 'like', "%{$search}%")
                    ->orWhere('option_c', 'like', "%{$search}%")
                    ->orWhere('option_d', 'like', "%{$search}%");
            });
        }

        $questions = $query->latest()->paginate(10)->withQueryString();

        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

        // Get test timing settings
        $testSettings = ToeflTestSetting::first();
        $listeningTime = $testSettings ? $testSettings->listening_time : 35;
        $structureTime = $testSettings ? $testSettings->structure_time : 25;
        $readingTime = $testSettings ? $testSettings->reading_time : 55;
        $lastTimingUpdate = $testSettings ? $testSettings->last_updated : now();

        return view('Admin.Course-Management', compact(
            'questions',
            'totalQuestions',
            'listeningQuestions',
            'structureQuestions',
            'readingQuestions',
            'listeningTime',
            'structureTime',
            'readingTime',
            'lastTimingUpdate'
        ));
    }

    /**
     * Show the form for creating a new question.
     */
    public function create()
    {
        $passages = ToeflPassage::all();
        return view('Admin.Questions.create', compact('passages'));
    }

    /**
     * Store a newly created question in database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|in:Listening,Structure,Reading',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240', // 10MB max
            'reading_passage' => 'nullable|string'
        ]);

        $data = $request->except(['audio_file']);

        // Handle audio file upload for Listening questions
        if ($request->hasFile('audio_file') && $request->section == 'Listening') {
            $audioFile = $request->file('audio_file');
            $path = $audioFile->store('audio', 'public');
            $data['audio_file'] = $path;
        }

        ToeflQuestion::create($data);

        return redirect()->route('questions.index')->with('success', 'Question created successfully!');
    }

    /**
     * Display the specified question.
     */
    public function show(ToeflQuestion $question)
    {
        $viewQuestion = $question;

        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

        // Get test timing settings
        $testSettings = ToeflTestSetting::first();
        $listeningTime = $testSettings ? $testSettings->listening_time : 35;
        $structureTime = $testSettings ? $testSettings->structure_time : 25;
        $readingTime = $testSettings ? $testSettings->reading_time : 55;
        $lastTimingUpdate = $testSettings ? $testSettings->last_updated : now();

        $questions = ToeflQuestion::latest()->paginate(10);

        return view('Admin.Course-Management', compact(
            'questions',
            'viewQuestion',
            'totalQuestions',
            'listeningQuestions',
            'structureQuestions',
            'readingQuestions',
            'listeningTime',
            'structureTime',
            'readingTime',
            'lastTimingUpdate'
        ));
    }

    /**
     * Show the form for editing the specified question.
     */
    public function edit(ToeflQuestion $question)
    {
        $editQuestion = $question;

        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

        // Get test timing settings
        $testSettings = ToeflTestSetting::first();
        $listeningTime = $testSettings ? $testSettings->listening_time : 35;
        $structureTime = $testSettings ? $testSettings->structure_time : 25;
        $readingTime = $testSettings ? $testSettings->reading_time : 55;
        $lastTimingUpdate = $testSettings ? $testSettings->last_updated : now();

        $questions = ToeflQuestion::latest()->paginate(10);
        $passages = ToeflPassage::all();

        return view('Admin.Course-Management', compact(
            'questions',
            'editQuestion',
            'passages',
            'totalQuestions',
            'listeningQuestions',
            'structureQuestions',
            'readingQuestions',
            'listeningTime',
            'structureTime',
            'readingTime',
            'lastTimingUpdate'
        ));
    }

    /**
     * Update the specified question in database.
     */
    public function update(Request $request, ToeflQuestion $question)
    {
        $request->validate([
            'section' => 'required|in:Listening,Structure,Reading',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240', // 10MB max
            'reading_passage' => 'nullable|string'
        ]);

        $data = $request->except(['audio_file']);

        // Handle audio file upload for Listening questions
        if ($request->hasFile('audio_file') && $request->section == 'Listening') {
            // Delete old file if it exists
            if ($question->audio_file) {
                Storage::disk('public')->delete($question->audio_file);
            }

            $audioFile = $request->file('audio_file');
            $path = $audioFile->store('audio', 'public');
            $data['audio_file'] = $path;
        }

        $question->update($data);

        return redirect()->route('questions.index')->with('success', 'Question updated successfully!');
    }

    /**
     * Remove the specified question from database.
     */
    public function destroy(ToeflQuestion $question)
    {
        // Delete associated audio file if exists
        if ($question->audio_file) {
            Storage::disk('public')->delete($question->audio_file);
        }

        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully!');
    }

    /**
     * Update test timing settings.
     */
    public function updateTiming(Request $request)
    {
        $request->validate([
            'listening_time' => 'required|integer|min:5|max:120',
            'structure_time' => 'required|integer|min:5|max:120',
            'reading_time' => 'required|integer|min:5|max:120',
        ]);

        $testSettings = ToeflTestSetting::first();
        if (!$testSettings) {
            $testSettings = new ToeflTestSetting();
        }

        $testSettings->listening_time = $request->listening_time;
        $testSettings->structure_time = $request->structure_time;
        $testSettings->reading_time = $request->reading_time;
        $testSettings->last_updated = now();
        $testSettings->save();

        return redirect()->route('questions.index')->with('success', 'Test timing updated successfully!');
    }
}
