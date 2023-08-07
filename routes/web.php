<?php

use App\Http\Controllers\NeedBloodController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BloodController;
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


Route::get('/welcome',function(){
    return view('welcome');
});
Route::get('/blood',[BloodController::class, 'create'])->name('blood.create');
Route::post('/blood/store',[BloodController::class,'store'])->name('blood.create');
Route::resource('blood',BloodController::class);

Route::resource('needBlood',NeedBloodController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
