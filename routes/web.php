<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/*Route::prefix('admin')->group(
    function () {
        Route::get('/', [homeController::class, 'index'])->name('students.index');
        Route::get('/students', [studentController::class, 'index'])->name('students.index');
        Route::get('/students/create', [studentController::class, 'create']);
        Route::get('/students/{student}', [studentController::class, 'show']);
        Route::get('/students/{student}/edit', [studentController::class, 'edit']);
    }
);*/



// Route::get('/students', [studentController::class, 'index']); //calling index method in studentController class

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/fawzy', function () {
//     return view('test2');
// })->name('test2');

Route::get('/', function () {
    return view('user.index');
})->name('user.index');

//set the group for allowed pages if user login

//This is a middleware for users
Route::middleware('IsLogin')->group(function () {
    Route::get('/courses', function () {
        return view('user.courses');
    })->name('user.courses');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout'); //no logout appears if u don't login


});

//This is a middleware for only admins
Route::middleware('IsAdminLogin')->group(function () {
    //when you write admin in url
    //you can't go to admin  pages if you are not login and if you are not an admin
    Route::prefix('admin')->group(
        function () {
            Route::get('/', [homeController::class, 'index'])->name('admin.home');
            Route::get('students/archive', [StudentController::class, 'archive'])->name('students.archive');
            Route::get('students/{student}/restore', [StudentController::class, 'restore'])->name('students.restore');
            Route::delete('students/{student}/destroy', [StudentController::class, 'forceDestroy'])->name('students.forceDestroy');
            Route::resource('students', StudentController::class);
            Route::resource('departments', DepartmentController::class);
        }
    );
});

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('auth.handleRegister'); //we get it from form
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('auth.handleLogin');

// Route::get('/courses', function () {
//     return view('user.courses');
// })->name('user.courses');
