<?php

// DB::listen(function($query){var_dump($query->sql, $query->bindings);});

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tweety\HomeController;
use App\Http\Controllers\amazon\AdminController;
use App\Http\Controllers\amazon\Categorycontroller;
use App\Http\Controllers\tweety\TweetLikesController;

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

Route::get('/tweety', function () {
    return view('tweety.welcome');
});

//amazon accounts

Route::get('/amazon/user-account', [Categorycontroller::class, 'user']);
Route::get('/amazon/is-prime', [Categorycontroller::class, 'prime']);
Route::get('/amazon/not-prime', [Categorycontroller::class, 'notprime']);
// amazon products

Route::get('/amazon', [Categorycontroller::class, 'indexes']);
Route::get('/amazon/product/{id}', [Categorycontroller::class, 'category']);
Route::get('/amazon/search', [Categorycontroller::class, 'searched']);


// Products show

Route::post('/amazon/{name}', [Categorycontroller::class, 'show']);
Route::post('/amazons/{name}', [Categorycontroller::class, 'showed']);

// Add to cart , buy, favorite
Route::post('/amazon/cart/{name}', [Categorycontroller::class, 'addcart']);
Route::post('/amazon/buy/{name}', [Categorycontroller::class, 'buycart']);
Route::post('/amazon/favorite/{name}', [Categorycontroller::class, 'favorite']);

// Show to cart , buy, favorite
Route::get('/amazon/add-cart', [Categorycontroller::class, 'showaddcart']);
Route::get('/amazon/buy-product', [Categorycontroller::class, 'buyproduct']);
Route::get('/amazon/favorite-list', [Categorycontroller::class, 'favoritelist']);

// Add to cart page to buy
Route::post('amazon/cart/buy/{productname}', [Categorycontroller::class, 'buyaddcart']);

//favaorite page to buy page, cart page 
Route::post('amazon/favorite/buy/{productname}', [Categorycontroller::class, 'buyfavoritecart']);
Route::post('amazon//favorite/cart/{productname}', [Categorycontroller::class, 'cartfavoritecart']);

// remove add to cart page
Route::get('/amazon/cart-delete/{id}', [Categorycontroller::class, 'removecart']);

// remove favorite page
Route::post('/amazon/favorite-delete/{name}', [Categorycontroller::class, 'removefavorite']);

// remove order page
Route::post('/amazon/buy-delete/{name}', [Categorycontroller::class, 'removebuy']);

//Admin_amazon
Route::get('/amazon/admin/', [AdminController::class, 'index'])->middleware('auth','admin_amazon');

//Admin Categorys
Route::get('/amazon/admin/category/add', [AdminController::class, 'categoryadd']);
Route::get('/amazon/admin/category/update', [AdminController::class, 'categoryupdate']);
Route::get('/amazon/admin/category/remove', [AdminController::class, 'categoryremove']);

//Admin Products
Route::get('/amazon/admin/product/add', [AdminController::class, 'productadd']);
Route::get('/amazon/admin/product/update', [AdminController::class, 'productupdate']);
Route::get('/amazon/admin/product/remove', [AdminController::class, 'productremove']);
Auth::routes();

// Route::middleware('auth')->group(function(){
    Route::get('/tweets', [HomeController::class, 'index'])->name('home');
    Route::post('/tweets', [HomeController::class, 'store']);
    Route::post('/profiles/{user:username}/follow',[Homecontroller::class,'save'])->name('follow');
    Route::get('/profiles/{user:username}/edit',[Homecontroller::class,'edit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}',[Homecontroller::class,'update'])->middleware('can:edit,user');

    Route::post('/tweets/{tweet}/like', [TweetLikesController::class,'store']);
    Route::delete('/tweets/{tweet}/like',[TweetLikesController::class,'destroy']);

    Route::get('/profiles/{user:username}',[Homecontroller::class,'show'])->name('profile');

Route::get('/explore',[Homecontroller::class,'explore']);



// });



