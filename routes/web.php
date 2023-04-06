<?php

use App\Http\Controllers\PostController;
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


Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/create', [PostController::class, 'save'])->name('posts.save');
Route::get('/portfolio-details/{id}', [PostController::class, 'show'])->name('posts.show');


// Route::get('/portfolio-details', [PostController::class, 'portfolio']);

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/portfolio-details', function () {
//     return view('portfolio-details');
// });
