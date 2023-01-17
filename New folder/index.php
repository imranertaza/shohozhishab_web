<?php
    include 'conection.php';

    $sql = "SELECT * FROM packages;";
    $result = mysqli_query($DB, $sql);
?>




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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
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
<div id="preloader">
    <img class="preloader" src="images/ajax-loader.gif" alt="">
</div><!-- end loader -->
<!-- END LOADER -->
<header class="header header_style_01">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="uploads/logo-foot.svg" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp"
                    aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="#home">হোম</a></li>
                    <li><a class="nav-link" href="#about">আমাদের সম্পর্কে</a></li>
                    <li><a class="nav-link" href="#need">বৈশিষ্ট্য</a></li>
                    <li><a class="nav-link" href="#price">মূল্য</a></li>
                    <li><a class="nav-link" href="#used">প্রায়শই ব্যবহারকারী</a></li>

                    <li><a class="nav-link" href="#faq">প্রশ্নাবলী</a></li>
                    <li><a class="nav-link" href="#contact2">যোগাযোগ</a></li>
                    <li><a class="nav-link btn btn-head nav-btn" target="_blank" href="#">View Demo</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="home" class="cd-hero js-cd-hero bac-img"
         style="background-image: url('uploads/slider-bg.svg');height: auto;background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 95px;">
    <div class="row">
        <div class="col-md-12 col-lg-6 col-sm-12" style="margin-top: 25px;">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <p class="slide-ti">কাস্টম <span class="color-text">সফটওয়্যার</span></p>
                        <p class="slide-text">আপনার ব্যবসায়ের ধরন অনুযায়ী আপনার পছন্দমত সফটওয়্যার পাবেন। আমরা আপনার সকল
                            রিকায়ারমেন্ট এর উপর সফটওয়্যার তৈরি করতে প্রস্তুত।</p>
                        <button class="btn btn-slide">Contact Us</button>

                    </div>
                    <div class="carousel-item">
                        <p class="slide-ti">কাস্টম <span class="color-text">সফটওয়্যার</span></p>
                        <p class="slide-text">আপনার ব্যবসায়ের ধরন অনুযায়ী আপনার পছন্দমত সফটওয়্যার পাবেন। আমরা আপনার সকল
                            রিকায়ারমেন্ট এর উপর সফটওয়্যার তৈরি করতে প্রস্তুত।</p>
                        <button class="btn btn-slide">Contact Us</button>
                    </div>
                    <div class="carousel-item">
                        <p class="slide-ti">কাস্টম <span class="color-text">সফটওয়্যার</span></p>
                        <p class="slide-text">আপনার ব্যবসায়ের ধরন অনুযায়ী আপনার পছন্দমত সফটওয়্যার পাবেন। আমরা আপনার সকল
                            রিকায়ারমেন্ট এর উপর সফটওয়্যার তৈরি করতে প্রস্তুত।</p>
                        <button class="btn btn-slide">Contact Us</button>
                    </div>
                </div>

                <button class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <img src="uploads/arrow-right-alt.svg" alt="icon">
                </button>

                <button class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <img src="uploads/arrow-left-alt.svg" alt="icon">
                </button>

            </div>

            <img src="uploads/Group-d.svg" alt="icon" class="top-d">
            <img src="uploads/Group-d-t.svg" alt="icon" class="top-d-l">
            <img src="uploads/Group-d-b.svg" alt="icon" class="bottom-d-l">
            <img src="uploads/Group-d-b-l.svg" alt="icon" class="bottom-d">
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
</section> <!-- .cd-hero -->




<div id="about" class="section ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <img src="uploads/about-img.svg" class="img-fluid about-img" alt="img"/>
            </div>
            <div class="col-lg-5 col-md-6">
                <p class="about-ti">আমাদের <span class="color-text">সম্পর্কে</span></p>
                <p class="about-text">সহজ হিসাব একটি ব্যবসা প্রতিষ্ঠানের ডিজিটালাইজ করতে যে সমস্ত সফটওয়্যার বা ডিভাইস
                    প্রয়োজন হয় সে সমস্ত সফটওয়্যার এবং ডিভাইস আমরা বাজার থেকে কম মূল্যে দিয়ে থাকি, আপনার প্রতিষ্ঠান কে
                    ডিজিটাল করতে আমাদরে সাথে যোগাযোগ করুন।</p>

            </div>
        </div>

    </div>
</div>

<div id="need" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="features-ti">সহজ হিসাব ব্যবহারে <span class="color-text">সুবিধাসমূহ</span></p>


            </div>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12 " style="margin-top: 75px;">
                <ul class="nav nav-tabs tab-btn-h">
                    <li class="nav-item tab-btn-m" data-id="imgChang1" data-url="uploads/breakfast-svgrepo-com 1.svg">
                        <button class="nav-link btn-features active" href="#homeq" >
