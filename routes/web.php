<?php

use App\Http\Controllers\website\contactUsController;
use App\Http\Controllers\website\screenController;
use App\Http\Controllers\website\subscribeController;
use Illuminate\Support\Facades\Route;


Route::controller(screenController::class)->group(function(){

    Route::get('/', 'home');
    Route::get('/service', 'service');
    Route::get('/blog', 'blog');
    Route::get('/sertifikasi', 'sertifikasi');
    Route::get('/contact', 'contact');

});

Route::post('/contact', [contactUsController::class, 'store'])->name('store_contact');

Route::post('/subscribe', [subscribeController::class, 'store'])->name('subscribe');