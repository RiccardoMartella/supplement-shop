<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Guest\GuestController;
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
    return view('guest.welcome');
});

Route::resource('/progetti', GuestController::class);


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboardAdmin',])->name('dashboard');
    Route::delete('/progetti/{progetto}', [AdminController::class, 'destroy'])->name('progetti.destroy');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::get('/progetti/{progetto}', [AdminController::class, 'show'])->name('show');
    Route::get('/indexAdmin', [AdminController::class, 'index'])->name('indexAdmin');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
