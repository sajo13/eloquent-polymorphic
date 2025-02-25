<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    public $fillable = ['body', 'commentable_id', 'commentable_type'];

    /**
     * Get all of the owning commentable models.
    */
    public function commentable()
    {
        return $this->morphTo();
    }
}
