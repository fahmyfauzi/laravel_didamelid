<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardJobController extends Controller
{
    public function index()
    {
        return view('dashboard.post.index', [
            'jobs' => Jobs::where('user_id', auth()->user()->id)->latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.post.create', [
            'companies' => Company::all(),
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {

        // return $request;

        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'company_id' => 'required',
            'category_id' => 'required',
            'location' => 'required',
            'expiration_date' => 'required',
            'level_career' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'body' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Jobs::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New job has been added!');
    }

    public function show(Jobs $jobs)
    {
        if ($jobs->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.post.show', [
            'job' => $jobs
        ]);
    }

    public function edit(Jobs $jobs)
    {
        if ($jobs->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.post.edit', [
            'companies' => Company::all(),
            'categories' => Category::all(),
            'job' => $jobs,
        ]);
    }

    public function update(Request $request, Jobs $jobs)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'company_id' => 'required',
            'category_id' => 'required',
            'location' => 'required',
            'expiration_date' => 'required',
            'level_career' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'body' => 'required',
        ]);
        if ($request->slug != $jobs->slug) {
            $validatedData['slug'] = 'required|unique:jobs';
        }
        $validatedData['user_id'] = auth()->user()->id;
        Jobs::where('id', $jobs->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Job has been updated!');
    }

    public function destroy(Jobs $jobs)
    {
        if ($jobs->image) {
            Storage::delete($jobs->image);
        }
        Jobs::destroy($jobs->id);
        return redirect('/dashboard/posts')->with('success', ' Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Jobs::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
