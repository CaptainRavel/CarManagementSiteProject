<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/', [App\Http\Controllers\IndexPageController::class, 'index']);
Route::get('/oblicz', [App\Http\Controllers\IndexPageController::class, 'oblicz']);
Route::get('/car_base', [App\Http\Controllers\CarBaseController::class, 'index'])->name('car_base');
Route::get('/search',[App\Http\Controllers\SearchUserController::class, 'index']);

Route::middleware(['auth'])->group(function()
{
    Route::get('/user_account', [App\Http\Controllers\UserAccountController::class, 'index'])->name('user_account');
    Route::post('/user_account1', [App\Http\Controllers\UserAccountController::class, 'update_nick'])->name('user_account.update_nick');
    Route::post('/user_account2', [App\Http\Controllers\UserAccountController::class, 'update_email'])->name('user_account.update_email');
    Route::get('/user_account3', [App\Http\Controllers\UserAccountController::class, 'destroy_user'])->name('user_account.destroy_user');
});

Route::middleware(['auth', 'is_verify_email'])->group(function()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/user_car', [App\Http\Controllers\UserCarController::class, 'user_raports'])->name('user_car.reports');
    Route::post('/user_car1', [App\Http\Controllers\UserCarController::class, 'store_refuels'])->name('user_car.store_refuels');
    Route::post('/user_car2', [App\Http\Controllers\UserCarController::class, 'store_reprairs'])->name('user_car.store_reprairs');

    //Route::get('/add_user_car_info', [App\Http\Controllers\UserCarInfoController::class, 'index'])->name('user_car_info');
    //Route::post('/add_user_car_info1', [App\Http\Controllers\UserCarInfoController::class, 'store_car'])->name('user_car_info.store_car');
});

Route::middleware(['can:isAdmin'])->group(function()
{
    Route::get('/admin_panel', [App\Http\Controllers\AdminPanelController::class, 'user_list'])->name('admin_panel');
    Route::get('/searchuser', [App\Http\Controllers\AdminPanelController::class, 'search'])->name('search');


    Route::get('/user_management/{id}', [App\Http\Controllers\UserManagementController::class, 'user_edit'])->name('user_management');
    Route::post('/user_management_edit_name/{id}', [App\Http\Controllers\UserManagementController::class, 'update_nick']);
    Route::post('/user_management_edit_password/{id}', [App\Http\Controllers\UserManagementController::class, 'update_password']);
    Route::post('/user_management_edit_email/{id}', [App\Http\Controllers\UserManagementController::class, 'update_email']);
    Route::get('/user_management_delete_user/{id}', [App\Http\Controllers\UserManagementController::class, 'destroy_user']);
});

Route::get('dashboard', [App\Http\Controllers\Auth\AuthController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']); 
Route::get('account/verify/{token}', [App\Http\Controllers\Auth\AuthController::class, 'verifyAccount'])->name('user.verify');

Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
Route::post('/post-login', [App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/registration', [App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('register');
Route::post('/post-registration', [App\Http\Controllers\Auth\AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::get('/forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

//Google login
Route::get('login/google',[App\Http\Controllers\Auth\AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\Auth\AuthController::class, 'handleGoogleCallback']);

//Facebook login
Route::get('login/facebook',[App\Http\Controllers\Auth\AuthController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback',[App\Http\Controllers\Auth\AuthController::class, 'handleFacebookCallback']);

//Github login
Route::get('login/github',[App\Http\Controllers\Auth\AuthController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback',[App\Http\Controllers\Auth\AuthController::class, 'handleGithubCallback']);