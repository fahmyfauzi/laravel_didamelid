@extends('layouts.app')

@section( 'content')
<div class="container ">
    <div class="row justify-content-center d-flex  align-items-center text-center">
        <div class="col-md-8">
            <h1 class="text-white text-bold">Langkah terbaik awal Karirmu</h1>
            <p class="text-white mb-5">Temukan lebih dari 10.000 pekerjaan di situs ini</p>

            <form action="/company">

                <div class="input-group input-group-lg mb-5">
                    <input type=" text" class="form-control" placeholder="Cari Perusahaan" name="search" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Cari pekerjaan</button>
                </div>
            </form>
        </div>

    </div>
    <div class="row">


        @foreach($companies as $company)

        <div class="card m-2 col-md-12">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="{{ $company->logo}}" class="img-fluid rounded width=" 100px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/company/{{ $company->slug }}">{{ $company->name }}</a></h5>
                        <h6 class="card-text m-0">

                            <a href="/company?company-category={{ $company->companycategory->slug }}">
                                <i class="fa-solid fa-briefcase"></i>
                                {{ ucfirst($company->companycategory->name) }}
                            </a>
                            <a href="/company?location={{ $company->location }}">
                                <i class="fa-solid fa-location-dot"></i> {{ $company->location }}
                            </a>
                        </h6>

                    </div>
                </div>
            </div>
        </div>
        @endforeach



    </div>
    <div class="d-flex justify-content-end">
        {{ $companies->links() }}
    </div>
</div>

@include('layouts.footer')
@endsection
