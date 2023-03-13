<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Shops  <small>Shops List</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Shops</a></li>
            <li class="active">Shops</li>
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
                                <h3 class="box-title">Shops List</h3>
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
                        <table id="example1" class="table table-bordered table-striped text-capitalize">
                            <thead>
                            <tr>
                                <th>Shop Id</th>
                                <th>Name</th>
                                <th>Shop Owner</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $start=1; foreach ($shops as $row) { ?>
                                <tr>
                                    <td width="80px"><?php echo $row->shop_id; ?></td>
                                    <td><?php echo $row->shopName; ?></td>
                                    <td><?php echo get_data_by_id('name','customers','customer_id',$row->reg_user_id); ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->password; ?></td>
                                    <td>
                                        <?php echo statusView($row->status); ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($row->shohozHishab_shop_id)){ ?>
                                        <a href="<?php echo base_url('Admin/Shops/update_package/'.$row->shop_id)?>" class="btn btn-sm btn-primary">Package Update</a>
                                        <?php } ?>
                                        <a href="<?php echo base_url('Admin/Shops/update/'.$row->shop_id)?>" class="btn btn-sm btn-info">Update</a>
                                        <?php if (empty($row->shohozHishab_shop_id)){ ?>
                                        <a href="<?php echo base_url('Admin/Shops/delete/'.$row->shop_id)?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-sm btn-danger">Delete</a>
                                        <?php } ?>

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
