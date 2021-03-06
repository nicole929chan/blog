<?php

use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
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

// Route::get('posts', function () {
//     // use "Post::without()" to turn off the eager load effect
//     return view('posts', [
//         'posts' => Post::latest()->get()
//     ]);
// });

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});
