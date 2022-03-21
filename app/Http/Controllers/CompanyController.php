<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index', [
            'companies' => Company::latest()->filter(request(['company-category', 'location', 'search']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Company $company)
    {

        return view('company.show', [
            'company' => $company,
        ]);
    }
}
