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

// Route::get('/', function () {
//     return view('fronted.fronted');
// });

Route::get('/', [App\Http\Controllers\FrontedController::class, 'front'])->name('/');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','isAdmin'])->group(function () {

    // Route::get('/dashboard', function () {
    //    return view('admin.index');
    // });


    Route::middleware(['auth'])->group(function () {
        Route::post('addtocart', [App\Http\Controllers\CartController::class, 'addCart'])->name('addtocart');
   
    });
    
    
    Route::middleware(['auth'])->group(function () {
        Route::post('updatecart', [App\Http\Controllers\CartController::class, 'updatecart'])->name('updatecart');
   
    });
   
    
    Route::middleware(['auth'])->group(function () {
        Route::get('checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
   
    });
    Route::middleware(['auth'])->group(function () {
        Route::post('placeorder', [App\Http\Controllers\CheckoutController::class, 'placeorder'])->name('placeorder');
   
    });
    
    Route::middleware(['auth'])->group(function () {
        Route::get('myorder', [App\Http\Controllers\OrderController::class, 'myorder'])->name('myorder');
   
    });
   
    
    
    Route::middleware(['auth'])->group(function () {
        Route::get('cart', [App\Http\Controllers\CartController::class, 'cartitem'])->name('cart');
   
    });
    
    
    Route::middleware(['auth'])->group(function () {
        Route::get('wishlist', [App\Http\Controllers\WishlistController::class, 'wishlist'])->name('wishlist');
   
    });
    
    Route::middleware(['auth'])->group(function () {
        Route::post('addtowishlist', [App\Http\Controllers\WishlistController::class, 'addWishlist'])->name('addtowishlist');
   
    });



    Route::get('loadcart', [App\Http\Controllers\CartController::class, 'cartcount'])->name('loadcart');
    Route::get('loadwishlist', [App\Http\Controllers\WishlistController::class, 'wishlistcount'])->name('loadwishlist');
    
    
    
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('/dashboard');
 
    Route::get('category', [App\Http\Controllers\CategoryController::class, 'category'])->name('category');
    Route::get('addcategory', [App\Http\Controllers\CategoryController::class, 'addcategory'])->name('addcategory');
    Route::get('product', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
    Route::get('addproduct', [App\Http\Controllers\ProductController::class, 'addproduct'])->name('addproduct');
    Route::post('insert', [App\Http\Controllers\CategoryController::class, 'insert'])->name('insert');
    Route::post('add', [App\Http\Controllers\ProductController::class, 'add'])->name('add');
    Route::get('category/{slug}', [App\Http\Controllers\ProductController::class, 'viewcate'])->name('category/{slug}');
    Route::get('category/{cate_slug}/{pro_slug}', [App\Http\Controllers\ProductController::class, 'productdetails'])->name('category/{cate_slug}/{pro_slug}');
 
 });