@extends('auth.layout.app')
@section('form')
    <form class="js-validate" method="POST" action="{{ route('setPasswordReq') }}">
        @csrf
        <div class="text-center mb-5">
            <h1 class="display-4">Set a New Password!</h1>
            <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a>
            </p>
        </div>
        <hr>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="password">New Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="password"
                        placeholder="**********" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="password">Again New Password</label>
                    <input type="password" class="form-control form-control-lg" name="password_confirmation" id="password"
                        placeholder="**********" required>
                    <input type="hidden" name="token" value="{{ $token }}">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Update Password</button>
    </form>
@endsection
