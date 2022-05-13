<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('login_success', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');




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
    Route::get('/account/referrals', [UserController::class, 'referrals']);
    Route::get('/account/withdrawals', [UserController::class, 'withdrawals']);
    
    Route::get('/logout', [DashboardController::class, 'logout'])->name('user.logout');
});
