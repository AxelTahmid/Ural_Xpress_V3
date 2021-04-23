<div class="container box">
    <div class="page-header d-flex justify-content-center">
        <h1>Manage Delivery</h1> <br />
    </div><!-- /.page-header -->

    <div class="d-flex justify-content-end">
        <a role="button" class="btn btn-outline-dark">Add Delivery</a>
    </div><br />
    <div id="alert_message"></div>

    <div class="table-responsive">
        <div class="col-xs-12">
            <table id="dynamicTable" class="table table-striped table-bordered table-hover ">
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
                        <th scope="col">Published</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($all_delivery as $deliveries) {
                    ?>

                        <tr>
                            <th scope="row" class="center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="merchant_no_<?php echo (string) $deliveries->delivery_id ?>">
                                    <label class="custom-control-label" for="merchant_no_<?php echo (string) $deliveries->delivery_id ?>"><?php echo $deliveries->delivery_id ?></label>
                                </div>
                            </th>
                            <td><?php echo $deliveries->delivery_invoice_no; ?></td>
                            <td><?php echo $deliveries->delivery_invoice_amount; ?></td>
                            <td><?php echo $deliveries->delivery_payment_status; ?></td>
                            <td><?php echo $deliveries->recipient_name; ?></td>
                            <td><?php echo $deliveries->recipient_phone; ?></td>
                            <td><?php echo $deliveries->recipient_address; ?></td>
                            <td><?php echo $deliveries->recipient_area; ?></td>
                            <td><?php echo $deliveries->recipient_instructions; ?></td>
                            <td><?php echo $deliveries->delivery_status; ?></td>
                            <td><?php echo $deliveries->publication_status; ?></td>

                            <td>
                                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                            </td>

                        <?php } ?>
                </tbody>


            </table>
        </div>
    </div><!-- /.span -->
</div><!-- /.row -->
</div>