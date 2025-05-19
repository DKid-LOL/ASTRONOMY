<?php

use App\Http\Controllers\ConstellationController;
use App\Http\Controllers\ObservatoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\CometController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('about', function () {
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


require __DIR__ . '/auth.php';

//admin
route::get('admin/dashboard', [AdminHomeController::class, 'index'])->middleware(['auth', 'admin']);
//edit planet
route::get('view_planets', [AdminController::class, 'view_planets'])->middleware(['auth', 'admin']);

route::get('delete_planets/{id}', [AdminController::class, 'delete_planets'])->middleware(['auth', 'admin']);

route::get('update_planets/{id}', [AdminController::class, 'update_planets'])->middleware(['auth', 'admin']);

route::post('edit_planets/{id}', [AdminController::class, 'edit_planets'])->middleware(['auth', 'admin']);


//edit comet
route::get('view_comets', [AdminController::class, 'view_comets'])->middleware(['auth', 'admin']);

route::get('delete_comets/{id}', [AdminController::class, 'delete_comets'])->middleware(['auth', 'admin']);

route::get('update_comets/{id}', [AdminController::class, 'update_comets'])->middleware(['auth', 'admin']);

route::get('edit_comets/{id}', [AdminController::class, 'edit_comets'])->middleware(['auth', 'admin']);

route::post('edit_comets/{id}', [AdminController::class, 'edit_comets'])->middleware(['auth', 'admin']);



//edit constellation
route::get('view_constellation', [AdminController::class, 'view_constellation'])->middleware(['auth', 'admin']);

route::get('delete_constellation/{id}', [AdminController::class, 'delete_constellation'])->middleware(['auth', 'admin']);

route::get('update_constellation/{id}', [AdminController::class, 'update_constellation'])->middleware(['auth', 'admin']);

route::get('edit_constellation/{id}', [AdminController::class, 'edit_constellation'])->middleware(['auth', 'admin']);

route::post('edit_constellation/{id}', [AdminController::class, 'edit_constellation'])->middleware(['auth', 'admin']);




//edit observatory
route::get('view_observatory', [AdminController::class, 'view_observatory'])->middleware(['auth', 'admin']);

route::get('delete_observatory/{id}', [AdminController::class, 'delete_observatory'])->middleware(['auth', 'admin']);

route::get('update_observatory/{id}', [AdminController::class, 'update_observatory'])->middleware(['auth', 'admin']);

route::get('edit_observatory/{id}', [AdminController::class, 'edit_observatory'])->middleware(['auth', 'admin']);

route::post('edit_observatory/{id}', [AdminController::class, 'edit_observatory'])->middleware(['auth', 'admin']);



//edit new
route::get('view_news', [AdminController::class, 'view_news'])->middleware(['auth', 'admin']);

route::get('delete_news/{id}', [AdminController::class, 'delete_news'])->middleware(['auth', 'admin']);

route::get('update_news/{id}', [AdminController::class, 'update_news'])->middleware(['auth', 'admin']);

route::get('edit_news/{id}', [AdminController::class, 'edit_news'])->middleware(['auth', 'admin']);

route::post('edit_news/{id}', [AdminController::class, 'edit_news'])->middleware(['auth', 'admin']);








//add planet
route::get('add_planets', [AdminHomeController::class, 'add_planets'])->middleware(['auth', 'admin']);

route::post('upload_planets', [AdminHomeController::class, 'upload_planets'])->middleware(['auth', 'admin']);
//add comet
route::get('add_comets', [AdminHomeController::class, 'add_comets'])->middleware(['auth', 'admin']);

route::post('upload_comets', [AdminHomeController::class, 'upload_comets'])->middleware(['auth', 'admin']);
//add constellation
route::get('add_constellation', [AdminHomeController::class, 'add_constellation'])->middleware(['auth', 'admin']);

route::post('upload_constellation', [AdminHomeController::class, 'upload_constellation'])->middleware(['auth', 'admin']);
//add observatory
route::get('add_observatory', [AdminHomeController::class, 'add_observatory'])->middleware(['auth', 'admin']);

route::post('upload_observatory', [AdminHomeController::class, 'upload_observatory'])->middleware(['auth', 'admin']);
//add news
route::get('add_news', [AdminHomeController::class, 'add_news'])->middleware(['auth', 'admin']);

route::post('upload_news', [AdminHomeController::class, 'upload_news'])->middleware(['auth', 'admin']);




