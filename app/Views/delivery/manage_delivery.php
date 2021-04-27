<?= $this->include('delivery/add_delivery') ?>

<div class="container box">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header">
                <h2>Manage Delivery
                    <button type="button" name="create_invoice" id="create_invoice" class="btn btn-outline-dark float-right"> Create Invoice</button>
                    <!-- <a href=" base_url('create_invoice');" role="button" class="btn btn-outline-dark float-right" data-toggle="modal" data-target="#deliveryModal">
                        Create Invoice
                    </a> -->
                </h2>
            </div>
        </div>

        <div class="col-md-12">
            <br />
            <span id="err_message"></span>
        </div>

        <div class="col-md-12">
            <div class="table-responsive">
                <table id="deliveryTable" class="table table-striped table-bordered table-hover ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Invoice Amount</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Reciever Name</th>
                            <th scope="col">Reciever Phone</th>
                            <th scope="col">Delivery Address</th>
                            <th scope="col">Delivery Area</th>
                            <th scope="col">Delivery Instructions</th>
                            <th scope="col">Delivery Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div><!-- /.span -->
    </div><!-- /.row -->
</div>