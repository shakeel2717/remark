<!-- Manage Tag Sidebar -->
<div id="warehouseSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-hover-shadow card-lg sidebar-card sidebar-footer-fixed">
        <div class="card-header">
            <h4 class="card-header-title">Contact Us</h4>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
                data-hs-unfold-options='{
                    "target": "#warehouseSidebar",
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
            <h3>Add new Warehouse in System.</h3>
            <hr>
            <!-- Form Group -->
            <form action="{{ route('warehouse.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <label for="name" class="col-12 col-form-label input-label">Name</label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <input type="text" name="name" id="name" class="form-control">
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="row form-group">
                    <label for="location" class="col-12 col-form-label input-label">Location</label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <input type="text" name="location" id="location" class="form-control">
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add New Warehouse</button>
                </div>
            </form>
            <hr>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer sidebar-footer">
            <button type="button" class="js-hs-unfold-invoker btn btn-block btn-primary" data-hs-unfold-options='{
            "target": "#warehouseSidebar",
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