<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-2">
                        <a href="view_merchant" class="btn btn btn-outline-dark" role="button">
                            <i class="fas fa-chevron-circle-left"></i>
                        </a>
                    </div>
                    <div class="col-12 col-sm-10">
                        <h3 class="text-left">Merchant</h3>
                    </div>


                </div>
                <hr>
                <form class="" action="<?= base_url('add_form'); ?>" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="text" name="image_url" id="" class="form-control" placeholder="Merchant Profile Image URL">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input required type="text" name="mer_name" id="" class="form-control" placeholder="Merchant Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input required type="text" name="mer_phone" id="" class="form-control" placeholder="Merchant Phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="text" name="mer_email" id="" class="form-control" placeholder="Merchant Email">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input required type="text" name="business_name" id="" class="form-control" placeholder="Business Name">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <input required type="text" name="business_type" id="" class="form-control" placeholder="Business Type">
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group">
                                <input required type="text" name="pickup_add" id="" class="form-control" placeholder="Pickup Address">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <input required type="text" name="pickup_area" id="" class="form-control" placeholder="Pickup Area">
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