<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\SigninController;
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


//TODO:
// show random post in welcome screen. saeed doc..
// Route::get(
//     '/',
//     ['PostController@getRandPost']
// )->name('blog.randpost');

Route::view('/', 'other.about')->name('other.about');

Route::get(
    'post/{id}',
    [PostController::class, 'getPost']
)->name('blog.post');


Route::get(
    'post/{id}/like',
    [PostController::class, 'getLikePost']
)->name('blog.post.like');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get(
        '',
        [PostController::class, 'getAdminIndex']
    )->name('admin.index');

    Route::get(
        'create',
        [PostController::class, 'getAdminCreate']
    )->name('admin.create');

    Route::post(
        'create',
        [PostController::class, 'postAdminCreate']
    )->name('admin.create');

    Route::get(
        'edit/{id}',
        [PostController::class, 'getAdminEdit']
    )->name('admin.edit');

    Route::get(
        'delete/{id}',
        [PostController::class, 'getAdminDelete']
    )->name('admin.delete');

    Route::post(
        'edit',
        [PostController::class, 'postAdminUpdate']
    )->name('admin.update');
});



Route::post(
    'login',
    [LoginController::class, 'signin']
)->name('auth.signin');

// TODO
// disable register:
// Auth::routes(['register' => false]);
// https://redcherry.ir/%d8%a2%d9%85%d9%88%d8%b2%d8%b4-%d9%86%d8%b5%d8%a8-laravel-ui-%d8%a7%d8%ad%d8%b1%d8%a7%d8%b2-%d9%87%d9%88%db%8c%d8%aa-%d9%82%d8%af%db%8c%d9%85%db%8c-%d9%84%d8%a7%d8%b1%d8%a7%d9%88%d9%84/
//Auth::routes();

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


