@extends('layouts.app')

@section( 'content')
<div class="container ">
    <div class="row justify-content-center d-flex  align-items-center text-center">
        <div class="col-md-8">
            <h1 class="text-white text-bold">Langkah terbaik awal Karirmu</h1>
            <p class="text-white mb-5">Temukan lebih dari 10.000 pekerjaan di situs ini</p>

            <form action="/job">

                <div class="input-group input-group-lg mb-5">
                    <input type=" text" class="form-control" placeholder="Pekerjaan atau nama perusahaan" name="search" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Cari pekerjaan</button>
                </div>
            </form>
        </div>

    </div>
    <div class="row">


        @foreach($jobs as $job)

        <div class="card m-2 col-md-12">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="{{ $job->image}}" class="img-fluid rounded width=" 100px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/job/{{ $job->slug }}">{{ $job->title }} - {{ $job->company }}</a></h5>
                        <h6 class="card-text m-0">

                            <a href="/job?category={{ $job->category->name }}">
                                <i class="fa-solid fa-briefcase"></i>
                                {{ ucfirst($job->category->name) }}
                            </a>
                            <a href="/job?location={{ $job->location }}">
                                <i class="fa-solid fa-location-dot"></i> {{ $job->location }}
                            </a>
                        </h6>
                        <p class="card-text m-0"><i class="fa-solid fa-coins"></i>Rp.{{ $job->salary }}/ month</p>
                        <p class="card-text">{{ $job->time }}</p>
                    </div>
                </div>
                <div class="col-md-2 pt-3 d-flex justify-content-end">
                    <small class=""><i class="fa-solid fa-clock"></i>
                        {{ $job->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach



    </div>
    <div class="d-flex justify-content-end">
        {{ $jobs->links() }}
    </div>
</div>

@include('layouts.footer')
@endsection
