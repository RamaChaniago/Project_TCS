<?php


use App\Http\Controllers\CertificationTestController;
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LearningPackageController;
use App\Http\Controllers\LiveClassesController;
use App\Http\Controllers\OneOnOneController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SmartBookController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;


//Jngan diganggu dalam tahap pengembangan
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');
Route::post('/login', [authController::class, 'store']);


Route::get('/register', function () {
    return view('Auth.Register');
})-> name('register');
Route::post('/register', [registerController::class, 'store']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



//Route For Admin





//Route For Member


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
Route::get('/profile-member', function () {
    return view('Profile.Profile_Member.MainProfil');
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
Route::get('/reports-analytics', function () {
    return view('Admin.Reports-Analytics');
});
Route::get('/system-settings', function () {
    return view('Admin.System-Settings');
});





//Route For Instruktur

Route::get('/instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/dashboard-instructor', function () {
    return view('Instructor.Dashboard');
});
Route::get('/schedule-instructor', function () {
    return view('Instructor.Schedule');
});
Route::get('/live-classes-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/one-on-one-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/students-instructor', function () {
    return view('Instructor.MyStudent');
});
Route::get('/assignments-instructor', function () {
    return view('Instructor.Assignment');
});
Route::get('/assessments-instructor', function () {
    return view('Instructor.Assessment');
});
Route::get('/messages-instructor', function () {
    return view('Instructor.MainDashboardInstructor');
});
Route::get('/materials', function () {
    return view('Instructor.TeachingMaterial');
});
Route::get('/settings-instructor', function () {
    return view('Instructor.Settings');
});



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

Route::get('/Karir', [KarirController::class, 'index']);



Route::middleware(['auth', 'cekRole:admin'])->group(function(){
    
});






