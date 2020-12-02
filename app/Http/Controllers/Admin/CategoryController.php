<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\Admin\CategoryEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Throwable;
use Image;

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

    public function edit($category_id)
    {
        $category = $this->categoryEloquentRepository->find($category_id);
        $categories = $this->categoryEloquentRepository->getAll();
        $data = compact(
            'category',
            'categories'
        );

        return view('admin.category.edit', $data);
    }

    public function create(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = url_slug($data['name']);

        if ($request->hasFile('picture')) {
            $picture = $request->picture;
            $input['imageName'] = time() .'.'. $picture->extension();
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);
            $img = Image::make($picture->path());
            $img->fit(293, 245)->save($filePath .'/'. $input['imageName']);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $filePath . '/' . $picture_name;
        }

        try {
            $result = $this->categoryEloquentRepository->create($data);

            if ($result) {
                $request->session()->flash('success', 'Thêm thành công');
            } else {
                $request->session()->flash('error', 'Thêm mới thất bại');
            }

            return Redirect::route('admin.category.index');
        } catch (Throwable $exception) {
            return report($exception);
        }
    }

    public function update(Request $request, $category_id)
    {
        $data = $request->except('_token');

        if ($request->hasFile('picture')) {
            $picture = $request->picture;
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $filePath . '/' . $picture_name;
        }

        try {
            $result = $this->categoryEloquentRepository->update($category_id, $data);

            if ($result) {
                $request->session()->flash('success', 'Thêm thành công');
            } else {
                $request->session()->flash('error', 'Thêm mới thất bại');
            }

            return Redirect::route('admin.category.index');
        } catch (Throwable $exception) {
            report($exception);
        }
    }

    public function delete(Request $request, $category_id)
    {
        $data = $request->except('_token');

        try {
            $result = $this->categoryEloquentRepository->update($category_id, $data);

            if ($result) {
                $request->session()->flash('success', 'Thành công');
            } else {
                $request->session()->flash('error', 'Thất bại');
            }

            return Redirect::route('admin.category.index');
        }catch (Throwable $exception) {
            report($exception);
        }
    }
}
