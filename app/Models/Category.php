<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'slug', 'picture', 'fa_category', 'description', 'status'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'fa_category');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'fa_category');
    }
}
