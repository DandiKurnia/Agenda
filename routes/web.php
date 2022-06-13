<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GuruAgendaController;
use App\Http\Controllers\AdminAgendaController;

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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Admin Agenda
Route::resource('/admin', AdminAgendaController::class)->middleware('admin');

// Guru Agenda
Route::resource('/agendaguru', GuruAgendaController::class);

// Data Kelas 
Route::resource('/kelas', KelasController::class)->middleware('admin');

// Data Guru
Route::resource('/guru', GuruController::class)->middleware('admin');

// Data User
Route::resource('/user', UserController::class)->middleware('admin');

// Data Mapel
Route::resource('/mapel', MapelController::class)->middleware('admin');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('postlogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('postlogout');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('postregister');