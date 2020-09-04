<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\PostEloquentRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(PostEloquentRepository $postEloquentRepository)
    {
        $this->postEloquentRepository = $postEloquentRepository;
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
