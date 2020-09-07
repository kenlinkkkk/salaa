<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\TagEloquentRepository;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct(TagEloquentRepository $tagEloquentRepository)
    {
        $this->tagEloquentRepository = $tagEloquentRepository;
    }

    public function index()
    {
        $tags = $this->tagEloquentRepository->getAll();

        $data = compact('tags');

        return view('admin.tag.index', $data);
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
