<div id="home" class="col-9 da-content" >
    <div class="row">
        <div class="col-12 da-div-pd-20">
            <?php echo $top_mer;?>
        </div>
        <div class="col-12 da-div-pd-20">
            <div class="row " style="padding: 15px">
                <div class="col-md-6 col-sm-12 " style="padding: 5px;">
                    <form action="#" method="post">
                    <div class="cl-fed">
                        <p class="fed-r">পারসনাল ডিটেল</p>
                        <div class="profile_pic">
                             <center> <img src="<?php echo base_url() ?>/images/log-pro.jpg" alt="" class="pro-img-pro"></center>
                            <button type="button" class="btn-upl">ছবি আপলোড করুন</button>
                        </div>

                        <div class="input">

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">পুরো নাম </label>
                                <input type="text"  class="form-control" name="name" value="<?php echo $pro->name;?>" required>
                            </div>

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">ফোন নাম্বার </label>
                                <input type="number"  class="form-control" name="mobile" value="<?php echo $pro->mobile;?>" required>
                            </div>

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">ইমেইল </label>
                                <input type="text"  class="form-control" name="email" value="<?php echo $pro->email;?>" required>
                            </div>

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label"> পাসওয়ার্ড </label>
                                <input type="password"  class="form-control" name="name" required>
                            </div>

                            <div class="col-auto" style="margin: 20px 0px">
                                <button type="submit" class="btn btn-m-sig">আপডেট করুন</button>
                            </div>

                        </div>

                    </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12 " style="padding: 5px;">
                    <form action="#" method="post">
                    <div class="cl-fed" >
                        <p class="fed-r">পাসওয়ার্ড পরিবর্তন করুন</p>

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">পাসওয়ার্ড </label>
                            <input type="password"  class="form-control" name="name" placeholder="নতুন পাসওয়ার্ড" required>
                        </div>

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">কনফার্ম পাসওয়ার্ড </label>
                            <input type="password"  class="form-control" name="name" placeholder="কনফার্ম পাসওয়ার্ড" required>
                        </div>

                        <div class="col-auto" style="margin: 20px 0px">
                            <button class="btn btn-m-sig">আপডেট করুন</button>
                        </div>
                    </div>
                    </form>
                    <form action="#" method="post">
                    <div class="cl-fed" style="margin-top: 26px;" >
                        <p class="fed-r">সপ এর নাম পরিবর্তন করুন</p>

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">সপ এর নাম </label>
                            <input type="text"  class="form-control" name="name" placeholder="নতুন সপ এর নাম " required>
                        </div>

                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">কনফার্ম সপ এর </label>
                            <input type="text"  class="form-control" name="name" placeholder="কনফার্ম সপ এর নাম " required>
                        </div>

                        <div class="col-auto" style="margin: 20px 0px">
                            <button class="btn btn-m-sig">আপডেট করুন</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

