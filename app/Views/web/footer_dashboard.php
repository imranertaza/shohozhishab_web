</div>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog " role="document">
        <div class="modal-content shop_create_mod">
            <div class="modal-header-lo" style="padding:20px; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url() ?>/images/akar-icons_cross.png"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-sm-12"  style="padding: 0px 74px;">
                        <form method="post" action="<?php echo base_url('Web/Dashboard/shop_create_action')?>">
                            <div class="input-group mb-3 log-in" >
                                <input type="text" class="form-control" name="shopName" placeholder="Business Name/shop name" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/bi_shop.png" alt="" width="17" >
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
                                <input type="text" class="form-control" name="password" placeholder="Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-3 " >
                                <button class="btn btn-m-sig">শপ তৈরি করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog " role="document">
        <div class="modal-content shop_create_mod">
            <div class="modal-header-lo" style="padding:20px; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url() ?>/images/akar-icons_cross.png"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-sm-12"  style="padding: 0px 74px;">
                        <form method="post" action="<?php echo base_url('Web/Dashboard/ajax_shop_action')?>">
                            <div class="input-group mb-3 log-in" >
                                <input type="text" class="form-control" name="shopName" placeholder="Business Name/shop name" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/bi_shop.png" alt="" width="17" >
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
                                <input type="text" class="form-control" name="password" placeholder="Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-3 " >
                                <input type="hidden" class="form-control" name="package_id" placeholder="package_id" value="<?php echo $pack->package_id ?>" required>
                                <button type="submit" class="btn btn-m-sig" >শপ তৈরি করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog " role="document">
        <div class="modal-content shop_create_mod">
            <div class="modal-header-lo" style="padding:20px; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url() ?>/images/akar-icons_cross.png"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-sm-12"  style="padding: 0px 74px;">
                        <form id="edit-form" method="post" action="<?php echo base_url('Web/Dashboard/shop_update_action')?>">
                            <div class="input-group mb-3 log-in" >
                                <input type="text" class="form-control" name="shopName" id="shopName" placeholder="Business Name/shop name" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/bi_shop.png" alt="" width="17" >
                                    </span>
                                </div>
                            </div>

                            <div class="input-group mb-3 log-in" >
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/email.png" alt="" width="17" >
                                    </span>
                                </div>
                            </div>

                            <div class="input-group mb-3 log-in" >
                                <input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-3 log-in" >
                                <select class="form-control" name="status" id="status">
                                    <option value="">Please select</option>
                                    <?php echo globalStatus('');?>
                                </select>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="<?php echo base_url() ?>/images/rounded.png" alt="" width="17" >
                                    </span>
                                </div>
                            </div>
                            <div class="input-group mb-3 " >
                                <input type="hidden" name="shop_id" id="shop_id" required>
                                <button class="btn btn-m-sig" >শপ আপডেট করুন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="<?php echo base_url() ?>/js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="<?php echo base_url() ?>/js/main.js"></script>
<script src="<?php echo base_url() ?>/js/custom.js"></script>
<script src="<?php echo base_url() ?>/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        effect: 'coverflow',
        centeredSlides: true,
        loopFillGroupWithBlank: true,
        slidesPerView: 3,
        initialSlide: 3,
        keyboardControl: true,
        mousewheelControl: false,
        lazyLoading: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1199: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            575: {
                slidesPerView: 1,
                spaceBetween: 3,
            }
        }
    });

    $(document).ready(function () {
        $(".nav-tabs button").click(function () {
            $(this).tab('show');
        });
    });

    $(".img-class").mouseover(function () {
        $('.img-id-1').attr('src', $('.img-id-1').data("src"));
        $('.img-id-2').attr('src', $('.img-id-2').data("src"));
        $('.img-id-3').attr('src', $('.img-id-3').data("src"));
        $('.img-id-4').attr('src', $('.img-id-4').data("src"));

        $(this).attr('src', $(this).data("hover"));

        $('.img-1').css('display', 'none');
        $('.img-2').css('display', 'none');
        $('.img-3').css('display', 'none');
        $('.img-4').css('display', 'none');

        $('.' + $(this).data("id")).css('display', 'block');
    });

    $(document).ready(function () {
        $('.marquee').marquee({
            direction: 'up',
            speed: 1500
        });
    });

    function marq_up() {
        $("#marq").stop(true);
        $("#marq").animate({scrollTop: $(document).height()}, 10000);
        scrollUp($("#marq"));
    }

    function marq_down() {
        $("#marq").stop(true);
        $('#marq').animate({scrollTop: 0}, 800);
        scrollDown($("#marq"));

    }

    function scrollDown(el) {
        el.animate({
            scrollTop: el[0].scrollHeight
        }, 10000, function () {
            scrollUp(el)
        });
    };

    function scrollUp(el) {
        el.animate({
            scrollTop: 0
        }, 10000, function () {
            scrollDown(el);
        });
    };

    scrollDown($("#marq"));


    window.onload = function () {
        var navItems = document.getElementsByClassName("nav-item");
        var imageChangeFunction = function () {
            var attribute = this.getAttribute("data-url");
            var imgId = this.getAttribute("data-id");

            $('#imgChang2').attr('src', 'uploads/programming-svgrepo-com (1) 1.svg');
            $('#imgChang3').attr('src', 'uploads/time-svgrepo-com 1.svg');
            $('#imgChang4').attr('src', 'uploads/paper-svgrepo-com 1.svg');
            $('#imgChang1').attr('src', 'uploads/breakfast-svgrepo-com 2.svg');


            var image = document.getElementById(imgId);
            image.src = attribute;
        };

        for (var i = 0; i < navItems.length; i++) {
            navItems[i].addEventListener('click', imageChangeFunction, false);
        }
    }


    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {

            $(".back-w").css('display', 'block');
        } else {
            // $(".back-w").removeClass( 'sticky-top-price');
            $(".back-w").css('display', 'none');
        }
    }

    function charge_get(pay_id) {
        var price = $("#price").val();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Home/charge'); ?>",
            data: {pay_id: pay_id, price: price},
            dataType: "json",
            success: function (data) {
                $("#charge").val(data.charge);
                $("#cha_total").html(data.charge + 'tk');
                $("#totalAmo").html(data.totalPrice + 'tk');
                $("#total_rocket").html(data.totalPrice);
                $("#total_bkash").html(data.totalPrice);
                $("#total_nagad").html(data.totalPrice);
            }
        });
    }

    $("#subscribe").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Home/subscribe'); ?>",
            data: $('#subscribe').serialize(),
            success: function (data) {
                if (data == true) {
                    $('.message').html('<div class="alert alert-success alert-dismissible" role="alert">Successfully subscribe <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    $("#exampleModal").modal('hide');
                }

                if (data == false) {
                    $('.message').html('<div class="alert alert-danger alert-dismissible" role="alert">Please input valid email! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            }

        });
    });

    function updateShop(shop_id){

        $('#myModalUpdate').modal('show');

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Web/Dashboard/shop_edit_data')?>",
            data: {shopId:shop_id },
            dataType: 'json',
            success: function (data) {
                $("#edit-form #shop_id").val(data.shop_id);
                $("#edit-form #shopName").val(data.shopName);
                $("#edit-form #email").val(data.email);
                $("#edit-form #password").val(data.password);
                $("#edit-form #status").val(data.status);

                // $("#exampleModal").modal('hide');
            }
        });


    }

    function pack_detail(id){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('Web/Dashboard/pack_data')?>",
            data: {package_id:id },
            dataType: 'text',
            success: function (data) {
                $("#packData").html(data);
                // alert(data);
            }
        });
    }


</script>
</body>
</html>