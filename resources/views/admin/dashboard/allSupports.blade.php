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
                                <th>Category</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($allSupports as $user)
                                <tr>
                                    <td>
                                        <a class="media align-items-center" href="../user-profile.html">
                                            <div class="media-body">
                                                <span class="d-block h5 text-hover-primary mb-0">{{ $user->category }}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <span>{{ $user->description }}</span>
                                    </td>
                                    <td>
                                        <span class="d-block h5 mb-0"></span>{{ $user->status }}
                                    </td>
                                    <td>
                                        <span class="legend-indicator bg-success"></span>created_at
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
