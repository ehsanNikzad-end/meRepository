<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClasssController;
use App\Models\Student;
use App\Http\Controllers\RegisteredOneController;
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

Route::get('/AddStudentPage', [StudentController::class, 'addStudentPage']);
Route::post('/AddStudent', [StudentController::class, 'addStudent']);

Route::get('/ShowStudent', [StudentController::class, 'showStudent']);
Route::delete('/DestroyStudent/{student}', [StudentController::class, 'destroy']);

Route::get('/RegisterStudentPage', [StudentController::class, 'registerStudentPage']);
Route::post('/RegisterStudent', [StudentController::class, 'registerStudent']);
Route::delete('/DestroyRStudent/{rstudent}', [RegisteredOneController::class, 'destroy']);


Route::get('/ShowRegisteredStudent', [StudentController::class, 'showRegisteredStudent']);


Route::get('/AddClassPage', [ClasssController::class, 'addClassPage']);
Route::post('/AddClass', [ClasssController::class, 'addClass']);
Route::get('/ShowClass', [ClasssController::class, 'showClass']);
Route::delete('/DestroyClass/{class}', [ClasssController::class, 'destroy']);






























// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
