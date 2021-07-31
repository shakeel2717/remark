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
    <div class="col-lg-4">
        <!-- Card -->
        <div class="js-sticky-block card mb-3 mb-lg-5" data-hs-sticky-block-options="{
                       &quot;parentSelector&quot;: &quot;#accountSidebarNav&quot;,
                       &quot;breakpoint&quot;: &quot;lg&quot;,
                       &quot;startPoint&quot;: &quot;#accountSidebarNav&quot;,
                       &quot;endPoint&quot;: &quot;#stickyBlockEndPoint&quot;,
                       &quot;stickyOffsetTop&quot;: 20
                     }" style="">
            <!-- Header -->
            <div class="card-header">
                <h5 class="card-header-title">Profile</h5>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
                <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
                    <li class="py-0">
                        <small class="card-subtitle">About</small>
                    </li>

                    <li>
                        <i class="tio-user-outlined nav-icon"></i>
                        {{$customer->name}}
                    </li>

                    <li class="pt-2 pb-0">
                        <small class="card-subtitle">Contacts</small>
                    </li>

                    <li>
                        <i class="tio-online nav-icon"></i>
                        {{$customer->email}}
                    </li>
                    <li>
                        <i class="tio-android-phone-vs nav-icon"></i>
                        {{$customer->phone}}
                    </li>

                    <li class="pt-2 pb-0">
                        <small class="card-subtitle">Address</small>
                    </li>

                    <li>
                        <i class="tio-briefcase-outlined nav-icon"></i>
                        {{$customer->address}}
                    </li>
                </ul>
            </div>
            <!-- End Body -->
        </div>
        <!-- End Card -->
    </div>

    <div class="col-lg-8">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <h5 class="card-header-title">Activity stream</h5>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body card-body-height" style="height: 30rem;">
                <h3 class="card-title">RMA History</h3>
                <hr>
                @foreach($rmaHistories as $rmaHistory)
                <!-- Step -->
                <ul class="step">
                    <li class="step-item">
                        <div class="step-content-wrapper">
                            <span class="step-icon step-icon-soft-primary">{{$loop->iteration}}</span>
                            <div class="step-content">
                                <h4>{{$rmaHistory->title}}</h4>
                                <p class="step-text">{{$rmaHistory->value}}</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- End Step -->
                @endforeach
            </div>
            <!-- End Body -->
        </div>
        <!-- End Card -->
    </div>
</div>
@endsection