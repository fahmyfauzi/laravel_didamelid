<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyControoler;
use App\Http\Controllers\DashboardCompanyController;;

use App\Http\Controllers\DashboardJobController;

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

Route::get('/company', [CompanyControoler::class, 'index']);
Route::get('/company/{company:slug}', [CompanyControoler::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard/posts', [DashboardJobController::class, 'index']);
    Route::get('/dashboard/posts/create', [DashboardJobController::class, 'create']);
    Route::get('/dashboard/posts/{jobs:slug}', [DashboardJobController::class, 'show']);
    Route::delete('/dashboard/posts/{jobs:slug}', [DashboardJobController::class, 'destroy']);
    Route::post('/dashboard/posts', [DashboardJobController::class, 'store']);
    Route::get('/dashboard/posts/edit/{jobs:slug}', [DashboardJobController::class, 'edit']);
    Route::post('/dashboard/posts/{jobs:slug}', [DashboardJobController::class, 'update']);
    Route::get('/checkSlug', [DashboardJobController::class, 'checkSlug']);

    Route::resource('/dashboard/company', DashboardCompanyController::class);
});
