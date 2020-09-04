<?php


namespace App\Repositories\Admin;


use App\Models\Tag;
use AppRepositories\EloquentRepository;

class TagEloquentRepository extends EloquentRepository
{

    public function getModel()
    {
        return Tag::class;
    }
}
