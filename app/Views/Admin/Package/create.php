<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Package <small>Package create</small></h1>
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
                                <h3 class="box-title">Package create</h3>
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
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Price</label>
                                        <input type="number" class="form-control" name="price" id="price" placeholder="Price" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="int">Subscription Type</label>
                                        <select class="form-control" name="subscription_type" required>
                                            <option value="">Please select</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="yearly">Yearly</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="int">Installation Fee</label>
                                        <input type="number" class="form-control" name="installation_fee" id="installation_fee" placeholder="Installation Fee" required>
                                    </div>

                                    <div class="form-group ">
                                        <label for="int">Software Package</label>
                                        <select class="form-control text-capitalize" name="software_pack_id" required>
                                            <option value="">Please select</option>
                                            <?php echo get_package_other_db();?>
                                        </select>
                                    </div>


                                    <button type="submit" class="btn btn-primary geniusSubmit-btn">Create</button>
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
