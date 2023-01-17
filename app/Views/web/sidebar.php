<div class="col-3 da-sidebar" >
    <div class="row">
        <div class="col-12 da-logo-div da-div-pd-20">
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img class="da-logo-side" src="<?php echo base_url() ?>/uploads/logo-foot.svg" alt="image"></a>
        </div>
        <div class="col-12 da-div-pd-20 dapro">
            <div class="row">
            <div class="col-md-4  img-pro-da">
                <img src="<?php echo base_url() ?>/images/log-pro.jpg" alt="" class="da-img-pro">
            </div>
            <div class="col-md-8 da-pro-con">
                <p class="wel">Welcome</p>
                <p class="wel-tex">Murad hossion </p>
            </div>
            </div>
        </div>

        <div class="col-12 da-div-pd-20">
            <div class="sidebar">
                <a class="<?php echo ($menu_select == 'dashboard')?'active':'';?>" href="<?php echo base_url('/Web/Dashboard') ?>"><img src="<?php echo base_url() ?>/images/over-line.png" alt="" style="margin-top:-7px;"> ওভারভিউ</a>
                <a class="<?php echo ($menu_select == 'package_list')?'active':'';?>" href="<?php echo base_url('package_list') ?>"><img src="<?php echo base_url() ?>/images/lucide_package-open.png" alt="" style="margin-top:-7px;"> প্যকেজ লিস্ট</a>
                <a class="<?php echo ($menu_select == 'my_package')?'active':'';?>" href="<?php echo base_url('my_package') ?>"><img src="<?php echo base_url() ?>/images/carbon_settings.png" alt="" style="margin-top:-7px;"> আমার সার্ভিস</a>
                <a class="<?php echo ($menu_select == 'my_bill')?'active':'';?>" href="<?php echo base_url('my_bill') ?>"><img src="<?php echo base_url() ?>/images/icon-park-outline_bill.png" alt="" style="margin-top:-7px;"> আমার বিল</a>
                <a class="<?php echo ($menu_select == 'tutorial')?'active':'';?>" href="<?php echo base_url('tutorial') ?>"><img src="<?php echo base_url() ?>/images/mdi_learn-outline.png" alt="" style="margin-top:-7px;"> টিউটোরিয়াল</a>
                <a class="<?php echo ($menu_select == 'user_guide')?'active':'';?>" href="<?php echo base_url('user_guide') ?>"><img src="<?php echo base_url() ?>/images/ph_book-open.png" alt="" style="margin-top:-7px;"> উজার গাইড</a>
            </div>


        </div>
        <div class="col-12 da-div-pd-20 pro-log">
            <div class="sidebar">
                <a class="<?php echo ($menu_select == 'profile')?'active':'';?>" href="<?php echo base_url('profile') ?>"><img src="<?php echo base_url() ?>/images/gg_profile.png" alt="" style="margin-top:-7px;"> প্রোফাইল</a>
                <a href="<?php echo base_url('Login/logout')?>"><img src="<?php echo base_url() ?>/images/material-symbols_logout.png" alt="" style="margin-top:-7px;"> লগআউট</a>
            </div>
        </div>

    </div>
</div>