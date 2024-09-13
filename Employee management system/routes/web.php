<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProjectController;
Route::get('/', [EmployeeController::class, 'index']);



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', HomeController::class);
    Route::get('employees/archive', [EmployeeController::class, 'archive'])->name('employees.archive');
    Route::resource('employees', EmployeeController::class);
    Route::delete('employees/{ssn}/delete', [EmployeeController::class, 'forceDelete'])->name('employees.forceDelete');
    Route::post('employees/{ssn}/restore', [EmployeeController::class, 'restore'])->name('employees.restore');
    Route::resource('departments', DepartmentController::class);
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('projects/{project_id}', [ProjectController::class, 'show'])->name('projects.show');
});


