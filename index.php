<?php include __DIR__ . '/includes/i18n.php'; ?>
<!DOCTYPE html>
<html lang="bn" data-lang="bn">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Soft Engine Ltd.</title>
    <meta name="description"
          content="Soft Engine Ltd. offers advanced Enterprise Management Software Solutions designed to streamline operations and optimize business processes. Our robust software suite empowers organizations with comprehensive tools for finance, human resources, inventory management, and more. Explore our innovative solutions today.">
    <meta content="" name="keywords">
    <meta name="theme-color" content="#0070c0">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sebd.co/">
    <meta property="og:title" content="Soft Engine Ltd.">
    <meta property="og:description"
          content="Soft Engine Ltd. offers advanced Enterprise Management Software Solutions designed to streamline operations and optimize business processes.">

    <!-- Favicons -->
    <link href="assets/img/log-pointer.ico" rel="icon">
    <link href="assets/img/log-pointer.ico" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@400;500;600;700&family=Caprasimo&family=JetBrains+Mono:wght@400;500&family=Kalam:wght@300&family=Manrope:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="assets/vendor/lenis/lenis.css" rel="stylesheet">
    <link href="assets/css/site/base.css?v=2" rel="stylesheet">
    <link href="assets/css/site/sections.css?v=2" rel="stylesheet">
    <link href="assets/css/site/ui.css?v=2" rel="stylesheet">

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
<?php
include __DIR__ . '/includes/icons.php';

$products = array(
    array('School Management', 'স্কুল ম্যানেজমেন্ট'),
    array('Enterprise Resources Planning', 'এন্টারপ্রাইজ রিসোর্স প্ল্যানিং'),
    array('Real Estate Business Solution', 'রিয়েল এস্টেট বিজনেস সল্যুশন'),
    array('Attendance Maintanance', 'উপস্থিতি ব্যবস্থাপনা'),
    array('Admin &amp; Procurement', 'অ্যাডমিন ও প্রকিউরমেন্ট'),
    array('Human Resource Management', 'মানব সম্পদ ব্যবস্থাপনা'),
);
$logoLockup = '<span class="logo-lockup__name">Soft Engine Ltd.</span><span class="logo-lockup__tag">Soft Style Everywhere</span>';
?>

<a class="skip-link" href="#about"><?= t('Skip to content', 'মূল অংশে যান') ?></a>

<!-- ======= Preloader / cursor / progress ======= -->
<div class="preloader" aria-hidden="true">
    <div class="preloader__inner">
        <img class="preloader__mark" src="assets/img/logos/se-mark@2x.png" alt="">
        <div class="preloader__word"><span class="logo-lockup"><?= $logoLockup ?></span></div>
        <div class="preloader__bar"><i></i></div>
    </div>
</div>
<div class="progress" aria-hidden="true"></div>
<div class="cursor" aria-hidden="true"></div>
<div class="cursor-ring" aria-hidden="true"></div>

<!-- ======= Header ======= -->
<header class="site-header" id="header">
    <div class="topbar">
        <div class="container topbar__inner">
            <div class="topbar__contacts">
                <span class="topbar__mails"><svg class="ic"><use href="#i-mail"/></svg><a href="mailto:info@sebd.co" target="_blank">info@sebd.co</a><a href="mailto:softengineltd@gmail.com" target="_blank">softengineltd@gmail.com</a><a href="mailto:soft.engine.404@gmail.com" target="_blank">soft.engine.404@gmail.com</a></span>
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
                <img class="brand__mark" src="assets/img/logos/se-mark.png"
                     srcset="assets/img/logos/se-mark.png 1x, assets/img/logos/se-mark@2x.png 2x" alt="" width="46" height="46">
                <span class="logo-lockup"><?= $logoLockup ?></span>
            </a>

            <div class="navbar__end">
                <nav class="nav" <?= ta('aria-label', 'Main', 'প্রধান মেনু') ?>>
                    <ul class="nav__list">
                        <li><a class="nav__link" href="#home"><?= t('Home', 'হোম') ?></a></li>
                        <li><a class="nav__link" href="#about"><?= t('About Us', 'আমাদের সম্পর্কে') ?></a></li>
                        <li><a class="nav__link" href="#services"><?= t('Products', 'পণ্যসমূহ') ?></a></li>
                        <li><a class="nav__link" href="#portfolio"><?= t('Portfolio', 'পোর্টফোলিও') ?></a></li>
                        <li><a class="nav__link" href="#mgt"><?= t('Management', 'ব্যবস্থাপনা') ?></a></li>
                        <li><a class="nav__link" href="#team"><?= t('Team', 'টিম') ?></a></li>
                        <li><a class="nav__link" href="#contact"><?= t('Contact', 'যোগাযোগ') ?></a></li>
                        <li class="nav__indicator" aria-hidden="true"></li>
                    </ul>
                </nav>

                <div class="lang-switch" role="group" aria-label="ভাষা / Language">
                    <button type="button" class="lang-switch__btn" data-set-lang="bn" lang="bn" aria-pressed="true">বাং</button>
                    <button type="button" class="lang-switch__btn" data-set-lang="en" lang="en" aria-pressed="false">EN</button>
                </div>

                <button class="nav-toggle" type="button" <?= ta('aria-label', 'Menu', 'মেনু') ?> aria-expanded="false" aria-controls="mobile-menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</header><!-- End Header -->

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <ul class="mobile-menu__list">
        <li><a class="mobile-menu__link" style="--i:0" href="#home"><small>01</small><?= t('Home', 'হোম') ?></a></li>
        <li><a class="mobile-menu__link" style="--i:1" href="#about"><small>02</small><?= t('About Us', 'আমাদের সম্পর্কে') ?></a></li>
        <li><a class="mobile-menu__link" style="--i:2" href="#services"><small>03</small><?= t('Products', 'পণ্যসমূহ') ?></a></li>
        <li><a class="mobile-menu__link" style="--i:3" href="#portfolio"><small>04</small><?= t('Portfolio', 'পোর্টফোলিও') ?></a></li>
        <li><a class="mobile-menu__link" style="--i:4" href="#mgt"><small>05</small><?= t('Management', 'ব্যবস্থাপনা') ?></a></li>
        <li><a class="mobile-menu__link" style="--i:5" href="#team"><small>06</small><?= t('Team', 'টিম') ?></a></li>
        <li><a class="mobile-menu__link" style="--i:6" href="#contact"><small>07</small><?= t('Contact', 'যোগাযোগ') ?></a></li>
    </ul>
    <div class="mobile-menu__contact">
        <a href="mailto:info@sebd.co">info@sebd.co</a>
        <a href="mailto:softengineltd@gmail.com">softengineltd@gmail.com</a>
        <a href="mailto:soft.engine.404@gmail.com">soft.engine.404@gmail.com</a>
        <a href="tel:+8801701757796">+88 01701-757796</a>
    </div>
</div>

