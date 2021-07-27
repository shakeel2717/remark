@extends('auth.layout.app')
@section('form')
    <form class="js-validate" method="POST" action="{{ route('adminLoginReq') }}">
        @csrf
        <div class="text-center mb-5">
            <h1 class="display-4">Welcome Back ADMIN!</h1>
        </div>
        <hr>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="username">Your Username</label>
                    <input type="text" class="form-control form-control-lg" name="username" id="username"
                        placeholder="Markwilliams12" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-12">
                <div class="js-form-message form-group">
                    <label class="input-label" for="password">Type Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="password"
                        placeholder="**********" required>
                </div>
            </div>
        </div>
        <div class="js-form-message form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                <label class="custom-control-label text-muted" for="termsCheckbox">
                    Stay Logged In
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-block btn-primary mb-2">Sign In</button>
    </form>
@endsection
