<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ToeflQuestion;
use App\Models\ToeflTestSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{
    public function __construct()
    {
        Log::info('QuestionController instantiated', [
            'class' => __CLASS__,
            'file' => __FILE__,
            'methods' => get_class_methods($this),
            'index_exists' => method_exists($this, 'index'),
        ]);
    }

    public function index()
    {
        Log::info('QuestionController::index called');

        $questions = ToeflQuestion::orderBy('id', 'desc')->paginate(10);
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();
        $testSettings = ToeflTestSetting::first() ?? ToeflTestSetting::create([
            'listening_time' => 35,
            'structure_time' => 25,
            'reading_time' => 55,
            'last_updated' => now(),
        ]);

        return view('Admin_crud.Exam-Toefl.Course-Management', [
            'questions' => $questions,
            'totalQuestions' => $totalQuestions,
            'listeningQuestions' => $listeningQuestions,
            'structureQuestions' => $structureQuestions,
            'readingQuestions' => $readingQuestions,
            'listeningTime' => $testSettings->listening_time,
            'structureTime' => $testSettings->structure_time,
            'readingTime' => $testSettings->reading_time,
            'lastTimingUpdate' => $testSettings->last_updated,
        ]);
    }

    public function filter(Request $request)
    {
        $query = ToeflQuestion::query();

        if ($request->filled('section')) {
            $query->where('section', $request->section);
        }

        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }

        if ($request->filled('search')) {
            $query->where('question_text', 'like', '%' . $request->search . '%');
        }

        $questions = $query->orderBy('id', 'desc')->paginate(10)->withQueryString();
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();
        $testSettings = ToeflTestSetting::first() ?? ToeflTestSetting::create([
            'listening_time' => 35,
            'structure_time' => 25,
            'reading_time' => 55,
            'last_updated' => now(),
        ]);

        return view('Admin_crud.Exam-Toefl.Course-Management', [
            'questions' => $questions,
            'totalQuestions' => $totalQuestions,
            'listeningQuestions' => $listeningQuestions,
            'structureQuestions' => $structureQuestions,
            'readingQuestions' => $readingQuestions,
            'listeningTime' => $testSettings->listening_time,
            'structureTime' => $testSettings->structure_time,
            'readingTime' => $testSettings->reading_time,
            'lastTimingUpdate' => $testSettings->last_updated,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'section' => 'required|in:Listening,Structure,Reading',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'explanation' => 'nullable|string',
            'reading_passage' => 'nullable|string',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240',
        ]);

        if ($request->section == 'Listening' && $request->hasFile('audio_file')) {
            $validated['audio_file'] = $request->file('audio_file')->store('public/audio');
        } elseif ($request->section != 'Reading') {
            $validated['reading_passage'] = null;
        }

        ToeflQuestion::create($validated);

        return redirect()->route('questions.index')->with('success', 'Question added successfully.');
    }

    public function show($id)
    {
        $question = ToeflQuestion::findOrFail($id);
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();
        $testSettings = ToeflTestSetting::first() ?? ToeflTestSetting::create([
            'listening_time' => 35,
            'structure_time' => 25,
            'reading_time' => 55,
            'last_updated' => now(),
        ]);

        return view('Admin_crud.Exam-Toefl.Course-Management', [
            'questions' => ToeflQuestion::orderBy('id', 'desc')->paginate(10),
            'viewQuestion' => $question,
            'totalQuestions' => $totalQuestions,
            'listeningQuestions' => $listeningQuestions,
            'structureQuestions' => $structureQuestions,
            'readingQuestions' => $readingQuestions,
            'listeningTime' => $testSettings->listening_time,
            'structureTime' => $testSettings->structure_time,
            'readingTime' => $testSettings->reading_time,
            'lastTimingUpdate' => $testSettings->last_updated,
        ]);
    }

    public function edit($id)
    {
        $question = ToeflQuestion::findOrFail($id);
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();
        $testSettings = ToeflTestSetting::first() ?? ToeflTestSetting::create([
            'listening_time' => 35,
            'structure_time' => 25,
            'reading_time' => 55,
            'last_updated' => now(),
        ]);

        return view('Admin_crud.Exam-Toefl.Course-Management', [
            'questions' => ToeflQuestion::orderBy('id', 'desc')->paginate(10),
            'editQuestion' => $question,
            'totalQuestions' => $totalQuestions,
            'listeningQuestions' => $listeningQuestions,
            'structureQuestions' => $structureQuestions,
            'readingQuestions' => $readingQuestions,
            'listeningTime' => $testSettings->listening_time,
            'structureTime' => $testSettings->structure_time,
            'readingTime' => $testSettings->reading_time,
            'lastTimingUpdate' => $testSettings->last_updated,
        ]);
    }

    public function update(Request $request, $id)
    {
        $question = ToeflQuestion::findOrFail($id);
        $validated = $request->validate([
            'section' => 'required|in:Listening,Structure,Reading',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'explanation' => 'nullable|string',
            'reading_passage' => 'nullable|string',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240',
        ]);

        if ($request->section == 'Listening' && $request->hasFile('audio_file')) {
            if ($question->audio_file) {
                Storage::delete($question->audio_file);
            }
            $validated['audio_file'] = $request->file('audio_file')->store('public/audio');
        } elseif ($request->section != 'Listening') {
            if ($question->audio_file) {
                Storage::delete($question->audio_file);
                $validated['audio_file'] = null;
            }
        }

        if ($request->section != 'Reading') {
            $validated['reading_passage'] = null;
        }

        $question->update($validated);

        return redirect()->route('questions.index')->with('success', 'Question updated successfully.');
    }

    public function destroy($id)
    {
        $question = ToeflQuestion::findOrFail($id);
        if ($question->audio_file) {
            Storage::delete($question->audio_file);
        }
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }

    public function updateTiming(Request $request)
    {
        $validated = $request->validate([
            'listening_time' => 'required|integer|min:5|max:120',
            'structure_time' => 'required|integer|min:5|max:120',
            'reading_time' => 'required|integer|min:5|max:120',
        ]);

        $settings = ToeflTestSetting::first() ?? new ToeflTestSetting();
        $settings->fill($validated);
        $settings->last_updated = now();
        $settings->save();

        return redirect()->route('questions.index')->with('success', 'Test timing updated successfully.');
    }
}
