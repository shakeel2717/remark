@extends('auth.layout.app')
@section('form')
    <form class="js-validate" method="POST" action="{{ route('registerReq') }}">
        @csrf
        <div class="text-center mb-5">
            <h1 class="display-4">Create your account</h1>
            <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a>
            </p>
        </div>
        <hr>
        <label class="input-label" for="fullname">Full name</label>
        <div class="form-row">
            <div class="col-sm-6">
                <div class="js-form-message form-group">
                    <input type="text" class="form-control form-control-lg" name="fname" placeholder="Mark" id="fullname"
                        required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="js-form-message form-group">
                    <input type="text" class="form-control form-control-lg" name="lname" placeholder="Williams" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="username">Your username</label>
                    <input type="username" class="form-control form-control-lg" name="username" id="username"
                        placeholder="markwilliams12" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="email">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                        placeholder="Markwilliams@example.com" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="password">Choose Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="password"
                        placeholder="**********" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control form-control-lg" name="password_confirmation"
                        id="password_confirmation" placeholder="**********" required>
                </div>
            </div>
        </div>
        <div class="js-form-message form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required>
                <label class="custom-control-label text-muted" for="termsCheckbox">
                    I accept the <a href="#">Terms and Conditions</a>
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Create an
            account</button>
        <button type="submit" class="btn btn-block btn-link"></button>
    </form>
@endsection