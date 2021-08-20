<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <?php wp_head(); ?>
    <title>EIWA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</head>

<body>
    <header class="font-16">
        <a href="<?php echo home_url(); ?>/" class="nav__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
        </a>
        <div class="nav-right">
            <div class="nav__group">
                <div class="nav__link">
                    <a href="<?php echo home_url(); ?>/company_profile" class="nav__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
                        <p>事業案内</p>
                    </a>
                    <a href="<?php echo home_url(); ?>/company" class="nav__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
                        <p>会社概要</p>
                    </a>
                    <a href="<?php echo home_url(); ?>/info" class="nav__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
                        <p>お知らせ</p>
                    </a>
                    <a href="<?php echo home_url(); ?>/recruit" class="nav__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="">
                        <p>採用情報</p>
                    </a>
                </div>
                <div class="nav__social">
                    <a href="#" class="social__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.png" alt="">
                    </a>
                    <a href="#" class="social__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt="">
                    </a>
                </div>
            </div>
            <a href="<?php echo home_url(); ?>/contact" class="nav__contact btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">
                <p>お問い合わせ</p>
            </a>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <p>MENU</p>
            </div>
        </div>
    </header>