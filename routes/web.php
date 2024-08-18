<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::resource('movies',MovieController::class);
// Route::get('/movies',[ MovieController::class,'index'])->name('movies.index');
// Route::get('/movies/create',[ MovieController::class,'create'])->name('movies.create');
// Route::get('/movies/{movie}',[ MovieController::class,'show'])->name('movies.show');
// Route::get('/movies/{movie}/edit',[ MovieController::class,'edit'])->name('movies.edit');
// Route::PUT('/movies/{movie}',[ MovieController::class,'update'])->name('movies.update');
// Route::DELETE('/movies/{movie}',[ MovieController::class,'destroy'])->name('movies.destroy');
// Route::post('/movies',[ MovieController::class,'store'])->name('movies.store');
