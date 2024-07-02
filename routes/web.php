<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/courses',[CourseController::class,'index'])->name('courses.index');
Route::get('/courses/{id}',[CourseController::class,'show'])->whereNumber('id');
Route::get('/courses/{cat}',[CourseController::class,'showByCategory'])->name('courses.showByCategory');

Route::get('/instructors',[InstructorController::class,'index']);
Route::get('/instructors/{id}',[InstructorController::class,'show'])->whereNumber('id')->name('instructors.show');
