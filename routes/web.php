<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\isTamu;
use App\Http\Middleware\isLogin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('layouts.main');

});

Route::get('/user', [AdminController::class,'indexUsers']);

Route::get('/book', function () {
    return view('dashboard.book');

});

Route::get('/category', function () {
    return view('dashboard.category');

});

Route::get('/rent-log', function () {
    return view('dashboard.rent-log');

});
Route::get('/register', [RegisterController::class,"index"])->name("auth.index");
Route::post('/register', [RegisterController::class,"store"])->name("auth.store");

Route::get('/login', [LoginController::class, "index"])->name("login")->middleware('guest');
Route::post('/login', [LoginController::class, "login"])->name("auth.login");

Route::get('/', [MessageController::class, 'index'])->name('index')->middleware('guest');
Route::post('/', [MessageController::class, 'store'])->name('store')->middleware('guest');


Route::delete('/user/{id}',[AdminController::class, 'destroy'])->name('dashboard.destroy');

Route::get('/user/{id}/edit',[AdminController::class,'editUser'])->name('user.editUser');

Route::put('/user/{id}/edit',[AdminController::class, 'update'])->name('dashboard.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/user', [AdminController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard', [AdminController::class, 'indexDash'])->name('dashboard.indexDash');
});
