<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;

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
//Admin Route
//  Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
//  Route::get('/blog', [App\Http\Controllers\AdminController::class, 'blog'])->name('blog');
//  Route::get('/shop', [App\Http\Controllers\AdminController::class, 'shop'])->name('shop');
//  Route::get('/about', [App\Http\Controllers\AdminController::class, 'about'])->name('about');
//  Route::get('/page', [App\Http\Controllers\AdminController::class, 'page'])->name('page');
//  Route::get('/contact', [App\Http\Controllers\AdminController::class, 'contact'])->name('contact');

 //Theme Route
 Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
 Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
 Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
 Route::get('/index', [App\Http\Controllers\MainController::class, 'index'])->name('index');
 Route::get('/page', [App\Http\Controllers\PageController::class, 'page'])->name('page');
 Route::get('/shop', [App\Http\Controllers\ShopController::class, 'shop'])->name('shop');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
