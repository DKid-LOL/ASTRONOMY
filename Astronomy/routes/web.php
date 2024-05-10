<?php

use App\Http\Controllers\ConstellationController;
use App\Http\Controllers\ObservatoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\CometController;
use App\Http\Controllers\NewsController;


Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('about', function(){
    return view('welcome');
})->name('about');



Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{id}', [PlanetController::class, 'show'])->name('planets.show');

Route::get('/observatory', [ObservatoryController::class, 'index'])->name('observatory.index');
Route::get('/observatory/{id}', [ObservatoryController::class, 'show'])->name('observatory.show');

Route::get('/constellation', [ConstellationController::class, 'index'])->name('constellation.index');
Route::get('/constellation/{id}', [ConstellationController::class, 'show'])->name('constellation.show');

Route::get('/comets', [CometController::class, 'index'])->name('comet.index');
Route::get('/comets/{id}', [CometController::class, 'show'])->name('comet.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
