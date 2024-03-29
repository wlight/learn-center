<?php

use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('about', [StaticPagesController::class, 'about'])->name('about');
Route::get('help', [StaticPagesController::class, 'help'])->name('help');
Route::get('signup', [UsersController::class, 'create'])->name('signup');
