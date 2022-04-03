@extends('dashboard.layouts.app')

@section('content')

<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Add New Company!</h3>
            <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>Post Company</h4>
                        </div>

                        <div class="widget-content">

                            <form class="default-form" method="post" action="{{ route('company.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Company Name</label>
                                        <input type="text" name="name" id="title" placeholder="Title"
                                            value="{{ old('name') }}">
                                        @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Company Slug</label>
                                        <input type="text" name="slug" id="slug" placeholder="Slug"
                                            value="{{ old('slug') }}">
                                        @error('slug')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- About Company -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>About Company</label>
                                        @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>
                                    </div>
                                    {{-- image --}}
                                    <div class="form-group col-lg-12 col-md-12">
                                        <img class="img-preview img-fluid mb-3 col-lg-5">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Image</label>
                                        <input type="file" id="image" name="logo" class="form-control"
                                            onchange="previewImage()">
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Location</label>
                                        <input type="text" name="location" placeholder="Location"
                                            value="{{ old('location') }}">
                                        @error('location')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="example@gmail.com"
                                            value="{{ old('email') }}">
                                        @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone_number" placeholder="08123456789"
                                            value="{{ old('phone_number') }}">
                                        @error('phone_number')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Social Facebook</label>
                                        <input type="text" name="social_facebook"
                                            placeholder="https://www.facebook.com/didamel.id"
                                            value="{{ old('social_facebook') }}">
                                        @error('social_facebook')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Social Instagram</label>
                                        <input type="text" name="social_instagram"
                                            placeholder="https://www.instagram.com/didamel.id/"
                                            value="{{ old('social_instagram') }}">
                                        @error('social_instagram')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Social Twitter</label>
                                        <input type="text" name="social_twitter"
                                            placeholder="https://twitter.com/FahmyFauzi10"
                                            value="{{ old('social_twitter') }}">
                                        @error('social_twitter')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Social Youtube</label>
                                        <input type="text" name="social_youtube"
                                            placeholder="https://www.youtube.com/c/DidamelIndonesia"
                                            value="{{ old('social_youtube') }}">
                                        @error('social_youtube')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>


                                    {{-- input --}}
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Category</label>
                                        <select class="chosen-select" name="companycategory_id">
                                            <option selected disabled>select category</option>
                                            @foreach($companycategories as $item)
                                            @if(old('companycategory_id') == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                            @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('companycategory_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- input --}}
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Status Company</label>
                                        <select class="chosen-select" name="status">
                                            <option value="0" {{ old('status')=='0' ? 'selected' : '' }}>
                                                Non Featured
                                            </option>
                                            <option value="1" {{ old('status')=='1' ? 'selected' : '' }}>
                                                Featured
                                            </option>
                                            @error('status')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </select>
                                    </div>





                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12 text-right">
                                        <button class="theme-btn btn-style-one">Next</button>
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