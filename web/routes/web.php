<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormAPIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HistoryFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/regist', [AuthController::class, 'regist'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('auth-google');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('callback-google');

Route::get('/alert', [AuthController::class, 'notVerif'])->middleware(['auth'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/profile')->with('loginBerhasil', 'Email Anda telah terverifikasi!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', [AuthController::class, 'resendVerificationEmail'])->name('verification.resend');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/UserManagement', [UserManagementController::class, 'index'])->name('UserManagement');
    Route::get('/UserAdd', [UserManagementController::class, 'tambah'])->name('UserAdd');
    Route::post('/UserStore', [UserManagementController::class, 'store'])->name('store.User');
    Route::get('/UserEdit/{id}', [UserManagementController::class, 'edit'])->name('UserEdit');
    Route::post('/UserUpdate/{id}', [UserManagementController::class, 'update'])->name('update.User');
    Route::get('/deleteUser/{id}', [UserManagementController::class, 'destroy'])->name('deleteUser');
    Route::get('/profileAdmin', [DashboardController::class, 'profile'])->name('profileAdmin');



    Route::get('/historyform', [HistoryFormController::class, 'index'])->name('HistoryForm');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::post('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');
    Route::get('/history', [UserController::class, 'history'])->name('history');
    Route::get('/patient-info', [PatientController::class, 'index'])->name('patient-info');
    Route::get('/form-diagnosa', [PatientController::class, 'DiagnosaForm'])->name('form-diagnosa');
    Route::post('/patient-form', [FormController::class, 'pastientUpload'])->name('patient-form');
    Route::get('/result', [FormController::class, 'hasil'])->name('result');
    Route::get('/download-pdf', [PDFController::class, 'PDFDownloadHasil'])->name('download-pdf');
});

Route::get('/information', [HomeController::class, 'Information'])->name('information');
Route::get('/resources', [HomeController::class, 'Resources'])->name('resources');
// Route::get('/resources-detail', [HomeController::class, 'ResourcesDetail'])->name('resources-detail');
Route::get('/detail/{id}', [HomeController::class, 'ResourcesDetail'])->name('detail');



Route::post('/coba', [FormController::class, 'coba'])->name('coba');
Route::get('/isi', [FormController::class, 'index'])->name('tabel');
