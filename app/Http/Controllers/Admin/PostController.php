<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PostEloquentRepository;
use App\Repositories\Admin\TagEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Throwable;
use Image;

class PostController extends Controller
{
    const IM = ['w' => 368, 'h' => 300];
    const LIST = ['w' => 100, 'h' => 80];
    const GALLERY = ['w' => 185, 'h' => 180];
    const POST_H1 = ['w' => 293, 'h' => 245];
    const POST_H2 = ['w' => 586, 'h' => 490];
    const ST = ['w' => 270, 'h' => 200];

    public function __construct(PostEloquentRepository $postEloquentRepository, CategoryEloquentRepository $categoryEloquentRepository, TagEloquentRepository $tagEloquentRepository)
    {
        $this->postEloquentRepository = $postEloquentRepository;
        $this->categoryEloquentRepository = $categoryEloquentRepository;
        $this->tagEloquentRepository = $tagEloquentRepository;
    }

    public function index()
    {
        $posts = Post::with('author_name')->with('category')->get();

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
            $input['imageName_IM'] = 'im_1_'. $picture->getClientOriginalName();
            $input['imageName_LIST'] = 'list_1_'. $picture->getClientOriginalName();
            $input['imageName_GAL'] = 'gal_1_'. $picture->getClientOriginalName();
            $input['imageName_H1'] = 'h1_1_'. $picture->getClientOriginalName();
            $input['imageName_H2'] = 'h2_1_'. $picture->getClientOriginalName();
            $input['imageName_ST'] = 'st_1_'. $picture->getClientOriginalName();
            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);
            $img = Image::make($picture->path());
            $img->fit(self::IM['w'], self::IM['h'])->save($filePath .'/'. $input['imageName_IM'], 100);
            $img->fit(self::LIST['w'], self::LIST['h'])->save($filePath .'/'. $input['imageName_LIST'], 100);
            $img->fit(self::GALLERY['w'], self::GALLERY['h'])->save($filePath .'/'. $input['imageName_GAL'], 100);
            $img->fit(self::POST_H1['w'], self::POST_H1['h'])->save($filePath .'/'. $input['imageName_H1'], 100);
            $img->fit(self::POST_H2['w'], self::POST_H2['h'])->save($filePath .'/'. $input['imageName_H2'], 100);
            $img->fit(self::ST['w'], self::ST['h'], function ($constraint) {
                $constraint->upsize();
            })->save($filePath .'/'. $input['imageName_ST'], 100);
            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $picture_name;
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
            $input['imageName_IM'] = 'im_1_'. $picture->getClientOriginalName();
            $input['imageName_LIST'] = 'list_1_'. $picture->getClientOriginalName();
            $input['imageName_GAL'] = 'gal_1_'. $picture->getClientOriginalName();
            $input['imageName_H1'] = 'h1_1_'. $picture->getClientOriginalName();
            $input['imageName_H2'] = 'h2_1_'. $picture->getClientOriginalName();
            $input['imageName_ST'] = 'st_1_'. $picture->getClientOriginalName();

            $filePath = 'uploads/home';
            $filePath = str_replace('\\', '/', $filePath);
            $img = Image::make($picture->path());
            $img->fit(self::IM['w'], self::IM['h'])->save($filePath .'/'. $input['imageName_IM'], 100);
            $img->fit(self::LIST['w'], self::LIST['h'])->save($filePath .'/'. $input['imageName_LIST'], 100);
            $img->fit(self::GALLERY['w'], self::GALLERY['h'])->save($filePath .'/'. $input['imageName_GAL'], 100);
            $img->fit(self::POST_H1['w'], self::POST_H1['h'])->save($filePath .'/'. $input['imageName_H1'], 100);
            $img->fit(self::POST_H2['w'], self::POST_H2['h'])->save($filePath .'/'. $input['imageName_H2'], 100);
            $img->fit(self::ST['w'], self::ST['h'])->save($filePath .'/'. $input['imageName_ST'], 100);

            $picture_name = $picture->getClientOriginalName();
            $picture->move($filePath, $picture_name);
            $data['picture'] = $picture_name;
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
