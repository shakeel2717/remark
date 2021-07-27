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
                                <h5 class="card-header-title">All Completed Supprts Request</h5>
                                <a class="btn btn-primary js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                                    "target": "#supportSidebar",
                                    "type": "css-animation",
                                    "animationIn": "fadeInRight",
                                    "animationOut": "fadeOutRight",
                                    "hasOverlay": true,
                                    "smartPositionOff": true
                                }'>
                                    <i class="tio-user-add mr-1"></i> Add supports
                                  </a>
                                  <x-support  />
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
                                <th>Type</th>
                                <th>Description</th>
                                <th>Create Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($supports as $support)
                                <tr>
                                    <td>
                                        <a class="media align-items-center" href="{{ route('employees') }}">
                                            <div class="media-body">
                                                <span class="d-block h5 text-hover-primary mb-0"> {{ $support->category }} </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">{{ $support->description }}</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($support->created_at))->diffForHumans() }}</span>
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
                        {{ $supports->links() }}
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
