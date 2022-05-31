@extends('dashboard.layouts.app')

@section('content')

<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Update Company Category!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Create Category</h4>
                        </div>

                        <div class="widget-content">

                            <form class="default-form" method="post"
                                action="{{ route('companycategory.update',$companycategory->slug) }}">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Name</label>
                                        <input type="text" name="name" id="title" placeholder="Title"
                                            class=" @error('name') is-invalid @enderror"
                                            value="{{ old('name',$companycategory->name) }}">
                                        @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Job Slug</label>
                                        <input type="text" name="slug" id="slug" placeholder="Slug"
                                            class=" @error('slug') is-invalid @enderror"
                                            value="{{ old('slug',$companycategory->slug) }}">
                                        @error('slug')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12 text-right">
                                        <button class="theme-btn btn-style-one">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Dashboard -->
@endsection