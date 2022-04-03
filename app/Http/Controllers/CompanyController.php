<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;
=======
use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd

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
<<<<<<< HEAD
        $exp = Jobs::where('expiration_date', $company->job->expiration_date);
        return $exp->job->expiration_date;
=======

>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd
        return view('company.show', [
            'company' => $company->load(['companycategory', 'job']),
        ]);
    }
}
