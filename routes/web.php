<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeCotroller;
use App\Http\Controllers\Frontend\AboutCotroller;
use App\Http\Controllers\Frontend\ContactCotroller;
use App\Http\Controllers\Frontend\ServicesCotroller;
use App\Http\Controllers\Frontend\LoginCotroller;
use App\Http\Controllers\Frontend\RegisterCotroller;
use App\Http\Controllers\Frontend\SellerController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\TestimonilsController;
use Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */

// Route::get('/', function () {
//     return view('frontend.index');
// });

 Route::get('/', [HomeCotroller::class, 'index']);
 Route::get('/about', [AboutCotroller::class, 'aboutpage']);
 Route::get('/services', [ServicesCotroller::class, 'servicespage']);
 Route::get('/contact', [ContactCotroller::class, 'contactpage']);
 Route::get('/login', [LoginCotroller::class, 'loginpage']);
//  Route::get('/register', [RegisterCotroller::class, 'registerpage']);
//  Route::post('/register', [RegisterCotroller::class, 'upload']);

//  Seller Regisrtion 
Route::get('/register/seller', [SellerController::class, 'create'])->name('seller.create');
Route::post('/register/seller', [SellerController::class, 'store'])->name('seller.store');




// Grouping in laravel Strat

// Route::get('/products/listing', [ProductsController::class, 'index'])->name('products.listing');
// Route::get('/products/add', [ProductsController::class, 'addproduct'])->name('products.add');
// Route::post('/products/add', [ProductsController::class, 'store'])->name('products.add');
// Route::get('/products/edit/{id}', [ProductsController::class, 'editproduct'])->name('products.edit');
// Route::post('/products/edit/{id}', [ProductsController::class, 'update'])->name('products.update');
// Route::get('/products/delete/{id}', [ProductsController::class, 'delete'])->name('products.delete');


Route::group(['prefix' => '/products/'], function (){
    Route::get('listing', [ProductsController::class, 'index'])->name('products.listing');
    Route::get('add', [ProductsController::class, 'addproduct'])->name('products.add');
    Route::post('add', [ProductsController::class, 'store'])->name('products.add');
    Route::get('edit/{id}', [ProductsController::class, 'editproduct'])->name('products.edit');
    Route::post('edit/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::get('delete/{id}', [ProductsController::class, 'delete'])->name('products.delete');

});

// End Group in ;aravel 

Route::get('/Testimonials/{lang?}', function ($lang = null)
{
    App::setLocale($lang);
    return view('frontend.testimonials');
});


/// Stubs 