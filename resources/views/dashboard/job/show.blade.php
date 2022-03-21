@extends('dashboard.layouts.app')

@section( 'content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Show Job</h1>
</div>
<div class="mb-3">
    <a href="{{ route('job.index') }}" class="btn btn-success"><span data-feather="arrow-left"></span> Back to
        jobs</a>
    <a href="{{ route('job.edit',[$job->slug]) }}" class="btn btn-warning"><span data-feather="edit"></span>
        Edit</a>
    <form action="{{ route('job.destroy',[$job->slug]) }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger " onClick="return confirm('Are you sure?')"><i
                data-feather="x-circle"></i>Delete</button>
    </form>
</div>
<div class="jumbotron bg-light mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @if ($job->company->logo == null)
                <img src="{{ asset('img/didamelid.png')}}" class="img-fluid mt-4 rounded" width=" 100px"
                    alt="{{ $job->company->name }}">
                @else
                <img src="{{ asset('storage/'.$job->company->logo)}}" class="img-fluid mt-4 rounded" width=" 100px"
                    alt="{{ $job->company->name }}">
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
        </div>
        <div class="col-md-4">
            <div class="card p-3 bg-light border-0">
                <h4>Detail Pekerjaan</h4>

                <h6><i class="fa-solid fa-calendar-check fs-6"></i> Date Post</h6>
                <p class="lead">{{ $job->created_at->diffForHumans() }}</p>
                <h6><i class="fa-solid fa-location-pin fs-6"></i> Lokasi</h6>
                <p class="lead">{{ $job->location }}</p>
                <h6><i class="fa-regular fa-hourglass"></i> Expiration Date</h6>
                <p class="lead">{{date('d F Y',strtotime( $job->expiration_date)) }}</p>
                <h6><i class="fa-solid fa-coins"></i> Offered Salary:</h6>
                <p class="lead">{{ $job->salary }}</p>
                <h6><i class="fa-solid fa-user-tie"></i> Level Career</h6>
                <p class="lead">{{ $job->level_career }}</p>

            </div>
        </div>
    </div>


    @endsection