<?php

use App\Http\Controllers\website\contactUsController;
use App\Http\Controllers\website\screenController;
use App\Http\Controllers\website\subscribeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use Illuminate\Support\Facades\Route;


Route::get('/member', function () {
    return view('Member.MainDashboardMember');
});
Route::get('/admin', function () {
    return view('Admin.MainDashboardAdmin');
});
Route::get('/login', function () {
    return view('Auth.Login');
});
// Route::get('/', [HomeController::class, 'index']);

Route::get('/Karir', [KarirController::class, 'index']);



Route::controller(screenController::class)->group(function(){
    Route::get('/', 'home');
    Route::get('/service', 'service');
    Route::get('/blog', 'blog');
    Route::get('/sertifikasi', 'sertifikasi');
    Route::get('/contact', 'contact');

});

Route::post('/contact', [contactUsController::class, 'store'])->name('store_contact');

Route::post('/subscribe', [subscribeController::class, 'store'])->name('subscribe');