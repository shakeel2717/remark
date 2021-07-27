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
    <div class="row ">
        <div class="col-12">
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
                                }'>
                                    <i class="tio-user-add mr-1"></i> Add RMAs
                                  </a>
                                  <x-rma :warehouses="$warehouses" :customers="$customers" :suppliers="$suppliers" />
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
                                <th>Customer</th>
                                <th>Inventory Count</th>
                                <th>Refund Amount</th>
                                <th>Refunded</th>
                                <th>Refund Due</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($rmas as $rma)
                                <tr>
                                    <td>
                                        <a class="media align-items-center" href="">
                                            <div class="media-body">
                                                <span class="d-block h5 text-hover-primary mb-0"> <a href="{{ route('rma.show',['rma' => $rma->id]) }}">RMA #{{ $loop->index }}</a> </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($rma->created_at))->diffForHumans() }}</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">{{ $rma->customer }}</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">0</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">0</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">0</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">0</span>
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
                <x-customer />
                <x-warehouse />
                <x-supplier />
                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        {{ $rmas->links() }}
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection