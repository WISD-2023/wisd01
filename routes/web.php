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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/aa/a1', function () {
    return view('aa.a1');
});

Route::get('/aa/a2', function () {
    return view('aa.a2');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/bb/b1', function () {
    return view('bb.b1');
});

Route::get('/bb/b2', function () {
    return view('bb.b2');
});

Route::get('/dd/d1', function () {
    return view('dd.d1');
});

Route::get('/dd/d2', function () {
    return view('dd.d2');
});
Route::get('/ff/f1', function () {
    return view('ff.f1');
});
Route::get('/ff/f2', function () {
    return view('ff.f2');
});
Route::get('/hh/h1', function () {
    return view('hh.h1');
});
Route::get('/hh/h2', function () {
    return view('hh.h2');
});

require __DIR__ . '/auth.php';
