<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

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

Route::get('/', [UserController::class, 'home'])->name('user.index');
Route::get('/login', [UserController::class, 'login'])->name('user.loginDisplay');
Route::get('/register', [UserController::class, 'registerDisplay'])->name('user.registerDisplay');
Route::post('/login', [UserController::class, 'authenticate'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::resource('tasks', TaskController::class)->middleware('auth');

// Route::group(['middleware' => ['auth:sanctum']], function () {
//     Route::resource('tasks', 'TaskController');
// });