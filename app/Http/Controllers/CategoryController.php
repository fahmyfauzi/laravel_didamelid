<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jobs;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        return view('category.index', [
            'categories' => Category::all(),
        ]);
    }
}
