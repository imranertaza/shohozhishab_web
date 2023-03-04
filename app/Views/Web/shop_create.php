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
                    <th>ই-মেইল</th>
                    <th>পাসওয়ার্ড</th>
                    <th>স্ট্যাটাস</th>
                    <th>রিনিউ করুন</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($shops as $val){ ?>
                    <tr>
                        <td><?php echo $val->shopName; ?></td>
                        <td><?php echo $val->email; ?></td>
                        <td><?php echo $val->password; ?></td>
                        <td><?php echo statusView($val->status)?></td>
                        <td><a class="btn demo-btn" onclick="updateShop(<?php echo $val->shop_id; ?>)" style="border-radius: 20px;color:#ffffff">এডিট করুন</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

