<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toefl_questions extends Model
{
    use HasFactory;
    protected $fillable = [
        'section',
        'question_text',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct_answer',
        'difficulty',
        'notes',
        'listening_part',
        'audio_file',
        'structure_type',
        'reading_passage_id'
    ];

    public function readingPassage()
    {
        return $this->belongsTo(reading_passages::class);
    }
    
    // Scope methods for filtering by section
    public function scopeListening($query)
    {
        return $query->where('section', 'listening');
    }
    
    public function scopeStructure($query)
    {
        return $query->where('section', 'structure');
    }
    
    public function scopeReading($query)
    {
        return $query->where('section', 'reading');
    }
}
