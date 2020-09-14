<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Repositories\Admin\CategoryEloquentRepository;
use App\Repositories\Admin\PostEloquentRepository;
use App\Repositories\Admin\TagEloquentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

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
//        $date = Date::create('2020-09-08 06:57:40')->subDays(2);
        $date = Date::create('2020-09-08 06:57:40')->subMonths(2);
        $breaking_news = Post::where('status', '=', 1)->with('category')->with('author_name')->limit(7)->get();
        $categories = Category::where('status',  '=', 1)->where('fa_category', '=', 0)->with('categories')->get();
        $heading_news = Post::where('status', '=', 1)->where('created_at', '>=', $date)->with('category')->with('author_name')->orderBy('view_count', 'desc')->limit(12)->get();


        foreach ($categories as $category) {
            $posts = Post::where('category_id', '=', $category->id)->where('status', '=', 1)->with('category')->with('author_name')->get()->toArray();
            if (count($category->categories) > 0) {
                foreach ($category->categories as $item) {
                    $sub_posts = Post::where('category_id', '=', $item->id)->where('status', '=', 1)->with('category')->with('author_name')->limit(12)->get()->toArray();
                    $posts = array_merge($posts, $sub_posts);
                }
            }
            $category['posts'] = $posts;
        }

        $data = compact(
            'breaking_news',
            'categories',
            'heading_news'
        );

        return view('home', $data);
    }

    public function showCategory(Request $request, $category)
    {
        $breaking_news = Post::where('status', '=', 1)->with('category')->with('author_name')->limit(7)->get();
        $categories = Category::where('status',  '=', 1)->where('fa_category', '=', 0)->with('categories')->get();
        $cate = Category::where('slug', '=', $category)->where('status', '=', 1)->with('categories')->first();

        $current_page = empty($request->get('page')) ? 1 : $request->get('page');
        $next_page = $current_page + 1;

        $posts = null;
        if (($request->get('page') > 1)){
            if (count($cate->categories) > 0) {
                $posts = Post::where('category_id', '=', $cate->id)->where('status', '=', 1)->with('category')->with('author_name')->skip(6)->take(6)->get()->toArray();
                foreach ($cate->categories as $item) {
                    $sub_posts = Post::where('category_id', '=', $item->id)->where('status', '=', 1)->with('category')->with('author_name')->skip(6)->take(6)->get()->toArray();
                    $posts = array_merge($posts, $sub_posts);
                }
            } else {
                $posts = Post::where('status', '=', 1)->with('category')->with('author_name')->limit(12)->get()->toArray();
            }
        } else {
            if (count($cate->categories) > 0) {
                $posts = Post::where('category_id', '=', $cate->id)->where('status', '=', 1)->with('category')->with('author_name')->limit(6)->get()->toArray();
                foreach ($cate->categories as $item) {
                    $sub_posts = Post::where('category_id', '=', $item->id)->where('status', '=', 1)->with('category')->with('author_name')->limit(6)->get()->toArray();
                    $posts = array_merge($posts, $sub_posts);
                }
            } else {
                $posts = Post::where('status', '=', 1)->with('category')->with('author_name')->limit(12)->get()->toArray();
            }
        }

        $data = compact(
            'breaking_news',
            'cate',
            'categories',
            'posts',
            'current_page',
            'next_page'
        );

        return view('home.category_first', $data);
    }

    public function viewPost(Request $request, $category, $post_slug)
    {
        $breaking_news = Post::where('status', '=', 1)->with('category')->with('author_name')->limit(7)->get();

        $categories = Category::where('status',  '=', 1)->where('fa_category', '=', 0)->with('categories')->get();
        $cate = Category::where('slug', '=', $category)->where('status', '=', 1)->with('categories')->first();
        $post = Post::where('slug', '=', $post_slug)->where('status', '=', 1)->where('category_id', '=', $cate->id)->with('author_name')->first();

        $data = compact(
            'breaking_news',
            'cate',
            'categories',
            'post'
        );

        return view('home.detail_post', $data);
    }
}
