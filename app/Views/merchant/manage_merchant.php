<!-- on button click add and edit have the same form show up with different conditions to add or edit -->
<div class="container box">
    <div class="page-header d-flex justify-content-center">
        <h1>Manage Merchant</h1> <br />
    </div><!-- /.page-header -->

    <div class="d-flex justify-content-end">
        <a href="<?= base_url('add_merchant'); ?>" role="button" class="btn btn-outline-dark">Add Merchant</a>
    </div><br />

    <div class="table-responsive">
        <div class="col-xs-12">
            <table id="dynamicTable" class="table table-striped table-bordered table-hover table-sm ">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Business Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Pickup Address</th>
                        <th scope="col">Pickup Area</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($all_merchant as $v_merchant) : ?>
                        <tr>
                            <th scope="row">
                                <?php echo $v_merchant->merchant_id ?>
                            </th>
                            <td><img style="width:100px; height:100px" src="<?= base_url('uploads/' . $v_merchant->merchant_img) ?>" alt="merchant image" /></td>
                            <td><?php echo $v_merchant->merchant_name; ?></td>
                            <td><?php echo $v_merchant->merchant_phone; ?></td>
                            <td><?php echo $v_merchant->merchant_email; ?></td>
                            <td><?php echo $v_merchant->merchant_business_name; ?></td>
                            <td><?php echo $v_merchant->merchant_business_type; ?></td>
                            <td><?php echo $v_merchant->merchant_pickup_address; ?></td>
                            <td><?php echo $v_merchant->merchant_pickup_area; ?></td>
                            <td>
                                <a href="<?= base_url('edit_merchant/' . $v_merchant->merchant_id) ?>" class="btn btn-success btn-sm" role="button">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('delete_merchant/' . $v_merchant->merchant_id) ?>" class="btn btn-danger btn-sm" role="button" onclick="return delete_confirtmation();">
                                    <i class="far fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>
        </div><!-- /.span -->
    </div><!-- /.row -->
</div>