@extends('layouts.app')

@section('content')
<section id="home" class="mb-5" style="background-image: url('/img/background_didamelid.jpg');  background-repeat: no-repeat; background-size: 100%; ">
    <div class="container ">
        <div class="row justify-content-center d-flex  align-items-center text-center" style="height:100vh;">
            <div class="col-md-8">
                <h1 class="text-white text-bold">Langkah terbaik awal Karirmu</h1>
                <p class="text-white mb-5">Temukan lebih dari 10.000 pekerjaan di situs ini</p>

                <form action="/job">
                    @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('location'))
                    <input type="hidden" name="location" value="{{ request('location') }}">
                    @endif
                    <div class="input-group input-group-lg mb-5">
                        <input type=" text" class="form-control" placeholder="Pekerjaan atau nama perusahaan" name="search" style="background-image:url('icon/search.png'); background-position:10px 10px;; size: 10px;  background-repeat: no-repeat; padding-left: 40px;">
                        <button type="submit" class="btn btn-primary">Cari pekerjaan</button>
                    </div>
                </form>

                <ul class="list-group list-group-horizontal text-white" style="list-style-type:none;">
                    @foreach($categories as $category)
                    <li>

                        <a href="/job?category={{ $category->slug }}" class="list-group-item bg-transparent border-0 ">
                            <img src="/icon/{{ $category->icon }}" width="30px">
                            <p class="text-white mt-2">{{ $category->name }}</p>
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row justify-content-center  align-items-center">
            <div class="col-md-12 text-center">
                <h2>Rekomendasi Pekerjaan</h2>

                <p>Nilai dirimu dan temukan pekerjaan terbaik untukmu</p>
            </div>

            <h4 class="text-center mt-4">Pekerjaan Terbaru </h4>

            @foreach($jobs as $job)

            <div class="card m-1 col-md-5 ">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="{{ $job->image}}" class="img-fluid mt-4 rounded width=" 100px" alt="...">
                    </div>
                    <div class="col-md-8 ">
                        <div class="card-body ">
                            <h5 class="card-title"><a href="/job/{{ $job->slug }}">{{ $job->title }} - {{ $job->company }}</a></h5>
                            <h6 class="card-text m-0">

                                <a href="/job?category={{ $job->category->name }}">
                                    <i class="fa-solid fa-briefcase"></i>{{ ucfirst($job->category->name) }}
                                </a>
                                <a href="/job?location={{ $job->location }}">
                                    <i class="fa-solid fa-location-dot"></i> {{ $job->location }}
                                </a>
                            </h6>
                            <p class="card-text m-0"><i class="fa-solid fa-coins"></i>Rp.{{ $job->salary }}/ month</p>
                            <p class="card-text">{{ $job->time }}</p>
                        </div>
                    </div>
                    <div class="col-md-2 pt-3 ">
                        <small><i class="fa-solid fa-clock"></i>{{ $job->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <div class="row justify-content-center">

            <div class="col-md-4 text-center">
                <a href="/job" class="btn btn-primary">Lebih Banyak</a>
            </div>
        </div>

</section>

<section class="bg-secondary mt-4">
    <div class="container">
        <div class="row justify-content-center  align-items-center text-center" style="height: 50vh;">
            <div class="col-md-8 text-center">
                <h2>Pekerjaan Impianmu Di Depan Mata</h2>
                <p>Sudah lebih dari 1.000 kandididat mendapatkan pekerjaan terbaiknya</p>
                <a href="/job" type="button" class="btn btn-primary rounded">Cari Pekerjaan</a>
            </div>

        </div>
    </div>
</section>

<section style="background-color:#F3F3F3;">
    <div class="container">
        <div class="row justify-content-center  align-items-center text-center" style="height: 100vh;">
            <div class="col-md-10 ">
                <h4>Perusahaan Unggulan</h4>
                <p>Perusahaan yang bekerjasama dengan kami</p>
                {{-- Corousel slide --}}
                <div>

                    <div class="slider">
                        @foreach($companies as $company)
                        <div class="card m-5">
                            <img src=" {{ $company->logo }}" class="card-img-top rounded" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/company/{{ $company->slug }}"> {{ $company->name }}</a></h5>
                                <p class="card-text m-0">{{ $company->companycategory->name }} </p>
                            </div>
                        </div>
                        @endforeach

                    </div>



                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

                    <script type="text/javascript">
                        $('.slider').slick({
                            slidesToShow: 3
                            , slidesToScroll: 1
                            , autoplay: true
                            , autoplaySpeed: 5000
                            , dots: false

                        });

                    </script>
                    <!-- akhi slider -->

                </div>
            </div>

        </div>
</section>


@include('layouts.footer')
@endsection
