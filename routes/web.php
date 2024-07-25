<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [App\Http\Controllers\Admin\AuthController::class, 'index'])->name('admin.login');
Route::post('/postlogin', [App\Http\Controllers\Admin\AuthController::class, 'postLogin'])->name('postlogin');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/contest', [App\Http\Controllers\Admin\ContestController::class, 'index'])->name('contest');
Route::get('/contest-add', [App\Http\Controllers\Admin\ContestController::class, 'create'])->name('contest.add');
Route::post('/contest-store', [App\Http\Controllers\Admin\ContestController::class, 'store'])->name('contest.store');
Route::get('/contest-show/{id}', [App\Http\Controllers\Admin\ContestController::class, 'show'])->name('contest.show');
Route::post('/contest-update/{id}', [App\Http\Controllers\Admin\ContestController::class, 'update'])->name('contest.update');
Route::post('/contest-delete/{id}', [App\Http\Controllers\Admin\ContestController::class, 'destroy'])->name('contest.delete');

Route::resource('categories', CategoriesController::class);