<!--                            breakfast-svgrepo-com 2.svg-->
                            <img class="resImg" id="imgChang1" src="uploads/breakfast-svgrepo-com 1.svg" alt=""> দ্রুত হিসাব
                        </button>
                    </li>
                    <li class="nav-item tab-btn-m" data-id="imgChang2" data-url="uploads/programming-svgrepo-com (1) 2.svg">
                        <button class="nav-link btn-features" href="#menu1q"  >
                            <img class="resImg" id="imgChang2" src="uploads/programming-svgrepo-com (1) 1.svg" alt=""> টেকনোলজি
                        </button>
                    </li>
                    <li class="nav-item tab-btn-m" data-id="imgChang3" data-url="uploads/time-svgrepo-com 2.svg">
                        <button class="nav-link btn-features" href="#menu2q" >
                            <img class="resImg" id="imgChang3" src="uploads/time-svgrepo-com 1.svg" alt=""> মূল্যবান সময়
                        </button>
                    </li>
                    <li class="nav-item tab-btn-m" data-id="imgChang4" data-url="uploads/paper-svgrepo-com 2.svg">
                        <button class="nav-link btn-features" href="#menu3q" >
                            <img class="resImg" id="imgChang4" src="uploads/paper-svgrepo-com 1.svg" alt=""> কাগজের ব্যবহার
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="tab-content">
                    <div id="homeq" class="container tab-pane active"><br>
                        <p class="features-text">আপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে সহজ হিসাব সফটওয়্যার টি তৈরি
                            করা
                            আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেনআপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে
                            সহজ হিসাব
                            সফটওয়্যার টি তৈরি করা আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেন</p>
                    </div>
                    <div id="menu1q" class="container tab-pane fade"><br>
                        <p class="features-text">আপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে সহজ হিসাব সফটওয়্যার টি তৈরি
                            করা
                            আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেনআপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে
                            সহজ হিসাব
                            সফটওয়্যার টি তৈরি করা আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেন</p>
                    </div>
                    <div id="menu2q" class="container tab-pane fade"><br>
                        <p class="features-text">আপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে সহজ হিসাব সফটওয়্যার টি তৈরি
                            করা
                            আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেনআপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে
                            সহজ হিসাব
                            সফটওয়্যার টি তৈরি করা আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেন</p>
                    </div>
                    <div id="menu3q" class="container tab-pane fade"><br>
                        <p class="features-text">আপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে সহজ হিসাব সফটওয়্যার টি তৈরি
                            করা
                            আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেনআপডেট টেকনোলজি এবং প্রোগ্রামিংয়ের মাধ্যমে
                            সহজ হিসাব
                            সফটওয়্যার টি তৈরি করা আপনি কোন প্রকার সমস্যা ছাড়াই হিসাব করতে পারবেন</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p class="text-features"><a href="javascript:void(0)" class="text-features" data-toggle="modal" data-target="#exampleModal">বিস্তারিত দেখুন</a></p>
            </div>
        </div>

    </div><!-- end container -->
</div><!-- end section -->

<div id="download" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="how-its-work-ti">আপনি কেন <span class="color-text">সফটওয়্যারটি</span> ব্যবহার করবেন? </p>
            </div>
        </div><!-- end col -->
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12">
                <img src="uploads/about-02 1.svg" alt="about" class="w-100">
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12" style="margin-top: 145px;">
                <ul class="ul-soft">
                    <li class="li-text">আপনার প্রতিষ্ঠানের অনেকগুলো কম্পিউটার একটিমাত্র সফটওয়্যার দ্বারা পরিচালনা করতে
                        পারবেন।
                    </li>
                    <li class="li-text">আপনি অনলাইনের মাধ্যমে যেকোনো প্রান্ত থেকে সফটওয়্যার টির হিসাব নিকাশ দেখতে
                        পারবেন।
                    </li>
                    <li class="li-text">আপনার ব্যবসার অনাকাঙ্ক্ষিত ক্ষতির পরিমাণ অনেক কমে যাবে।</li>
                    <li class="li-text">হিসাবের স্বচ্ছতা থাকার কারণে আপনি সবসময় চিন্তামুক্ত থাকতে পারবেন। ফলে আপনি
                        ব্যবসার
                        জন্য ভালো ভালো ডিসিশন নিতে পারবেন।
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div><!-- end how-its-work -->

