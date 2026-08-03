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
Route::resource('/posts', PostController::class);

// Bagian Admin
Route::get('/admin', [HomeController::class, 'dashboardAdmin'])->name('admin');
Route::resource('/admin/program', ProgramController::class);
Route::resource('/admin/teachers', TeacherController::class);
Route::resource('/admin/facilities', FacilitieController::class);
Route::resource('/admin/activities', ActivitieController::class);
Route::resource('/admin/posts', PostController::class);

// Route menuju page-page admin
Route::get('admin/program', [ProgramController::class, 'adminIndex'])->name('admin.program.index');
Route::get('admin/teachers', [TeacherController::class, 'adminIndex'])->name('admin.teacher.index');
Route::get('admin/facilities', [FacilitieController::class, 'adminIndex'])->name('admin.facilities.index');
Route::get('admin/activities', [ActivitieController::class, 'adminIndex'])->name('admin.activities.index');
Route::get('admin/posts', [PostController::class, 'adminIndex'])->name('admin.posts.index');

// Route Form Create
Route::get('admin/teacher/create', [TeacherController::class, 'create'])->name('admin.teacher.create');