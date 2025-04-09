<?php

namespace App\Http\Controllers;

use App\Models\reading_passages;
use App\Models\toefl_questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToeflExamController extends Controller
{
    /**
     * Display the exam management page
     */
    public function index()
    {
        $listeningQuestions = toefl_questions::listening()->orderBy('created_at', 'desc')->paginate(10, ['*'], 'listening_page');
        $structureQuestions = toefl_questions::structure()->orderBy('created_at', 'desc')->paginate(10, ['*'], 'structure_page');
        $readingQuestions = toefl_questions::reading()->with('readingPassage')->orderBy('created_at', 'desc')->paginate(10, ['*'], 'reading_page');
        
        return view('admin.exam-toefl', compact('listeningQuestions', 'structureQuestions', 'readingQuestions'));
    }

    /**
     * Store a newly created question
     */
    public function storeQuestion(Request $request)
    {
        $validated = $request->validate([
            'section' => 'required|in:listening,structure,reading',
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:easy,medium,hard',
            'notes' => 'nullable|string',
            
            // Section-specific validations
            'listening_part' => 'required_if:section,listening|in:A,B,C',
            'audio_file' => 'required_if:section,listening|file|mimes:mp3,wav|max:10240',
            'structure_type' => 'required_if:section,structure|in:structure,written',
            'reading_passage_id' => 'required_if:section,reading|exists:reading_passages,id',
        ]);
        
        // Handle file upload if audio file exists
        if ($request->hasFile('audio_file')) {
            $audioPath = $request->file('audio_file')->store('public/audio');
            $validated['audio_file'] = basename($audioPath);
        }
        
        toefl_questions::create($validated);
        
        return redirect()->route('admin.toefl-exam')->with('success', 'Question added successfully');
    }

    /**
     * Update the specified question
     */
    public function updateQuestion(Request $request, toefl_questions $question)
    {
        $validated = $request->validate([
            'question_text' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct_answer' => 'required|in:A,B,C,D',
            'difficulty' => 'required|in:easy,medium,hard',
            'notes' => 'nullable|string',
            
            // Section-specific validations
            'listening_part' => 'required_if:section,listening|in:A,B,C',
            'audio_file' => 'nullable|file|mimes:mp3,wav|max:10240',
            'structure_type' => 'required_if:section,structure|in:structure,written',
            'reading_passage_id' => 'required_if:section,reading|exists:reading_passages,id',
        ]);
        
        // Handle file upload if audio file exists
        if ($request->hasFile('audio_file')) {
            // Delete old file if exists
            if ($question->audio_file) {
                Storage::delete('public/audio/' . $question->audio_file);
            }
            
            $audioPath = $request->file('audio_file')->store('public/audio');
            $validated['audio_file'] = basename($audioPath);
        }
        
        $question->update($validated);
        
        return redirect()->route('admin.toefl-exam')->with('success', 'Question updated successfully');
    }

    /**
     * Remove the specified question
     */
    public function destroyQuestion(toefl_questions $question)
    {
        // Delete associated audio file if exists
        if ($question->audio_file) {
            Storage::delete('public/audio/' . $question->audio_file);
        }
        
        $question->delete();
        
        return redirect()->route('admin.toefl-exam')->with('success', 'Question deleted successfully');
    }

    /**
     * Show question details
     */
    public function showQuestion(toefl_questions $question)
    {
        if ($question->section === 'reading') {
            $question->load('readingPassage');
        }
        
        return view('admin.toefl-question-details', compact('question'));
    }
}

class ReadingPassageController extends Controller
{
    /**
     * Store a newly created passage
     */
        public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'difficulty' => 'required|in:easy,medium,hard',
            'passage_text' => 'required|string',
            'notes' => 'nullable|string',
        ]);
        
        $passage = reading_passages::create($validated);
        
        return redirect()->route('admin.toefl-exam')->with('success', 'Passage created successfully');
    }

    /**
     * Update the specified passage
     */
    public function update(Request $request, reading_passages $passage)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'difficulty' => 'required|in:easy,medium,hard',
            'passage_text' => 'required|string',
            'notes' => 'nullable|string',
        ]);
        
        $passage->update($validated);
        
        return redirect()->route('admin.toefl-exam')->with('success', 'Passage updated successfully');
    }

    /**
     * Remove the specified passage
     */
    public function destroy(reading_passages $passage)
    {
        // Note: Questions attached to this passage will be deleted by the cascade rule
        $passage->delete();
        
        return redirect()->route('admin.toefl-exam')->with('success', 'Passage deleted successfully');
    }
    
    /**
     * Get all passages for dropdown list
     */
    public function getPassages()
    {
        $passages = reading_passages::select('id', 'title', 'topic')->get();
        return response()->json($passages);
    }
}
