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
                        <span class="js-counter display-4 text-dark" data-value="24">{{count($totalRma)}}</span>
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
                        <span class="js-counter display-4 text-dark" data-value="24">{{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($addInventory->sum('sale_price'),2) }}</span>
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
                        <span class="js-counter display-4 text-dark" data-value="24">{{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($rmaRefunds->sum('amount'),2) }}</span>
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
                        <span class="js-counter display-4 text-dark" data-value="24">{{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($addInventory->sum('sale_price') - $rmaRefunds->sum('amount'),2) }}</span>
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
                    <hr>
                    <li class="pt-2 pb-0">
                        <small class="card-subtitle">Gross Total Refund</small>
                    </li>

                    <li>
                        <i class="tio-money nav-icon"></i>
                        {{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($addInventory->sum('sale_price'),2) }}
                    </li>
                    <li class="pt-2 pb-0">
                        <small class="card-subtitle">Total Refund DUE</small>
                    </li>

                    <li>
                        <i class="tio-money nav-icon"></i>
                        {{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($addInventory->sum('sale_price') - $rmaRefunds->sum('amount'),2) }}
                    </li>
                </ul>
            </div>
            <!-- End Body -->
        </div>
        <!-- End Card -->
    </div>

    <div class="col-lg-8">
        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-12 col-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header-title">All RMAs List</h5>
                            <a class="btn btn-primary js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                                    "target": "#rmaSidebar",
                                    "type": "css-animation",
                                    "animationIn": "fadeInRight",
                                    "animationOut": "fadeOutRight",
                                    "hasOverlay": true,
                                    "smartPositionOff": true
                                }' id="addRMAAction">
                                <i class="tio-user-add mr-1"></i> Add RMAs
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive ">
                <table id=""
                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Customer / Supplier</th>
                            <th>Total Refund</th>
                            <th>Refunded</th>
                            <th>Refund Due</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($totalRma as $rma)
                        <tr>
                            <td>
                                <a class="media align-items-center" href="">
                                    <div class="media-body">
                                        <span class="d-block h5 text-hover-primary mb-0"> <a
                                                href="{{ route('rma.show',['rma' => $rma->id]) }}">RMA #{{
                                                $loop->iteration }}</a> </span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">{{
                                    \Carbon\Carbon::createFromTimeStamp(strtotime($rma->created_at))->diffForHumans()
                                    }}</span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">@php
                                    $query = DB::table('customers')->find($rma->customer_id);
                                    @endphp
                                    <a href="{{ route('customer.show',['customer' => $rma->customer_id]) }}">{{$query->name}}</a>
                                </span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">@php
                                    $addInventory = DB::table('add_inventories')->where(['users_id' =>
                                    session('user')[0]->id , 'rma_id' => $rma->id])->get();
                                    @endphp
                                    {{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($addInventory->sum('sale_price'),2)
                                    }}
                                </span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">@php
                                    $rmaRefunds = DB::table('rma_refunds')->where(['users_id' => session('user')[0]->id
                                    , 'rma_id' => $rma->id])->get();
                                    @endphp
                                    {{ env('APP_CURRENCY_SYMBOL') }}{{ number_format($rmaRefunds->sum('amount'),2) }}
                                </span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">{{ env('APP_CURRENCY_SYMBOL') }}{{
                                    number_format($addInventory->sum('sale_price') - $rmaRefunds->sum('amount'),2)
                                    }}</span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">{{ $rma->status }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
                <div class="d-flex justify-content-center justify-content-sm-end">
                    {{ $totalRma->links() }}
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
</div>
@endsection