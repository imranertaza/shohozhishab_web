<div id="home" class="col-9 da-content" >
    <div class="row">
        <div class="col-12 da-div-pd-20">
            <?php echo $top_mer;?>
        </div>
        <div class="col-12 da-div-pd-20" style="margin-top: 60px;">
            <div class="price-box cus-da-pac" >
                <p class="price-text-1">Free</p>
                <p class="price-text-2"><span class="symbol">৳</span> Free</p>
                <p class="price-text-3">One Month</p>

                <p class="price-text-5">No Installation fee </p>
                <center><p><a href="#" class="price-text-6">Everything</a></p></center>
                <button class="btn btn-price-fr">Get Started</button>
            </div>
            <?php foreach ($pack as $row){ ?>
                <div class="price-box" style="margin-left: 40px">
                    <p class="price-text-1"><?php echo $row->name; ?></p>
                    <p class="price-text-2"><span class="symbol">৳</span> <?php echo $row->price; ?></p>
                    <p class="price-text-3">Per <?php echo $row->subscription_type; ?></p>

                    <p class="price-text-5">Installation <span class="color-text-2"><?php echo $row->installation_fee; ?>tk</span></p>
                    <center><p><a href="<?php echo base_url()?>/Home/detail" class="price-text-6">View Details</a></p></center>
                    <a href="<?php echo base_url() ?>/Web/Dashboard/get_started/<?php echo $row->package_id;?>" class="btn btn-price" style="color: #ffffff;">Get Started</a>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

