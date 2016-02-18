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


<?php if( have_rows('header_contact_icons', 'options') ): ?>

    <div class="header_contact">

    <?php while( have_rows('header_contact_icons', 'options') ): the_row(); ?>


        <a href="<?php the_sub_field('url'); ?>" target="_blank">  <i class="icon-<?php the_sub_field('icon'); ?>"></i></a>

    <?php endwhile; ?>

    </div>

<?php endif; ?>   
            

          
        



        <nav class="mainNav" role="navigation">
            <label for="menuToggle"><i class="icon-menu2"></i></label>
        <input type="checkbox" name="menuToggle" id="menuToggle">

            <div class="nav">

                <?php if( have_rows('header_contact_icons', 'options') ): ?>

    <div class="header_contact_resp">

    <?php while( have_rows('header_contact_icons', 'options') ): the_row(); ?>


        <a href="<?php the_sub_field('url'); ?>" target="_blank">  <i class="icon-<?php the_sub_field('icon'); ?>"></i></a>

    <?php endwhile; ?>

    </div>

<?php endif; ?>  

                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
        </nav>

    </div>
</div>

</header>
<div class="clean_fixed"></div>