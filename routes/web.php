<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TransformerController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Post;
use App\Transformers\PostTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('login/{oauth}', [LoginController::class, 'redirectToProvider'])->name('githublogin');
Route::get('login/{oauth}/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('blog/posts/{post}/comments', function (Post $post) {
    return $post->comments;
});



Route::get('view-blog/{post:slug}', [PostController::class, 'show'])->name('blog.show');
Route::get('blog/categories/{category:slug}', [PostController::class, 'category'])->name('blog.category');
Route::get('blog/tags/{tag:slug}', [PostController::class, 'tag'])->name('blog.tag');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('trashed-posts', [PostController::class, 'treashed'])->name('trashed-posts.index');
    Route::put('restore-post/{post}', [PostController::class, 'restore'])->name('restore-posts');
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('posts', PostController::class);
    Route::get('users/profile', [UsersController::class, 'edit'])->name('users.edit-profile');
    Route::put('users/profile', [UsersController::class, 'update'])->name('users.update-profile');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users', [UsersController::class, 'index'])->name('users.index');
    Route::post('users/{user}/make-admin', [UsersController::class, 'makeAdmin'])->name('users.make-admin');
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


Route::get('/post-transformer', [TransformerController::class, 'index']);
