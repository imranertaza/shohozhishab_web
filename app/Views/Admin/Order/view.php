<div class="content-wrapper" id="viewpage">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Order <small>Order View</small></h1>
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
                                <h3 class="box-title">Order View</h3>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;">
                                <?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?>
                            </div>
                        </div>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-striped text-capitalize">
                            <tbody>
                                <tr>
                                    <td>First Name</td>
                                    <td><?php echo $billing->first_name?></td>
                                </tr>

                                <tr>
                                    <td>Last Name</td>
                                    <td><?php echo $billing->last_name?></td>
                                </tr>

                                <tr>
                                    <td>Phone</td>
                                    <td><?php echo $billing->phone?></td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $billing->email?></td>
                                </tr>

                                <tr>
                                    <td>City</td>
                                    <td><?php echo $billing->city?></td>
                                </tr>

                                <tr>
                                    <td>Post</td>
                                    <td><?php echo $billing->postcode?></td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td><?php echo $billing->address?></td>
                                </tr>

                                <tr>
                                    <td>Package</td>
                                    <td><?php echo get_data_by_id('name', 'packages', 'package_id', $billing->package_id)?></td>
                                </tr>

                                <tr>
                                    <td>Payment method</td>
                                    <td><?php echo get_data_by_id('name', 'payment_method', 'payment_method_id', $billing->payment_method_id)?></td>
                                </tr>

                                <tr>
                                    <td>Price</td>
                                    <td><?php echo showWithCurrencySymbol($billing->price)?></td>
                                </tr>


                                <tr>
                                    <td>Charge</td>
                                    <td><?php echo showWithCurrencySymbol($billing->charge)?></td>
                                </tr>

                                <tr>
                                    <td>Total</td>
                                    <td><?php echo showWithCurrencySymbol($billing->total)?></td>
                                </tr>
                                <tr>
                                    <td>Payment phone</td>
                                    <td><?php echo $billing->payment_phone?></td>
                                </tr>
                                <tr>
                                    <td>Payment transaction id</td>
                                    <td><?php echo $billing->payment_transaction_id?></td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td><?php echo statusView($billing->status)?></td>
                                </tr>

                                <tr>
                                    <td colspan="" ><a href="<?php echo base_url()?>/Admin/Order"   class="btn  btn-info">Back</a></td>
                                </tr>


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
