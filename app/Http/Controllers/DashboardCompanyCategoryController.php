<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;

class DashboardCompanyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.companycategory.index', [
            'company_categories' => CompanyCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.companycategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:company_categories',
            'slug' => 'required|unique:company_categories',
        ]);

        CompanyCategory::create($validateData);
        return redirect('dashboard/companycategory')->with('success', 'Category has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyCategory $companycategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyCategory $companycategory)
    {
        // dd($companycategory);
        return view('dashboard.companycategory.edit', [
            'companycategory' => $companycategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyCategory $companycategory)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:company_categories,name,' . $companycategory->id,
            'slug' => 'required|unique:company_categories,slug,' . $companycategory->id
        ]);
        CompanyCategory::where('id', $companycategory->id)->update($validateData);
        return redirect('/dashboard/companycategory')->with('success', 'Category has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyCategory  $companyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyCategory $companycategory)
    {
        if ($companycategory->id) {
            Company::where('companycategory_id', $companycategory->id)->update(['companycategory_id' => 5]);
        }
        CompanyCategory::destroy('id', $companycategory->id);
        return redirect('/dashboard/companycategory')->with('success', 'Category has been Deleted!');
    }
}
