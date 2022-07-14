<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function () {

    // Route::get('/dashboard', function () {
    //    return view('admin.index');
    // });
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('/dashboard');
 
    Route::get('category', [App\Http\Controllers\CategoryController::class, 'category'])->name('category');
    Route::get('addcategory', [App\Http\Controllers\CategoryController::class, 'addcategory'])->name('addcategory');
    Route::post('insert', [App\Http\Controllers\CategoryController::class, 'insert'])->name('insert');
 
 });