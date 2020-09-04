<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CategoryEloquentRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(CategoryEloquentRepository $categoryEloquentRepository)
    {
        $this->categoryEloquentRepository = $categoryEloquentRepository;
    }

    public function index()
    {

    }

    public function add()
    {

    }

    public function edit()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