<div id="features2" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="features2-ti"><span class="color-text">হিসাব হোক সচ্ছ</span> ও ঝামেলা বিহীন</p>
                <p class="features2-ti-text">আয়-ব্যয় এর হিসাব, লেনদেন কারীর তথ্য ও স্মার্ট রিপোর্ট !</p>
            </div>
        </div><!-- end title -->

        <div class="row" style="margin-top: 60px;">
            <div class="col-md-4">
                <div class="row features2-box">
                    <div class="col-2">
                        <img src="uploads/book2151.svg" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-ti">ডেলি বুকে</p>
                    </div>


                    <div class="col-12 mar-t-10">
                        <p class="text-text">এখানে প্রতিদিন এর যাবতীয় আর্থিক লেনদেনের হিসাব পাওয়া যাবে এবং বিগত দিনের
                            হিসাব গুলো এখান
                            থেকে
                            আপনি খুব সহজেই দেখে নিতে পারবেন।</p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="row features2-box">
                    <div class="col-2">
                        <img src="uploads/ledg2098.svg" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-ti">লেজার</p>
                    </div>
                    <div class="col-12 mar-t-10">
                        <p class="text-text">এখানে আপনি লেজার পাবেন, বাজারে যেমন লেজার পাওয়া যায় ঠিক সেভাবে আপনি এখানে
                            দেখতে পাবেন।
                            এখানে
                            কাস্টমারের লেজার পাবেন, ব্যাংক লেজার আপনি খুব সহজেই দেখতে পাবেন, খাতাতে যেমন কম্পিউটারে তেমন
                            এভাবেই পাবেন।</p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="row features2-box">
                    <div class="col-2">
                        <img src="uploads/stock2099.svg" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-ti">স্টক বা স্টোর</p>
                    </div>
                    <div class="col-12 mar-t-10" >
                        <p class="text-text">এখানে আপনার কতগুলো স্টোর রয়েছে বা স্টক রয়েছে এবং প্রত্যেকটা স্টকে কি
                            পরিমান মাল রয়েছে তার
                            বিস্তারিত আপনি স্টক রিপোর্ট থেকে জানতে পারবেন এখানে আপনি ডেট অনুযায়ী সার্চ করে আপনার স্টক
                            মিলাতে পারবেন খুব সহজেই। </p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="row features2-box">
                    <div class="col-2">
                        <img src="uploads/appli2100.svg" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-ti">এমপ্লয়ি ম্যানেজমেন্ট</p>
                    </div>
                    <div class="col-12 mar-t-10">
                        <p class="text-text">এর মাধ্যমে আপনি একজন কর্মচারীর বেতন সেট করতে পারবেন এবং তাকে নির্দিষ্ট টাইম
                            এ বেতন দিতে
                            পারবেন
                            এবং কাকে কোন সময় বেতন দিলেন বা কারোর বেতন বাকি আছে কিনা এই বিষয়ে সম্পর্কে আপনি খুব সহজেই
                            জানতে
                            পারবেন।</p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="row features2-box">
                    <div class="col-2">
                        <img src="uploads/bank2101.svg" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-ti">ব্যাংক একাউন্ট ম্যানেজমেন্ট</p>
                    </div>
                    <div class="col-12 mar-t-10">
                        <p class="text-text">এর মাধ্যমে আপনি আপনার প্রতিষ্ঠান কতগুলি ব্যাংক অ্যাকাউন্ট রয়েছে সেগুলো
                            ম্যানেজ করতে পারবেন
                            এবং
                            প্রতিটা ব্যাংকে কি পরিমান অর্থ ডিপোজিট করলেন অথবা কি পরিমাণ অর্থ উইথ ড্র করলেন, কারোর কাছে
                            কোন
                            চেক পাবেন কিনা বা চেক দিলেন কিনা সমস্ত তথ্য আপনি এই ব্যাংক ম্যানেজমেন্ট এর মাধ্যমে
                            পাবেন।</p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-4">
                <div class="row features2-box">
                    <div class="col-2">
                        <img src="uploads/trans2102.svg" alt="">
                    </div>
                    <div class="col-10">
                        <p class="text-ti">ট্রানজেকশন সেকশন</p>
                    </div>
                    <div class="col-12 mar-t-10">
                        <p class="text-text">এর মাধ্যমে আপনি একটা ব্যবসায় বিভিন্ন ব্যক্তির সাথে ট্রানজেকশন করতে হয়
                            কাস্টমার, সাপ্লায়ার,
                            অ্যাকাউন্ট হোল্ডার এছাড়াও আদার্স এক্সপেন্স বা কিছু ইনকাম হয় সেগুলো প্রত্যেকটা ট্রানজেকশন
                            আপনি
                            খুব সহজেই আমাদের সফটওয়ারের মাধ্যমে লিপিবদ্ধ করে রাখতে পারেন এবং আপনাদের প্রয়োজন মতো এগুলো
                            ব্যবহার করতে পারেন।</p>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-12 text-center" >
                <p class="text-features"></p>
                <a href="javascript:void(0)" class="text-features" data-toggle="modal" data-target="#exampleModal">বিস্তারিত দেখুন</a>
            </div>
        </div>

    </div><!-- end container -->
