<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ClasseController::class, 'index'])->name('index');

Route::get('/classe/{id}', [\App\Http\Controllers\ClasseController::class, 'detail'])->name('classe.detail');

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');

Route::get('/students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');

Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
