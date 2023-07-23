<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('categories', CategoryController::class);

Route::get('/', [UserController::class, 'create']);
Route::get('/form', [UserController::class, 'form'])->name('form');
Route::get('/list', [UserController::class, 'list']);
Route::post('/store', [UserController::class, 'store'])->name('user.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth:admin'])->group(function(){
    Route::get('/admin/register', [RegisterController::class, 'register'])->name('admin.register');
    Route::post('/admin/register/store', [RegisterController::class, 'store'])->name('admin.register.store');
    Route::get('/admin/login', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login/store', [LoginController::class, 'store'])->name('admin.login.store');
// });

require __DIR__.'/auth.php';
