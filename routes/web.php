<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/index', function () {
    return view('pages.index');
});

 Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
 Route::get('/blog', [App\Http\Controllers\AdminController::class, 'blog'])->name('blog');
 Route::get('/shop', [App\Http\Controllers\AdminController::class, 'shop'])->name('shop');
 Route::get('/about', [App\Http\Controllers\AdminController::class, 'about'])->name('about');
 Route::get('/page', [App\Http\Controllers\AdminController::class, 'page'])->name('page');
 Route::get('/contact', [App\Http\Controllers\AdminController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
