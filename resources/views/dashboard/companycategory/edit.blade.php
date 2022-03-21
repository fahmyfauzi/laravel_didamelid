@extends('dashboard.layouts.app')

@section( 'content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Update Category</h1>
</div>
<div class="mb-3">
    <a href="{{ route('companycategory.index') }}" class="btn btn-success"><span data-feather="arrow-left"></span> Back
        to
        jobs</a>
    <form action="{{ route('companycategory.destroy',[$companycategory->slug]) }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger " onClick="return confirm('Are you sure?')"><i
                data-feather="x-circle"></i>Delete</button>
    </form>
</div>
<div class="col-lg-8">
    <form method="post" action="{{ route('companycategory.store') }}" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name',$companycategory->name) }}">
            @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
                value="{{ old('slug',$companycategory->slug) }}">
            @error('slug')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Company Category</button>
</div>
</form>
</div>




@endsection