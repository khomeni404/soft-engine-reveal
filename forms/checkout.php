<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Soft Engine Ltd.</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/log-pointer.ico" rel="icon">
    <link href="../assets/img/log-pointer.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Reveal - v2.1.0
    * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .float{
            position:fixed;
            width:50px;
            height:50px;
            bottom:70px;
            right:10px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:11px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+8801717659287" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:softengineltd@gmail.com" target="_blank">softengineltd@gmail.com</a>
            <i class="fa fa-phone"></i> <a href="tel:+8801717659287" target="_blank">+88 01717-659287</a>
            <i class="fa fa-whatsapp"></i> <a href="https://wa.me/+8801717659287" target="_blank">+88 01717-659287</a>
        </div>
        <div class="social-links float-right">
            <a href="https://www.facebook.com/khomeni404" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/khomeni404" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section><!-- End Top Bar-->

<!-- ======= Header ======= -->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="index.html"><img src="../assets/img/logos/Soft%20Engine%20Logo.PNG" width="400" height="55"
                                      alt=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="https://www.sebd.co">Home</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- End Header -->

<main id="main">
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Checkout</h2>
            </div>
            <div class="form">
                <form onsubmit="return postMessage(event)" method="post" role="form" id="msg-form" name="msg-form"
                      class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" required name="name" class="form-control" id="name"
                                   placeholder="Full Name"
                                   data-rule="minlen:3" data-msg="Please enter at least 4 characters"/>
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" required class="form-control" name="email" id="email"
                                   placeholder="Email Address"
                                   data-rule="email" data-msg="Please enter a valid email"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" required class="form-control" name="subject" id="subject"
                                   placeholder="Phone No."
                                   data-rule="minlen:11" data-msg="Please provide a valid Mobile Number"/>
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your order has been received. Thank you.</div>
                    </div>

                    <div style="text-align: justify">
                        <input type="checkbox">
                        By clicking this checkbox, you agree to the <a href="#" data-toggle="modal" data-target="#privacyModal">Privacy Policy</a>, <a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a> and <a href="#" data-toggle="modal" data-target="#refundModal">Refund and Cancellation Policy</a> of software/service purchasing from Soft Engine. You also agree to this purchase, collecting your name, email address and phone number and also agree to be contacted either by email address or phone number provided.
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit">Order</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<section id="pay_partner" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Payment & Policies</h2>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-3"><a href="#" data-toggle="modal" data-target="#refundModal">Refund & Cancellation Policy</a></div>
            <div class="col-md-3"><a href="#" data-toggle="modal" data-target="#privacyModal">Privacy Policy</a></div>
            <div class="col-md-3"><a href="#" data-toggle="modal" data-target="#termsModal">Terms & Conditions</a></div>
            <div class="col-md-3"><a href="#" data-toggle="modal" data-target="#paySecModal">Payment Security</a></div>
        </div>
        <hr>
        <div>
            <img style="padding: 10px" width="1100px" src="../assets/img/aamarPay.jpg" alt="">
        </div>

    </div>
</section>

<?php include("../modals.php") ?>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Soft-Engine</strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script src="../assets/vendor/php-email-form/sebd.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="../assets/vendor/superfish/superfish.min.js"></script>
<script src="../assets/vendor/hoverIntent/hoverIntent.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>

</body>

</html>