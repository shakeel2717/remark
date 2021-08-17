<!-- Manage Tag Sidebar -->
<div id="customerSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-hover-shadow card-lg sidebar-card sidebar-footer-fixed">
        <div class="card-header">
            <h4 class="card-header-title">Add New Customer / Supplier</h4>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
                data-hs-unfold-options='{
                    "target": "#customerSidebar",
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
            <h3>Add new Customer / Supplier in System.</h3>
            <hr>
            <!-- Form Group -->
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <label for="name" class="col-12 col-form-label input-label">Full Name</label>
                    <div class="col-12">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <!-- Form Group -->
                <div class="js-add-field row form-group" data-hs-add-field-options='{
                    "template": "#addAddressFieldEgTemplate",
                    "container": "#addAddressFieldEgContainer",
                    "defaultCreated": 0
                    }'>
                    <label for="addressLineLabelEg1" class="col-12 col-form-label input-label">Email
                        (Optional)</span></label>

                    <div class="col-12">
                        <input type="text" class="form-control" name="email" id="addressLineLabelEg1"
                            placeholder="Email Address" aria-label="Email Address">

                        <!-- Container For Input Field -->
                        <div id="addAddressFieldEgContainer"></div>

                        <a href="javascript:;"
                            class="js-create-field form-link btn btn-sm btn-no-focus btn-ghost-primary">
                            <i class="tio-add"></i> Add Email Address
                        </a>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Add Phone Input Field -->
                <div id="addAddressFieldEgTemplate" style="display: none;">
                    <div class="input-group-add-field">
                        <input type="text" class="form-control" data-name="email" placeholder="Email Address"
                            aria-label="Email Address">

                        <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                            <i class="tio-clear"></i>
                        </a>
                    </div>
                </div>
                <!-- End Add Phone Input Field -->
                <div class="row form-group">
                    <label for="name" class="col-12 col-form-label input-label">Phone (Optional)</label>
                    <div class="col-12">
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="name" class="col-12 col-form-label input-label">Address (Optional)</label>
                    <div class="col-12">
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="supplier" class="col-12 col-form-label input-label">Select Customer / Supplier </label>
                    <div class="col-12">
                        <!-- Select2 -->
                        <select class="js-select2-custom custom-select" name="type" size="1" style="opacity: 0;">
                            <option value="0">Customer</option>
                            <option value="1">Supplier</option>
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add New Customer / Supplier</button>
                </div>
            </form>
            <hr>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer sidebar-footer">
            <button type="button" class="js-hs-unfold-invoker btn btn-block btn-primary" data-hs-unfold-options='{
            "target": "#customerSidebar",
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
