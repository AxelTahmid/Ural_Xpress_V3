<div class="page-header">
    <h1>Manage Marchant</h1>
</div><!-- /.page-header -->

<div class="merchant-table">
    <div class="col-xs-12">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover ">
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
                <?php
                foreach ($all_merchant as $v_merchant) {
                ?>

                    <tr>
                        <th scope="row" class="center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="merchant_no_<?php echo (string) $v_merchant->merchant_id ?>">
                                <label class="custom-control-label" for="merchant_no_<?php echo (string) $v_merchant->merchant_id ?>"><?php echo $v_merchant->merchant_id ?></label>
                            </div>
                        </th>
                        <td><img style="width:100px; height:100px" src="<?php echo $v_merchant->merchant_img; ?>" alt="merchant image" /></td>
                        <td><?php echo $v_merchant->merchant_name; ?></td>
                        <td><?php echo $v_merchant->merchant_phone; ?></td>
                        <td><?php echo $v_merchant->merchant_email; ?></td>
                        <td><?php echo $v_merchant->merchant_business_name; ?></td>
                        <td><?php echo $v_merchant->merchant_business_type; ?></td>
                        <td><?php echo $v_merchant->merchant_pickup_address; ?></td>
                        <td><?php echo $v_merchant->merchant_pickup_area; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </td>

                    <?php } ?>
            </tbody>


        </table>
    </div>
</div><!-- /.span -->
</div><!-- /.row -->