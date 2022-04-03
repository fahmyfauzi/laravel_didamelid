@extends('dashboard.layouts.app')

@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>{{ auth()->user()->name }}</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item">
                    <div class="left">
                        <i class="icon flaticon-briefcase"></i>
                    </div>
                    <div class="right">
                        <h4>{{ count($job) }}</h4>
                        <p>Posted Jobs</p>
                    </div>
                </div>
            </div>
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-red">
                    <div class="left">
                        <i class="icon la la-file-invoice"></i>
                    </div>
                    <div class="right">
                        <h4>{{ count($category) }}</h4>
                        <p>Category Job</p>
                    </div>
                </div>
            </div>
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-yellow">
                    <div class="left">
                        <i class="icon la la-building"></i>
                    </div>
                    <div class="right">
                        <h4>{{ count($company) }}</h4>
                        <p>Company</p>
                    </div>
                </div>
            </div>
            <div class="ui-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="ui-item ui-green">
                    <div class="left">
                        <i class="icon la la-list-alt"></i>
                    </div>
                    <div class="right">
                        <h4>{{ count($companycategory) }}</h4>
                        <p>Company Category</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Dashboard -->


@endsection