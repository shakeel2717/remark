@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="row">
  <div class="col-12">
      <x-email-alert />
  </div>
</div>
<div class="row justify-content-sm-center text-center py-10">
    <div class="col-sm-7 col-md-5">
      <img class="img-fluid mb-5" src="{{ asset('assets/svg/illustrations/graphs.svg') }}" alt="Image Description" style="max-width: 21rem;">

      <h1>Nothing to Show in Dashboard!</h1>
      <p>Becuase for Dashboard, there is no Plan yet.!</p>
    </div>
  </div>
@endsection