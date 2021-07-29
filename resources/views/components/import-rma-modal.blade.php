<!-- Customers Guide Modal -->
<div class="modal fade" id="importRmaModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                <form action="{{ route('import_rma_refund.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <!-- File Attachment Input -->
                                <label class="custom-file-boxed" for="import_file">
                                    <span id="customFileBoxedEg">Upload Excel File to Import.</span>
                                    <small class="d-block text-muted">Maximum file size 10MB</small>
                                    <input id="import_file" name="import_file" type="file"
                                        class="js-file-attach custom-file-boxed-input" data-hs-file-attach-options='{
                                               "textTarget": "#customFileBoxedEg"
                                             }'>
                                </label>
                                <!-- End File Attachment Input -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="submit" value="Start Importing" class="btn btn-primary btn-block">
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
