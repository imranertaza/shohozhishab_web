<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Package  <small>Package List</small></h1>
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
                                <h3 class="box-title">Package List</h3>
                            </div>
                            <div class="col-lg-3">
                                <a href="<?php echo base_url()?>/Admin/Package/create/"   class="btn btn-xs btn-primary btn-block ">Create</a>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;" id="message">
                                <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped text-capitalize">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Subscription Type</th>
                                <th>Installation Fee</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $start=1; foreach ($package as $row) { ?>
                                <tr>
                                    <td width="80px"><?php echo $start++ ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->price; ?></td>
                                    <td><?php echo $row->subscription_type; ?></td>
                                    <td><?php echo $row->installation_fee; ?></td>
                                    <td><?php echo statusView($row->status); ?> </td>

                                    <td width="160px">
                                        <a href="<?php echo base_url()?>/Admin/Package/view/<?php echo $row->package_id;?>"   class="btn btn-xs btn-primary">View</a>
                                        <a href="<?php echo base_url()?>/Admin/Package/update/<?php echo $row->package_id;?>"   class="btn btn-xs btn-info">Update</a>
                                        <a href="<?php echo base_url()?>/Admin/Package/delete/<?php echo $row->package_id;?>"   class="btn btn-xs btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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
