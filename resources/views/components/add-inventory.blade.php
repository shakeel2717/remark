<!-- Customers Guide Modal -->
<div class="modal fade" id="customersGuideModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <h4 class="h1">Add Inventory in RMA</h4>
                </div>
                <form action="{{ route('add_inventory.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="serial">Serial Number</label>
                                <input type="text" name="serial" id="serial" class="form-control"
                                    placeholder="Serial Number">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model" id="model" class="form-control" placeholder="Model">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="issue">Issue</label>
                                <input type="text" name="issue" id="issue" class="form-control" placeholder="Issue">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="sale_price">Sales Price</label>
                                <input type="text" name="sale_price" id="sale_price" class="form-control"
                                    placeholder="Sales Price">
                                <input type="hidden" name="rma_id" value="{{ $rma->id }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="sale_price">Reasons</label>
                                    <!-- Select2 -->
                                    <select class="js-select2-custom custom-select" name="reason" size="1" style="opacity: 0;">
                                        @foreach ($reasons as $reason)
                                            <option value="{{ $reason->id }}">{{ $reason->value }}</option>
                                        @endforeach
                                    </select>
                                    <!-- End Select2 -->
                                <input type="hidden" name="rma_id" value="{{ $rma->id }}">
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                              <input type="submit" value="Submit" class="btn btn-primary btn-block">
                          </div>
                      </div>
                    </div>
                </form>
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Close This</button>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Customers Guide Modal -->
