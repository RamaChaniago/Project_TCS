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
        'notes',
        // Listening specific
        'listening_part',
        'audio_file',
        // Structure specific
        'structure_type',
        // Reading specific
        'reading_passage_id',
    ];

    /**
     * Get the reading passage that owns the question (for reading section questions).
     */
    public function readingPassage()
    {
        return $this->belongsTo(ReadingPassage::class, 'reading_passage_id');
    }

    /**
     * Get the section name as a proper title.
     *
     * @return string
     */
    public function getSectionNameAttribute()
    {
        switch ($this->section) {
            case 'listening':
                return 'Listening Comprehension';
            case 'structure':
                return 'Structure & Written Expression';
            case 'reading':
                return 'Reading Comprehension';
            default:
                return ucfirst($this->section);
        }
    }

    /**
     * Get formatted display for listening part.
     *
     * @return string|null
     */
    public function getListeningPartDisplayAttribute()
    {
        if ($this->section !== 'listening') {
            return null;
        }

        switch ($this->listening_part) {
            case 'A':
                return 'Part A - Short Conversations';
            case 'B':
                return 'Part B - Extended Conversations';
            case 'C':
                return 'Part C - Lectures/Talks';
            default:
                return 'Part ' . $this->listening_part;
        }
    }

    /**
     * Get formatted display for structure type.
     *
     * @return string|null
     */
    public function getStructureTypeDisplayAttribute()
    {
        if ($this->section !== 'structure') {
            return null;
        }

        switch ($this->structure_type) {
            case 'completion':
                return 'Sentence Completion';
            case 'error':
                return 'Error Identification';
            default:
                return ucfirst($this->structure_type);
        }
    }
}   
