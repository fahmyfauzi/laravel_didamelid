@extends('dashboard.layouts.app')

@section('content')

<!-- Dashboard -->
<section class="user-dashboard">
  <div class="dashboard-outer">
    <div class="upper-title-box">
      <h3>Post a New Job!</h3>
      <div class="text">Ready to jump back in?</div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <!-- Ls widget -->
        <div class="ls-widget">
          <div class="tabs-box">
            <div class="widget-title">
              <h4>Post Job</h4>
            </div>

            <div class="widget-content">

              <form class="default-form" method="post" action="{{ route('job.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <!-- Input -->
                  <div class="form-group col-lg-12 col-md-12">
                    <label>Job Title</label>
                    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
                    @error('title')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group col-lg-12 col-md-12">
                    <label>Job Slug</label>
                    <input type="text" name="slug" id="slug" placeholder="Slug" value="{{ old('slug') }}">
                    @error('slug')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <!-- About Company -->
                  <div class="form-group col-lg-12 col-md-12">
                    <label>Job Description</label>
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
                    <input type="file" id="image" name="image" class="form-control" onchange="previewImage()">
                  </div>
                  <!-- Input -->
                  <div class="form-group col-lg-6 col-md-12">
                    <label>Expiration Date</label>
                    <input type="date" name="expiration_date" placeholder="01/01/2022" class="form-control"
                      value="{{ old('expiration_date') }}">
                    @error('expiration_date')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <!-- Input -->
                  <div class="form-group col-lg-6 col-md-12">
                    <label>Location</label>
                    <input type="text" name="location" placeholder="Location" value="{{ old('location') }}">
                    @error('location')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  {{-- company --}}
                  <div class="form-group col-lg-6 col-md-12">
                    <label ">Company</label>
                    @error('company_id')
                    <div class=" text-danger">
                      {{ $message }}
                  </div>
                  @enderror
                  <select class="chosen-select" name="company_id">
                    <option selected disabled>select company</option>
                    @foreach($companies as $company)
                    @if(old('company_id') == $company->id)
                    <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                    @else
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endif
                    @endforeach
                  </select>
                </div>

                {{-- input --}}
                <div class="form-group col-lg-6 col-md-12">
                  <label>Level Career</label>
                  <input type="text" name="level_career" placeholder="Senior" value="{{ old('level_career') }}">
                  @error('level_career')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>



                <div class="form-group col-lg-6 col-md-12">
                  <label>Job Type</label>
                  <select class="chosen-select" name="type">
                    <option selected disabled>select type job</option>
                    <option value="Fulltime" {{ old('type')=='Fulltime' ? 'selected' : '' }}>
                      Fulltime
                    </option>
                    <option value="Paruh waktu" {{ old('type')=='Paruh waktu' ? 'selected' : '' }}>
                      Paruh waktu
                    </option>
                    <option value="Freelance" {{ old('type')=='Freelance' ? 'selected' : '' }}>
                      Freelance
                    </option>
                  </select>
                  @error('type')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <!-- Input -->
                <div class="form-group col-lg-6 col-md-12">
                  <label>Salary</label>
                  <input type="text" name="salary" placeholder=" Rp5.000.000 - Rp10.000.000"
                    value="{{ old('salary') }}">
                  @error('salary')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                {{-- input --}}
                <div class="form-group col-lg-6 col-md-12">
                  <label>Category</label>
                  <select class="chosen-select" name="category_id">
                    <option selected disabled>select category</option>
                    @foreach($categories as $category)
                    @if(old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                  </select>
                  @error('category_id')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                  @enderror
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