<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ClasseController::class, 'index'])->name('index');

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');

Route::get('/students/{id}', [App\Http\Controllers\StudentController::class, 'detail'])->name('students.detail');

Route::get('/students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');

Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
