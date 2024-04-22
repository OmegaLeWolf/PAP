<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseCurriculumController;


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
    //return view('welcome');
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    //return view('welcome');
    return view('information');
})->name('home');

Route::get('/registerd', function () {
    //return view('welcome');
    return view('register');
});

//Calls CourseController instead of redirecting
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

//Calls Course Controller to redirect to the specific page of the course
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

//Calls Course Controller to redirect to the page to display the curriculum
Route::get('/courses/{course_id}/materials/{curriculum_Title}', [CourseController::class, 'showMaterial'])->name('courses.material');

//Creates curriculum
Route::get('/curriculum/create', [CourseCurriculumController::class, 'create'])->name('curriculum.create');
//Post to store the HTML
Route::post('/curriculum/store', [CourseCurriculumController::class, 'store'])->name('curriculum.store');

require __DIR__.'/auth.php';
