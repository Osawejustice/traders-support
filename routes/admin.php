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
});
