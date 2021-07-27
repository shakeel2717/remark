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
        <div class="col-12">
            <div class="card card-body mb-3 mb-lg-5">
                <div class="row gx-lg-4">
                    <div class="col-sm-6 col-lg-3">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="card-subtitle">Total Refund</h6>
                                <span class="card-title h3">$0.00</span>
                            </div>
                            <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                                <i class="tio-shop"></i>
                            </span>
                        </div>

                        <div class="d-lg-none">
                            <hr>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 column-divider-sm">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="card-subtitle">Refunded</h6>
                                <span class="card-title h3">$0.00</span>
                            </div>

                            <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                                <i class="tio-website"></i>
                            </span>
                        </div>

                        <div class="d-lg-none">
                            <hr>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 column-divider-lg">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="card-subtitle">Refund Due</h6>
                                <span class="card-title h3">$0.00</span>
                            </div>

                            <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                                <i class="tio-label-off"></i>
                            </span>
                        </div>

                        <div class="d-sm-none">
                            <hr>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 column-divider-sm">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="card-subtitle">Inventory Due</h6>
                                <span class="card-title h3">0</span>
                            </div>

                            <span class="icon icon-sm icon-soft-secondary icon-circle ml-3">
                                <i class="tio-users-switch"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow mb-4" id="addInventory" href="#">
                <div class="card-body">
                    <div class="media align-items-center">
                        <img class="avatar avatar-xl mr-4" src="{{ asset('assets/svg/illustrations/create.svg') }}"
                            alt="Image Description">

                        <div class="media-body">
                            <h3 class="text-hover-primary mb-1">Inventory</h3>
                            <span class="text-body">Add a new Inventory</span>
                        </div>

                        <div class="ml-2 text-right">
                            <i class="tio-chevron-right tio-lg text-body text-hover-primary"></i>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="card card-hover-shadow mb-4" href="#">
                <div class="card-body">
                    <div class="media align-items-center">
                        <img class="avatar avatar-xl mr-4" src="{{ asset('assets/svg/illustrations/choice.svg') }}"
                            alt="Image Description">

                        <div class="media-body">
                            <h3 class="text-hover-primary mb-1">Refund</h3>
                            <span class="text-body">Add Refund</span>
                        </div>

                        <div class="ml-2 text-right">
                            <i class="tio-chevron-right tio-lg text-body text-hover-primary"></i>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="card card-hover-shadow" href="#">
                <div class="card-body">
                    <div class="media align-items-center">
                        <img class="avatar avatar-xl mr-4" src="{{ asset('assets/svg/illustrations/presenting.svg') }}"
                            alt="Image Description">

                        <div class="media-body">
                            <h3 class="text-hover-primary mb-1">Delete</h3>
                            <span class="text-body">Delete This RMA</span>
                        </div>

                        <div class="ml-2 text-right">
                            <i class="tio-chevron-right tio-lg text-body text-hover-primary"></i>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </a>
            <!-- End Card -->
        </div>
        <div class="col-lg-8 mb-3 mb-lg-5">
            <div class="card mb-7">
                <!-- Header -->
                <div class="card-header">
                    <!-- Nav -->
                    <ul class="nav nav-segment" id="navTab1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav-resultTab1" data-toggle="pill" href="#lnventoryData"
                                role="tab" aria-controls="lnventoryData" aria-selected="true">lnventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-htmlTab1" data-toggle="pill" href="#refundData" role="tab"
                                aria-controls="refundData" aria-selected="false">Refund</a>
                        </li>
                    </ul>
                    <!-- End Nav -->
                </div>
                <!-- End Header -->

                <!-- Tab Content -->
                <div class="tab-content" id="navTabContent1">
                    <div class="tab-pane fade p-4 active show" id="lnventoryData" role="tabpanel"
                        aria-labelledby="nav-resultTab1">
                        <div class="card-body-height">
                            <!-- Table -->
                            <div class="table-responsive">
                                <table
                                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Change</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Sales</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <!-- Media -->
                                                <a class="media align-items-center"
                                                    href="./ecommerce-product-description.html">
                                                    <img class="avatar mr-3"
                                                        src="{{ asset('assets/img/400x400/img4.jpg') }}"
                                                        alt="Image Description">

                                                    <div class="media-body">
                                                        <h5 class="text-hover-primary mb-0">Photive wireless speakers</h5>
                                                    </div>
                                                </a>
                                                <!-- End Media -->
                                            </td>
                                            <td><i class="tio-trending-down text-danger mr-1"></i> 72%</td>
                                            <td>$65</td>
                                            <td>7,545</td>
                                            <td>
                                                <h4 class="mb-0">$15,302.00</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table -->
                        </div>
                        <!-- End Tab Content -->
                    </div>

                    <div class="tab-pane fade p-4" id="refundData" role="tabpanel" aria-labelledby="nav-htmlTab1">
                        <p>HI</p>
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
            <x-add-inventory />
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $("#addInventory").click(function() {
                $('#customersGuideModal').modal('show')
            });
        });
    </script>
@endsection
