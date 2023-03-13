<div id="home" class="col-9 da-content" >
    <div class="row">
        <div class="col-12 da-div-pd-20">
            <?php echo $top_mer;?>
        </div>
        <div class="col-12 da-div-pd-20" style="margin-top: 60px;">
            <table class="table cus-tab">
                <thead>
                <tr>
                    <th>ক্রমিক</th>
                    <th>সপ এর নাম</th>
                    <th>প্যকেজ এর নাম</th>
                    <th>মেয়াদ শেষ হওয়ার তারিখ</th>
                    <th>স্ট্যাটাস</th>
<!--                    <th>প্রক্রিয়া</th>-->
                </tr>
                </thead>
                <tbody>
                <?php $i =1; foreach ($orders as $val){ $s_shop_id = get_data_by_id('shohozHishab_shop_id','shops','shop_id',$val->shop_id); ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo get_data_by_id('shopName','shops','shop_id',$val->shop_id);?></td>
                        <td><?php echo get_data_by_id('name','packages','package_id',$val->package_id);?></td>
                        <td><?php echo package_expiry($s_shop_id);?></td>
                        <td><?php echo $val->status;?></td>
<!--                        <td>-->
<!--                            <a href="--><?php //echo base_url()?><!--/Web/Dashboard/change_package/--><?php //echo $val->order_id;?><!--" class="btn demo-btn" style="border-radius: 20px;">Invoice</a>                            -->
<!--                        </td>-->
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

