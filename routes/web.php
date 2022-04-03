<?php

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\RatingController;

Route::get('/', function () {
    return redirect()->route('statements.index');
})->name('home');

Route::resource('statements', StatementController::class);
Route::get('statements/getDisciplines/{id}', [StatementController::class, 'getDisciplines']);

Route::controller(InfoController::class)->name('info.')->group(function () {
    Route::get('about', 'about')->name('about');
    Route::get('faq/{slug?}', 'faq')->name('faq');
});

Route::name('admin.')->group(function () {
    Route::resource('faculties', FacultyController::class);
    Route::resource('departaments', DepartamentController::class);
    Route::resource('users', UserController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('students', StudentController::class);
    Route::resource('disciplines', DisciplineController::class);
});

Route::name('auth')->group(function () {
    Route::get('login', [LoginController::class, 'getForm']);
    Route::post('login', [LoginController::class, 'login']);
});

Route::resource('ratings', RatingController::class);
