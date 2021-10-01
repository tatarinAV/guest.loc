<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
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
Route::post('/', [PostController::class, 'addPost']);
Route::get('/authors/{id}', [AuthorController::class, 'getAuthor']);
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'deletePost']);
