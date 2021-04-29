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