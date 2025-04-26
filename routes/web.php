<?php

use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ToeflExamController;
use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Admin\userManagementController;
use App\Http\Controllers\CertificationTestController;
use App\Http\Controllers\CertificationToeflProgramController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\LearningPackageController;
use App\Http\Controllers\LiveClassesController;
use App\Http\Controllers\OneOnOneController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SmartBookController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Member\ToeflExamController as MemberToeflExamController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

// Debug route resolution
Route::matched(function ($event) {
    $controller = $event->route->getAction('controller');
    $controllerInstance = app()->make(explode('@', $controller)[0]);
    Log::info('Route matched', [
        'method' => $event->request->method(),
        'path' => $event->request->path(),
        'controller' => $controller,
        'controller_class' => get_class($controllerInstance),
        'controller_methods' => get_class_methods($controllerInstance),
    ]);
});

// ------------------ Public Routes ------------------ //
Route::get('/', [HomeController::class, 'index'])->name('home');

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
})->name('checkout');

Route::get('/Karir', [KarirController::class, 'index'])->name('karir');
Route::get('/Promo', [PromoController::class, 'index'])->name('promo');

Route::get('/courses-certification-test', [CertificationTestController::class, 'index'])->name('courses.certification');
Route::get('/courses-learning-package', [LearningPackageController::class, 'index'])->name('courses.learning');
Route::get('/courses-live-class', [LiveClassesController::class, 'index'])->name('courses.live');
Route::get('/courses-one-on-one', [OneOnOneController::class, 'index'])->name('courses.one-on-one');
Route::get('/courses-smart-book', [SmartBookController::class, 'index'])->name('courses.smart-book');
Route::get('/courses-subscription', [SubscriptionController::class, 'index'])->name('courses.subscription');

Route::get('/program/certification-test', [CertificationToeflProgramController::class, 'index'])->name('program.certification');
Route::get('/program/live-class', [SubscriptionController::class, 'index'])->name('program.live');

// ------------------ Authenticated Shared Routes ------------------ //
Route::middleware(['auth', 'cekRole:admin,member,instructor'])->group(function () {
    Route::post('/logout', [authController::class, 'logout'])->name('logout');
});

// ------------------ Member Routes ------------------ //
Route::middleware(['auth', 'cekRole:admin,member'])->group(function () {
    Route::get('/member', function () {
        return view('Member.Transaction');
    })->name('member.dashboard');

    Route::get('/transaction', function () {
        return view('Member.Transaction');
    })->name('member.transaction');

    Route::get('/learning-package', function () {
        return view('Member.LearningPackage');
    })->name('member.learning');

    Route::get('/certification-test', function () {
        return view('Member.SertificationTest');
    })->name('member.certification');

    Route::get('/smart-book', function () {
        return view('Member.Smart-Book');
    })->name('member.smart-book');

    Route::get('/sertifikat', function () {
        return view('Member.Sertifikat');
    })->name('member.sertifikat');

    Route::get('/exam-toefl', [MemberToeflExamController::class, 'startExam'])->name('exam.start');
    Route::post('/exam-toefl/submit', [MemberToeflExamController::class, 'submitExam'])->name('exam.submit');

    Route::get('/profile-member', function () {
        return view('Profile.Profile_Member.MainProfil');
    })->name('profile.member');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/update-image', [ProfileController::class, 'updateImage'])->name('profile.update.image');
    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update.password');

    Route::get('/payment', [BayarController::class, 'index'])->name('payment.index');
    Route::post('/payment', [BayarController::class, 'store'])->name('payment.store');
    Route::post('/payment/check-status', [BayarController::class, 'checkStatus'])->name('payment.checkStatus');
    Route::post('/payment/mark-paid', [BayarController::class, 'markPaid'])->name('payment.markPaid');
    Route::get('/payment/success', [BayarController::class, 'success'])->name('payment.success');
});

// ------------------ Admin Routes ------------------ //
Route::middleware(['auth', 'cekRole:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('Admin.Dashboard');
    })->name('admin.dashboard');

    Route::get('/dashboard', function () {
        return view('Admin.Dashboard');
    })->name('admin.dashboard.alt');

    Route::resource('/user-management', userManagementController::class);

    // TOEFL ITP Questions Management
    Route::get('/course-management', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('/course-management/filter', [QuestionController::class, 'filter'])->name('questions.filter');
    Route::post('/course-management', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('/course-management/{question}', [QuestionController::class, 'show'])->name('questions.show');
    Route::get('/course-management/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::put('/course-management/{question}', [QuestionController::class, 'update'])->name('questions.update');
    Route::delete('/course-management/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
    Route::put('/course-management/timing/update', [QuestionController::class, 'updateTiming'])->name('test.timing.update');

    // Reading Passages Management
    Route::get('/toefl-passages', [ToeflExamController::class, 'managePassages'])->name('toefl-passages');
    Route::get('/toefl-passages/create', [ToeflExamController::class, 'createPassage'])->name('toefl-passages.create');
    Route::post('/toefl-passages', [ToeflExamController::class, 'storePassage'])->name('toefl-passages.store');

    // Import/Export Functionality
    Route::post('/toefl-questions/import', [ToeflExamController::class, 'importQuestions'])->name('toefl-questions.import');
    Route::get('/toefl-questions/export', [ToeflExamController::class, 'exportQuestions'])->name('toefl-questions.export');

    // Analytics
    Route::get('/toefl-analytics', [ToeflExamController::class, 'analytics'])->name('toefl-analytics');

    Route::get('/admin-transaction', function () {
        return view('Admin.Transaction');
    })->name('admin.transaction');

    Route::get('/certificate-admin', function () {
        return view('Admin.Certification');
    })->name('admin.certification');

    Route::get('/content-management', function () {
        return view('Admin.Content-Management');
    })->name('admin.content');

    Route::get('/reports-analytics', function () {
        return view('Admin.Reports-Analytics');
    })->name('admin.reports');

    Route::get('/system-settings', function () {
        return view('Admin.System-Settings');
    })->name('admin.settings');
});

// ------------------ Instructor Routes ------------------ //
Route::middleware(['auth', 'cekRole:admin,instructor'])->group(function () {
    Route::get('/instructor', function () {
        return view('Instructor.Dashboard');
    })->name('instructor.dashboard');

    Route::get('/dashboard-instructor', function () {
        return view('Instructor.Dashboard');
    })->name('instructor.dashboard.alt');

    Route::get('/schedule-instructor', function () {
        return view('Instructor.Schedule');
    })->name('instructor.schedule');

    Route::get('/live-classes-instructor', function () {
        return view('Instructor.MainDashboardInstructor');
    })->name('instructor.live-classes');

    Route::get('/one-on-one-instructor', function () {
        return view('Instructor.MainDashboardInstructor');
    })->name('instructor.one-on-one');

    Route::get('/students-instructor', function () {
        return view('Instructor.MyStudent');
    })->name('instructor.students');

    Route::get('/assignments-instructor', function () {
        return view('Instructor.Assignment');
    })->name('instructor.assignments');

    Route::get('/assessments-instructor', function () {
        return view('Instructor.Assessment');
    })->name('instructor.assessments');

    Route::get('/materials', function () {
        return view('Instructor.TeachingMaterial');
    })->name('instructor.materials');

    Route::get('/settings-instructor', function () {
        return view('Instructor.Settings');
    })->name('instructor.settings');

    Route::get('/messages-instructor', function () {
        return view('Instructor.MainDashboardInstructor');
    })->name('instructor.messages');
});