<main id="main">

    <!-- ======= Hero ======= -->
    <section class="hero" id="home" aria-label="Soft Engine Ltd.">
        <div class="hero__aurora" aria-hidden="true"><span></span><span></span><span></span></div>
        <div class="hero__grid" aria-hidden="true"></div>
        <canvas class="hero__canvas" aria-hidden="true"></canvas>
        <img class="hero__mark" src="assets/img/logos/se-mark@2x.png" alt="" aria-hidden="true">

        <div class="container">
            <div class="hero__content">
                <h1 class="hero__title">
                    <span class="logo-lockup">
                        <span class="line"><span class="line__inner logo-lockup__name">Soft Engine Ltd.</span></span>
                        <span class="logo-lockup__tag">Soft Style Everywhere</span>
                    </span>
                </h1>

                <div class="rotator">
                    <span class="rotator__label"><?= t('Products &amp; Services', 'পণ্য ও সেবা') ?></span>
                    <span class="rotator__words">
                        <?php foreach ($products as $i => $p): ?>
                            <span data-l="en"<?= $i ? '' : ' class="is-first"' ?>><?= $p[0] ?></span>
                            <span data-l="bn" lang="bn"<?= $i ? '' : ' class="is-first"' ?>><?= $p[1] ?></span>
                        <?php endforeach; ?>
                    </span>
                </div>

                <?= tb('p', 'hero__desc',
                    'Soft Engine Ltd. offers advanced Enterprise Management Software Solutions designed to streamline operations and optimize business processes. Our robust software suite empowers organizations with comprehensive tools for finance, human resources, inventory management, and more. Explore our innovative solutions today.',
                    'সফট ইঞ্জিন লিমিটেড প্রতিষ্ঠানের কার্যক্রম সহজ ও গতিশীল করতে এবং ব্যবসায়িক প্রক্রিয়াকে আরও কার্যকর করতে আধুনিক এন্টারপ্রাইজ ম্যানেজমেন্ট সফটওয়্যার সল্যুশন দিয়ে থাকে। আমাদের শক্তিশালী সফটওয়্যার স্যুট ফাইন্যান্স, মানব সম্পদ, ইনভেন্টরি ব্যবস্থাপনাসহ আরও অনেক কাজের জন্য প্রতিষ্ঠানগুলোকে পূর্ণাঙ্গ টুল দেয়। আজই আমাদের উদ্ভাবনী সল্যুশনগুলো ঘুরে দেখুন।') ?>

                <div class="hero__cta">
                    <a class="btn btn--primary" href="#about" data-magnetic><?= t('Get Started', 'শুরু করুন') ?> <svg class="ic"><use href="#i-arrow"/></svg></a>
                    <a class="btn btn--ghost" href="#portfolio" data-magnetic><?= t('Our Projects', 'আমাদের প্রজেক্টসমূহ') ?></a>
                </div>
            </div>
        </div>

        <a class="hero__scroll" href="#about" <?= ta('aria-label', 'About Us', 'আমাদের সম্পর্কে') ?>></a>
    </section><!-- End Hero -->

    <!-- ======= Product ticker ======= -->
    <div class="ticker" aria-hidden="true">
        <div class="ticker__track">
            <?php for ($copy = 0; $copy < 2; $copy++): ?>
                <div class="ticker__group"<?= $copy ? ' data-clone' : '' ?>>
                    <?php for ($rep = 0; $rep < 2; $rep++): foreach ($products as $p): ?>
                        <span class="ticker__item"><?= t($p[0], $p[1]) ?></span><svg class="ic ticker__star"><use href="#i-star"/></svg>
                    <?php endforeach; endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- ======= About Section (light) ======= -->
    <section class="section is-white about" id="about">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">01</span> <?= t('About Us', 'আমাদের সম্পর্কে') ?></p>
                <h2 class="section-title" data-split><?= t('Inspiration', 'অনুপ্রেরণা') ?></h2>
            </div>

            <div class="about__grid">
                <article class="story" data-reveal>
                    <div data-l="bn" lang="bn">
                    <p class="bn">&#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2470;&#2503;&#2486; &#2476;&#2494;&#2434;&#2482;&#2494;&#2470;&#2503;&#2486;&#2404;</p>
                    <p class="bn">&#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2474;&#2509;&#2480;&#2495;&#2527; &#2447; &#2470;&#2503;&#2486; &#2489;&#2527;&#2468;&#2507; &#2474;&#2509;&#2480;&#2479;&#2497;&#2453;&#2509;&#2468;&#2495;&#2468;&#2503; &#2447;&#2453;&#2463;&#2497; &#2474;&#2495;&#2459;&#2495;&#2527;&#2503;&#2404; &#2468;&#2494;&#2439; &#2476;&#2482;&#2503; &#2478;&#2503;&#2471;&#2494; &#2451; &#2488;&#2499;&#2460;&#2472;&#2486;&#2496;&#2482;&#2468;&#2494;&#2527; &#2474;&#2495;&#2459;&#2495;&#2527;&#2503; &#2472;&#2503;&#2439; &#2447;&#2453;&#2463;&#2497;&#2451;&#2404;</p>
                    <p class="bn">&#2474;&#2509;&#2480;&#2479;&#2497;&#2453;&#2509;&#2468;&#2495;&#2468;&#2503; &#2447;&#2453;&#2463;&#2497; &#2474;&#2495;&#2459;&#2495;&#2527;&#2503; &#2469;&#2494;&#2453;&#2494;&#2480; &#2453;&#2494;&#2480;&#2472;&#2503; &#2474;&#2509;&#2480;&#2479;&#2497;&#2453;&#2509;&#2468;&#2495;&#2455;&#2468; &#2488;&#2497;&#2476;&#2495;&#2471;&#2494; &#2476;&#2509;&#2479;&#2494;&#2476;&#2489;&#2494;&#2480;&#2503;&#2451; &#2474;&#2495;&#2459;&#2495;&#2527;&#2503; &#2438;&#2459;&#2503;&#2404; &#2479;&#2503;&#2478;&#2472; &#2471;&#2480;&#2497;&#2472; &#2447;&#2453;&#2463;&#2494; &#2474;&#2509;&#2480;&#2468;&#2495;&#2487;&#2509;&#2464;&#2494;&#2472; &#2453;&#2478;&#2509;&#2474;&#2495;&#2441;&#2463;&#2494;&#2480; &#2476;&#2509;&#2479;&#2476;&#2489;&#2494;&#2480; &#2486;&#2497;&#2480;&#2497; &#2453;&#2480;&#2503;&#2459;&#2503; &#2470;&#2503;&#2480;&#2495;&#2468;&#2503;, &#2488;&#2497;&#2468;&#2480;&#2494;&#2434; MS Word &#2476;&#2509;&#2479;&#2476;&#2489;&#2494;&#2480; &#2486;&#2497;&#2480;&#2497; &#2453;&#2480;&#2503;&#2459;&#2503; &#2470;&#2503;&#2480;&#2495;&#2468;&#2503;, MS Excel &#2470;&#2495;&#2527;&#2503; &#2489;&#2495;&#2488;&#2494;&#2476; &#2486;&#2497;&#2480;&#2497; &#2438;&#2480;&#2451; &#2470;&#2503;&#2480;&#2495;&#2468;&#2503;, &#2439;&#2472;&#2509;&#2463;&#2494;&#2480;&#2472;&#2503;&#2463; &#2488;&#2434;&#2479;&#2507;&#2455; &#2472;&#2495;&#2527;&#2503;&#2459;&#2503; &#2438;&#2480;&#2451; &#2438;&#2480;&#2451; &#2470;&#2503;&#2480;&#2495;&#2468;&#2503; &#2439;&#2468;&#2509;&#2479;&#2494;&#2470;&#2495; &#2439;&#2468;&#2509;&#2479;&#2494;&#2470;&#2495;&#2404;</p>
                    <p class="bn">&#2447;&#2470;&#2495;&#2453;&#2503;, &#2451;&#2439; &#2474;&#2509;&#2480;&#2468;&#2495;&#2487;&#2509;&#2464;&#2494;&#2472;&#2503;&#2480; &#2465;&#2453;&#2497;&#2478;&#2503;&#2472;&#2509;&#2463; &#2476;&#2503;&#2524;&#2503;&#2459;&#2503; &#2437;&#2472;&#2503;&#2453;, &#2489;&#2495;&#2488;&#2494;&#2476; &#2476;&#2503;&#2524;&#2503;&#2459;&#2503; &#2437;&#2472;&#2503;&#2453;, &#2474;&#2497;&#2480;&#2472;&#2507; &#2468;&#2469;&#2509;&#2479;&#2503;&#2480; &#2475;&#2494;&#2439;&#2482; &#2476;&#2503;&#2524;&#2503;&#2459;&#2503; &#2437;&#2472;&#2503;&#2453; &#2453;&#2495;&#2472;&#2509;&#2468;&#2497; &#2476;&#2509;&#2479;&#2476;&#2489;&#2494;&#2480; &#2453;&#2480;&#2494; &#2489;&#2527;&#2472;&#2495; &#2453;&#2507;&#2472; &#2488;&#2475;&#2463;&#2451;&#2527;&#2509;&#2479;&#2494;&#2480;&#2404; &#2479;&#2494;&#2480; &#2475;&#2482;&#2503; &#2489;&#2494;&#2480;&#2495;&#2527;&#2503;&#2459;&#2503; &#2455;&#2497;&#2480;&#2497;&#2468;&#2509;&#2476;&#2474;&#2498;&#2480;&#2509;&#2467; &#2437;&#2472;&#2503;&#2453; &#2465;&#2453;&#2497;&#2478;&#2503;&#2472;&#2509;&#2463;, &#2489;&#2495;&#2488;&#2494;&#2476;&#2503; &#2489;&#2458;&#2509;&#2459;&#2503; &#2455;&#2480;&#2478;&#2495;&#2482;, &#2458;&#2494;&#2439;&#2482;&#2503;&#2439; &#2472;&#2495;&#2478;&#2495;&#2487;&#2503; &#2474;&#2494;&#2451;&#2527;&#2494; &#2479;&#2494;&#2458;&#2509;&#2459;&#2503; &#2472;&#2494; &#2474;&#2509;&#2480;&#2527;&#2507;&#2460;&#2472;&#2496;&#2527; &#2468;&#2469;&#2509;&#2479;&#2404;</p>
                    <p class="bn">&#2458;&#2482;&#2468;&#2495; &#2470;&#2486;&#2453;&#2503; &#2453;&#2478;&#2509;&#2474;&#2495;&#2441;&#2463;&#2494;&#2480; &#2476;&#2509;&#2479;&#2494;&#2476;&#2489;&#2494;&#2480;&#2503;&#2480; &#2488;&#2434;&#2454;&#2509;&#2479;&#2494; &#2437;&#2453;&#2482;&#2509;&#2474;&#2472;&#2496;&#2527; &#2489;&#2494;&#2480;&#2503; &#2476;&#2499;&#2470;&#2509;&#2471;&#2495; &#2474;&#2503;&#2527;&#2503;&#2459;&#2503;, &#2453;&#2495;&#2472;&#2509;&#2468;&#2497; &#2447;&#2453;&#2463;&#2495; &#2453;&#2478;&#2509;&#2474;&#2495;&#2441;&#2463;&#2494;&#2480; &#2479;&#2503; &#2474;&#2480;&#2495;&#2478;&#2494;&#2467; &#2453;&#2494;&#2460; &#2453;&#2480;&#2494;&#2480; &#2488;&#2494;&#2478;&#2480;&#2509;&#2469;&#2509;&#2479; &#2472;&#2495;&#2527;&#2503; &#2460;&#2472;&#2509;&#2478;&#2503;&#2459;&#2503; &#2468;&#2494;&#2480; &#2454;&#2497;&#2476;&#2439; &#2437;&#2482;&#2509;&#2474; &#2474;&#2480;&#2495;&#2478;&#2494;&#2467; &#2438;&#2478;&#2480;&#2494; &#2439;&#2441;&#2463;&#2495;&#2482;&#2494;&#2439;&#2460; &#2453;&#2480;&#2503;&#2459;&#2495;&#2404; &#2438;&#2478;&#2480;&#2494; &#2458;&#2494;&#2439;&#2482;&#2503;&#2439; &#2453;&#2478;&#2509;&#2474;&#2495;&#2441;&#2463;&#2494;&#2480;&#2503;&#2480; &#2478;&#2488;&#2509;&#2468;&#2495;&#2487;&#2509;&#2453;&#2453;&#2503; &#2438;&#2480;&#2451; &#2453;&#2494;&#2460;&#2503; &#2482;&#2494;&#2455;&#2494;&#2468;&#2503; &#2474;&#2494;&#2480;&#2468;&#2494;&#2478;, &#2489;&#2495;&#2488;&#2494;&#2476; &#2472;&#2495;&#2453;&#2494;&#2486; &#2453;&#2503; &#2438;&#2480;&#2451; &#2488;&#2489;&#2460; &#2453;&#2480;&#2468;&#2503; &#2474;&#2494;&#2480;&#2468;&#2494;&#2478;&#2404; &#2447; &#2471;&#2480;&#2472;&#2503;&#2480; &#2474;&#2470;&#2453;&#2509;&#2487;&#2503;&#2474; &#2472;&#2495;&#2468;&#2503; &#2455;&#2495;&#2527;&#2503;&#2451; &#2472;&#2503;&#2439;&#2472;&#2495;&#2404; &#2453;&#2495;&#2472;&#2509;&#2468;&#2497; &#2453;&#2503;&#2472;?</p>
                        <ul class="checks">
                            <li><svg class="ic"><use href="#i-check"/></svg><span class="bn">&#2453;&#2478;&#2509;&#2474;&#2495;&#2441;&#2463;&#2494;&#2480;/&#2478;&#2494;&#2482;&#2509;&#2463;&#2495;&#2478;&#2495;&#2465;&#2495;&#2527;&#2494; &#2465;&#2495;&#2477;&#2494;&#2439;&#2488; &#2459;&#2495;&#2482;&#2507; &#2472;&#2494;&#2404;</span></li>
                            <li><svg class="ic"><use href="#i-check"/></svg><span class="bn">&#2439;&#2472;&#2509;&#2463;&#2494;&#2480;&#2472;&#2503;&#2463; &#2488;&#2497;&#2476;&#2495;&#2471;&#2494; &#2459;&#2495;&#2482;&#2507; &#2472;&#2494; / &#2488;&#2489;&#2460;&#2482;&#2477;&#2509;&#2479; &#2459;&#2495;&#2482;&#2507; &#2472;&#2494;&#2404;</span></li>
                            <li><svg class="ic"><use href="#i-check"/></svg><span class="bn">&#2438;&#2439;&#2488;&#2495;&#2463;&#2495;'&#2480; &#2477;&#2494;&#2482;&#2507; &#2460;&#2509;&#2462;&#2494;&#2472; &#2459;&#2495;&#2482;&#2507; &#2472;&#2494;&#2404;</span></li>
                        </ul>
                        <p class="bn">&#2453;&#2495;&#2472;&#2509;&#2468;&#2497; &#2476;&#2480;&#2509;&#2468;&#2478;&#2494;&#2472;&#2503; &#2453;&#2478;&#2509;&#2474;&#2495;&#2441;&#2463;&#2494;&#2480; &#2451; &#2439;&#2472;&#2509;&#2463;&#2494;&#2480;&#2472;&#2503;&#2463;&#2503;&#2480; &#2488;&#2489;&#2460;&#2482;&#2477;&#2509;&#2479;&#2468;&#2494; &#2451; &#2463;&#2503;&#2453; &#2465;&#2495;&#2477;&#2494;&#2439;&#2488;&#2503;&#2480; &#2488;&#2494;&#2469;&#2503; &#2488;&#2476; &#2486;&#2509;&#2480;&#2503;&#2467;&#2496;&#2480; &#2478;&#2494;&#2472;&#2497;&#2487;&#2503;&#2480; &#2437;&#2476;&#2495;&#2480;&#2494;&#2478; &#2439;&#2472;&#2509;&#2463;&#2494;&#2480;&zwj;&#2509;&#2479;&#2494;&#2453;&#2486;&#2472; &#2476;&#2503;&#2524;&#2503; &#2455;&#2503;&#2459;&#2503; &#2437;&#2472;&#2503;&#2453; &#2455;&#2497;&#2472; &#2404; &#2468;&#2494;&#2439; &#2438;&#2480; &#2470;&#2503;&#2480;&#2495; &#2472;&#2527; &#2438;&#2488;&#2497;&#2472; &#2488;&#2476;&#2494;&#2439; &#2478;&#2495;&#2482;&#2503; &#2463;&#2503;&#2453; &#2476;&#2503;&#2439;&#2460;&#2509;&#2465; &#2437;&#2475;&#2495;&#2488; &#2476;&#2494; &#2474;&#2509;&#2480;&#2468;&#2495;&#2487;&#2509;&#2464;&#2494;&#2472;&#2503;&#2480; &#2470;&#2495;&#2453;&#2503; &#2437;&#2455;&#2509;&#2480;&#2488;&#2480; &#2489;&#2439; &#2404; &#2438;&#2478;&#2480;&#2494; &#2438;&#2459;&#2495; &#2438;&#2474;&#2472;&#2494;&#2470;&#2503;&#2480; &#2474;&#2494;&#2486;&#2503; &#2404;</p>
                    </div>
                    <div data-l="en">
                        <p>Our country, Bangladesh.</p>
                        <p>Our beloved country may be a little behind in technology. But that doesn't mean it lags even
                            slightly in talent and creativity.</p>
                        <p>Being a little behind in technology, we are also behind in using its benefits. Take an
                            institution that started using computers late - so it started using MS Word late, started
                            keeping accounts in MS Excel even later, got an internet connection later still, and so on.</p>
                        <p>Meanwhile, that institution's documents grew, its accounts grew, its files of old records grew
                            - but no software was ever used. As a result, many important documents were lost, the accounts
                            don't add up, and the information you need can't be found in an instant.</p>
                        <p>In this decade, computer use has grown at an unimaginable rate, yet we have used only a tiny
                            fraction of what a computer was built to do. We could have put the computer's brain to much
                            better use and made our accounts far easier. We set out to take such steps, but never did. But
                            why?</p>
                        <ul class="checks">
                            <li><svg class="ic"><use href="#i-check"/></svg><span>There were no computers or multimedia devices.</span></li>
                            <li><svg class="ic"><use href="#i-check"/></svg><span>There was no internet access, or it wasn't easy to get.</span></li>
                            <li><svg class="ic"><use href="#i-check"/></svg><span>There wasn't good knowledge of ICT.</span></li>
                        </ul>
                        <p>But today computers and the internet are easy to come by, and people from every walk of life
                            interact with tech devices many times more than before. So let's delay no more - let's all move
                            together towards tech-based offices and institutions. We are right beside you.</p>
                    </div>
                </article>

                <aside class="about__side">
                    <div class="terminal" data-reveal>
                        <div class="terminal__bar"><i></i><i></i><i></i><span>sebd.co</span></div>
                        <div class="terminal__body">
                            <p class="terminal__line terminal__line--main"><span class="terminal__prompt" aria-hidden="true">&gt;</span><span data-type>Think Twice Code Once</span><span class="type-caret" aria-hidden="true"></span></p>
                            <p class="terminal__line terminal__comment"><?= t('// Vision &middot; Creativity &middot; Passion &middot; Great Solutions', '// লক্ষ্য &middot; সৃজনশীলতা &middot; প্যাশন &middot; সেরা সমাধান') ?></p>
                        </div>
                    </div>

                    <div class="engine-art" aria-hidden="true">
                        <span class="engine-art__ring"></span>
                        <span class="engine-art__ring"></span>
                        <span class="engine-art__ring"></span>
                        <img class="engine-art__core" src="assets/img/logos/se-mark@2x.png" alt="">
                    </div>
                </aside>
            </div>

            <div class="values">
                <article class="value-card card spot" data-reveal>
                    <div class="value-card__top">
                        <span class="value-card__icon icon-chip"><svg class="ic"><use href="#i-eye"/></svg></span>
                        <span class="value-card__num">01</span>
                    </div>
                    <h3><?= t('Vision', 'লক্ষ্য') ?></h3>
                    <p class="bn" data-l="bn" lang="bn">&#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2470;&#2503;&#2486;&#2503;&#2480; &#2474;&#2509;&#2480;&#2468;&#2495;&#2487;&#2509;&#2464;&#2494;&#2472; &#2455;&#2497;&#2482;&#2507;&#2453;&#2503; &#2488;&#2475;&#2463;&#2451;&#2527;&#2509;&#2479;&#2494;&#2480; &#2476;&#2509;&#2479;&#2494;&#2476;&#2489;&#2494;&#2480;&#2503; &#2441;&#2470;&#2509;&#2476;&#2497;&#2470;&#2509;&#2471; &#2453;&#2480;&#2494;&#2480; &#2460;&#2472;&#2509;&#2479; &#2478;&#2495;&#2472;&#2495;&#2478;&#2494;&#2478; &#2475;&#2495;&#2458;&#2494;&#2480; &#2488;&#2478;&#2499;&#2470;&#2509;&#2471; &#2475;&#2509;&#2480;&#2495; &#2437;&#2472;&#2482;&#2494;&#2439;&#2472; &#2488;&#2475;&#2463;&#2451;&#2527;&#2509;&#2479;&#2494;&#2480;&#2503;&#2480; &#2476;&#2509;&#2479;&#2476;&#2488;&#2509;&#2469;&#2494; &#2453;&#2480;&#2494;</p>
                    <p data-l="en">To provide free online software with the essential features, to encourage the
                        institutions of our country to use software.</p>
                </article>

                <article class="value-card card spot" data-reveal>
                    <div class="value-card__top">
                        <span class="value-card__icon icon-chip"><svg class="ic"><use href="#i-spark"/></svg></span>
                        <span class="value-card__num">02</span>
                    </div>
                    <h3><?= t('Creativity', 'সৃজনশীলতা') ?></h3>
                    <p class="bn" data-l="bn" lang="bn">&#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2478;&#2488;&#2509;&#2468;&#2495;&#2487;&#2509;&#2453;&#2503; &#2479;&#2503;&#2472; &#2488;&#2453;&#2482; &#2476;&#2495;&#2487;&#2527;&#2503;&#2480; &#2472;&#2495;&#2527;&#2478; &#2453;&#2494;&#2472;&#2497;&#2472; &#2488;&#2503;&#2463; &#2453;&#2480;&#2503; &#2466;&#2497;&#2453;&#2495;&#2527;&#2503; &#2470;&#2503;&#2527;&#2494; &#2438;&#2459;&#2503; - &#2447;&#2463;&#2494; &#2447;&#2478;&#2472; &#2453;&#2480;&#2503; &#2453;&#2480;&#2468;&#2503; &#2489;&#2527; &#2451;&#2463;&#2494; &#2451;&#2477;&#2494;&#2476;&#2503; &#2453;&#2480;&#2468;&#2503; &#2489;&#2527;, &#2458;&#2495;&#2464;&#2495; &#2447;&#2477;&#2494;&#2476;&#2503; &#2482;&#2495;&#2454;&#2468;&#2503; &#2489;&#2527;, &#2470;&#2480;&#2454;&#2494;&#2488;&#2509;&#2468; &#2451;&#2477;&#2494;&#2476;&#2503; &#2404; &#2468;&#2494;&#2489;&#2482;&#2503; &#2472;&#2468;&#2497;&#2472; &#2458;&#2495;&#2472;&#2509;&#2468;&#2494;&#2480; &#2453;&#2495; &#2437;&#2476;&#2453;&#2494;&#2486; &#2480;&#2439;&#2482;&#2507; ! &#2447; &#2455;&#2472;&#2509;&#2465;&#2495;&#2480; &#2476;&#2494;&#2439;&#2480;&#2503; &#2447;&#2488;&#2503; &#2438;&#2478;&#2480;&#2494;, &#2447;&#2463;&#2494; &#2447;&#2477;&#2494;&#2476;&#2503; &#2453;&#2480;&#2495;, &#2451;&#2463;&#2494; &#2451;&#2477;&#2494;&#2476;&#2503; &#2453;&#2480;&#2495; - &#2453;&#2494;&#2480;&#2507; &#2474;&#2480;&#2494;&#2478;&#2480;&#2509;&#2486; &#2469;&#2494;&#2453;&#2482;&#2503; &#2474;&#2480;&#2495;&#2476;&#2480;&#2509;&#2468;&#2472;&#2503;&#2480; &#2437;&#2476;&#2453;&#2494;&#2486; &#2468;&#2507; &#2480;&#2439;&#2482;&#2507; &#2404; &#2472;&#2495;&#2460;&#2503;&#2470;&#2503;&#2480; &#2453;&#2494;&#2460;&#2503;&#2480; &#2474;&#2509;&#2480;&#2527;&#2507;&#2460;&#2472;&#2503; &#2472;&#2495;&#2460;&#2503;&#2480; &#2474;&#2459;&#2472;&#2509;&#2470; &#2478;&#2468;&#2472; &#2451;&#2527;&#2503; &#2441;&#2470;&#2509;&#2477;&#2494;&#2476;&#2472; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2474;&#2509;&#2480;&#2471;&#2494;&#2472; &#2482;&#2453;&#2509;&#2487;&#2509;&#2479; &#2404;</p>
                    <p data-l="en">It's as if the rules for everything have already been set and planted in our minds -
                        this must be done like this, that must be done like that, a letter is written this way, an
                        application that way. Then what room is left for new thinking! Stepping outside that boundary, we
                        say: we do this this way and that that way - and if anyone has a suggestion, there is always room
                        to change. Inventing our own ways of working, to suit what the work needs, is our main goal.</p>
                </article>

                <article class="value-card card spot" data-reveal>
                    <div class="value-card__top">
                        <span class="value-card__icon icon-chip"><svg class="ic"><use href="#i-flame"/></svg></span>
                        <span class="value-card__num">03</span>
                    </div>
                    <h3><?= t('Passion', 'প্যাশন') ?></h3>
                    <p class="bn" data-l="bn" lang="bn">&#2472;&#2495;&#2474;&#2497;&#2472; &#2453;&#2494;&#2460;&#2503;&#2480; &#2474;&#2503;&#2459;&#2472;&#2503; &#2482;&#2497;&#2453;&#2495;&#2527;&#2503; &#2469;&#2494;&#2453;&#2503; &#2453;&#2494;&#2480;&#2495;&#2455;&#2480;&#2503;&#2480; &#2453;&#2494;&#2460;&#2503;&#2480; &#2474;&#2509;&#2480;&#2468;&#2495; &#2437;&#2453;&#2499;&#2468;&#2509;&#2480;&#2495;&#2478; &#2477;&#2494;&#2482;&#2507;&#2476;&#2494;&#2488;&#2494; &#2404; &#2447;&#2453;&#2503;&#2453; &#2460;&#2472; &#2447;&#2453;&#2503;&#2453; &#2453;&#2494;&#2460;&#2503; &#2478;&#2460;&#2494; &#2474;&#2494;&#2527;, &#2453;&#2503;&#2451;&#2476;&#2494; &#2438;&#2453;&#2494;&#2486;&#2503; &#2465;&#2494;&#2472;&#2494; &#2478;&#2503;&#2482;&#2503;, &#2453;&#2503;&#2451;&#2476;&#2494; &#2459;&#2476;&#2495; &#2447;&#2453;&#2503;, &#2453;&#2503;&#2451;&#2476;&#2494; &#2478;&#2497;&#2477;&#2495; &#2470;&#2503;&#2454;&#2503;, &#2453;&#2503;&#2451;&#2476;&#2494; &#2438;&#2476;&#2494;&#2480; &#2454;&#2503;&#2482;&#2494; &#2470;&#2503;&#2454;&#2503; &#2404; &#2438;&#2478;&#2494;&#2470;&#2503;&#2480; &#2475;&#2494;&#2480;&#2509;&#2478;&#2503; &#2447;&#2478;&#2472;&#2439; &#2447;&#2453; &#2461;&#2494;&#2433;&#2453; &#2468;&#2480;&#2497;&#2472;-&#2468;&#2480;&#2497;&#2467;&#2496; &#2479;&#2494;&#2480;&#2494; &#2474;&#2509;&#2480;&#2507;&#2455;&#2509;&#2480;&#2494;&#2478; &#2482;&#2495;&#2454;&#2503;&#2439; &#2478;&#2460;&#2494; &#2474;&#2494;&#2527;, &#2474;&#2509;&#2480;&#2476;&#2482;&#2503;&#2478; &#2488;&#2482;&#2509;&#2479;&#2497;&#2486;&#2472;&#2503;&#2439; &#2479;&#2503;&#2472; &#2468;&#2494;&#2470;&#2503;&#2480; &#2458;&#2507;&#2454; &#2438;&#2472;&#2472;&#2509;&#2470;&#2503; &#2477;&#2480;&#2503; &#2451;&#2464;&#2503; &#2404;</p>
                    <p data-l="en">Behind skilful work lies the craftsman's genuine love for the craft. Everyone finds
                        joy in something different - some spread their wings in the sky, some paint, some watch movies,
                        some watch sports. Our firm is home to just such a bunch of young men and women, who find their
                        joy in writing programs; solving a problem is what makes their eyes light up.</p>
                </article>

                <article class="value-card card spot" data-reveal>
                    <div class="value-card__top">
                        <span class="value-card__icon icon-chip"><svg class="ic"><use href="#i-bulb"/></svg></span>
                        <span class="value-card__num">04</span>
                    </div>
                    <h3><?= t('Great Solutions', 'সেরা সমাধান') ?></h3>
                    <p class="bn" data-l="bn" lang="bn">"&#2469;&#2495;&#2457;&#2509;&#2453;&#2495;&#2434; &#2439;&#2460; &#2478;&#2494;&#2488;&#2509;&#2463; &#2476;&#2495;&#2475;&#2507;&#2480; &#2465;&#2497;&#2439;&#2434; &#2447;&#2472;&#2495;&#2469;&#2495;&#2434;" &#2404; &#2488;&#2475;&#2463;&#2451;&#2527;&#2509;&#2479;&#2494;&#2480; &#2439;&#2472;&#2509;&#2465;&#2494;&#2488;&#2509;&#2463;&#2509;&#2480;&#2495;&#2468;&#2503; &#2453;&#2509;&#2487;&#2468;&#2495;&#2480; &#2476;&#2524; &#2453;&#2494;&#2480;&#2467; &#2489;&#2482;&#2507; "&#2453;&#2509;&#2482;&#2494;&#2527;&#2503;&#2472;&#2509;&#2463;&#2503;&#2480; &#2476;&#2495;&#2460;&#2472;&#2503;&#2488;" &#2472;&#2494; &#2476;&#2497;&#2461;&#2503;&#2439; &#2488;&#2475;&#2463;&#2451;&#2527;&#2509;&#2479;&#2494;&#2480; &#2465;&#2495;&#2477;&#2495;&#2482;&#2474;&#2478;&#2503;&#2472;&#2509;&#2463; &#2488;&#2509;&#2463;&#2494;&#2480;&#2509;&#2463; &#2453;&#2480;&#2494; &#2404; &#2479;&#2494; &#2474;&#2480;&#2476;&#2480;&#2509;&#2468;&#2496;&#2468;&#2503; &#2488;&#2475;&#2463;&#2451;&#2527;&#2509;&#2479;&#2494;&#2480; &#2475;&#2494;&#2480;&#2509;&#2478;&#2503;&#2480; &#2438;&#2480;&#2509;&#2469;&#2495;&#2453; &#2447;&#2476;&#2434; &#2453;&#2509;&#2482;&#2494;&#2527;&#2503;&#2472;&#2509;&#2463;&#2503;&#2480; &#2488;&#2478;&#2527;&#2503;&#2480; &#2476;&#2509;&#2479;&#2494;&#2474;&#2453; &#2453;&#2509;&#2487;&#2468;&#2495; &#2465;&#2503;&#2453;&#2503; &#2438;&#2472;&#2503; &#2404; &#2488;&#2497;&#2468;&#2480;&#2494;&#2434; "Think Twice Code Once" &#2472;&#2496;&#2468;&#2495;&#2476;&#2494;&#2453;&#2509;&#2479; &#2478;&#2503;&#2472;&#2503; &#2438;&#2478;&#2480;&#2494; &#2453;&#2478; &#2488;&#2478;&#2527;&#2503; &#2488;&#2476;&#2458;&#2503; &#2488;&#2497;&#2472;&#2509;&#2470;&#2480; &#2476;&#2495;&#2460;&#2472;&#2503;&#2488; &#2465;&#2507;&#2478;&#2503;&#2439;&#2472; &#2465;&#2495;&#2460;&#2494;&#2439;&#2472;&#2503; &#2488;&#2470;&#2494; &#2488;&#2458;&#2503;&#2488;&#2509;&#2463; &#2404;</p>
                    <p data-l="en">“Thinking is a must before doing anything.” A big cause of loss in the software
                        industry is starting development without understanding the client's business - which later costs
                        the software firm heavily in money and the client in time. So, following the motto “Think Twice
                        Code Once”, we always strive to design the finest business domain in the least time.</p>
                </article>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section (dark) ======= -->
    <section class="section is-dark products" id="services">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">02</span> <?= t('Products', 'পণ্যসমূহ') ?></p>
                <h2 class="section-title" data-split><?= t('Products &amp; Services', 'পণ্য ও সেবাসমূহ') ?></h2>
            </div>

            <div class="products__intro" data-scrub>
                <div data-l="en">
                    <p>Day by day the range of enterprise is getting wide. Simultaneously it is becoming more complex to
                        maintain such business. Here we are to make you familiar with the technologies that can simplify
                        the whole enterprise system. It will save your time, money and enforce security as well. Software
                        system comes to ensure perfect management, savings and information protection and we are committed
                        to do so.</p>
                    <p>We are committed to simplify the complex business style, inspire entrepreneurship, remove headache
                        and ensure long-term sustainability.</p>
                </div>
                <div data-l="bn" lang="bn">
                    <p>দিন দিন ব্যবসার পরিসর বড় হচ্ছে, সেই সাথে এমন ব্যবসা পরিচালনা করাও ক্রমশ জটিল হয়ে উঠছে। আমরা
                        আপনাকে এমন সব প্রযুক্তির সাথে পরিচয় করিয়ে দিতে চাই, যা পুরো এন্টারপ্রাইজ ব্যবস্থাকে সহজ করে তুলতে
                        পারে। এতে আপনার সময় ও অর্থ দুটোই বাঁচবে, নিরাপত্তাও নিশ্চিত হবে। সফটওয়্যার সিস্টেম নিখুঁত ব্যবস্থাপনা,
                        সাশ্রয় ও তথ্যের সুরক্ষা নিশ্চিত করে - আর আমরা তা নিশ্চিত করতে প্রতিশ্রুতিবদ্ধ।</p>
                    <p>জটিল ব্যবসায়িক ধারাকে সহজ করা, উদ্যোক্তা হতে অনুপ্রাণিত করা, দুশ্চিন্তা দূর করা এবং দীর্ঘমেয়াদি
                        টেকসই ব্যবস্থা নিশ্চিত করতে আমরা প্রতিশ্রুতিবদ্ধ।</p>
                </div>
            </div>

            <div class="products__grid">
                <?php
                $productCards = array(
                    array('i-school',
                        'Student, Class, Exam, Result, Fees, Salary. etc. are the key features for a school. We provide solutions and many more things along with key features.',
                        'শিক্ষার্থী, ক্লাস, পরীক্ষা, ফলাফল, ফি, বেতন ইত্যাদি একটি স্কুলের মূল বিষয়। আমরা এসব মূল ফিচারের পাশাপাশি আরও অনেক সুবিধাসহ সমাধান দিয়ে থাকি।'),
                    array('i-layers',
                        'We develop customized Enterprise Resources Planning. For any kind of Corporate Business or Industry.',
                        'আমরা যেকোনো ধরনের কর্পোরেট ব্যবসা বা শিল্পপ্রতিষ্ঠানের জন্য কাস্টমাইজড এন্টারপ্রাইজ রিসোর্স প্ল্যানিং তৈরি করি।'),
                    array('i-building',
                        'To manage Customer Information, Information of Flat, Plot Building etc. Notification of Customer Payments/Installments.',
                        'গ্রাহকের তথ্য এবং ফ্ল্যাট, প্লট, বিল্ডিং ইত্যাদির তথ্য ব্যবস্থাপনা। গ্রাহকের পেমেন্ট/কিস্তির নোটিফিকেশন।'),
                    array('i-clock',
                        'Garments, Hospitals etc. have complex employee duty management, like 3 schedules duty. We also provide solutions for this type of complexity.',
                        'গার্মেন্টস, হাসপাতাল ইত্যাদি প্রতিষ্ঠানে কর্মীদের ডিউটি ব্যবস্থাপনা বেশ জটিল, যেমন ৩ শিফটের ডিউটি। এ ধরনের জটিলতার জন্যও আমরা সমাধান দিয়ে থাকি।'),
                    array('i-shield',
                        'In a business, goods and services are often obtained on a regular basis. It can easily become a headache to keep account of all kinds of procurement. We provide softwares that can take care of the heavy bookkeeping and save resources.',
                        'ব্যবসায় নিয়মিতভাবেই বিভিন্ন পণ্য ও সেবা সংগ্রহ করতে হয়। সব ধরনের ক্রয়ের হিসাব রাখা সহজেই মাথাব্যথার কারণ হয়ে উঠতে পারে। আমরা এমন সফটওয়্যার দিই যা ভারী হিসাবরক্ষণের কাজ সামলে নেয় এবং সম্পদ সাশ্রয় করে।'),
                    array('i-users',
                        'Human Resource (HR) is one of the main workforces of an organization. Often it costs more resources like time, money or more human resource to manage the HR. We provide solutions that can handle HRM in an efficient way.',
                        'মানব সম্পদ (এইচআর) একটি প্রতিষ্ঠানের অন্যতম প্রধান কর্মশক্তি। প্রায়ই এইচআর ব্যবস্থাপনায় সময়, অর্থ বা আরও জনবলের মতো বাড়তি সম্পদ খরচ হয়। আমরা এমন সমাধান দিই যা দক্ষতার সাথে এইচআরএম পরিচালনা করতে পারে।'),
                );
                foreach ($productCards as $i => $pc):
                    $featured = $i === 0; ?>
                    <article class="product card spot<?= $featured ? ' product--featured' : '' ?>" data-reveal>
                        <span class="product__index"><?= sprintf('%02d', $i + 1) ?></span>
                        <span class="product__icon icon-chip"><svg class="ic"><use href="#<?= $pc[0] ?>"/></svg></span>
                        <h3 class="product__title"><?= t($products[$i][0], $products[$i][1]) ?></h3>
                        <?= tb('p', 'product__desc', $pc[1], $pc[2]) ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section (light) ======= -->
    <section class="section clients" id="clients">
        <div class="container">
            <div class="section-head section-head--center">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">03</span></p>
                <h2 class="section-title" data-split><?= t('Clients', 'ক্লায়েন্ট') ?></h2>
                <div data-reveal><?= tb('p', 'lead', 'A brief list of our clients.', 'আমাদের ক্লায়েন্টদের সংক্ষিপ্ত তালিকা।') ?></div>
            </div>
        </div>

        <div class="clients__rows">
            <?php
            // Order chosen by the owner (1-6 first); the rest follow.
            $clients = array(
                array('inst-111.jpg', 'Bangladesh Air Force Shaheen College Jashore'),
                array('inst-109.jpg', 'Dr. Abdur Razzak Municipal College, Jashore'),
                array('inst-110.jpg', 'College of Finance and Management'),
                array('inst-105.jpg', 'Pouro Model School and College, Jhenaidah'),
                array('inst-106.jpg', 'School of the Nation (SON)'),
                array('inst-164.jpg', 'Taora Azizur Rahman Secondary School'),
                array('inst-113.jpg', 'HS Coaching Center'),
                array('inst-130.jpg', 'Freedom International High School'),
                array('inst-159.jpg', 'Knowledge Inn International School & College'),
                array('inst-167.jpg', 'Cosmopolitan Laboratory School'),
                array('inst-169.jpg', 'Progoti Adorsho Madrasha'),
                array('inst-175.jpg', 'Gyangriha Ideal School'),
                array('inst-176.jpg', 'Shaheed Zia Girls High School and College'),
                array('inst-178.jpg', 'Three Language Cadet Madrasah'),
                array('inst-180.jpg', 'IQRA Cadet Madrasah'),
                array('inst-182.jpg', 'Jhaudia Mahabiddalay'),
                array('inst-183.jpg', 'Hamidpur Al-Hera College'),
                array('inst-184.jpg', 'Merciful International Madrasah'),
                array('dp-logo.jpg', 'DORPAN Properties Ltd.', true),
                array('manobkollan.png', 'Manobkollan Foundation'),
                array('nagorayon.png', 'Nagorayon Real Estate Ltd.', true),
                array('qrf-logo.png', 'Quran Research Foundation', true),
                array('buet-ce-logo.png', 'BUET Civil Engineering', true),
            );
            foreach (array(array_slice($clients, 0, 12), array_slice($clients, 12)) as $r => $row): ?>
                <div class="logo-row<?= $r ? ' logo-row--rev' : '' ?>">
                    <div class="logo-row__track">
                        <?php for ($copy = 0; $copy < 4; $copy++): foreach ($row as $c): ?>
                            <span class="logo-tile<?= empty($c[2]) ? '' : ' logo-tile--wide' ?>"<?= $copy ? ' data-clone aria-hidden="true"' : '' ?>><img src="assets/img/clients/<?= $c[0] ?>" alt="<?= $copy ? '' : htmlspecialchars($c[1]) ?>" loading="lazy"></span>
                        <?php endforeach; endfor; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Portfolio Section (dark) ======= -->
    <section class="section is-dark portfolio" id="portfolio">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">04</span> <?= t('Portfolio', 'পোর্টফোলিও') ?></p>
                <h2 class="section-title" data-split><?= t('Our Portfolio', 'আমাদের পোর্টফোলিও') ?></h2>
                <div data-reveal><?= tb('p', 'lead',
                    'Soft-Engine provides varieties of software solutions customized to your needs.',
                    'সফট-ইঞ্জিন আপনার প্রয়োজন অনুযায়ী কাস্টমাইজড নানা ধরনের সফটওয়্যার সল্যুশন দিয়ে থাকে।') ?></div>
            </div>

            <div class="filters" role="group" <?= ta('aria-label', 'Portfolio filter', 'পোর্টফোলিও ফিল্টার') ?> data-reveal>
                <button class="filters__btn is-active" type="button" data-filter="*" aria-pressed="true"><?= t('All', 'সব') ?></button>
                <button class="filters__btn" type="button" data-filter="web" aria-pressed="false"><?= t('Web', 'ওয়েব') ?></button>
                <button class="filters__btn" type="button" data-filter="app" aria-pressed="false"><?= t('Android', 'অ্যান্ড্রয়েড') ?></button>
                <span class="filters__pill" aria-hidden="true"></span>
            </div>

            <div class="works">
                <?php
                $works = array(
                    array('web', 'assets/img/portfolio/schoolbell.svg', 'assets/img/portfolio/schoolbell-stacked.svg', 'SchoolBell', 'School Management', 'স্কুল ম্যানেজমেন্ট', true),
                    array('web', 'assets/img/portfolio/eg-accounts.jpg', 'assets/img/portfolio/details/eg-accounts.png', 'egAccounts', 'Accounting Solution', 'অ্যাকাউন্টিং সল্যুশন'),
                    array('web', 'assets/img/portfolio/soft_prism.png', 'assets/img/portfolio/soft_prism.png', 'Prism', 'Customized Accounting Software', 'কাস্টমাইজড অ্যাকাউন্টিং সফটওয়্যার'),
                    array('web', 'assets/img/portfolio/e-vision.jpg', 'assets/img/portfolio/e-vision.jpg', 'eVision', 'Organizational Management', 'প্রাতিষ্ঠানিক ব্যবস্থাপনা'),
                    array('web', 'assets/img/portfolio/mirror2.jpg', 'assets/img/portfolio/mirror2.jpg', 'Mirror2', 'HR & Financial Managemnet', 'এইচআর ও আর্থিক ব্যবস্থাপনা'),
                    array('app', 'assets/img/portfolio/lenden.jpg', 'assets/img/portfolio/lenden.jpg', 'Len-Den', 'Financial Management', 'আর্থিক ব্যবস্থাপনা'),
                    array('app', 'assets/img/portfolio/sbell.jpg', 'assets/img/portfolio/sbell.jpg', 'Smart Bell', 'Utility', 'ইউটিলিটি'),
                );
                foreach ($works as $w):
                    $isApp = $w[0] === 'app';
                    $isLogo = !empty($w[6]);
                    $title = htmlspecialchars($w[3]); ?>
                    <article class="work" data-cat="<?= $w[0] ?>" data-reveal>
                        <button class="work__media<?= $isLogo ? ' work__media--logo' : '' ?>" type="button"
                                data-lightbox="<?= $w[2] ?>" data-title="<?= $title ?>"
                                data-sub-en="<?= htmlspecialchars($w[4]) ?>" data-sub-bn="<?= htmlspecialchars($w[5]) ?>"
                                <?= ta('aria-label', 'Preview ' . $w[3], $w[3] . ' প্রিভিউ') ?>>
                            <img src="<?= $w[1] ?>" alt="<?= $title . ' &mdash; ' . htmlspecialchars($w[4]) ?>" loading="lazy" width="843" height="403">
                            <span class="work__zoom" aria-hidden="true"><svg class="ic"><use href="#i-zoom"/></svg></span>
                        </button>
                        <div class="work__info">
                            <div>
                                <h3><?= $title ?></h3>
                                <?= tb('p', '', htmlspecialchars($w[4]), $w[5]) ?>
                            </div>
                            <span class="work__tag<?= $isApp ? ' work__tag--app' : '' ?>"><?= $isApp ? t('Android', 'অ্যান্ড্রয়েড') : t('Web', 'ওয়েব') ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