</div><!-- end section -->

<div id="install" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="install-ti">কি ভাবে আপনার <span class="color-text">কম্পিউটারে ইন্সটল দিবেন</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 " style="margin-top: 100px;">
                <div class="box-row text-center">
                    <img src="uploads/dow2103.svg" data-src="uploads/Group 2115.svg" data-hover="uploads/dow2103.svg"
                         alt="" data-id="img-1" class="img-class img-id-1">
                    <p class="install-text">ডাউনলোড ও আনজিপ করুন</p>
                </div>

                <div class="box-row text-center">
                    <img src="uploads/Vector 55.svg" alt="" class="vec">
                </div>

                <div class="box-row text-center">
                    <img src="uploads/uplod2104.svg" data-src="uploads/uplod2104.svg"
                         data-hover="uploads/Group 2114.svg" alt="" data-id="img-2" class="img-class img-id-2">
                    <p class="install-text">রুট ফাইলে আপলোড করুন</p>
                </div>

                <div class="box-row text-center">
                    <img src="uploads/Vector 56.svg" alt="" class="vec-56 vec">
                </div>

                <div class="box-row text-center">
                    <img src="uploads/db 2105.svg" data-src="uploads/db 2105.svg" data-hover="uploads/Group 2116.svg"
                         alt="" data-id="img-3" class="img-class img-id-3">
                    <p class="install-text">ডাটাবেজ ইমপোর্ট করুন</p>
                </div>

                <div class="box-row text-center">
                    <img src="uploads/Vector 57.svg" alt="" class="vec">
                </div>

                <div class="box-row text-center">
                    <img src="uploads/db 2106.svg" data-src="uploads/db 2106.svg" data-hover="uploads/Group 2117.svg"
                         alt="" data-id="img-4" class="img-class img-id-4">
                    <p class="install-text">ডাটাবেজ কনফিগার করুন</p>
                </div>
            </div>

            <div class="col-12" style="margin-top: 14px; text-align: center;">
                <div class="img-1">
                    <p class="install-text">সহজহিসাব এর ফাইলটা ডাউনলোড করুন এবং আনজিপ করুন।</p>
                    <img src="uploads/config (1).png" alt="" class="">
                </div>

                <div class="img-2" style="display: none">
                    <p class="install-text">সহজহিসাব এর ফাইলটা রুট ফাইলে আপলোড করুন।</p>
                    <img src="uploads/config (2).png" alt="" class="">
                </div>

                <div class="img-3" style="display: none">
                    <p class="install-text">সহজহিসাব এর ডাটাবেজ ইমপোর্ট করুন। </p>
                    <img src="uploads/config (3).png" alt="" class="">
                </div>

                <div class="img-4" style="display: none">
                    <p class="install-text">সহজহিসাব এর ডাটাবেজ কনফিগার করুন।</p>
                    <img src="uploads/config (4).png" alt="" class="">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="price" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p class="price-ti">সহজ হিসাব <span class="color-text">এর মূল্য</span></p>
                <p class="price-text">সহজ হিসাবের সেবা পেতে আপনাকে এককালীন, মাসিক এবং বাৎসরিক মুল্য পরিশোধ করে এই সেবা
                    কিনতে হবে । সহজ হিসাব স্বল্প মুল্যে ও সহজলভ্য একটি প্রিমিয়াম সার্ভিস।</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="margin-top: 50px; margin-left: 40px;">
                <div class="price-box">
                    <p class="price-text-1">Free</p>
                    <p class="price-text-2"><span class="symbol">৳</span> Free</p>
                    <p class="price-text-3">one Month</p>

                    <p class="price-text-5">No Installation fee </p>
                    <center><p><a href="pack_detail.php" class="price-text-6">View Details</a></p></center>
                    <button class="btn btn-price">Get Started</button>
                </div>

