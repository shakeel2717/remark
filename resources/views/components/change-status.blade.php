<!-- Customers Guide Modal -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-close">
                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal"
                    aria-label="Close">
                    <i class="tio-clear tio-lg"></i>
                </button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body p-sm-5">
                <div class="text-center mb-5">
                    <h4 class="h1">Import Excel Inventory in RMA</h4>
                </div>
                <form action="{{ route('rmaStatusChange') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="hidden" name="rmaId" value="{{ $rma->id }}">
                                <!-- Select2 -->
                                <select class="js-select2-custom custom-select" name="status" size="1"
                                    style="opacity: 0;">
                                    <option value="New">New</option>
                                    <option value="Recieved">Recieved</option>
                                    <option value="Resolved">Resolved</option>
                                </select>
                                <!-- End Select2 -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="submit" value="Change Status" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Start
                    Importing</button>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Customers Guide Modal -->
