<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PostEloquentRepository;
use App\Repositories\Admin\TagEloquentRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(PostEloquentRepository $postEloquentRepository, CategoryEloquentRepository $categoryEloquentRepository, TagEloquentRepository $tagEloquentRepository)
    {
        $this->postEloquentRepository = $postEloquentRepository;
        $this->categoryEloquentRepository = $categoryEloquentRepository;
        $this->tagEloquentRepository = $tagEloquentRepository;
    }

    public function index()
    {
        $posts = $this->postEloquentRepository->getAll();

        $data = compact('posts');

        return view('admin.post.index', $data);
    }

    public function add()
    {
        $categories = $this->categoryEloquentRepository->getAll();
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
