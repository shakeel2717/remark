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
    <div class="row">
        <div class="col-12 mb-3">
            <div class="text-center">
                <img class="img-fluid mb-5" src="{{ asset('assets/svg/illustrations/think.svg') }}"
                    alt="Image Description" style="max-width: 21rem;" width="150">
                <h1>Service Client!</h1>
                <p>Our teams are at your service.</p>
                <a class="btn btn-primary btn-lg js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                        "target": "#supportSidebar",
                        "type": "css-animation",
                        "animationIn": "fadeInRight",
                        "animationOut": "fadeOutRight",
                        "hasOverlay": true,
                        "smartPositionOff": true
                    }'>
                    <i class="tio-help mr-1"></i> Contact Us
                </a>
            </div>
        </div>
        <div class="col-8 mx-auto">
            @foreach ($support as $message)
                <!-- Card -->
                <div class="card card-hover-shadow">
                    <div class="card-body">
                        <h3 class="card-title">{{ $message->category }}</h3>
                        <p class="card-text">{{ $message->description }}.</p>
                    </div>
                    <div class="card-footer">
                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans() }}
                    </div>
                </div>
                <!-- End Card -->
            @endforeach
        </div>
        <x-support />
    </div>
@endsection
