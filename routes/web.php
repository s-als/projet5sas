<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MainController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\HomeController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
// Route::get('/', [MainController::class, 'home']);

// Route::get('welcome', function () {
//     return view('welcome');
// });

// Route::get('home', [HomeController::class, 'index']);


// Route::get('test', function () {
//     return view('test');
// });

// Route::get('/user/{id}', [UserController::class, 'show']);


Route::get('/posts', function () {
    return view('posts.index');
});

