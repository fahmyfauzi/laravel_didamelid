@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>
<div class="container">
    <div class="row d-flex justify-content-evenly">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Company</h5>
                    <h1>{{ count($company) }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Job</h5>
                    <h1>{{ count($job) }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Category Job</h5>
                    <h1>{{ count($category) }}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5>Category Company</h5>
                    <h1>{{ count($companycategory) }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection