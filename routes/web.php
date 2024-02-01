<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DialogController;
use App\Http\Controllers\helpController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\TermController;
use App\Livewire\Page\HomePage;
use App\Models\Dialog;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('feeds', FeedController::class)->name('feeds')->middleware('auth');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store']);

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('dialogues', [DialogController::class, 'store'])->name('dialogues.store')->middleware('auth');
Route::get('dialogues/{dialog}', [DialogController::class, 'show'])->name('dialogues.show');
Route::get('dialogues/{dialog}/edit', [DialogController::class, 'edit'])->name('dialogues.edit')->middleware('auth');
Route::put('dialogues/{dialog}', [DialogController::class, 'update'])->name('dialogues.update')->middleware('auth');
Route::delete('dialogues/{dialog}', [DialogController::class, 'destroy'])->name('dialogues.destroy')->middleware('auth');

Route::post('dialogues/{dialog}/like', [LikeController::class, 'like'])->name('dialogues.like')->middleware('auth');
Route::post('dialogues/{dialog}/unlike', [LikeController::class, 'unlike'])->name('dialogues.unlike')->middleware('auth');

Route::post('dialogues/{dialog}/comments', [CommentController::class, 'store'])->name('dialogues.comments.store')->middleware('auth');
Route::delete('dialogues/{dialog}/comments/{comment}', [CommentController::class, 'destroy'])->name('dialogues.comments.destroy')->middleware('auth');

Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

Route::resource('users', UserController::class)->only('edit', 'update', 'destroy')->middleware('auth');
Route::resource('users', UserController::class)->only('show');

Route::post('users/{user}/follow', [UserController::class, 'follow'])->name('users.follow')->middleware('auth');
Route::post('users/{user}/unfollow', [UserController::class, 'unfollow'])->name('users.unfollow')->middleware('auth');

Route::get('terms', TermController::class)->name('terms');
Route::get('FAQ', helpController::class)->name('help');



