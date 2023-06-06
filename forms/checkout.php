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
        .float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 70px;
            right: 10px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 11px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/+8801717659287" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $instituteName = $_POST['instituteName'];
    $numberOfStudent = $_POST['numberOfStudent'];
    $address = $_POST['address'];
    $director = $_POST['director'];
    $cellPhone = $_POST['cellPhone'];
    $email = $_POST['email'];
    $regFee = $_POST['regFee'];

    $errors = array();

    if (is_null($instituteName) || strlen($instituteName) < 5 || strlen($instituteName) > 150) {
        $errors['instituteName'] = 'Institute Name should be between 5-150 characters.';
    }

    if (is_null($numberOfStudent) || strlen($numberOfStudent) > 20 || !ctype_digit($numberOfStudent)) {
        $errors['numberOfStudent'] = 'Number of Students should be a maximum of 20 digits.';
    }

    if (is_null($address) || strlen($address) > 100) {
        $errors['address'] = 'Address should not exceed 100 characters.';
    }

    if (is_null($director) || strlen($director) > 100) {
        $errors['director'] = 'Director name should not exceed 100 characters.';
    }

    if (is_null($cellPhone) || strlen($cellPhone) !== 11 || !ctype_digit($cellPhone)) {
        $errors['cellPhone'] = 'Cell Phone should be exactly 11 digits.';
    }

    if (is_null($regFee) || !ctype_digit($regFee)) {
        $errors['regFee'] = 'Registration Fee should contain numbers only.';
    }

    if (empty($errors)) {
        $formData = array(
            'instituteName' => $instituteName,
            'numberOfStudent' => $numberOfStudent,
            'address' => $address,
            'director' => $director,
            'cellPhone' => $cellPhone,
            'email' => $email,
            'regFee' => $regFee
        );

        $jsonData = json_encode($formData);
        ?>

        <script>
            var form = document.createElement('form');
            form.style.display = 'none';
            form.method = 'POST';
            form.action = 'https://bell.sebd.co/home/onlineRegistrationCheckout.se';

            <?php
            foreach ($formData as $name => $value) {
                echo 'var input = document.createElement("input");';
                echo 'input.type = "hidden";';
                echo 'input.name = "' . $name . '";';
                echo 'input.value = ' . json_encode($value) . ';';
                echo 'form.appendChild(input);';
            }
            ?>

            document.body.appendChild(form);
            form.submit();
        </script>

        <?php
        exit();
    }
}
?>

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
            <a href="https://www.sebd.co"><img src="../assets/img/logos/Soft%20Engine%20Logo.PNG" width="400"
                                               height="55"
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
                <form action="checkout.php" method="POST" role="form"
                      id="msg-form" name="msg-form"
                      class="php-email-form">

                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <input type="text" id="instituteName" name="instituteName" maxlength="100"
                                   required class="form-control"
                                   placeholder="Institute Name (5-100 Characters)">
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="number" id="numberOfStudent" name="numberOfStudent" maxlength="20" required
                                   class="form-control"
                                   placeholder="Number of Students">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea id="address" name="address" maxlength="100" required class="form-control"
                                      placeholder="Address (Max 100 Characters)"></textarea>
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" id="director" name="director" maxlength="100" required
                                   class="form-control"
                                   placeholder="Director (Max 100 Characters)">
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" id="cellPhone" name="cellPhone" maxlength="11" minlength="11" required
                                   class="form-control"
                                   placeholder="Cell Phone (11 Digits)">
                            <div class="validate"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" id="email" name="email" required maxlength="100" class="form-control"
                                   placeholder="Email (Max 100 Characters)">
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" id="regFee" name="regFee" required class="form-control"
                                   placeholder="Registration Fee (TAKA)">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <?php
                    if (!empty($errors)) {
                        echo '<div class="mb-3">';
                        echo '<div class="error-message" style="display: block !important;">';
                        echo '<ul>';
                        foreach ($errors as $field => $error) {
                            echo '<li>' . $error . '</li>';
                        }
                        echo '</div></div>';
                    }
                    ?>

                    <div style="text-align: justify">
                        <input type="checkbox" required>
                        By clicking this checkbox, you agree to the <a href="#" data-toggle="modal"
                                                                       data-target="#privacyModal">Privacy Policy</a>,
                        <a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a> and <a
                                href="#" data-toggle="modal" data-target="#refundModal">Refund and Cancellation
                            Policy</a> of software/service purchasing from Soft Engine. You also agree to this purchase,
                        collecting your name, email address and phone number and also agree to be contacted either by
                        email address or phone number provided.
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
            <div class="col-md-3"><a href="#" data-toggle="modal" data-target="#refundModal">Refund & Cancellation
                    Policy</a></div>
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