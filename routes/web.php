<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    return view('home',[
        "tittle" => "Home"
    ]);
    
});

Route::get('/about', function () {
    return view('about',[
        "tittle" => "About",
        "nama" => "Haris",
        "no" => "0304",
        "email" => "hariis12@pm.me"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

//Halaman Sigle Post
Route::get('posts/{slug}', [PostController::class, 'show']);