<?php

use App\Http\Controllers\adminAuth;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\profile;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\RmaController;
use App\Http\Controllers\saleOrdersController;
use App\Http\Controllers\AddInventoryController;
use App\Http\Controllers\RmaRefundsController;
use App\Http\Controllers\userAuth;
use Illuminate\Support\Facades\Route;

Route::redirect('/login', 'authentication/login');
Route::redirect('/register', 'authentication/register');
Route::redirect('/reset', 'authentication/reset');
Route::redirect('/logout', 'authentication/logout');
Route::redirect('/dashboard', 'dashboard/index');
Route::prefix('/authentication')->group(function () {
    Route::get('/login', [userAuth::class, 'login'])->name('login');
    Route::post('/loginReq', [userAuth::class, 'loginReq'])->name('loginReq');

    Route::get('/register', [userAuth::class, 'register'])->name('register');
    Route::post('/registerReq', [userAuth::class, 'registerReq'])->name('registerReq');

    // user Created, Email Verification Notice
    Route::get('/email-verification', [userAuth::class, 'emailVerification'])->name('emailVerification');
    Route::get('/resendEmail', [userAuth::class, 'resendEmail'])->name('resendEmail');

    // Reset Password Request
    Route::get('/reset', [userAuth::class, 'resetPassword'])->name('resetPassword');
    Route::post('/resetPasswordReq', [userAuth::class, 'resetPasswordReq'])->name('resetPasswordReq');

    // Logout from System
    Route::get('/logout', [userAuth::class, 'logout'])->name('logout');
});
// user Click on Email from Their Email
Route::get('/verify/{token?}', [userAuth::class, 'verifyUserEmail'])->name('verifyUserEmail');
Route::get('/email-verified', [userAuth::class, 'emailVerified'])->name('emailVerified');

Route::get('/reset/{token?}', [userAuth::class, 'setPassword'])->name('setPassword');
Route::post('/setPasswordReq', [userAuth::class, 'setPasswordReq'])->name('setPasswordReq');
Route::get('/password-changed', [userAuth::class, 'passwordChanged'])->name('passwordChanged');




Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/index', [dashboard::class, 'index'])->name('dashboard');
    Route::resource('sale_orders', saleOrdersController::class);
    Route::resource('customer', customerController::class);
    
    Route::resource('support', SupportController::class);

    Route::resource('supplier', SupplierController::class);

    Route::resource('warehouse', WarehouseController::class);
    Route::resource('rma', RmaController::class);
    Route::resource('add_inventory', AddInventoryController::class);
    Route::resource('rma_refund', RmaRefundsController::class);
    
    
    Route::get('/profile', [profile::class, 'index'])->name('profile');
    Route::post('/profile', [profile::class, 'profileReq'])->name('profileReq');
    Route::post('/changePasswordReq', [profile::class, 'changePasswordReq'])->name('changePasswordReq');
});


Route::prefix('admin')->group(function () {
    Route::get('/authenticate/login', [adminAuth::class, 'login'])->name('adminLogin');
    Route::post('/authenticate/login', [adminAuth::class, 'loginReq'])->name('adminLoginReq');
});



Route::prefix('admin/dashboard')->middleware(['admin'])->group(function () {
    Route::get('/index', [adminDashboard::class, 'index'])->name('adminDashboard');
    Route::get('/all-users', [adminDashboard::class, 'allUsers'])->name('allUsers');
    Route::get('/all-supports', [adminDashboard::class, 'allSupports'])->name('allSupports');
});