<?php
    if (!function_exists('se_render_people')) {
        /** One card per person: array(photo, name, role EN, role BN [, github, linkedin]). */
        function se_render_people($people)
        {
            foreach ($people as $p) {
                $name = htmlspecialchars($p[1]);
                echo '<article class="person card" data-reveal data-tilt>';
                echo '<div class="person__photo"><img src="' . $p[0] . '" alt="' . $name . '" loading="lazy" decoding="async"></div>';
                echo '<div class="person__body"><h3 class="person__name">' . $name . '</h3>';
                echo tb('p', 'person__role', htmlspecialchars($p[2]), $p[3]);
                if (!empty($p[4]) || !empty($p[5])) {
                    echo '<div class="person__social">';
                    if (!empty($p[4])) echo '<a href="' . $p[4] . '" target="_blank" rel="noopener" aria-label="GitHub"><svg class="ic"><use href="#i-github"/></svg></a>';
                    if (!empty($p[5])) echo '<a href="' . $p[5] . '" target="_blank" rel="noopener" aria-label="LinkedIn"><svg class="ic"><use href="#i-linkedin"/></svg></a>';
                    echo '</div>';
                }
                echo '</div></article>';
            }
        }
    }
    ?>

    <!-- ======= Management Section (light) ======= -->
    <section class="section is-white" id="mgt">
        <div class="container">
            <div class="section-head section-head--center">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">05</span></p>
                <h2 class="section-title" data-split><?= t('Management', 'ব্যবস্থাপনা') ?></h2>
            </div>
            <div class="people">
                <?php se_render_people(array(
                    array('assets/img/mgt/liaz.jpg', 'Muhammad Tajul Islam', 'Manging Director', 'ব্যবস্থাপনা পরিচালক'),
                    array('assets/img/mgt/safiur.jpg', 'Safiur Rahman Khan', 'Manager (Operations & Oversight)', 'ম্যানেজার (অপারেশনস ও তত্ত্বাবধান)'),
                    array('assets/img/teams/mahfuz.jpg', 'Mahfuj Mamun', 'Sr. Executive Officer (Business Promotion & Support)', 'সিনিয়র এক্সিকিউটিভ অফিসার (বিজনেস প্রমোশন ও সাপোর্ট)'),
                    array('assets/img/teams/rikon.jpg', 'Roknuzzaman Rikon', 'Executive Officer (Business Promotion & Support)', 'এক্সিকিউটিভ অফিসার (বিজনেস প্রমোশন ও সাপোর্ট)'),
                    array('assets/img/mgt/no_avatar.jpg', 'Jan-E-Alam', 'Manager (Accounts)', 'ম্যানেজার (হিসাব)'),
                    array('assets/img/mgt/shohag.jpg', 'Abu Hossain', 'Executive Officer (Business Promotion & Support)', 'এক্সিকিউটিভ অফিসার (বিজনেস প্রমোশন ও সাপোর্ট)'),
                )); ?>
            </div>
        </div>
    </section><!-- End Management Section -->

    <!-- ======= Team Section (light) ======= -->
    <section class="section is-white section--tight-top" id="team">
        <div class="container">
            <div class="section-head section-head--center">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">06</span> <?= t('Team', 'টিম') ?></p>
                <h2 class="section-title" data-split><?= t('Tech Team', 'টেক টিম') ?></h2>
            </div>
            <div class="people">
                <?php se_render_people(array(
                    array('assets/img/teams/shabab-ahmed.jpg', 'Shabab Ahmed', 'Lead Software Engineer', 'লিড সফটওয়্যার ইঞ্জিনিয়ার', 'https://github.com/shabab239', 'https://linkedin.com/in/shabab239'),
                    array('assets/img/teams/sakib.jpg', 'Nazmus Sakib', 'Software Developer', 'সফটওয়্যার ডেভেলপার', 'https://github.com/sm-nazmus-sakib'),
                    array('assets/img/teams/alfaz.jpg', 'Alfaz Hossain', 'Analyst Programmer', 'অ্যানালিস্ট প্রোগ্রামার'),
                    array('assets/img/teams/harun.jpg', 'Harunor Roshid', 'Network Administrator', 'নেটওয়ার্ক অ্যাডমিনিস্ট্রেটর'),
                    array('assets/img/teams/mehedi.jpg', 'Md. Mehedi Hassan', 'Database Administrator', 'ডাটাবেজ অ্যাডমিনিস্ট্রেটর'),
                    array('assets/img/teams/eleas.jpg', 'M. E. Khandaker', 'Database Administrator', 'ডাটাবেজ অ্যাডমিনিস্ট্রেটর'),
                )); ?>
            </div>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section (dark) ======= -->
    <section class="section is-dark contact" id="contact">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">07</span> <?= t('Contact', 'যোগাযোগ') ?></p>
                <h2 class="section-title" data-split><?= t('Contact Us', 'যোগাযোগ করুন') ?></h2>
                <div data-reveal><?= tb('p', 'lead', 'You can reach us by using any of the following methods:', 'নিচের যেকোনো মাধ্যমে আমাদের সাথে যোগাযোগ করতে পারেন:') ?></div>
            </div>

            <div class="contact__grid">
                <div class="contact__cards">
                    <div class="c-card card spot" data-reveal>
                        <span class="c-card__icon icon-chip"><svg class="ic"><use href="#i-pin"/></svg></span>
                        <h3><?= t('Corporate Office', 'কর্পোরেট অফিস') ?></h3>
                        <?= tb('address', '',
                            'House 75/5/1 (Flat A4)<br>East Maniknagar<br>Jatrabari<br>Dhaka 1203',
                            'বাসা ৭৫/৫/১ (ফ্ল্যাট এ৪)<br>পূর্ব মানিকনগর<br>যাত্রাবাড়ী<br>ঢাকা ১২০৩') ?>
                    </div>

                    <div class="c-card card spot" data-reveal>
                        <span class="c-card__icon icon-chip"><svg class="ic"><use href="#i-pin"/></svg></span>
                        <h3><?= t('Site Office', 'সাইট অফিস') ?></h3>
                        <?= tb('address', '',
                            'House Chayanir 490 (Flat A2)<br>Basundhara Riverview<br>Hasnabad, South Keraniganj<br>Dhaka 1321',
                            'বাসা ছায়ানীড় ৪৯০ (ফ্ল্যাট এ২)<br>বসুন্ধরা রিভারভিউ<br>হাসনাবাদ, দক্ষিণ কেরানীগঞ্জ<br>ঢাকা ১৩২১') ?>
                    </div>

                    <div class="c-card card spot" data-reveal>
                        <span class="c-card__icon icon-chip"><svg class="ic"><use href="#i-whatsapp"/></svg></span>
                        <div class="c-card__sub">
                            <h3><?= t('WhatsApp Us', 'হোয়াটসঅ্যাপ করুন') ?></h3>
                            <p><a href="https://wa.me/+8801701757796" target="_blank" rel="noopener">+88 01701-757796</a></p>
                        </div>
                        <div class="c-card__sub">
                            <h3><?= t('Call Us', 'কল করুন') ?></h3>
                            <p><a href="tel:+8801701757796" target="_blank">+88 01701-757796</a></p>
                            <p><a href="tel:+8801310593131" target="_blank">+88 01310-593131</a></p>
                        </div>
                    </div>

                    <div class="c-card card spot" data-reveal>
                        <span class="c-card__icon icon-chip"><svg class="ic"><use href="#i-mail"/></svg></span>
                        <h3><?= t('Email', 'ইমেইল') ?></h3>
                        <p><a href="mailto:info@sebd.co" target="_blank">info@sebd.co</a></p>
                        <p><a href="mailto:job@sebd.co" target="_blank">job@sebd.co</a></p>
                        <p><a href="mailto:softengineltd@gmail.com" target="_blank">softengineltd<wbr>@gmail.com</a></p>
                        <p><a href="mailto:soft.engine.404@gmail.com" target="_blank">soft.engine.404<wbr>@gmail.com</a></p>
                    </div>
                </div>

                <div class="map" data-reveal>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2972.548678215507!2d90.43997966577786!3d23.723553765928152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b96b316d2883%3A0x7967f4de8790f296!2sSoft%20Engine%20Ltd.!5e0!3m2!1sen!2sbd!4v1612077868310!5m2!1sen!2sbd"
                            <?= ta('title', 'Soft Engine Ltd. on Google Maps', 'গুগল ম্যাপে সফট ইঞ্জিন লিমিটেড') ?>
                            loading="lazy" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Payment & Policies (light) ======= -->
    <section class="section" id="pay_partner">
        <div class="container">
            <div class="section-head">
                <p class="eyebrow" data-reveal><span class="eyebrow__num">08</span></p>
                <h2 class="section-title" data-split><?= t('Payment &amp; Policies', 'পেমেন্ট ও নীতিমালা') ?></h2>
            </div>

            <div class="policies">
                <button type="button" class="policy-btn" data-dialog="refundModal" data-reveal><?= t('Refund &amp; Cancellation Policy', 'রিফান্ড ও বাতিলকরণ নীতিমালা') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
                <button type="button" class="policy-btn" data-dialog="privacyModal" data-reveal><?= t('Privacy Policy', 'গোপনীয়তা নীতি') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
                <button type="button" class="policy-btn" data-dialog="termsModal" data-reveal><?= t('Terms &amp; Conditions', 'শর্তাবলি') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
                <button type="button" class="policy-btn" data-dialog="paySecModal" data-reveal><?= t('Payment Security', 'পেমেন্ট নিরাপত্তা') ?> <svg class="ic"><use href="#i-arrow-up-right"/></svg></button>
            </div>

            <div class="paybox" data-reveal>
                <img src="assets/img/aamarPay.jpg" alt="aamarPay" loading="lazy" width="1600" height="128">
            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer (dark) ======= -->
