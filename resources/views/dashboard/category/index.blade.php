@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category Job</h1>
</div>

<div class="table-responsive col-lg-8">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Add Category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">{#}</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)

            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $category->name }}</td>


                <td>
                    <a href="{{ route('category.edit',['category'=> $category]) }}" class="badge bg-warning"><i
                            data-feather="edit"></i></a>
                    <form action="{{ route('category.destroy',['category' => $category]) }}" method="post"
                        class="d-inline">
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

        {{-- {{ $companies->links() }} --}}
    </div>
</div>

@endsection