<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Order  <small>Order List</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Order</a></li>
            <li class="active">Order</li>
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
                                <h3 class="box-title">Order List</h3>
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
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Package</th>
                                <th>Payment Method</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $start=1; foreach ($billing as $row) { ?>
                                <tr>
                                    <td width="80px"><?php echo $start++ ?></td>
                                    <td><?php echo $row->first_name ?> <?php echo $row->last_name ?></td>
                                    <td><?php echo $row->phone ?></td>
                                    <td><?php echo $row->email ?></td>
                                    <td><?php echo get_data_by_id('name', 'packages', 'package_id', $row->package_id); ?></td>
                                    <td><?php echo get_data_by_id('name', 'payment_method', 'payment_method_id', $row->payment_method_id); ?></td>
                                    <td><?php echo showWithCurrencySymbol($row->total); ?></td>
                                    <td>

                                        <select name="status" id="status" onchange="orderStatus(this.value,'<?php echo $row->billing_id;?>')" >
                                            <?php echo globalStatus($row->status); ?>
                                        </select>
                                    </td>
                                    <td width="80px">
                                        <a href="<?php echo base_url()?>/Admin/Order/view/<?php echo $row->billing_id;?>"   class="btn btn-xs btn-primary">View</a>
<!--                                        <a href="javascript:void(0)"   class="btn btn-xs btn-info">Update</a>-->
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
