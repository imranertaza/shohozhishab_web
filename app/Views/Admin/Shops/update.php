<div class="content-wrapper" id="viewpage" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Shops <small>Shops</small> </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                        <h3 class="box-title">Shops</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div id="message"></div>
                            <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            <div class="col-lg-6" >
                                <form action="<?php echo $action; ?>" method="post" >
                                    <div class="form-group">
                                        <label for="int">Name</label>
                                        <input type="text" class="form-control" name="shopName" id="shopName" placeholder="Shop Name" value="<?php echo $shop->shopName;?>" required >
                                    </div>

                                    <div class="form-group">
                                        <label for="int">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $shop->email;?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Password</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $shop->password;?>" required >
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="shop_id"  value="<?php echo $shop->shop_id;?>" required >
                                        <button type="submit" class="btn btn-primary" >Update</button>
                                    </div>
                                </form>
                            </div>


                            <div class="col-lg-6" style="border-left: 1px solid #cecdcd;">

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