<div class="container box">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header">
                <h2 class="">Manage Delivery
                    <a href="<?= base_url('create_invoice'); ?>" role="button" class="btn btn-outline-dark float-right">
                        Create Invoice
                    </a>
                </h2>
            </div>
        </div>

        <div class="col-md-12">
            <br />
        </div>

        <div class="col-md-12">
            <div class="table-responsive">
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
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($all_delivery as $deliveries) : ?>

                            <tr>
                                <th scope="row">
                                    <?php echo $deliveries->delivery_id ?>
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

                                <td>
                                    <a href="<?= base_url('edit_invoice/' . $deliveries->delivery_id) ?>" class="btn btn-success btn-sm" role="button">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('delete_invoice/' . $deliveries->delivery_id) ?>" class="btn btn-danger btn-sm" role="button" onclick="return delete_confirtmation();">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>

                            <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div><!-- /.span -->
    </div><!-- /.row -->
</div>