@extends('layouts.app',['title' => 'Login'])

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex align-items-center" style="height:80vh;">
        <div class="col-md-5">

            <form method="POST" action="{{ route('login') }}">
                <h1 class="h2 mb-4 fw-normal text-bold text-center">Please Login</h1>
                @csrf

                <div class="row text-center justify-content">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('email') is-invalid @enderror"
                            id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
                <button type="submit" class="w-100 mt-1 btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>

            <div class="text-center">
                <small class="mt-2 text-center">
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </small>
            </div>

        </div>
    </div>

</div>
@endsection