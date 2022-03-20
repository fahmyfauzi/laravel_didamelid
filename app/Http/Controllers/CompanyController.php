<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // return Company::latest()->filter(request(['category']))->paginate(7)->withQueryString();
        return view('company.show', [
            'companies' => Company::latest()->filter(request(['company-category', 'location', 'search']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Company $company)
    {

        // return $company->job->first();
        return view('company.detail', [
            'company' => $company,
        ]);
    }
}
