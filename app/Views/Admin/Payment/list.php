<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Payment  <small>Payment List</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Payment</a></li>
            <li class="active">Payment</li>
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
                                <h3 class="box-title">Payment List</h3>
                            </div>
                            <div class="col-lg-3">
                                <a href="<?php echo base_url()?>/Admin/Payment/create/"   class="btn btn-xs btn-primary btn-block ">Create</a>
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
                                <th>phone</th>
                                <th>account_type</th>
                                <th>charge</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $start=1; foreach ($payment as $row) { ?>
                                <tr>
                                    <td width="80px"><?php echo $start++ ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                    <td><?php echo $row->charge; ?></td>
                                    <td><?php echo $row->status; ?></td>
                                    <td><?php echo statusView($row->status); ?> </td>

                                    <td width="160px">
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
