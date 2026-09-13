<?php
include __DIR__ . '/../includes/i18n.php';

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
        // Hand the order to the Bell registration checkout, exactly as before.
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Soft Engine Ltd.</title>
</head>
<body style="background:#f4f7fc">
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
</body>
</html>
        <?php
        exit();
    }
}

// Bangla wording of the validation messages above (display only; the rules are unchanged).
$errorsBn = array(
    'instituteName' => 'প্রতিষ্ঠানের নাম ৫-১৫০ অক্ষরের মধ্যে হতে হবে।',
    'numberOfStudent' => 'শিক্ষার্থীর সংখ্যা সর্বোচ্চ ২০ অঙ্কের হতে পারবে।',
    'address' => 'ঠিকানা ১০০ অক্ষরের বেশি হতে পারবে না।',
    'director' => 'পরিচালকের নাম ১০০ অক্ষরের বেশি হতে পারবে না।',
    'cellPhone' => 'মোবাইল নম্বর ঠিক ১১ অঙ্কের হতে হবে।',
    'regFee' => 'রেজিস্ট্রেশন ফি-তে শুধু সংখ্যা থাকতে পারবে।',
);
$logoLockup = '<span class="logo-lockup__name">Soft Engine Ltd.</span><span class="logo-lockup__tag">Soft Style Everywhere</span>';
?>
<!DOCTYPE html>
<html lang="bn" data-lang="bn">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Soft Engine Ltd.</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta name="theme-color" content="#0070c0">

    <!-- Favicons -->
    <link href="../assets/img/log-pointer.ico" rel="icon">
    <link href="../assets/img/log-pointer.ico" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@400;500;600;700&family=Caprasimo&family=JetBrains+Mono:wght@400;500&family=Kalam:wght@300&family=Manrope:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="../assets/vendor/lenis/lenis.css" rel="stylesheet">
    <link href="../assets/css/site/base.css?v=2" rel="stylesheet">
    <link href="../assets/css/site/sections.css?v=2" rel="stylesheet">
    <link href="../assets/css/site/ui.css?v=2" rel="stylesheet">

    <script>
        (function (d) {
            var c = d.documentElement, lang = 'bn';
            try {
                var saved = localStorage.getItem('se-lang');
                if (saved === 'en' || saved === 'bn') lang = saved;
            } catch (e) {}
            c.setAttribute('data-lang', lang);
            c.setAttribute('lang', lang);
            c.className += ' js';
            try {
                if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) c.className += ' reduced';
            } catch (e) {}
        })(document);
    </script>
</head>

<body>
<?php include __DIR__ . '/../includes/icons.php'; ?>

<div class="progress" aria-hidden="true"></div>
<div class="cursor" aria-hidden="true"></div>
<div class="cursor-ring" aria-hidden="true"></div>

<!-- ======= Header ======= -->
<header class="site-header" id="header">
    <div class="topbar">
        <div class="container topbar__inner">
            <div class="topbar__contacts">
                <span class="topbar__mails"><svg class="ic"><use href="#i-mail"/></svg><a href="mailto:softengineltd@gmail.com" target="_blank">softengineltd@gmail.com</a><a href="mailto:soft.engine.404@gmail.com" target="_blank">soft.engine.404@gmail.com</a></span>
                <a href="tel:+8801701757796" target="_blank"><svg class="ic"><use href="#i-phone"/></svg>+88 01701-757796</a>
                <a href="https://wa.me/+8801701757796" target="_blank" rel="noopener"><svg class="ic"><use href="#i-whatsapp"/></svg>+88 01701-757796</a>
            </div>
            <div class="topbar__social">
                <a href="https://www.facebook.com/softengineltd" target="_blank" rel="noopener" aria-label="Facebook"><svg class="ic"><use href="#i-facebook"/></svg></a>
            </div>
        </div>
    </div>

    <div class="navbar">
        <div class="container navbar__inner">
            <a class="brand" href="https://www.sebd.co" aria-label="Soft Engine Ltd.">
                <img class="brand__mark" src="../assets/img/logos/se-mark.png"
                     srcset="../assets/img/logos/se-mark.png 1x, ../assets/img/logos/se-mark@2x.png 2x" alt="" width="46" height="46">
                <span class="logo-lockup"><?= $logoLockup ?></span>
            </a>
            <div class="navbar__end">
                <div class="lang-switch" role="group" aria-label="ভাষা / Language">
                    <button type="button" class="lang-switch__btn" data-set-lang="bn" lang="bn" aria-pressed="true">বাং</button>
                    <button type="button" class="lang-switch__btn" data-set-lang="en" lang="en" aria-pressed="false">EN</button>
                </div>
                <a class="btn btn--ghost btn--sm" href="https://www.sebd.co"><?= t('Home', 'হোম') ?></a>
            </div>
        </div>
    </div>
