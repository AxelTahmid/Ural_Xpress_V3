<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-header">
                            <h3>Add Merchant
                                <a href="<?= base_url('view_merchant'); ?>" role="button" class="btn btn-outline-dark float-right">
                                    <i class="fas fa-times"></i>
                                </a>
                            </h3>
                        </div><!-- /.page-header -->
                    </div>

                </div>
                <hr>
                <form class="" action="<?= base_url('add_merchant'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required type="text" name="mer_name" id="" class="form-control" placeholder="Merchant Name"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required type="text" name="mer_phone" id="" class="form-control" placeholder="Merchant Phone"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required type="text" name="business_name" id="" class="form-control" placeholder="Business Name"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required type="text" name="business_type" id="" class="form-control" placeholder="Business Type"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required type="text" name="pickup_add" id="" class="form-control" placeholder="Pickup Address"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required type="text" name="pickup_area" id="" class="form-control" placeholder="Pickup Area"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input required type="text" name="mer_email" id="" class="form-control" placeholder="Merchant Email"></input>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input type="file" name="image_url" class="form-control" placeholder="Profile Image URL" required> </input>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button style="width:100%" type="submit" class="btn btn-outline-dark">Create New Merchant</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<!-- <div class="modal fade" id="addMerchantModal" tabindex="-1" role="dialog" aria-labelledby="addMerchantModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMerchantModalLabel">Add Merchant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-8">
                        <div class="form-group">
                            <span id="error_mer_name" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control mer_name" placeholder="Merchant Name"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <span id="error_mer_phone" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control mer_phone" placeholder="Merchant Phone"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <div class="form-group">
                            <span id="error_business_name" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control business_name" placeholder="Business Name"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <span id="error_business_type" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control business_type" placeholder="Business Type"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8">
                        <div class="form-group">
                            <span id="error_pickup_add" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control pickup_add" placeholder="Pickup Address"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group">
                            <span id="error_pickup_area" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control pickup_area" placeholder="Pickup Area"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <span id="error_mer_email" class="text-warning ms-3"> </span>
                            <input type="text" class="form-control mer_email" placeholder="something@example.com"></input>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <span id="error_image_url" class="text-warning ms-3"> </span>
                            <input type="text" id="img" class="form-control image_url" placeholder="Upload Image"> </input>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-dark ajaxMerchantSave">Save changes</button>
            </div>
        </div>
    </div>
</div> -->