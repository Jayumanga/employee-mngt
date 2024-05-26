<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/create',  [App\Http\Controllers\EmployeeController::class, 'create']);
Route::get('employee/create',  [App\Http\Controllers\EmployeeController::class, 'store']);
Route::get('employee/{id}/edit', [App\Http\Controllers\EmployeeController::class, 'edit']);
Route::put('employee/{id}/edit', [App\Http\Controllers\EmployeeController::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    //Route::get('employee', [\App\Http\Controllers\employeeController::class, 'index'])->name('employee.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});