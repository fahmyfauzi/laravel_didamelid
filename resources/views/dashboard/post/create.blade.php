@extends('dashboard.layouts.app')

@section( 'content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Create New Job</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
                value="{{ old('slug') }}">
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
                @if(old('company_id') == $company->id)
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
                @if(old('category_id') == $category->id)
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
                name="location" value="{{ old('location') }}">
            @error('location')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="expiration_date" class="form-label">Expiration Date</label>
            <input type="text" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date"
                name="expiration_date" value="{{ old('expiration_date') }}">
            @error('expiration_date')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="level_career" class="form-label">Level Career</label>
            <input type="text" class="form-control @error('level_career') is-invalid @enderror" id="level_career"
                name="level_career" value="{{ old('level_career') }}">
            @error('level_career')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label @error('salary') is-invalid @enderror">Salary</label>
            @error('salary')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="salary">
                <option selected hidden>Open this select menu</option>
                <option value="Rp. 500.0000 - Rp. 2.000.0000" {{ old('salary')=='Rp. 500.0000 - Rp. 2.000.0000'
                    ? 'selected' : '' }}>
                    Rp. 500.0000 - Rp. 2.000.0000
                </option>
                <option value="Rp. 1.000.0000 - Rp. 3.000.0000" {{ old('salary')=='Rp. 1.000.0000 - Rp. 3.000.0000'
                    ? 'selected' : '' }}>
                    Rp. 1.000.0000 - Rp. 3.000.0000
                </option>
                <option value=" Rp. 4.000.0000 - Rp. 6.000.0000" {{ old('salary')==' Rp. 4.000.0000 - Rp. 6.000.0000'
                    ? 'selected' : '' }}>
                    Rp. 4.000.0000 - Rp. 6.000.0000
                </option>

            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label @error('type') is-invalid @enderror">Type Job</label>
            @error('type')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="type">

                <option selected hidden>Open this select menu</option>
                <option value="Fulltime" {{ old('type')=='Fulltime' ? 'selected' : '' }}>
                    Fulltime
                </option>
                <option value="Paruh waktu" {{ old('type')=='Paruh waktu' ? 'selected' : '' }}>
                    Paruh waktu
                </option>
                <option value="Freelance" {{ old('type')=='Freelance' ? 'selected' : '' }}>
                    Freelance
                </option>

            </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create Job</button>
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