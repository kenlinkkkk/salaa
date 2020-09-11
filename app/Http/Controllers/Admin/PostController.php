<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PostEloquentRepository;
use App\Repositories\Admin\TagEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Throwable;

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
        $posts = $this->postEloquentRepository->edge('author_name');

        $data = compact('posts');

        return view('admin.post.index', $data);
    }

    public function add()
    {
        $categories = $this->categoryEloquentRepository->getAll();
        $data = compact(
            'categories'
        );

        return view('admin.post.add', $data);
    }

    public function edit($post_id)
    {
        $post = $this->postEloquentRepository->find($post_id);
        $categories = $this->categoryEloquentRepository->getAll();
        $data = compact(
            'post',
            'categories'
        );

        return view('admin.post.edit', $data);
    }

    public function create(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = url_slug($data['title']);
        $data['author'] = Auth::user()->id;
        $data['tag'] = json_encode($data['tag']);

        if ($request->hasFile('picture')) {
            $picture = $request->picture;
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $filePath . '/' . $picture_name;
        }

        try {
            $result = $this->postEloquentRepository->create($data);

            if ($result) {
                $request->session()->flash('success', 'Thêm thành công');
            } else {
                $request->session()->flash('error', 'Thêm mới thất bại');
            }

            return Redirect::route('admin.post.index');
        } catch (Throwable $exception) {
            return report($exception);
        }

    }

    public function update(Request $request, $post_id)
    {
        $data = $request->except('_token');
        $data['tag'] = json_encode($data['tag']);

        if ($request->hasFile('picture')) {
            $picture = $request->picture;
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $filePath . '/' . $picture_name;
        }

        try {
            $result = $this->postEloquentRepository->update($post_id, $data);

            if ($result) {
                $request->session()->flash('success', 'Thêm thành công');
            } else {
                $request->session()->flash('error', 'Thêm mới thất bại');
            }

            return Redirect::route('admin.post.index');
        } catch (Throwable $exception) {
            return report($exception);
        }
    }

    public function delete(Request $request, $post_id)
    {
        $data = $request->except('_token');

        try {
            $result = $this->postEloquentRepository->update($post_id, $data);

            if ($result) {
                $request->session()->flash('success', 'Thành công');
            } else {
                $request->session()->flash('error', 'Thất bại');
            }

            return Redirect::route('admin.post.index');
        }catch (Throwable $exception) {
            report($exception);
        }
    }

    public function upload(Request $request)
    {
        $file=$request->file('file');
        $path= url('/uploads/').'/'.$file->getClientOriginalName();
        $imgpath=$file->move(public_path('/uploads/'),$file->getClientOriginalName());
        $fileNameToStore= $path;

        return json_encode(['location' => $fileNameToStore]);

    }
}
