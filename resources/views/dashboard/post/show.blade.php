@extends('dashboard.layouts.app')

@section( 'content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Show Job</h1>
</div>
<div class="jumbotron bg-secondary mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ $job->company->logo}}" class="img-fluid rounded m-2" alt="...">
            </div>
            <div class="col-md-8 mb-4">
                <h2 class="display-4">{{ $job->title }}</h2>
                <a href="/job?category={{ $job->category->slug }}" class="me-3">
                    <i class="fa-solid fa-briefcase"></i>
                    {{ ucfirst($job->category->name) }}
                </a>
                <a href="/job?location={{ $job->location }}" class="me-3">
                    <i class="fa-solid fa-location-dot"></i> {{ $job->location }}
                </a>
                <span class="me-3"><i class="fa-solid fa-clock"></i>
                    {{ $job->created_at->diffForHumans() }}
                </span>
                <span class="card-text m-0 me-3">
                    <i class="fa-solid fa-coins"></i>Rp.{{ $job->salary }}/month
                </span>

            </div>
        </div>

    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            {!! $job->body !!}
        </div>
        <div class="col-md-4">
            <div class="card">
                <h4>Detail Pekerjaan</h4>
                <h6>Date Post</h6>
                <p class="lead">{{ $job->created_at->diffForHumans() }}</p>
                <h6>Lokasi</h6>
                <p class="lead">{{ $job->location }}</p>
                <h6>Expiration Date</h6>
                <p class="lead">{{ $job->expiration_date }}</p>
            </div>
        </div>
    </div>


    @endsection