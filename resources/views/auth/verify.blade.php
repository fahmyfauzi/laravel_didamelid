<<<<<<< HEAD
@extends('layouts.app',['title'=> 'Verify'])
=======
@extends('layouts.app')
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
<<<<<<< HEAD
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request
                            another') }}</button>.
=======
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 260a9c744cbf87be20e3a46c3af00d7794c1cfdd
