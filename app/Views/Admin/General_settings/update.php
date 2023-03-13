<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> General Settings <small>General Settings update</small></h1>
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
                                <h3 class="box-title">General Settings update</h3>
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
                                        <label for="int">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $genData->title; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Value</label>
                                        <input type="text" class="form-control" name="value" id="value" placeholder="Value" value="<?php echo $genData->value; ?>" required>
                                    </div>

                                    <input type="hidden" class="form-control" name="genarel_settings_id" value="<?php echo $genData->genarel_settings_id; ?>" required>
                                    <button type="submit" class="btn btn-primary geniusSubmit-btn">Update</button>
                                    <a href="<?php echo site_url('/Admin/General_settings/'); ?>" class="btn btn-default">Cancel</a>
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
