@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Job</h1>
</div>

<div class="table-responsive col-lg-12">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create Post</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">{#}</th>
                <th scope="col">Logo</th>
                <th scope="col">Name</th>
                <th scope="col">Company Category</th>
                <th scope="col">Status</th>
                <th scope="col">Location</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ $company->logo }}" width="100px" alt=""></td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->companycategory->name }}</td>
                <td>{{ $company->status }}</td>
                <td>{{ $company->location }}</td>
                <td>{{ $company->phone_number }}</td>
                <td>{{ $company->email }}</td>

                <td>
                    <a href="/dashboard/company/{{ $company->slug }}" class="badge bg-primary"><i
                            data-feather="eye"></i></a>
                    <a href="#" class="badge bg-warning"><i data-feather="edit"></i></a>
                    <form action="/dashboard/company/{{ $company->slug }}" method="post" class="d-inline">
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

        {{-- {{ $jobs->links() }} --}}
    </div>
</div>

@endsection