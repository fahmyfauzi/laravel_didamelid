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

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tentangn Perusahaan</h5>
                    <table class="table table-borderless">
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>{{ $company->companycategory->name }}</td>
                        </tr>
                        <tr>
                            <td>Nomor Telephone</td>
                            <td>:</td>
                            <td><a href="tel:{{ $company->phone_number}}">{{ $company->phone_number}}</a></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><a href="mailto:{{ $company->email}}">{{ $company->email}}</a></td>
                        </tr>
                        <tr>
                            <td>Social</td>
                            <td>:</td>
                            <td>
                                <a href="{{ $company->social_instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="{{ $company->social_facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="{{ $company->social_twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                <a href="{{ $company->social_youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">
                                <a class="btn btn-primary" href="{{ $company->website }}">{{ $company->website }}</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h2>About Company</h2>

            <p>{!! $company->body !!}</p>

        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-md-8">


            @foreach($companies as $company)

            <div class="card m-2 col-md-12">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="{{ $company->company->logo}}" class="img-fluid rounded width=" 100px" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/job/{{ $company->slug }}">{{ $company->title }} - {{ $company->company->name }}</a></h5>
                            <h6 class="card-text m-0">

                                <a href="/job?category={{ $company->category->name }}">
                                    <i class="fa-solid fa-briefcase"></i>
                                    {{ ucfirst($company->category->name) }}
                                </a>
                                <a href="/job?location={{ $company->location }}">
                                    <i class="fa-solid fa-location-dot"></i> {{ $company->location }}
                                </a>
                            </h6>
                            <p class="card-text m-0"><i class="fa-solid fa-coins"></i>Rp.{{ $company->salary }}/ month</p>
                            <p class="card-text">{{ $company->time }}</p>
                        </div>
                    </div>
                    <div class="col-md-2 pt-3 d-flex justify-content-end">
                        <small class=""><i class="fa-solid fa-clock"></i>
                            {{ $company->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@include('layouts.footer')
@endsection