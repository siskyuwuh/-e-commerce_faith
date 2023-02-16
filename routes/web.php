<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:customer'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product.table');
    Route::get('/admin/product/{id}/show', [ProductController::class, 'show'])->name('admin.product.show');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/store', [ProductController::class, 'store'])->name('admin.product.store');
    // Route::post('/admin/product/edit', [ProductController::class, 'update'])->name('admin.product.edit');
    // Route::get('/admin/product', [ProductController::class, 'create'])->name('admin.product.create');
});
// Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
