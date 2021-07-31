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
<div class="row gx-2 gx-lg-3">
    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="card-subtitle mb-2">Total RMAs</h6>

                <div class="row align-items-center gx-2">
                    <div class="col">
                        <span class="js-counter display-4 text-dark" data-value="24">{{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($addInventory->sum('sale_price'),2) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="card-subtitle mb-2">Total Refund</h6>

                <div class="row align-items-center gx-2">
                    <div class="col">
                        <span class="js-counter display-4 text-dark" data-value="24">24</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="card-subtitle mb-2">Total Refunded</h6>

                <div class="row align-items-center gx-2">
                    <div class="col">
                        <span class="js-counter display-4 text-dark" data-value="24">24</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="card-subtitle mb-2">Refund Due</h6>

                <div class="row align-items-center gx-2">
                    <div class="col">
                        <span class="js-counter display-4 text-dark" data-value="24">24</span>
                    </div>
                </div>
            </div>
        </div>
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
            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
                <div class="d-flex justify-content-center justify-content-sm-end">
                    {{ $rmaHistories->links() }}
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
</div>
@endsection