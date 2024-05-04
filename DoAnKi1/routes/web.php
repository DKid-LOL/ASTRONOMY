<?php

use App\Http\Controllers\PlanetController;
use App\Http\Controllers\CometController;
use App\Http\Controllers\ObservatoryController;
use App\Http\Controllers\ConstellationController as ConstellationController;
use Illuminate\Support\Facades\Route;
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



// Planets
Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{id}', [PlanetController::class, 'show'])->name('planets.show');

// Comets
Route::get('/comets', [CometController::class, 'index'])->name('comets.index');
Route::get('/comets/{id}', [CometController::class, 'show'])->name('comets.show');

// Observatories
Route::get('/observatories', [ObservatoryController::class, 'index'])->name('observatories.index');
Route::get('/observatories/{id}', [ObservatoryController::class, 'show'])->name('observatories.show');

// Constellations
Route::get('/constellations', [ConstellationController::class, 'index'])->name('constellations.index');
Route::get('/constellations/{id}', [ConstellationController::class, 'show'])->name('constellations.show');

// Big Bang Theory (assumed as static page for this example)
Route::get('/big-bang', function () {
    return view('big-bang');
})->name('big-bang');

// Earth Evolution (assumed as static page for this example)
Route::get('/earth-evolution', function () {
    return view('earth-evolution');
})->name('earth-evolution');

// Recent Developments (assumed as static page for this example)
Route::get('/developments', function () {
    return view('developments');
})->name('developments');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('home');
});

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('auth.login');
});