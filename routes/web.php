<?php

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
Route::get('/dashboard', function () {
    return view('Admin.Dashboard');
});
Route::get('/user-management', function () {
    return view('Admin.User-Management');
});
Route::get('/course-management', function () {
    return view('Admin.Course-Management');
});
Route::get('/admin-transaction', function () {
    return view('Admin.Transaction');
});
Route::get('/certificate-admin', function () {
    return view('Admin.Certification');
});
Route::get('/content-management', function () {
    return view('Admin.Content-Management');
});
Route::get('/admin', function () {
    return view('Admin.MainDashboardAdmin');
});
Route::get('/reports-analytics', function () {
    return view('Admin.Reports-Analytics');
});
Route::get('/system-settings', function () {
    return view('Admin.System-Settings');
});



Route::get('/instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/dashboard-instructor', function () {
    return view('Instructor.Dashboard');
});
Route::get('/schedule-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/live-classes-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/one-on-one-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/students-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/assignments-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/assessment-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/messages-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/materials', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/settings-instructor', function () {
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


