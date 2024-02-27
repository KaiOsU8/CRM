<?php

use App\Http\Controllers\BedrijfController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GesprekController;
use App\Http\Controllers\ProfileController;
use App\Models\Gesprek;
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

Route::get('/dashboard', 'App\Http\Controllers\BedrijfController@showDashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';


Route::resource('bedrijf', BedrijfController::class)->except(['index']);

Route::get('bedrijf', [BedrijfController::class, 'index'])->name('bedrijf');

Route::resource('contact', ContactController::class);

Route::resource('gesprek', GesprekController::class);
