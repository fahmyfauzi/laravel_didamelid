@extends('layouts.app')

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

                        <figure class="image"><img src="{{ asset('storage/'. $job->image)  }}" alt="">
                        </figure>
                        @endif
                        {!! $job->body !!}
                    </div>

                    <!-- Other Options -->
                    <div class="other-options">
                        <div class="social-share">
                            <h5>Share this job</h5>
                            <a href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank"
                                class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                            <a href="http://twitter.com/share?url={{ url()->current() }}" target="_blank"
                                class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                            <a href="https://plus.google.com/share?url={{ url()->current() }}" target="_blank"
                                class="google"><i class="fab fa-google"></i> Google+</a>
                        </div>
                    </div>

                    <!-- Related Jobs -->
                    <div class="related-jobs">
                        <div class="title-box">
                            <h3>Related Jobs</h3>

                        </div>

                        <!-- Job Block -->
                        @foreach ($jobs->take(5) as $item)

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
                                        <li class="time">Full Time</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        @endforeach


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

                        <div class="sidebar-widget company-widget">
                            <div class="widget-content">
                                <div class="company-title">
                                    <div class="company-logo"><img src="{{ asset('storage/'.$job->company->logo) }}"
                                            alt=""></div>
                                    <h5 class="company-name">{{ $job->company->name }}</h5>
                                    <a href="/company/{{ $job->company->slug }}" class="profile-link">View company
                                        profile</a>
                                </div>

                                <ul class="company-info">
                                    <li>Kategori: <span>{{ $job->company->companycategory->name }}</span></li>
                                    <li>Phone: <span>{{ $job->company->phone_number }}</span></li>
                                    <li>Email: <span>{{ $job->company->email }}</span></li>
                                    <li>Location: <span>{{ $job->company->location }}</span></li>
                                    <li>Social media:
                                        <div class="social-links">
                                            @if ($job->company->social_facebook )

                                            <a href="{{ $job->company->social_facebook }}" target="_blink"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            @endif
                                            @if ($job->company->social_twitter )

                                            <a href="{{ $job->company->social_twitter }}" target="_blink"><i
                                                    class="fab fa-twitter"></i></a>
                                            @endif
                                            @if ($job->company->social_instagram)

                                            <a href="{{ $job->company->social_instagram }}" target="_blink"><i
                                                    class="fab fa-instagram"></i></a>
                                            @endif
                                            @if ($job->company->social_youtube)

                                            <a href="{{ $job->company->social_youtube }}" target="_blink"><i
                                                    class="fab fa-youtube"></i></a>
                                            @endif
                                        </div>
                                    </li>
                                </ul>

                                @if ( $job->company->website)

                                <div class="btn-box"><a href="{{ $job->company->website }}"
                                        class="theme-btn btn-style-three">{{
                                        $job->company->website }}</a></div>
                                @endif
                            </div>
                        </div>

                        <div class="sidebar-widget contact-widget">
                            <h4 class="widget-title">Contact Us</h4>
                            <div class="widget-content">
                                <!-- Comment Form -->
                                <div class="default-form">
                                    <!--Comment Form-->
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea class="darma" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn btn-style-one" type="submit"
                                                    name="submit-form">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Job Detail Section -->
<script type="application/ld+json">
    {
        "@context" : "https://schema.org/",
        "@type" : "JobPosting",
        "title" : "{{ $job->title }}",
        "description" : "{{ Str::limit(strip_tags(html_entity_decode($job->body)), 500, '...') }}",
        "identifier": {
            "@type": "PropertyValue",
            "name": "{{ $job->company->name }}",
            "value": "{{ $job->id }}"
        },
        "datePosted" : "{{ $job->created_at }}",
        "validThrough" : "{{ $job->expiration_date }}",
        "employmentType" : "{{ $job->type }}",
        "hiringOrganization" : {
            "@type" : "Organization",
            "name" : "{{ $job->company->name }}",
            "sameAs" : "{{ $job->company->website }}",
            "logo" : "{{ url('/').'/storage/'.$job->company->logo }}"
        },
        "jobLocation": {
        "@type": "Place",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ $job->location }}",
            "addressLocality": "{{ $job->location }}",
            "addressRegion": "IDR",
            "postalCode": "",
            "addressCountry": "{{ $job->location }}"
            }
        }
        }
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "{{ url('/') }}",
      "potentialAction": {
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "{{ url('/'.'job?search={search_term_string}') }}"
        },
        "query-input": "required name=search_term_string"
      }
    }
</script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Beranda",
        "item": "{{ url('/') }}"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "Jobs",
        "item": "{{ url('/').'/job' }}"
    },{
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $job->category->name }}",
      "item": "{{ url('/'.'?job=').$job->category->name }}"
    },{
        "@type": "ListItem",
        "position": 4,
        "name": "{{ $job->title}} - {{ $job->company->name }}"
      }]
    }
</script>


@endsection