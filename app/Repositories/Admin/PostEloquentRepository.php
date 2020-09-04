<?php


namespace App\Repositories\Admin;


use App\Models\Post;
use AppRepositories\EloquentRepository;

class PostEloquentRepository extends EloquentRepository
{

    public function getModel()
    {
        return Post::class;
    }
}
