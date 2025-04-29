<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ToeflQuestion;

class ToeflQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ToeflQuestion::create([
            'section' => 'Listening',
            'question_text' => 'What is the main topic of the conversation?',
            'option_a' => 'The weather',
            'option_b' => 'A recent trip',
            'option_c' => 'A new job',
            'option_d' => 'A book review',
            'correct_answer' => 'B',
            'difficulty' => 'Medium',
            'explanation' => 'The conversation focuses on a recent trip the speakers took.',
            'audio_file' => 'audio/sample.mp3',
        ]);

        ToeflQuestion::create([
            'section' => 'Reading',
            'question_text' => 'What does the author imply about climate change?',
            'option_a' => 'It is not a significant issue.',
            'option_b' => 'It requires immediate action.',
            'option_c' => 'It is a natural phenomenon.',
            'option_d' => 'It only affects certain regions.',
            'correct_answer' => 'B',
            'difficulty' => 'Hard',
            'explanation' => 'The author emphasizes the urgency of addressing climate change.',
            'image_file' => 'images/climate.jpg',
        ]);

        ToeflQuestion::create([
            'section' => 'Structure',
            'question_text' => 'Choose the correct sentence structure.',
            'option_a' => 'She go to school every day.',
            'option_b' => 'She goes to school every day.',
            'option_c' => 'She going to school every day.',
            'option_d' => 'She gone to school every day.',
            'correct_answer' => 'B',
            'difficulty' => 'Easy',
            'explanation' => 'The correct form is "She goes" for present tense.',
        ]);
    }
}
