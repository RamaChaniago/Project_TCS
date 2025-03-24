<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/member', function () {
    return view('Member.MainDashboardMember');
});
Route::get('/admin', function () {
    return view('Admin.MainDashboardAdmin');
});
Route::get('/login', function () {
    return view('Auth.Login');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/Karir', [KarirController::class, 'inde00x']);

// Route::get('/login', [AuthController::class, 'index'])->name('Login');
// Route::post('/login', [AuthController::class, 'proses_login']);
