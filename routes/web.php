<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardJobController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardCompanyController;;

use App\Http\Controllers\DashboardCompanyCategoryController;
use App\Models\Category;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Jobs;

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

Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/{company:slug}', [CompanyController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'company' => Company::all(),
        'job' => Jobs::all(),
        'category' => Category::all(),
        'companycategory' => CompanyCategory::all(),
    ]);
});

Route::middleware('auth')->group(function () {

    Route::resource('/dashboard/job', DashboardJobController::class);
    Route::get('/checkSlug', [DashboardJobController::class, 'checkSlug']);

    Route::resource('/dashboard/company', DashboardCompanyController::class);

    Route::resource('/dashboard/category', DashboardCategoryController::class)->except('show');

    Route::resource('/dashboard/companycategory', DashboardCompanyCategoryController::class)->except('show');
});
