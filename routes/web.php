<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('sneatku.html.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'tampil'])->name('dashboard');
Route::get('/tambah-pinjam', [DashboardController::class, 'tampilpinjam'])->name('tampilpinjam');
Route::post('/insert-pinjam', [DashboardController::class, 'insertpinjam'])->name('insertpinjam');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::get('/peminjaman', [PeminjamanController::class,'index'])->middleware(['auth','verified']);
route::get('/peminjaman/store', [PeminjamanController::class,'store'])->middleware(['auth','verified']);
route::delete('/dashboard/{id_pinjam}', [DashboardController::class,'delete'])->middleware(['auth','verified']);

require __DIR__.'/auth.php';
