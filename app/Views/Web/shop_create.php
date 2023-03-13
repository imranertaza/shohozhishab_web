<div id="home" class="col-9 da-content" >
    <div class="row">
        <div class="col-12 da-div-pd-20">
            <?php echo $top_mer;?>
        </div>
        <div class="col-12 da-div-pd-20" style="text-align: center;margin-top: 40px;">
            <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal2" ><center><img src="<?php echo base_url()?>/images/shop_add_img.svg" alt=""></center></a>
            <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal2" class="con-sh">নতুন সপ তৈরি করুন</a>
        </div>
        <div class="col-md-12 ">
            <?php if (newSession()->getFlashdata('message') !== NULL) : echo newSession()->getFlashdata('message'); endif; ?>
        </div>
        <div class="col-12 da-div-pd-20" style="margin-top: 60px;">
            <table class="table cus-tab">
                <thead>
                <tr>
                    <th>সপ এর নাম</th>
                    <th>প্যকেজ এর নাম</th>
                    <th>মেয়াদ শেষ হওয়ার তারিখ</th>
                    <th>স্ট্যাটাস</th>
                    <th>রিনিউ করুন</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($shops as $val){ ?>
                    <tr>
                        <td><?php echo $val->shopName; ?></td>
                        <td><?php echo get_data_by_id('name','packages','package_id',$val->package_id);?></td>
                        <td><?php echo package_expiry($val->shohozHishab_shop_id);?></td>
                        <td>
                            <?php echo statusView($val->status)?>

                        </td>
                        <td>

                            <a class="btn demo-btn" onclick="updateShop(<?php echo $val->shop_id; ?>)" style="border-radius: 20px;color:#ffffff">Edit</a>
                            <?php if (!empty($val->shohozHishab_shop_id)){ ?>
                                <button class="btn demo-btn" onclick="shopDetailView(<?php echo $val->shop_id;?>)" style="border-radius: 20px;">Shop</button>
                            <?php } ?>
                            <?php if (($val->status == 0) && (shop_order_check_and_view($val->shop_id) == true)){ ?>
                            <a href="<?php echo base_url()?>/Web/Dashboard/re_new/<?php echo $val->shop_id;?>" class="btn demo-btn" style="border-radius: 20px;">Renew</a>
                            <?php } ?>
                            <?php if (empty($val->shohozHishab_shop_id)){ ?>
                                <a href="<?php echo base_url('Web/Dashboard/package_list?shopId='.$val->shop_id)?>" class="btn demo-btn" style="border-radius: 20px;color:#ffffff">Purchase package</a>
                            <?php } ?>
                            <?php if (empty($val->shohozHishab_shop_id)){ ?>
                            <a href="<?php echo base_url('Web/Dashboard/shop_delete/'.$val->shop_id)?>" class="btn demo-btn" onclick="return confirm('Are you sure you want to Delete?')" style="border-radius: 20px;color:#ffffff">Delete</a>
                            <?php } ?>

                            <?php if ((!empty($val->shohozHishab_shop_id)) && (shop_order_check_and_view($val->shop_id) == true)){ ?>
                                <a href="<?php echo base_url()?>/Web/Dashboard/change_package/<?php echo $val->shop_id;?>" class="btn demo-btn" style="border-radius: 20px;">Change package</a>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