<!--                <div class="price-box">-->
<!--                    <p class="price-text-1">Basic</p>-->
<!--                    <p class="price-text-2"><span class="symbol">৳</span> 300</p>-->
<!--                    <p class="price-text-3">Per Month</p>-->
<!---->
<!--                    <p class="price-text-5">Installation <span class="color-text-2">5000tk</span></p>-->
<!--                    <center><p><a href="pack_detail.php" class="price-text-6">View Details</a></p></center>-->
<!--                    <button class="btn btn-price">Get Started</button>-->
<!--                </div>-->
<!--                <div class="price-box">-->
<!--                    <p class="price-text-1">Standard</p>-->
<!--                    <p class="price-text-2"><span class="symbol">৳</span> 400</p>-->
<!--                    <p class="price-text-3">Per Month</p>-->
<!---->
<!--                    <p class="price-text-5">Installation <span class="color-text-2">10000tk</span></p>-->
<!--                    <center><p><a href="pack_detail.php" class="price-text-6">View Details</a></p></center>-->
<!--                    <button class="btn btn-price">Get Started</button>-->
<!--                </div>-->
<!--                <div class="price-box">-->
<!--                    <p class="price-text-1">Premium</p>-->
<!--                    <p class="price-text-2"><span class="symbol">৳</span> 600</p>-->
<!--                    <p class="price-text-3">Per Month</p>-->
<!---->
<!--                    <p class="price-text-5">Installation <span class="color-text-2">15000tk</span></p>-->
<!--                    <center><p><a href="pack_detail.php" class="price-text-6">View Details</a></p></center>-->
<!--                    <button class="btn btn-price">Get Started</button>-->
<!--                </div>-->
                <?php foreach ($result as $row){ ?>

                    <div class="price-box">
                        <p class="price-text-1"><?php echo $row['name']; ?></p>
                        <p class="price-text-2"><span class="symbol">৳</span> <?php echo $row['price']; ?></p>
                        <p class="price-text-3">Per Month</p>

                        <p class="price-text-5">Installation <span class="color-text-2"><?php echo $row['installation_fee']; ?>tk</span></p>
                        <center><p><a href="pack_detail.php" class="price-text-6">View Details</a></p></center>
                        <a href="get_started.php?data=<?php echo $row['package_id']; ?>" class="btn btn-price" style="color: #ffffff">Get Started</a>
                    </div>
                <?php } ?>

                <div class="price-box custom">
                    <p class="price-text-1" style="margin-top: 40px;">Custom</p>
                    <p class="price-text-3">Based on your<br> requirements</p>
                    <p class="price-text-4"><img src="uploads/Group 52.svg" alt=""> Anything</p>
                    <button class="btn btn-price-bt">Contact Us</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="used" class="section" style="padding-top: 0px !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-12">
                        <p class="used-ti"><span class="color-text">যেসব প্রতিষ্ঠানসমূহে</span> একাউন্ট সফটওয়্যারটি
                            ব্যবহার <span class="color-text">করতে পারবেন</span></p>
                    </div>
                    <div class="col-12" style="margin-top: 20px;">
                        <button class="btn btn-used">কর্পোরেট কোম্পানি</button>
                        <button class="btn btn-used">ট্রান্সপোর্ট এজেনসি</button>
                        <button class="btn btn-used">বিভিন্ন খামার</button>
                        <button class="btn btn-used">ছোট ব্যবসায়ী</button>
                        <button class="btn btn-used">ট্রেডিং বিজনেস</button>
                        <button class="btn btn-used">মাছের ঘের</button>
                        <button class="btn btn-used">ইত্যাদি</button>
                    </div>
                    <div class="col-12">
                        <p class="used-text">এ ছাড়াও বিভিন্ন ধরনের দোকান যেমন কাপড়ের ব্যবসা গার্মেন্টসের ব্যবসা জুতার
                            ব্যবসা কসমেটিকস এর ব্যবসা জেনারেল স্টোর ইত্যাদি</p>
                    </div>

                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12">
                <img src="uploads/Group 2040.svg" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>

<div id="client" class="section" style="padding-top: 0px !important;">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <p class="client-ti">আমাদের <span class="color-text">প্রাপ্তি</span></p>
            </div>

        </div>
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between" style="margin-top: 80px; padding: 0px 70px;">
                <img src="uploads/Group.svg" alt="" class="img-us-1">
                <div class="client-box">
                    <p class="client-text">82</p>
                    <p class="client-text-2">ক্লাইন্ট</p>
                </div>

                <div class="client-box">
                    <p class="client-text">82</p>
                    <p class="client-text-2">ব্যবহারকারী</p>
                </div>

                <div class="client-box">
                    <p class="client-text">82</p>
                    <p class="client-text-2">আবেদন ফরম</p>
                </div>

                <div class="client-box">
                    <p class="client-text">21000</p>
                    <p class="client-text-2">প্রক্রিয়াধীন</p>
                </div>

                <img src="uploads/Group.svg" alt="" class="img-us-2">
                <!--                <img src="uploads/Group.svg" alt="" class="img-us-3">-->

            </div>
        </div>
    </div>
</div>

<!--<div id="comment" class="section" style="padding-top: 0px !important; padding-bottom: 0px !important;">-->
<!--    <div class="container">-->

<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <p class="client-ti">ব্যবহারকারীদের <span class="color-text">মন্তব্য</span></p>-->
<!--            </div>-->

<!--            <div class="col-12" style="margin-top: -60px;">-->
<!--                <img src="uploads/video-sty-1.svg" class="video-sty-1" alt="icon">-->

