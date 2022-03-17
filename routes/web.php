<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyControoler;
use App\Http\Controllers\DashboardJobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/job/{job:slug}', [JobController::class, 'show']);

Route::get('/job', [JobController::class, 'index']);

Route::get('/job-category/{category:slug}', [CategoryController::class, 'show']);


Route::resource('/dashboard', DashboardJobController::class)->middleware('auth');

Route::get('/company', [CompanyControoler::class, 'index']);
Route::get('/company/{company:slug}', [CompanyControoler::class, 'show']);
