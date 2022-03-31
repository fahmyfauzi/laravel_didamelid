<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.company.index', [
            'companies' => Company::with(['companycategory', 'job'])->latest()->filter(request(['search', 'category', 'location', 'type']))->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.company.create', [
            'companies' => Company::all(),
            'companycategories' => CompanyCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:companies',
            'companycategory_id' => 'required',
            'location' => 'required',
            'email' => 'required|unique:companies',
            'phone_number' => 'required|unique:companies',
            'social_facebook',
            'social_instagram',
            'social_twiiter',
            'social_youtube',
            'website',
            'logo' => 'image|file|max:2048',
            'body' => 'required',
        ]);

        if ($request->file('logo')) {
            $validatedData['logo'] = $request->file('logo')->store('logo-company');
        }
        Company::create($validatedData);
        return redirect('/dashboard/company')->with('success', 'Company has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {

        return view('dashboard.company.show', [
            'company' => $company->load('job')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {

        return view('dashboard.company.edit', [
            'company' => $company,
            'companycategories' => CompanyCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $validatedData = $request->validate([
            'name'               => 'required',
            'companycategory_id' => 'required',
            'location'           => 'required',
            'status'             => 'required',
            'slug'               => 'required|unique:companies,slug,' . $company->id,
            'email'              => 'required|unique:companies,email,' . $company->id,
            'phone_number'       => 'required|max:13|unique:companies,phone_number,' . $company->id,
            'social_facebook'    => 'nullable|unique:companies,social_facebook,' . $company->id,
            'social_instagram'   => 'nullable|unique:companies,social_instagram,' . $company->id,
            'social_twiiter'     => 'nullable|unique:companies,social_twitter,' . $company->id,
            'social_youtube'     => 'nullable|unique:companies,social_youtube,' . $company->id,
            'website'            => 'nullable|unique:companies,social_website,' . $company->id,
            'logo'               => 'image|file|max:2048',
            'body'               => 'required',
        ]);

        if ($request->file('logo')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['logo'] =  $request->file('logo')->store('logo-company');
        }


        Company::where('id', $company->id)->update($validatedData);
        return redirect('/dashboard/company')->with('success', 'Company has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if ($company->logo) {
            Storage::delete($company->logo);
        }
        Company::destroy($company->id);
        return redirect('/dashboard/company')->with('success', ' Company has been deleted!');
    }
}
