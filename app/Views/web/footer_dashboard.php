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

</script>

</body>
</html>