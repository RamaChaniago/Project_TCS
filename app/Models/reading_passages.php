<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToeflPassage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'difficulty'
    ];

    /**
     * Get the questions associated with the passage.
     */
    public function questions()
    {
        return $this->hasMany(ToeflQuestion::class, 'passage_id');
    }
}