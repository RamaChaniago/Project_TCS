<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToeflQuestion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer',
        'difficulty',
        'explanation',
        'reading_passage',
        'audio_file',
        'passage_id'
    ];

    /**
     * Get the passage that owns the question.
     */
    public function passage()
    {
        return $this->belongsTo(ToeflPassage::class, 'passage_id');
    }
}
