<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Post;
use App\Models\Blog;



use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

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
Route::get('/welcome', function (){
    return view('welcome');
});

Route::get('/user', function (){
    return view('user');
});

Route::get('/home', function (){
    return "home";
});


Route::get('client/add', function (){
    DB::table('clients')->insert([
        'name' => 'Aruzhan',
        'surname' => 'Ibraiym',
        'age' => 19
    ]);
});

Route::get('client', [ClientController::class, 'index']);
Route::get('client/create', function() {
    return view('client.create');
});

Route::post('client/create', [ClientController::class, 'store'])->name('add-client');

Route::get('client/{id}', [ClientController::class, 'get_client']);


Route::get('post/add', function () {
    DB::table('posts')->insert([
        'title' => 'Selecting the database',
        'body' => 'Create a migration named Arwshka'
    ]);
});

Route::get('post', [PostController::class, 'index']);
Route::get('post/create', function() {
    return view('post.create');
 
});





Route::get('blog/add', function (){
    DB::table('blogs')->insert([
        'description' => 'People of every description were there',
        'category_id' => '101',
        'price' => '100000'
    ]);
});

Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('blog/{id}', [BlogController::class, 'get_blog']);