<!--                <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">-->
<!--                    <div class="carousel-inner">-->
<!--                        <div class="carousel-item active">-->
<!--                            <iframe width="900" height="427" src="https://www.youtube.com/embed/hiqwgAv3_Z4" title="YouTube Shorts Advantages and Disadvantages - আপনার সাথে কোনটা হচ্ছে?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                            <p class="vid-text-1" style="margin-top: 30px;">সৈয়দ এরফান এরতেজা</p>-->
<!--                            <p class="vid-text-2">উই উক্স ডিজাইনার</p>-->
<!--                            <img src="uploads/star_ 40.svg" alt="">-->
<!--                        </div>-->
<!--                        <div class="carousel-item">-->
<!--                            <iframe width="900" height="427" src="https://www.youtube.com/embed/hiqwgAv3_Z4" title="YouTube Shorts Advantages and Disadvantages - আপনার সাথে কোনটা হচ্ছে?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                            <p class="vid-text-1" style="margin-top: 30px;">সৈয়দ এরফান এরতেজা</p>-->
<!--                            <p class="vid-text-2">উই উক্স ডিজাইনার</p>-->
<!--                            <img src="uploads/star_ 40.svg" alt="">-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <button class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">-->
<!--                        <img src="uploads/arrow-right-alt.svg" alt="icon">-->
<!--                    </button>-->

<!--                    <button class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">-->
<!--                        <img src="uploads/arrow-left-alt.svg" alt="icon">-->
<!--                    </button>-->
<!--                </div>-->

<!--                <img src="uploads/video-sty-2.svg" class="video-sty-2" alt="icon">-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div id="partner" class="section" style="padding-top: 0px !important;">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <p class="partner-ti">অংশীদারিত্ব</p>
            </div>

        </div>
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between" style="margin-top: 80px;">
                <img src="uploads/logo2 1.svg" alt="" class="pat-img">
                <img src="uploads/logo (2) 1.svg" alt="" class="pat-img">
                <img src="uploads/logo (1) 1.svg" alt="" class="pat-img">

            </div>
        </div>
    </div>
</div>

<div id="faq" class="section" style="background-color: #F9F9FF;padding-top: 0px !important;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="margin-bottom: 100px;">
                <p class="faq-ti">প্রশ্ন <span class="color-text">উত্তর</span></p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <a href="" class="btn-link" type="button" data-toggle="collapse"
                                   data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    সফটওয়্যারে ডাটার সিকিউরিটি কিভাবে থাকবে?
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                আপনি যদি আমাদের অনলাইন প্যাকেজটি বাছাই করেন সেক্ষেত্রে তিনটা স্তরে আপনার ডাটা ব্যাকআপ থাকবে যদি কখনো ডাটা হারিয়ে যায় আমাদের ব্যাকআপ সিস্টেম থেকে আমরা আপনাদের ব্যাপারটি সরবরাহ করতে পারব এবং আপনি চাইলে সফটওয়্যার থেকে নিজেই আপনার পিসিতে সফটওয়্যার ডাটা গুলি নির্দিষ্ট সময় পর পর ব্যাকআপ নিতে পারেন। আর যদি আপনি সিলেক্ট করেন অফলাইন প্যাকেজ সে ক্ষেত্রে আপনার কম্পিউটারে ডাটা গুলি স্টোর হবে আপনি চাইলে নির্দিষ্ট সময় পরপর ডাটাগুলি ব্যাকআপ নিয়ে অনলাইনে যে কোন প্লাটফর্মে আপলোড করে রাখতে পারেন নিজ দায়িত্বে।
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <a href="" class="btn-link collapsed" type="button" data-toggle="collapse"
                                   data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    অনলাইন অথবা অফলাইনে সফটওয়্যারটি ব্যবহার করা যাবে কি?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                আমরা অনলাইন ও অফলাইন দুই ধরনের সফটওয়্যার সার্ভিস দিয়ে থাকি।
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <a href="" class="btn-link collapsed" type="button" data-toggle="collapse"
                                   data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    আমাদের ব্যবসায়িক তথ্যগুলো অন্য কেউ দেখতে পারবে কি?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                আপনার ব্যবসায়ের কোন প্রকার তথ্য অন্য কোন প্রতিষ্ঠান দেখতে পারবে না। এমনকি ইউজার ম্যানেজমেন্ট সিস্টেম থাকার কারণে আপনার প্রতিষ্ঠানের ব্যক্তিদের কেউ নির্দিষ্ট কিছু অংশ দেখাতে পারেন আবার হাইড করেও রাখতে পারেন। যেমন সেলস অফিসার সেলস দেখতে পারবে স্টোর কিপার শুধু স্টোর দেখতে পারবেন ম্যানেজার যতটুকু দেখার প্রয়োজন ততটুকু দেখতে পারবেন।
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree4">
                            <h5 class="mb-0">
                                <a href="" class="btn-link collapsed" type="button" data-toggle="collapse"
                                   data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                    আমাদের প্রয়োজন অনুযায়ী সফটওয়্যার আপডেট করে দিতে পারবেন কি?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                সাধারণ ব্যবসায়িক সফটওয়্যার এর যে বিষয়গুলো দরকার হয়। আমরা সে সমস্ত বিষয়ের উপরে মডিউল তৈরি করে রেখেছি এছাড়াও যদি আপনার যদি ভিন্ন কিছু মডিউল প্রয়োজন পড়ে, সে ক্ষেত্রে আমাদেরকে বললে আলোচনা সাপেক্ষে আপনার সফটওয়্যার টি তৈরি করে দিব।
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree5">
                            <h5 class="mb-0">
                                <a href="" class="btn-link collapsed" type="button" data-toggle="collapse"
                                   data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                    কত দিনে সফটওয়্যার টি ডেলিভারি দিবেন?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                সহজে সব সফটওয়্যার টি এক দিনেই ডেলিভারি দেওয়া সম্ভব সেক্ষেত্রে আপনাকে কিছু কনটেন্ট প্রদান করতে হবে। আর যদি কাস্টমাইজ সফটওয়্যার হয় সেক্ষেত্রে মডিউল অনুযায়ী আলোচনা সাপেক্ষে সফটওয়্যার ডেলিভারি দেওয়া হয়।
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingThree6">
                            <h5 class="mb-0">
                                <a href="" class="btn-link collapsed" type="button" data-toggle="collapse"
                                   data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                    সফটওয়্যারটিতে বাৎসরিক ক্লোজিং করা যায় কি?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                সহজ হিসাব সফটওয়্যারটিতে খুব সহজেই ইয়ারলি ক্লোজিং অথবা হালখাতা করে নিতে পারেন এটি একটি বড় সুবিধা প্রত্যেকটা ব্যবসায়ীর জন্য এবং এই সুবিধাটা ও পেতে আপনাকে তেমন কোন কষ্ট করতে হবে না জাস্ট পাঁচ মিনিটের মধ্যেই ইয়ারলি ক্লোজিং করাতে পারবেন।
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="faq-right">
                    <img src="uploads/5219088 1.svg" class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>


