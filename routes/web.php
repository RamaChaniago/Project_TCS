<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Admin\userManagementController;
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\CertificationTestController;
use App\Http\Controllers\CertificationToeflProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LearningPackageController;
use App\Http\Controllers\LiveClassesController;
use App\Http\Controllers\OneOnOneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileMemberController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SmartBookController;
use App\Http\Controllers\SubscriptionController;

// ------------------------
// ROUTE UMUM (Tanpa Auth)
// ------------------------
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');
Route::post('/login', [authController::class, 'store']);

Route::get('/register', function () {
    return view('Auth.Register');
})->name('register');
Route::post('/register', [registerController::class, 'store']);

Route::get('/checkout', function () {
    return view('Checkout.Checkout');
});

Route::get('/Karir', [KarirController::class, 'index']);
Route::get('/Promo', [PromoController::class, 'index']);

Route::get('/courses-one-on-one', [OneOnOneController::class, 'index']);
Route::get('/courses-certification-test', [CertificationTestController::class, 'index']);
Route::get('/courses-live-class', [LiveClassesController::class, 'index']);
Route::get('/courses-learning-package', [LearningPackageController::class, 'index']);
Route::get('/courses-smart-book', [SmartBookController::class, 'index']);
Route::get('/courses-subscription', [SubscriptionController::class, 'index']);

Route::get('/program/certification-test', [CertificationToeflProgramController::class, 'index']);
Route::get('/program/live-class', [SubscriptionController::class, 'index']); // duplikat disatukan

Route::get('/toefl-management', function () {
    return view('Admin_crud.Exam-Toefl.ExamToefl');
});

// -----------------------------
// ROUTE AUTH UMUM (Logout)
// -----------------------------
Route::middleware(['auth', 'cekRole:admin,member,instructor'])->group(function () {
    Route::get('/logout', [authController::class, 'logout'])->name('logout');
});

// ------------------------
// ROUTE MEMBER & ADMIN
// ------------------------
Route::middleware(['auth', 'cekRole:admin,member'])->group(function () {
    Route::get('/member', function () {
        return view('Member.Transaction');
    });
    Route::get('/transaction', fn () => view('Member.Transaction'));
    Route::get('/learning-package', fn () => view('Member.LearningPackage'));
    Route::get('/certification-test', fn () => view('Member.SertificationTest'));
    Route::get('/smart-book', fn () => view('Member.Smart-Book'));
    Route::get('/sertifikat', fn () => view('Member.Sertifikat'));
    Route::get('/profile-member', fn () => view('Profile.Profile_Member.MainProfil'));
    Route::get('/exam-toefl', fn () => view('Member.Exam'));

    // ProfileController
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/update-image', [ProfileController::class, 'updateImage'])->name('profile.update.image');
    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update.password');
});

// ------------------------
// ROUTE ADMIN
// ------------------------
Route::middleware(['auth', 'cekRole:admin'])->group(function () {
    Route::get('/admin', fn () => view('Admin.Dashboard'));
    Route::get('/dashboard', fn () => view('Admin.Dashboard'));

    Route::resource('/user-management', userManagementController::class);

    Route::get('/course-management', fn () => view('Admin.Course-Management'));
    Route::get('/admin-transaction', fn () => view('Admin.Transaction'));
    Route::get('/certificate-admin', fn () => view('Admin.Certification'));
    Route::get('/content-management', fn () => view('Admin.Content-Management'));
    Route::get('/reports-analytics', fn () => view('Admin.Reports-Analytics'));
    Route::get('/system-settings', fn () => view('Admin.System-Settings'));
});

// ------------------------
// ROUTE INSTRUCTOR
// ------------------------
Route::middleware(['auth', 'cekRole:admin,instructor'])->group(function () {
    Route::get('/instructor', fn () => view('Instructor.Dashboard'));
    Route::get('/dashboard-instructor', fn () => view('Instructor.Dashboard'));
    Route::get('/schedule-instructor', fn () => view('Instructor.Schedule'));
    Route::get('/live-classes-instructor', fn () => view('Instructor.MainDashboardInstructor'));
    Route::get('/one-on-one-instructor', fn () => view('Instructor.MainDashboardInstructor'));
    Route::get('/students-instructor', fn () => view('Instructor.MyStudent'));
    Route::get('/assignments-instructor', fn () => view('Instructor.Assignment'));
    Route::get('/assessments-instructor', fn () => view('Instructor.Assessment'));
    Route::get('/materials', fn () => view('Instructor.TeachingMaterial'));
    Route::get('/settings-instructor', fn () => view('Instructor.Settings'));
    Route::get('/messages-instructor', fn () => view('Instructor.MainDashboardInstructor'));
});
