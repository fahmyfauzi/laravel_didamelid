@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3
            border-bottom">
    <h1 class="h2">Post Job</h1>
</div>

<div class="table-responsive col-lg-12">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-lg-10">
            <a href="{{ route('job.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Add
                Job</a>
        </div>
        <div class="col-lg-2 justify-content-end">
            <form action="/dashboard/job">
                <input type="text" name="search" placeholder="cari pekerjaan"
                    class="d-inline form-control justify-content-end" value="{{ request('search') }}">
            </form>

        </div>

    </div>
    <table class="table table-striped table-sm ">
        <thead>
            <tr>
                <th scope="col">{#}</th>
                <th scope="col" width="250px">Title</th>
                <th scope="col">Company</th>
                <th scope="col">Level Career</th>
                <th scope="col">Type</th>
                <th scope="col">Salary</th>
                <th scope="col">Category</th>
                <th scope="col" width="150px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->company->name}}</td>
                <td>{{ $job->level_career }}</td>
                <td>{{ $job->type }}</td>
                <td>{{ $job->salary }}</td>
                <td>{{ $job->category->name}}</td>
                <td>
                    <a href="{{ route('job.show',[$job->slug]) }}" class="badge bg-primary"><i
                            data-feather="eye"></i></a>
                    <a href="{{ route('job.edit',[$job->slug]) }}" class="badge bg-warning"><i
                            data-feather="edit"></i></a>
                    <form action="{{ route('job.destroy',[$job->slug]) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onClick="return confirm('Are you sure?')"><i
                                data-feather="x-circle"></i></button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">

        {{ $jobs->links() }}
    </div>
</div>

@endsection