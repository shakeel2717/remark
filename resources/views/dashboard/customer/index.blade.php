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
                            <h5 class="card-header-title">All Supplier List</h5>
                            <a class="btn btn-primary js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                                    "target": "#customerSidebar",
                                    "type": "css-animation",
                                    "animationIn": "fadeInRight",
                                    "animationOut": "fadeOutRight",
                                    "hasOverlay": true,
                                    "smartPositionOff": true
                                }'>
                                <i class="tio-user-add mr-1"></i> Add Customer
                            </a>
                            <x-customer />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive ">
                <table id="" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>RMA</th>
                            <th>Date</th>
                            <th>Detail</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($allCustomers as $customer)
                        <tr>
                            <td>
                                <a class="media align-items-center" href="">
                                    <div class="media-body">
                                        <span class="d-block h5 text-hover-primary mb-0"> {{ $loop->iteration }} </span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0"><a href="{{ route('customer.show',['customer' => $customer->id]) }}">{{ $customer->name }}</a></span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0"><?php
                                                                $checkExistRama = DB::table('rmas')->where('customer_id', $customer->id)->first();
                                                                if ($checkExistRama != "") {
                                                                ?>
                                        <a href="{{ route('rma.show',['rma' => $customer->id]) }}">Go to RMA</a>
                                    <?php
                                                                } else {
                                                                    echo "No RMA.";
                                                                }
                                    ?></span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($customer->created_at))->diffForHumans() }}</span>
                            </td>
                            <td>
                                <span class="d-block h5 mb-0"><button class="btn btn-white" id="customerbox{{ $loop->iteration }}" data-toggle="modal" data-target="#customermoda{{$loop->iteration}}">Detail</button></span>
                                    <!-- Modal -->
                                <div id="customermoda{{$loop->iteration}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="customermoda{{$loop->iteration}}Title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- Header -->
                                            <div class="modal-top-cover bg-dark text-center">
                                                <figure class="position-absolute right-0 bottom-0 left-0" style="margin-bottom: -1px;">
                                                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                                                    </svg>
                                                </figure>

                                                <div class="modal-close">
                                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal" aria-label="Close">
                                                        <svg width="16" height="16" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Header -->

                                            <div class="modal-top-cover-icon">
                                                <span class="icon icon-lg icon-light icon-circle icon-centered shadow-soft">
                                                    <i class="tio-receipt-outlined"></i>
                                                </span>
                                            </div>

                                            <div class="modal-body">
                                                <p>Full Name:</p>
                                                <p>{{ $customer->name }}</p> <br>
                                                <p>Email:</p>
                                                <p>{{ $customer->email }}</p> <br>
                                                <p>Phone:</p>
                                                <p>{{ $customer->phone }}</p> <br>
                                                <p>Address:</p>
                                                <p>{{ $customer->address }}</p> <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
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
                    {{ $allCustomers->links() }}
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
</div>
@endsection