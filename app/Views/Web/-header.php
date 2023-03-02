<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <title>সহজ হিসাব</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Work+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;600&display=swap" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js" type="text
/javascript"></script>

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

<!-- LOADER -->
<!--<div id="preloader">-->
<!--    <img class="preloader" src="--><?php //echo base_url() ?><!--/images/ajax-loader.gif" alt="">-->
<!--</div>-->
<!-- END LOADER -->
<header class="header header_style_01">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/uploads/logo-foot.svg" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp"
                    aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                <ul class="navbar-nav">
                    <?php $url_b =  (!isset($headerOn))?base_url():'';?>
                    <li><a class="nav-link active" href="<?php echo $url_b;?>/#home" >হোম</a></li>
                    <li><a class="nav-link" href="<?php echo $url_b;?>/#about" >আমাদের সম্পর্কে</a></li>
                    <li><a class="nav-link" href="<?php echo $url_b;?>/#need" >বৈশিষ্ট্য</a></li>
                    <li><a class="nav-link" href="<?php echo $url_b;?>/#price" >মূল্য</a></li>
                    <li><a class="nav-link" href="<?php echo $url_b;?>/#used" >প্রায়শই ব্যবহারকারী</a></li>
                    <li><a class="nav-link" href="<?php echo $url_b;?>/#faq" >প্রশ্নাবলী</a></li>
                    <li><a class="nav-link" href="<?php echo $url_b;?>/#contact2" >যোগাযোগ</a></li>


                    <?php $isLoggedInWeb = newSession()->isLoggedInWeb;
                        if (!isset($isLoggedInWeb) || $isLoggedInWeb != TRUE) {?>
                    <li><a class="nav-link btn nav-btn-log" href="#" data-toggle="modal" data-target="#myModal2" >Login</a></li>
                    <?php }else{ ?>
                            <li><a class="nav-link btn nav-btn-log" href="<?php echo  base_url('Web/Dashboard')?>"  >Dashboard</a></li>
                    <?php } ?>
                    <li><a class="nav-link btn btn-head nav-btn" target="_blank" href="https://shohozhishab.com/shohoz_demo_template/">View Demo</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="col-12 message" ><?php if (session()->getFlashdata('message') !== NULL) : echo session()->getFlashdata('message'); endif; ?></div>
<?php if (!isset($no_banner)){ ?>
<section id="home" class="cd-hero js-cd-hero bac-img"
         style="background-image: url('<?php echo base_url() ?>/uploads/slider-bg.svg');height: auto;background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 95px;">
    <div class="row">
        <div class="col-md-12 col-lg-6 col-sm-12" style="margin-top: 25px;">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <p class="slide-ti"><span class="color-text">ফ্রী</span> ব্যাবহার করুন  সফটওয়্যার</p>
                        <p class="slide-text">সহজ হিসাব আপনাকে দিচ্ছে  পুরো এক মাসের ফ্রি ট্রায়েল</p>
                        <button class="btn btn-slide" href="javascript:void(0)"  data-toggle="modal"
                                data-target="#contactModal">Free Trial</button>

                    </div>
                    <div class="carousel-item">
                        <p class="slide-ti">কাস্টম <span class="color-text">সফটওয়্যার</span></p>
                        <p class="slide-text">আপনার ব্যবসায়ের ধরন অনুযায়ী আপনার পছন্দমত সফটওয়্যার পাবেন। আমরা আপনার সকল
                            রিকায়ারমেন্ট এর উপর সফটওয়্যার তৈরি করতে প্রস্তুত।</p>
                        <button class="btn btn-slide" href="javascript:void(0)"  data-toggle="modal"
                                data-target="#contactModal">Contact Us</button>
                    </div>
                    <div class="carousel-item">
                        <p class="slide-ti">কাস্টম <span class="color-text">সফটওয়্যার</span></p>
                        <p class="slide-text">আপনার ব্যবসায়ের ধরন অনুযায়ী আপনার পছন্দমত সফটওয়্যার পাবেন। আমরা আপনার সকল
                            রিকায়ারমেন্ট এর উপর সফটওয়্যার তৈরি করতে প্রস্তুত।</p>
                        <button class="btn btn-slide" href="javascript:void(0)"  data-toggle="modal"
                                data-target="#contactModal">Contact Us</button>
                    </div>
                </div>

                <button class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <img src="<?php echo base_url() ?>/uploads/arrow-right-alt.svg" alt="icon">
                </button>

                <button class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <img src="<?php echo base_url() ?>/uploads/arrow-left-alt.svg" alt="icon">
                </button>

            </div>

            <img src="<?php echo base_url() ?>/uploads/Group-d.svg" alt="icon" class="top-d">
            <img src="<?php echo base_url() ?>/uploads/Group-d-t.svg" alt="icon" class="top-d-l">
            <img src="<?php echo base_url() ?>/uploads/Group-d-b.svg" alt="icon" class="bottom-d-l">
            <img src="<?php echo base_url() ?>/uploads/Group-d-b-l.svg" alt="icon" class="bottom-d">
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12">
            <div class="slide-video">
                <iframe width="1239" height="409" src="https://www.youtube.com/embed/-a-WiKo41Ks"
                        title="DNationSoft Website" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                <!--                <img src="presentation video gif.gif" alt="" style="width: 100%;border-radius: 20px;border: 2px solid #E84420;">-->
            </div>
        </div>
    </div>
</section>
<?php } ?>