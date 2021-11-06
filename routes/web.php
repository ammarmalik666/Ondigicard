<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\OrdersController;
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
    return view('index');
});
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/order-now', function () {
    return view('questions');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});
Route::post('/contact',[EmailsController::class,'contact_form'])->name('form.contact');
Route::post('/order-now',[EmailsController::class,'order_form'])->name('form.order');
Route::get('/order/thankyou', function(){
    return view('thankyou2');
});

Route::get('/order',[OrdersController::class,'index']);
Route::get('/order',[OrdersController::class,'index']);
Route::post('/order',[OrdersController::class,'postPaymentStripe'])->name('addmoney.stripe');
Route::get('/thankyou', [OrdersController::class,'thankyou']);