<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ToeflQuestion;
use App\Models\ToeflTestSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = ToeflQuestion::latest()->paginate(10);
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

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

    public function store(Request $request)
    {
        $rules = [
            'section' => 'required|in:Listening,Structure,Reading',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240',
            'image_file' => 'nullable|file|mimes:jpeg,png|max:5120',
            'explanation' => 'nullable|string',
        ];

        if ($request->section == 'Listening') {
            $rules['audio_file'] = 'required|file|mimes:mp3,wav|max:10240';
            $rules['image_file'] = 'prohibited';
        } elseif (in_array($request->section, ['Structure', 'Reading'])) {
            $rules['audio_file'] = 'prohibited';
            $rules['image_file'] = 'nullable|file|mimes:jpeg,png|max:5120';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->except(['audio_file', 'image_file']);

        if ($request->section == 'Listening' && $request->hasFile('audio_file')) {
            $audioPath = $request->file('audio_file')->store('audio', 'public');
            $data['audio_file'] = $audioPath;
            $data['image_file'] = null;
        }

        if (in_array($request->section, ['Structure', 'Reading']) && $request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('images', 'public');
            $data['image_file'] = $imagePath;
            $data['audio_file'] = null;
        }

        ToeflQuestion::create($data);

        return redirect()->route('questions.index')->with('success', 'Question created successfully!');
    }

    public function show(ToeflQuestion $question)
    {
        $viewQuestion = $question;
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

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

    public function edit(ToeflQuestion $question)
    {
        $editQuestion = $question;
        $totalQuestions = ToeflQuestion::count();
        $listeningQuestions = ToeflQuestion::where('section', 'Listening')->count();
        $structureQuestions = ToeflQuestion::where('section', 'Structure')->count();
        $readingQuestions = ToeflQuestion::where('section', 'Reading')->count();

        $testSettings = ToeflTestSetting::first();
        $listeningTime = $testSettings ? $testSettings->listening_time : 35;
        $structureTime = $testSettings ? $testSettings->structure_time : 25;
        $readingTime = $testSettings ? $testSettings->reading_time : 55;
        $lastTimingUpdate = $testSettings ? $testSettings->last_updated : now();

        $questions = ToeflQuestion::latest()->paginate(10);

        return view('Admin.Course-Management', compact(
            'questions',
            'editQuestion',
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

    public function update(Request $request, ToeflQuestion $question)
    {
        $rules = [
            'section' => 'required|in:Listening,Structure,Reading',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240',
            'image_file' => 'nullable|file|mimes:jpeg,png|max:5120',
            'explanation' => 'nullable|string',
        ];

        if ($request->section == 'Listening') {
            $rules['image_file'] = 'prohibited';
        } elseif (in_array($request->section, ['Structure', 'Reading'])) {
            $rules['audio_file'] = 'prohibited';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $request->except(['audio_file', 'image_file']);

            if ($request->section == 'Listening' && $request->hasFile('audio_file')) {
                if ($question->audio_file) {
                    Storage::disk('public')->delete($question->audio_file);
                }
                $audioPath = $request->file('audio_file')->store('audio', 'public');
                $data['audio_file'] = $audioPath;
                $data['image_file'] = null;
            } elseif ($request->section == 'Listening') {
                $data['audio_file'] = $question->audio_file;
                $data['image_file'] = null;
            }

            if (in_array($request->section, ['Structure', 'Reading']) && $request->hasFile('image_file')) {
                if ($question->image_file) {
                    Storage::disk('public')->delete($question->image_file);
                }
                $imagePath = $request->file('image_file')->store('images', 'public');
                $data['image_file'] = $imagePath;
                $data['audio_file'] = null;
            } elseif (in_array($request->section, ['Structure', 'Reading'])) {
                $data['image_file'] = $question->image_file;
                $data['audio_file'] = null;
            }

            $question->update($data);
            $updatedQuestion = ToeflQuestion::findOrFail($question->id);

            return response()->json([
                'success' => true,
                'message' => 'Question updated successfully',
                'question' => [
                    'id' => $updatedQuestion->id,
                    'section' => $updatedQuestion->section,
                    'difficulty' => $updatedQuestion->difficulty,
                    'question_text' => $updatedQuestion->question_text,
                    'option_a' => $updatedQuestion->option_a,
                    'option_b' => $updatedQuestion->option_b,
                    'option_c' => $updatedQuestion->option_c,
                    'option_d' => $updatedQuestion->option_d,
                    'correct_answer' => $updatedQuestion->correct_answer,
                    'audio_file' => $updatedQuestion->audio_file ? Storage::url($updatedQuestion->audio_file) : null,
                    'image_file' => $updatedQuestion->image_file ? Storage::url($updatedQuestion->image_file) : null,
                    'explanation' => $updatedQuestion->explanation,
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => ['general' => ['Failed to update question: ' . $e->getMessage()]]
            ], 500);
        }
    }

    public function getQuestionDetails($id)
{
    try {
        $question = ToeflQuestion::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $question->id,
                'section' => $question->section ?? 'N/A',
                'difficulty' => $question->difficulty ?? 'N/A',
                'question_text' => $question->question_text ?? 'N/A',
                'option_a' => $question->option_a ?? 'N/A',
                'option_b' => $question->option_b ?? 'N/A',
                'option_c' => $question->option_c ?? 'N/A',
                'option_d' => $question->option_d ?? 'N/A',
                'correct_answer' => $question->correct_answer ?? 'N/A',
                'audio_file' => $question->audio_file ? Storage::url($question->audio_file) : '',
                'image_file' => $question->image_file ? Storage::url($question->image_file) : '',
                'explanation' => $question->explanation ?? ''
            ]
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Failed to fetch question details: ' . $e->getMessage()
        ], 500);
    }
}

    public function destroy(ToeflQuestion $question)
    {
        if ($question->audio_file) {
            Storage::disk('public')->delete($question->audio_file);
        }
        if ($question->image_file) {
            Storage::disk('public')->delete($question->image_file);
        }
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Question deleted successfully!');
    }
}
