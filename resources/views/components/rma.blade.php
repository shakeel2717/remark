<!-- Manage Tag Sidebar -->
<div id="rmaSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-hover-shadow card-lg sidebar-card sidebar-footer-fixed">
        <div class="card-header">
            <h4 class="card-header-title">Contact Us</h4>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
                data-hs-unfold-options='{
                    "target": "#rmaSidebar",
                    "type": "css-animation",
                    "animationIn": "fadeInRight",
                    "animationOut": "fadeOutRight",
                    "hasOverlay": true,
                    "smartPositionOff": true
                    }'>
                <i class="tio-clear tio-lg"></i>
            </a>
            <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
            <h3>New RMA</h3>
            <hr>
            <!-- Form Group -->
            <form action="{{ route('rma.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <label for="supplier" class="col-12 col-form-label input-label">Customer / Suppler </label>
                    <div class="col-12">
                        <!-- Select2 -->
                        <select class="js-select2-custom custom-select" name="type" size="1" style="opacity: 0;" id="selectionmanger">
                                <option>Choose RMA For</option>
                                <option value="0">RMA Customer</option>
                                <option value="1">RMA Supplier</option>
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="row form-group" id="customerSection">
                    <label for="customer" class="col-12 col-form-label input-label">Select Customer <a
                            class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                        "target": "#customerSidebar",
                        "type": "css-animation",
                        "animationIn": "fadeInRight",
                        "animationOut": "fadeOutRight",
                        "hasOverlay": true,
                        "smartPositionOff": true
                    }'>Add New Customer?</a></label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <select class="js-select2-custom custom-select" name="customer" size="1" style="opacity: 0;">
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="row form-group">
                    <label for="warehouse" class="col-12 col-form-label input-label">Warehouse <a
                        class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                    "target": "#warehouseSidebar",
                    "type": "css-animation",
                    "animationIn": "fadeInRight",
                    "animationOut": "fadeOutRight",
                    "hasOverlay": true,
                    "smartPositionOff": true
                }'>Add New Warehouse?</a></label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <select class="js-select2-custom custom-select" name="warehouse" size="1" style="opacity: 0;">
                            @foreach ($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                            @endforeach
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="row form-group" id="supplierSection">
                    <label for="supplier" class="col-12 col-form-label input-label">Supplier <a
                        class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                    "target": "#supplierSidebar",
                    "type": "css-animation",
                    "animationIn": "fadeInRight",
                    "animationOut": "fadeOutRight",
                    "hasOverlay": true,
                    "smartPositionOff": true
                }'>Add New Supplier?</a></label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <select class="js-select2-custom custom-select" name="supplier" size="1" style="opacity: 0;">
                            @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
            <hr>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer sidebar-footer">
            <button type="button" class="js-hs-unfold-invoker btn btn-block btn-primary" data-hs-unfold-options='{
            "target": "#rmaSidebar",
            "type": "css-animation",
            "animationIn": "fadeInRight",
            "animationOut": "fadeOutRight",
            "hasOverlay": true,
            "smartPositionOff": true
            }'>Done</button>
        </div>
        <!-- End Footer -->
    </div>
</div>
<!-- End Manage Tag Sidebar -->
