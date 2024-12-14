<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/post-login', 'App\Http\Controllers\AuthController@postLogin')->name('post.login');
Route::post('/post-register', 'App\Http\Controllers\AuthController@postRegister')->name('post.register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('users.dashboard');
});

Route::get('/forgot', function () {
    return view('auth.forgot');
})->name('forgot');

Route::get('/reset', function () {
    return view('auth.reset');
})->name('reset');

Route::get('/users/dashboard', function () {
    return view('users.dashboard');
})->name('users.dashboard');

Route::get('/users/course', function () {
    return view('users.course');
})->name('users.course');

Route::get('/users/material', function () {
    return view('users.material');
})->name('users.material');

Route::get('/users/test', function () {
    return view('users.preTest');
})->name('users.preTest');

Route::get('/users/test/quiz', function () {
    return view('users.test');
})->name('users.test');

Route::get('/users/result', function () {
    return view('users.result');
})->name('users.result');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/course', function () {
    return view('admin.course');
})->name('admin.course');

Route::get('/admin/test', function () {
    return view('admin.preTest');
})->name('admin.preTest');

Route::get('/admin/course', function () {
    return view('admin.course');
})->name('admin.course');

Route::get('/admin/material', function () {
    return view('admin.material');
})->name('admin.material');

Route::get('/admin/add-material', function () {
    return view('admin.add-material');
})->name('admin.add-material');

Route::get('/admin/add-quiz', function () {
    return view('admin.add-quiz');
})->name('admin.addQuiz');

Route::get('/admin/evaluate', function () {
    return view('admin.evaluate');
})->name('admin.evaluate');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'postLogin')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});