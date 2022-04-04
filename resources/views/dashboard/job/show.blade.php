@extends('dashboard.layouts.app')

@section('content')
<!-- Job Detail Section -->
<section class="job-detail-section style-two">
    <div class="job-detail-outer">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="job-block-outer">
                        <!-- Job Block -->
                        <div class="job-block-seven style-two">
                            <div class="inner-box">
                                <div class="content">
                                    <h4>{{ $job->title }}</h4>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-briefcase"></span> {{
                                            ucfirst($job->category->name) }}
                                        </li>
                                        <li><span class="icon flaticon-map-locator"></span> {{ $job->location }}</li>
                                        <li><span class="icon flaticon-clock-3"></span> {{
                                            $job->created_at->diffForHumans() }}</li>
                                        <li><span class="icon flaticon-money"></span>{{ $job->salary }}</li>
                                    </ul>
                                    <ul class="job-other-info">
                                        <li class="time">{{ $job->type }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="job-detail">
                        @if ($job->image)

                        <figure class="image"><img src="{{ asset('storage/'.$job->image) }}" alt="">
                        </figure>
                        @endif
                        {!! $job->body !!}
                    </div>


                </div>

                <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <div class="sidebar-widget">
                            <!-- Job Overview -->
                            <h4 class="widget-title">Detail Pekerjaan</h4>
                            <div class="widget-content">
                                <ul class="job-overview">
                                    <li>
                                        <i class="icon icon-calendar"></i>
                                        <h5>Date Posted:</h5>
                                        <span>Posted {{ $job->created_at->diffForHumans() }}</span>
                                    </li>
                                    <li>
                                        <i class="icon icon-expiry"></i>
                                        <h5>Expiration date:</h5>
                                        <span>{{date('d F Y',strtotime( $job->expiration_date)) }}</span>
                                    </li>
                                    <li>
                                        <i class="icon icon-location"></i>
                                        <h5>Location:</h5>
                                        <span>{{ $job->location }}</span>
                                    </li>
                                    <li>
                                        <i class="icon icon-user-2"></i>
                                        <h5>Level Career:</h5>
                                        <span>{{ $job->level_career }}</span>
                                    </li>

                                    <li>
                                        <i class="icon icon-salary"></i>
                                        <h5>Salary:</h5>
                                        <span>{{ $job->salary }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Map Widget -->
                            <h4 class="widget-title">Job Location</h4>
                            <div class="widget-content">
                                <div class="map-outer">
                                    <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                                        data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                                        data-icon-path="images/resource/map-marker.png"
                                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                    </div>
                                </div>
                            </div>

                            <!-- Job Skills -->
                            <h4 class="widget-title">Job Skills</h4>
                            <div class="widget-content">
                                <ul class="job-skills">
                                    <li><a href="#">app</a></li>
                                    <li><a href="#">administrative</a></li>
                                    <li><a href="#">android</a></li>
                                    <li><a href="#">wordpress</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">react</a></li>
                                </ul>
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