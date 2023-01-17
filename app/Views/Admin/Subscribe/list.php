<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Subscribe  <small>Subscribe List</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Subscribe</a></li>
            <li class="active">Subscribe</li>
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
                                <h3 class="box-title">Subscribe List</h3>
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
                                <th>Email</th>
                                <th>Status</th>
<!--                                <th>Action</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php $start=1; foreach ($subscribe as $row) { ?>
                                <tr>
                                    <td width="80px"><?php echo $start++ ?></td>
                                    <td><?php echo $row->email ?></td>
                                    <td>
                                        <select name="status" id="status" onchange="subscribeStatus(this.value,'<?php echo $row->subscribe_id;?>')" >
                                            <?php echo globalStatus($row->status); ?>
                                        </select>
                                    </td>

<!--                                    <td width="80px">-->
<!--                                        <a href="--><?php //echo base_url()?><!--/Admin/Order/view/--><?php //echo $row->subscribe_id;?><!--"   class="btn btn-xs btn-primary">View</a>-->
                                        <!--                                        <a href="javascript:void(0)"   class="btn btn-xs btn-info">Update</a>-->
<!--                                    </td>-->
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
