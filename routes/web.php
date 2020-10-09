<?php

use App\Http\Controllers\Blog\PostController;
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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });


Route::get('/','WelcomeController@index')->name('welcome');

Auth::routes();



Route::get('blog/posts/{post}',[PostController::class,'show'])->name('blog.show');//show is mothod

Route::get('blog/categories/{category}',[PostController::class,'category'])->name('blog.category');//cateory is method

Route::get('blog/tags/{tag}',[PostController::class,'tag'])->name('blog.tag');//tag is method




Route::middleware(['auth'])->group( function () {

        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('categories', 'CategoryController');
        Route::resource('posts', 'PostController');
        Route::get('trashed-posts', 'PostController@treashed')->name('trashed-posts.index');
        Route::put('restore-post/{post}','PostController@restore')->name('restore-posts');

        Route::resource('tags', 'TagsController');
        
   Route::get('users/profile','UsersController@edit')->name('users.edit-profile');
   Route::put('users/profile','UsersController@update')->name('users.update-profile');


});

Route::middleware(['auth','admin'])->group( function(){
Route::get('users','UsersController@index')->name('users.index');
Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});



Route::get('login/{website}', 'Auth\LoginController@redirectToProvider')->name('githublogin');
Route::get('login/{website}/callback', 'Auth\LoginController@handleProviderCallback');