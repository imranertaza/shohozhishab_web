<div id="" class="section" style="padding-top: 0px !important; margin-top: 125px;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="features-ti">সাইন আপ করুন</p>
            </div>
        </div><!-- end title -->
        <div class="row">
            <div class="col-6" style="padding: 25px 50px;">
                <img src="<?php echo base_url() ?>/images/reg63330381.png" alt="" width="100%">
            </div>
            <div class="col-6 " style="margin-top: 90px; padding: 0px 85px;">
                <form method="post" action="<?php echo base_url('Login/register_action') ?>">
                    <div class="input-group mb-3 log-in" >
                        <input type="text" class="form-control" name="name" placeholder="Username" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/user.png" alt="" width="17" >
                            </span>
                        </div>

                    </div>
                    <div class="input-group mb-3 log-in" >
                        <input type="number" class="form-control" name="phone" placeholder="Phone" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/phone.png" alt="" width="17" >
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-3 log-in" >
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/email.png" alt="" width="17" >
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-3 log-in" >
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-3 log-in" >
                        <input type="password" class="form-control" name="con_password" placeholder="Confirm password"
                               required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-3 " >
                        <button class="btn btn-m-sig">Sign Up</button>
                    </div>
<!--                    <div class="input-group mb-3 ">-->
<!--                        <p class="for-m-sig"><a href="">Login</a></p>-->
<!--                    </div>-->
                </form>
            </div>

        </div>

    </div><!-- end container -->
</div><!-- end section -->