<footer class="site-footer is-dark" id="footer">
    <div class="container">
        <div class="footer__brand" aria-hidden="true">
            <span class="footer__logo">
                <span class="footer__big">Soft Engine Ltd.<span class="footer__fill">Soft Engine Ltd.</span></span>
                <span class="footer__tag">Soft Style Everywhere</span>
            </span>
        </div>
        <div class="footer__row">
            <div class="copyright"><?= t('&copy; Copyright <strong>Soft-Engine</strong>. All Rights Reserved', '&copy; কপিরাইট <strong>সফট-ইঞ্জিন</strong>। সর্বস্বত্ব সংরক্ষিত।') ?></div>
            <nav class="footer__nav" <?= ta('aria-label', 'Footer', 'ফুটার মেনু') ?>>
                <a href="#about"><?= t('About Us', 'আমাদের সম্পর্কে') ?></a>
                <a href="#services"><?= t('Products', 'পণ্যসমূহ') ?></a>
                <a href="#portfolio"><?= t('Portfolio', 'পোর্টফোলিও') ?></a>
                <a href="#mgt"><?= t('Management', 'ব্যবস্থাপনা') ?></a>
                <a href="#team"><?= t('Team', 'টিম') ?></a>
                <a href="#contact"><?= t('Contact', 'যোগাযোগ') ?></a>
            </nav>
            <div class="footer__social">
                <a href="https://www.facebook.com/softengineltd" target="_blank" rel="noopener" aria-label="Facebook"><svg class="ic"><use href="#i-facebook"/></svg></a>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="https://wa.me/+8801701757796" class="float-wa" target="_blank" rel="noopener" aria-label="WhatsApp">
    <svg class="ic"><use href="#i-whatsapp"/></svg>
