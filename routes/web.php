<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
    return  view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return  view('about', [
        "title" => "About",
        "name" => "M Iktafal Ma'arif",
        "email" => "miktafalmaarif@gmail.com",
        "image" => "ayip.png"
    ]);
});

Route::get('/post/new', [PostController::class, 'create'])->name('post.create');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::post('/post/{id}/update', [PostController::class, 'update'])->name('post.update');
Route::get('/post/{id}/hapus', [PostController::class, 'destroy'])->name('post.destroy');
Route::post('/post/new', [PostController::class, 'store'])->name('post.store');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');
