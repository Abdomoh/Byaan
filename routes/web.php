<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\StudentController;
use App\Models\Book;
use App\Models\User;
use App\Models\Zoom;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'], function () {
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');
    Route::post('/logout', [SessionController::class, 'destory'])->name('logout');
    Route::resource('students', StudentController::class)->middleware('auth');
    Route::resource('books', BookController::class)->middleware('auth');

    Route::get('all-book', [DashboardController::class, 'getBooks'])->name('all-book')->middleware('auth');
    Route::get('all-students', [DashboardController::class, 'getStudents'])->name('all-students')->middleware('auth');
    Route::get('all-tetcher', [DashboardController::class, 'getTetcher'])->name('all-tetcher')->middleware('auth');
    Route::get('zoom', [DashboardController::class, 'create'])->name('zoom')->middleware('auth');
    Route::post('zoom', [DashboardController::class, 'store'])->name('zoom.store')->middleware('auth');
    Route::get('zooms', [DashboardController::class, 'index'])->name('zooms')->middleware('auth');


    Route::get('tetcher', function () {
        return view('admin.tetcher.tetcher');
    });
    Route::get('dashboard', function () {
        $students = User::where('type_id', 1)->count();
        $tetchers = User::where('type_id', 2)->count();
        $books = Book::count();
        $zooms = Zoom::count();
        return view('dashboard', compact('students', 'tetchers', 'books','zooms'));
    })->middleware('auth');
});
