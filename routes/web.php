<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\Post;


use App\Http\Controllers\ClientController;

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

Route::get('post/add', function () {
    DB::table('posts')->insert([
        'title' => 'Selecting the database',
        'body' => 'Create a migration named Arwshka'
    ]);
});

Route::get('post', function () {
    $post = Post::find(1);
    return $post;
});