</header><!-- End Header -->

<main id="main">
    <section class="subpage" id="contact">
        <div class="container">
            <div class="section-head section-head--center">
                <p class="eyebrow">Soft Engine Ltd.</p>
                <h1 class="section-title"><?= t('Checkout', 'চেকআউট') ?></h1>
            </div>

            <div class="form-card">
                <form action="checkout.php" method="POST" role="form" id="msg-form" name="msg-form">
                    <div class="form-grid">
                        <div class="field field--9">
                            <label class="sr-only" for="instituteName"><?= t('Institute Name', 'প্রতিষ্ঠানের নাম') ?></label>
                            <input type="text" id="instituteName" name="instituteName" maxlength="100" required class="input"
                                   <?= ta('placeholder', 'Institute Name (5-100 Characters)', 'প্রতিষ্ঠানের নাম (৫-১০০ অক্ষর)') ?>>
                        </div>
                        <div class="field field--3">
                            <label class="sr-only" for="numberOfStudent"><?= t('Number of Students', 'শিক্ষার্থীর সংখ্যা') ?></label>
                            <input type="number" id="numberOfStudent" name="numberOfStudent" maxlength="20" required class="input"
                                   <?= ta('placeholder', 'Number of Students', 'শিক্ষার্থীর সংখ্যা') ?>>
                        </div>
                        <div class="field">
                            <label class="sr-only" for="address"><?= t('Address', 'ঠিকানা') ?></label>
                            <textarea id="address" name="address" maxlength="100" required class="input"
                                      <?= ta('placeholder', 'Address (Max 100 Characters)', 'ঠিকানা (সর্বোচ্চ ১০০ অক্ষর)') ?>></textarea>
                        </div>
                        <div class="field field--6">
                            <label class="sr-only" for="director"><?= t('Director', 'পরিচালক') ?></label>
                            <input type="text" id="director" name="director" maxlength="100" required class="input"
                                   <?= ta('placeholder', 'Director (Max 100 Characters)', 'পরিচালক (সর্বোচ্চ ১০০ অক্ষর)') ?>>
                        </div>
                        <div class="field field--6">
                            <label class="sr-only" for="cellPhone"><?= t('Cell Phone', 'মোবাইল নম্বর') ?></label>
                            <input type="number" id="cellPhone" name="cellPhone" maxlength="11" minlength="11" required class="input"
                                   <?= ta('placeholder', 'Cell Phone (11 Digits)', 'মোবাইল নম্বর (১১ অঙ্ক)') ?>>
                        </div>
                        <div class="field field--6">
                            <label class="sr-only" for="email"><?= t('Email', 'ইমেইল') ?></label>
                            <input type="email" id="email" name="email" required maxlength="100" class="input"
                                   <?= ta('placeholder', 'Email (Max 100 Characters)', 'ইমেইল (সর্বোচ্চ ১০০ অক্ষর)') ?>>
                        </div>
                        <div class="field field--6">
                            <label class="sr-only" for="regFee"><?= t('Registration Fee', 'রেজিস্ট্রেশন ফি') ?></label>
                            <input type="number" id="regFee" name="regFee" required class="input"
                                   <?= ta('placeholder', 'Registration Fee (TAKA)', 'রেজিস্ট্রেশন ফি (টাকা)') ?>>
                        </div>
                    </div>

                    <?php
                    if (!empty($errors)) {
                        echo '<div class="form-errors" role="alert"><ul>';
                        foreach ($errors as $field => $error) {
                            echo '<li>' . t($error, isset($errorsBn[$field]) ? $errorsBn[$field] : $error) . '</li>';
                        }
                        echo '</ul></div>';
                    }
                    ?>

                    <label class="agree">
                        <input type="checkbox" required>
                        <span data-l="en">By clicking this checkbox, you agree to the <a href="#" data-dialog="privacyModal">Privacy Policy</a>,
                            <a href="#" data-dialog="termsModal">Terms and Conditions</a> and <a href="#" data-dialog="refundModal">Refund and Cancellation
                                Policy</a> of software/service purchasing from Soft Engine. You also agree to this purchase,
                            collecting your name, email address and phone number and also agree to be contacted either by
                            email address or phone number provided.</span>
                        <span data-l="bn" lang="bn">এই চেকবক্সে ক্লিক করে আপনি সফট ইঞ্জিন থেকে সফটওয়্যার/সেবা ক্রয়ের
                            <a href="#" data-dialog="privacyModal">গোপনীয়তা নীতি</a>, <a href="#" data-dialog="termsModal">শর্তাবলি</a>
                            এবং <a href="#" data-dialog="refundModal">রিফান্ড ও বাতিলকরণ নীতিমালা</a>-তে সম্মতি দিচ্ছেন। সেই সাথে
                            আপনি এই ক্রয়ে, আপনার নাম, ইমেইল ঠিকানা ও ফোন নম্বর সংগ্রহে এবং প্রদত্ত ইমেইল বা ফোন নম্বরে আপনার সাথে
                            যোগাযোগ করাতেও সম্মতি দিচ্ছেন।</span>
                    </label>

                    <div class="form-actions">
                        <button type="submit" class="btn btn--primary" data-magnetic><?= t('Order', 'অর্ডার করুন') ?> <svg class="ic"><use href="#i-arrow"/></svg></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section" id="pay_partner">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title"><?= t('Payment &amp; Policies', 'পেমেন্ট ও নীতিমালা') ?></h2>
            </div>
            <div class="policies">
                <button type="button" class="policy-btn" data-dialog="refundModal"><?= t('Refund &amp; Cancellation Policy', 'রিফান্ড ও বাতিলকরণ নীতিমালা') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
                <button type="button" class="policy-btn" data-dialog="privacyModal"><?= t('Privacy Policy', 'গোপনীয়তা নীতি') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
                <button type="button" class="policy-btn" data-dialog="termsModal"><?= t('Terms &amp; Conditions', 'শর্তাবলি') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
                <button type="button" class="policy-btn" data-dialog="paySecModal"><?= t('Payment Security', 'পেমেন্ট নিরাপত্তা') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
            </div>
            <div class="paybox">
                <img src="../assets/img/aamarPay.jpg" alt="aamarPay" loading="lazy" width="1600" height="128">
            </div>
        </div>
    </section>
