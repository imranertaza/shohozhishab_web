<div id="home" class="col-9 da-content">
    <form method="post" action="<?php echo base_url() ?>/Web/Dashboard/package_renew_action">
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
                        <div class="input-group ">
                            <label class="col-form-label">Shop</label>
                            <input type="hidden" name="order_id" value="<?php echo $orders->order_id; ?>">
                        </div>
                        <div class="input-group mb-3 ">
                            <select class="form-control" name="shop_id" id="shop_id" required>
                                <option value="<?php echo $orders->shop_id; ?>"><?php echo get_data_by_id('shopName', 'shops', 'shop_id', $orders->shop_id); ?></option>
                            </select>
                        </div>

                        <div class="input-group ">
                            <label class="col-form-label">Package</label>
                        </div>
                        <div class="input-group mb-3 ">
                            <select class="form-control" name="package_id" id="package_id" onchange="pack_detail(this.value)" required>
                                <?php echo getListInOption($orders->package_id, 'package_id', 'name', 'packages') ?>
                            </select>
                        </div>
                        <div id="packData" >
                            <div class="d-flex justify-content-between">
                                <p>Monthly fee</p>
                                <p><?php echo $pack->price ?>tk</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p>Total </p>
                                <p><?php echo round($pack->price) ?>tk</p>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info" style="float: right;">Pay</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

