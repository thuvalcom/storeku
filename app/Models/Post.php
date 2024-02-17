<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'slug',
        'image',
        'post_category_id',
        'user_id',
        'status',
        'views',
        'description',
        'keyword'
    ];

    public function post_category()
    {
        return $this->belongsTo(PostCategory::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
