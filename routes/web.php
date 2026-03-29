<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ContactEnquiryController as AdminContactEnquiryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\ContactEnquiryController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [ContactEnquiryController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/enquiries', [AdminContactEnquiryController::class, 'index'])->name('enquiries.index');
        Route::get('/enquiries/{enquiry}', [AdminContactEnquiryController::class, 'show'])->name('enquiries.show');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});
