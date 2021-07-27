
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('error') | {{ env('APP_NAME') }} - {{ env('APP_SHORT_DESC') }}</title>
    <link rel="shortcut icon" href="/favi.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css?v=1.0') }}">
  </head>
  <body>
    <main id="content" role="main" class="main">
      <div class="container">
        <a class="position-absolute top-0 left-0 right-0" href="index.html">
          <img class="avatar avatar-xl avatar-4by3 avatar-centered" src="{{ asset('assets/svg/logos/logo.svg') }}" alt="Image Description">
        </a>

        <div class="footer-height-offset d-flex justify-content-center align-items-center flex-column">
          <div class="row align-items-sm-center w-100">
            <div class="col-sm-6">
              <div class="text-center text-sm-right mr-sm-4 mb-5 mb-sm-0">
                <img class="w-60 w-sm-100 mx-auto" src="{{ asset('assets/svg/illustrations/sorry.svg') }}" alt="Image Description" style="max-width: 15rem;">
              </div>
            </div>

            <div class="col-sm-6 col-md-4 text-center text-sm-left">
              <h1 class="display-1 mb-0">@yield('error')</h1>
              <p class="lead">@yield('text')</p>
              <a class="btn btn-primary" href="{{ route('dashboard') }}">Go Back to App</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer text-center">
        <ul class="list-inline list-separator">
          <li class="list-inline-item">
            <a class="list-separator-link" href="#">Landing Page</a>
          </li>

          <li class="list-inline-item">
            <a class="list-separator-link" href="#">Support</a>
          </li>

          <li class="list-inline-item">
            <a class="list-separator-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </main>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
  </body>
</html>