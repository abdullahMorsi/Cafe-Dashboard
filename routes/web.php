<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\EmailVerifyController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuggestionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('products', ProductController::class)->middleware('auth');

Route::get('/product/softDelete/{id}', [ProductController::class, 'softDelete']);
Route::get('/product/trash', [ProductController::class, 'trashedProducts']);
Route::get('/product/restoreFromDatabase/{id}', [ProductController::class, 'restoreSoftDelete']);
Route::get('/product/deleteFromDatabase/{id}', [ProductController::class, 'deleteForEver']);

//Auth::routes();
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::Post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/verifyEmail', [EmailVerifyController::class, 'create'])->name('verifyEmail');

Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::Post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('/resetPassword', [ResetPasswordController::class, 'index']);
route::get('/ensure', function (){
    return view('resetPassword.ensure');
});


//payment
route::get('/mainDash', function (){
    return view('payment.mainDash');
});
route::get('/paymentWay', function (){
    return view('payment.paymentWay');
});
route::get('/bankPayment', [BankController::class, 'create']);
route::post('/bankPayment', [BankController::class, 'store']);

Route::get('/settings', function (){
    return view('settings');
});
Route::get('/opinions', [OpinionController::class, 'index']);

Route::get('/suggestions', [SuggestionController::class, 'create']);
Route::post('/suggestions', [SuggestionController::class, 'store']);

Route::get('/contact-us', function (){
    return view('contactUs');
});
