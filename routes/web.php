<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Students
Route::get('/Student',[StudentController::class,'index'])->name('index');
Route::get('/Student/form',[StudentController::class,'create'])->name('form');

Route::post('/Student/store',[StudentController::class,'store'])->name('store');




Route::get('/Student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::post('/Student/update',[StudentController::class,'update'])->name('student.update');


Route::get('/Student/delete/{id}',[StudentController::class,'delete'])->name('student.delete');
