<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title', 'slug', 'picture', 'description', 'content', 'view_count', 'author','tag', 'category_id', 'status'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
