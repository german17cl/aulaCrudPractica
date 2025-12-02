<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;




Route::resource('students', StudentController::class);
// Ruta para la confirmación de eliminación (debe ir **después** del resource)
Route::get('students/{student}/confirm-delete', [StudentController::class, 'confirmDelete'])->name('students.confirmDelete');



Route::resource('teachers', TeacherController::class);
// Ruta de confirmación para eliminar
Route::get('teachers/{teacher}/confirm-delete', [TeacherController::class, 'confirmDelete'])->name('teachers.confirmDelete');



Route::resource('courses', CourseController::class);
// Ruta de confirmación para eliminar curso
Route::get('courses/{course}/confirm-delete', [CourseController::class, 'confirmDelete'])->name('courses.confirmDelete');
Route::get('/courses/{course}/students', [CourseController::class, 'students'])->name('courses.students');



require __DIR__.'/settings.php';
