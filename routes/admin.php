<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/request/make/available', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/authorize', [AdminController::class, 'authenticate'])->name('admin.authenticate');


// ''
Route::group(['middleware' => ['adminauth']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/user/{id}', [AdminController::class, 'userInfo'])->name('admin.user');
    Route::get('/withdrawals', [AdminController::class, 'withdrawals'])->name('admin.withdrawals');
    Route::post('/withdrawal/action', [AdminController::class, 'processWithdrawal'])->name('admin.withdrawal.action');

    Route::get('/packages', [AdminController::class, 'packages'])->name('admin.packages');
    Route::post('/packages', [AdminController::class, 'addPackage'])->name('admin.packages');
    Route::post('/packages/delete', [AdminController::class, 'deletePackage'])->name('admin.packages.delete');

    Route::get('/package/{id}', [AdminController::class, 'package'])->name('admin.package');
    Route::post('/package/{id}', [AdminController::class, 'addPackagePlan'])->name('admin.package');
    Route::post('/package/plan/delete', [AdminController::class, 'deletePackagePlan'])->name('admin.package.delete');

    Route::get('/authorize/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
