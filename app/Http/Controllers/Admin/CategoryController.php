<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $categories = $this->categoryEloquentRepository->edge('category');
        $data = compact('categories');

        return view('admin.category.index', $data);
    }

    public function add()
    {
        $categories = Category::where('status', '=', '1')->where('fa_category', '=', '0')->get();
        $data = compact('categories');
        return view('admin.category.add', $data);
    }

    public function edit()
    {

    }

    public function create(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = url_slug($data['name']);

        dd($data);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
