<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('index');

Route::post('/signin', [UserController::class, 'signin_valid'])->name('signin_valid');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/signup', [UserController::class, 'signup_valid'])->name('signup_valid');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile/newApplication', [ProfileController::class, 'application'])->name('NewApplication');
Route::post('/profile/createApplication', [ProfileController::class, 'create_application'])->name('createApplication');