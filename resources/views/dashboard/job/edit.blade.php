@extends('dashboard.layouts.app')

@section( 'content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Update Job</h1>
</div>
<div class="mb-3">
    <a href="{{ route('job.index') }}" class="btn btn-success"><span data-feather="arrow-left"></span> Back to
        jobs</a>

    <form action="{{ route('job.destroy',[$job->slug]) }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger " onClick="return confirm('Are you sure?')"><i
                data-feather="x-circle"></i>Delete</button>
    </form>
</div>
<div class="col-lg-8">
    <form method="post" action="{{ route('job.update',[$job->slug]) }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title',$job->title) }}">
            @error('title')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
                value="{{ old('slug',$job->slug) }}">
            @error('slug')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="company_id" class="form-label @error('company_id') is-invalid @enderror">Company</label>
            @error('company_id')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="company_id">

                @foreach($companies as $company)
                @if(old('company_id',$job->company->id) == $company->id)
                <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                @else
                <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endif
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label @error('category_id') is-invalid @enderror">Category</label>
            @error('category_id')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="category_id">

                @foreach($categories as $category)
                @if(old('category_id',$category->id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location"
                name="location" value="{{ old('location',$job->location) }}">
            @error('location')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="expiration_date" class="form-label">Expiration Date</label>
            <input type="date" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date"
                name="expiration_date" value="{{ old('expiration_date',$job->expiration_date) }}">
            @error('expiration_date')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="level_career" class="form-label">Level Career</label>
            <input type="text" class="form-control @error('level_career') is-invalid @enderror" id="level_career"
                name="level_career" value="{{ old('level_career',$job->level_career) }}">
            @error('level_career')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label @error('salary') is-invalid @enderror">Salary</label>
            <input type="text" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary"
                value="{{ old('salary') }}">
            @error('salary')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

        </div>
        <div class="mb-3">
            <label for="type" class="form-label @error('type') is-invalid @enderror">Type Job</label>
            @error('type')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="type">

                <option selected hidden> select type job</option>
                <option value="Fulltime" {{ old('type',$job->type)=='Fulltime' ? 'selected' : '' }}>
                    Fulltime
                </option>
                <option value="Paruh waktu" {{ old('type',$job->type)=='Paruh waktu' ? 'selected' : '' }}>
                    Paruh waktu
                </option>
                <option value="Freelance" {{ old('type',$job->type)=='Freelance' ? 'selected' : '' }}>
                    Freelance
                </option>

            </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body',$job->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Update Job</button>
</div>
</form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    title.addEventListener('change', function() {
        fetch('/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

</script>
@endsection