<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
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
    return view('home');
})->name('home');

Route::get('/account/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/account/login', [LoginController::class, 'loginUser'])->name('login.user');

Route::get('/account/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/account/register', [RegisterController::class, 'createAccount'])->name('create.account');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('user.profile');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('user.logout');
    // Route::group(['middleware' => ['auth', 'verified']], function () {
    // Route::get('/account', [UserController::class, 'showAccount'])->name('account');
    // Route::get('/account/order/{id}', [OrderController::class, 'showUserOrder'])->name('order');
    // Route::post('/account/update', [UserController::class, 'userUpdate'])->name('updateProfile');
    // Route::post('/account/password/update', [UserController::class, 'userPasswordUpdate'])->name('updatePassword');
    // Route::get('checkout', [MainController::class, 'checkout'])->name('checkout');
    // Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
    // Route::get('/payment/verify', [PaymentController::class, 'handleGatewayCallback']);
});