<footer id="contact2" class="footer" style="padding-top: 20px !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe-text">
                    <p class="sub-ti-1">ইমেইল সাবস্ক্রাইব</p>
                    <p class="sub-text">আপনিচাইলে আমাদেরকে ইমেইল সাবস্ক্রাইব করে রাখতে পারেন যার মাধ্যমে আমরা মাঝে মাঝে
                        আপনাকে আমাদের বিভিন্ন অফার সম্পর্কে ইমেইল করতে পারি।</p>
                </div>

                <div class="subscribe-form">
                    <form>
                        <input class="form-control" id="subscribe_email" name="email" placeholder="Email Address..."
                               required="" type="email">
                        <button type="submit" class="btn subscribe-btn">Subscribe</button>
                    </form>
                </div>

                <img src="uploads/Groupsadasdsa.svg" alt="sty" class="style-l">
                <img src="uploads/Groupsadasdsa.svg" alt="sty" class="style-r">
            </div>
        </div>

        <div class="row" style="margin-top: 75px;">
            <div class="col-md-12 col-lg-4 col-sm-12 foot-row">
                <p class="sub-ti">যোগাযোগ</p>
                <div class="sub-box">
                    <div class="sub-box-div-img">
                        <img src="uploads/Group 2107.svg" alt="">
                    </div>
                    <div class="sub-box-div-text">
                        <span class="sub-box-text">13th floor, Multi-Tenant Building, Sheikh Hasina Software Technology Park, Jashore, Khulna, Bangladesh,</span>
                    </div>
                </div>

                <div class="sub-box">
                    <div class="sub-box-div-img">
                        <img src="uploads/Group 2108.svg" alt="">
                    </div>
                    <div class="sub-box-div-text">
                        <span class="sub-box-text">+88 01714070770</span><br>
                        <span class="sub-box-text">+88 01924329315</span><br>
                        <span class="sub-box-text">+88 01851670403</span>
                    </div>
                </div>

                <div class="sub-box">
                    <div class="sub-box-div-img">
                        <img src="uploads/Group 2109.svg" alt="">
                    </div>
                    <div class="sub-box-div-text">
                        <span class="sub-box-text">shohozhisab@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-sm-12 foot-row" >
                <p class="sub-ti">সফটওয়্যার গাইডলাইন</p>

                <div class="sub-soft-box">
                    <img src="uploads/bi_arrow-up-circle-fill.svg" onclick="marq_up()" alt="" class="up-btn-mar">
                    <img src="uploads/bi_arrow-up-circle.svg" alt="" onclick="marq_down()" class="dow-btn-mar">
                    <a href="" class="fot-big-btn-ad" >বিস্তারিত দেখুন</a>
                    <div id="marq" style="height:280px; overflow: hidden;">
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            অ্যাড
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            ডিলিট
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            রিটার্ন
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে ব্যাংক এ টাকা
                            জমা
                            দিবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> ব্যাংকের টাকা
                            ট্র্যান্সফার করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            পারচেজ
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            অ্যাড
                            করবেন</p>

                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            অ্যাড
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            ডিলিট
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে প্রোডাক্ট
                            রিটার্ন
                            করবেন</p>
                        <p class="sub-soft-box-text"><img src="uploads/bi_arrow-right.svg" alt=""> কি ভাবে ব্যাংক এ টাকা
                            জমা
                            দিবেন</p>

                    </div>


                </div>

            </div>
            <div class="col-md-12 col-lg-4 col-sm-12 foot-row">
                <p class="sub-ti">আমাদের অন্যান্য প্রোডাক্ট</p>
                <div class="sub-pro-box">
                    <p class="sub-pro-box-text">স্কুল ম্যানেজমেন্ট</p>
                    <p class="sub-pro-box-text">হসপিটাল ম্যানেজমেন্ট</p>
                    <p class="sub-pro-box-text">ডিজিটাল প্রেসক্রিপশন মেকিং</p>
                    <p class="sub-pro-box-text">পস সিস্টেম</p>
                    <p class="sub-pro-box-text">কাস্টম সফটওয়্যার</p>

                </div>
            </div>
        </div>
    </div>
