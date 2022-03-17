@extends('layouts.app')

@section( 'content')
<div class="jumbotron bg-light mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center my-4">
                <img src="{{ $company->logo}}" class="rounded mt-3" style="width:200px" alt="...">
                <div>
                    <span class="display-4">{{ $company->name }} </span>
                    @if($company->status == '1')

                    <small class="d-inline text-success">Featured</small>
                    @endif
                </div>
                <small class="d-block">Open Job - {{$company->job->count() }}</small>
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




            @foreach($company->job->sortByDesc('created_at') as $company) <div class="card mb-3 col-md-12">
                <div class="row g-0">
                    <div class="col-md-2 ">
                        <img src="{{ $company->company->logo}}" class="img-fluid rounded m-2" width=" 150px" alt="...">
                    </div>

                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/job/{{ $company->slug }}">{{ $company->title }} </a></h5>
                            <h6 class="card-text m-0">

                                <a href="/job?category={{ $company->category->name }}" class="me-2">
                                    <i class="fa-solid fa-briefcase"></i>
                                    {{ ucfirst($company->category->name) }}
                                </a>
                                <a href="/job?location={{ $company->location }}" class="me-2">
                                    <i class="fa-solid fa-location-dot"></i> {{ $company->location }}
                                </a>
                                <span class="card-text m-0 me-2"><i class="fa-solid fa-coins"></i>Rp.{{ $company->salary }}/month</span>
                            </h6>

                            <small>
                                <a href="/job?type={{ Str::slug($company->type, '-') }}" class="card-text btn btn-primary rounded-pill mt-2">{{ $company->type }}</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
