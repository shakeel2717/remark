@extends('auth.layout.app')
@section('form')
    <div class="text-center">
        <div class="mb-4">
            <img class="avatar avatar-xxl avatar-4by3" src="{{ asset('assets/svg/illustrations/create.svg') }}" alt="Image Description">
        </div>
        <h1 class="display-4">Awsome!!!</h1>
        <p class="mb-1">You've Successfully Verified Your Email!</p>
        <p>You can now Login.</p>
        <div class="mt-4 mb-3">
            <a class="btn btn-primary btn-wide" href="{{ route('login') }}">Go to Login</a>
        </div>
        <p>Need Assistance? <a href="">Contact Us</a></p>
    </div>
@endsection
