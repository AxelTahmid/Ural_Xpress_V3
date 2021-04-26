<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-header">
                            <h3>Edit Merchant
                                <a href="<?= base_url('view_merchant'); ?>" role="button" class="btn btn-outline-dark float-right">
                                    <i class="fas fa-times"></i>
                                </a>
                            </h3>
                        </div><!-- /.page-header -->
                    </div>


                </div>
                <hr>
                <form class="" action="<?= base_url('edit_merchant/' . $find_merchant->merchant_id); ?>" method="post" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="_method" value="PUT" /> -->

                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_name ?>" type="text" name="mer_name" id="" class="form-control" placeholder="Merchant Name"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_phone ?>" type="text" name="mer_phone" id="" class="form-control" placeholder="Merchant Phone"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_business_name ?>" type="text" name="business_name" id="" class="form-control" placeholder="Business Name"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_business_type ?>" type="text" name="business_type" id="" class="form-control" placeholder="Business Type"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_pickup_address ?>" type="text" name="pickup_add" id="" class="form-control" placeholder="Pickup Address"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_pickup_area ?>" type="text" name="pickup_area" id="" class="form-control" placeholder="Pickup Area"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input required value="<?= $find_merchant->merchant_email ?>" type="text" name="mer_email" id="" class="form-control" placeholder="Merchant Email"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input type="file" name="image_url" class="form-control" placeholder="Profile Image URL" required> </input>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="current_img">Current Merchant Image</label>
                            <img id="current_img" style="width:100px; height:100px" src="<?= base_url('uploads/' . $find_merchant->merchant_img) ?>" alt="current_img" srcset="">
                        </div>


                    </div>
                    <div class="form-group">
                        <br />
                        <button style="width:100%" type="submit" class="btn btn-outline-dark">Update Merchant</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>