</main><!-- End #main -->

<?php include __DIR__ . '/../modals.php'; ?>

<!-- ======= Footer ======= -->
<footer class="site-footer site-footer--compact is-dark" id="footer">
    <div class="container">
        <div class="footer__row">
            <div class="copyright"><?= t('&copy; Copyright <strong>Soft-Engine</strong>. All Rights Reserved', '&copy; কপিরাইট <strong>সফট-ইঞ্জিন</strong>। সর্বস্বত্ব সংরক্ষিত।') ?></div>
            <div class="footer__social">
                <a href="https://www.facebook.com/softengineltd" target="_blank" rel="noopener" aria-label="Facebook"><svg class="ic"><use href="#i-facebook"/></svg></a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="https://wa.me/+8801701757796" class="float-wa" target="_blank" rel="noopener" aria-label="WhatsApp">
    <svg class="ic"><use href="#i-whatsapp"/></svg>
</a>
<a href="#main" class="to-top" <?= ta('aria-label', 'Back to top', 'উপরে যান') ?>>
    <svg class="to-top__ring" viewBox="0 0 56 56" aria-hidden="true"><circle cx="28" cy="28" r="26"/></svg>
    <svg class="ic to-top__arrow"><use href="#i-arrow-up"/></svg>
</a>

<!-- Scripts -->
<script src="../assets/vendor/gsap/gsap.min.js"></script>
<script src="../assets/vendor/lenis/lenis.min.js"></script>
<script src="../assets/js/site/core.js?v=2"></script>

</body>

</html>
