@extends('layouts.app')

@section( 'content')
<div class="jumbotron bg-secondary mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <img src="{{ $company->logo}}" class="rounded mt-3" style="width:200px" alt="...">
                <h6 class="display-4">{{ $company->name }}</h6>
                <p class="lead">{{ $company->companycategory->name }}</p>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
