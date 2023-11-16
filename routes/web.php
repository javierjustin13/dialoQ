<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DialogController;
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

Route::get("/", [HomeController::class, "index"])->name("home");

Route::get("/register", [AuthController::class, "register"])->name("register");

Route::post("/register", [AuthController::class, "store"]);

Route::get("/login", [AuthController::class, "login"])->name("login");

Route::post("/login", [AuthController::class, "authenticate"]);

Route::post("/logout", [AuthController::class, "logout"])->name("logout");

Route::post("/dialogs", [DialogController::class, "store"])->name("dialogs.store")->middleware("auth");

Route::resource('users', UserController::class)->only('edit', 'update')->middleware('auth');

Route::resource('users', UserController::class)->only('show');

Route::get('profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
