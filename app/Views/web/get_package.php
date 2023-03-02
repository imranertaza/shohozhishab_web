<div id="home" class="col-9 da-content">
    <form method="post" action="<?php echo base_url()?>/Web/Dashboard/package_action">
        <div class="row">
            <div class="col-12 da-div-pd-20">
                <?php echo $top_mer; ?>
            </div>
            <div class="col-md-12 ">
                <?php if (newSession()->getFlashdata('message') !== NULL) : echo newSession()->getFlashdata('message'); endif; ?>
            </div>
            <div class="col-12 da-div-pd-20" style="margin-top: 60px;background-color: #FFF3F0; border-radius: 33px;">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="<?php echo base_url() ?>/images/Frame_2196.png" alt="">
                    </div>
                    <div class="col-md-6" style="padding-right: 100px;">
                        <div class="input-group mb-3 ">
                            <select class="form-control" name="shop_id" id="shop_id" required>
                                <option value="">Please select shop</option>
                                <?php foreach ($shops as $val) { ?>
                                    <option value="<?php echo $val->shop_id; ?>"><?php echo $val->shopName; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="input-group mb-3 ">
                            <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal3" >নতুন শপ তৈরি করুন</a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Installation fee (1 time)</p>
                            <p><?php echo $pack->installation_fee ?>tk</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <p>Monthly fee</p>
                            <p><?php echo $pack->price ?>tk</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Total </p>
                            <p><?php echo round($pack->installation_fee + $pack->price) ?>tk</p>
                        </div>
                        <input type="hidden" class="form-control" name="package_id" placeholder="package_id" value="<?php echo $pack->package_id ?>" required>
                        <button type="submit" class="btn btn-info" style="float: right;">Pay</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>


