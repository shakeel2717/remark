@extends('auth.layout.app')
@section('form')
    <div class="mb-4 text-center">
        <img class="avatar avatar-xxl avatar-4by3" src="{{ asset('assets/svg/illustrations/think.svg') }}"
            alt="Image Description">
    </div>
    <form class="js-validate" method="POST" action="{{ route('resetPasswordReq') }}">
        @csrf
        <div class="text-center mb-5">
            <h1 class="display-4">Rest Password!</h1>
            <p>Back to Login? <a href="{{ route('login') }}">Sign In</a></p>
            <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
        </div>
        <hr>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="email">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                        placeholder="Markwilliams@example.com" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Reset Password</button>
    </form>
@endsection