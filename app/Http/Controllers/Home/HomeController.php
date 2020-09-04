<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PostEloquentRepository;
use App\Repositories\Admin\TagEloquentRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(CategoryEloquentRepository $categoryEloquentRepository, TagEloquentRepository $tagEloquentRepository, PostEloquentRepository $postEloquentRepository)
    {
        $this->categoryEloquentRepository = $categoryEloquentRepository;
        $this->tagEloquentRepository = $tagEloquentRepository;
        $this->postEloquentRepository = $postEloquentRepository;
    }

    public function index()
    {

    }
}
