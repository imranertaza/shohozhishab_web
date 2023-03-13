<div id="home" class="col-9 da-content">
    <form method="post" action="<?php echo base_url() ?>/Web/Dashboard/package_change_action">
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
                        </div>
                        <div class="input-group mb-3 ">
                            <select class="form-control" name="shop_id" id="shop_id" required>
                                <option value="<?php echo $shop->shop_id; ?>"><?php echo get_data_by_id('shopName', 'shops', 'shop_id', $shop->shop_id); ?></option>
                            </select>
                        </div>

                        <div class="input-group ">
                            <label class="col-form-label">Package</label>
                        </div>
                        <div class="input-group mb-3 ">
                            <select class="form-control" name="package_id" onchange="packPrice(this.value);buttonShow(this.value,'<?php echo $shop->package_id;?>')"  id="package_id" required>
                                <?php echo getListInOption($shop->package_id, 'package_id', 'name', 'packages') ?>
                            </select>
                        </div>
                        <div id="packData" >
                            <div class="d-flex justify-content-between">
                                <p>Monthly fee</p>
                                <p><?php echo get_data_by_id('price','packages','package_id',$shop->package_id) ?>tk</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p>Installation fee</p>
                                <p><?php echo get_data_by_id('installation_fee','packages','package_id',$shop->package_id) ?>tk</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p>Total </p>
                                <p><?php echo get_data_by_id('installation_fee','packages','package_id',$shop->package_id) + get_data_by_id('price','packages','package_id',$shop->package_id) ?>tk</p>
                            </div>
                        </div>

                        <div class="payment">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" checked type="radio" name="payment" id="aamarpay" value="aamarpay">
                                <label class="form-check-label" for="aamarpay">aamarpay (bkash, nagad, visa, mastercard)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment" id="direct_payment" value="direct_payment">
                                <label class="form-check-label" for="direct_payment">Direct Payment</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info" id="btnPay" style="float: right; display: none;" >Pay</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>


