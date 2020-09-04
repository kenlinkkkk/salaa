<?php


namespace App\Repositories\Admin;


use App\Models\Category;
use AppRepositories\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository
{

    public function getModel()
    {
        return Category::class;
    }
}
