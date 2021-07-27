<!-- Manage Tag Sidebar -->
<div id="supportSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
    <div class="card card-hover-shadow card-lg sidebar-card sidebar-footer-fixed">
        <div class="card-header">
            <h4 class="card-header-title">Contact Us</h4>

            <!-- Toggle Button -->
            <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
                data-hs-unfold-options='{
                    "target": "#supportSidebar",
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
            <form action="{{ route('support.store') }}" method="POST">
                @csrf
                <div class="row form-group">
                    <label for="emailLabel" class="col-12 col-form-label input-label">CATEGORY*</label>

                    <div class="col-12">
                        <!-- Select2 -->
                        <select class="js-select2-custom custom-select" name="category" size="1" style="opacity: 0;">
                            <option value=""> Please select a category</option>
                            <option value="BILLING"> Billing and contracts</option>
                            <option value="DEVICE"> Problem with a computer</option>
                            <option value="DEVICE_ACCESSORIES"> --- Chargers and accessories</option>
                            <option value="DEVICE_KEYBOARD"> --- Keyboard</option>
                            <option value="DEVICE_ISSUE_AT_RECEPTION"> --- Problem at reception</option>
                            <option value="DEVICE_SYSTEM"> --- System</option>
                            <option value="DEVICE_SERIAL"> --- Enter a serial number</option>
                            <option value="DEVICE_STOLEN"> --- Breakage and theft</option>
                            <option value="ORDER"> Question about my order</option>
                            <option value="SERVICE"> Service Fleet et Cockpit</option>
                        </select>
                        <!-- End Select2 -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="newTag" class="input-label">DESCRIPTION <i class="tio-help-outlined text-body ml-1"
                            data-toggle="tooltip" data-placement="top" title="Type Tags for this Device."></i></label>

                    <textarea id="exampleFormControlTextarea1" name="description" class="form-control" placeholder="Please specify the subject of your request"
                        rows="8" spellcheck="false"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send to {{ env('APP_NAME') }} Team</button>
                </div>
            </form>
            <hr>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="card-footer sidebar-footer">
            <button type="button" class="js-hs-unfold-invoker btn btn-block btn-primary" data-hs-unfold-options='{
            "target": "#supportSidebar",
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
