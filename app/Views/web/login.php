<div id="" class="section" style="padding-top: 0px !important; margin-top: 125px;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="features-ti">সাইন ইন করুন</p>
            </div>
        </div><!-- end title -->
        <div class="row">
            <div class="col-6" style="padding: 25px 50px;">
                <img src="<?php echo base_url() ?>/images/reg63330381.png" alt="" width="100%">
            </div>
            <div class="col-6 " style="margin-top: 115px; padding: 0px 85px;">
                <form method="post" action="<?php echo base_url('Login/action') ?>">
                    <div class="input-group mb-3 log-in" style="min-width: 400px;">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($_COOKIE['login_email'])){ echo $_COOKIE['login_email'];} ?>" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/email.png" alt="" width="17" >
                            </span>
                        </div>
                    </div>
                    <div class="input-group mb-3 log-in" style="min-width: 400px;">
                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['login_password'])){ echo $_COOKIE['login_password'];} ?>"  required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">
                                <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                            </span>
                        </div>
                    </div>

                    <div class="input-group mb-3 " style="min-width: 400px;">
                        <label>
                            <input type="checkbox" name="remember" <?php if(isset($_COOKIE['login_email'])){ echo 'checked';} ?> > Remember Me
                        </label>
                    </div>
                    <div class="input-group mb-3 " style="min-width: 400px;">
                        <button class="btn btn-m-sig">Login</button>
                    </div>
                </form>
            </div>

        </div>

    </div><!-- end container -->
</div><!-- end section -->

