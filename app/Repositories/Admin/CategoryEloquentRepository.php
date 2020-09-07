<?php


namespace App\Repositories\Admin;


use App\Models\Category;
use App\Repositories\EloquentRepository;

class CategoryEloquentRepository extends EloquentRepository
{

    public function getModel()
    {
        return Category::class;
    }
}
