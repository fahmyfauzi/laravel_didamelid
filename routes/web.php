<?php

use App\Models\Jobs;
use App\Models\Company;
use App\Models\Category;
use App\Models\CompanyCategory;
use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;

use App\Http\Controllers\JobController;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardJobController;
use App\Http\Controllers\DashboardCategoryController;

use App\Http\Controllers\DashboardCompanyController;;

use App\Http\Controllers\DashboardCompanyCategoryController;

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

Route::get('/', function () {
    SEOTools::setTitle('Situs Lowongan Pekerjaan Terlengkap ');
    SEOTools::setDescription('Langkah terbaik awal karirmu Temukan lebih dari 10.000 pekerjaan di situs ini Cari pekerjaan Keuangan Multimedia Teknologi Informasi Pemerintahan Kesehatan Otomotif Rekomendasi Pekerjaan Nilai dirimu dan temukan pekerjaan terbaik untukmu Pekerjaan Terbaru Happiness Hero Paxel Tasikmalaya Jasa Logistik Tasikmalaya Full Time Staff IT Plaza Asia Tasikmalaya Fashion Tasikmalaya Rp2.000.000 – Rp3.500.000 / month Full Time […]');
    SEOTools::opengraph()->setUrl(url()->current());
    SEOTools::setCanonical(url()->current());
    SEOTools::opengraph()->addProperty('type', 'website');

    return view('home', [
        'categories' => Category::first()->take(6)->get(),
        'jobs' => Jobs::with('category', 'company', 'author')->take(9)->latest()->get(),
        'companies' => Company::with(['companycategory', 'job'])->where('status', 1)->get(),
    ]);
});
Route::get('/job/{job:slug}', [JobController::class, 'show']);

Route::get('/job', [JobController::class, 'index'])->name('job.index');

Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/{company:slug}', [CompanyController::class, 'show']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index', [
            'company' => Company::all(),
            'job' => Jobs::all(),
            'category' => Category::all(),
            'companycategory' => CompanyCategory::all(),
        ]);
    });

    Route::resource('/dashboard/job', DashboardJobController::class);
    Route::get('/checkSlug', [DashboardJobController::class, 'checkSlug']);

    Route::resource('/dashboard/company', DashboardCompanyController::class);

    Route::resource('/dashboard/category', DashboardCategoryController::class)->except('show');

    Route::resource('/dashboard/companycategory', DashboardCompanyCategoryController::class)->except('show');
});
