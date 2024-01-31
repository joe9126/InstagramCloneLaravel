<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * Allow mass assigning
     */
    protected $guarded = [];

    /**
     * One to Many Relationship with Use model
     */

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
