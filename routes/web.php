<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\FacilitieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/about', AboutController::class);
Route::resource('/programs', ProgramController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/facilities', FacilitieController::class);
Route::resource('/activities', ActivitieController::class);
Route::resource('/blog', PostController::class);


// Bagian Admin
Route::get('/admin', [HomeController::class, 'dashboardAdmin']);
Route::resource('/admin/programs', ProgramController::class);
Route::resource('/admin/teachers', TeacherController::class);
Route::resource('/admin/facilities', FacilitieController::class);
Route::resource('/admin/activities', ActivitieController::class);
Route::resource('/admin/posts', PostController::class);