</footer><!-- end footer -->



<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="margin-top: 100px;">
        <div class="modal-content" id="sub-modal">
            <div class="modal-header-h" style="text-align: center;">
                <h5 class="modal-title-h" >বিস্তারিত জানতে আপনার <br><span class="color-text">ই-মেইল এড্রেস </span> দিয়ে রাখুন</h5>
<!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                    <span aria-hidden="true">&times;</span>-->
<!--                </button>-->
            </div>
            <div class="modal-body">
                <div class="subscribe-form" style="margin-top: 35px; margin-bottom: 30px; ">
                    <form>
                        <input class="form-control"  name="email" placeholder="Email"
                               required="" type="email" style="border: 1px solid #E65100;">
                        <button type="submit" class="btn subscribe-btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
<!--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>






<div class="copyrights">
    <div class="container">
        <div class="footer-distributed d-flex flex-wrap justify-content-between ">
            <div class="footer-copy img">
                <img src="uploads/logo-foot.svg" alt="" class="foot-img">
            </div>
            <div class="footer-left footer-copy">
                <p class="footer-company-name">Copyright © 2022 Shohoz hisab. All right reserved</p>
            </div>
            <div class="footer-icon footer-copy">
                <img src="uploads/Group 2110.svg" alt="icon" class="foot-copy-icon">
                <img src="uploads/Group 2111.svg" alt="icon" class="foot-copy-icon">
                <img src="uploads/Group 2112.svg" alt="icon" class="foot-copy-icon">
                <img src="uploads/Group 2113.svg" alt="icon" class="foot-copy-icon">
            </div>

        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/main.js"></script>
<script src="js/custom.js"></script>
<script src="js/swiper.min.js"></script>
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

    function marq_up(){
        $("#marq").stop(true);
        $("#marq").animate({ scrollTop: $(document).height() }, 10000);
        scrollUp($("#marq"));
    }
    function marq_down(){
        $("#marq").stop(true);
        $('#marq').animate({ scrollTop: 0 }, 800);
        scrollDown($("#marq"));

    }

    function scrollDown(el) {
        el.animate({
            scrollTop: el[0].scrollHeight
        }, 10000, function() {
            scrollUp(el)
        });
    };

    function scrollUp(el) {
        el.animate({
            scrollTop: 0
        }, 10000, function() {
            scrollDown(el);
        });
    };

    scrollDown($("#marq"));


    window.onload = function()
    {
        var navItems = document.getElementsByClassName("nav-item");
        var imageChangeFunction = function(){
            var attribute = this.getAttribute("data-url");
            var imgId = this.getAttribute("data-id");

            $('#imgChang2').attr('src','uploads/programming-svgrepo-com (1) 1.svg');
            $('#imgChang3').attr('src','uploads/time-svgrepo-com 1.svg');
            $('#imgChang4').attr('src','uploads/paper-svgrepo-com 1.svg');
            $('#imgChang1').attr('src','uploads/breakfast-svgrepo-com 2.svg');
            

            var image = document.getElementById(imgId);
            image.src = attribute;
        };

        for (var i = 0; i < navItems.length; i++) {
            navItems[i].addEventListener('click', imageChangeFunction, false);
        }
    }

</script>

</body>
</html>