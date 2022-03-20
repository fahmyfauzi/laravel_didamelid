@extends('layouts.app')

@section( 'content')
<div class="jumbotron bg-light my-2 p-4">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @if ($job->company->logo == null)
                <img src="{{ asset('img/didamelid.png')}}" class="card-img-top rounded" width="100px">
                @else
                <img src="{{ asset('storage/'.$job->company->logo)}}" class="card-img-top rounded" width="100px">
                @endif
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
            <div>
                <h6>Share this post</h6>

                <span class="col-md-2">
                    <a href="#" class="btn btn-primary">Facebook</a>
                </span>
                <span class="col-md-2">
                    <a href="#" class="btn btn-warning">Twitter</a>
                </span>
                <span class="col-md-2">
                    <a href="#" class="btn btn-danger">Pinterest</a>
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 bg-light border-0">
                <h4>Detail Pekerjaan</h4>

                <h6><i class="fa-solid fa-calendar-check fs-6"></i> Date Post</h6>
                <p class="lead">{{ $job->created_at->diffForHumans() }}</p>
                <h6><i class="fa-solid fa-location-pin fs-6"></i> Lokasi</h6>
                <p class="lead">{{ $job->location }}</p>
                <h6><i class="fa-regular fa-hourglass"></i> Expiration Date</h6>
                <p class="lead">{{ $job->expiration_date }}</p>
                <h6><i class="fa-solid fa-coins"></i> Offered Salary:</h6>
                <p class="lead">{{ $job->salary }}</p>
                <h6><i class="fa-solid fa-user-tie"></i> Level Career</h6>
                <p class="lead">{{ $job->level_career }}</p>
            </div>
        </div>
    </div>










</div>

@include('layouts.footer')
@endsection