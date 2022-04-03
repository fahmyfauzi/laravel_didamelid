@extends('dashboard.layouts.app')

@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
  <div class="dashboard-outer">
    <div class="upper-title-box">
      <h3>Manage Jobs</h3>
      <div class="text">Ready to jump back in?</div>
    </div>
    <!-- Input -->

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="form-group col-lg-12 col-md-12 mb-2">
      <a href="{{ route('job.create') }}" class="theme-btn btn-style-three">Add Job</a>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <!-- Ls widget -->
        <div class="ls-widget">
          <div class="tabs-box">
            <div class="widget-title">
              <h4>My Job Listings</h4>

              <!--search box-->
              <div class="search-box">
                <form action="{{ route('job.index') }}">
                  <div class="form-group form-control">
                    <span class="icon flaticon-search-1"></span>
                    <input type="text" name="search" value="{{ old('search') }} {{ request('search') }}"
                      placeholder="keywords" required="">
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="widget-content">
            <div class="table-outer">
              <table class="default-table manage-job-table">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Created & Expired</th>
                    <th>Level Career</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($jobs as $item)

                  <tr>
                    <td>
                      <h6>{{ $item->title }}</h6>
                      <span class="info"><i class="icon flaticon-map-locator"></i> {{ $item->location }}</span>
                    </td>
                    <td class="status">{{ $item->type }}</td>
                    <td>{{date('d F Y',strtotime( $item->created_at)) }}<br>{{date('d F Y',strtotime(
                      $item->expiration_date)) }}</td>
                    <td class="info">{{ $item->level_career }}</td>
                    <td>
                      <div class="option-box">
                        <ul class="option-list">
                          <a href="{{ route('job.show',[$item->slug]) }}">
                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                          </a>
                          <a href="{{ route('job.edit',[$item->slug]) }}">

                            <li><button data-text="Reject Aplication"><span class="la la-pencil"></span></button></li>
                          </a>
                          <a href="{{ route('job.destroy',[$item->slug]) }}">
                            <form action="{{ route('job.destroy',[$item->slug]) }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <li><button data-text="Delete Aplication" onClick="return confirm('Are you sure?')"><span
                                    class="la la-trash"></span></button>
                              </li>
                            </form>
                          </a>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
          {{ $jobs->links() }}
        </div>
      </div>
    </div>


  </div>
  </div>
</section>
<!-- End Dashboard -->
@endsection