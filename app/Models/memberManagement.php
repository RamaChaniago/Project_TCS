<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class memberManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'registration_type',
        'profile_image'
    ];

    /**
     * Get the user that owns the memberManagement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
