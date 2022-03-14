<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home', [
            'categories' =>  Category::all(),
            'jobs' => Jobs::latest()->take(6)->get(),
            'companies' => Company::where('status', 1)->get(),
        ]);
    }
}
