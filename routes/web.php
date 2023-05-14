<?php

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

// Route::view('/', 'site.pages.homepage');

// use Illuminate\Routing\Route;

// use App\Models\Category;

use App\Models\Attribute;
use App\Models\Product;

Route::get('/', function(){
    $prod = Product::all();
    $attr = Attribute::all();
    // dd($attr);
    // dd($Prod);
    return view('site.pages.homepage',['category'=>$prod, 'attribute' => $attr]);
    // return to_route('site.pages.homepage');
});
Route::view('/HelpCenter', 'site.pages.HelpCenter');
Route::view('/Refund', 'site.pages.Refund');
Route::view('/TermsandPolicy', 'site.pages.TermsandPolicy');
Route::view('/Opendispute', 'site.pages.Opendispute');


Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');

Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');

    Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');

    Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');
});

Auth::routes();
require 'admin.php';
