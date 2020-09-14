<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/profile', 'Admin\UserController@index')->name('profile');

        Route::prefix('/tag')->name('tag.')->group(function () {
            Route::get('/', 'Admin\TagController@index')->name('index');
        });

        Route::prefix('/post')->name('post.')->group(function () {
            Route::get('/', 'Admin\PostController@index')->name('index');
            Route::get('/add', 'Admin\PostController@add')->name('add');
            Route::get('/edit/{post_id}', 'Admin\PostController@edit')->name('edit');

            Route::post('/create', 'Admin\PostController@create')->name('create');
            Route::post('/update/{post_id}', 'Admin\PostController@update')->name('update');
            Route::post('/delete/{post_id}', 'Admin\PostController@delete')->name('delete');
            Route::post('/upload', 'Admin\PostController@upload')->name('upload');
        });

        Route::prefix('/category')->name('category.')->group(function () {
            Route::get('/', 'Admin\CategoryController@index')->name('index');
            Route::get('/add', 'Admin\CategoryController@add')->name('add');
            Route::get('/edit/{category_id}', 'Admin\CategoryController@edit')->name('edit');

            Route::post('/create', 'Admin\CategoryController@create')->name('create');
            Route::post('/update/{category_id}', 'Admin\CategoryController@update')->name('update');
            Route::post('/delete/{category_id}', 'Admin\CategoryController@delete')->name('delete');
        });
    });
});

Route::prefix('/')->name('home.')->group(function () {
    Route::get('/', 'Home\HomeController@index')->name('index');
    Route::prefix('/{category}')->name('category.')->group(function () {
        Route::get('/', 'Home\HomeController@showCategory')->name('index');
        Route::get('/{post_slug}', 'Home\HomeController@viewPost')->name('post');
    });
});
