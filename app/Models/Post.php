<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'content',
        'author_id',
    ];

    // relationship
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
