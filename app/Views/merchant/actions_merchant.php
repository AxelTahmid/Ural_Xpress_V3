<!-- Modal -->
<div class="modal fade" id="merchantModal" tabindex="-1" role="dialog" aria-labelledby="merchantModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="merchantModalForm" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="merchantModalLabel">Merchant</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <span id="mer_name_err" class="text-danger"></span>
                                <input type="text" name="mer_name" id="mer_name" class="form-control" placeholder="Merchant Name" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <span id="mer_phone_err" class="text-danger"></span>
                                <input type="text" name="mer_phone" id="mer_phone" class="form-control" placeholder="Merchant Phone" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <span id="business_name_err" class="text-danger"></span>
                                <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Business Name" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <span id="business_type_err" class="text-danger"></span>
                                <input type="text" name="business_type" id="business_type" class="form-control" placeholder="Business Type" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <span id="pickup_add_err" class="text-danger"></span>
                                <input type="text" name="pickup_add" id="pickup_add" class="form-control" placeholder="Pickup Address" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <span id="pickup_area_err" class="text-danger"></span>
                                <input type="text" name="pickup_area" id="pickup_area" class="form-control" placeholder="Pickup Area" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <span id="mer_email_err" class="text-danger"></span>
                                <input type="text" name="mer_email" id="mer_email" class="form-control" placeholder="Merchant Email" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <span id="image_url_err" class="text-danger"></span>
                                <input type="file" name="image_url" id="image_url" class="form-control" multiple="true" accept="image/*" placeholder="Profile Image URL" onchange="readImageData(this);" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="submit" name="submit" id="submit_button" class="btn btn-outline-dark" value="Save Changes" />

                </div>
            </div>
        </form>
    </div>
</div>