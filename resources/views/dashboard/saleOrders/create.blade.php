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
                    <h4 class="card-header-title">Add Sale Order Detail</h4>
                </div>
                <!-- End Header -->
                <!-- Body -->
                <div class="card-body">
                    <form action="{{ route('sale_orders.store') }}" method="POST">
                        @csrf
                        <div class="row form-group">
                            <label for="customer" class="col-12 col-form-label input-label">Select Customer <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                                "target": "#customerSidebar",
                                "type": "css-animation",
                                "animationIn": "fadeInRight",
                                "animationOut": "fadeOutRight",
                                "hasOverlay": true,
                                "smartPositionOff": true
                            }'>Add New Customer?</a></label>
                            
                            <div class="col-12">
                                <!-- Select2 -->
                                <select class="js-select2-custom custom-select" name="customer" size="1"
                                    style="opacity: 0;">
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>
                                <!-- End Select2 -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="warehouse" class="col-12 col-form-label input-label">Select Warehouse <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                                "target": "#warehouseSidebar",
                                "type": "css-animation",
                                "animationIn": "fadeInRight",
                                "animationOut": "fadeOutRight",
                                "hasOverlay": true,
                                "smartPositionOff": true
                            }'>Add New Warehouse?</a></label>
                            <div class="col-12">
                                <!-- Select2 -->
                                <select class="js-select2-custom custom-select" name="warehouse" size="1"
                                    style="opacity: 0;">
                                    @foreach ($warehouses as $warehouse)
                                        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                    @endforeach
                                </select>
                                <!-- End Select2 -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="txid" class="col-12 col-form-label input-label">Transaction Number</label>
                            <div class="col-12">
                                <input type="text" name="txid" id="txid" class="form-control" placeholder="Transaction Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Add Sale Order">
                        </div>
                    </form>
                    <x-customer  />
                    <x-warehouse  />
                </div>
                <!-- Body -->
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
