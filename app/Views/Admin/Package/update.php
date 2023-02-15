<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Package <small>Package update</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Package</a></li>
            <li class="active">Package</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-lg-9">
                                <h3 class="box-title">Package update</h3>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;" id="message">
                                <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="geniusform" action="<?php echo $action; ?>" method="post">

                                    <div class="form-group">
                                        <label for="int">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $package->name?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Price</label>
                                        <input type="number" class="form-control" name="price" id="price" placeholder="Price" value="<?php echo $package->price?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="int">Subscription Type</label>
                                        <select class="form-control" name="subscription_type" required>
                                            <option value="">Please select</option>
                                            <option value="monthly" <?php echo ($package->subscription_type == 'monthly')?'selected':'';?> >Monthly</option>
                                            <option value="yearly" <?php echo ($package->subscription_type == 'yearly')?'selected':'';?>>Yearly</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="int">Installation Fee</label>
                                        <input type="number" class="form-control" name="installation_fee" id="installation_fee" placeholder="Installation Fee" value="<?php echo $package->installation_fee?>" required>
                                    </div>

                                    <div class="form-group ">
                                        <label for="int">Software Package</label>
                                        <select class="form-control text-capitalize" name="software_pack_id"  required>
                                            <option value="">Please select</option>
                                            <?php echo get_package_other_db($package->software_pack_id);?>
                                        </select>
                                    </div>

                                    <input type="hidden"  name="package_id" id="package_id" value="<?php echo $package->package_id?>" required>
                                    <button type="submit" class="btn btn-primary geniusSubmit-btn">Update</button>
                                    <a href="<?php echo site_url('/Admin/Package/'); ?>" class="btn btn-default">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
