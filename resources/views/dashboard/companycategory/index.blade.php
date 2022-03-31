@extends('dashboard.layouts.app')

@section('content')
<!-- Dashboard -->
<section class="user-dashboard">
    <div class="dashboard-outer">
        <div class="upper-title-box">
            <h3>Manage Jobs</h3>
            <div class="text">Ready to jump back in?</div>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="form-group col-lg-12 col-md-12 mb-2">
            <a href="{{ route('companycategory.create') }}" class="theme-btn btn-style-three">Add Category</a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Ls widget -->
                <div class="ls-widget">
                    <div class="tabs-box">
                        <div class="widget-title">
                            <h4>My Job Listings</h4>
                        </div>

                        <div class="widget-content">
                            <div class="table-outer">
                                <table class="default-table manage-job-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($company_categories as $item)

                                        <tr>
                                            <td>
                                                <h6>{{ $item->name }}</h6>

                                            </td>

                                            <td>
                                                <div class="option-box">
                                                    <ul class="option-list">
                                                        <a href="{{ route('companycategory.edit',$item->slug) }}">
                                                            <li><button data-text="Reject Aplication"><span
                                                                        class="la la-pencil"></span></button></li>
                                                        </a>
                                                        <form
                                                            action="{{ route('companycategory.destroy',$item->slug) }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf

                                                            <li><button data-text="Delete Aplication"
                                                                    onClick="return confirm('Are you sure?')"><span
                                                                        class="la la-trash"></span></button></li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- {{ $jobs->links() }} --}}
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Dashboard -->
@endsection