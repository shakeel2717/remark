<!-- Manage Tag Sidebar -->
<div id="supplierSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-hover-shadow card-lg sidebar-card sidebar-footer-fixed">
        <div class="card-header">
            <h4 class="card-header-title">Contact Us</h4>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
                data-hs-unfold-options='{
                    "target": "#supplierSidebar",
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
            <h3>Our teams are at your service.</h3>
            <hr>
            <!-- Form Group -->
            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <label for="emailLabel" class="col-12 col-form-label input-label">First Name</label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <input type="text" name="fname" id="fname" class="form-control">
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="row form-group">
                    <label for="emailLabel" class="col-12 col-form-label input-label">Last Name</label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <input type="text" name="lname" id="lname" class="form-control">
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="row form-group">
                    <label for="emailLabel" class="col-12 col-form-label input-label">Email</label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <input type="email" name="email" id="email" class="form-control">
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Add This Supplier</button>
                </div>
            </form>
            <hr>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer sidebar-footer">
            <button type="button" class="js-hs-unfold-invoker btn btn-block btn-primary" data-hs-unfold-options='{
            "target": "#supplierSidebar",
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