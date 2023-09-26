<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


//    Dashboard Routes
    Route::resource('dashboard' , DashboardController::class);

//    Add_Employees Routes
    Route::resource('add_employee' , EmployeeController::class);

//    Add_Departments Routes
    Route::resource('add_department' , DepartmentController::class);

//    Add_attendance Routes
    Route::resource('add_attendance' , AttendanceController::class);

//    Search Routes
    Route::resource('search' , SearchController::class);

//    Print Routs
Route::resource('print' , PrintController::class);





});

require __DIR__.'/auth.php';





