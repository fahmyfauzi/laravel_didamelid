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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.job.index', [
            'jobs' => Jobs::with(['category', 'company', 'author'])->where('user_id', auth()->user()->id)->latest()->filter(request(['search', 'category', 'location', 'type']))->paginate(10)->withQueryString(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.job.create', [
            'companies' => Company::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'company_id' => 'required',
            'category_id' => 'required',
            'location' => 'required',
            'expiration_date' => 'required|date|after:now',
            'level_career' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-job');
        }
        Jobs::create($validatedData);
        return redirect('/dashboard/job')->with('success', 'New job has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $job)
    {
        if ($job->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.job.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $job)
    {
        if ($job->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.job.edit', [
            'companies' => Company::all(),
            'categories' => Category::all(),
            'job' => $job,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $job)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:jobs,slug,' . $job->id,
            'company_id' => 'required',
            'category_id' => 'required',
            'location' => 'required',
            'expiration_date' => 'required|date|after:now',
            'level_career' => 'required',
            'salary' => 'required',
            'type' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:2048', // Validation for the image
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        // Update the image if a new one is provided
        if ($request->file('image')) {
            // Delete the previous image if exists
            if ($job->image) {
                Storage::delete($job->image);
            }

            // Upload the new image
            $validatedData['image'] = $request->file('image')->store('image-job');
        }

        // Update the job with the validated data
        $job->update($validatedData);

        return redirect('/dashboard/job')->with('success', 'Job has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $job)
    {

        Jobs::destroy($job->id);
        return redirect('/dashboard/job')->with('success', ' Post has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Jobs::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
