<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Livewire\UserSearch;

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


Route::get('/create', [RegisterController::class, 'create'])->name('create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/check', [LoginController::class, 'check'])->name('check');
Route::get('/in', [UserSearch::class, 'trashed'])->name('in');
Route::get('/home', [LoginController::class, 'homeadmin'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::delete('/users/{id}/force-delete', [UserSearch::class, 'forceDelete'])->name('users.forceDelete');
Route::patch('/users/{id}/restore', [UserSearch::class, 'restore'])->name('users.restore');
Route::get('restore-all',[UserSearch::class,'restoreAll']);