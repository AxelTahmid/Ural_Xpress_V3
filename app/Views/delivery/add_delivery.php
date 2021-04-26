<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-header">
                            <h3>Create Invoice
                                <a href="<?= base_url('view_delivery'); ?>" role="button" class="btn btn-outline-dark float-right">
                                    <i class="fas fa-times"></i>
                                </a>
                            </h3>
                        </div><!-- /.page-header -->
                    </div>


                </div>
                <hr>
                <form action=" <?= base_url('create_invoice'); ?>" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="recipient_name" id="" class="form-control" placeholder="Recipient Name" required></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="recipient_phone" id="" class="form-control" placeholder="Recipient Phone" required></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="delivery_address" id="" class="form-control" placeholder="Delivery Address" required></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="delivery_area" id="" class="form-control" placeholder="Delivery Area" required></input>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="instructions" id="" class="form-control" placeholder="Instructions" required></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="text" name="invoice" id="" class="form-control" placeholder="Invoice Number" required></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input type="number" name="invoice_amount" id="" class="form-control" placeholder="Invoice Amount" required></input>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="deliverystatus" required>
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
                                <select class="form-control" name="payment" required>
                                    <option selected>Payment Status...</option>
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Paid</option>
                                </select>
                            </div>
                        </div>
                        <!-- dont forget to parse delivery_recipient_id FK from $db->insertID(); -->

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="publication" id="" class="form-control" placeholder="Publication Status" required></input>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button style="width:100%" type="submit" class="btn btn-outline-dark">Save Invoice</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>