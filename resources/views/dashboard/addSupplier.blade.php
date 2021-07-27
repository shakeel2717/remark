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
                <form action="{{ route('supplier.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="fname" class="input-label">First Name </label>
                                <input type="text" class="form-control" name="fname" id="fname"
                                    placeholder="First Name">
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="lname" class="input-label">Last Name </label>
                                <input type="text" class="form-control" name="lname" id="lname"
                                    placeholder="Last Name">
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <div class="col-md-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="email" class="input-label">Email </label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email">
                            </div>
                            <!-- End Form Group -->
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Add Supplier">
                    </div>
                </form>
            </div>
            <!-- Body -->
        </div>
        <!-- End Card -->
    </div>
</div>
@endsection
