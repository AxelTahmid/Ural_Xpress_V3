<?= $this->include('merchant/actions_merchant') ?>

<div class="container box">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header">
                <h2>Manage Merchant
                    <button type="button" name="add_merchant" id="add_merchant" class="btn btn-outline-dark float-right">Add Merchant</button>
                </h2>
            </div>
        </div>

        <div class="col-md-12">
            <br />
            <span id="err_message"></span>
        </div>

        <div class="col-md-12 ">
            <div class="table-responsive">
                <table id="merchantTable" class="table table-striped table-bordered table-hover table-sm ">
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
                </table>
            </div><!-- /.span -->
        </div><!-- /.row -->
    </div>