<?php

use App\Http\Controllers\website\contactUsController;
use App\Http\Controllers\website\screenController;
use App\Http\Controllers\website\subscribeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\PromoController;
use Illuminate\Support\Facades\Route;


Route::get('/member', function () {
    return view('Member.MainDashboardMember');
});
Route::get('/transaction', function () {
    return view('Member.Transaction');
});
Route::get('/learning-package', function () {
    return view('Member.LearningPackage');
});
Route::get('/certification-test', function () {
    return view('Member.SertificationTest');
});
Route::get('/smart-book', function () {
    return view('Member.Smart-Book');
});
Route::get('/sertifikat', function () {
    return view('Member.Sertifikat');
});

Route::get('/admin', function () {
    return view('Admin.MainDashboardAdmin');
});
Route::get('/instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});

Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');
Route::get('/register', function () {
    return view('Auth.Register');
})->name('Register');

Route::get('/', [HomeController::class, 'index']);


Route::get('/Karir', [KarirController::class, 'index']);
Route::get('/Promo', [PromoController::class, 'index']);

Route::get('/Karir', [KarirController::class, 'index']);




Route::controller(screenController::class)->group(function(){
    // Route::get('/', 'home');
    Route::get('/service', 'service');
    Route::get('/blog', 'blog');
    Route::get('/sertifikasi', 'sertifikasi');
    Route::get('/contact', 'contact');

});

Route::post('/contact', [contactUsController::class, 'store'])->name('store_contact');

Route::post('/subscribe', [subscribeController::class, 'store'])->name('subscribe');
