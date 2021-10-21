<?php

use App\Http\Controllers\Blog\PostController;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();



Route::get('blog/posts/{post}', [PostController::class, 'show'])->name('blog.show'); //show is mothod

Route::get('blog/categories/{category}', [PostController::class, 'category'])->name('blog.category'); //cateory is method

Route::get('blog/tags/{tag}', [PostController::class, 'tag'])->name('blog.tag'); //tag is method

Route::middleware(['auth'])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::get('trashed-posts', 'PostController@treashed')->name('trashed-posts.index');
    Route::put('restore-post/{post}', 'PostController@restore')->name('restore-posts');

    Route::resource('tags', 'TagsController');

    Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');
    Route::put('users/profile', 'UsersController@update')->name('users.update-profile');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users', 'UsersController@index')->name('users.index');
    Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});



Route::get('login/{website}', 'Auth\LoginController@redirectToProvider')->name('githublogin');
Route::get('login/{website}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('blog/posts/{post}/comments', function (Post $post) {
    return $post->comments;
});
Route::post('blog/posts/{post}/comments', function (Request $request, Post $post) {
    $comment = new \Laravelista\Comments\Comment;
    $comment->commenter()->associate(auth()->user());
    $comment->commentable()->associate($post);
    $comment->comment = $request->comment;
    $comment->approved = true;
    $comment->save();

    return $comment;
});