@extends('dashboard.layouts.app')

@section( 'content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Add Company</h1>
</div>
<div class="mb-3">
    <a href="{{ route('company.index') }}" class="btn btn-success"><span data-feather="arrow-left"></span> Back to
        jobs</a>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/company" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Company Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
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
            <label for="companycategory_id"
                class="form-label @error('companycategory_id') is-invalid @enderror">Category</label>
            @error('companycategory_id')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="companycategory_id">

                @foreach($companycategories as $companycategories)
                @if(old('companycategory_id') == $companycategories->id)
                <option value="{{ $companycategories->id }}" selected>{{ $companycategories->name }}</option>
                @else
                <option value="{{ $companycategories->id }}">{{ $companycategories->name }}</option>
                @endif
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label @error('status') is-invalid @enderror">Status Company</label>
            @error('status')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
            <select class="form-select" name="status">
                <option selected hidden>Open this select menu</option>
                <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>
                    Featured
                </option>
                <option value="2" {{ old('status')=='1' ? 'selected' : '' }}>
                    Non Featured
                </option>
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
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}">
            @error('email')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">PHone Number</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                name="phone_number" value="{{ old('phone_number') }}">
            @error('phone_number')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="social_facebook" class="form-label">Social Facebook</label>
            <input type="text" class="form-control @error('social_facebook') is-invalid @enderror" id="social_facebook"
                name="social_facebook" value="{{ old('social_facebook') }}">
            @error('social_facebook')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="social_instagram" class="form-label">Social Instagram</label>
            <input type="text" class="form-control @error('social_instagram') is-invalid @enderror"
                id="social_instagram" name="social_instagram" value="{{ old('social_instagram') }}">
            @error('social_instagram')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="social_twitter" class="form-label">Social Twitter</label>
            <input type="text" class="form-control @error('social_twitter') is-invalid @enderror" id="social_twitter"
                name="social_twitter" value="{{ old('social_twitter') }}">
            @error('social_twitter')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="social_youtube" class="form-label">Social Youtube</label>
            <input type="text" class="form-control @error('social_youtube') is-invalid @enderror" id="social_youtube"
                name="social_youtube" value="{{ old('social_youtube') }}">
            @error('social_youtube')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="website" class="form-label">Social Youtube</label>
            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website"
                value="{{ old('website') }}">
            @error('website')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <img class="img-preview img-fluid mb-3 col-lg-5">
            <input class="form-control  @error('logo') is-invalid @enderror" type="file" id="logo" name="logo"
                onchange="previewImage()">
            @error('logo')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">About Company</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>


        <button type="submit" class="btn btn-primary">Add Company</button>
</div>
</form>
</div>

@endsection