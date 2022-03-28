<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('job.iindex', [
            'jobs' => Jobs::with(['category', 'company', 'author'])->latest()->filter(request(['search', 'category', 'location', 'type']))->paginate(7)->withQueryString(),
            'categories' => Category::all()
        ]);
    }
    public function show(Jobs $job)
    {
        return view('job.show', [
            'categories' => Category::all(),
            'job' => $job,
        ]);
    }
}
