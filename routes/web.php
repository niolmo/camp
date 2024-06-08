<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


Route::get('/', [MainController::class, 'home'])->name('home'); // <- Так должен выглядеть
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/singup', [LoginController::class, 'reg'])->name('singup');
Route::post('/mac',  [LoginController::class, 'mac'])->name('mac');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginauth'])->name('loginauth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); //Активирует учетную запись

    return redirect()->route('dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:3,1'])->name('verification.send'); //throttle - ограничетель запросов сейчас - 3 запроса в минуту
