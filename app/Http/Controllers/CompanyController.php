<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
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
