<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;
use Artesaos\SEOTools\Facades\SEOTools;

class CompanyController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Lowongan Pekerjaan ');
        SEOTools::setDescription('Langkah terbaik awal karirmu Temukan lebih dari 10.000 pekerjaan di situs ini Cari pekerjaan Keuangan Multimedia Teknologi Informasi Pemerintahan Kesehatan Otomotif Rekomendasi Pekerjaan Nilai dirimu dan temukan pekerjaan terbaik untukmu Pekerjaan Terbaru Happiness Hero Paxel Tasikmalaya Jasa Logistik Tasikmalaya Full Time Staff IT Plaza Asia Tasikmalaya Fashion Tasikmalaya Rp2.000.000 – Rp3.500.000 / month Full Time […]');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'JobPosting');

        return view('company.index', [
            'companies' => Company::with(['companycategory', 'job'])->latest()->filter(request(['company-category', 'location', 'search']))->paginate(7)->withQueryString(),
            'company_categories' => CompanyCategory::all()
        ]);
    }

    public function show(Company $company)
    {
        return view('company.show', [
            'company' => $company->load(['companycategory', 'job']),
        ]);
    }
}
