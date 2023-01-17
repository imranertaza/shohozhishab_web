<?php
    include 'conection.php';

    $package_id = $_GET['data'];
    $sql = "SELECT * FROM packages WHERE package_id=".$package_id;
    $result = mysqli_query($DB, $sql);

    $pack = mysqli_fetch_array($result);
    $charge = '750';
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
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Work+Sans:wght@300;600&display=swap"
          rel="stylesheet">
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
                    <li><a class="nav-link" href="index.php#about">আমাদের সম্পর্কে</a></li>
                    <li><a class="nav-link" href="index.php#need">বৈশিষ্ট্য</a></li>
                    <li><a class="nav-link" href="index.php#price">মূল্য</a></li>
                    <li><a class="nav-link" href="index.php#used">প্রায়শই ব্যবহারকারী</a></li>

                    <li><a class="nav-link" href="index.php#faq">প্রশ্নাবলী</a></li>
                    <li><a class="nav-link" href="index.php#contact2">যোগাযোগ</a></li>
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

<form action="action.php" method="post">
<div id="mail" class="section " style="padding-top: 125px !important;">
    <div class="container">
        <div class="row">
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
                            <input type="hidden" name="package_id" value="<?php echo $pack['package_id']; ?>" required>
                            <p class="price-get"><?php echo $pack['name']; ?></p>
                            <p class="price-get"><?php echo $pack['price']; ?>tk</p>
                        </div>

                        <div class="col-12 d-flex justify-content-between ">
                            <input type="hidden" name="charge" value="<?php echo $charge; ?>" required>
                            <p class="price-cha">Bikas charge</p>
                            <p class="price-cha"><?php echo $charge;?>tk</p>

                        </div>
                        <div class="col-12 ">
                            <hr>
                        </div>
                        <div class="col-12 d-flex justify-content-between ">
                            <p class="price-get">Total</p>
                            <p class="price-get"><?php echo $pack['price'] + $charge ?>tk</p>
                        </div>

                    </div>

            </div>
            <div class="col-3"></div>
        </div>
    </div>
</div>

<section id="home2" class="cd-hero js-cd-hero bac-img"
         style="background-image: url('uploads/bac-get.svg');height: auto;background-position: center;background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6" style="margin-top: 70px; margin-bottom: 70px;">
                <div class="row">
                    <div id="accordion">
                        <div class="input-group col-12">
                            <div id="headingOne" class="col-12">
                                <input class="form-check-input" name="payment_method_id" checked="checked" type="radio"  id="reo1" data-target="#dutcall" data-toggle="collapse" value="1">
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
                                    <p class="pay-two-text">You need to send us ৳ 15270.00</p>
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
                                <input class="form-check-input" name="payment_method_id" type="radio"  id="reo2"
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
                                    <p class="pay-two-text">Rocket: <small style="color:#E84420;
">(How to send money)</small></p>
                                    <p class="pay-two-text">01. Go to your Bkash app or Dial *247#</p>
                                    <p class="pay-two-text">02. Choose “Send Money”</p>
                                    <p class="pay-two-text">03. Enter below Bkash Account Number</p>
                                    <p class="pay-two-text">04. Enter total amount</p>
                                    <p class="pay-two-text">06. Now enter your Bkash Account PIN to confirm the transaction</p>
                                    <p class="pay-two-text">07. Copy Transaction ID from payment confirmation message and paste that Transaction ID below Bkash "Send Money" fee will be added with net price.</p>
                                    <br>
                                    <p class="pay-two-text">You need to send us ৳ 15270.00</p>
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
                                <input class="form-check-input" name="payment_method_id" type="radio"  id="reo3"
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
                                    <p class="pay-two-text">Rocket: <small style="color:#E84420;
">(How to send money)</small></p>
                                    <p class="pay-two-text">01. Go to your Nagad app or Dial *322#</p>
                                    <p class="pay-two-text">02. Choose “Send Money”</p>
                                    <p class="pay-two-text">03. Enter below Nagad Account Number</p>
                                    <p class="pay-two-text">04. Enter total amount</p>
                                    <p class="pay-two-text">06. Now enter your Nagad Account PIN to confirm the transaction</p>
                                    <p class="pay-two-text">07. Copy Transaction ID from payment confirmation message and paste that Transaction ID below Nagad "Send Money" fee will be added with net price.</p>
                                    <br>
                                    <p class="pay-two-text">You need to send us ৳ 15270.00</p>
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

<div id="price" class="section " style="padding-top: 29px !important; padding-bottom: 86px;">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-place-order">Place Order</button>
            </div>
        </div>
    </div>
</div>
</form>

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
            <div class="col-md-12 col-lg-4 col-sm-12 foot-row">
                <p class="sub-ti">সফটওয়্যার গাইডলাইন</p>

                <div class="sub-soft-box">
                    <img src="uploads/bi_arrow-up-circle-fill.svg" onclick="marq_up()" alt="" class="up-btn-mar">
                    <img src="uploads/bi_arrow-up-circle.svg" alt="" onclick="marq_down()" class="dow-btn-mar">
                    <a href="" class="fot-big-btn-ad">বিস্তারিত দেখুন</a>
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


<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="margin-top: 100px;">
        <div class="modal-content" id="sub-modal">
            <div class="modal-header-h" style="text-align: center;">
                <h5 class="modal-title-h">বিস্তারিত জানতে আপনার <br><span class="color-text">ই-মেইল এড্রেস </span> দিয়ে
                    রাখুন</h5>
                <!--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--                    <span aria-hidden="true">&times;</span>-->
                <!--                </button>-->
            </div>
            <div class="modal-body">
                <div class="subscribe-form" style="margin-top: 35px; margin-bottom: 30px; ">
                    <form>
                        <input class="form-control" name="email" placeholder="Email"
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

</script>

</body>
</html>