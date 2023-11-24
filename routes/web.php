<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DialogController;
use App\Http\Controllers\LikeController;
use App\Models\Dialog;
use App\Models\User;

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

Route::get("", [HomeController::class, "index"])->name("home");

Route::get("register", [AuthController::class, "register"])->name("register");
Route::post("register", [AuthController::class, "store"]);

Route::get("login", [AuthController::class, "login"])->name("login");
Route::post("login", [AuthController::class, "authenticate"]);

Route::post("logout", [AuthController::class, "logout"])->name("logout");

Route::get("dialogues/{dialog}", [DialogController::class, "show"])->name("dialogues.show");
Route::get("dialogues/{dialog}/edit", [DialogController::class, "edit"])->name("dialogues.edit")->middleware('auth');
Route::post("dialogues", [DialogController::class, "store"])->name("dialogues.store")->middleware('auth');
Route::put("dialogues/{dialog}", [DialogController::class, "update"])->name("dialogues.update")->middleware('auth');
Route::delete("dialogues/{dialog}", [DialogController::class, "destroy"])->name("dialogues.destroy")->middleware('auth');


// Route::resource('dialogues', DialogController::class)->only(['show']);

Route::resource('users', UserController::class)->only('edit', 'update')->middleware('auth');
Route::resource('users', UserController::class)->only('show');

Route::get('profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');

Route::post("/dialogues/{dialog}/comments", [CommentController::class, "store"])->name('dialogues.comments.store')->middleware('auth');

Route::post('users/{user}/follow', [UserController::class, 'follow'])->middleware('auth')->name('users.follow');
Route::post('users/{user}/unfollow', [UserController::class, 'unfollow'])->middleware('auth')->name('users.unfollow');

Route::post('dialogues/{dialog}/like', [LikeController::class, 'like'])->middleware('auth')->name('dialogues.like');
Route::post('dialogues/{dialog}/unlike', [LikeController::class, 'unlike'])->middleware('auth')->name('dialogues.unlike');

