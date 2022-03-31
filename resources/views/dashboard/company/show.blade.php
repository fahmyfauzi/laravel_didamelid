@extends('dashboard.layouts.app')

@section('content')

<!-- Job Detail Section -->
<section class="job-detail-section">
    <!-- Upper Box -->
    <div class="upper-box">
        <div class="auto-container">
            <!-- Job Block -->
            <div class="job-block-seven style-three">
                <div class="inner-box">
                    <div class="content">
                        <span class="company-logo"><img src="{{ asset('storage/'.$company->logo) }}" alt=""></span>
                        <div>

                            <span class="display-4">{{ $company->name }}
                            </span>
                            @if($company->status == '1')
                            <small class="d-inline text-success">Featured</small>
                            @endif
                        </div>
                        <ul class="job-other-info">
                            <li class="time">Open Jobs – {{$company->job->count() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="job-detail-outer">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-8 col-md-12 col-sm-12 order-2">
                    <div class="job-detail">
                        <h4>About Company</h4>
                        {!! $company->body !!}
                    </div>

                    <!-- Related Jobs -->
                    <div class="related-jobs">
                        <div class="title-box">
                            <h3>{{ count($company->job) }} jobs at {{ $company->name }}</h3>
                            <div class="text">2020 jobs live - 293 added today.</div>
                        </div>

                        <!-- Job Block -->
                        @foreach ($company->job->sortByDesc('created_at') as $item)

                        <div class="job-block">
                            <div class="inner-box">
                                <div class="content">
                                    <span class="company-logo"><img src="{{ asset('storage/'.$item->company->logo) }}"
                                            alt=""></span>
                                    <h4><a href="/job/{{ $item->slug }}">{{ $item->title }}</a></h4>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-briefcase"></span> {{ $item->category->name }}
                                        </li>
                                        <li><span class="icon flaticon-map-locator"></span> {{ $item->location }}</li>
                                        <li><span class="icon flaticon-clock-3"></span> {{
                                            $item->created_at->diffForHumans() }}</li>
                                        <li><span class="icon flaticon-money"></span> {{ $item->salary }}</li>
                                    </ul>
                                    <ul class="job-other-info">
                                        <li class="time">{{ $item->type }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>

                <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar pd-right">

                        <div class="sidebar-widget company-widget">
                            <div class="widget-content">
                                <ul class="company-info mt-0">
                                    <li>Kategori: <span>{{ $company->companycategory->name }}</span></li>
                                    <li>Phone: <span>{{ $company->phone_number }}</span></li>
                                    <li>Email: <span>{{ $company->email }}</span></li>
                                    <li>Location: <span>{{ $company->location }}</span></li>
                                    <li>Social media:
                                        <div class="social-links">
                                            @if ($company->social_facebook )

                                            <a href="{{ $company->social_facebook }}" target="_blink"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            @endif
                                            @if ($company->social_twitter )

                                            <a href="{{ $company->social_twitter }}" target="_blink"><i
                                                    class="fab fa-twitter"></i></a>
                                            @endif
                                            @if ($company->social_instagram)

                                            <a href="{{ $company->social_instagram }}" target="_blink"><i
                                                    class="fab fa-instagram"></i></a>
                                            @endif
                                            @if ($company->social_youtube)

                                            <a href="{{ $company->social_youtube }}" target="_blink"><i
                                                    class="fab fa-youtube"></i></a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                                @if ($company->website)

                                <div class="btn-box"><a href="#" class="theme-btn btn-style-three">{{ $company->website
                                        }}</a></div>
                                @endif
                            </div>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Job Detail Section -->
@endsection