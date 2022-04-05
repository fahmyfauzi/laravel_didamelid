@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>Companies</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Beranda</a></li>
        <li>Companies</li>
      </ul>
    </div>
  </div>
</section>
<!--End Page Title-->

<!-- Listing Section -->
<section class="ls-section">
  <div class="auto-container">
    <div class="filters-backdrop"></div>

    <div class="row">

      <!-- Filters Column -->
      <div class="filters-column col-lg-4 col-md-12 col-sm-12">
        <div class="inner-column pd-right">
          <div class="filters-outer">
            <button type="button" class="theme-btn close-filters">X</button>
            <form action="/company">

              <!-- Filter Block -->
              <div class="filter-block">
                <h4>Search by Keywords</h4>
                <div class="form-group">
                  <input type="text" name="search" placeholder="Job title, keywords, or company">
                  <span class="icon flaticon-search-3"></span>
                </div>
              </div>

              <!-- Filter Block -->
              <div class="filter-block">
                <h4>Location</h4>
                <div class="form-group">
                  <input type="text" name="listing-search" name="location" placeholder="City or postcode">
                  <span class="icon flaticon-map-locator"></span>
                </div>
                <p>Radius around selected destination</p>
                <div class="range-slider-one">
                  <div class="area-range-slider"></div>
                  <div class="input-outer">
                    <div class="amount-outer"><span class="area-amount"></span>km</div>
                  </div>
                </div>
              </div>

              <!-- Filter Block -->
              <div class="filter-block">
                <h4>Category</h4>
                <div class="form-group">
                  <select class="chosen-select" name="company-category">
                    <option hidden></option>
                    @foreach ($company_categories as $item)
                    @if (old('category') == $item->slug)
                    <option value="{{ $item->slug }}" selected>{{ $item->name }}</option>
                    @else
                    <option value="{{ $item->slug }}">{{ $item->name }}</option>
                    @endif
                    @endforeach
                  </select>
                  <span class="icon flaticon-briefcase"></span>
                </div>
              </div>


              <!-- Filter Block -->
              <div class="filter-block">
                <h4>Founded Date</h4>
                <div class="range-slider-one">
                  <div class="range-slider"></div>
                  <div class="input-outer">
                    <div class="amount-outer"><span class="count"></span></div>
                  </div>
                </div>
              </div>

              <button type="submit" class="theme-btn btn-style-one">Find Jobs</button>
            </form>

          </div>

        </div>
      </div>

      <!-- Content Column -->
      <div class="content-column col-lg-8 col-md-12 col-sm-12">
        <div class="ls-outer">
          <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>



          <!-- Block Block -->
          @foreach ($companies as $item)
          <div class="company-block-three">
            <div class="inner-box">
              <div class="content">
                <div class="content-inner">
                  <span class="company-logo"><img src="{{ asset('storage/'.$item->logo) }}" alt=""></span>
                  <h4><a href="/company/{{ $item->slug }}">{{ $item->name }}</a></h4>
                  <ul class="job-info">
                    <li><span class="icon flaticon-map-locator"></span> {{ $item->location }}</li>
                    <li><span class="icon flaticon-briefcase"></span> {{ $item->companycategory->name }}</li>
                  </ul>
                </div>

                <ul class="job-other-info">
                  @if ($item->status == '1')
                  <li class="privacy">Featured</li>

                  @endif
                  <li class="time">Open Jobs – {{$item->job->count() }}</li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach


          <!-- Listing Show More -->
          <div class="ls-show-more">
            {{$companies->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Listing Page Section -->

@endsection