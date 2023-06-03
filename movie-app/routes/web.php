<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UsersController;



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

Route::get('/', function () {
    return view('index');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('movies/create', [MovieController::class, 'create']);
Route::post('movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genres', [GenresController::class, 'index']);
Route::get('/genres/create', [GenresController::class, 'create']);
Route::post('/genres', [GenresController::class, 'store']);
Route::delete('/genres/{genres}', [GenresController::class, 'destroy']);

Route::get('/reviews', [ReviewsController::class, 'index']);
Route::get('/reviews/create', [ReviewsController::class, 'create']);
Route::post('reviews', [ReviewsController::class, 'store']);
Route::delete('/reviews/{reviews}', [ReviewsController::class, 'destroy']);


Route::get('/users', [UsersController::class, 'index']);
