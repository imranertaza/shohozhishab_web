<form action="<?php echo base_url()?>/Home/action" method="post">
    <div id="mail" class="section " style="padding-top: 125px !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 message" ><?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?></div>
                <div class="col-3"></div>
                <div class="col-6">

                    <div class="row mail-form">
                        <div class="col-12">
                            <p class="mail-title">Billing details</p>
                        </div>
                        <div class="input-group col-6">
                            <input type="text" class="form-control" name="first_name" placeholder="First name *" required>
                        </div>

                        <div class="input-group col-6">
                            <input type="text" class="form-control" name="last_name" placeholder="Last name *" required>
                        </div>

                        <div class="input-group col-6">
                            <input type="number" class="form-control" name="phone" placeholder="Phone *" required>
                        </div>

                        <div class="input-group col-6">
                            <input type="email" class="form-control" name="email" placeholder="Email address *" required>
                        </div>

                        <div class="input-group col-6">
                            <input type="text" class="form-control" name="city" placeholder="Town / City *" required>
                        </div>

                        <div class="input-group col-6">
                            <input type="number" class="form-control" name="postcode" placeholder="Postcode (optional)">
                        </div>

                        <div class="input-group col-12">
                            <textarea type="text" class="form-control" name="address" placeholder="Street address *" required></textarea>
                        </div>


                        <div class="col-12" style="margin-top: 93px;margin-bottom: 24px;">
                            <p class="mail-title">Your order</p>
                        </div>

                        <div class="col-12 d-flex justify-content-between ">
                            <input type="hidden" name="package_id" value="<?php echo $pack->package_id; ?>" required>
                            <p class="price-get"><?php echo $pack->name; ?></p>
                            <p class="price-get"><?php echo $pack->price; ?>tk</p>
                            <input type="hidden"  value="<?php echo $pack->price; ?>">
                        </div>
                        <?php
                            $chTotal = round(($pack->price * $charge->charge)/100);
                            $total = $pack->price + $chTotal;
                        ?>
                        <div class="col-12 d-flex justify-content-between ">
                            <input type="hidden" name="charge" id="charge" value="<?php echo $chTotal; ?>" required>
                            <p class="price-cha">Charge</p>
                            <p class="price-cha" id="cha_total"><?php echo $chTotal;?>tk</p>

                        </div>
                        <div class="col-12 ">
                            <hr>
                        </div>
                        <div class="col-12 d-flex justify-content-between ">
                            <p class="price-get">Total</p>
                            <p class="price-get" id="totalAmo"><?php echo $total ?>tk</p>
                        </div>

                    </div>

                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>

    <section id="home2" class="cd-hero js-cd-hero bac-img"
             style="background-image: url('<?php echo base_url() ?>/uploads/bac-get.svg');height: auto;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6" style="margin-top: 70px; margin-bottom: 70px;">
                    <div class="row">
                        <div id="accordion">
                            <div class="input-group col-12">
                                <div id="headingOne" class="col-12">
                                    <input class="form-check-input" onclick="charge_get('1')" name="payment_method_id" checked="checked" type="radio"  id="reo1" data-target="#dutcall" data-toggle="collapse" value="1">
                                    <label class="form-check-label" for="reo1" data-target="#dutcall"
                                           data-toggle="collapse">Dutch
                                        Bangla Bank Account / Rocket</label>
                                </div>


                                <div class="collapse show col-12" id="dutcall" aria-labelledby="headingOne" data-parent="#accordion" style="margin-top: 33px;">
                                    <div class="card card-body">
                                        <p class="pay-one-text">Dutch Bangla Bank Account Details:</p>
                                        <p class="pay-one-text">Bank Name: Dutch-Bangla Bank</p>
                                        <p class="pay-one-text">Name: Syed irfan</p>
                                        <p class="pay-one-text">Acc No: 2551510009184</p>
                                        <p class="pay-one-text">Branch: Noapara Branch</p>
                                        <br>
                                        <p class="pay-two-text">Rocket: <small style="color:#E84420;
">(How to send money)</small></p>
                                        <p class="pay-two-text">01. Go to your Rocket app or Dial *322#</p>
                                        <p class="pay-two-text">02. Choose “Send Money”</p>
                                        <p class="pay-two-text">03. Enter below Rocket Account Number</p>
                                        <p class="pay-two-text">04. Enter total amount</p>
                                        <p class="pay-two-text">06. Now enter your Rocket Account PIN to confirm the transaction</p>
                                        <p class="pay-two-text">07. Copy Transaction ID from payment confirmation message and paste that Transaction ID below Rocket "Send Money" fee will be added with net price.</p>
                                        <br>
                                        <p class="pay-two-text">You need to send us ৳ <span id="total_rocket"><?php echo $total ?></span></p>
                                        <p class="pay-two-text" >Account Type: Personal</p>
                                        <br>
                                        <p class="pay-two-text">Account Number: 016747601990</p>

                                        <hr class="hr-2">
                                        <p>Please confirm your order</p>
                                        <div class="input-group">
                                            <input type="text" name="roket_phone" class="form-control cl-input" placeholder="Your Roket number">
                                        </div>

                                        <div class="input-group" style="margin-top: 16px;">
                                            <input type="text" name="roket_id" class="form-control cl-input" placeholder="Rocket Transaction ID
