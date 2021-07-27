@extends('dashboard.layout.app')
@section('title')
Dashboard
@endsection
@section('content')
<x-alert />
<div class="row">
    <div class="col-lg-8 mx-auto">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <h4 class="card-header-title">Add Supplier</h4>
            </div>
            <!-- End Header -->
            <!-- Body -->
            <div class="card-body">
                <form action="{{ route('warehouse.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="name" class="input-label">Warehouse Name </label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Warehouse Name">
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="location" class="input-label">Warehouse Location </label>
                                <input type="text" class="form-control" name="location" id="location"
                                    placeholder="Warehouse Location">
                            </div>
                            <!-- End Form Group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Add Warehouse">
                    </div>
                </form>
            </div>
            <!-- Body -->
        </div>
        <!-- End Card -->
    </div>
</div>
@endsection