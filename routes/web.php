<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\UserController;
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


// Route::get('/p', function () {
//     return view('user.payment_page');
// })->name('homes');

Route::get('/account/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/account/login', [LoginController::class, 'loginUser'])->name('login.user');

Route::get('/account/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/account/register', [RegisterController::class, 'createAccount'])->name('create.account');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('user.dashboard');
    Route::get('/account', [UserController::class, 'showProfile'])->name('user.profile');
    Route::get('/account/subscriptions', [DashboardController::class, 'showsubscriptions'])->name('dashboard.sub');
    Route::post('/account/sub', [DashboardController::class, 'payForsubscription']);
    Route::post('/account/payment/verify', [DashboardController::class, 'verifyPayment']);
    Route::get('/account/plans', [UserController::class, 'accountPlans']);
    Route::get('/logout', [DashboardController::class, 'logout'])->name('user.logout');
});
