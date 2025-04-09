<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reading_passages extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'topic',
        'difficulty',
        'passage_text',
        'notes'
    ];

    public function questions()
    {
        return $this->hasMany(ToeflQuestion::class, 'reading_passage_id');
    }
}