</a>
<a href="#home" class="to-top" <?= ta('aria-label', 'Back to top', 'উপরে যান') ?>>
    <svg class="to-top__ring" viewBox="0 0 56 56" aria-hidden="true"><circle cx="28" cy="28" r="26"/></svg>
    <svg class="ic to-top__arrow"><use href="#i-arrow-up"/></svg>
</a>

<!-- Alert (out of stock, payment result) -->
<dialog class="dialog dialog--alert" id="alertDialog" aria-labelledby="alertTitle">
    <div class="dialog__panel">
        <header class="dialog__head">
            <h3 class="dialog__title" id="alertTitle"></h3>
            <button type="button" class="dialog__x" data-close <?= ta('aria-label', 'Close', 'বন্ধ করুন') ?>>&times;</button>
        </header>
        <div class="dialog__body" id="alertBody"></div>
        <footer class="dialog__foot">
            <button type="button" class="btn btn--primary btn--sm" id="alertOk" data-close>OK</button>
        </footer>
    </div>
</dialog>

<!-- Portfolio preview -->
<dialog class="lightbox" id="lightbox" <?= ta('aria-label', 'Preview', 'প্রিভিউ') ?>>
    <button type="button" class="lightbox__btn lightbox__close" data-close <?= ta('aria-label', 'Close', 'বন্ধ করুন') ?>>&times;</button>
    <button type="button" class="lightbox__btn lightbox__prev" data-lb-prev <?= ta('aria-label', 'Previous', 'আগেরটি') ?>><svg class="ic"><use href="#i-chevron-left"/></svg></button>
    <button type="button" class="lightbox__btn lightbox__next" data-lb-next <?= ta('aria-label', 'Next', 'পরেরটি') ?>><svg class="ic"><use href="#i-chevron-right"/></svg></button>
    <figure class="lightbox__figure"><img class="lightbox__img" id="lightboxImg" alt=""></figure>
    <p class="lightbox__cap" id="lightboxCap"></p>
</dialog>

<?php include __DIR__ . '/modals.php'; ?>

<!-- Scripts -->
<script src="assets/vendor/gsap/gsap.min.js"></script>
<script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
<script src="assets/vendor/gsap/SplitText.min.js"></script>
<script src="assets/vendor/gsap/Flip.min.js"></script>
<script src="assets/vendor/lenis/lenis.min.js"></script>
<?php
// Payment gateway return: P2P.php redirects here with ?message=Title~Content.
// Encoded as JSON and shown with textContent, so the query string can never run as script.
$seMessage = isset($_GET['message']) ? (string)$_GET['message'] : '';
if ($_SERVER['REQUEST_METHOD'] === 'GET' && strlen($seMessage) > 0) {
    $seParts = explode('~', $seMessage);
    $seAlert = array('title' => $seParts[0], 'content' => isset($seParts[1]) ? $seParts[1] : '');
    echo '<script>window.SE_ALERT = ' . json_encode($seAlert, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) . ';</script>' . "\n";
}
?>
<script src="assets/js/site/core.js?v=2"></script>
<script src="assets/js/site/fx.js?v=2"></script>

</body>

</html>
