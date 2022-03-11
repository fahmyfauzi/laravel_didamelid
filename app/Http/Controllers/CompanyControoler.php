<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyControoler extends Controller
{
    public function index()
    {
        return 'test index company';
        return view('company', [
            'companies' => Company::get()
        ]);
    }

    public function show(Company $company)
    {
        return view('company.show', [
            'company' => $company,
        ]);
    }
}
