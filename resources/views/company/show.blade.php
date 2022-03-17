@extends('layouts.app')

@section( 'content')
<div class="container ">
    <div class="row justify-content-center d-flex  align-items-center text-center">
        <div class="col-md-8">
            <div class="my-4">

                <h1>Perusahaan</h1>
            </div>
            <form action="/company">
                @if(request('company-category'))
                <input type="hidden" name="company-category" value="{{ request('company-category') }}">
                @endif
                @if(request('location'))
                <input type="hidden" name="location" value="{{ request('location') }}">
                @endif
                <div class="input-group input-group-lg mb-5">
                    <input type=" text" class="form-control" placeholder="Cari Perusahaan" name="search" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Cari pekerjaan</button>
                </div>
            </form>
        </div>

    </div>
    <div class="row justify-content-center">
        @foreach($companies as $company)
        <div class="card m-2 col-md-10">
            <div class="row g-0">
                <div class="card col-md-1  m-2">
                    <img src="{{ $company->logo}}" class="img-fluid rounded" width="130px" alt="...">
                    @if($company->status == '1')

                    <span class="card-img-overlay text-center  p-1">
                        <p class="bg-success text-white rounded-pill">Featured</p>
                    </span>
                    @endif
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



        <div class="d-flex justify-content-end">
            {{ $companies->links() }}
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
