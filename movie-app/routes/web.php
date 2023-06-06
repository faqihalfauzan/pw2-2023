<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::resource('/movies', MovieController::class);



Route::get('/genres', [GenresController::class, 'index']);
Route::get('/genres/create', [GenresController::class, 'create']);
Route::post('/genres', [GenresController::class, 'store']);
Route::delete('/genres/{genres}', [GenresController::class, 'destroy']);
Route::get('genres/{genres}/edit', [GenresController::class, 'edit']);
Route::put('/genres/{genres}', [GenresController::class, 'update']);

Route::get('/reviews', [ReviewsController::class, 'index']);
Route::get('/reviews/create', [ReviewsController::class, 'create']);
Route::post('reviews', [ReviewsController::class, 'store']);
Route::delete('/reviews/{reviews}', [ReviewsController::class, 'destroy']);
Route::get('reviews/{reviews}/edit', [ReviewsController::class, 'edit']);
Route::put('/reviews/{reviews}', [ReviewsController::class, 'update']);


Route::get('/users', [UsersController::class, 'index']);

