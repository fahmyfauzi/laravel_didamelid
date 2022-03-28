@extends('layouts.app')

@section('content')
<!-- Banner Section-->
<section class="banner-section-four -type-16" style="background-image: url(images/index-16/header/1920x940.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title-box wow fadeInUp" data-wow-delay="500ms">
                <h3>Langkah terbaik awal karirmu</h3>
                <p>Temukan lebih dari 10.000 pekerjaan di situs ini</p>
            </div>

            <!-- Job Search Form -->
            <div class="job-search-form wow fadeInUp" data-wow-delay="1000ms">
                <form action="/job">
                    <div class="row justify-content-center justify-content-md-between">
                        <!-- Form Group -->
                        <div class="form-group col-lg-9">
                            <span class="icon flaticon-search-1"></span>
                            <input type="text" name="search" placeholder="Pekerjaan atau nama perusahaan">
                        </div>

                        <!-- Form Group -->
                        <div class="form-group col-auto">
                            <button type="submit" class="theme-btn btn-style-two">Find Jobs</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Job Search Form -->

            <div class="features-icons">

                @foreach ($categories as $item)
                <a href="job?category={{ $item->slug }}">


                    <div class="item">
                        <div class="icon-wrap">
                            <div class="icon {{ $item->icon }}"></div>
                        </div>

                        <div class="title">
                            {{ $item->name }}
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- End Banner Section-->

<!-- Job Section -->
<section class="layout-pt-120 layout-pb-120">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Rekomendasi Pekerjaan</h2>
            <div class="text">Nilai dirimu dan temukan pekerjaan terbaik untukmu</div>
        </div>

        <div class="default-tabs tabs-box">
            <!--Tabs Box-->
            <div class="tab-buttons-wrap">
                <ul class="tab-buttons -pills-condensed -blue">
                    <li class="tab-btn active-btn" data-tab="#tab2">Pekerjaan Terbaru</li>
                </ul>
            </div>

            <div class="tabs-content pt-50 wow fadeInUp">


                <!--Tab-->
                <div class="tab active-tab" id="tab2">
                    <div class="row">
                        @foreach ($jobs as $item)

                        <!-- Job Block -->
                        <div class="job-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <span class="company-logo"><img class="rounded-full"
                                            src="images/resource/company-logo/1-1.png" alt="">
                                    </span>
                                    <h4><a href="job/{{ $item->slug }}">{{ $item->title }} - {{ $item->company->name
                                            }}</a></h4>
                                    <ul class="job-info">
                                        <li><a href="job?category={{ $item->category->slug }}"><span
                                                    class="icon flaticon-briefcase"></span>{{ucfirst($item->category->name)}}</a>
                                        </li>
                                        <li><a href="job?location={{ $item->location }}"><span
                                                    class="icon flaticon-map-locator"></span> {{ $item->location }}</a>
                                        </li>
                                    </ul>
                                    <ul class="job-other-info">
                                        <li class="time"><a href="/job?type={{ Str::slug($item->type, '-') }}">{{
                                                $item->type }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
</section>
<!-- End Job Section -->

<!-- Call To Action Two -->
<section class="call-to-action-two -type-4" style="background-image: url(images/index-16/cta/bg.png);">
    <div class="auto-container wow fadeInUp">
        <div class="sec-title light text-center">
            <h2>Pekerjaan Impianmu Di Depan Mata</h2>
            <div class="text">Sudah lebih dari 1.000 kandididat mendapatkan pekerjaan terbaiknya</div>
        </div>

        <div class="btn-box">
            <a href="/job" class="theme-btn btn-one">Cari Pekerjaan</a>
        </div>
    </div>
</section>
<!-- End Call To Action -->


<!-- Candidates Section -->
<section class="layout-pt-120 layout-pb-120 section-bg-color">
    <div class="section-bg-color__item -full -very-light-blue"></div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Perusahaan Unggulan</h2>
            <div class="text">Perusahaan yang bekerjasama dengan kami</div>
        </div>

        <div class="carousel-outer wow fadeInUp">
            <div class="candidates-carousel owl-carousel owl-theme default-dots">
                <!-- Candidate Block -->
                @foreach ($companies as $item)

                <div class="candidate-block">
                    <div class="inner-box">
                        <figure class="image"><img src="images/resource/candidate-1.png" alt=""></figure>
                        <a href="/company/{{ $item->slug }}">
                            <h4 class="name">{{ $item->name }}</h4>
                        </a>
                        <a href="/company?company-category={{ $item->companycategory->slug }}"><span
                                class="designation text-dark-3">{{ $item->companycategory->name }}</span>
                        </a>
                        <a href="/company?location={{ $item->location }}">
                            <div class="location"><i class="flaticon-map-locator"></i>{{ $item->location }}</div>
                        </a>
                        <a href="/company/{{ $item->slug }}" class="theme-btn btn-style-one"><span
                                class="btn-title">View
                                Profile</span></a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- End Candidates Section -->


@endsection