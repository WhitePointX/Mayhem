<!DOCTYPE HTML>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/min/style.css">
</head>
<body>
<header class="siteHeader">

<div class="fixed">
    <div class="container">


        <div id="logo">
            <a href="<?php bloginfo('wpurl'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="">
            </a>
        </div>

        <div class="header_contact">
            <a href="#">  <i class="icon-facebook"></i></a>

            <a href="#">  <i class="icon-twitter"></i></a>
        </div>



        <nav class="mainNav" role="navigation">
            <label for="menuToggle"><i class="icon-menu2"></i></label>
        <input type="checkbox" name="menuToggle" id="menuToggle">

            <div class="nav">

                <div class="header_contact_resp">
                    <a href="#">  <i class="icon-facebook"></i></a>

                    <a href="#">  <i class="icon-twitter"></i></a>
                </div>

                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
        </nav>

    </div>
</div>

</header>
<div class="clean_fixed"></div>