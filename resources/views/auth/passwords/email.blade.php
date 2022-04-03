<<<<<<< HEAD
@extends('layouts.app',['title'=> 'Reset Password '])
=======
@extends('layouts.app')
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd

@section('content')
<div class="container">
    <div class="row justify-content-center d-flex align-items-center" style="height:80vh;">
        <div class="col-md-6">

            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                <h2 class="text-center">{{ __('Reset Password') }}</h2>
                @csrf
                <div class="form-floating">
<<<<<<< HEAD
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
=======
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-1 w-100">
                    {{ __('Send Password Reset Link') }}
                </button>

            </form>
        </div>
    </div>

</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd
