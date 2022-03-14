@extends('layouts.app')

@section( 'content')
<div class="jumbotron bg-secondary mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ $job->company->logo}}" class="img-fluid rounded width=" 100px" alt="...">
            </div>
            <div class="col-md-8">
                <h2 class="display-4">{{ $job->title }}</h2>
                <p class="lead">{{ $job->category->name }} {{ $job->location }} {{ $job->created_at->diffForHumans() }}</p>
                <hr class="my-4">
                <p>{{ $job->time }}</p>
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


    <div class="row">
        <div class="col-md-5">
            <div class="row">


                <h6>Share this post</h6>

                <div class="col-md-2">
                    <a href="#" class="btn btn-primary">Facebook</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn btn-warning">Twitter</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn btn-danger">Pinterest</a>
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts.footer')
@endsection
