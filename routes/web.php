<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Models\Genre;
use App\Models\Review;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genres', [GenreController::class, 'genre']);
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);
Route::delete('/genre/{genres}', [GenreController::class, 'destroy']);

Route::get('/reviews', [ReviewController::class, 'review']);
Route::get('/review/create', [ReviewController::class, 'create']);
Route::post('/review', [ReviewController::class, 'store']);
Route::delete('/review/{reviews}', [ReviewController::class, 'destroy']);
