<div class="row">
    <div class="col-md-10 col-sm-12" style="padding-right: 0px;">
        <marquee class="marq" direction="left" width="100%" bgcolor="white">
            <?php if (!empty(notice())) {foreach (notice() as $val){?>
                <span><?php echo $val->description;?> </span>
            <?php } }else{ ?>
                <span>এই মুহুর্তে আপনার জন্য কোন নোটিশ নাই.....</span>
            <?php } ?>
        </marquee>
    </div>
    <div class="col-md-2 col-sm-12 " style="text-align: right;">
        <button class="btn demo-btn">View Demo</button>
    </div>
</div>

