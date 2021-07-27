@extends('admin.dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <!-- Card -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-header-title">All Users</h4>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table id="basicDatatable"
                        class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                        data-hs-datatables-options='{
                   "order": []
                 }'>
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($allUsers as $user)
                                <tr>
                                    <td>
                                        <a class="media align-items-center" href="../user-profile.html">
                                            <div class="media-body">
                                                <span class="d-block h5 text-hover-primary mb-0">{{ $user->fname }}
                                                    {{ $user->lname }} <i class="tio-verified text-primary"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Top endorsed"></i></span>
                                                <span class="d-block font-size-sm text-body">{{ $user->email }}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0">{{ $user->city }}</span>
                                        <span class="d-block font-size-sm">{{ $user->country }}</span>
                                    </td>
                                    <td>
                                        <span class="legend-indicator bg-success"></span>{{ $user->status }}
                                    </td>
                                </tr>

                            @empty
                                <h3 class="text-center">No Record Found</h3>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
