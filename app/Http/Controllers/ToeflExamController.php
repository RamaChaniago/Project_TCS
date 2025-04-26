<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReadingPassage;
use App\Models\ToeflQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ToeflExamController extends Controller
{
    public function __construct()
    {
        Log::info('ToeflExamController instantiated', [
            'class' => __CLASS__,
            'file' => __FILE__,
            'methods' => get_class_methods($this),
        ]);
    }

    public function managePassages()
    {
        $passages = ReadingPassage::orderBy('id', 'desc')->paginate(10);
        return view('Admin_crud.Exam-Toefl.Passage-Management', [
            'passages' => $passages,
        ]);
    }

    public function createPassage()
    {
        return view('Admin_crud.Exam-Toefl.Create-Passage');
    }

    public function storePassage(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            'passage_text' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        ReadingPassage::create($validated);

        return redirect()->route('toefl-passages')->with('success', 'Passage created successfully!');
    }

    public function importQuestions(Request $request)
    {
        $request->validate([
            'import_file' => 'required|file|mimes:csv,xlsx',
        ]);

        // Placeholder: Implement import logic (e.g., using Maatwebsite\Excel)
        return redirect()->route('questions.index')->with('success', 'Questions imported successfully!');
    }

    public function exportQuestions()
    {
        // Placeholder: Implement export logic (e.g., using Maatwebsite\Excel)
        return response()->download(storage_path('app/public/questions_export.csv'), 'questions_export.csv');
    }

    public function analytics()
    {
        $totalQuestions = ToeflQuestion::count();
        $bySection = [
            'Listening' => ToeflQuestion::where('section', 'Listening')->count(),
            'Structure' => ToeflQuestion::where('section', 'Structure')->count(),
            'Reading' => ToeflQuestion::where('section', 'Reading')->count(),
        ];
        $byDifficulty = [
            'Easy' => ToeflQuestion::where('difficulty', 'Easy')->count(),
            'Medium' => ToeflQuestion::where('difficulty', 'Medium')->count(),
            'Hard' => ToeflQuestion::where('difficulty', 'Hard')->count(),
        ];

        return view('Admin_crud.Exam-Toefl.Analytics', [
            'totalQuestions' => $totalQuestions,
            'bySection' => $bySection,
            'byDifficulty' => $byDifficulty,
        ]);
    }
}
