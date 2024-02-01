<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'description', 'text', 'likes_count', 'views_count'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
