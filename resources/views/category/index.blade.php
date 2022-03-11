@extends('layouts.app')

@section( 'content')
<div class="container my-5">
    <div class="row">


        @foreach($categories as $category)

        <div class="col-md-4 mb-2">
            <a href="/job?category={{$category->slug  }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400/?{{ $category->name}}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0 ">
                        <h5 class="card-title flex-fill p-4 fs-3 text-center" style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>

        @endforeach
    </div>
</div>

@include('layouts.footer')
@endsection
