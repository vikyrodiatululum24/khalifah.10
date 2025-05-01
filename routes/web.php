<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/curriculum', function () {
    return view('curriculum');
})->name('curriculum');
Route::get('/eskul', function () {
    return view('eskul');
})->name('eskul');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
