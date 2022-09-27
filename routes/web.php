<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/index', function () {
    return view('index');
});
Route::get('/oblicz', function () {
    return view('oblicz_spalanie');
});


Auth::routes();

Route::get('/user_car', [App\Http\Controllers\UserCarController::class, 'user_raports'])->name('user_car.reports');
Route::post('/user_car1', [App\Http\Controllers\UserCarController::class, 'store_refuels'])->name('user_car.store_refuels');
Route::post('/user_car2', [App\Http\Controllers\UserCarController::class, 'store_reprairs'])->name('user_car.store_reprairs');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user_account', [App\Http\Controllers\UserAccountController::class, 'index'])->name('user_account');
Route::post('/user_account1', [App\Http\Controllers\UserAccountController::class, 'update_nick'])->name('user_account.update_nick');
Route::post('/user_account2', [App\Http\Controllers\UserAccountController::class, 'update_email'])->name('user_account.update_email');
Route::get('/user_account3', [App\Http\Controllers\UserAccountController::class, 'destroy_user'])->name('user_account.destroy_user');

Route::get('/add_user_car_info', [App\Http\Controllers\UserCarInfoController::class, 'index'])->name('user_car_info');
Route::post('/add_user_car_info1', [App\Http\Controllers\UserCarInfoController::class, 'store_car'])->name('user_car_info.store_car');

Route::get('/car_base', [App\Http\Controllers\CarBaseController::class, 'index'])->name('car_base');