">
                                        </div>
                                        <hr class="hr-2" style="margin-top: 52px;margin-bottom: 42px;">

                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-12">
                                <div id="headingTwo" class="col-12">
                                    <input class="form-check-input" onclick="charge_get('2')" name="payment_method_id" type="radio"  id="reo2"
                                           value="2"
                                           data-target="#bkashcall" data-toggle="collapse">
                                    <label class="form-check-label" for="reo2" data-target="#bkashcall"
                                           data-toggle="collapse">
                                        BKash</label>
                                </div>

                                <div class="collapse col-12" id="bkashcall" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card card-body">
                                        <p class="pay-one-text">Bkash Bank Account Details:</p>
                                        <p class="pay-one-text">Bank Name: Bkash Bank</p>
                                        <p class="pay-one-text">Name: Syed irfan</p>
                                        <p class="pay-one-text">Acc No: 2551510009184</p>
                                        <p class="pay-one-text">Branch: Noapara Branch</p>
                                        <br>
                                        <p class="pay-two-text">Bkash: <small style="color:#E84420;
">(How to send money)</small></p>
                                        <p class="pay-two-text">01. Go to your Bkash app or Dial *247#</p>
                                        <p class="pay-two-text">02. Choose “Send Money”</p>
                                        <p class="pay-two-text">03. Enter below Bkash Account Number</p>
                                        <p class="pay-two-text">04. Enter total amount</p>
                                        <p class="pay-two-text">06. Now enter your Bkash Account PIN to confirm the transaction</p>
                                        <p class="pay-two-text">07. Copy Transaction ID from payment confirmation message and paste that Transaction ID below Bkash "Send Money" fee will be added with net price.</p>
                                        <br>
                                        <p class="pay-two-text">You need to send us ৳ <span id="total_bkash"><?php echo $total ?></span></p>
                                        <p class="pay-two-text" >Account Type: Personal</p>
                                        <br>
                                        <p class="pay-two-text">Account Number: 016747601990</p>

                                        <hr class="hr-2">
                                        <p>Please confirm your order</p>
                                        <div class="input-group">
                                            <input type="text" name="bkash_phone" class="form-control cl-input" placeholder="Your Bkash number">
                                        </div>

                                        <div class="input-group" style="margin-top: 16px;">
                                            <input type="text" name="bkash_id" class="form-control cl-input" placeholder="Bkash Transaction ID
">
                                        </div>
                                        <hr class="hr-2" style="margin-top: 52px;margin-bottom: 42px;">
                                    </div>
                                </div>
                            </div>

                            <div class="input-group col-12">
                                <div id="headingThree" class="col-12">
                                    <input class="form-check-input" onclick="charge_get('3')" name="payment_method_id" type="radio"  id="reo3"
                                           value="3"
                                           data-target="#nagcall" data-toggle="collapse">
                                    <label class="form-check-label" for="reo3" data-target="#nagcall"
                                           data-toggle="collapse">
                                        Nagad</label>
                                </div>

                                <div class="collapse col-12" id="nagcall" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card card-body">
                                        <p class="pay-one-text">Nagad Bank Account Details:</p>
                                        <p class="pay-one-text">Bank Name: Nagad Bank</p>
                                        <p class="pay-one-text">Name: Syed irfan</p>
                                        <p class="pay-one-text">Acc No: 2551510009184</p>
                                        <p class="pay-one-text">Branch: Noapara Branch</p>
                                        <br>
                                        <p class="pay-two-text">Nagad: <small style="color:#E84420;
">(How to send money)</small></p>
                                        <p class="pay-two-text">01. Go to your Nagad app or Dial *322#</p>
                                        <p class="pay-two-text">02. Choose “Send Money”</p>
                                        <p class="pay-two-text">03. Enter below Nagad Account Number</p>
                                        <p class="pay-two-text">04. Enter total amount</p>
                                        <p class="pay-two-text">06. Now enter your Nagad Account PIN to confirm the transaction</p>
                                        <p class="pay-two-text">07. Copy Transaction ID from payment confirmation message and paste that Transaction ID below Nagad "Send Money" fee will be added with net price.</p>
                                        <br>
                                        <p class="pay-two-text" >You need to send us ৳ <span id="total_nagad"><?php echo $total ?></span></p>
                                        <p class="pay-two-text" >Account Type: Personal</p>
                                        <br>
                                        <p class="pay-two-text">Account Number: 016747601990</p>

                                        <hr class="hr-2">
                                        <p>Please confirm your order</p>
                                        <div class="input-group">
                                            <input type="text" name="nagad_phone" class="form-control cl-input" placeholder="Your Nagad number">
                                        </div>

                                        <div class="input-group" style="margin-top: 16px;">
                                            <input type="text" name="nagad_id" class="form-control cl-input" placeholder="Nagad Transaction ID
">
                                        </div>
                                        <hr class="hr-2" style="margin-top: 52px;margin-bottom: 42px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </section>

    <div  class="section " style="padding-top: 29px !important; padding-bottom: 86px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-place-order">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</form>