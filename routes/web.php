<?php

use App\Http\Controllers\BatikAdminController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/keranjang', [HomeController::class, 'keranjang'])->name('keranjang');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/detail2', [HomeController::class, 'detail2'])->name('detail2');

// Route::get('/adminbatik', [BatikAdminController::class, 'index'])->name('index');
// Route::delete('/admindelete', [BatikAdminController::class, 'destroy'])->name('admin.destroy');
// Route::delete('/adminupdate', [BatikAdminController::class, 'update'])->name('admin.update');

Route::resource('batik', BatikAdminController::class);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

require __DIR__.'/auth.php';
