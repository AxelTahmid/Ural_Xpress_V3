<!-- Modal -->
<div class="modal fade" id="deliveryModal" tabindex="-1" role="dialog" aria-labelledby="deliveryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="deliveryModalForm" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deliveryModalLabel">Invoice</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="recipient_name_err" class="text-danger"></span>
                                <input type="text" name="recipient_name" id="recipient_name" class="form-control" placeholder="Recipient Name"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="recipient_phone_err" class="text-danger"></span>
                                <input type="text" name="recipient_phone" id="recipient_phone" class="form-control" placeholder="Recipient Phone"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="delivery_address_err" class="text-danger"></span>
                                <input type="text" name="delivery_address" id="delivery_address" class="form-control" placeholder="Delivery Address"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="delivery_area_err" class="text-danger"></span>
                                <input type="text" name="delivery_area" id="delivery_area" class="form-control" placeholder="Delivery Area"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="invoice_err" class="text-danger"></span>
                                <input type="text" name="invoice" id="invoice" class="form-control" placeholder="Invoice Number"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="invoice_amount_err" class="text-danger"></span>
                                <input type="number" name="invoice_amount" id="invoice_amount" class="form-control" placeholder="Invoice Amount"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="deliverystatus_err" class="text-danger"></span>
                                <select class="form-control" name="deliverystatus" id="deliverystatus">
                                    <option selected>Delivery Status...</option>
                                    <option>Processing</option>
                                    <option>Dispatched</option>
                                    <option>On Hold</option>
                                    <option>Delivered</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="payment_err" class="text-danger"></span>
                                <select class="form-control" name="payment" id="payment">
                                    <option selected>Payment Status...</option>
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Paid</option>
                                </select>
                            </div>
                        </div>
                        <!-- dont forget to parse delivery_recipient_id FK from $db->insertID(); -->
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="instructions_err" class="text-danger"></span>
                                <input type="text" name="instructions" id="instructions" class="form-control" placeholder="Instructions"></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <span id="publication_err" class="text-danger"></span>
                                <input type="text" name="publication" id="publication" class="form-control" placeholder="Publication Status"></input>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="submit" name="submit" id="submit_button" class="btn btn-outline-dark" value="Save Changes" />

                    <!-- <button type="button" class="btn btn-outline-dark ajaxInvoiceSave">Save Changes</button> -->
                </div>
            </div>
        </form>
    </div>
</div>