@extends('auth.layout.app')
@section('form')
    <div class="text-center">
        <div class="mb-4">
            <img class="avatar avatar-xxl avatar-4by3" src="{{ asset('assets/svg/illustrations/click.svg') }}" alt="Image Description">
        </div>
        <h1 class="display-4">Verify your email</h1>
        <p class="mb-1">We've sent a link to your email address:</p>
        <span class="d-block text-dark font-weight-bold mb-1">{{ session('notice')['email'] }}</span>
        <p>Please follow the link inside to continue.</p>
        <div class="mt-4 mb-3">
            <a class="btn btn-primary btn-wide" href="{{ route('login') }}">Skip now</a>
        </div>
        <p>Didn't receive an email? <a href="{{ route('resendEmail') }}">Resend</a></p>
    </div>
@endsection
