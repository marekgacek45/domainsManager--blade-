<?php

use App\Http\Controllers\DomainController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/',[DomainController::class,'index'])->name('index')->middleware('auth');
Route::get('/dodaj',[DomainController::class,'create'])->name('create')->middleware('admin');
Route::post('/dodaj',[DomainController::class,'store'])->name('store')->middleware('admin');
Route::get('/domena/{domain}',[DomainController::class,'show'])->name('show')->middleware('admin');
Route::get('/edytuj/{domain}',[DomainController::class,'edit'])->name('edit')->middleware('admin');
Route::patch('/edytuj/{domain}',[DomainController::class,'update'])->name('update')->middleware('admin');
Route::delete('/usuń/{domain}',[DomainController::class,'destroy'])->name('delete')->middleware('admin');