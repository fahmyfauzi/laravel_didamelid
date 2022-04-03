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

                            <form class="default-form" method="post" action="{{ route('job.update',[$job->slug]) }}"
                                enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <!-- Input -->
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Job Title</label>
                                        <input type="text" name="title" id="title" placeholder="Title"
                                            value="{{ old('title',$job->title) }}">
                                        @error('title')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>Job Slug</label>
                                        <input type="text" name="slug" id="slug" placeholder="Slug"
                                            value="{{ old('slug',$job->slug) }}">
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
                                        <input id="body" type="hidden" name="body" value="{{ old('body',$job->body) }}">
                                        <trix-editor input="body"></trix-editor>
                                    </div>
                                    {{-- image --}}
                                    <div class="form-group col-lg-12 col-md-12">
                                        @if ($job->image)
                                        <img src="{{ asset('storage/'.$job->image) }}"
                                            class="img-preview img-fluid mb-3 col-lg-5">
                                        @else
                                        <img class="img-preview img-fluid mb-3 col-lg-5">

                                        @endif

                                    </div>
                                    <div class="form-group col-lg-6 col-md-12">
                                        <input type="hidden" name="oldImage" value="{{ $job->image }}">
                                        <label>Image</label>
                                        <input type="file" id="image" name="image" class="form-control"
                                            onchange="previewImage()">
                                    </div>
                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Expiration Date</label>
                                        <input type="date" name="expiration_date" placeholder="01/01/2022"
                                            class="form-control "
                                            value="{{ old('expiration_date',$job->expiration_date) }}">
                                        @error('expiration_date')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <!-- Input -->
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Location</label>
                                        <input type="text" name="location" placeholder="Location"
                                            value="{{ old('location',$job->location) }}">
                                        @error('location')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- company --}}
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Company</label>

                                        <select class="chosen-select" name="company_id">
                                            @foreach($companies as $item)
                                            @if(old('company_id',$item->id) == $item->id)
                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                            @else
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    {{-- input --}}
                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Level Career</label>
                                        <input type="text" name="level_career" placeholder="Senior"
                                            value="{{ old('level_career',$job->level_career) }}">
                                        @error('level_career')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>



                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Job Type</label>
                                        <select class="chosen-select" name="type">
                                            <option value="Fulltime" {{ old('type',$job->type)=='Fulltime' ? 'selected'
                                                : '' }}>
                                                Fulltime
                                            </option>
                                            <option value="Paruh waktu" {{ old('type',$job->type)=='Paruh waktu' ?
                                                'selected' : ''
                                                }}>
                                                Paruh waktu
                                            </option>
                                            <option value="Freelance" {{ old('type',$job->type)=='Freelance' ?
                                                'selected'
                                                : '' }}>
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
                                            value="{{ old('salary',$job->salary) }}">
                                        @error('salary')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-6 col-md-12">
                                        <label>Category</label>
                                        <select class="chosen-select" name="category_id">

                                            @foreach($categories as $category)
                                            @if(old('category_id',$job->category_id) == $category->id)
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

<script>
    const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');
  title.addEventListener('change', function() {
      fetch('/checkSlug?title=' + title.value)
          .then(response => response.json())
          .then(data => slug.value = data.slug)
  });
  document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
  })

  function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection