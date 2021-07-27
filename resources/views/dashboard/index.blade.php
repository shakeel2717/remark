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

      <h1>No aircraft in my fleet!</h1>
      <p>You are now minutes away for adding Devices for Rent than ever before. Enjoy!</p>
    </div>
  </div>
@endsection