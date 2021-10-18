<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsController;
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
Route::post('/contact',[EmailsController::class,'contact_form'])->name('form.contact');
Route::post('/order-now',[EmailsController::class,'order_form'])->name('form.order');
