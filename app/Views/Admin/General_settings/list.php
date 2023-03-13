<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> General Settings  <small>General Settings List</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> General Settings</a></li>
            <li class="active">General Settings</li>
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
                                <h3 class="box-title">General Settings List</h3>
                            </div>
                            <div class="col-lg-3">
                                <a href="<?php echo base_url()?>/Admin/General_settings/create/"   class="btn btn-xs btn-primary btn-block ">Create</a>
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
                                <th>Title</th>
                                <th>Value</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $start=1; foreach ($gnData as $row) { ?>
                                <tr>
                                    <td width="80px"><?php echo $start++ ?></td>
                                    <td><?php echo $row->title; ?></td>
                                    <td><?php echo $row->value; ?></td>

                                    <td width="160px">
                                        <a href="<?php echo base_url()?>/Admin/General_settings/update/<?php echo $row->genarel_settings_id;?>"   class="btn btn-xs btn-info">Update</a>
                                        <a href="<?php echo base_url()?>/Admin/General_settings/delete/<?php echo $row->genarel_settings_id;?>" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-xs btn-danger">Delete</a>
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
