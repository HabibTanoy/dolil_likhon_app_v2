<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordDetailsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect()->route('dashboard');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/record-submit', [RecordDetailsController::class, 'RecordSubmit'])->name('record-submit');
    Route::post('/record-store', [RecordDetailsController::class, 'RecordStore'])->name('record-store');
    Route::get('/record-list', [RecordDetailsController::class, 'index'])->name('record-list');
    Route::get('/dolil/{id}/edit', [RecordDetailsController::class, 'edit'])->name('dolil-edit');
    Route::post('/dolil/{id}', [RecordDetailsController::class, 'update'])->name('dolil-update');
    Route::get('/dolil/{id}/delete', [RecordDetailsController::class, 'destroy'])->name('dolil-delete');
});

require __DIR__.'/auth.php';
